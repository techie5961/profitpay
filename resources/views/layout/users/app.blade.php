<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ asset('favicon/favicon-96x96.png') }}" sizes="96x96" />
<link rel="icon" type="image/svg+xml" href="{{ asset('favicon/favicon.svg') }}" />
<link rel="shortcut icon" href="{{ asset('favicon/favicon.ico') }}" />
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}" />
<link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}" />
<link rel="stylesheet" href="{{ asset('vitecss/fonts/fonts.css?v='.config('versions.vite_version').'') }}">
<link rel="stylesheet" href="{{ asset('vitecss/css/app.css?v='.config('versions.vite_version').'') }}">
    <title>{{ config('app.name') }} | Users | @yield('title')</title>
    <style>
      .nav-profile{
        background-color: var(--bg);
background-color: #cccccc;
background-image: url("{{ asset('images/depth.jpg') }}");
background-size: cover;
color:black;

}
 body{
  
   background-color: var(--bg);
background-image: url("{{ asset('images/background.jpg') }}");
background-size:cover;
background-position:center;
  
}
      @media(min-width:800px){
        nav{
            width:30%;
           
        }
        nav section.nav{
            width:100%;
            border-right:1px solid var(--bg)
        }
        main,footer,header{
            width:calc(100% - 30%) !important;
           
            margin-left:30%;
        }
      }
      header{
        left:30% !important;
      }
    
    </style>
    @yield('css')
</head>

<body class="overflow-hidden">
   <div class="pos-fixed c-white loader top-0 left-0 right-0 column justify-center bottom-0 z-index-9000 bg">
   <svg fill="currentColor" height="100" width="100" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><rect x="1" y="1" width="7.33" height="7.33"><animate id="spinner_oJFS" begin="0;spinner_5T1J.end+0.2s" attributeName="x" dur="0.6s" values="1;4;1"/><animate begin="0;spinner_5T1J.end+0.2s" attributeName="y" dur="0.6s" values="1;4;1"/><animate begin="0;spinner_5T1J.end+0.2s" attributeName="width" dur="0.6s" values="7.33;1.33;7.33"/><animate begin="0;spinner_5T1J.end+0.2s" attributeName="height" dur="0.6s" values="7.33;1.33;7.33"/></rect><rect x="8.33" y="1" width="7.33" height="7.33"><animate begin="spinner_oJFS.begin+0.1s" attributeName="x" dur="0.6s" values="8.33;11.33;8.33"/><animate begin="spinner_oJFS.begin+0.1s" attributeName="y" dur="0.6s" values="1;4;1"/><animate begin="spinner_oJFS.begin+0.1s" attributeName="width" dur="0.6s" values="7.33;1.33;7.33"/><animate begin="spinner_oJFS.begin+0.1s" attributeName="height" dur="0.6s" values="7.33;1.33;7.33"/></rect><rect x="1" y="8.33" width="7.33" height="7.33"><animate begin="spinner_oJFS.begin+0.1s" attributeName="x" dur="0.6s" values="1;4;1"/><animate begin="spinner_oJFS.begin+0.1s" attributeName="y" dur="0.6s" values="8.33;11.33;8.33"/><animate begin="spinner_oJFS.begin+0.1s" attributeName="width" dur="0.6s" values="7.33;1.33;7.33"/><animate begin="spinner_oJFS.begin+0.1s" attributeName="height" dur="0.6s" values="7.33;1.33;7.33"/></rect><rect x="15.66" y="1" width="7.33" height="7.33"><animate begin="spinner_oJFS.begin+0.2s" attributeName="x" dur="0.6s" values="15.66;18.66;15.66"/><animate begin="spinner_oJFS.begin+0.2s" attributeName="y" dur="0.6s" values="1;4;1"/><animate begin="spinner_oJFS.begin+0.2s" attributeName="width" dur="0.6s" values="7.33;1.33;7.33"/><animate begin="spinner_oJFS.begin+0.2s" attributeName="height" dur="0.6s" values="7.33;1.33;7.33"/></rect><rect x="8.33" y="8.33" width="7.33" height="7.33"><animate begin="spinner_oJFS.begin+0.2s" attributeName="x" dur="0.6s" values="8.33;11.33;8.33"/><animate begin="spinner_oJFS.begin+0.2s" attributeName="y" dur="0.6s" values="8.33;11.33;8.33"/><animate begin="spinner_oJFS.begin+0.2s" attributeName="width" dur="0.6s" values="7.33;1.33;7.33"/><animate begin="spinner_oJFS.begin+0.2s" attributeName="height" dur="0.6s" values="7.33;1.33;7.33"/></rect><rect x="1" y="15.66" width="7.33" height="7.33"><animate begin="spinner_oJFS.begin+0.2s" attributeName="x" dur="0.6s" values="1;4;1"/><animate begin="spinner_oJFS.begin+0.2s" attributeName="y" dur="0.6s" values="15.66;18.66;15.66"/><animate begin="spinner_oJFS.begin+0.2s" attributeName="width" dur="0.6s" values="7.33;1.33;7.33"/><animate begin="spinner_oJFS.begin+0.2s" attributeName="height" dur="0.6s" values="7.33;1.33;7.33"/></rect><rect x="15.66" y="8.33" width="7.33" height="7.33"><animate begin="spinner_oJFS.begin+0.3s" attributeName="x" dur="0.6s" values="15.66;18.66;15.66"/><animate begin="spinner_oJFS.begin+0.3s" attributeName="y" dur="0.6s" values="8.33;11.33;8.33"/><animate begin="spinner_oJFS.begin+0.3s" attributeName="width" dur="0.6s" values="7.33;1.33;7.33"/><animate begin="spinner_oJFS.begin+0.3s" attributeName="height" dur="0.6s" values="7.33;1.33;7.33"/></rect><rect x="8.33" y="15.66" width="7.33" height="7.33"><animate begin="spinner_oJFS.begin+0.3s" attributeName="x" dur="0.6s" values="8.33;11.33;8.33"/><animate begin="spinner_oJFS.begin+0.3s" attributeName="y" dur="0.6s" values="15.66;18.66;15.66"/><animate begin="spinner_oJFS.begin+0.3s" attributeName="width" dur="0.6s" values="7.33;1.33;7.33"/><animate begin="spinner_oJFS.begin+0.3s" attributeName="height" dur="0.6s" values="7.33;1.33;7.33"/></rect><rect x="15.66" y="15.66" width="7.33" height="7.33"><animate id="spinner_5T1J" begin="spinner_oJFS.begin+0.4s" attributeName="x" dur="0.6s" values="15.66;18.66;15.66"/><animate begin="spinner_oJFS.begin+0.4s" attributeName="y" dur="0.6s" values="15.66;18.66;15.66"/><animate begin="spinner_oJFS.begin+0.4s" attributeName="width" dur="0.6s" values="7.33;1.33;7.33"/><animate begin="spinner_oJFS.begin+0.4s" attributeName="height" dur="0.6s" values="7.33;1.33;7.33"/></rect></svg>
   </div>
    <header style="z-index:3000" class="pos-sticky average c-white bg p-10 top-0 left-0 right-0 bottom-0 row align-center g-10">
        <div onclick="
            document.querySelector('nav').classList.remove('mobile-display-none');
             document.querySelector('nav section.nav').classList.add('animation-trans-in-from-left');
             document.body.classList.add('overflow-hidden');
            

            " class="h-40 w-40 column pc-display-none justify-center c-bg br-10 p-10 bg-dim c-white">
          <svg width="32" height="32" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M3.25 7C3.25 6.58579 3.58579 6.25 4 6.25H20C20.4142 6.25 20.75 6.58579 20.75 7C20.75 7.41421 20.4142 7.75 20 7.75H4C3.58579 7.75 3.25 7.41421 3.25 7ZM3.25 12C3.25 11.5858 3.58579 11.25 4 11.25H15C15.4142 11.25 15.75 11.5858 15.75 12C15.75 12.4142 15.4142 12.75 15 12.75H4C3.58579 12.75 3.25 12.4142 3.25 12ZM3.25 17C3.25 16.5858 3.58579 16.25 4 16.25H9C9.41421 16.25 9.75 16.5858 9.75 17C9.75 17.4142 9.41421 17.75 9 17.75H4C3.58579 17.75 3.25 17.4142 3.25 17Z" fill="CurrentColor"></path>
