@extends('layout.users.index')
@section('title')
    Homepage
@endsection
@section('css')
    <style class="css">
        .observe{
            opacity:0;
        }
        .observe.scale-in{
            animation:scale-in 1.0s ease forwards;
        }
        .observe.scale-out{
            animation:scale-out 1.0s ease forwards;
        }

        @keyframes scale-in{
            0%{
                transform:scale(0.8);
                opacity:0;
            }
            100%{
                transform:scale(1);
                opacity:1;
            }
        }
          @keyframes scale-out{
            0%{
                transform:scale(1.2);
                opacity:0;
            }
            100%{
                transform:scale(1);
                opacity:1;
            }
        }
        .observe.trans-up{
            animation:trans-up 1s ease forwards;
        }
        @keyframes trans-up{
            0%{
                opacity:0;
                transform:translateY(30px);
            }
             100%{
                opacity:1;
                transform:translateY(0);
            }
        }
        .observe.trans-from-left{
            animation:trans-from-left 2s ease forwards;
        }
        @keyframes trans-from-left{
            0%{
                opacity:0;
                transform:translateX(-50px);
            }
             100%{
                opacity:1;
                transform:translateX(0);
            }
        }
         .observe.trans-from-right{
            animation:trans-from-right 2s ease forwards;
        }
        @keyframes trans-from-right{
            0%{
                opacity:0;
                transform:translateX(50px);
            }
             100%{
                opacity:1;
                transform:translateX(0);
            }
        }
        .observe.rotate-in-from-left{
            animation:rotate-in-from-left 1s ease forwards;
        }
        @keyframes rotate-in-from-left{
            0%{
                transform:rotate(-90deg) translateX(-200px);
                opacity:0;
            }
            100%{
                transform:rotate(0deg) translateX(0);
                opacity:1;
            }
        }
        .observe.rotate-in-from-right{
            animation:rotate-in-from-right 1s ease forwards;
        }
        @keyframes rotate-in-from-right{
            0%{
                transform:rotate(90deg) translateX(200px);
                opacity:0;
            }
            100%{
                transform:rotate(0deg) translateX(0);
                opacity:1;
            }
        }
         .observe.rotate-in-from-top{
            animation:rotate-in-from-top 1s ease forwards;
        }
        @keyframes rotate-in-from-top{
            0%{
                transform:rotate(45deg) translateY(50px);
                opacity:0;
            }
            100%{
                transform:rotate(0deg) translateY(0);
                opacity:1;
            }
        }
         .observe.rotate-in-from-bottom{
            animation:rotate-in-from-bottom 1s ease forwards;
        }
        @keyframes rotate-in-from-bottom{
            0%{
                transform:rotate(-180deg) translateY(-50px);
                opacity:0;
            }
            100%{
                transform:rotate(0deg) translateY(0);
                opacity:1;
            }
        }
    </style>
@endsection
@section('main')
    <section class="w-full align-center  g-10 column p-10">
           
        <span style="font-size:2rem;text-align:center;line-height:1;font-family:titan one" class=" m-x-auto c-primary"><span class="c-white">Welcome to</span> {{ config('app.name') }}</span>
        <span style="font-size:1.2rem;text-align:center;line-height:1;font-family:titan one" class="font-bowl m-x-auto c-primary"><span class="c-white">Your daily earnings start here</span></span>
        <span class="text-center">{{ config('app.name') }} transforms how you earn money online. With multiple income streams and exciting challenges, your financial goals are within reach right from your smartphone.</span>
        <div class="row w-full p-10 m-x-auto  justify-center align-center g-10">
            <button onclick="window.location.href='{{ url('register') }}'" class="btn-primary-3d min-w-100 clip-5 br-5">Get Started</button>
            <button onclick="window.location.href='{{ url('login') }}'" class="btn-primary-3d min-w-100 clip-5 br-5">Login</button>
        </div>
       <div class="w-full grid pc-grid-2 g-10 place-center">
         <img data-class='scale-in' src="{{ asset('banners/IMG-20250922-WA0015.jpg') }}" alt="" class="w-full observe br-10 max-w-500">
         <div class="pos-relative">
            <img data-class='scale-out' src="{{ asset('banners/IMG-20251004-WA0000.jpg') }}" alt="" class="w-full observe br-10 max-w-500">
            <div style="backdrop-filter: blur(10px);border:0.1px solid silver" class="h-fit happy-users column g-5 perfect-square pos-absolute left-10 bottom-10  p-20 br-20 bg-transparent">
                <div style="border:0.1px solid silver" class="h-40 w-40 br-10  p-5">
                    <img src="{{ asset('banners/IMG-20250916-WA0013.jpg') }}" class="h-full br-10 w-full" alt="">
                </div>
                <strong class="desc">7,432+ </strong>
                <span>Happy Users</span>
            </div>
         </div>
       </div>
        <span style="font-family:titan one" class="fondt-1 desc c-primary">What makes {{ config('app.name') }} special</span>
        <div class="grid p-20 pc-grid-2 w-full g-10">
            <div data-class="trans-up" style="backdrop-filter:blur(10px)" class="w-full observe align-center br-10 bg-black-transparent backdrop-blur-10 p-10 column g-10">
                <span class="c-gold">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M3 11.9914C3 17.6294 7.23896 20.3655 9.89856 21.5273C10.62 21.8424 10.9807 22 12 22V8L3 11V11.9914Z" fill="CurrentColor"></path>
