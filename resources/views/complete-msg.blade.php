@extends('layouts.homeLayout')
@push('custom-css')
<style>
#check-group {
    animation: 0.32s ease-in-out 1.03s check-group;
    transform-origin: center;
}

#check-group #check {
    animation: 0.34s cubic-bezier(0.65, 0, 1, 1) 0.8s forwards check;
    stroke-dasharray: 0, 75px;
    stroke-linecap: round;
    stroke-linejoin: round;
}

#check-group #outline {
    animation: 0.38s ease-in outline;
    transform: rotate(0deg);
    transform-origin: center;
}

#check-group #white-circle {
    animation: 0.35s ease-in 0.35s forwards circle;
    transform: none;
    transform-origin: center;
}

@keyframes outline {
  from {
    stroke-dasharray: 0, 345.576px;
  }
  to {
    stroke-dasharray: 345.576px, 345.576px;
  }
}
@keyframes circle {
  from {
    transform: scale(1);
  }
  to {
    transform: scale(0);
  }
}
@keyframes check {
  from {
    stroke-dasharray: 0, 75px;
  }
  to {
    stroke-dasharray: 75px, 75px;
  }
}
@keyframes check-group {
  from {
    transform: scale(1);
  }
  50% {
    transform: scale(1.09);
  }
  to {
    transform: scale(1);
  }
}
</style>

@endpush
@section('content')
<div class="vh-100 d-lg-flex justify-content-lg-center align-items-lg-center">
    <div class=" card w-md-50 mx-auto">
        <div class="card-body">
           <div class="mb-4 text-center">
               <svg
       width="115px"
       height="115px"
       viewBox="0 0 133 133"
       version="1.1"
       xmlns="http://www.w3.org/2000/svg"
       xmlns:xlink="http://www.w3.org/1999/xlink"
    >
       <g
           id="check-group"
           stroke="none"
           stroke-width="1"
           fill="none"
           fill-rule="evenodd"
       >
               <circle
               id="filled-circle"
               fill="#07b481"
               cx="66.5"
               cy="66.5"
               r="54.5"
           />
           <circle
               id="white-circle"
               fill="#FFFFFF"
               cx="66.5"
               cy="66.5"
               r="55.5"
           />
           <circle
               id="outline"
               stroke="#07b481"
               stroke-width="4"
               cx="66.5"
               cy="66.5"
               r="54.5"
           />
           <polyline
               id="check"
               stroke="#FFFFFF"
               stroke-width="5.5"
               points="41 70 56 85 92 49"
           />
       </g>
    </svg>
           </div>
           <div class="text-center">
               <h1>Thank You For Order !</h1>
               <p>We'll call you later, </p>
               <a href="{{url('/')}}" class="btn btn-primary">Back Home</a>
           </div>
        </div>
    </div>
@endsection