</svg>
   
        </div>
        <img src="{{ asset('favicon/logo.png?v=1.2') }}" alt="Logo" class="h-30">
        
      <img onclick="spa(event,'{{ url('users/more') }}')" src="{{ asset('users/'.Auth::guard('users')->user()->photo.'') }}" alt="" class="h-40 m-left-auto font-weight-900 desc w-40 circle no-shrink bg-dim column justify-center">        
    </header>
    <nav style="z-index:4000" onclick="
    this.querySelector('section.nav').classList.remove('animation-trans-in-from-left');
    this.classList.add('mobile-display-none');
    document.body.classList.remove('overflow-hidden');
  
    " class="pos-fixed mobile-display-none border-right-1 border-color-dim high top-0 left-0 right-0 bottom-0 bg-black-transparent average">
        <section onclick="event.stopPropagation()" class="nav transition-ease-half overflow-auto column bg-secondary h-full w-semi-full">
            <div class="nav-profile z-index-1000 pos-sticky stick-top w-full column g-10 p-10">
                <img src="{{ asset('users/'.Auth::guard('users')->user()->photo.'') }}" alt="" class="h-70 w-70 circle border-4 border-color-primary box-shadow">
           <strong class="desc">{{ ucfirst(Auth::guard('users')->user()->username) }}</strong>
            </div>
            <div class="nav-links flex-auto bg-inherit w-full column">
              {{-- NEW NAV LINK --}}
                <a class="p-10 align-center pointer clip-10 w-full row g-5 no-u c-white" onclick="
                  spa(event,'{{ url('users/dashboard') }}');
                  this.closest('nav').classList.add('mobile-display-none');   document.body.classList.remove('overflow-hidden');
                  document.body.classList.remove('overflow-hidden');
                  ">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M13.1061 22H10.8939C7.44737 22 5.72409 22 4.54903 20.9882C3.37396 19.9764 3.13025 18.2827 2.64284 14.8952L2.36407 12.9579C1.98463 10.3208 1.79491 9.00229 2.33537 7.87495C2.87583 6.7476 4.02619 6.06234 6.32691 4.69181L7.71175 3.86687C9.80104 2.62229 10.8457 2 12 2C13.1543 2 14.199 2.62229 16.2882 3.86687L17.6731 4.69181C19.9738 6.06234 21.1242 6.7476 21.6646 7.87495C22.2051 9.00229 22.0154 10.3208 21.6359 12.9579L21.3572 14.8952C20.8697 18.2827 20.626 19.9764 19.451 20.9882C18.2759 22 16.5526 22 13.1061 22ZM8.39757 15.5532C8.64423 15.2204 9.11395 15.1506 9.44671 15.3973C10.1751 15.9371 11.0542 16.2498 12.0001 16.2498C12.946 16.2498 13.8251 15.9371 14.5535 15.3973C14.8863 15.1506 15.356 15.2204 15.6026 15.5532C15.8493 15.8859 15.7795 16.3557 15.4467 16.6023C14.4743 17.3231 13.2851 17.7498 12.0001 17.7498C10.7151 17.7498 9.5259 17.3231 8.55349 16.6023C8.22072 16.3557 8.15092 15.8859 8.39757 15.5532Z" fill="CurrentColor"></path>
</svg>


                    Dashboard
                 </a>
                 {{-- NEW NAV LINK --}}
                <a class="p-10 align-center pointer clip-10 w-full row g-5 no-u c-white" onclick="
                  spa(event,'{{ url('users/vendor/dashboard') }}');
                  this.closest('nav').classList.add('mobile-display-none');   document.body.classList.remove('overflow-hidden');
                  document.body.classList.remove('overflow-hidden');
                  ">
                   <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M2.33537 7.87495C1.79491 9.00229 1.98463 10.3208 2.36407 12.9579L2.64284 14.8952C3.13025 18.2827 3.37396 19.9764 4.54903 20.9882C5.72409 22 7.44737 22 10.8939 22H13.1061C16.5526 22 18.2759 22 19.451 20.9882C20.626 19.9764 20.8697 18.2827 21.3572 14.8952L21.6359 12.9579C22.0154 10.3208 22.2051 9.00229 21.6646 7.87495C21.1242 6.7476 19.9738 6.06234 17.6731 4.69181L16.2882 3.86687C14.199 2.62229 13.1543 2 12 2C10.8457 2 9.80104 2.62229 7.71175 3.86687L6.32691 4.69181C4.02619 6.06234 2.87583 6.7476 2.33537 7.87495ZM13.45 16.5095C12.6422 15.6377 11.3581 15.6377 10.5503 16.5095C10.2688 16.8134 9.79427 16.8315 9.49041 16.55C9.18656 16.2684 9.16845 15.7939 9.44996 15.4901C10.8514 13.9775 13.1489 13.9775 14.5503 15.4901C14.8318 15.7939 14.8137 16.2684 14.5099 16.55C14.206 16.8315 13.7315 16.8134 13.45 16.5095ZM8.55029 14.3505C10.4626 12.2864 13.5376 12.2864 15.4499 14.3505C15.7315 14.6544 16.206 14.6725 16.5098 14.391C16.8137 14.1095 16.8318 13.6349 16.5503 13.3311C14.0443 10.6262 9.9559 10.6262 7.44995 13.3311C7.16844 13.6349 7.18655 14.1095 7.4904 14.391C7.79425 14.6725 8.26878 14.6544 8.55029 14.3505ZM17.4499 12.192C14.433 8.93571 9.56716 8.93571 6.55027 12.192C6.26876 12.4959 5.79423 12.514 5.49038 12.2325C5.18653 11.951 5.16842 11.4764 5.44993 11.1726C9.06046 7.27552 14.9397 7.27552 18.5503 11.1726C18.8318 11.4764 18.8137 11.951 18.5098 12.2325C18.206 12.514 17.7314 12.4959 17.4499 12.192Z" fill="CurrentColor"></path>
</svg>



                  Vendor Dashboard
                  </a>

                  {{-- NEW NAV LINK --}}
                 <a class="p-10 align-center pointer clip-10 w-full row g-5 no-u c-white" onclick="
                  spa(event,'{{ url('users/tasks') }}');
                  this.closest('nav').classList.add('mobile-display-none');   document.body.classList.remove('overflow-hidden');
                  document.body.classList.remove('overflow-hidden');
                  ">
                 <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M7.2915 4.78553V4.72453C7.2915 4.38601 7.30305 3.94261 7.4565 3.50336C7.9652 2.04714 9.35853 1 11 1H13C14.6415 1 16.0349 2.04714 16.5436 3.50336C16.697 3.94261 16.7085 4.38601 16.7085 4.72453V4.78555C19.212 5.52304 20.9631 7.79709 20.9994 10.4163C21 10.4574 21 10.5036 21 10.596V12.9191C20.8982 12.9191 20.7947 12.9398 20.6956 12.9835C15.1597 15.4273 8.84065 15.4273 3.30479 12.9835C3.2056 12.9397 3.10197 12.919 3 12.9191V10.596C3 10.5036 3 10.4574 3.00057 10.4163C3.03694 7.79707 4.78799 5.52301 7.2915 4.78553ZM8.87362 3.99175C9.17937 3.11649 10.017 2.48989 11 2.48989H13C13.9831 2.48989 14.8207 3.11649 15.1264 3.99175C15.1719 4.12188 15.194 4.27205 15.2032 4.46183C13.0832 4.10168 10.9169 4.10168 8.79689 4.46182C8.80602 4.27205 8.82816 4.12188 8.87362 3.99175ZM9.25 12.6708C9.25 12.2594 9.58579 11.9258 10 11.9258H14C14.4142 11.9258 14.75 12.2594 14.75 12.6708C14.75 13.0822 14.4142 13.4157 14 13.4157H10C9.58579 13.4157 9.25 13.0822 9.25 12.6708Z" fill="CurrentColor"></path>
