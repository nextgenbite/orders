<!DOCTYPE html>
<html>
<head>
    <title>Invoice</title>
    <style>
         html {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 20px;
        background-color: #f5f5f5;
    }

    .invoice {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        padding: 40px;
        color: #555;
    }

    .invoice-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 40px;
    }

    .invoice-title {
        font-size: 40px;
        font-weight: bold;
        color: darkblue;
        text-transform: uppercase;
    }

    .invoice-meta {
        font-size: 16px;
        color: #777;
    }

    .invoice-table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 40px;
    }

    .invoice-table th, .invoice-table td {
        padding: 20px;
        border-bottom: 1px solid #ddd;
    }

    .invoice-table th {
        background-color: darkblue;
        font-weight: bold;
        text-align: left;
        color: white;
        text-transform: uppercase;
    }

    .invoice-subtotal {
        margin-top: 40px;
        display: flex;
        justify-content: flex-end;
        align-items: center;
        font-weight: bold;
        font-size: 20px;
        text-align: right;
    }

    .invoice-subtotal span {
        margin-left: 10px;
        color: #333;
    }

    .invoice-total {
        margin-top: 40px;
        display: flex;
        justify-content: flex-end;
        align-items: center;
        font-size: 28px;
        font-weight: bold;
        color: #333;
        text-align: right;
    }

    .invoice-total span {
        margin-left: 10px;
        color: #333;
    }

    .invoice-note {
        margin-top: 40px;
        color: #777;
    }.invoice-footer{
        margin-top: 400px;
    }

    * {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 46%;
  /* padding: 10px; */

}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
    </style>
</head>
<body>

    <div class="invoice">
        <div class="invoice-header">
            <div class="invoice-title">Invoice</div>
 <div class="row">
    <div class="invoice-meta column">
        <div>Customer: <strong> {{ $name }}</strong></div>


        <div>Block, Road, House: {{ $address }} ,</div>
        <div>Local area or Village: {{$village}} ,</div>
        <div>Police Station: {{$thana}} ,</div>
        <div>District:{{ $district}}.</div>
    </div>

    <div class="invoice-meta column" style="margin-left:80px">
        <div>Date: {{ $date }}</div>
        <div>Mobile Number: {{ $mobile_number }}</div>
    </div>
 </div>

        </div>

        <table class="invoice-table">
            <tr>
                <th>Product Name/Model No.</th>
                <th>Quantity</th>
                <th>Price</th>
                {{-- <th>Total</th> --}}
            </tr>

            <tr>
                <td>{{ $product_name }}</td>
                <td>{{ $quantity }}</td>
                <td>{{ $price }}</td>
                {{-- <td>{{ $price }}</td> --}}
            </tr>
        </table>

        {{-- <div class="invoice-subtotal">
            Subtotal: <span>{{ $price }}</span>
        </div> --}}

        <div class="invoice-total">
            Total: <span>{{ $price }}</span>
        </div>

    </div>
</body>
</html>