<path opacity="0.5" d="M14.1014 21.5273C16.761 20.3655 21 17.6294 21 11.9914V11L12 8V22C13.0193 22 13.38 21.8424 14.1014 21.5273Z" fill="CurrentColor"></path>
<path opacity="0.5" d="M8.83772 2.80472L8.26491 3.00079C5.25832 4.02996 3.75503 4.54454 3.37752 5.08241C3 5.62028 3 7.21907 3 10.4167V11L12 8V2C11.1886 2 10.405 2.26824 8.83772 2.80472Z" fill="CurrentColor"></path>
<path d="M15.7351 3.00079L15.1623 2.80472C13.595 2.26824 12.8114 2 12 2V8L21 11V10.4167C21 7.21907 21 5.62028 20.6225 5.08241C20.245 4.54454 18.7417 4.02996 15.7351 3.00079Z" fill="CurrentColor"></path>
</svg>

                </span>
                <strong class="desc c-primary">Trust & Security</strong>
                <span class="text-center">Advanced protection systems keeps your information & earnings completely secure</span>
            </div>
              <div data-class="trans-up" style="backdrop-filter:blur(10px)" class="w-full observe align-center br-10 bg-black-transparent backdrop-blur-10 p-10 column g-10">
                <span class="c-blue">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M8.73167 5.77133L5.66953 9.91436C4.3848 11.6526 3.74244 12.5217 4.09639 13.205C4.10225 13.2164 4.10829 13.2276 4.1145 13.2387C4.48945 13.9117 5.59888 13.9117 7.81775 13.9117C9.05079 13.9117 9.6673 13.9117 10.054 14.2754L10.074 14.2946L13.946 9.72466L13.926 9.70541C13.5474 9.33386 13.5474 8.74151 13.5474 7.55682V7.24712C13.5474 3.96249 13.5474 2.32018 12.6241 2.03721C11.7007 1.75425 10.711 3.09327 8.73167 5.77133Z" fill="CurrentColor"></path>
<path opacity="0.5" d="M10.4527 16.4432L10.4527 16.7528C10.4527 20.0374 10.4527 21.6798 11.376 21.9627C12.2994 22.2457 13.2891 20.9067 15.2685 18.2286L18.3306 14.0856C19.6154 12.3474 20.2577 11.4783 19.9038 10.7949C19.8979 10.7836 19.8919 10.7724 19.8857 10.7613C19.5107 10.0883 18.4013 10.0883 16.1824 10.0883C14.9494 10.0883 14.3329 10.0883 13.9462 9.72461L10.0742 14.2946C10.4528 14.6661 10.4527 15.2585 10.4527 16.4432Z" fill="CurrentColor"></path>
</svg>

                </span>
                <strong class="desc c-primary">Instant Access</strong>
                <span class="text-center">Quick withdrawal processing ensures you receive your funds when you need them</span>
            </div>
             <div data-class="trans-up" style="backdrop-filter:blur(10px)" class="w-full observe align-center br-10 bg-black-transparent backdrop-blur-10 p-10 column g-10">
                <span class="c-green">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M22 5C22 6.65685 20.6569 8 19 8C17.3431 8 16 6.65685 16 5C16 3.34315 17.3431 2 19 2C20.6569 2 22 3.34315 22 5Z" fill="CurrentColor"></path>
