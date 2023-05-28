<x-app-layout>

<div class="col-12">
    <div class="container pt-5">
        <div class="card shadow-lg">
            <h1 class="text-center text-bold card-header my-3 h1">Dashboard</h1>
            <div class="card-body table-responsive">
                <table id="example" class="table table-striped " style="width:100%">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Mobile no.</th>
                            <th>Product Name/Model no.</th>
                            <th>Quantity</th>
                            <th>Total Price</th>
                            <th>Details</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($orders as $order)

                        <tr>
                            <td>{{$order->date}}</td>
                            <td>{{$order->mobile_number}}</td>
                            <td>{{$order->product_name}}</td>
                            <td>{{$order->quantity}}</td>
                            <td>{{$order->price}}</td>
                            <td><a href="{{ Route('order.view',$order) }}" class="btn btn-info btn-sm" title="Edit Data">View </a></td>
                            <td>

                                    <form action="{{Route('order.destroy', $order)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                    <button class="btn btn-danger btn-sm" title="Delete Now" type="submit"> Delete</button>
                                    </form>
                            </td>
                        </tr>
                        @empty
                        <td colspan="8" class="text-center text-bold text-warning">No Data Found</td>
                        @endforelse

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Date</th>
                            <th>Mobile no.</th>
                            <th>Product Name/Model no.</th>
                            <th>Quantity</th>
                            <th>Total Price</th>
                            <th>Details</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
    <script>
   $(document).ready(function() {
    $('#example').DataTable( {
        responsive: true,
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
    </script>
</x-app-layout>