<path d="M21 14.4769C20.1 14.8588 19.1814 15.1809 18.2502 15.4432V16.644C18.2502 17.0554 17.9144 17.3889 17.5002 17.3889C17.086 17.3889 16.7502 17.0554 16.7502 16.644V15.8119C12.1726 16.7754 7.36827 16.3304 3 14.4767V16.0231C3 18.1267 4.47101 19.9482 6.53853 20.4045C10.1356 21.1985 13.8644 21.1985 17.4615 20.4045C19.529 19.9482 21 18.1267 21 16.0231V14.4769Z" fill="CurrentColor"></path>
</svg>


                   Tasks
                </a>
                {{-- NEW NAV LINK --}}
                 <a class="p-10 pointer align-center clip-10 w-full row g-5 no-u c-white" onclick="
                  spa(event,'{{ url('users/spin') }}');
                  this.closest('nav').classList.add('mobile-display-none');   document.body.classList.remove('overflow-hidden');
                  ">
                 <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M9.68202 12.682C7.92466 14.4393 5.07542 14.4393 3.31806 12.682C2.63085 11.9948 2.21236 11.1406 2.06262 10.25H10.9375C10.7877 11.1406 10.3692 11.9948 9.68202 12.682Z" fill="CurrentColor"></path>
<path d="M10.9375 8.75H2.06262C2.21236 7.85943 2.63085 7.00524 3.31806 6.31802C5.07542 4.56066 7.92466 4.56066 9.68202 6.31802C10.3692 7.00524 10.7877 7.85943 10.9375 8.75Z" fill="CurrentColor"></path>
<path d="M14.7575 7.12156C15.9291 8.29314 17.8285 8.29314 19.0001 7.12156C19.5859 6.53578 19.8788 5.76801 19.8788 5.00024C19.8788 4.23248 19.5859 3.46471 19.0001 2.87892C17.8285 1.70735 15.9291 1.70735 14.7575 2.87892C14.1717 3.46471 13.8788 4.23248 13.8788 5.00024C13.8788 5.76801 14.1717 6.53578 14.7575 7.12156Z" fill="CurrentColor"></path>
<path d="M20.9052 12.0948C22.3649 13.5546 22.3649 15.9213 20.9052 17.381L19.8778 18.4084L19.8784 18.4054L19.1465 18.2644C19.1424 18.2635 19.132 18.2611 19.1177 18.2575C19.089 18.2503 19.0405 18.2371 18.9748 18.2161C18.8432 18.1741 18.6427 18.1007 18.3923 17.9801C17.8925 17.7392 17.1913 17.3087 16.4414 16.5589C15.6916 15.8091 15.261 15.1078 15.0201 14.6078C14.8994 14.3575 14.826 14.1569 14.784 14.0253C14.763 13.9595 14.7498 13.9111 14.7426 13.8823C14.7389 13.868 14.7368 13.8586 14.7359 13.8544L14.5946 13.1216L14.5916 13.1222L15.619 12.0948C17.0787 10.6351 19.4454 10.6351 20.9052 12.0948Z" fill="CurrentColor"></path>
<path d="M13.3262 14.3876C13.3347 14.4167 13.3443 14.4481 13.3551 14.4817C13.4167 14.6747 13.5155 14.9409 13.6689 15.2591C13.976 15.8964 14.5009 16.7397 15.3808 17.6195C16.2606 18.4994 17.1039 19.0243 17.7411 19.3314C18.0593 19.4847 18.3255 19.5834 18.5185 19.6451C18.552 19.6558 18.5833 19.6653 18.6123 19.6739L17.381 20.9052C15.9213 22.3649 13.5546 22.3649 12.0948 20.9052C10.6351 19.4454 10.6351 17.0787 12.0948 15.619L13.3262 14.3876Z" fill="CurrentColor"></path>
</svg>


                  Spin & Win
                 </a>
                 {{-- NEW NAV LINK --}}
                
               
                
                 <div class="nav-group c-white w-full column">
                     <a onclick="
                     let child=this.closest('.nav-group').querySelector('.nav-child');
                     if(child.classList.contains('display-none')){
                        child.classList.remove('display-none');
                        this.closest('.nav-group').querySelector('.main-a .chevron').classList.add('rotate-90');

                     }else{
                     child.classList.add('display-none');
                     this.closest('.nav-group').querySelector('.main-a .chevron').classList.remove('rotate-90');

                    }
                     " class="p-10 w-full main-a row align-center g-5 no-u" >
                 <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M4 5V19C4 20.6569 5.34315 22 7 22H17C18.6569 22 20 20.6569 20 19V9C20 7.34315 18.6569 6 17 6H5C4.44772 6 4 5.55228 4 5ZM7.25 12C7.25 11.5858 7.58579 11.25 8 11.25H16C16.4142 11.25 16.75 11.5858 16.75 12C16.75 12.4142 16.4142 12.75 16 12.75H8C7.58579 12.75 7.25 12.4142 7.25 12ZM7.25 15.5C7.25 15.0858 7.58579 14.75 8 14.75H13.5C13.9142 14.75 14.25 15.0858 14.25 15.5C14.25 15.9142 13.9142 16.25 13.5 16.25H8C7.58579 16.25 7.25 15.9142 7.25 15.5Z" fill="CurrentColor"></path>
<path d="M4.40879 4.0871C4.75727 4.24338 5 4.59334 5 5H17C17.3453 5 17.6804 5.04375 18 5.12602V4.30604C18 3.08894 16.922 2.15402 15.7172 2.32614L4.91959 3.86865C4.72712 3.89615 4.55271 3.97374 4.40879 4.0871Z" fill="CurrentColor"></path>
</svg>

Articles
                     <svg  class="m-left-auto chevron transition-ease-half" width="16" height="16" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M8.51192 4.43057C8.82641 4.161 9.29989 4.19743 9.56946 4.51192L15.5695 11.5119C15.8102 11.7928 15.8102 12.2072 15.5695 12.4881L9.56946 19.4881C9.29989 19.8026 8.82641 19.839 8.51192 19.5695C8.19743 19.2999 8.161 18.8264 8.43057 18.5119L14.0122 12L8.43057 5.48811C8.161 5.17361 8.19743 4.70014 8.51192 4.43057Z" fill="CurrentColor"></path>
</svg>  </a> 
                      <div style="width:calc(100% - 10px)" class="nav-child display-none m-left-10 border-left-4 border-color-bg bg-primary-transparent w-full column">
                        <a class="p-10 w-full row g-5 no-u c-inherit" onclick="
                  spa(event,'{{ url('users/articles/write') }}');
                  this.closest('nav').classList.add('mobile-display-none');   document.body.classList.remove('overflow-hidden');
                  ">Write & Win</a>
                          <a class="p-10 w-full row g-5 no-u c-inherit" onclick="
                  spa(event,'{{ url('users/articles/read') }}');
                  this.closest('nav').classList.add('mobile-display-none');   document.body.classList.remove('overflow-hidden');
                  ">Read & Earn</a>
                             </div>
                </div>
                {{-- NEW NAV LINK --}}
                 <a class="p-10 no-pointer no-select align-center clip-10 w-full row g-5 no-u c-white">
             <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M3.2132 3.2132C1.5956 4.83081 1.5956 7.45346 3.2132 9.07107L14.9289 20.7868C16.5465 22.4044 19.1692 22.4044 20.7868 20.7868C22.4044 19.1692 22.4044 16.5465 20.7868 14.9289L9.07107 3.2132C7.45346 1.5956 4.83081 1.5956 3.2132 3.2132ZM9.34458 8.23084C9.03703 7.92329 8.53839 7.92329 8.23084 8.23084C7.92329 8.53839 7.92329 9.03703 8.23084 9.34458C8.53839 9.65213 9.03703 9.65213 9.34458 9.34458C9.65213 9.03703 9.65213 8.53839 9.34458 8.23084ZM12.1289 9.15895C11.8214 8.8514 11.3227 8.8514 11.0152 9.15895C10.7076 9.4665 10.7076 9.96514 11.0152 10.2727C11.3227 10.5802 11.8214 10.5802 12.1289 10.2727C12.4365 9.96514 12.4365 9.4665 12.1289 9.15895ZM15.8414 12.8714C16.1489 13.179 16.1489 13.6776 15.8414 13.9852C15.5338 14.2927 15.0352 14.2927 14.7277 13.9852C14.4201 13.6776 14.4201 13.179 14.7277 12.8714C15.0352 12.5639 15.5338 12.5639 15.8414 12.8714ZM16.7695 16.7695C17.0771 16.462 17.0771 15.9633 16.7695 15.6558C16.462 15.3482 15.9633 15.3482 15.6558 15.6558C15.3482 15.9633 15.3482 16.462 15.6558 16.7695C15.9633 17.0771 16.462 17.0771 16.7695 16.7695ZM13.057 13.057C13.3646 12.7495 13.3646 12.2509 13.057 11.9433C12.7495 11.6358 12.2509 11.6358 11.9433 11.9433C11.6358 12.2509 11.6358 12.7495 11.9433 13.057C12.2509 13.3646 12.7495 13.3646 13.057 13.057ZM13.9852 14.7277C14.2927 15.0352 14.2927 15.5338 13.9852 15.8414C13.6776 16.1489 13.179 16.1489 12.8714 15.8414C12.5639 15.5338 12.5639 15.0352 12.8714 14.7277C13.179 14.4201 13.6776 14.4201 13.9852 14.7277ZM9.15895 11.0152C9.4665 10.7076 9.96514 10.7076 10.2727 11.0152C10.5802 11.3227 10.5802 11.8214 10.2727 12.1289C9.96514 12.4365 9.4665 12.4365 9.15895 12.1289C8.8514 11.8214 8.8514 11.3227 9.15895 11.0152Z" fill="CurrentColor"></path>
