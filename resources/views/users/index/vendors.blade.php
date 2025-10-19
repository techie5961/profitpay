@extends('layout.users.index')
@section('title')
    Vendors
@endsection
@section('css')
<style class="css">
     .quick-link{
            position:relative;
            

        }
        .quick-link .group{
            z-index:20;
            position:relative;
        }
        .quick-link::before{
            content:'';
            position:absolute;
            left:10%;
            top:10%;
            width:40%;
            height:40%;
            background:var(--primary);
            border-radius:50%;
            filter:blur(30px);
            z-index:10;
        }
         .quick-link::after{
            content:'';
            position:absolute;
            right:10%;
            bottom:10%;
            width:20%;
            height:20%;
            background:var(--primary);
            border-radius:50%;
            filter:blur(20px);
            z-index:10;
        }
</style>
    
@endsection
@section('main')
    <section class="w-full column g-10 align-center">
        <strong class="desc font-weight-400 c-primary" style="font-family:titan one;font-size:1.5rem;">Buy Coupon Code</strong>
        <span class="text-center">Chat any of our verified vendors on whatsapp to buy your coupon code from them.</span>
        <span class="text-center c-red" style="color:gold">Note: Do not pay to anyone not listed on this page.We will not be held responsible for loss of funds.Only pay to vendors listed on thie page.</span>
        @if ($vendors->isEmpty())
            @include('components.sections',[
                'null' => true,
                'text' => 'No Vendors Available at the moment,check back later'
            ])
        @else
           <div class="grid pc-grid-2 w-full g-10 place-center">
             @foreach ($vendors as $data)
                <div style="box-shadow: inset 0 0 50px var(--bg-light);backdrop-filter:blur(50px);" class="w-full br-20 p-20 column g-10 bg-transparent">
                    <img src="{{ asset('users/'.$data->photo.'') }}" alt="" class="h-70 w-70 circle">
                    <div class="row space-between align-center g-2">
                        <span class="desc c-primary" style="font-family:luckiest guy">{{ ucfirst($data->username) }}</span>
                        <span style="color:#00ff08" class="m-right-auto c-green">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM16.0303 8.96967C16.3232 9.26256 16.3232 9.73744 16.0303 10.0303L11.0303 15.0303C10.7374 15.3232 10.2626 15.3232 9.96967 15.0303L7.96967 13.0303C7.67678 12.7374 7.67678 12.2626 7.96967 11.9697C8.26256 11.6768 8.73744 11.6768 9.03033 11.9697L10.5 13.4393L12.7348 11.2045L14.9697 8.96967C15.2626 8.67678 15.7374 8.67678 16.0303 8.96967Z" fill="CurrentColor"></path>
</svg>

                        </span>
                        <div class="p-5 bg-primary row align-center primary-text br-1000 p-x-10 bold">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M3.37752 5.08241C3 5.62028 3 7.21907 3 10.4167V11.9914C3 17.6294 7.23896 20.3655 9.89856 21.5273C10.62 21.8424 10.9807 22 12 22C13.0193 22 13.38 21.8424 14.1014 21.5273C16.761 20.3655 21 17.6294 21 11.9914V10.4167C21 7.21907 21 5.62028 20.6225 5.08241C20.245 4.54454 18.7417 4.02996 15.7351 3.00079L15.1623 2.80472C13.595 2.26824 12.8114 2 12 2C11.1886 2 10.405 2.26824 8.83772 2.80472L8.26491 3.00079C5.25832 4.02996 3.75503 4.54454 3.37752 5.08241ZM15.0595 10.4995C15.3353 10.1905 15.3085 9.71642 14.9995 9.44055C14.6905 9.16467 14.2164 9.19151 13.9405 9.50049L10.9286 12.8739L10.0595 11.9005C9.78358 11.5915 9.30947 11.5647 9.00049 11.8405C8.69151 12.1164 8.66467 12.5905 8.94055 12.8995L10.3691 14.4995C10.5114 14.6589 10.7149 14.75 10.9286 14.75C11.1422 14.75 11.3457 14.6589 11.488 14.4995L15.0595 10.4995Z" fill="CurrentColor"></path>
