@extends('layout.users.auth')
@section('title')
    Register
@endsection
@section('main')
     <section class="column p-10  w-full flex-auto justify-center">
        <form action="{{ url('users/post/login/process') }}" method="POST" onsubmit="PostRequest(event,this,MyFunc.call_back)" class="w-full border-1 border-color-silver max-w-500 align-center br-10 bg-white  column g-5">
           <div class="column w-full p-10 align-center g-5">
             <img src="{{ asset('favicon/logo.png?v=1.2') }}" class="w-quarter" alt="">
            <strong class="c-secondary desc">Welcome Back</strong>
            <span class="text-light text-dim">Login with your credentials</span>
            
          <div class="w-full column g-2">
             <input type="hidden" class="input" name="_token" value="{{ csrf_token() }}">
           
            <label for="" class="m-right-auto m-top-10">Username or Email Address</label>
            <div class="cont w-full h-50 br-10 border-1 border-color-silver">
                <input type="text" placeholder="Enter username or email" name="id" class="inp input required w-full h-full no-border bg-transparent br-10">
            </div>
            
            
              <label for="" class="m-right-auto m-top-10">Account Password</label>
            <div class="cont w-full h-50 br-10 border-1 border-color-silver">
                <input type="password" placeholder="Enter your Account Password" name="password" class="inp input required w-full h-full no-border bg-transparent br-10">
            </div>
          </div>
            <label class="m-x-auto no-select row align-center">
                
               Forgot Password? <a href="{{ url('users/password/forgot') }}" class="c-green text-indent-5">Reset</a>
            </label>
            <button class="post bg-secondary secondary-text w-full bold"><span>Login Safely</span></button>
            <div class="m-x-auto no-select row align-center">
               
               Dont have an account? <a href="{{ url('register') }}" class="c-green text-indent-5">Register</a>
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