<path d="M5.08148 13.0607L3.2132 14.9289C1.5956 16.5465 1.5956 19.1692 3.2132 20.7868C4.83081 22.4044 7.45346 22.4044 9.07107 20.7868L10.9393 18.9185L5.08148 13.0607Z" fill="CurrentColor"></path>
<path d="M18.9185 10.9393L20.7868 9.07107C22.4044 7.45346 22.4044 4.83081 20.7868 3.2132C19.1692 1.5956 16.5465 1.5956 14.9289 3.2132L13.0607 5.08148L18.9185 10.9393Z" fill="CurrentColor"></path>
</svg>

    Brain Quest
    <span class="bg-green m-left-auto br-5 p-5">Coming Soon</span>
                 </a>
                 {{-- NEW NAV LINK --}}
                <div class="nav-group c-white w-full column">
                     <a onclick="
                     let child=this.closest('.nav-group').querySelector('.nav-child');
                     if(child.classList.contains('display-none')){
                        child.classList.remove('display-none');
                        this.closest('.nav-group').querySelector('.main-a .chevron').classList.add('rotate-90');

                     }else{
                     child.classList.add('display-none');
                     this.closest('.nav-group').querySelector('.main-a .chevron').classList.remove('rotate-90');

                    }
                     " class="p-10 align-center w-full main-a row g-5 no-u" >
                 <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M5.46689 4.39207C5.75949 4.68526 5.75902 5.16013 5.46583 5.45273C3.78722 7.128 2.75 9.44218 2.75 12C2.75 14.5878 3.81163 16.9262 5.52503 18.6059C5.82082 18.8959 5.82554 19.3707 5.53557 19.6665C5.24561 19.9623 4.77076 19.967 4.47497 19.677C2.48564 17.7269 1.25 15.0071 1.25 12C1.25 9.02783 2.45721 6.33616 4.40623 4.39102C4.69941 4.09842 5.17429 4.09889 5.46689 4.39207Z" fill="CurrentColor"></path>
<path d="M18.6164 4.46446C18.9122 4.17449 19.387 4.17921 19.677 4.475C21.5771 6.41326 22.75 9.07043 22.75 12C22.75 14.9645 21.5491 17.6499 19.609 19.5938C19.3164 19.887 18.8415 19.8875 18.5484 19.5949C18.2552 19.3023 18.2547 18.8274 18.5473 18.5342C20.2182 16.86 21.25 14.5512 21.25 12C21.25 9.47873 20.2422 7.1943 18.6059 5.52507C18.3159 5.22928 18.3206 4.75443 18.6164 4.46446Z" fill="CurrentColor"></path>
<path d="M8.30923 7.4876C8.59226 7.79004 8.57652 8.26465 8.27408 8.54768C7.32517 9.43567 6.75 10.6503 6.75 11.9823C6.75 13.3297 7.33869 14.5573 8.30756 15.4479C8.61251 15.7282 8.63248 16.2027 8.35216 16.5076C8.07185 16.8126 7.59739 16.8325 7.29244 16.5522C6.03967 15.4007 5.25 13.7824 5.25 11.9823C5.25 10.203 6.02148 8.60131 7.24916 7.45245C7.5516 7.16942 8.02621 7.18516 8.30923 7.4876Z" fill="CurrentColor"></path>
<path d="M15.7429 7.52562C16.0292 7.22629 16.5039 7.21574 16.8033 7.50205C18.0005 8.64717 18.75 10.2286 18.75 11.9823C18.75 13.7568 17.9825 15.3549 16.7604 16.5031C16.4586 16.7867 15.9839 16.7719 15.7003 16.47C15.4167 16.1682 15.4315 15.6935 15.7333 15.4099C16.6778 14.5225 17.25 13.3108 17.25 11.9823C17.25 10.6692 16.6911 9.47049 15.7664 8.58602C15.4671 8.29971 15.4566 7.82495 15.7429 7.52562Z" fill="CurrentColor"></path>
<path d="M12 14.0001C13.1046 14.0001 14 13.1046 14 12.0001C14 10.8955 13.1046 10.0001 12 10.0001C10.8954 10.0001 10 10.8955 10 12.0001C10 13.1046 10.8954 14.0001 12 14.0001Z" fill="CurrentColor"></path>
</svg>
     Airtime & Data
     <svg  class="m-left-auto chevron transition-ease-half" width="16" height="16" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M8.51192 4.43057C8.82641 4.161 9.29989 4.19743 9.56946 4.51192L15.5695 11.5119C15.8102 11.7928 15.8102 12.2072 15.5695 12.4881L9.56946 19.4881C9.29989 19.8026 8.82641 19.839 8.51192 19.5695C8.19743 19.2999 8.161 18.8264 8.43057 18.5119L14.0122 12L8.43057 5.48811C8.161 5.17361 8.19743 4.70014 8.51192 4.43057Z" fill="CurrentColor"></path>
