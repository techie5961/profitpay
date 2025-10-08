@extends('layout.users.app')
@section('title')
    Dashboard
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
    <section class="column p-10 w-full g-10">
       <div class="cont bg-secondary-dark w-full column p-top-50 br-10">
        <div class="column wallets-house primary-text pos-relative bg-primary p-10 g-10 w-full br-10">
            <div class="row space-between align-center g-10 w-full">
                <span class="font-weight-900">👋 Welcome Back</span>
                <div class="p-5 border-1 border-color-secondary bg-dim br-5 row align-center g-10">
                    <span>USD</span>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M4.43056 8.51192C4.70012 8.19743 5.1736 8.161 5.48809 8.43057L12 14.0122L18.5119 8.43057C18.8264 8.16101 19.2999 8.19743 19.5694 8.51192C19.839 8.82642 19.8026 9.29989 19.4881 9.56946L12.4881 15.5695C12.2072 15.8102 11.7928 15.8102 11.5119 15.5695L4.5119 9.56946C4.19741 9.29989 4.16099 8.82641 4.43056 8.51192Z" fill="CurrentColor"></path>
</svg>

                </div>
            </div>
            <div class="row w-full align-center g-10">
                <div class="h-40 font-weight-900 desc w-40 circle no-shrink bg-dim column justify-center">{{ ucfirst(Auth::guard('users')->user()->username[0]) }}</div>
                <div class="column g-5">
                     <strong class="desc font-weight-900">{{ ucfirst(Auth::guard('users')->user()->username) }}</strong>
                     <div class="w-full w-fit secondary-text font-weight-900 br-5 clip-5 bg-secondary p-5">
                Alpha Package
            </div>
                </div>
               
            </div>
            <div class="balance-div">
                <div onclick="
                   try{
                   document.querySelector('.stacks').innerHTML=document.querySelector('section.balances section.affiliate .wallet-stacks').innerHTML;
                    this.outerHTML=document.querySelector('section.balances section.affiliate .wallet-div').innerHTML;
                    MyFunc.Style();
                   }catch(error){
                   alert(error.stack);
                   }
                    " style="background: linear-gradient(to top right,navy,blue);color:white;position:sticky;bottom:0;transform:translateY(30%)" class="w-full z-index-1000 br-10 p-10 column g-5">
            <div class="w-full row align-center space-between g-10">
               <span> Activities Balance</span>
               <svg width="30" height="30" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<g opacity="0.5">
<path d="M7.20468 7.56232C7.51523 7.28822 7.54478 6.81427 7.27069 6.50371C6.99659 6.19316 6.52264 6.1636 6.21208 6.4377C4.39676 8.03992 3.25 10.3865 3.25 13C3.25 13.4142 3.58579 13.75 4 13.75C4.41421 13.75 4.75 13.4142 4.75 13C4.75 10.8347 5.69828 8.89188 7.20468 7.56232Z" fill="CurrentColor"></path>
<path d="M17.7879 6.4377C17.4774 6.1636 17.0034 6.19316 16.7293 6.50371C16.4552 6.81427 16.4848 7.28822 16.7953 7.56232C18.3017 8.89188 19.25 10.8347 19.25 13C19.25 13.4142 19.5858 13.75 20 13.75C20.4142 13.75 20.75 13.4142 20.75 13C20.75 10.3865 19.6032 8.03992 17.7879 6.4377Z" fill="CurrentColor"></path>
<path d="M10.1869 20.0217C9.7858 19.9184 9.37692 20.1599 9.27367 20.5611C9.17043 20.9622 9.41192 21.3711 9.81306 21.4743C10.5129 21.6544 11.2458 21.75 12 21.75C12.7542 21.75 13.4871 21.6544 14.1869 21.4743C14.5881 21.3711 14.8296 20.9622 14.7263 20.5611C14.6231 20.1599 14.2142 19.9184 13.8131 20.0217C13.2344 20.1706 12.627 20.25 12 20.25C11.373 20.25 10.7656 20.1706 10.1869 20.0217Z" fill="CurrentColor"></path>
</g>
<path d="M9 6C9 7.65685 10.3431 9 12 9C13.6569 9 15 7.65685 15 6C15 4.34315 13.6569 3 12 3C10.3431 3 9 4.34315 9 6Z" fill="CurrentColor"></path>
<path d="M2.5 18C2.5 19.6569 3.84315 21 5.5 21C7.15685 21 8.5 19.6569 8.5 18C8.5 16.3431 7.15685 15 5.5 15C3.84315 15 2.5 16.3431 2.5 18Z" fill="CurrentColor"></path>
<path d="M18.5 21C16.8431 21 15.5 19.6569 15.5 18C15.5 16.3431 16.8431 15 18.5 15C20.1569 15 21.5 16.3431 21.5 18C21.5 19.6569 20.1569 21 18.5 21Z" fill="CurrentColor"></path>
</svg>

            </div>
            <strong class="desc font-weight-900">
                &#8358;{{ number_format(Auth::guard('users')->user()->activities_balance) }}
            </strong>
            <span>Your earnings from different activities</span>
            <button class="clip5 br-5 btn-green-3d c-white">Withdraw</button>

            </div>
            </div>
            <div class="w-full bottom-0 left-0 stacks right-0 pos-absolute p-10">
                <div style="background:linear-gradient(to top right,red,coral);transform:translateY(40%) translateX(-50%) scale(0.9);z-index:500;left:50%;width:calc(100% - 20px);" class="h-100 br-10 pos-absolute  bottom-0"></div>
                 <div style="background:linear-gradient(to top right,green,#4caf50);transform:translateY(50%) translateX(-50%) scale(0.8);z-index:400;left:50%;width:calc(100% - 20px);" class="h-100 br-10 pos-absolute bottom-0"></div>
                 <div style="background:linear-gradient(to top right,rgba(108,92,230),rgb(150, 137, 247));transform:translateY(60%) translateX(-50%) scale(0.7);z-index:300;left:50%;width:calc(100% - 20px);" class="h-100 br-10 pos-absolute bottom-0"></div>
            </div>

           
        </div>
       </div>
       {{-- BALANCES DIVS LOOP START--}}

       <section class="balances display-none">
        

        {{-- AFFILIATE BALANCE --}}
        <section class="affiliate">
                <div class="wallet-div">
                <div onclick="
                   try{
                   document.querySelector('.stacks').innerHTML=document.querySelector('section.balances section.games .wallet-stacks').innerHTML;
                    this.outerHTML=document.querySelector('section.balances section.games .wallet-div').innerHTML;
                    MyFunc.Style();
                   }catch(error){
                   alert(error.stack);
                   }
                    " style="background: linear-gradient(to top right,red,coral);color:white;position:sticky;bottom:0;transform:translateY(30%)" class="w-full average br-10 p-10 column g-5">
            <div class="w-full row align-center space-between g-10">
               <span> Affiliate Balance</span>
              <svg width="30" height="30" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M15.5 7.5C15.5 9.433 13.933 11 12 11C10.067 11 8.5 9.433 8.5 7.5C8.5 5.567 10.067 4 12 4C13.933 4 15.5 5.567 15.5 7.5Z" fill="CurrentColor"></path>