<path opacity="0.5" d="M15.2347 2.53476C14.2201 2.1881 13.132 2 12 2C6.47715 2 2 6.47715 2 12C2 13.5997 2.37562 15.1116 3.04346 16.4525C3.22094 16.8088 3.28001 17.2161 3.17712 17.6006L2.58151 19.8267C2.32295 20.793 3.20701 21.677 4.17335 21.4185L6.39938 20.8229C6.78393 20.72 7.19121 20.7791 7.54753 20.9565C8.88836 21.6244 10.4003 22 12 22C17.5228 22 22 17.5228 22 12C22 10.868 21.8119 9.77987 21.4652 8.76526C20.7572 9.22981 19.9101 9.5 19 9.5C16.5147 9.5 14.5 7.48528 14.5 5C14.5 4.08987 14.7702 3.24284 15.2347 2.53476Z" fill="CurrentColor"></path>
</svg>


                </span>
                <strong class="desc c-primary">24/7 Customer Support</strong>
                <span class="text-center">Our support team is ready to assist you anytime,day or night</span>
            </div>
             <div data-class="trans-up" style="backdrop-filter:blur(10px)" class="w-full observe align-center br-10 bg-black-transparent backdrop-blur-10 p-10 column g-10">
                <span style="color:orangered">
                   <svg width="48" height="48" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path opacity="0.5" d="M2.75 2C2.75 1.58579 2.41421 1.25 2 1.25C1.58579 1.25 1.25 1.58579 1.25 2V12.0574C1.24999 14.3658 1.24998 16.1748 1.43975 17.5863C1.63399 19.031 2.03933 20.1711 2.93414 21.0659C3.82895 21.9607 4.96897 22.366 6.41371 22.5603C7.82519 22.75 9.63423 22.75 11.9426 22.75H22C22.4142 22.75 22.75 22.4142 22.75 22C22.75 21.5858 22.4142 21.25 22 21.25H12C9.62178 21.25 7.91356 21.2484 6.61358 21.0736C5.33517 20.9018 4.56445 20.5749 3.9948 20.0052C3.42514 19.4355 3.09825 18.6648 2.92637 17.3864C2.75159 16.0864 2.75 14.3782 2.75 12V2Z" fill="CurrentColor"></path>