</svg>

                        </a> 
                      <div style="width:calc(100% - 10px)" class="nav-child display-none m-left-10 border-left-4 border-color-bg bg-primary-transparent w-full column">
                        <a class="p-10 w-full row g-5 no-u c-inherit" onclick="
                  spa(event,'{{ url('users/airtime/topup') }}');
                  this.closest('nav').classList.add('mobile-display-none');   document.body.classList.remove('overflow-hidden');
                  ">Buy Airtime</a>
                          <a class="p-10 w-full row g-5 no-u c-inherit" onclick="
                  spa(event,'{{ url('users/data/topup') }}');
                  this.closest('nav').classList.add('mobile-display-none');   document.body.classList.remove('overflow-hidden');
                  ">Buy Data Bundle</a>
                             </div>
                </div>
                {{-- NEW NAV LINK --}}
                 <a class="p-10 pointer align-center clip-10 w-full row g-5 no-u c-white" onclick="
                  spa(event,'{{ url('users/bank/add') }}');
                  this.closest('nav').classList.add('mobile-display-none');   document.body.classList.remove('overflow-hidden');
                  ">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M18.5 3H16C15.7239 3 15.5 3.22386 15.5 3.5V3.55891L19 6.35891V3.5C19 3.22386 18.7762 3 18.5 3Z" fill="CurrentColor"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M10.75 9.5C10.75 8.80964 11.3097 8.25 12 8.25C12.6904 8.25 13.25 8.80964 13.25 9.5C13.25 10.1904 12.6904 10.75 12 10.75C11.3097 10.75 10.75 10.1904 10.75 9.5Z" fill="CurrentColor"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M20.75 10.9605L21.5315 11.5857C21.855 11.8444 22.3269 11.792 22.5857 11.4685C22.8444 11.1451 22.792 10.6731 22.4685 10.4143L14.3426 3.91362C12.9731 2.81796 11.027 2.81796 9.65742 3.91362L1.53151 10.4143C1.20806 10.6731 1.15562 11.1451 1.41438 11.4685C1.67313 11.792 2.1451 11.8444 2.46855 11.5857L3.25003 10.9605V21.25H2.00003C1.58581 21.25 1.25003 21.5858 1.25003 22C1.25003 22.4142 1.58581 22.75 2.00003 22.75H22C22.4142 22.75 22.75 22.4142 22.75 22C22.75 21.5858 22.4142 21.25 22 21.25H20.75V10.9605ZM9.25003 9.5C9.25003 7.98122 10.4812 6.75 12 6.75C13.5188 6.75 14.75 7.98122 14.75 9.5C14.75 11.0188 13.5188 12.25 12 12.25C10.4812 12.25 9.25003 11.0188 9.25003 9.5ZM12.0494 13.25C12.7143 13.25 13.2871 13.2499 13.7459 13.3116C14.2375 13.3777 14.7088 13.5268 15.091 13.909C15.4733 14.2913 15.6223 14.7625 15.6884 15.2542C15.7462 15.6842 15.7498 16.2146 15.75 16.827C15.75 16.8679 15.75 16.9091 15.75 16.9506L15.75 21.25H14.25V17C14.25 16.2717 14.2484 15.8009 14.2018 15.454C14.1581 15.1287 14.0875 15.0268 14.0304 14.9697C13.9733 14.9126 13.8713 14.842 13.546 14.7982C13.1991 14.7516 12.7283 14.75 12 14.75C11.2717 14.75 10.8009 14.7516 10.4541 14.7982C10.1288 14.842 10.0268 14.9126 9.9697 14.9697C9.9126 15.0268 9.84199 15.1287 9.79826 15.454C9.75162 15.8009 9.75003 16.2717 9.75003 17V21.25H8.25003L8.25003 16.9506C8.24999 16.2858 8.24996 15.7129 8.31163 15.2542C8.37773 14.7625 8.52679 14.2913 8.90904 13.909C9.29128 13.5268 9.76255 13.3777 10.2542 13.3116C10.7129 13.2499 11.2858 13.25 11.9507 13.25H12.0494Z" fill="CurrentColor"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M10.75 9.5C10.75 8.80964 11.3097 8.25 12 8.25C12.6904 8.25 13.25 8.80964 13.25 9.5C13.25 10.1904 12.6904 10.75 12 10.75C11.3097 10.75 10.75 10.1904 10.75 9.5Z" fill="CurrentColor"></path>
</svg>
    Add Bank
                 </a>
                 {{-- NEW NAV LINK --}}

                  <a class="p-10 align-center pointer clip-10 w-full row g-5 no-u c-white" onclick="
                  spa(event,'{{ url('users/withdraw') }}');
                  this.closest('nav').classList.add('mobile-display-none');   document.body.classList.remove('overflow-hidden');
                  ">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M20.9414 8.18881C21.5215 8.76206 21.771 9.48386 21.8877 10.3411C22 11.1668 22 12.2166 22 13.5191V13.6236C22 14.9261 22 15.9759 21.8877 16.8016C21.771 17.6589 21.5215 18.3807 20.9414 18.9539C20.3612 19.5272 19.6307 19.7738 18.7632 19.889C17.9276 20 16.8651 20 15.547 20H10.622C9.30387 20 8.24141 20 7.4058 19.889C6.53824 19.7738 5.80777 19.5272 5.22762 18.9539C4.87566 18.6062 4.64535 18.2037 4.49261 17.7495C5.36407 17.8574 6.4422 17.8573 7.68787 17.8573H12.6974C13.979 17.8573 15.0833 17.8574 15.9676 17.7399C16.9154 17.614 17.8238 17.3301 18.5607 16.602C19.2975 15.8739 19.5848 14.9762 19.7123 14.0398C19.8312 13.166 19.8311 12.0748 19.831 10.8084V10.6203C19.8311 9.38912 19.8311 8.32356 19.7219 7.46234C20.1818 7.61328 20.5893 7.84088 20.9414 8.18881Z" fill="CurrentColor"></path>
<path d="M10.1926 9.04765C9.26108 9.04765 8.50591 9.79385 8.50591 10.7143C8.50591 11.6348 9.26108 12.381 10.1926 12.381C11.1242 12.381 11.8793 11.6348 11.8793 10.7143C11.8793 9.79385 11.1242 9.04765 10.1926 9.04765Z" fill="CurrentColor"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M2.84691 5.83684C2 6.67369 2 8.02057 2 10.7143C2 13.4081 2 14.755 2.84691 15.5918C3.69381 16.4287 5.05688 16.4287 7.78303 16.4287H12.6022C15.3284 16.4287 16.6914 16.4287 17.5384 15.5918C18.3853 14.755 18.3853 13.4081 18.3853 10.7143C18.3853 8.02057 18.3853 6.67369 17.5384 5.83684C16.6914 5 15.3284 5 12.6022 5H7.78303C5.05688 5 3.69381 5 2.84691 5.83684ZM7.06015 10.7143C7.06015 9.00487 8.46261 7.61907 10.1926 7.61907C11.9226 7.61907 13.3251 9.00487 13.3251 10.7143C13.3251 12.4238 11.9226 13.8096 10.1926 13.8096C8.46261 13.8096 7.06015 12.4238 7.06015 10.7143ZM15.4937 13.3334C15.0945 13.3334 14.7709 13.0136 14.7709 12.6191V8.80956C14.7709 8.41506 15.0945 8.09526 15.4937 8.09526C15.893 8.09526 16.2166 8.41506 16.2166 8.80956V12.6191C16.2166 13.0136 15.893 13.3334 15.4937 13.3334ZM4.16864 12.6191C4.16864 13.0136 4.49228 13.3334 4.89152 13.3334C5.29075 13.3334 5.61439 13.0136 5.61439 12.6191L5.61439 8.80956C5.61439 8.41506 5.29075 8.09526 4.89152 8.09526C4.49228 8.09526 4.16864 8.41506 4.16864 8.80956L4.16864 12.6191Z" fill="CurrentColor"></path>
</svg>

                  Withdraw Funds
                 </a>
                 {{-- NEW NAV LINK --}}
                <a class="p-10 align-center pointer clip-10 w-full row g-5 no-u secondary-text"  onclick="
                  spa(event,'{{ url('users/transactions') }}');
                  this.closest('nav').classList.add('mobile-display-none');   document.body.classList.remove('overflow-hidden');
                  ">
                   <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M7.24502 2H16.755C17.9139 2 18.4933 2 18.9606 2.16261C19.8468 2.47096 20.5425 3.18719 20.842 4.09946C21 4.58055 21 5.17705 21 6.37006V20.3742C21 21.2324 20.015 21.6878 19.3919 21.1176C19.0258 20.7826 18.4742 20.7826 18.1081 21.1176L17.625 21.5597C16.9834 22.1468 16.0166 22.1468 15.375 21.5597C14.7334 20.9726 13.7666 20.9726 13.125 21.5597C12.4834 22.1468 11.5166 22.1468 10.875 21.5597C10.2334 20.9726 9.26659 20.9726 8.625 21.5597C7.98341 22.1468 7.01659 22.1468 6.375 21.5597L5.8919 21.1176C5.52583 20.7826 4.97417 20.7826 4.6081 21.1176C3.985 21.6878 3 21.2324 3 20.3742V6.37006C3 5.17705 3 4.58055 3.15795 4.09946C3.45748 3.18719 4.15322 2.47096 5.03939 2.16261C5.50671 2 6.08614 2 7.24502 2ZM7 6.75C6.58579 6.75 6.25 7.08579 6.25 7.5C6.25 7.91421 6.58579 8.25 7 8.25H7.5C7.91421 8.25 8.25 7.91421 8.25 7.5C8.25 7.08579 7.91421 6.75 7.5 6.75H7ZM10.5 6.75C10.0858 6.75 9.75 7.08579 9.75 7.5C9.75 7.91421 10.0858 8.25 10.5 8.25H17C17.4142 8.25 17.75 7.91421 17.75 7.5C17.75 7.08579 17.4142 6.75 17 6.75H10.5ZM7 10.25C6.58579 10.25 6.25 10.5858 6.25 11C6.25 11.4142 6.58579 11.75 7 11.75H7.5C7.91421 11.75 8.25 11.4142 8.25 11C8.25 10.5858 7.91421 10.25 7.5 10.25H7ZM10.5 10.25C10.0858 10.25 9.75 10.5858 9.75 11C9.75 11.4142 10.0858 11.75 10.5 11.75H17C17.4142 11.75 17.75 11.4142 17.75 11C17.75 10.5858 17.4142 10.25 17 10.25H10.5ZM7 13.75C6.58579 13.75 6.25 14.0858 6.25 14.5C6.25 14.9142 6.58579 15.25 7 15.25H7.5C7.91421 15.25 8.25 14.9142 8.25 14.5C8.25 14.0858 7.91421 13.75 7.5 13.75H7ZM10.5 13.75C10.0858 13.75 9.75 14.0858 9.75 14.5C9.75 14.9142 10.0858 15.25 10.5 15.25H17C17.4142 15.25 17.75 14.9142 17.75 14.5C17.75 14.0858 17.4142 13.75 17 13.75H10.5Z" fill="CurrentColor"></path>