</svg>

                            Trusted Vendor</div>
                    </div>
                    <div class="grid grid-2 align-center w-full space-between g-10">
                       <div class="bg h-full clip-10 quick-link box-shadow border-1 border-color-bg-light secondary-text w-full br-10 p-10 g-5 column align-center">
              <div class="column group w-full h-full justify-center g-5">
                  <strong class="row align-center g-2">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M5.5 16L5.5 8C5.5 6.34315 4.15685 5 2.5 5C2.22386 5 2 5.22386 2 5.5V18.5C2 18.7761 2.22386 19 2.5 19C4.15685 19 5.5 17.6569 5.5 16Z" fill="green"></path>
<path d="M12.5 5C14.3856 5 15.3284 5 15.9142 5.58579C16.5 6.17157 16.5 7.11438 16.5 9V15C16.5 16.8856 16.5 17.8284 15.9142 18.4142C15.3284 19 14.3856 19 12.5 19H11.5C9.61438 19 8.67157 19 8.08579 18.4142C7.5 17.8284 7.5 16.8856 7.5 15L7.5 9C7.5 7.11438 7.5 6.17157 8.08579 5.58579C8.67157 5 9.61438 5 11.5 5H12.5Z" fill="white"></path>
<path d="M18.5 8V16C18.5 17.6569 19.8431 19 21.5 19C21.7761 19 22 18.7761 22 18.5V5.5C22 5.22386 21.7761 5 21.5 5C19.8431 5 18.5 6.34315 18.5 8Z" fill="green"></path>
</svg>

                    Nigeria</strong>
                  <div class="row g-2 align-center">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C7.58172 2 4 6.00258 4 10.5C4 14.9622 6.55332 19.8124 10.5371 21.6744C11.4657 22.1085 12.5343 22.1085 13.4629 21.6744C17.4467 19.8124 20 14.9622 20 10.5C20 6.00258 16.4183 2 12 2ZM12 12C13.1046 12 14 11.1046 14 10C14 8.89543 13.1046 8 12 8C10.8954 8 10 8.89543 10 10C10 11.1046 10.8954 12 12 12Z" fill="CurrentColor"></path>
</svg>

                    <span>Country</span>
                  </div>
              

              </div>
</div>
  <div class="bg clip-10 h-full quick-link box-shadow border-1 border-color-bg-light secondary-text w-full br-10 p-10 g-5 column align-center">
              <div class="column group w-full h-full justify-center g-5">
                  <strong class="row align-center g-2">
                

                    100%</strong>
                  <div class="row g-2 align-center">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C22 4.92893 22 7.28595 22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12ZM10.004 5.7517C10.4182 5.7495 10.7522 5.41194 10.75 4.99773C10.7478 4.58353 10.4102 4.24952 9.99602 4.25172C8.91427 4.25745 8.01583 4.28215 7.28261 4.41042C6.53075 4.54195 5.88786 4.79244 5.36144 5.29379C4.90634 5.72721 4.60191 6.16616 4.43626 6.79676C4.28612 7.36833 4.25937 8.07154 4.25231 8.99426C4.24914 9.40846 4.58234 9.74681 4.99654 9.74998C5.41074 9.75315 5.74909 9.41994 5.75226 9.00574C5.75952 8.05697 5.79204 7.53952 5.88704 7.17786C5.96654 6.87522 6.09314 6.66836 6.39592 6.38C6.63788 6.14955 6.96814 5.98821 7.54109 5.88798C8.13268 5.78449 8.91071 5.75749 10.004 5.7517ZM14.0041 4.25172C13.5899 4.24952 13.2523 4.58352 13.2501 4.99773C13.2479 5.41194 13.5819 5.7495 13.9961 5.7517C15.0894 5.7575 15.8674 5.78449 16.4589 5.88799C17.0319 5.98822 17.3621 6.14956 17.6041 6.37999C17.9069 6.66835 18.0335 6.87522 18.113 7.17786C18.208 7.53952 18.2405 8.05697 18.2477 9.00574C18.2509 9.41994 18.5893 9.75315 19.0035 9.74998C19.4177 9.74681 19.7509 9.40846 19.7477 8.99426C19.7406 8.07154 19.7139 7.36833 19.5637 6.79676C19.3981 6.16616 19.0937 5.72721 18.6386 5.29379C18.1121 4.79244 17.4693 4.54196 16.7174 4.41043C15.9842 4.28216 15.0858 4.25746 14.0041 4.25172ZM5 11.2501C4.58579 11.2501 4.25 11.5858 4.25 12.0001C4.25 12.4143 4.58579 12.7501 5 12.7501H19C19.4142 12.7501 19.75 12.4143 19.75 12.0001C19.75 11.5858 19.4142 11.2501 19 11.2501H5ZM5.75226 14.9944C5.74909 14.5802 5.41074 14.247 4.99654 14.2501C4.58234 14.2533 4.24914 14.5916 4.25231 15.0058C4.25937 15.9286 4.28612 16.6318 4.43626 17.2034C4.60191 17.8339 4.90634 18.2729 5.36144 18.7063C5.88785 19.2077 6.53073 19.4581 7.28258 19.5897C8.01578 19.718 8.91421 19.7427 9.99593 19.7484C10.4101 19.7506 10.7477 19.4166 10.7499 19.0024C10.7521 18.5882 10.4181 18.2506 10.0039 18.2484C8.91065 18.2426 8.13264 18.2156 7.54107 18.1121C6.96814 18.0119 6.63788 17.8506 6.39592 17.6201C6.09314 17.3318 5.96654 17.1249 5.88704 16.8223C5.79204 16.4606 5.75952 15.9431 5.75226 14.9944ZM19.7477 15.0058C19.7509 14.5916 19.4177 14.2533 19.0035 14.2501C18.5893 14.247 18.2509 14.5802 18.2477 14.9944C18.2405 15.9431 18.208 16.4606 18.113 16.8223C18.0335 17.1249 17.9069 17.3318 17.6041 17.6201C17.3621 17.8506 17.0319 18.0119 16.4589 18.1121C15.8674 18.2156 15.0894 18.2426 13.9961 18.2484C13.5819 18.2506 13.2479 18.5882 13.2501 19.0024C13.2523 19.4166 13.5899 19.7506 14.0041 19.7484C15.0858 19.7427 15.9842 19.718 16.7174 19.5897C17.4693 19.4581 18.1121 19.2077 18.6386 18.7063C19.0937 18.2729 19.3981 17.8339 19.5637 17.2034C19.7139 16.6318 19.7406 15.9286 19.7477 15.0058Z" fill="CurrentColor"></path>
