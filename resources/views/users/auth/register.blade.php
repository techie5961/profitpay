@extends('layout.users.auth')
@section('title')
    Register
@endsection
@section('main')
     <section class="column p-10 w-full flex-auto justify-center">
        <form action="{{ url('users/post/register/process') }}" method="POST" onsubmit="PostRequest(event,this,MyFunc.call_back)" class="w-full border-1 border-color-silver max-w-500 align-center br-10 bg-white  column g-5">
           <div class="column w-full p-10 align-center g-5">
             <img src="{{ asset('favicon/logo.png?v=1.2') }}" class="w-quarter" alt="">
            <strong class="c-secondary desc">Join {{  config('app.name')}}</strong>
            @isset($ref)
                @if ($ref !== '')
                <div class="bg-green-transparent no-select p-10 bold br-10 border-1 border-color-green c-green">
                   🎉 You are joining under {{ ucfirst($ref) }}
                </div>
                    
                @endif
            @endisset
          <div class="w-full column g-2">
             <input type="hidden" class="input" name="_token" value="{{ csrf_token() }}">
            <label for="" class="m-right-auto">Full Name</label>
            <div class="cont w-full h-50 br-10 border-1 border-color-silver">
                <input type="text" placeholder="Enter your Full Name" name="name" class="inp input required w-full h-full no-border bg-transparent br-10">
            </div>
            <label for="" class="m-right-auto m-top-10">Username</label>
            <div class="cont w-full h-50 br-10 border-1 border-color-silver">
                <input type="text" placeholder="Enter desired username" name="username" class="inp input required w-full h-full no-border bg-transparent br-10">
            </div>
             <label for="" class="m-right-auto m-top-10">Email Address</label>
            <div class="cont w-full h-50 br-10 border-1 border-color-silver">
                <input type="email" placeholder="Enter email address" name="email" class="inp input required w-full h-full no-border bg-transparent br-10">
            </div>
             <label for="" class="m-right-auto m-top-10">Phone Number</label>
            <div class="cont w-full h-50 br-10 border-1 border-color-silver">
                <input type="number" placeholder="Enter phone number" name="phone" class="inp input required w-full h-full no-border bg-transparent br-10">
            </div>
             <label for="" class="m-right-auto m-top-10">Select Package</label>
            <div class="cont w-full h-50 br-10 border-1 border-color-silver">
              <select name="package"  class="inp input required w-full h-full no-border bg-transparent br-10" id="">
                <option value="" selected disabled>Choose Package...</option>
                @if (!$pkg->isEmpty())
                    @foreach ($pkg as $data)
                        <option value="{{ $data->id ?? '' }}">{{ $data->name ?? '' }}</option>
                    @endforeach
                @endif
              </select>
            </div>
            @isset($ref)
                @if ($ref !== '')
                     <label for="" class="m-right-auto display-none m-top-10">Referral Username</label>
            <div class="cont w-full h-50 br-10 display-none border-1 border-color-silver">
                <input type="text" value="{{ $ref }}" readonly placeholder="Referral Username" name="ref" class="inp input required w-full h-full no-border bg-transparent br-10">
            </div>
                @endif
            @endisset
             <label for="" class="m-right-auto m-top-10">Coupon Code</label>
            <div class="cont p-right-10 row align-center space-between w-full h-50 br-10 border-1 border-color-silver">
                <input type="text" placeholder="Enter coupon code" name="coupon" class="inp input required w-full h-full no-border bg-transparent br-10">
            <div class="p-5 br-5 ws-nowrap no-select pointer clip-5 c-white bold bg-green">Buy Coupon</div>
            </div>
              <label for="" class="m-right-auto m-top-10">Password</label>
            <div class="cont w-full h-50 br-10 border-1 border-color-silver">
                <input type="password" placeholder="Enter Account Password" name="password" class="inp input required w-full h-full no-border bg-transparent br-10">
            </div>

          </div>
            <label class="m-x-auto no-select row align-center">
                <input style="transform: scale(0.8)" type="checkbox">
                I have agreed to the <a href="" class="c-green">Terms & Conditions</a>
            </label>
            <button class="post bg-secondary secondary-text w-full bold"><span>Sign Up</span></button>
            <div class="m-x-auto no-select row align-center">
               
                Already have an account? <a href="{{ url('login') }}" class="c-green"> Login</a>
            </div>
           </div>
        </form>
    </section>
@endsection
@section('js')
    <script class="js">
        window.MyFunc = {
            call_back : function(response){
               let data=JSON.parse(response);
               if(data.status == 'success'){
                window.location.href=data.url;
               } 
            }
        }
    </script>

@endsection