</svg>



                    Transactions
                </a>
                {{-- NEW NAV LINK --}}
                 <a class="p-10 align-center pointer clip-10 w-full row g-5 no-u c-white" onclick="
                  spa(event,'{{ url('users/invite') }}');
                  this.closest('nav').classList.add('mobile-display-none');   document.body.classList.remove('overflow-hidden');
                  ">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M11.2498 2C7.03145 2.00411 4.84888 2.07958 3.46423 3.46423C2.07958 4.84888 2.00411 7.03145 2 11.2498H6.91352C6.56255 10.8114 6.30031 10.2943 6.15731 9.72228C5.61906 7.56926 7.56926 5.61906 9.72228 6.15731C10.2943 6.30031 10.8114 6.56255 11.2498 6.91352V2Z" fill="CurrentColor"></path>
<path d="M2 12.7498C2.00411 16.9681 2.07958 19.1506 3.46423 20.5353C4.84888 21.9199 7.03145 21.9954 11.2498 21.9995V14.1234C10.4701 15.6807 8.8598 16.7498 6.99976 16.7498C6.58555 16.7498 6.24976 16.414 6.24976 15.9998C6.24976 15.5856 6.58555 15.2498 6.99976 15.2498C8.53655 15.2498 9.82422 14.1831 10.1628 12.7498H2Z" fill="CurrentColor"></path>
<path d="M12.7498 21.9995C16.9681 21.9954 19.1506 21.9199 20.5353 20.5353C21.9199 19.1506 21.9954 16.9681 21.9995 12.7498H13.8367C14.1753 14.1831 15.463 15.2498 16.9998 15.2498C17.414 15.2498 17.7498 15.5856 17.7498 15.9998C17.7498 16.414 17.414 16.7498 16.9998 16.7498C15.1397 16.7498 13.5294 15.6807 12.7498 14.1234V21.9995Z" fill="CurrentColor"></path>
<path d="M21.9995 11.2498C21.9954 7.03145 21.9199 4.84888 20.5353 3.46423C19.1506 2.07958 16.9681 2.00411 12.7498 2V6.91352C13.1882 6.56255 13.7053 6.30031 14.2772 6.15731C16.4303 5.61906 18.3805 7.56926 17.8422 9.72228C17.6992 10.2943 17.437 10.8114 17.086 11.2498H21.9995Z" fill="CurrentColor"></path>
<path d="M9.35847 7.61252C10.47 7.8904 11.2498 8.88911 11.2498 10.0348V11.2498H10.0348C8.88911 11.2498 7.8904 10.47 7.61252 9.35847C7.34891 8.30403 8.30403 7.34891 9.35847 7.61252Z" fill="CurrentColor"></path>
<path d="M12.7498 10.0348V11.2498H13.9647C15.1104 11.2498 16.1091 10.47 16.387 9.35847C16.6506 8.30403 15.6955 7.34891 14.6411 7.61252C13.5295 7.8904 12.7498 8.88911 12.7498 10.0348Z" fill="CurrentColor"></path>
</svg>
       Refer & Earn
                 </a>
                 {{-- NEW NAV LINK --}}
                    <a class="p-10 align-center pointer clip-10 w-full row g-5 no-u c-white" onclick="
                  spa(event,'{{ url('users/team') }}');
                  this.closest('nav').classList.add('mobile-display-none');   document.body.classList.remove('overflow-hidden');
                  ">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M15.5 7.5C15.5 9.433 13.933 11 12 11C10.067 11 8.5 9.433 8.5 7.5C8.5 5.567 10.067 4 12 4C13.933 4 15.5 5.567 15.5 7.5Z" fill="CurrentColor"></path>
<path d="M18 16.5C18 18.433 15.3137 20 12 20C8.68629 20 6 18.433 6 16.5C6 14.567 8.68629 13 12 13C15.3137 13 18 14.567 18 16.5Z" fill="CurrentColor"></path>
<path d="M7.12205 5C7.29951 5 7.47276 5.01741 7.64005 5.05056C7.23249 5.77446 7 6.61008 7 7.5C7 8.36825 7.22131 9.18482 7.61059 9.89636C7.45245 9.92583 7.28912 9.94126 7.12205 9.94126C5.70763 9.94126 4.56102 8.83512 4.56102 7.47063C4.56102 6.10614 5.70763 5 7.12205 5Z" fill="CurrentColor"></path>
<path d="M5.44734 18.986C4.87942 18.3071 4.5 17.474 4.5 16.5C4.5 15.5558 4.85657 14.744 5.39578 14.0767C3.4911 14.2245 2 15.2662 2 16.5294C2 17.8044 3.5173 18.8538 5.44734 18.986Z" fill="CurrentColor"></path>
<path d="M16.9999 7.5C16.9999 8.36825 16.7786 9.18482 16.3893 9.89636C16.5475 9.92583 16.7108 9.94126 16.8779 9.94126C18.2923 9.94126 19.4389 8.83512 19.4389 7.47063C19.4389 6.10614 18.2923 5 16.8779 5C16.7004 5 16.5272 5.01741 16.3599 5.05056C16.7674 5.77446 16.9999 6.61008 16.9999 7.5Z" fill="CurrentColor"></path>
<path d="M18.5526 18.986C20.4826 18.8538 21.9999 17.8044 21.9999 16.5294C21.9999 15.2662 20.5088 14.2245 18.6041 14.0767C19.1433 14.744 19.4999 15.5558 19.4999 16.5C19.4999 17.474 19.1205 18.3071 18.5526 18.986Z" fill="CurrentColor"></path>
</svg>


                My Referrals
                 </a>
                 {{-- NEW NAV LINK --}}
              
                 
              
               
               
                 
                 
                 <a class="p-10 align-center pointer clip-10 w-full row g-5 no-u secondary-text"  onclick="
                  spa(event,'{{ url('users/settings') }}');
                  this.closest('nav').classList.add('mobile-display-none');   document.body.classList.remove('overflow-hidden');
                  ">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M14.2788 2.15224C13.9085 2 13.439 2 12.5 2C11.561 2 11.0915 2 10.7212 2.15224C10.2274 2.35523 9.83509 2.74458 9.63056 3.23463C9.53719 3.45834 9.50065 3.7185 9.48635 4.09799C9.46534 4.65568 9.17716 5.17189 8.69017 5.45093C8.20318 5.72996 7.60864 5.71954 7.11149 5.45876C6.77318 5.2813 6.52789 5.18262 6.28599 5.15102C5.75609 5.08178 5.22018 5.22429 4.79616 5.5472C4.47814 5.78938 4.24339 6.1929 3.7739 6.99993C3.30441 7.80697 3.06967 8.21048 3.01735 8.60491C2.94758 9.1308 3.09118 9.66266 3.41655 10.0835C3.56506 10.2756 3.77377 10.437 4.0977 10.639C4.57391 10.936 4.88032 11.4419 4.88029 12C4.88026 12.5581 4.57386 13.0639 4.0977 13.3608C3.77372 13.5629 3.56497 13.7244 3.41645 13.9165C3.09108 14.3373 2.94749 14.8691 3.01725 15.395C3.06957 15.7894 3.30432 16.193 3.7738 17C4.24329 17.807 4.47804 18.2106 4.79606 18.4527C5.22008 18.7756 5.75599 18.9181 6.28589 18.8489C6.52778 18.8173 6.77305 18.7186 7.11133 18.5412C7.60852 18.2804 8.2031 18.27 8.69012 18.549C9.17714 18.8281 9.46533 19.3443 9.48635 19.9021C9.50065 20.2815 9.53719 20.5417 9.63056 20.7654C9.83509 21.2554 10.2274 21.6448 10.7212 21.8478C11.0915 22 11.561 22 12.5 22C13.439 22 13.9085 22 14.2788 21.8478C14.7726 21.6448 15.1649 21.2554 15.3694 20.7654C15.4628 20.5417 15.4994 20.2815 15.5137 19.902C15.5347 19.3443 15.8228 18.8281 16.3098 18.549C16.7968 18.2699 17.3914 18.2804 17.8886 18.5412C18.2269 18.7186 18.4721 18.8172 18.714 18.8488C19.2439 18.9181 19.7798 18.7756 20.2038 18.4527C20.5219 18.2105 20.7566 17.807 21.2261 16.9999C21.6956 16.1929 21.9303 15.7894 21.9827 15.395C22.0524 14.8691 21.9088 14.3372 21.5835 13.9164C21.4349 13.7243 21.2262 13.5628 20.9022 13.3608C20.4261 13.0639 20.1197 12.558 20.1197 11.9999C20.1197 11.4418 20.4261 10.9361 20.9022 10.6392C21.2263 10.4371 21.435 10.2757 21.5836 10.0835C21.9089 9.66273 22.0525 9.13087 21.9828 8.60497C21.9304 8.21055 21.6957 7.80703 21.2262 7C20.7567 6.19297 20.522 5.78945 20.2039 5.54727C19.7799 5.22436 19.244 5.08185 18.7141 5.15109C18.4722 5.18269 18.2269 5.28136 17.8887 5.4588C17.3915 5.71959 16.7969 5.73002 16.3099 5.45096C15.8229 5.17191 15.5347 4.65566 15.5136 4.09794C15.4993 3.71848 15.4628 3.45833 15.3694 3.23463C15.1649 2.74458 14.7726 2.35523 14.2788 2.15224ZM12.5 15C14.1695 15 15.5228 13.6569 15.5228 12C15.5228 10.3431 14.1695 9 12.5 9C10.8305 9 9.47716 10.3431 9.47716 12C9.47716 13.6569 10.8305 15 12.5 15Z" fill="CurrentColor"></path>