</svg>


                    <span>Trust Level</span>
                  </div>
              

              </div>
</div>
                    </div>

                    <button onclick="window.open('https://wa.me/{{$data->phone}}?text={{ urlencode('Hello '.ucfirst($data->username).',are you online,i want to purchase coupon code for '.config('app.name').'') }}')" class="btn-green-3d c-white g-5 clip-5 br-5">
                      <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M22 8.5C22 4.91015 19.0899 2 15.5 2C13.4171 2 11.5631 2.9823 10.3735 4.50721C15.4471 4.70336 19.5 8.87838 19.5 14C19.5 14.1103 19.4981 14.2202 19.4944 14.3296L19.8267 14.4185C20.793 14.677 21.677 13.793 21.4185 12.8267L21.2911 12.3506C21.1882 11.9661 21.2501 11.5598 21.4155 11.1977C21.7908 10.376 22 9.46242 22 8.5Z" fill="CurrentColor"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M18 14C18 18.4183 14.4183 22 10 22C8.76449 22 7.5944 21.7199 6.54976 21.2198C6.19071 21.0479 5.78393 20.9876 5.39939 21.0904L4.17335 21.4185C3.20701 21.677 2.32295 20.793 2.58151 19.8267L2.90955 18.6006C3.01245 18.2161 2.95209 17.8093 2.7802 17.4502C2.28008 16.4056 2 15.2355 2 14C2 9.58172 5.58172 6 10 6C14.4183 6 18 9.58172 18 14ZM6.5 15C7.05228 15 7.5 14.5523 7.5 14C7.5 13.4477 7.05228 13 6.5 13C5.94772 13 5.5 13.4477 5.5 14C5.5 14.5523 5.94772 15 6.5 15ZM10 15C10.5523 15 11 14.5523 11 14C11 13.4477 10.5523 13 10 13C9.44772 13 9 13.4477 9 14C9 14.5523 9.44772 15 10 15ZM13.5 15C14.0523 15 14.5 14.5523 14.5 14C14.5 13.4477 14.0523 13 13.5 13C12.9477 13 12.5 13.4477 12.5 14C12.5 14.5523 12.9477 15 13.5 15Z" fill="CurrentColor"></path>
</svg>



                        <span>Chat on Whatsapp</span>
                    </button>
                </div>
            @endforeach
           </div>
        @endif
    </section>
@endsection