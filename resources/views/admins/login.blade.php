@extends('layout.admins.auth')
@section('title')
    Login
@endsection
@section('main')
    <section class="column p-10  w-full flex-auto justify-center">
        <form style="backdrop-filter: blur(20px);box-shadow:inset 0 0 50px var(--bg-light)"  action="{{ url('admins/post/login/process') }}" method="POST" onsubmit="PostRequest(event,this,call_back)" class="w-full border-1 border-color-silver max-w-500 p-10 align-center br-10 bg-transparent c-white column g-5">
            <img src="{{ asset('favicon/logo.png?v=1.2') }}" class="w-quarter" alt="">
           <span style="font-family:titan one" class="c-primary desc">Admin Login</span>
             <span class="m-bottom-20">Login with your credentials</span>
           <input type="hidden" class="input" name="_token" value="{{ csrf_token() }}">
            <label for="" class="m-right-auto">Admin Tag</label>
           <div  class="cont row align-center bg-secondary-dark w-full h-50 border-1 br-5 border-color-silver">
                <input autocomplete="off" readonly onfocus="this.removeAttribute('readonly')" type="text" placeholder="Enter your Admin Tag" name="tag" class="inp c-white input required w-full h-full no-border bg-transparent br-10">
            </div>
              <label for="" class="m-right-auto m-top-10">Password</label>
            <div  class="cont row align-center bg-secondary-dark w-full h-50 border-1 br-5 border-color-silver">
                <input autocomplete="new-password" type="password" placeholder="Enter your Account Password" name="password" class="inp input required w-full h-full c-white no-border bg-transparent br-10">
              <div onclick="
           try{
            if(this.closest('.cont').querySelector('input').type == 'text'){
          
                this.querySelector('.show-password').classList.remove('display-none');
                 this.querySelector('.hide-password').classList.add('display-none');
                 this.closest('.cont').querySelector('input').type = 'password';
            }else{
           
             this.querySelector('.hide-password').classList.remove('display-none');
                 this.querySelector('.show-password').classList.add('display-none');
                 this.closest('.cont').querySelector('input').type = 'text';
            }
           }catch(error){
           alert(error.stack)
           }
            " class="h-full perfect-square column justify-center">
            {{-- SHOW PASSWORD --}}
                <svg class="show-password" width="15" height="15" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M12 8.25C9.92893 8.25 8.25 9.92893 8.25 12C8.25 14.0711 9.92893 15.75 12 15.75C14.0711 15.75 15.75 14.0711 15.75 12C15.75 9.92893 14.0711 8.25 12 8.25ZM9.75 12C9.75 10.7574 10.7574 9.75 12 9.75C13.2426 9.75 14.25 10.7574 14.25 12C14.25 13.2426 13.2426 14.25 12 14.25C10.7574 14.25 9.75 13.2426 9.75 12Z" fill="CurrentColor"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M12 3.25C7.48587 3.25 4.44529 5.9542 2.68057 8.24686L2.64874 8.2882C2.24964 8.80653 1.88206 9.28392 1.63269 9.8484C1.36564 10.4529 1.25 11.1117 1.25 12C1.25 12.8883 1.36564 13.5471 1.63269 14.1516C1.88206 14.7161 2.24964 15.1935 2.64875 15.7118L2.68057 15.7531C4.44529 18.0458 7.48587 20.75 12 20.75C16.5141 20.75 19.5547 18.0458 21.3194 15.7531L21.3512 15.7118C21.7504 15.1935 22.1179 14.7161 22.3673 14.1516C22.6344 13.5471 22.75 12.8883 22.75 12C22.75 11.1117 22.6344 10.4529 22.3673 9.8484C22.1179 9.28391 21.7504 8.80652 21.3512 8.28818L21.3194 8.24686C19.5547 5.9542 16.5141 3.25 12 3.25ZM3.86922 9.1618C5.49864 7.04492 8.15036 4.75 12 4.75C15.8496 4.75 18.5014 7.04492 20.1308 9.1618C20.5694 9.73159 20.8263 10.0721 20.9952 10.4545C21.1532 10.812 21.25 11.2489 21.25 12C21.25 12.7511 21.1532 13.188 20.9952 13.5455C20.8263 13.9279 20.5694 14.2684 20.1308 14.8382C18.5014 16.9551 15.8496 19.25 12 19.25C8.15036 19.25 5.49864 16.9551 3.86922 14.8382C3.43064 14.2684 3.17374 13.9279 3.00476 13.5455C2.84684 13.188 2.75 12.7511 2.75 12C2.75 11.2489 2.84684 10.812 3.00476 10.4545C3.17374 10.0721 3.43063 9.73159 3.86922 9.1618Z" fill="CurrentColor"></path>