<path d="M19.5875 7.46644C19.8451 7.14207 19.791 6.67029 19.4666 6.4127C19.1422 6.1551 18.6705 6.20924 18.4129 6.53362L15.2948 10.46C15.0496 10.7689 14.8887 10.9708 14.7562 11.1163C14.6265 11.2586 14.5657 11.2989 14.538 11.3137C14.3272 11.4264 14.0754 11.4319 13.8599 11.3285C13.8316 11.3149 13.7691 11.2772 13.6334 11.1407C13.4946 11.0011 13.3251 10.8064 13.0667 10.5085L13.0505 10.4899C12.8127 10.2157 12.6098 9.98191 12.4309 9.80187C12.2448 9.61472 12.0414 9.44013 11.7894 9.31921C11.143 9.00901 10.3875 9.02544 9.75521 9.36345C9.50875 9.49521 9.3131 9.67848 9.13539 9.87354C8.96444 10.0612 8.77195 10.3036 8.54622 10.5878L5.4127 14.5336C5.15511 14.858 5.20924 15.3298 5.53361 15.5874C5.85798 15.845 6.32976 15.7908 6.58735 15.4665L9.70554 11.54C9.9508 11.2312 10.1117 11.0292 10.2442 10.8837C10.3739 10.7415 10.4347 10.7011 10.4624 10.6863C10.6731 10.5736 10.925 10.5681 11.1405 10.6715C11.1688 10.6851 11.2313 10.7228 11.367 10.8593C11.5057 10.9989 11.6752 11.1937 11.9337 11.4915L11.9499 11.5102C12.1877 11.7843 12.3906 12.0181 12.5695 12.1982C12.7555 12.3853 12.959 12.5599 13.2109 12.6808C13.8573 12.991 14.6129 12.9746 15.2452 12.6366C15.4917 12.5048 15.6873 12.3215 15.865 12.1265C16.0359 11.9388 16.2284 11.6964 16.4541 11.4122L19.5875 7.46644Z" fill="CurrentColor"></path>
</svg>


                </span>
                <strong class="desc c-primary">Complete Platform</strong>
                <span class="text-center">Everything you need for earning & finance management in one place</span>
            </div>
        </div>
        <div class="grid m-top-20 w-full grid-2 g-10 pc-grid-4 place-center">
            <img src="{{ asset('banners/IMG-20251004-WA0000.jpg') }}" alt="" data-class="rotate-in-from-left" class="w-full observe br-10">
            <img src="{{ asset('banners/IMG-20251004-WA0003.jpg') }}" alt="" data-class="rotate-in-from-right" class="w-full observe br-10">
            <img src="{{ asset('banners/IMG-20250819-WA0021.jpg') }}" alt="" data-class="rotate-in-from-top" class="w-full observe br-10">
            <img src="{{ asset('banners/IMG-20251013-WA0004.jpg') }}" alt="" data-class="rotate-in-from-bottom" class="w-full observe br-10">

        </div>
        <span style="font-size:1rem;text-align:center;line-height:1;font-family:titan one" class=" m-x-auto c-primary">Our Unique Features</span>
       
        <div class="grid m-top-20 w-full g-10 pc-grid-2 place-center">
           <div class="w-full m-top-10 column g-5">
            <div data-class="trans-from-left" class="w-full observe column">
                 <strong class="desc c-primary">Mind Challenges</strong>
             <span>Test your knowledge with BrainQuest & earn rewards for your intellectual prowess.</span>
           
            </div>
            <img src="{{ asset('banners/IMG-20250919-WA0008.jpg') }}" alt="" data-class="trans-from-right" class="w-full observe max-w-500 br-10">
            </div>
             <div class="w-full m-top-10 column g-5">
            <div data-class="trans-from-left" class="w-full observe column">
                 <strong class="desc c-primary">Gaming Rewards</strong>
             <span>Enjoy our selection of games and activities that pay you for having fun.</span>
           
            </div>
            <img src="{{ asset('banners/IMG-20251004-WA0028.jpg') }}" alt="" data-class="trans-from-right" class="w-full observe max-w-500 br-10">
            </div>
              <div class="w-full m-top-10 column g-5">
            <div data-class="trans-from-left" class="w-full observe column">
                 <strong class="desc c-primary">Mobile Services</strong>
             <span>Purchase airtime & data directly using your {{ config('app.name') }} wallet balance.</span>
           
            </div>
            <img src="{{ asset('banners/IMG-20251013-WA0008.jpg') }}" alt="" data-class="trans-from-right" class="w-full observe max-w-500 br-10">
            </div>
             <div class="w-full m-top-10 column g-5">
            <div data-class="trans-from-left" class="w-full observe column">
                 <strong class="desc c-primary">Get paid to write Daily</strong>
             <span>No experience needed.Join the {{ config('app.name') }} Wordsmith Wars,write simple artticles and blogs,and earn &#8358;10,000 every single day.Start getting paid for your words.</span>
           
            </div>
            <img src="{{ asset('banners/IMG-20251004-WA0022.jpg') }}" alt="" data-class="trans-from-right" class="w-full observe max-w-500 br-10">
            </div>
            <div class="w-full m-top-10 column g-5">
            <div data-class="trans-from-left" class="w-full observe column">
                 <strong class="desc c-primary">Super Active Customer Service</strong>
             <span>{{ config('app.name') }} offers always-available custimer care for any issues.We are here to guide you and resolve problems effectively,ensuring you have the best possible experience.</span>
           
            </div>
            <img src="{{ asset('banners/IMG-20251013-WA0017.jpg') }}" alt="" data-class="trans-from-right" class="w-full observe max-w-500 br-10">
            </div>
             <div class="w-full m-top-10 column g-5">
            <div data-class="trans-from-left" class="w-full observe column">
                 <strong class="desc c-primary">Your Dream career is closer than you think</strong>
             <span>Stop the endless searching.With {{ config('app.name') }},finding your ideal job is effortless.We're here to make your career goals a reality without the hassle.</span>
           
            </div>
           <img src="{{ asset('banners/IMG-20251004-WA0031.jpg') }}" alt="" data-class="trans-from-right" class="w-full observe max-w-500 br-10">
             </div>
           
        </div>
    </section>
@endsection
@section('js')
    <script class="js">
        function ObserveItems(class_name){
            let observer=new IntersectionObserver((entries)=>{
                entries.forEach((entry)=>{
                    if(entry.isIntersecting){
                        entry.target.classList.add(entry.target.dataset.class);
                    }else{
                        entry.target.classList.remove(entry.target.dataset.class);
                    }
                });
            },{
                threshold : 0
            });
            let items=document.querySelectorAll('.' + class_name);
           items.forEach((item)=>{
             observer.observe(item);
           })
        }
        window.onload=function(){
            document.querySelector('.happy-users').style.minWidth=document.querySelector('.happy-users').getBoundingClientRect().height + 'px'
        }
        ObserveItems('observe');
    </script>
@endsection