</svg>

                      Account Settings
                 </a>
                 {{-- NEW NAV LINK --}}
                




                 
                 

                 <a class="p-10 pointer clip-10 pos-sticky m-top-auto stick-bottom bg-inherit w-full row g-5 no-u c-red" href="">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M10.8447 8.09467C10.5518 8.38756 10.5518 8.86244 10.8447 9.15533L12.5643 10.875H4.375C3.96079 10.875 3.625 11.2108 3.625 11.625C3.625 12.0392 3.96079 12.375 4.375 12.375H12.5643L10.8447 14.0947C10.5518 14.3876 10.5518 14.8624 10.8447 15.1553C11.1376 15.4482 11.6124 15.4482 11.9053 15.1553L14.9053 12.1553C15.1982 11.8624 15.1982 11.3876 14.9053 11.0947L11.9053 8.09467C11.6124 7.80178 11.1376 7.80178 10.8447 8.09467Z" fill="CurrentColor"></path>
<path d="M12.375 5.87745C12.375 6.3254 12.6492 6.71725 12.966 7.03401L15.966 10.034C16.8447 10.9127 16.8447 12.3373 15.966 13.216L12.966 16.216C12.6492 16.5327 12.375 16.9246 12.375 17.3726V19.625C16.7933 19.625 20.375 16.0433 20.375 11.625C20.375 7.20672 16.7933 3.625 12.375 3.625V5.87745Z" fill="CurrentColor"></path>
</svg>


                  Logout
                 </a>


            </div>

        </section>
    </nav>
    <main class="c-white">
       
        @yield('main')
<section onclick="HidePopUp()" class="popup">
  <div onclick="event.stopPropagation()" style="background:white;color:black;" class="child">

  </div>
</section>
<section onclick="HideSlideUp()" class="slideup">
  <div onclick="event.stopPropagation()" class="child bg-secondary-dark">@yield('slideup_child')</div>
</section>
    </main>
    <footer style="z-index:3000;" class="w-full m-top-auto no-select bottom-0 c-white p-10 pos-fixed stick-bottom bg-dim-transparent backdrop-blur-5 grid grid-5 place-center g-10 space-between border-top-1 border-color-dim align-center text-center c-text">
   
   <div onclick="
   try{
   let f_links=document.querySelectorAll('footer .f-links');
   f_links.forEach((data)=>{
   data.querySelector('.icon').classList.remove('bg-primary');
   data.querySelector('.icon').classList.remove('primary-text');
   data.querySelector('span').classList.remove('c-primary');
   });
    this.querySelector('.icon').classList.add('bg-primary');
    this.querySelector('.icon').classList.add('primary-text');
    this.querySelector('span').classList.add('c-primary');
    spa(event,'{{ url('users/tasks') }}')
   }catch(error){
   CreateNotify('error',error.stack);
   }
    " class="column pc-pointer f-links w-full g-2 p-5 align-center">
    <div class="icon transition-ease-full w-full br-1000 column justify-center p-2">
     <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M7.2915 4.78553V4.72453C7.2915 4.38601 7.30305 3.94261 7.4565 3.50336C7.9652 2.04714 9.35853 1 11 1H13C14.6415 1 16.0349 2.04714 16.5436 3.50336C16.697 3.94261 16.7085 4.38601 16.7085 4.72453V4.78555C19.212 5.52304 20.9631 7.79709 20.9994 10.4163C21 10.4574 21 10.5036 21 10.596V12.9191C20.8982 12.9191 20.7947 12.9398 20.6956 12.9835C15.1597 15.4273 8.84065 15.4273 3.30479 12.9835C3.2056 12.9397 3.10197 12.919 3 12.9191V10.596C3 10.5036 3 10.4574 3.00057 10.4163C3.03694 7.79707 4.78799 5.52301 7.2915 4.78553ZM8.87362 3.99175C9.17937 3.11649 10.017 2.48989 11 2.48989H13C13.9831 2.48989 14.8207 3.11649 15.1264 3.99175C15.1719 4.12188 15.194 4.27205 15.2032 4.46183C13.0832 4.10168 10.9169 4.10168 8.79689 4.46182C8.80602 4.27205 8.82816 4.12188 8.87362 3.99175ZM9.25 12.6708C9.25 12.2594 9.58579 11.9258 10 11.9258H14C14.4142 11.9258 14.75 12.2594 14.75 12.6708C14.75 13.0822 14.4142 13.4157 14 13.4157H10C9.58579 13.4157 9.25 13.0822 9.25 12.6708Z" fill="CurrentColor"></path>
<path d="M21 14.4769C20.1 14.8588 19.1814 15.1809 18.2502 15.4432V16.644C18.2502 17.0554 17.9144 17.3889 17.5002 17.3889C17.086 17.3889 16.7502 17.0554 16.7502 16.644V15.8119C12.1726 16.7754 7.36827 16.3304 3 14.4767V16.0231C3 18.1267 4.47101 19.9482 6.53853 20.4045C10.1356 21.1985 13.8644 21.1985 17.4615 20.4045C19.529 19.9482 21 18.1267 21 16.0231V14.4769Z" fill="CurrentColor"></path>
</svg>
   </div>
    <span class="transition-ease-full">Tasks</span>
   </div>
   <div onclick="
   try{
   let f_links=document.querySelectorAll('footer .f-links');
   f_links.forEach((data)=>{
   data.querySelector('.icon').classList.remove('bg-primary');
   data.querySelector('.icon').classList.remove('primary-text');
   data.querySelector('span').classList.remove('c-primary');
   });
    this.querySelector('.icon').classList.add('bg-primary');
    this.querySelector('.icon').classList.add('primary-text');
    this.querySelector('span').classList.add('c-primary');
    spa(event,'{{ url('users/spin') }}')
   }catch(error){
   CreateNotify('error',error.stack);
   }
    " class="column f-links pc-pointer w-full p-5 g-2 align-center">
    <div class="icon transition-ease-full w-full br-1000 column justify-center p-2">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22ZM13.9563 14.0949C13.763 14.2644 13.5167 14.3629 13.024 14.56C10.7142 15.4839 9.55936 15.9459 8.89971 15.4976C8.7433 15.3913 8.6084 15.2564 8.50212 15.1C8.05386 14.4404 8.51582 13.2855 9.43973 10.9757C9.6368 10.483 9.73533 10.2367 9.9048 10.0434C9.94799 9.99419 9.99435 9.94782 10.0436 9.90464C10.2368 9.73517 10.4832 9.63663 10.9759 9.43956C13.2856 8.51565 14.4405 8.0537 15.1002 8.50196C15.2566 8.60824 15.3915 8.74314 15.4978 8.89954C15.946 9.5592 15.4841 10.7141 14.5602 13.0239C14.3631 13.5165 14.2646 13.7629 14.0951 13.9561C14.0519 14.0054 14.0055 14.0517 13.9563 14.0949Z" fill="CurrentColor"></path>