<path opacity="0.4" d="M19.5 7.5C19.5 8.88071 18.3807 10 17 10C15.6193 10 14.5 8.88071 14.5 7.5C14.5 6.11929 15.6193 5 17 5C18.3807 5 19.5 6.11929 19.5 7.5Z" fill="CurrentColor"></path>
<path opacity="0.4" d="M4.5 7.5C4.5 8.88071 5.61929 10 7 10C8.38071 10 9.5 8.88071 9.5 7.5C9.5 6.11929 8.38071 5 7 5C5.61929 5 4.5 6.11929 4.5 7.5Z" fill="CurrentColor"></path>
<path d="M18 16.5C18 18.433 15.3137 20 12 20C8.68629 20 6 18.433 6 16.5C6 14.567 8.68629 13 12 13C15.3137 13 18 14.567 18 16.5Z" fill="CurrentColor"></path>
<path opacity="0.4" d="M22 16.5C22 17.8807 20.2091 19 18 19C15.7909 19 14 17.8807 14 16.5C14 15.1193 15.7909 14 18 14C20.2091 14 22 15.1193 22 16.5Z" fill="CurrentColor"></path>
<path opacity="0.4" d="M2 16.5C2 17.8807 3.79086 19 6 19C8.20914 19 10 17.8807 10 16.5C10 15.1193 8.20914 14 6 14C3.79086 14 2 15.1193 2 16.5Z" fill="CurrentColor"></path>
</svg>


            </div>
            <strong class="desc font-weight-900">
                &#8358;{{ number_format(Auth::guard('users')->user()->affiliate_balance,2) }}
            </strong>
            <span>Your earnings from Downlines & Subordinates</span>
            <button class="clip5 br-5 btn-green-3d c-white">Cash-Out</button>

            </div>
            </div>
            <div class="w-full bottom-0 left-0 wallet-stacks right-0 pos-absolute p-10">
                <div style="background:linear-gradient(to top right,green,#4caf50);transform:translateY(40%) translateX(-50%) scale(0.9);z-index:500;left:50%;width:calc(100% - 20px);" class="h-100 br-10 pos-absolute bottom-0"></div>
                 <div style="background:linear-gradient(to top right,rgba(108,92,230),rgb(150, 137, 247));transform:translateY(50%) translateX(-50%) scale(0.8);z-index:400;left:50%;width:calc(100% - 20px);" class="h-100 br-10 pos-absolute bottom-0"></div>
                 <div style="background:linear-gradient(to top right,navy,blue);transform:translateY(60%) translateX(-50%) scale(0.7);z-index:300;left:50%;width:calc(100% - 20px);" class="h-100 br-10 pos-absolute bottom-0"></div>
            </div>

        </section>
         {{-- GAMES BALANCE --}}
        <section class="games">
                <div class="wallet-div">
                <div onclick="
                   try{
                   document.querySelector('.stacks').innerHTML=document.querySelector('section.balances section.all-time .wallet-stacks').innerHTML;
                    this.outerHTML=document.querySelector('section.balances section.all-time .wallet-div').innerHTML;
                    MyFunc.Style();
                   }catch(error){
                   alert(error.stack);
                   }
                    " style="background: linear-gradient(to top right,green,#4caf50);color:white;position:sticky;bottom:0;transform:translateY(30%)" class="w-full average br-10 p-10 column g-5">
            <div class="w-full row align-center space-between g-10">
               <span> Games Balance</span>
            <svg width="30" height="30" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path opacity="0.5" d="M10.165 4.77922L10.6669 5.13443C11.0567 5.41029 11.5225 5.55844 12 5.55844C12.4776 5.55844 12.9434 5.41029 13.3332 5.13441L13.8351 4.77922C14.5514 4.27225 15.4074 4 16.2849 4H16.8974C17.3016 4 17.7099 4.02549 18.0908 4.16059C20.4735 5.00566 22.1125 8.09503 21.994 15.1026C21.9701 16.5145 21.6397 18.075 20.3658 18.6842C19.9688 18.8741 19.5033 19 18.9733 19C18.3373 19 17.8322 18.8187 17.4424 18.5632C17.0336 18.2953 16.6737 17.9471 16.3139 17.599C15.8693 17.1688 15.4249 16.7389 14.8888 16.4609C14.3048 16.1581 13.6566 16 12.9989 16H11.0011C10.3434 16 9.69519 16.1581 9.11125 16.4609C8.57511 16.7389 8.13071 17.1688 7.68612 17.599C7.32633 17.9471 6.96641 18.2953 6.55763 18.5632C6.1678 18.8187 5.66273 19 5.02671 19C4.49667 19 4.03121 18.8741 3.63423 18.6842C2.3603 18.075 2.02992 16.5145 2.00604 15.1026C1.88749 8.09504 3.52645 5.00566 5.90915 4.16059C6.29009 4.02549 6.69838 4 7.10257 4H7.71504C8.59264 4 9.44862 4.27225 10.165 4.77922Z" fill="CurrentColor"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M10.4697 17.4697C10.7626 17.1768 11.2374 17.1768 11.5303 17.4697L12 17.9393L12.4697 17.4697C12.7626 17.1768 13.2374 17.1768 13.5303 17.4697C13.8232 17.7626 13.8232 18.2374 13.5303 18.5303L13.0607 19L13.5303 19.4697C13.8232 19.7626 13.8232 20.2374 13.5303 20.5303C13.2374 20.8232 12.7626 20.8232 12.4697 20.5303L12 20.0607L11.5303 20.5303C11.2374 20.8232 10.7626 20.8232 10.4697 20.5303C10.1768 20.2374 10.1768 19.7626 10.4697 19.4697L10.9393 19L10.4697 18.5303C10.1768 18.2374 10.1768 17.7626 10.4697 17.4697Z" fill="CurrentColor"></path>
<path d="M16.75 8C17.1642 8 17.5 8.33579 17.5 8.75C17.5 9.16421 17.1642 9.5 16.75 9.5C16.3358 9.5 16 9.16421 16 8.75C16 8.33579 16.3358 8 16.75 8Z" fill="CurrentColor"></path>
<path d="M7.5 8.25C7.91421 8.25 8.25 8.58579 8.25 9V9.75H9C9.41421 9.75 9.75 10.0858 9.75 10.5C9.75 10.9142 9.41421 11.25 9 11.25H8.25V12C8.25 12.4142 7.91421 12.75 7.5 12.75C7.08579 12.75 6.75 12.4142 6.75 12V11.25H6C5.58579 11.25 5.25 10.9142 5.25 10.5C5.25 10.0858 5.58579 9.75 6 9.75H6.75V9C6.75 8.58579 7.08579 8.25 7.5 8.25Z" fill="CurrentColor"></path>
<path d="M19 10.25C19 10.6642 18.6642 11 18.25 11C17.8358 11 17.5 10.6642 17.5 10.25C17.5 9.83579 17.8358 9.5 18.25 9.5C18.6642 9.5 19 9.83579 19 10.25Z" fill="CurrentColor"></path>
<path d="M15.25 11C15.6642 11 16 10.6642 16 10.25C16 9.83579 15.6642 9.5 15.25 9.5C14.8358 9.5 14.5 9.83579 14.5 10.25C14.5 10.6642 14.8358 11 15.25 11Z" fill="CurrentColor"></path>
<path d="M17.5 11.75C17.5 11.3358 17.1642 11 16.75 11C16.3358 11 16 11.3358 16 11.75C16 12.1642 16.3358 12.5 16.75 12.5C17.1642 12.5 17.5 12.1642 17.5 11.75Z" fill="CurrentColor"></path>
</svg>



            </div>
            <strong class="desc font-weight-900">
                &#8358;{{ number_format(Auth::guard('users')->user()->deposit_balance,2) }}
            </strong>
            <span>Funds used in playing fun games</span>
            <div class="clip-5 br-5 p-10 bg-white border-bottom-2 border-color-silver w-fit c-black bold">Fund Wallet</div>

            </div>
            </div>
            <div class="w-full bottom-0 left-0 wallet-stacks right-0 pos-absolute p-10">
                <div style="background:linear-gradient(to top right,rgba(108,92,230),rgb(150, 137, 247));transform:translateY(40%) translateX(-50%) scale(0.9);z-index:500;left:50%;width:calc(100% - 20px);" class="h-100 br-10 pos-absolute bottom-0"></div>
                 <div style="background:linear-gradient(to top right,navy,blue);transform:translateY(50%) translateX(-50%) scale(0.8);z-index:400;left:50%;width:calc(100% - 20px);" class="h-100 br-10 pos-absolute bottom-0"></div>
                 <div style="background:linear-gradient(to top right,red,coral);transform:translateY(60%) translateX(-50%) scale(0.7);z-index:300;left:50%;width:calc(100% - 20px);" class="h-100 br-10 pos-absolute bottom-0"></div>
            </div>

        </section>
         {{-- ALL TIME BALANCE --}}
        <section class="all-time">
                <div class="wallet-div">
                <div onclick="
                   try{
                   document.querySelector('.stacks').innerHTML=document.querySelector('section.balances section.activities .wallet-stacks').innerHTML;
                    this.outerHTML=document.querySelector('section.balances section.activities .wallet-div').innerHTML;
                    MyFunc.Style();
                   }catch(error){
                   alert(error.stack);
                   }
                    " style="background:linear-gradient(to top right,rgba(108,92,230),rgb(150, 137, 247));;color:white;position:sticky;bottom:0;transform:translateY(30%)" class="w-full average br-10 p-10 column g-5">
            <div class="w-full row align-center space-between g-10">
               <span>All Time Earnings</span>
            <svg width="30" height="30" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path opacity="0.5" d="M2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C22 4.92893 22 7.28595 22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12Z" fill="CurrentColor"></path>
<path d="M22 5C22 6.65685 20.6569 8 19 8C17.3431 8 16 6.65685 16 5C16 3.34315 17.3431 2 19 2C20.6569 2 22 3.34315 22 5Z" fill="CurrentColor"></path>
<path d="M14.5 10.75C14.0858 10.75 13.75 10.4142 13.75 10C13.75 9.58579 14.0858 9.25 14.5 9.25H17C17.4142 9.25 17.75 9.58579 17.75 10V12.5C17.75 12.9142 17.4142 13.25 17 13.25C16.5858 13.25 16.25 12.9142 16.25 12.5V11.8107L14.2374 13.8232C13.554 14.5066 12.446 14.5066 11.7626 13.8232L10.1768 12.2374C10.0791 12.1398 9.92085 12.1398 9.82322 12.2374L7.53033 14.5303C7.23744 14.8232 6.76256 14.8232 6.46967 14.5303C6.17678 14.2374 6.17678 13.7626 6.46967 13.4697L8.76256 11.1768C9.44598 10.4934 10.554 10.4934 11.2374 11.1768L12.8232 12.7626C12.9209 12.8602 13.0791 12.8602 13.1768 12.7626L15.1893 10.75H14.5Z" fill="CurrentColor"></path>
</svg>




            </div>
            <strong class="desc font-weight-900">
                &#8358;{{ number_format($all_time,2) }}
            </strong>
            <span>Your total earnings on the platform</span>
            <div class="clip-5 br-5 p-10 bg-white border-bottom-2 border-color-silver w-fit c-black bold">View Transactions</div>

            </div>
            </div>
            <div class="w-full bottom-0 left-0 wallet-stacks right-0 pos-absolute p-10">
                <div style="background:linear-gradient(to top right,navy,blue);transform:translateY(40%) translateX(-50%) scale(0.9);z-index:500;left:50%;width:calc(100% - 20px);" class="h-100 br-10 pos-absolute bottom-0"></div>
                 <div style="background:linear-gradient(to top right,red,coral);transform:translateY(50%) translateX(-50%) scale(0.8);z-index:400;left:50%;width:calc(100% - 20px);" class="h-100 br-10 pos-absolute bottom-0"></div>
                 <div style="background:linear-gradient(to top right,green,#4caf50);transform:translateY(60%) translateX(-50%) scale(0.7);z-index:300;left:50%;width:calc(100% - 20px);" class="h-100 br-10 pos-absolute bottom-0"></div>
            </div>

        </section>
        {{-- ACTIVITIES BALANCE --}}
        <section class="activities">
            <div class="wallet-div">
                <div onclick="
                   try{
                   document.querySelector('.stacks').innerHTML=document.querySelector('section.balances section.affiliate .wallet-stacks').innerHTML;
                    this.outerHTML=document.querySelector('section.balances section.affiliate .wallet-div').innerHTML;
                    MyFunc.Style();
                   }catch(error){
                   alert(error.stack);
                   }
                    " style="background: linear-gradient(to top right,navy,blue);color:white;position:sticky;bottom:0;transform:translateY(30%)" class="w-full average br-10 p-10 column g-5">
            <div class="w-full row align-center space-between g-10">
               <span> Activities Balance</span>
               <svg width="30" height="30" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<g opacity="0.5">
<path d="M7.20468 7.56232C7.51523 7.28822 7.54478 6.81427 7.27069 6.50371C6.99659 6.19316 6.52264 6.1636 6.21208 6.4377C4.39676 8.03992 3.25 10.3865 3.25 13C3.25 13.4142 3.58579 13.75 4 13.75C4.41421 13.75 4.75 13.4142 4.75 13C4.75 10.8347 5.69828 8.89188 7.20468 7.56232Z" fill="CurrentColor"></path>
<path d="M17.7879 6.4377C17.4774 6.1636 17.0034 6.19316 16.7293 6.50371C16.4552 6.81427 16.4848 7.28822 16.7953 7.56232C18.3017 8.89188 19.25 10.8347 19.25 13C19.25 13.4142 19.5858 13.75 20 13.75C20.4142 13.75 20.75 13.4142 20.75 13C20.75 10.3865 19.6032 8.03992 17.7879 6.4377Z" fill="CurrentColor"></path>
<path d="M10.1869 20.0217C9.7858 19.9184 9.37692 20.1599 9.27367 20.5611C9.17043 20.9622 9.41192 21.3711 9.81306 21.4743C10.5129 21.6544 11.2458 21.75 12 21.75C12.7542 21.75 13.4871 21.6544 14.1869 21.4743C14.5881 21.3711 14.8296 20.9622 14.7263 20.5611C14.6231 20.1599 14.2142 19.9184 13.8131 20.0217C13.2344 20.1706 12.627 20.25 12 20.25C11.373 20.25 10.7656 20.1706 10.1869 20.0217Z" fill="CurrentColor"></path>
</g>
<path d="M9 6C9 7.65685 10.3431 9 12 9C13.6569 9 15 7.65685 15 6C15 4.34315 13.6569 3 12 3C10.3431 3 9 4.34315 9 6Z" fill="CurrentColor"></path>
<path d="M2.5 18C2.5 19.6569 3.84315 21 5.5 21C7.15685 21 8.5 19.6569 8.5 18C8.5 16.3431 7.15685 15 5.5 15C3.84315 15 2.5 16.3431 2.5 18Z" fill="CurrentColor"></path>
<path d="M18.5 21C16.8431 21 15.5 19.6569 15.5 18C15.5 16.3431 16.8431 15 18.5 15C20.1569 15 21.5 16.3431 21.5 18C21.5 19.6569 20.1569 21 18.5 21Z" fill="CurrentColor"></path>
</svg>

            </div>
            <strong class="desc font-weight-900">
                &#8358;{{ number_format(Auth::guard('users')->user()->activities_balance) }}
            </strong>
            <span>Your earnings from different activities</span>
            <button class="clip5 br-5 btn-green-3d c-white">Withdraw</button>

            </div>
            </div>
            <div class="w-full bottom-0 left-0 wallet-stacks right-0 pos-absolute p-10">
                <div style="background:linear-gradient(to top right,red,coral);transform:translateY(40%) translateX(-50%) scale(0.9);z-index:500;left:50%;width:calc(100% - 20px);" class="h-100 br-10 pos-absolute  bottom-0"></div>
                 <div style="background:linear-gradient(to top right,green,#4caf50);transform:translateY(50%) translateX(-50%) scale(0.8);z-index:400;left:50%;width:calc(100% - 20px);" class="h-100 br-10 pos-absolute bottom-0"></div>
                 <div style="background:linear-gradient(to top right,rgba(108,92,230),rgb(150, 137, 247));transform:translateY(60%) translateX(-50%) scale(0.7);z-index:300;left:50%;width:calc(100% - 20px);" class="h-100 br-10 pos-absolute bottom-0"></div>
            </div>
        </section>




    </section>


       {{-- BALANCES DIV LOOP END --}}
       <strong class="desc font-weight-900 c-primary">Quick Links</strong>
        <div class="grid grid-2 w-full pc-grid-4 g-10">
            <div onclick="spa(event,'{{ url('users/tasks') }}')
             " class="bg clip-10 quick-link box-shadow border-1 border-color-bg-light secondary-text w-full br-10 p-10 g-5 column align-center">
              <div class="column group w-full h-full justify-center g-5">
                  <strong>Daily Tasks</strong>
               <svg width="32" height="32" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M7.2915 4.78553V4.72453C7.2915 4.38601 7.30305 3.94261 7.4565 3.50336C7.9652 2.04714 9.35853 1 11 1H13C14.6415 1 16.0349 2.04714 16.5436 3.50336C16.697 3.94261 16.7085 4.38601 16.7085 4.72453V4.78555C19.212 5.52304 20.9631 7.79709 20.9994 10.4163C21 10.4574 21 10.5036 21 10.596V12.9191C20.8982 12.9191 20.7947 12.9398 20.6956 12.9835C15.1597 15.4273 8.84065 15.4273 3.30479 12.9835C3.2056 12.9397 3.10197 12.919 3 12.9191V10.596C3 10.5036 3 10.4574 3.00057 10.4163C3.03694 7.79707 4.78799 5.52301 7.2915 4.78553ZM8.87362 3.99175C9.17937 3.11649 10.017 2.48989 11 2.48989H13C13.9831 2.48989 14.8207 3.11649 15.1264 3.99175C15.1719 4.12188 15.194 4.27205 15.2032 4.46183C13.0832 4.10168 10.9169 4.10168 8.79689 4.46182C8.80602 4.27205 8.82816 4.12188 8.87362 3.99175ZM9.25 12.6708C9.25 12.2594 9.58579 11.9258 10 11.9258H14C14.4142 11.9258 14.75 12.2594 14.75 12.6708C14.75 13.0822 14.4142 13.4157 14 13.4157H10C9.58579 13.4157 9.25 13.0822 9.25 12.6708Z" fill="CurrentColor"></path>
<path d="M21 14.4769C20.1 14.8588 19.1814 15.1809 18.2502 15.4432V16.644C18.2502 17.0554 17.9144 17.3889 17.5002 17.3889C17.086 17.3889 16.7502 17.0554 16.7502 16.644V15.8119C12.1726 16.7754 7.36827 16.3304 3 14.4767V16.0231C3 18.1267 4.47101 19.9482 6.53853 20.4045C10.1356 21.1985 13.8644 21.1985 17.4615 20.4045C19.529 19.9482 21 18.1267 21 16.0231V14.4769Z" fill="CurrentColor"></path>
</svg>

              </div>
</div>
              <div onclick="spa(event,'{{ url('users/transactions') }}')
             " class="bg clip-10 quick-link box-shadow border-1 border-color-bg-light secondary-text w-full br-10 p-10 g-5 column align-center">
              <div class="column group w-full h-full justify-center g-5">
                  <strong>Transactions</strong>
               <svg width="32" height="32" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M7.24502 2H16.755C17.9139 2 18.4933 2 18.9606 2.16261C19.8468 2.47096 20.5425 3.18719 20.842 4.09946C21 4.58055 21 5.17705 21 6.37006V20.3742C21 21.2324 20.015 21.6878 19.3919 21.1176C19.0258 20.7826 18.4742 20.7826 18.1081 21.1176L17.625 21.5597C16.9834 22.1468 16.0166 22.1468 15.375 21.5597C14.7334 20.9726 13.7666 20.9726 13.125 21.5597C12.4834 22.1468 11.5166 22.1468 10.875 21.5597C10.2334 20.9726 9.26659 20.9726 8.625 21.5597C7.98341 22.1468 7.01659 22.1468 6.375 21.5597L5.8919 21.1176C5.52583 20.7826 4.97417 20.7826 4.6081 21.1176C3.985 21.6878 3 21.2324 3 20.3742V6.37006C3 5.17705 3 4.58055 3.15795 4.09946C3.45748 3.18719 4.15322 2.47096 5.03939 2.16261C5.50671 2 6.08614 2 7.24502 2ZM7 6.75C6.58579 6.75 6.25 7.08579 6.25 7.5C6.25 7.91421 6.58579 8.25 7 8.25H7.5C7.91421 8.25 8.25 7.91421 8.25 7.5C8.25 7.08579 7.91421 6.75 7.5 6.75H7ZM10.5 6.75C10.0858 6.75 9.75 7.08579 9.75 7.5C9.75 7.91421 10.0858 8.25 10.5 8.25H17C17.4142 8.25 17.75 7.91421 17.75 7.5C17.75 7.08579 17.4142 6.75 17 6.75H10.5ZM7 10.25C6.58579 10.25 6.25 10.5858 6.25 11C6.25 11.4142 6.58579 11.75 7 11.75H7.5C7.91421 11.75 8.25 11.4142 8.25 11C8.25 10.5858 7.91421 10.25 7.5 10.25H7ZM10.5 10.25C10.0858 10.25 9.75 10.5858 9.75 11C9.75 11.4142 10.0858 11.75 10.5 11.75H17C17.4142 11.75 17.75 11.4142 17.75 11C17.75 10.5858 17.4142 10.25 17 10.25H10.5ZM7 13.75C6.58579 13.75 6.25 14.0858 6.25 14.5C6.25 14.9142 6.58579 15.25 7 15.25H7.5C7.91421 15.25 8.25 14.9142 8.25 14.5C8.25 14.0858 7.91421 13.75 7.5 13.75H7ZM10.5 13.75C10.0858 13.75 9.75 14.0858 9.75 14.5C9.75 14.9142 10.0858 15.25 10.5 15.25H17C17.4142 15.25 17.75 14.9142 17.75 14.5C17.75 14.0858 17.4142 13.75 17 13.75H10.5Z" fill="CurrentColor"></path>
</svg>


              </div>
</div>
             <div onclick="spa(event,'{{ url('users/games') }}')
             " class="bg clip-10 quick-link box-shadow border-1 border-color-bg-light secondary-text w-full br-10 p-10 g-5 column align-center">
              <div class="column group w-full h-full justify-center g-5">
                  <strong>{{ config('app.name') }} Games</strong>
               <svg width="32" height="32" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M10.4695 17.4697C10.7624 17.1768 11.2373 17.1768 11.5302 17.4697L11.9999 17.9393L12.4695 17.4697C12.7624 17.1768 13.2373 17.1768 13.5302 17.4697C13.8231 17.7626 13.8231 18.2374 13.5302 18.5303L13.0605 19L13.5302 19.4697C13.8231 19.7626 13.8231 20.2374 13.5302 20.5303C13.2373 20.8232 12.7624 20.8232 12.4695 20.5303L11.9999 20.0607L11.5302 20.5303C11.2373 20.8232 10.7624 20.8232 10.4695 20.5303C10.1766 20.2374 10.1766 19.7626 10.4695 19.4697L10.9392 19L10.4695 18.5303C10.1766 18.2374 10.1766 17.7626 10.4695 17.4697Z" fill="CurrentColor"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M10.6669 5.13443L10.165 4.77922C9.44862 4.27225 8.59264 4 7.71504 4H7.10257C6.69838 4 6.29009 4.02549 5.90915 4.16059C3.52645 5.00566 1.88749 8.09504 2.00604 15.1026C2.02992 16.5145 2.3603 18.075 3.63423 18.6842C4.03121 18.8741 4.49667 19 5.02671 19C5.66273 19 6.1678 18.8187 6.55763 18.5632C6.96641 18.2953 7.32633 17.9471 7.68612 17.599C8.13071 17.1688 8.57511 16.7389 9.11125 16.4609C9.69519 16.1581 10.3434 16 11.0011 16H12.9989C13.6566 16 14.3048 16.1581 14.8888 16.4609C15.4249 16.7389 15.8693 17.1688 16.3139 17.599C16.6737 17.9471 17.0336 18.2953 17.4424 18.5632C17.8322 18.8187 18.3373 19 18.9733 19C19.5033 19 19.9688 18.8741 20.3658 18.6842C21.6397 18.075 21.9701 16.5145 21.994 15.1026C22.1125 8.09503 20.4735 5.00566 18.0908 4.16059C17.7099 4.02549 17.3016 4 16.8974 4H16.2849C15.4074 4 14.5514 4.27225 13.8351 4.77922L13.3332 5.13441C12.9434 5.41029 12.4776 5.55844 12 5.55844C11.5225 5.55844 11.0567 5.41029 10.6669 5.13443ZM16.75 8C17.1642 8 17.5 8.33579 17.5 8.75C17.5 9.16421 17.1642 9.5 16.75 9.5C16.3358 9.5 16 9.16421 16 8.75C16 8.33579 16.3358 8 16.75 8ZM7.5 8.25C7.91421 8.25 8.25 8.58579 8.25 9V9.75H9C9.41421 9.75 9.75 10.0858 9.75 10.5C9.75 10.9142 9.41421 11.25 9 11.25H8.25V12C8.25 12.4142 7.91421 12.75 7.5 12.75C7.08579 12.75 6.75 12.4142 6.75 12V11.25H6C5.58579 11.25 5.25 10.9142 5.25 10.5C5.25 10.0858 5.58579 9.75 6 9.75H6.75V9C6.75 8.58579 7.08579 8.25 7.5 8.25ZM19 10.25C19 10.6642 18.6642 11 18.25 11C17.8358 11 17.5 10.6642 17.5 10.25C17.5 9.83579 17.8358 9.5 18.25 9.5C18.6642 9.5 19 9.83579 19 10.25ZM15.25 11C15.6642 11 16 10.6642 16 10.25C16 9.83579 15.6642 9.5 15.25 9.5C14.8358 9.5 14.5 9.83579 14.5 10.25C14.5 10.6642 14.8358 11 15.25 11ZM17.5 11.75C17.5 11.3358 17.1642 11 16.75 11C16.3358 11 16 11.3358 16 11.75C16 12.1642 16.3358 12.5 16.75 12.5C17.1642 12.5 17.5 12.1642 17.5 11.75Z" fill="CurrentColor"></path>
</svg>
              </div>
</div>
<div class="pos-relative quick-link-group">
  <div onclick="
  try{
  if(this.closest('.quick-link-group').querySelector('.options').classList.contains('display-none')){
   this.closest('.quick-link-group').querySelector('.options').classList.remove('display-none');
  }else{
   this.closest('.quick-link-group').querySelector('.options').classList.add('display-none');
  }
  }catch(error){
  alert(error.stack);
  }
   
    " class="bg clip-10 pos-relative quick-link box-shadow border-1 border-color-bg-light overflow-hidden secondary-text w-full br-10 p-10 g-5 column align-center">
               <div class="column group w-full h-full justify-center g-5">
                <strong>Airtime & Data</strong>
              <svg width="32" height="32" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M12.0838 3.5C10.1049 3.5 8.40696 4.71031 7.69312 6.43399C7.53464 6.81668 7.09592 6.99844 6.71323 6.83995C6.33053 6.68146 6.14878 6.24275 6.30727 5.86005C7.24515 3.5954 9.47729 2 12.0838 2C14.6904 2 16.9225 3.5954 17.8604 5.86005C18.0189 6.24275 17.8371 6.68146 17.4544 6.83995C17.0717 6.99844 16.633 6.81668 16.4745 6.43399C15.7607 4.71032 14.0627 3.5 12.0838 3.5Z" fill="CurrentColor"></path>
<path d="M12.0846 6C11.0622 6 10.1973 6.68244 9.92427 7.6182C9.80824 8.01583 9.39183 8.24411 8.9942 8.12808C8.59657 8.01205 8.36829 7.59564 8.48432 7.19801C8.93906 5.63969 10.3777 4.5 12.0846 4.5C13.7914 4.5 15.2301 5.63969 15.6848 7.19801C15.8008 7.59564 15.5725 8.01205 15.1749 8.12808C14.7773 8.24411 14.3609 8.01583 14.2448 7.6182C13.9718 6.68244 13.1069 6 12.0846 6Z" fill="CurrentColor"></path>
<path d="M13.084 7.75C13.084 8.30228 12.6363 8.75 12.084 8.75C11.5317 8.75 11.084 8.30228 11.084 7.75C11.084 7.19772 11.5317 6.75 12.084 6.75C12.6363 6.75 13.084 7.19772 13.084 7.75Z" fill="CurrentColor"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M3.65131 4.37802C3.4458 4.01839 2.98766 3.89344 2.62802 4.09895C2.26839 4.30445 2.14344 4.76259 2.34895 5.12223L6.13624 11.75H6C4.11438 11.75 3.17157 11.75 2.58579 12.3358C2 12.9216 2 13.8644 2 15.75C2 17.6356 2 18.5784 2.58579 19.1642C3.17157 19.75 4.11438 19.75 6 19.75H18C19.8856 19.75 20.8284 19.75 21.4142 19.1642C22 18.5784 22 17.6356 22 15.75C22 13.8644 22 12.9216 21.4142 12.3358C20.8284 11.75 19.8856 11.75 18 11.75H17.8638L21.6511 5.12223C21.8566 4.76259 21.7316 4.30445 21.372 4.09895C21.0123 3.89344 20.5542 4.01839 20.3487 4.37802L16.3487 11.378L16.1287 11.75H7.88128L7.65131 11.378L3.65131 4.37802ZM6 16.75C6.55228 16.75 7 16.3023 7 15.75C7 15.1977 6.55228 14.75 6 14.75C5.44772 14.75 5 15.1977 5 15.75C5 16.3023 5.44772 16.75 6 16.75ZM10 15.75C10 16.3023 9.55228 16.75 9 16.75C8.44772 16.75 8 16.3023 8 15.75C8 15.1977 8.44772 14.75 9 14.75C9.55228 14.75 10 15.1977 10 15.75ZM14 15C13.5858 15 13.25 15.3358 13.25 15.75C13.25 16.1642 13.5858 16.5 14 16.5H18C18.4142 16.5 18.75 16.1642 18.75 15.75C18.75 15.3358 18.4142 15 18 15H14Z" fill="CurrentColor"></path>
</svg>
               </div>
              
  </div>


     <div style="position:absolute;top:calc(100% + 10px);z-index:50;" class="pos-absolute options display-none g-5 column left-0 right-0 br-5 bg-708090 p-10">
                <div style="position:absolute;left:50%;transform:translateX(-50%);border-left:10px solid transparent;border-right:10px solid transparent;border-bottom:10px solid #708090;bottom:100%;" class="arrow"></div>
        <div onclick="spa(event,'{{ url('users/airtime/topup') }}')"  class="row g-2 space-between pointer clip-10 br-10 p-10 align-center">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M14.25 12C14.25 11.0335 15.0335 10.25 16 10.25C16.9665 10.25 17.75 11.0335 17.75 12C17.75 12.9665 16.9665 13.75 16 13.75C15.0335 13.75 14.25 12.9665 14.25 12Z" fill="CurrentColor"></path>
<path d="M8 13.75C8.9665 13.75 9.75 12.9665 9.75 12C9.75 11.0335 8.9665 10.25 8 10.25C7.0335 10.25 6.25 11.0335 6.25 12C6.25 12.9665 7.0335 13.75 8 13.75Z" fill="CurrentColor"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M3.46447 3.46447C2 4.92893 2 7.28595 2 12C2 16.714 2 19.0711 3.46447 20.5355C4.92893 22 7.28595 22 12 22C16.714 22 19.0711 22 20.5355 20.5355C22 19.0711 22 16.714 22 12C22 7.28595 22 4.92893 20.5355 3.46447C19.0711 2 16.714 2 12 2C7.28595 2 4.92893 2 3.46447 3.46447ZM13.2609 13.75C12.9375 13.2449 12.75 12.6443 12.75 12C12.75 10.2051 14.2051 8.75 16 8.75C17.7949 8.75 19.25 10.2051 19.25 12C19.25 13.7949 17.7949 15.25 16 15.25H8C6.20507 15.25 4.75 13.7949 4.75 12C4.75 10.2051 6.20507 8.75 8 8.75C9.79493 8.75 11.25 10.2051 11.25 12C11.25 12.6443 11.0625 13.2449 10.7391 13.75H13.2609Z" fill="CurrentColor"></path>
</svg>

                    <span class="m-right-auto">Buy Airtime</span>
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M8.51192 4.43057C8.82641 4.161 9.29989 4.19743 9.56946 4.51192L15.5695 11.5119C15.8102 11.7928 15.8102 12.2072 15.5695 12.4881L9.56946 19.4881C9.29989 19.8026 8.82641 19.839 8.51192 19.5695C8.19743 19.2999 8.161 18.8264 8.43057 18.5119L14.0122 12L8.43057 5.48811C8.161 5.17361 8.19743 4.70014 8.51192 4.43057Z" fill="CurrentColor"></path>
</svg>

                </div>
                 <div onclick="spa(event,'{{ url('users/data/topup') }}')" class="row g-2 space-between pointer clip-10 br-10 p-10 align-center">
                   <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M12 8.03471C9.3028 8.03471 7.11628 10.1864 7.11628 12.8406C7.11628 14.1679 7.66214 15.3684 8.54669 16.2388C8.81915 16.5069 8.81915 16.9417 8.54669 17.2098C8.27423 17.4779 7.83249 17.4779 7.56003 17.2098C6.4245 16.0923 5.72093 14.5467 5.72093 12.8406C5.72093 9.42803 8.53217 6.66161 12 6.66161C15.4678 6.66161 18.2791 9.42803 18.2791 12.8406C18.2791 14.5467 17.5755 16.0923 16.44 17.2098C16.1675 17.4779 15.7258 17.4779 15.4533 17.2098C15.1809 16.9417 15.1809 16.5069 15.4533 16.2388C16.3379 15.3684 16.8837 14.1679 16.8837 12.8406C16.8837 10.1864 14.6972 8.03471 12 8.03471Z" fill="CurrentColor"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M12 4.3731C7.24778 4.3731 3.39535 8.16412 3.39535 12.8406C3.39535 15.179 4.35769 17.2949 5.91559 18.828C6.18805 19.0961 6.18805 19.5308 5.91559 19.7989C5.64313 20.067 5.20139 20.067 4.92893 19.7989C3.12005 18.0189 2 15.5578 2 12.8406C2 7.40578 6.47715 3 12 3C17.5228 3 22 7.40578 22 12.8406C22 15.5578 20.8799 18.0189 19.0711 19.7989C18.7986 20.067 18.3569 20.067 18.0844 19.7989C17.8119 19.5308 17.8119 19.0961 18.0844 18.828C19.6423 17.2949 20.6047 15.179 20.6047 12.8406C20.6047 8.16412 16.7522 4.3731 12 4.3731Z" fill="CurrentColor"></path>
<path d="M10.3099 17.3441C11.0774 16.4683 11.4612 16.0304 11.935 16.002C11.9783 15.9993 12.0217 15.9993 12.065 16.002C12.5389 16.0304 12.9226 16.4683 13.6901 17.3441C15.3601 19.2497 16.1951 20.2025 15.9613 21.0245C15.9412 21.0952 15.9163 21.1639 15.8867 21.2301C15.5426 22 14.3617 22 12 22C9.63827 22 8.45741 22 8.11329 21.2301C8.08371 21.1639 8.05875 21.0952 8.03866 21.0245C7.80489 20.2025 8.63989 19.2497 10.3099 17.3441Z" fill="CurrentColor"></path>
<path d="M14.5 12.5C14.5 13.8807 13.3807 15 12 15C10.6193 15 9.5 13.8807 9.5 12.5C9.5 11.1193 10.6193 10 12 10C13.3807 10 14.5 11.1193 14.5 12.5Z" fill="CurrentColor"></path>
</svg>


                    <span class="m-right-auto">Buy Data </span>
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M8.51192 4.43057C8.82641 4.161 9.29989 4.19743 9.56946 4.51192L15.5695 11.5119C15.8102 11.7928 15.8102 12.2072 15.5695 12.4881L9.56946 19.4881C9.29989 19.8026 8.82641 19.839 8.51192 19.5695C8.19743 19.2999 8.161 18.8264 8.43057 18.5119L14.0122 12L8.43057 5.48811C8.161 5.17361 8.19743 4.70014 8.51192 4.43057Z" fill="CurrentColor"></path>
</svg>

                </div>
               </div>
</div>
            
        </div>
        <div class="w-full bg-secondary-dark border-1 border-color-secondary g-5 secondary-text br-10 p-10 row space-between align-center">
            <div class="w-full h-40 no-scrollbar align-center row ws-nowrap overflow-auto p-5 br-10 bg-secondary-transparent">{{ url('register/ref/'.Auth::guard('users')->user()->username.'') }}</div>
            <div onclick="copy('{{ url('register/ref/'.Auth::guard('users')->user()->username.'') }}')" class="h-40 perfect-square column  bg-secondary  br-10 justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" viewBox="0 0 256 256"><path d="M216,32H88a8,8,0,0,0-8,8V80H40a8,8,0,0,0-8,8V216a8,8,0,0,0,8,8H168a8,8,0,0,0,8-8V176h40a8,8,0,0,0,8-8V40A8,8,0,0,0,216,32Zm-8,128H176V88a8,8,0,0,0-8-8H96V48H208Z"></path></svg>

            </div>
        </div>
        <div class="w-full m-x-auto align-center p-20 column g-5 bg-primary primary-text br-10 p-10">
            <strong class="font-1">Join our Community to get latest updates and connect with other users.</strong>
       <div class="grid grid-2 place-center m-left-auto w-full g-10 align-center">
        <div class="bg-green pc-max-w-half c-white row justify-center h-50 p-10 bold w-full br-1000">Join Whatsapp
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="CurrentColor" viewBox="0 0 256 256"><path d="M152.58,145.23l23,11.48A24,24,0,0,1,152,176a72.08,72.08,0,0,1-72-72A24,24,0,0,1,99.29,80.46l11.48,23L101,118a8,8,0,0,0-.73,7.51,56.47,56.47,0,0,0,30.15,30.15A8,8,0,0,0,138,155ZM232,128A104,104,0,0,1,79.12,219.82L45.07,231.17a16,16,0,0,1-20.24-20.24l11.35-34.05A104,104,0,1,1,232,128Zm-40,24a8,8,0,0,0-4.42-7.16l-32-16a8,8,0,0,0-8,.5l-14.69,9.8a40.55,40.55,0,0,1-16-16l9.8-14.69a8,8,0,0,0,.5-8l-16-32A8,8,0,0,0,104,64a40,40,0,0,0-40,40,88.1,88.1,0,0,0,88,88A40,40,0,0,0,192,152Z"></path></svg>

        </div>
         <div class="bg-navy pc-max-w-half m-right-auto c-white row justify-center h-50 p-10 bold w-full br-1000">Join Telegram
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="CurrentColor" viewBox="0 0 256 256"><path d="M228.88,26.19a9,9,0,0,0-9.16-1.57L17.06,103.93a14.22,14.22,0,0,0,2.43,27.21L72,141.45V200a15.92,15.92,0,0,0,10,14.83,15.91,15.91,0,0,0,17.51-3.73l25.32-26.26L165,220a15.88,15.88,0,0,0,10.51,4,16.3,16.3,0,0,0,5-.79,15.85,15.85,0,0,0,10.67-11.63L231.77,35A9,9,0,0,0,228.88,26.19ZM175.53,208,92.85,135.5l119-85.29Z"></path></svg>

        </div>
       </div>
        </div>
    </section>
@endsection
@section('js')
    <script class="js">
        window.MyFunc ={
           Style : function(){
           try{
             Array.from(document.querySelector('.stacks').children).forEach((child)=>{
                child.style.height=document.querySelector('.balance-div').offsetHeight + 'px';
            });
            let max_bottom=document.querySelector('.wallets-house').getBoundingClientRect().bottom;
            Array.from(document.querySelector('.wallets-house .stacks').children).forEach((child)=>{
                if(child.getBoundingClientRect().bottom > max_bottom){
                    max_bottom=child.getBoundingClientRect().bottom;
                }
            });
            document.querySelector('.wallets-house').style.marginBottom=max_bottom - document.querySelector('.wallets-house').getBoundingClientRect().bottom + 10 + 'px';


           }catch(error){
            alert(error.stack);
           }
           } 
        }
        MyFunc.Style();
    </script>
@endsection