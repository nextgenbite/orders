<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Online Order form</title>

    <!-- Fonts -->


    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Plugins -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" /></head>

<body class="bg-info bg-opacity-50">


    <div class="container card shadow mt-4">
        <div class="card-header">
            <h1 class="text-center text-uppercase text-success text-bold">Online Order form</h1>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
        <div class="card-body">
            <form class="row g-3  " method="post" action="{{ route('order.store') }}">
                @csrf
                <h3>Product Information:</h3>
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputValue" name="product_name"
                        placeholder="Product Name/Product Model No." required>
                    <label for="floatingInputValue">Product Name/Product Model No. <span
                            class="text-danger text-bold">*</span></label>
                </div>
                @error('product_name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <div class="form-floating">
                    <input type="number" class="form-control" id="floatingInputValue" name="quantity"
                        placeholder="Quantity/কত পিছ ?" required>
                    <label for="floatingInputValue">Quantity/পরিমাণ <span class="text-danger text-bold">*</span></label>
                </div>
                @error('quantity')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <div class="form-floating">
                    <input type="number" class="form-control" id="floatingInputValue" name="price"
                        placeholder="Total Price" required>
                    <label for="floatingInputValue">Total Price <span class="text-danger text-bold">*</span></label>
                </div>
                @error('price')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                <h3>Customer Information:</h3>
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputValue" name="name" placeholder="name"
                        required>
                    <label for="floatingInputValue">Name/নাম <span class="text-danger text-bold">*</span></label>
                </div>
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <div class="form-floating">
                    <input type="tel" class="form-control" id="floatingInputValue" name="mobile_number"
                        placeholder="mobile number" required>
                    <label for="floatingInputValue">Mobile Number/ মোবাইল নাম্বার <span
                            class="text-danger text-bold">*</span></label>
                </div>
                @error('mobile_number')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputValue" name="district"
                        placeholder="District" required>
                    <label for="floatingInputValue">District/জেলা <span class="text-danger text-bold">*</span></label>
                </div>
                @error('district')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputValue" name="thana"
                        placeholder="Thana" required>
                    <label for="floatingInputValue">Police Station / থানা <span
                            class="text-danger text-bold">*</span></label>
                </div>
                @error('thana')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputValue" name="village"
                        placeholder="Local area or Village/গ্রাম" required>
                    <label for="floatingInputValue">Local area or Village/গ্রাম <span
                            class="text-danger text-bold">*</span></label>
                </div>
                @error('village')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputValue" name="address"
                        placeholder="Block, Road, House">
                    <label for="floatingInputValue">Block, Road, House <small class="text-secondary h6">(If
                            Available/যদি থাকে )</small></label>
                </div>
                @error('address')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                {{-- <div class="col-md-6">
     <label for="inputState" for="floatingInputValue">State</label>
     <select id="inputState" class="form-select">
       <option selected>Bag / Travel Bag / Backpack /  Trolley / Luggage</option>
       <option>...</option>
     </select>
   </div> --}}

                <button type="submit" class="btn btn-primary btn-block text-center">Submit</button>

            </form>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script>
   @if(Session::has('message'))
   var type = "{{ Session::get('alert-type','info') }}"
   switch(type){
      case 'info':
      toastr.info(" {{ Session::get('message') }} ");
      break;

      case 'success':
      toastr.success(" {{ Session::get('message') }} ");
      break;

      case 'warning':
      toastr.warning(" {{ Session::get('message') }} ");
      break;

      case 'error':
      toastr.error(" {{ Session::get('message') }} ");
      break;
   }
   @endif
  </script>
</body>

</html>