</svg>

    </div>
    <span class="transition-ease-full">Spin</span>
   </div>
    <div style="transform: translateY(-50%);" onclick="
    let f_links=document.querySelectorAll('footer .f-links');
   f_links.forEach((data)=>{
   data.querySelector('.icon').classList.remove('bg-primary');
   data.querySelector('.icon').classList.remove('primary-text');
   data.querySelector('span').classList.remove('c-primary');
   });
    spa(event,'{{ url('users/dashboard') }}')" class="column home-nav g-2 pc-pointer align-center bg-primary primary-text p-10 circle clip-circle">
    <svg width="30" height="30" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M13.1061 22H10.8939C7.44737 22 5.72409 22 4.54903 20.9882C3.37396 19.9764 3.13025 18.2827 2.64284 14.8952L2.36407 12.9579C1.98463 10.3208 1.79491 9.00229 2.33537 7.87495C2.87583 6.7476 4.02619 6.06234 6.32691 4.69181L7.71175 3.86687C9.80104 2.62229 10.8457 2 12 2C13.1543 2 14.199 2.62229 16.2882 3.86687L17.6731 4.69181C19.9738 6.06234 21.1242 6.7476 21.6646 7.87495C22.2051 9.00229 22.0154 10.3208 21.6359 12.9579L21.3572 14.8952C20.8697 18.2827 20.626 19.9764 19.451 20.9882C18.2759 22 16.5526 22 13.1061 22ZM8.39757 15.5532C8.64423 15.2204 9.11395 15.1506 9.44671 15.3973C10.1751 15.9371 11.0542 16.2498 12.0001 16.2498C12.946 16.2498 13.8251 15.9371 14.5535 15.3973C14.8863 15.1506 15.356 15.2204 15.6026 15.5532C15.8493 15.8859 15.7795 16.3557 15.4467 16.6023C14.4743 17.3231 13.2851 17.7498 12.0001 17.7498C10.7151 17.7498 9.5259 17.3231 8.55349 16.6023C8.22072 16.3557 8.15092 15.8859 8.39757 15.5532Z" fill="CurrentColor"></path>
</svg>


   </div>
   
    <div onclick="
   try{
   let f_links=document.querySelectorAll('footer .f-links');
   f_links.forEach((data)=>{
   data.querySelector('.icon').classList.remove('bg-primary');
   data.querySelector('.icon').classList.remove('primary-text');
   data.querySelector('span').classList.remove('c-primary');
   });
    this.querySelector('.icon').classList.add('bg-primary');
    this.querySelector('.icon').classList.add('primary-text');
    this.querySelector('span').classList.add('c-primary');
    spa(event,'{{ url('users/team') }}');
   }catch(error){
   CreateNotify('error',error.stack);
   }
    " class="column f-links pc-pointer w-full p-5 g-2 align-center">
  <div class="icon transition-ease-full w-full br-1000 column justify-center p-2">
     <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M15.5 7.5C15.5 9.433 13.933 11 12 11C10.067 11 8.5 9.433 8.5 7.5C8.5 5.567 10.067 4 12 4C13.933 4 15.5 5.567 15.5 7.5Z" fill="CurrentColor"></path>
<path d="M18 16.5C18 18.433 15.3137 20 12 20C8.68629 20 6 18.433 6 16.5C6 14.567 8.68629 13 12 13C15.3137 13 18 14.567 18 16.5Z" fill="CurrentColor"></path>
<path d="M7.12205 5C7.29951 5 7.47276 5.01741 7.64005 5.05056C7.23249 5.77446 7 6.61008 7 7.5C7 8.36825 7.22131 9.18482 7.61059 9.89636C7.45245 9.92583 7.28912 9.94126 7.12205 9.94126C5.70763 9.94126 4.56102 8.83512 4.56102 7.47063C4.56102 6.10614 5.70763 5 7.12205 5Z" fill="CurrentColor"></path>
<path d="M5.44734 18.986C4.87942 18.3071 4.5 17.474 4.5 16.5C4.5 15.5558 4.85657 14.744 5.39578 14.0767C3.4911 14.2245 2 15.2662 2 16.5294C2 17.8044 3.5173 18.8538 5.44734 18.986Z" fill="CurrentColor"></path>
<path d="M16.9999 7.5C16.9999 8.36825 16.7786 9.18482 16.3893 9.89636C16.5475 9.92583 16.7108 9.94126 16.8779 9.94126C18.2923 9.94126 19.4389 8.83512 19.4389 7.47063C19.4389 6.10614 18.2923 5 16.8779 5C16.7004 5 16.5272 5.01741 16.3599 5.05056C16.7674 5.77446 16.9999 6.61008 16.9999 7.5Z" fill="CurrentColor"></path>
<path d="M18.5526 18.986C20.4826 18.8538 21.9999 17.8044 21.9999 16.5294C21.9999 15.2662 20.5088 14.2245 18.6041 14.0767C19.1433 14.744 19.4999 15.5558 19.4999 16.5C19.4999 17.474 19.1205 18.3071 18.5526 18.986Z" fill="CurrentColor"></path>
</svg>

  </div>
      <span class="transition-ease-full">Team</span>
   </div>
    <div onclick="
   try{
   let f_links=document.querySelectorAll('footer .f-links');
   f_links.forEach((data)=>{
   data.querySelector('.icon').classList.remove('bg-primary');
   data.querySelector('.icon').classList.remove('primary-text');
   data.querySelector('span').classList.remove('c-primary');
   });
    this.querySelector('.icon').classList.add('bg-primary');
    this.querySelector('.icon').classList.add('primary-text');
    this.querySelector('span').classList.add('c-primary');
    spa(event,'{{ url('users/more') }}');
   }catch(error){
   CreateNotify('error',error.stack);
   }
    " class="column f-links pc-pointer w-full p-5 g-2 align-center">
  <div class="icon transition-ease-full w-full br-1000 column justify-center p-2">
    <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M3.25 7C3.25 6.58579 3.58579 6.25 4 6.25H20C20.4142 6.25 20.75 6.58579 20.75 7C20.75 7.41421 20.4142 7.75 20 7.75H4C3.58579 7.75 3.25 7.41421 3.25 7ZM3.25 12C3.25 11.5858 3.58579 11.25 4 11.25H15C15.4142 11.25 15.75 11.5858 15.75 12C15.75 12.4142 15.4142 12.75 15 12.75H4C3.58579 12.75 3.25 12.4142 3.25 12ZM3.25 17C3.25 16.5858 3.58579 16.25 4 16.25H9C9.41421 16.25 9.75 16.5858 9.75 17C9.75 17.4142 9.41421 17.75 9 17.75H4C3.58579 17.75 3.25 17.4142 3.25 17Z" fill="CurrentColor"></path>
</svg>


  </div>
      <span class="transition-ease-full">More</span>
   </div>
   
    </footer>

    <script src="{{ asset('vitecss/js/app.js?v='.config('versions.vite_version').'') }}"></script>
    <script>
window.onload=function(){
        document.querySelector('.loader').remove();
        document.querySelector('body').classList.remove('overflow-hidden');
       
  let max_bottom=document.querySelector('footer').getBoundingClientRect().bottom;
  document.querySelector('main').style.paddingBottom=max_bottom - document.querySelector('.home-nav').getBoundingClientRect().top + 'px'; 
 // document.querySelector('main').style.paddingBottom=document.querySelector('footer').offsetHeight + 'px';
}
    </script>
    @yield('js')
</body>
</html>