</svg>
{{-- HIDE PASSWORD --}}
<svg class="hide-password display-none" width="15" height="15" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M22.2954 6.31064C22.6761 6.4738 22.8525 6.91471 22.6893 7.29543L22 6.99999C22.6893 7.29543 22.6894 7.29526 22.6893 7.29543L22.6886 7.29711L22.6875 7.2996L22.6843 7.30696L22.6737 7.33103C22.6647 7.35117 22.6519 7.37938 22.6353 7.41507C22.602 7.48642 22.5533 7.58774 22.4889 7.71415C22.36 7.9668 22.1676 8.32067 21.9085 8.73646C21.4829 9.4195 20.8724 10.2776 20.062 11.1302L21.0303 12.0985C21.3232 12.3914 21.3232 12.8663 21.0303 13.1592C20.7374 13.4521 20.2625 13.4521 19.9697 13.1592L18.9691 12.1586C18.3094 12.7113 17.5529 13.23 16.6951 13.6562L17.6286 15.091C17.8545 15.4381 17.7562 15.9027 17.409 16.1286C17.0618 16.3545 16.5973 16.2562 16.3713 15.909L15.2822 14.2351C14.5028 14.4896 13.659 14.6626 12.75 14.7246V16.5C12.75 16.9142 12.4142 17.25 12 17.25C11.5858 17.25 11.25 16.9142 11.25 16.5V14.7246C10.369 14.6645 9.54916 14.5002 8.78989 14.2584L7.71581 15.9091C7.48991 16.2563 7.02532 16.3546 6.67813 16.1287C6.33095 15.9028 6.23263 15.4382 6.45853 15.091L7.37095 13.6888C6.50657 13.2666 5.74387 12.7502 5.07848 12.1983L4.1175 13.1592C3.82461 13.4521 3.34974 13.4521 3.05684 13.1592C2.76395 12.8663 2.76395 12.3915 3.05684 12.0986L3.98061 11.1748C3.15605 10.3151 2.53531 9.44655 2.10283 8.75466C1.8399 8.33403 1.64466 7.97564 1.51394 7.71968C1.44854 7.59162 1.39916 7.48894 1.36543 7.41663C1.34856 7.38047 1.33559 7.35188 1.32648 7.33148L1.31568 7.30709L1.31244 7.29964L1.31135 7.29713L1.31095 7.29618C1.31087 7.296 1.31063 7.29543 1.99998 6.99999L1.31095 7.29618C1.14778 6.91546 1.32382 6.4738 1.70455 6.31064C2.08495 6.1476 2.52545 6.32354 2.68894 6.70361C2.689 6.70375 2.68888 6.70348 2.68894 6.70361L2.6899 6.70581L2.69597 6.71952C2.70186 6.73271 2.71146 6.7539 2.72479 6.78247C2.75145 6.83963 2.79302 6.92624 2.84982 7.03747C2.96351 7.26009 3.13768 7.58027 3.37479 7.95959C3.85039 8.72047 4.57163 9.70708 5.55567 10.6216C6.42157 11.4263 7.48265 12.1676 8.75171 12.6558C9.7062 13.023 10.7854 13.25 12 13.25C13.2417 13.25 14.3421 13.0128 15.3125 12.6308C16.5739 12.1343 17.6277 11.3882 18.4867 10.582C19.4562 9.67196 20.1669 8.69515 20.6354 7.9432C20.869 7.5683 21.0406 7.25226 21.1526 7.03266C21.2086 6.92295 21.2495 6.83756 21.2758 6.78124C21.2889 6.75309 21.2983 6.73222 21.3041 6.71923L21.3101 6.70575L21.3106 6.70455C21.3107 6.70446 21.3106 6.70465 21.3106 6.70455M22.2954 6.31064C21.9148 6.14751 21.4739 6.32404 21.3106 6.70455ZM2.68894 6.70361C2.689 6.70375 2.68888 6.70348 2.68894 6.70361Z" fill="CurrentColor"></path>
</svg>


            </div>
            </div>
            
             <button class="btn-primary-3d h-50 clip-5 br-5 m-top-20 m-bottom-10 w-full bold"><span>Login Safely</span></button>
          
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