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
    <title>{{ config('app.name') }} | Admins | @yield('title')</title>
    <style>
      :root{
        --text:black;
      }
      .nav-profile{
        background-color: var(--bg);
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='400' height='400' viewBox='0 0 800 800'%3E%3Cg fill='none' stroke='%23404' stroke-width='1'%3E%3Cpath d='M769 229L1037 260.9M927 880L731 737 520 660 309 538 40 599 295 764 126.5 879.5 40 599-197 493 102 382-31 229 126.5 79.5-69-63'/%3E%3Cpath d='M-31 229L237 261 390 382 603 493 308.5 537.5 101.5 381.5M370 905L295 764'/%3E%3Cpath d='M520 660L578 842 731 737 840 599 603 493 520 660 295 764 309 538 390 382 539 269 769 229 577.5 41.5 370 105 295 -36 126.5 79.5 237 261 102 382 40 599 -69 737 127 880'/%3E%3Cpath d='M520-140L578.5 42.5 731-63M603 493L539 269 237 261 370 105M902 382L539 269M390 382L102 382'/%3E%3Cpath d='M-222 42L126.5 79.5 370 105 539 269 577.5 41.5 927 80 769 229 902 382 603 493 731 737M295-36L577.5 41.5M578 842L295 764M40-201L127 80M102 382L-261 269'/%3E%3C/g%3E%3Cg fill='%23505'%3E%3Ccircle cx='769' cy='229' r='5'/%3E%3Ccircle cx='539' cy='269' r='5'/%3E%3Ccircle cx='603' cy='493' r='5'/%3E%3Ccircle cx='731' cy='737' r='5'/%3E%3Ccircle cx='520' cy='660' r='5'/%3E%3Ccircle cx='309' cy='538' r='5'/%3E%3Ccircle cx='295' cy='764' r='5'/%3E%3Ccircle cx='40' cy='599' r='5'/%3E%3Ccircle cx='102' cy='382' r='5'/%3E%3Ccircle cx='127' cy='80' r='5'/%3E%3Ccircle cx='370' cy='105' r='5'/%3E%3Ccircle cx='578' cy='42' r='5'/%3E%3Ccircle cx='237' cy='261' r='5'/%3E%3Ccircle cx='390' cy='382' r='5'/%3E%3C/g%3E%3C/svg%3E");
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
     <style>
    .notification-icon {
      position: relative;
      display: inline-block;
      width: 25px;
      height: 25px;
    
    }
    
    .bell-icon {
      width: 100%;
      height: 100%;
    }
    
    .notification-badge {
      position: absolute;
      top: -2px;
      right: -2px;
      min-width: 13px;
      height: 13px;
      padding:0 3px;
      background-color: #fa3e3e;
      border-radius: 8px;
      color: white;
    
      font-size: 7px;
      font-weight: bold;
      line-height: 16px;
      text-align: center;
      box-shadow: 0 0 0 1.5px white;
      transition: transform 0.2s ease;
     
    }
    

    
   
  </style>
</head>

<body class="overflow-hidden">
   <div class="pos-fixed c-white loader top-0 left-0 right-0 column justify-center bottom-0 z-index-9000 bg">
  <svg height="100" width="100" viewBox="0 0 105 105" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><circle cx="12.5" cy="12.5" r="12.5"><animate attributeName="fill-opacity" begin="0s" dur="1s" values="1;.2;1" calcMode="linear" repeatCount="indefinite"/></circle><circle cx="12.5" cy="52.5" r="12.5" fill-opacity=".5"><animate attributeName="fill-opacity" begin="100ms" dur="1s" values="1;.2;1" calcMode="linear" repeatCount="indefinite"/></circle><circle cx="52.5" cy="12.5" r="12.5"><animate attributeName="fill-opacity" begin="300ms" dur="1s" values="1;.2;1" calcMode="linear" repeatCount="indefinite"/></circle><circle cx="52.5" cy="52.5" r="12.5"><animate attributeName="fill-opacity" begin="600ms" dur="1s" values="1;.2;1" calcMode="linear" repeatCount="indefinite"/></circle><circle cx="92.5" cy="12.5" r="12.5"><animate attributeName="fill-opacity" begin="800ms" dur="1s" values="1;.2;1" calcMode="linear" repeatCount="indefinite"/></circle><circle cx="92.5" cy="52.5" r="12.5"><animate attributeName="fill-opacity" begin="400ms" dur="1s" values="1;.2;1" calcMode="linear" repeatCount="indefinite"/></circle><circle cx="12.5" cy="92.5" r="12.5"><animate attributeName="fill-opacity" begin="700ms" dur="1s" values="1;.2;1" calcMode="linear" repeatCount="indefinite"/></circle><circle cx="52.5" cy="92.5" r="12.5"><animate attributeName="fill-opacity" begin="500ms" dur="1s" values="1;.2;1" calcMode="linear" repeatCount="indefinite"/></circle><circle cx="92.5" cy="92.5" r="12.5"><animate attributeName="fill-opacity" begin="200ms" dur="1s" values="1;.2;1" calcMode="linear" repeatCount="indefinite"/></circle></svg> </div>
    <header  style="z-index: 5000" class="pos-sticky average c-white bg p-10 top-0 left-0 right-0 bottom-0 row align-center g-10">
        <div onclick="
            document.querySelector('nav').classList.remove('mobile-display-none');
             document.querySelector('nav section.nav').classList.add('animation-trans-in-from-left');
            

            " class="h-40 w-40 column pc-display-none justify-center c-bg br-10 p-10 bg-white">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="CurrentColor" viewBox="0 0 256 256"><path d="M228,128a12,12,0,0,1-12,12H40a12,12,0,0,1,0-24H216A12,12,0,0,1,228,128ZM40,76H216a12,12,0,0,0,0-24H40a12,12,0,0,0,0,24ZM216,180H40a12,12,0,0,0,0,24H216a12,12,0,0,0,0-24Z"></path></svg>
            
        </div>
        <img src="{{ asset('favicon/logo.png?v=1.2') }}" alt="Logo" class="h-30">
        <div class="m-left-auto row g-5 align-center">
            <div onclick="window.location.href='{{ url('admins/notifications') }}'" class="notification-icon">
    <!-- Bell icon -->
    <svg height="30" width="30" class="bell-icon" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
      <path d="M221.8,175.94C216.25,166.38,208,139.33,208,104a80,80,0,1,0-160,0c0,35.34-8.26,62.38-13.81,71.94A16,16,0,0,0,48,200H88.81a40,40,0,0,0,78.38,0H208a16,16,0,0,0,13.8-24.06ZM128,216a24,24,0,0,1-22.62-16h45.24A24,24,0,0,1,128,216Z"/>
    </svg>
    {!! NotifyAmount() !!}
  </div>
        </div>
    </header>
    <nav style="z-index: 5000" onclick="
    this.querySelector('section.nav').classList.remove('animation-trans-in-from-lef');
    this.classList.add('mobile-display-none');
  
    " class="pos-fixed mobile-display-none high top-0 left-0 right-0 bottom-0 bg-black-transparent average">
        <section onclick="event.stopPropagation()" class="nav transition-ease-half overflow-auto column bg-white h-full w-semi-full">
            <div class="nav-profile pos-sticky stick-top w-full column g-10 p-10">
                <img src="{{ asset('images/avatar.svg') }}" alt="" class="h-70 w-70 circle border-4 border-color-primary box-shadow">
           <strong class="desc " style="font-family:titan one;color:var(--primary);font-weight:100">{{ ucfirst(Auth::guard('admins')->user()->tag) }}</strong>
            </div>
            <div class="nav-links flex-auto bg-inherit w-full column">
                <a class="p-10 w-full row g-5 no-u c-black" href="{{ url('admins/dashboard') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="CurrentColor" viewBox="0 0 256 256"><path d="M80,40a40,40,0,1,0,40,40A40,40,0,0,0,80,40Zm0,64a24,24,0,1,1,24-24A24,24,0,0,1,80,104Zm96,16a40,40,0,1,0-40-40A40,40,0,0,0,176,120Zm0-64a24,24,0,1,1-24,24A24,24,0,0,1,176,56ZM80,136a40,40,0,1,0,40,40A40,40,0,0,0,80,136Zm0,64a24,24,0,1,1,24-24A24,24,0,0,1,80,200Zm96-64a40,40,0,1,0,40,40A40,40,0,0,0,176,136Zm0,64a24,24,0,1,1,24-24A24,24,0,0,1,176,200Z"></path></svg>


                    Dashboard
                <svg class="m-left-auto" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="CurrentColor" viewBox="0 0 256 256"><path d="M141.66,133.66l-80,80a8,8,0,0,1-11.32-11.32L124.69,128,50.34,53.66A8,8,0,0,1,61.66,42.34l80,80A8,8,0,0,1,141.66,133.66Zm80-11.32-80-80a8,8,0,0,0-11.32,11.32L204.69,128l-74.35,74.34a8,8,0,0,0,11.32,11.32l80-80A8,8,0,0,0,221.66,122.34Z"></path></svg>
                </a>
                
                <div class="nav-group w-full column">
                     <a onclick="
                     let child=this.closest('.nav-group').querySelector('.nav-child');
                     if(child.classList.contains('display-none')){
                        child.classList.remove('display-none');
                        this.closest('.nav-group').querySelector('.main-a .chevron').classList.add('rotate-90');

                     }else{
                     child.classList.add('display-none');
                     this.closest('.nav-group').querySelector('.main-a .chevron').classList.remove('rotate-90');

                    }
                     " class="p-10 w-full main-a row g-5 no-u c-black" >
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="CurrentColor" viewBox="0 0 256 256"><path d="M244.8,150.4a8,8,0,0,1-11.2-1.6A51.6,51.6,0,0,0,192,128a8,8,0,0,1-7.37-4.89,8,8,0,0,1,0-6.22A8,8,0,0,1,192,112a24,24,0,1,0-23.24-30,8,8,0,1,1-15.5-4A40,40,0,1,1,219,117.51a67.94,67.94,0,0,1,27.43,21.68A8,8,0,0,1,244.8,150.4ZM190.92,212a8,8,0,1,1-13.84,8,57,57,0,0,0-98.16,0,8,8,0,1,1-13.84-8,72.06,72.06,0,0,1,33.74-29.92,48,48,0,1,1,58.36,0A72.06,72.06,0,0,1,190.92,212ZM128,176a32,32,0,1,0-32-32A32,32,0,0,0,128,176ZM72,120a8,8,0,0,0-8-8A24,24,0,1,1,87.24,82a8,8,0,1,0,15.5-4A40,40,0,1,0,37,117.51,67.94,67.94,0,0,0,9.6,139.19a8,8,0,1,0,12.8,9.61A51.6,51.6,0,0,1,64,128,8,8,0,0,0,72,120Z"></path></svg>
                       Users
                      <svg class="m-left-auto chevron transition-ease-half" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="CurrentColor" viewBox="0 0 256 256"><path d="M141.66,133.66l-80,80a8,8,0,0,1-11.32-11.32L124.69,128,50.34,53.66A8,8,0,0,1,61.66,42.34l80,80A8,8,0,0,1,141.66,133.66Zm80-11.32-80-80a8,8,0,0,0-11.32,11.32L204.69,128l-74.35,74.34a8,8,0,0,0,11.32,11.32l80-80A8,8,0,0,0,221.66,122.34Z"></path></svg>
                      </a> 
                      <div style="width:calc(100% - 10px)" class="nav-child display-none m-left-10 border-left-4 border-color-bg bg-primary-transparent w-full column">
                        <a class="p-10 w-full row g-5 no-u c-black" href="{{ url('admins/users/all') }}">All Users</a>
                          <a class="p-10 w-full row g-5 no-u c-black" href="{{ url('admins/users/active') }}">Active Users</a>
                            <a class="p-10 w-full row g-5 no-u c-black" href="{{ url('admins/users/banned') }}">Banned Users</a>
                             <a class="p-10 w-full row g-5 no-u c-black" href="{{ url('admins/vendors') }}">Vendors</a>
                      </div>
                </div>
                 <div class="nav-group w-full column">
                     <a onclick="
                     let child=this.closest('.nav-group').querySelector('.nav-child');
                     if(child.classList.contains('display-none')){
                        child.classList.remove('display-none');
                        this.closest('.nav-group').querySelector('.main-a .chevron').classList.add('rotate-90');

                     }else{
                     child.classList.add('display-none');
                     this.closest('.nav-group').querySelector('.main-a .chevron').classList.remove('rotate-90');

                    }
                     " class="p-10 w-full main-a row g-5 no-u c-black" >
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="CurrentColor" viewBox="0 0 256 256"><path d="M224,64H176V56a24,24,0,0,0-24-24H104A24,24,0,0,0,80,56v8H32A16,16,0,0,0,16,80V192a16,16,0,0,0,16,16H224a16,16,0,0,0,16-16V80A16,16,0,0,0,224,64ZM96,56a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8v8H96ZM224,80v32H192v-8a8,8,0,0,0-16,0v8H80v-8a8,8,0,0,0-16,0v8H32V80Zm0,112H32V128H64v8a8,8,0,0,0,16,0v-8h96v8a8,8,0,0,0,16,0v-8h32v64Z"></path></svg>
                      Packages
                      <svg class="m-left-auto chevron transition-ease-half" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="CurrentColor" viewBox="0 0 256 256"><path d="M141.66,133.66l-80,80a8,8,0,0,1-11.32-11.32L124.69,128,50.34,53.66A8,8,0,0,1,61.66,42.34l80,80A8,8,0,0,1,141.66,133.66Zm80-11.32-80-80a8,8,0,0,0-11.32,11.32L204.69,128l-74.35,74.34a8,8,0,0,0,11.32,11.32l80-80A8,8,0,0,0,221.66,122.34Z"></path></svg>
                      </a> 
                      <div style="width:calc(100% - 10px)" class="nav-child display-none m-left-10 border-left-4 border-color-bg bg-primary-transparent w-full column">
                        <a class="p-10 w-full row g-5 no-u c-black" href="{{ url('admins/packages/add') }}">Add Package</a>
                          <a class="p-10 w-full row g-5 no-u c-black" href="{{ url('admins/packages/manage') }}">Manage Packages</a>
                           
                      </div>
                </div>
                 
                <div class="nav-group w-full column">
                     <a onclick="
                     let child=this.closest('.nav-group').querySelector('.nav-child');
                     if(child.classList.contains('display-none')){
                        child.classList.remove('display-none');
                        this.closest('.nav-group').querySelector('.main-a .chevron').classList.add('rotate-90');

                     }else{
                     child.classList.add('display-none');
                     this.closest('.nav-group').querySelector('.main-a .chevron').classList.remove('rotate-90');

                    }
                     " class="p-10 w-full main-a row g-5 no-u c-black" >
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="CurrentColor" viewBox="0 0 256 256"><path d="M243.31,136,144,36.69A15.86,15.86,0,0,0,132.69,32H40a8,8,0,0,0-8,8v92.69A15.86,15.86,0,0,0,36.69,144L136,243.31a16,16,0,0,0,22.63,0l84.68-84.68a16,16,0,0,0,0-22.63Zm-96,96L48,132.69V48h84.69L232,147.31ZM96,84A12,12,0,1,1,84,72,12,12,0,0,1,96,84Z"></path></svg>
                      Coupon Codes
                      <svg class="m-left-auto chevron transition-ease-half" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="CurrentColor" viewBox="0 0 256 256"><path d="M141.66,133.66l-80,80a8,8,0,0,1-11.32-11.32L124.69,128,50.34,53.66A8,8,0,0,1,61.66,42.34l80,80A8,8,0,0,1,141.66,133.66Zm80-11.32-80-80a8,8,0,0,0-11.32,11.32L204.69,128l-74.35,74.34a8,8,0,0,0,11.32,11.32l80-80A8,8,0,0,0,221.66,122.34Z"></path></svg>
                      </a> 
                      <div style="width:calc(100% - 10px)" class="nav-child display-none m-left-10 border-left-4 border-color-bg bg-primary-transparent w-full column">
                        <a class="p-10 w-full row g-5 no-u c-black" href="{{ url('admins/coupons/add') }}">Add New</a>
                          <a class="p-10 w-full row g-5 no-u c-black" href="{{ url('admins/coupons/all') }}">All Codes</a>
                            <a class="p-10 w-full row g-5 no-u c-black" href="{{ url('admins/coupons/active') }}">Active Codes</a>
                            <a class="p-10 w-full row g-5 no-u c-black" href="{{ url('admins/coupons/redeemed') }}">Redeemed Codes</a>
                      </div>
                </div>
                <div class="nav-group w-full column">
                     <a onclick="
                     let child=this.closest('.nav-group').querySelector('.nav-child');
                     if(child.classList.contains('display-none')){
                        child.classList.remove('display-none');
                        this.closest('.nav-group').querySelector('.main-a .chevron').classList.add('rotate-90');

                     }else{
                     child.classList.add('display-none');
                     this.closest('.nav-group').querySelector('.main-a .chevron').classList.remove('rotate-90');

                    }
                     " class="p-10 w-full main-a row g-5 no-u c-black" >
                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="CurrentColor" viewBox="0 0 256 256"><path d="M216,40H40A16,16,0,0,0,24,56V200a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40Zm0,160H40V56H216V200ZM184,96a8,8,0,0,1-8,8H80a8,8,0,0,1,0-16h96A8,8,0,0,1,184,96Zm0,32a8,8,0,0,1-8,8H80a8,8,0,0,1,0-16h96A8,8,0,0,1,184,128Zm0,32a8,8,0,0,1-8,8H80a8,8,0,0,1,0-16h96A8,8,0,0,1,184,160Z"></path></svg>
                      Articles
                      <svg class="m-left-auto chevron transition-ease-half" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="CurrentColor" viewBox="0 0 256 256"><path d="M141.66,133.66l-80,80a8,8,0,0,1-11.32-11.32L124.69,128,50.34,53.66A8,8,0,0,1,61.66,42.34l80,80A8,8,0,0,1,141.66,133.66Zm80-11.32-80-80a8,8,0,0,0-11.32,11.32L204.69,128l-74.35,74.34a8,8,0,0,0,11.32,11.32l80-80A8,8,0,0,0,221.66,122.34Z"></path></svg>
                      </a> 
                      <div style="width:calc(100% - 10px)" class="nav-child display-none m-left-10 border-left-4 border-color-bg bg-primary-transparent w-full column">
                        <a class="p-10 w-full row g-5 no-u c-black" href="{{ url('admins/articles/topic') }}">Topics</a>
                          <a class="p-10 w-full row g-5 no-u c-black" href="{{ url('admins/articles/manage') }}">Manage Articles</a>
                            <a class="p-10 w-full row g-5 no-u c-black" href="{{ url('admins/articles/winners') }}">Article Winners</a>
                             </div>
                </div>
                 <div class="nav-group w-full column">
                     <a onclick="
                     let child=this.closest('.nav-group').querySelector('.nav-child');
                     if(child.classList.contains('display-none')){
                        child.classList.remove('display-none');
                        this.closest('.nav-group').querySelector('.main-a .chevron').classList.add('rotate-90');

                     }else{
                     child.classList.add('display-none');
                     this.closest('.nav-group').querySelector('.main-a .chevron').classList.remove('rotate-90');

                    }
                     " class="p-10 w-full main-a row g-5 no-u c-black" >
                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="CurrentColor" viewBox="0 0 256 256"><path d="M173.66,98.34a8,8,0,0,1,0,11.32l-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35A8,8,0,0,1,173.66,98.34ZM224,48V208a16,16,0,0,1-16,16H48a16,16,0,0,1-16-16V48A16,16,0,0,1,48,32H208A16,16,0,0,1,224,48ZM208,208V48H48V208H208Z"></path></svg>
                      Tasks
                      <svg class="m-left-auto chevron transition-ease-half" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="CurrentColor" viewBox="0 0 256 256"><path d="M141.66,133.66l-80,80a8,8,0,0,1-11.32-11.32L124.69,128,50.34,53.66A8,8,0,0,1,61.66,42.34l80,80A8,8,0,0,1,141.66,133.66Zm80-11.32-80-80a8,8,0,0,0-11.32,11.32L204.69,128l-74.35,74.34a8,8,0,0,0,11.32,11.32l80-80A8,8,0,0,0,221.66,122.34Z"></path></svg>
                      </a> 
                      <div style="width:calc(100% - 10px)" class="nav-child display-none m-left-10 border-left-4 border-color-bg bg-primary-transparent w-full column">
                        <a class="p-10 w-full row g-5 no-u c-black" href="{{ url('admins/tasks/add') }}">Add Task</a>
                          <a class="p-10 w-full row g-5 no-u c-black" href="{{ url('admins/tasks/manage') }}">Manage Tasks</a>
                            <a class="p-10 w-full row g-5 no-u c-black" href="{{ url('admins/tasks/submitted') }}">Submitted Proofs</a>
                            </div>
                </div>
               
               
                   <div class="nav-group w-full column">
                     <a onclick="
                     let child=this.closest('.nav-group').querySelector('.nav-child');
                     if(child.classList.contains('display-none')){
                        child.classList.remove('display-none');
                        this.closest('.nav-group').querySelector('.main-a .chevron').classList.add('rotate-90');

                     }else{
                     child.classList.add('display-none');
                     this.closest('.nav-group').querySelector('.main-a .chevron').classList.remove('rotate-90');

                    }
                     " class="p-10 w-full main-a row g-5 no-u c-black" >
                     <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="CurrentColor" viewBox="0 0 256 256"><path d="M216,40H40A16,16,0,0,0,24,56V192a16,16,0,0,0,16,16H56v16a8,8,0,0,0,16,0V208H184v16a8,8,0,0,0,16,0V208h16a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40Zm0,152H40V56H216v64H199.32a48,48,0,1,0,0,16H216v56Zm-50.16-72a16,16,0,1,0,0,16H183a32,32,0,1,1,0-16Z"></path></svg>
                       Deposits
                      <svg class="m-left-auto chevron transition-ease-half" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="CurrentColor" viewBox="0 0 256 256"><path d="M141.66,133.66l-80,80a8,8,0,0,1-11.32-11.32L124.69,128,50.34,53.66A8,8,0,0,1,61.66,42.34l80,80A8,8,0,0,1,141.66,133.66Zm80-11.32-80-80a8,8,0,0,0-11.32,11.32L204.69,128l-74.35,74.34a8,8,0,0,0,11.32,11.32l80-80A8,8,0,0,0,221.66,122.34Z"></path></svg>
                      </a> 
                      <div style="width:calc(100% - 10px)" class="nav-child display-none m-left-10 border-left-4 border-color-bg bg-primary-transparent w-full column">
                        <a class="p-10 w-full row g-5 no-u c-black" href="{{ url('admins/deposits/all') }}">All Deposits</a>
                          <a class="p-10 w-full row g-5 no-u c-black" href="{{ url('admins/deposits/pending') }}">Pending Deposits</a>
                            <a class="p-10 w-full row g-5 no-u c-black" href="{{ url('admins/deposits/success') }}">Successfull Deposits</a>
                            <a class="p-10 w-full row g-5 no-u c-black" href="{{ url('admins/deposits/rejected') }}">Rejected Deposits</a>
                      </div>
                </div>
                 <div class="nav-group w-full column">
                     <a onclick="
                     let child=this.closest('.nav-group').querySelector('.nav-child');
                     if(child.classList.contains('display-none')){
                        child.classList.remove('display-none');
                        this.closest('.nav-group').querySelector('.main-a .chevron').classList.add('rotate-90');

                     }else{
                     child.classList.add('display-none');
                     this.closest('.nav-group').querySelector('.main-a .chevron').classList.remove('rotate-90');

                    }
                     " class="p-10 w-full main-a row g-5 no-u c-black" >
                     <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="CurrentColor" viewBox="0 0 256 256"><path d="M208,48H48A24,24,0,0,0,24,72V184a24,24,0,0,0,24,24H208a24,24,0,0,0,24-24V72A24,24,0,0,0,208,48ZM40,96H216v16H160a8,8,0,0,0-8,8,24,24,0,0,1-48,0,8,8,0,0,0-8-8H40Zm8-32H208a8,8,0,0,1,8,8v8H40V72A8,8,0,0,1,48,64ZM208,192H48a8,8,0,0,1-8-8V128H88.8a40,40,0,0,0,78.4,0H216v56A8,8,0,0,1,208,192Z"></path></svg>
                       Withdrawals
                      <svg class="m-left-auto chevron transition-ease-half" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="CurrentColor" viewBox="0 0 256 256"><path d="M141.66,133.66l-80,80a8,8,0,0,1-11.32-11.32L124.69,128,50.34,53.66A8,8,0,0,1,61.66,42.34l80,80A8,8,0,0,1,141.66,133.66Zm80-11.32-80-80a8,8,0,0,0-11.32,11.32L204.69,128l-74.35,74.34a8,8,0,0,0,11.32,11.32l80-80A8,8,0,0,0,221.66,122.34Z"></path></svg>
                      </a> 
                      <div style="width:calc(100% - 10px)" class="nav-child display-none m-left-10 border-left-4 border-color-bg bg-primary-transparent w-full column">
                        <a class="p-10 w-full row g-5 no-u c-black" href="{{ url('admins/withdrawals/all') }}">All Withdrawals</a>
                          <a class="p-10 w-full row g-5 no-u c-black" href="{{ url('admins/withdrawals/pending') }}">Pending Withdrawals</a>
                            <a class="p-10 w-full row g-5 no-u c-black" href="{{ url('admins/withdrawals/success') }}">Successfull Withdrawals</a>
                            <a class="p-10 w-full row g-5 no-u c-black" href="{{ url('admins/withdrawals/rejected') }}">Rejected Withdrawals</a>
                      </div>
                </div>
                 <a class="p-10 w-full row g-5 no-u c-black" href="{{ url('admins/transactions') }}">
                   <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="CurrentColor" viewBox="0 0 256 256"><path d="M224,128a8,8,0,0,1-8,8H40a8,8,0,0,1,0-16H216A8,8,0,0,1,224,128ZM40,72H216a8,8,0,0,0,0-16H40a8,8,0,0,0,0,16ZM216,184H40a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16Z"></path></svg>


                    Transactions
                <svg class="m-left-auto" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="CurrentColor" viewBox="0 0 256 256"><path d="M141.66,133.66l-80,80a8,8,0,0,1-11.32-11.32L124.69,128,50.34,53.66A8,8,0,0,1,61.66,42.34l80,80A8,8,0,0,1,141.66,133.66Zm80-11.32-80-80a8,8,0,0,0-11.32,11.32L204.69,128l-74.35,74.34a8,8,0,0,0,11.32,11.32l80-80A8,8,0,0,0,221.66,122.34Z"></path></svg>
                </a>
                 <a class="p-10 w-full row g-5 no-u c-black" href="{{ url('admins/transactions/airtime') }}">
                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="CurrentColor" viewBox="0 0 256 256"><path d="M192,24H64A24,24,0,0,0,40,48V208a24,24,0,0,0,24,24H192a24,24,0,0,0,24-24V48A24,24,0,0,0,192,24ZM56,72H200V184H56Zm8-32H192a8,8,0,0,1,8,8v8H56V48A8,8,0,0,1,64,40ZM192,216H64a8,8,0,0,1-8-8v-8H200v8A8,8,0,0,1,192,216Z"></path></svg>


                   Airtime Transactions
                <svg class="m-left-auto" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="CurrentColor" viewBox="0 0 256 256"><path d="M141.66,133.66l-80,80a8,8,0,0,1-11.32-11.32L124.69,128,50.34,53.66A8,8,0,0,1,61.66,42.34l80,80A8,8,0,0,1,141.66,133.66Zm80-11.32-80-80a8,8,0,0,0-11.32,11.32L204.69,128l-74.35,74.34a8,8,0,0,0,11.32,11.32l80-80A8,8,0,0,0,221.66,122.34Z"></path></svg>
                </a>
                 <a class="p-10 w-full row g-5 no-u c-black" href="{{ url('admins/transactions/data') }}">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="CurrentColor" viewBox="0 0 256 256"><path d="M135.16,84.42a8,8,0,0,0-14.32,0l-72,144a8,8,0,0,0,14.31,7.16L77,208h102.1l13.79,27.58A8,8,0,0,0,200,240a8,8,0,0,0,7.15-11.58ZM128,105.89,155.06,160H100.94ZM85,192l8-16h70.1l8,16Zm74.54-98.26a32,32,0,1,0-63,0,8,8,0,1,1-15.74,2.85,48,48,0,1,1,94.46,0,8,8,0,0,1-7.86,6.58,8.74,8.74,0,0,1-1.43-.13A8,8,0,0,1,159.49,93.74ZM64.15,136.21a80,80,0,1,1,127.7,0,8,8,0,0,1-12.76-9.65,64,64,0,1,0-102.18,0,8,8,0,0,1-12.76,9.65Z"></path></svg>


                   Data Transactions
                <svg class="m-left-auto" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="CurrentColor" viewBox="0 0 256 256"><path d="M141.66,133.66l-80,80a8,8,0,0,1-11.32-11.32L124.69,128,50.34,53.66A8,8,0,0,1,61.66,42.34l80,80A8,8,0,0,1,141.66,133.66Zm80-11.32-80-80a8,8,0,0,0-11.32,11.32L204.69,128l-74.35,74.34a8,8,0,0,0,11.32,11.32l80-80A8,8,0,0,0,221.66,122.34Z"></path></svg>
                </a>
                 <a class="p-10 w-full row g-5 no-u c-black" href="{{ url('admins/site/settings') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="CurrentColor" viewBox="0 0 256 256"><path d="M128,80a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160Zm88-29.84q.06-2.16,0-4.32l14.92-18.64a8,8,0,0,0,1.48-7.06,107.21,107.21,0,0,0-10.88-26.25,8,8,0,0,0-6-3.93l-23.72-2.64q-1.48-1.56-3-3L186,40.54a8,8,0,0,0-3.94-6,107.71,107.71,0,0,0-26.25-10.87,8,8,0,0,0-7.06,1.49L130.16,40Q128,40,125.84,40L107.2,25.11a8,8,0,0,0-7.06-1.48A107.6,107.6,0,0,0,73.89,34.51a8,8,0,0,0-3.93,6L67.32,64.27q-1.56,1.49-3,3L40.54,70a8,8,0,0,0-6,3.94,107.71,107.71,0,0,0-10.87,26.25,8,8,0,0,0,1.49,7.06L40,125.84Q40,128,40,130.16L25.11,148.8a8,8,0,0,0-1.48,7.06,107.21,107.21,0,0,0,10.88,26.25,8,8,0,0,0,6,3.93l23.72,2.64q1.49,1.56,3,3L70,215.46a8,8,0,0,0,3.94,6,107.71,107.71,0,0,0,26.25,10.87,8,8,0,0,0,7.06-1.49L125.84,216q2.16.06,4.32,0l18.64,14.92a8,8,0,0,0,7.06,1.48,107.21,107.21,0,0,0,26.25-10.88,8,8,0,0,0,3.93-6l2.64-23.72q1.56-1.48,3-3L215.46,186a8,8,0,0,0,6-3.94,107.71,107.71,0,0,0,10.87-26.25,8,8,0,0,0-1.49-7.06Zm-16.1-6.5a73.93,73.93,0,0,1,0,8.68,8,8,0,0,0,1.74,5.48l14.19,17.73a91.57,91.57,0,0,1-6.23,15L187,173.11a8,8,0,0,0-5.1,2.64,74.11,74.11,0,0,1-6.14,6.14,8,8,0,0,0-2.64,5.1l-2.51,22.58a91.32,91.32,0,0,1-15,6.23l-17.74-14.19a8,8,0,0,0-5-1.75h-.48a73.93,73.93,0,0,1-8.68,0,8,8,0,0,0-5.48,1.74L100.45,215.8a91.57,91.57,0,0,1-15-6.23L82.89,187a8,8,0,0,0-2.64-5.1,74.11,74.11,0,0,1-6.14-6.14,8,8,0,0,0-5.1-2.64L46.43,170.6a91.32,91.32,0,0,1-6.23-15l14.19-17.74a8,8,0,0,0,1.74-5.48,73.93,73.93,0,0,1,0-8.68,8,8,0,0,0-1.74-5.48L40.2,100.45a91.57,91.57,0,0,1,6.23-15L69,82.89a8,8,0,0,0,5.1-2.64,74.11,74.11,0,0,1,6.14-6.14A8,8,0,0,0,82.89,69L85.4,46.43a91.32,91.32,0,0,1,15-6.23l17.74,14.19a8,8,0,0,0,5.48,1.74,73.93,73.93,0,0,1,8.68,0,8,8,0,0,0,5.48-1.74L155.55,40.2a91.57,91.57,0,0,1,15,6.23L173.11,69a8,8,0,0,0,2.64,5.1,74.11,74.11,0,0,1,6.14,6.14,8,8,0,0,0,5.1,2.64l22.58,2.51a91.32,91.32,0,0,1,6.23,15l-14.19,17.74A8,8,0,0,0,199.87,123.66Z"></path></svg>


                    Site Settings
                <svg class="m-left-auto" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="CurrentColor" viewBox="0 0 256 256"><path d="M141.66,133.66l-80,80a8,8,0,0,1-11.32-11.32L124.69,128,50.34,53.66A8,8,0,0,1,61.66,42.34l80,80A8,8,0,0,1,141.66,133.66Zm80-11.32-80-80a8,8,0,0,0-11.32,11.32L204.69,128l-74.35,74.34a8,8,0,0,0,11.32,11.32l80-80A8,8,0,0,0,221.66,122.34Z"></path></svg>
                </a>
                 <a class="p-10 w-full row g-5 no-u c-black" href="{{ url('admins/logs') }}">
                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="CurrentColor" viewBox="0 0 256 256"><path d="M141.66,133.66l-40,40a8,8,0,0,1-11.32-11.32L116.69,136H24a8,8,0,0,1,0-16h92.69L90.34,93.66a8,8,0,0,1,11.32-11.32l40,40A8,8,0,0,1,141.66,133.66ZM200,32H136a8,8,0,0,0,0,16h56V208H136a8,8,0,0,0,0,16h64a8,8,0,0,0,8-8V40A8,8,0,0,0,200,32Z"></path></svg>


                  System Logs
                <svg class="m-left-auto" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="CurrentColor" viewBox="0 0 256 256"><path d="M141.66,133.66l-80,80a8,8,0,0,1-11.32-11.32L124.69,128,50.34,53.66A8,8,0,0,1,61.66,42.34l80,80A8,8,0,0,1,141.66,133.66Zm80-11.32-80-80a8,8,0,0,0-11.32,11.32L204.69,128l-74.35,74.34a8,8,0,0,0,11.32,11.32l80-80A8,8,0,0,0,221.66,122.34Z"></path></svg>
                </a>




                 
                 

                 <a class="p-10 pos-sticky m-top-auto stick-bottom bg-inherit w-full row g-5 no-u c-red" href="{{ url('admins/logout') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="CurrentColor" viewBox="0 0 256 256"><path d="M120,216a8,8,0,0,1-8,8H48a8,8,0,0,1-8-8V40a8,8,0,0,1,8-8h64a8,8,0,0,1,0,16H56V208h56A8,8,0,0,1,120,216Zm109.66-93.66-40-40a8,8,0,0,0-11.32,11.32L204.69,120H112a8,8,0,0,0,0,16h92.69l-26.35,26.34a8,8,0,0,0,11.32,11.32l40-40A8,8,0,0,0,229.66,122.34Z"></path></svg>


                  Logout
                <svg class="m-left-auto" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="CurrentColor" viewBox="0 0 256 256"><path d="M141.66,133.66l-80,80a8,8,0,0,1-11.32-11.32L124.69,128,50.34,53.66A8,8,0,0,1,61.66,42.34l80,80A8,8,0,0,1,141.66,133.66Zm80-11.32-80-80a8,8,0,0,0-11.32,11.32L204.69,128l-74.35,74.34a8,8,0,0,0,11.32,11.32l80-80A8,8,0,0,0,221.66,122.34Z"></path></svg>
                </a>


            </div>

        </section>
    </nav>
    <main class="bg-whitesmoke c-black">
       
        @yield('main')
<section onclick="HidePopUp()" class="popup">
  <div onclick="event.stopPropagation()" style="background:white;color:black;" class="child">

  </div>
</section>
    </main>
    <footer class="w-full p-10 column align-center text-center bg c-white">
        <span>&copy;2025 {{ config('app.name') }} Admin Dashboard</span>
        <span>Built & Designed by <a class="c-primary" href="https://wa.me/+2349013350351">Techie Innovations</a></span>
    </footer>

     <script src="{{ asset('vitecss/js/app.js?v='.config('versions.vite_version').'') }}"></script>
     <script class="js">
      window.addEventListener('load',()=>{
          document.querySelector('.loader').remove();
        document.querySelector('body').classList.remove('overflow-hidden');
      
      });
     </script>
    @yield('js')
</body>
</html>