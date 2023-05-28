<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use MPDF;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
        return view('dashboard', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'name' => 'required',
            'mobile_number' => 'required',
        ]);
        $input = $request->all();
        $input['date'] = date('d-m-Y');
        Order::create($input);
        $notification = array(
            'message' => 'Order Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order  $order)
    {


        $data = [
            'invoice_number' => 'INV-001',
            'date' => date('Y-m-d'),
            'customer' => 'John Doe',
            'items' => [
                [
                    'description' => 'Product A',
                    'quantity' => 2,
                    'price' => 10,
                    'total' => 20
                ],
                [
                    'description' => 'Product B',
                    'quantity' => 3,
                    'price' => 15,
                    'total' => 45
                ]
            ],
            'subtotal' => 65,
            'tax' => 5,
            'total' => 70
        ];

        $pdf = Mpdf::loadView('invoice', $order);
        return $pdf->stream('invoice.pdf');
        // return view('order-view', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();

        $notification = array(
            'message' => 'Order Delete Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }

    public function viewPdf()
    {
        $data = [
            'invoice_number' => 'INV-001',
            'date' => date('Y-m-d'),
            'customer' => 'John Doe',
            'items' => [
                [
                    'description' => 'Product A',
                    'quantity' => 2,
                    'price' => 10,
                    'total' => 20
                ],
                [
                    'description' => 'Product B',
                    'quantity' => 3,
                    'price' => 15,
                    'total' => 45
                ]
            ],
            'subtotal' => 65,
            'tax' => 5,
            'total' => 70
        ];

        $pdf = Mpdf::loadView('invoice', $data);
        return $pdf->stream('invoice.pdf');
    }
}
