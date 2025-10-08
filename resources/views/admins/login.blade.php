@extends('layout.admins.auth')
@section('title')
    Login
@endsection
@section('main')
    <section class="column p-10  w-full flex-auto justify-center">
        <form action="{{ url('admins/post/login/process') }}" method="POST" onsubmit="PostRequest(event,this,call_back)" class="w-full max-w-500 c-black align-center br-10 bg-white p-10 column g-5">
            <img src="{{ asset('favicon/logo.png?v=1.2') }}" class="w-quarter" alt="">
            <strong class="c-secondary desc">Admin Login</strong>
            <span class="text-light m-bottom-20">Login with your credentials</span>
           <input type="hidden" class="input" name="_token" value="{{ csrf_token() }}">
            <label for="" class="m-right-auto">Admin Tag</label>
            <div class="cont w-full h-50 br-10 border-1 border-color-silver">
                <input type="text" placeholder="Enter your Admin Tag" name="tag" class="inp input required w-full h-full no-border bg-transparent br-10">
            </div>
              <label for="" class="m-right-auto m-top-10">Password</label>
            <div class="cont w-full h-50 br-10 border-1 border-color-silver">
                <input type="password" placeholder="Enter Account Password" name="password" class="inp input required w-full h-full no-border bg-transparent br-10">
            </div>
            
            <button class="post w-full bold"><span>Login Safely</span></button>
            
        </form>
    </section>
@endsection
@section('js')
    <script class="js">
        function call_back(response){
            let data=JSON.parse(response);
            if(data.status == 'success'){
                window.location.href=data.url;
            }
        }
    </script>
@endsection