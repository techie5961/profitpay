@isset($tasks)
      @foreach ($tasks as $data)
            <div class="column w-full no-select g-10 p-10 br-10 bg-secondary-dark box-shadow">
                <div class="row w-full align-center space-between">
                    <strong>{{ $data->title ?? 'null' }}</strong>
                    <div class="p-y-5 p-x-10 c-black bg-gold br-1000 bold">{!! Currency(Auth::guard('users')->user()->id)  !!}{{ number_format($reward ?? 0,2) }}</div>
                </div>
                <hr>
                <span class="text-average">Click the button below to perform the task,note that not performing task would lead to permanent banning of your account so be warned.</span>
            <div class="w-full br-1000 h-5 bg-green"></div>
           <div class="row w-full align-center space-between">
             <span class="row align-center g-2 ">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="CurrentColor" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24ZM74.08,197.5a64,64,0,0,1,107.84,0,87.83,87.83,0,0,1-107.84,0ZM96,120a32,32,0,1,1,32,32A32,32,0,0,1,96,120Zm97.76,66.41a79.66,79.66,0,0,0-36.06-28.75,48,48,0,1,0-59.4,0,79.66,79.66,0,0,0-36.06,28.75,88,88,0,1,1,131.52,0Z"></path></svg>
                Posted by Admin
            </span>
            <span>{{ $data->completed }}/{{ $data->limit }}</span>

           </div>
           <div class="row space-between w-full align-center">
            <button onclick="
                window.open('{{ $data->link }}');
                document.querySelector('.claim-btn').classList.remove('display-none');
                " class="btn-blue br-5 clip-5"><span>Perform task</span></button>
              <button onclick="GetRequest(event,'{{ url('users/get/claim/task/reward?id='.$data->id.'') }}',this,MyFunc.Completed)" class="btn-green claim-btn display-none br-5 clip-5"><span>Claim Reward</span></button>
           </div>
            </div>
        @endforeach
        @if ($tasks->hasMorePages())
            @include('components.sections',[
                'page' => $tasks->currentPage() + 1,
                'infinite_loading' => true
            ])
        @endif
@endisset
@isset($transactions)
     @foreach ($transactions as $data)
                <div onclick="spa(event,'{{ url('users/transaction/receipt?id='.$data->id.'') }}')" class="w-full bg-secondary-dark p-10 br-5 row align-center g-10 space-between">
                    <div class="h-30 w-30 column svg justify-center bg-primary-transparent circle clip-circle">{!! $data->svg !!}</div>
               <div class="column g-2 m-right-auto">
                <strong class="font-1">{{ $data->type }}</strong>
                <span class="text-average text-dim">{{ $data->date }}</span>
               </div>
               <div class="column align-center g-2">
              @if ($data->class == 'credit')
               <strong class="font-1 c-green">+ {!! Currency(Auth::guard('users')->user()->id)  !!}
                {{ number_format($data->amount,2) }}</strong>
                 @else
                  <strong class="font-1 c-red">- {!! Currency(Auth::guard('users')->user()->id)  !!}
                {{ number_format($data->amount,2) }}</strong> 
              @endif
                <div class="status {{ $data->status == 'success' ? 'green' : ($data->status == 'rejected' ? 'red' : 'gold') }}">{{ $data->status }}</div>
               </div>
                </div>
            @endforeach
            @if ($transactions->hasMorePages())
                @include('components.sections',[
                    'infinite_loading' => true,
                    'page' => $transactions->currentPage() + 1
                ])
            @endif
@endisset
@isset($articles)
      @foreach ($articles as $data)
            <div class="w-full column br-10 border-1 border-color-primary p-10 g-10">
                <strong class="desc c-gold">{{ $data->topic->topic }}</strong>
                
                <hr class="bg-gold">
                 <img src="{{ asset('banners/IMG-20251004-WA0022.jpg') }}" class="w-full" alt="">
              
                <div class="w-full">
                  
                    {!! strlen($data->article) > 200 ? nl2br(substr($data->article,0,200)).'....' : nl2br($data->article) !!}
                    <span class="text-average row align-center g-2 m-left-auto w-fit">
                         <svg width="10" height="10" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path opacity="0.5" d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z" fill="CurrentColor"></path>
<path d="M16.807 19.0112C15.4398 19.9504 13.7841 20.5 12 20.5C10.2159 20.5 8.56023 19.9503 7.193 19.0111C6.58915 18.5963 6.33109 17.8062 6.68219 17.1632C7.41001 15.8302 8.90973 15 12 15C15.0903 15 16.59 15.8303 17.3178 17.1632C17.6689 17.8062 17.4108 18.5964 16.807 19.0112Z" fill="CurrentColor"></path>
<path d="M12 12C13.6569 12 15 10.6569 15 9C15 7.34315 13.6569 6 12 6C10.3432 6 9.00004 7.34315 9.00004 9C9.00004 10.6569 10.3432 12 12 12Z" fill="CurrentColor"></path>
</svg>
                        By {{ $data->user->username }}</span>
                </div>
                <div class="row w-full g-10 align-center space-between">
                     <div class="row no-select border-1 border-color-primary p-x-10 bg-primary-transparent br-10h p-5 align-center g-5">
                        <span class="svg-{{ $data->id }} vote-svg {{ $data->voted > 0 ? 'c-red' : '' }}" onclick="
                   let el=this;
                            if(this.classList.contains('voted')){
                      this.classList.remove('voted');
                      this.classList.add('clicked');
                      
                      setTimeout(function(){
                     el.classList.remove('clicked');
                      },1000)
                     }else{
                      this.classList.add('voted');
                       this.classList.add('clicked');
                        setTimeout(function(){
                      el.classList.remove('clicked');
                      },1000)
                     }
                        GetRequest(event,'{{ url('users/get/vote/article?id='.$data->id.'') }}',document.createElement('div'),MyFunc.Voted)
                        ">
     <svg  width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M2 9.13734C2 14.0003 6.01943 16.5917 8.96173 18.9111C10 19.7296 11 20.5002 12 20.5002C13 20.5002 14 19.7296 15.0383 18.9111C17.9806 16.5917 22 14.0003 22 9.13734C22 4.27441 16.4998 0.825708 12 5.50088C7.50016 0.825708 2 4.27441 2 9.13734Z" fill="CurrentColor"></path>
</svg>
                        </span>
                       
    <span class="votes-{{ $data->id }} bold">{{ number_format($data->votes) }}</span>
                        <span>Vote(s)</span>
                    </div>
                    @if (strlen($data->article) > 200)
                        <button onclick="spa(event,'{{ url('users/article/read/more?id='.$data->id.'') }}')" class="btn-primary-3d clip-5 br-5">Read More...</button>
                    @endif
                </div>
            </div>
        @endforeach
        @if ($articles->hasMorePages())
            @include('components.sections',[
                'infinite_loading' => true,
                'page' => $articles->currentPage() + 1
            ])
        @endif
@endisset
@isset($vendors_dashboard)
     @foreach ($coupons as $data)
                    <div class="w-full bg-secondary analytics loop column g-10 br-10 p-10">
                     <div class="column g-10 w-full">
                          <div class="row g-2 align-center w-full space-between">
                         <strong class="desc c-primary">{{ $data->code }}</strong>
                        <div onclick="copy('{{ $data->code }}')" class="c-white m-right-auto">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M20.0616 12.6473L20.5793 10.7154C21.1835 8.46034 21.4856 7.3328 21.2581 6.35703C21.0785 5.58657 20.6744 4.88668 20.097 4.34587C19.3657 3.66095 18.2381 3.35883 15.9831 2.75458C13.728 2.15033 12.6004 1.84821 11.6247 2.07573C10.8542 2.25537 10.1543 2.65945 9.61351 3.23687C9.02709 3.86298 8.72128 4.77957 8.26621 6.44561C8.18979 6.7254 8.10915 7.02633 8.02227 7.35057L8.02222 7.35077L7.50458 9.28263C6.90033 11.5377 6.59821 12.6652 6.82573 13.641C7.00537 14.4115 7.40945 15.1114 7.98687 15.6522C8.71815 16.3371 9.84569 16.6392 12.1008 17.2435L12.1008 17.2435C14.1334 17.7881 15.2499 18.0873 16.165 17.9744C16.2652 17.9621 16.3629 17.9448 16.4592 17.9223C17.2296 17.7427 17.9295 17.3386 18.4703 16.7612C19.1552 16.0299 19.4574 14.9024 20.0616 12.6473Z" fill="CurrentColor"></path>
<path d="M2.50458 14.715L3.02222 16.6469C3.62647 18.902 3.92859 20.0295 4.61351 20.7608C5.15432 21.3382 5.85421 21.7423 6.62466 21.9219C7.60044 22.1494 8.72798 21.8473 10.9831 21.2431C13.2381 20.6388 14.3657 20.3367 15.097 19.6518C15.1577 19.5949 15.2164 19.5363 15.2733 19.4761C14.9391 19.448 14.602 19.3942 14.2594 19.3261C13.5633 19.1877 12.7362 18.9661 11.758 18.704L11.6512 18.6753L11.6264 18.6687C10.5621 18.3835 9.67281 18.1448 8.96277 17.8883C8.21607 17.6185 7.5376 17.286 6.96148 16.7464C6.16753 16.0028 5.61193 15.0404 5.36491 13.9811C5.18567 13.2123 5.23691 12.4585 5.37666 11.6769C5.51058 10.928 5.75109 10.0305 6.03926 8.95515L6.03926 8.95514L6.57365 6.96077L6.59245 6.89062C4.6719 7.40799 3.66101 7.71408 2.98687 8.34548C2.40945 8.88629 2.00537 9.58617 1.82573 10.3566C1.59821 11.3324 1.90033 12.4599 2.50458 14.715Z" fill="CurrentColor"></path>
</svg>
                        </div>
                        @switch($data->status)
                            @case('active')
                                <div class="p-5 br-5 bg-green c-white no-select">{{ $data->status }}</div>
                                @break
                            @case('redeemed')
                                  <div class="p-5 br-5 bg-blue c-white no-select">{{ $data->status }}</div>
                                @break
                            @default
                             <div class="p-5 br-5 bg-blue c-white no-select">{{ $data->status }}</div>
                                  
                        @endswitch

                       </div>
                       <hr class="bg-primary gradient">
                       <div class="row w-full align-center g-5">
                        <div class="row align-center g-2">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<circle cx="12" cy="6" r="4" fill="CurrentColor"></circle>
<ellipse cx="12" cy="17" rx="7" ry="4" fill="CurrentColor"></ellipse>
</svg>
<span>Used By:</span>

                        </div>
                        <span class="c-primary bold">{{ $data->used_by }}</span>
                       </div>
                        <div class="row w-full align-center g-5">
                        <div class="row align-center g-2">
                           <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<circle cx="9.00098" cy="6" r="4" fill="CurrentColor"></circle>
<ellipse cx="9.00098" cy="17.001" rx="7" ry="4" fill="CurrentColor"></ellipse>
<path d="M20.9996 17.0007C20.9996 18.6576 18.9641 20.0007 16.4788 20.0007C17.211 19.2003 17.7145 18.1958 17.7145 17.0021C17.7145 15.807 17.2098 14.8015 16.4762 14.0007C18.9615 14.0007 20.9996 15.3438 20.9996 17.0007Z" fill="CurrentColor"></path>
<path d="M17.9996 6.00098C17.9996 7.65783 16.6565 9.00098 14.9996 9.00098C14.6383 9.00098 14.292 8.93711 13.9712 8.82006C14.4443 7.98796 14.7145 7.02547 14.7145 5.99986C14.7145 4.97501 14.4447 4.01318 13.9722 3.18151C14.2927 3.0647 14.6387 3.00098 14.9996 3.00098C16.6565 3.00098 17.9996 4.34412 17.9996 6.00098Z" fill="CurrentColor"></path>
</svg>

<span>Invited By:</span>

                        </div>
                        <span class="c-primary bold">{{ $data->ref }}</span>
                       </div>
                         <div class="row w-full align-center g-5">
                        <div class="row align-center g-2">
                         <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M12.0002 2.75C11.0217 2.75 10.1873 3.37503 9.87803 4.24993C9.73999 4.64047 9.3115 4.84517 8.92096 4.70713C8.53043 4.56909 8.32573 4.1406 8.46377 3.75007C8.97821 2.29459 10.3662 1.25 12.0002 1.25C13.6341 1.25 15.0222 2.29459 15.5366 3.75007C15.6747 4.1406 15.47 4.56909 15.0794 4.70713C14.6889 4.84517 14.2604 4.64047 14.1224 4.24993C13.8131 3.37503 12.9787 2.75 12.0002 2.75Z" fill="CurrentColor"></path>
<path d="M14 12.5H10C9.72386 12.5 9.5 12.7239 9.5 13V15.1615C9.5 15.3659 9.62448 15.5498 9.8143 15.6257L10.5144 15.9058C11.4681 16.2872 12.5319 16.2872 13.4856 15.9058L14.1857 15.6257C14.3755 15.5498 14.5 15.3659 14.5 15.1615V13C14.5 12.7239 14.2761 12.5 14 12.5Z" fill="CurrentColor"></path>
<path d="M8.01076 15.3691L3.00586 13.8677C3.03595 16.9822 3.21789 19.8505 4.31792 20.8283C5.63593 21.9998 7.75726 21.9998 11.9999 21.9998C16.2425 21.9998 18.3639 21.9998 19.6819 20.8283C20.7819 19.8505 20.9638 16.9822 20.9939 13.8677L15.9892 15.3691C15.913 16.1018 15.4372 16.7407 14.7428 17.0184L14.0426 17.2985C12.7314 17.823 11.2686 17.823 9.95735 17.2985L9.25722 17.0184C8.5628 16.7407 8.08702 16.1018 8.01076 15.3691Z" fill="CurrentColor"></path>
<path d="M7.60893 5H16.3911C18.8412 5 20.0663 5 20.8934 5.67298C21.0524 5.80233 21.1977 5.94762 21.327 6.10659C22 6.9337 22 8.15877 22 10.6089C22 11.2307 22 11.5415 21.8492 11.784C21.8199 11.8312 21.7866 11.8759 21.7498 11.9176C21.5609 12.1317 21.2631 12.2211 20.6676 12.3997L16 13.8V13C16 11.8954 15.1046 11 14 11H10C8.89543 11 8 11.8954 8 13V13.8L3.3324 12.3997C2.7369 12.2211 2.43915 12.1317 2.25021 11.9176C2.21341 11.8759 2.18015 11.8312 2.15078 11.784C2 11.5415 2 11.2307 2 10.6089C2 8.15877 2 6.9337 2.67298 6.10659C2.80233 5.94763 2.94763 5.80233 3.10659 5.67298C3.9337 5 5.15877 5 7.60893 5Z" fill="CurrentColor"></path>
</svg>



<span>Package:</span>

                        </div>
                        <span class="c-primary bold">{{ $data->package->name }}</span>
                       </div>
                        <div class="row w-full align-center g-5">
                        <div class="row align-center g-2">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M11.25 7.84748C10.3141 8.10339 9.75 8.82154 9.75 9.5C9.75 10.1785 10.3141 10.8966 11.25 11.1525V7.84748Z" fill="CurrentColor"></path>
<path d="M12.75 12.8475V16.1525C13.6859 15.8966 14.25 15.1785 14.25 14.5C14.25 13.8215 13.6859 13.1034 12.75 12.8475Z" fill="CurrentColor"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM12 5.25C12.4142 5.25 12.75 5.58579 12.75 6V6.31673C14.3804 6.60867 15.75 7.83361 15.75 9.5C15.75 9.91421 15.4142 10.25 15 10.25C14.5858 10.25 14.25 9.91421 14.25 9.5C14.25 8.82154 13.6859 8.10339 12.75 7.84748V11.3167C14.3804 11.6087 15.75 12.8336 15.75 14.5C15.75 16.1664 14.3804 17.3913 12.75 17.6833V18C12.75 18.4142 12.4142 18.75 12 18.75C11.5858 18.75 11.25 18.4142 11.25 18V17.6833C9.61957 17.3913 8.25 16.1664 8.25 14.5C8.25 14.0858 8.58579 13.75 9 13.75C9.41421 13.75 9.75 14.0858 9.75 14.5C9.75 15.1785 10.3141 15.8966 11.25 16.1525V12.6833C9.61957 12.3913 8.25 11.1664 8.25 9.5C8.25 7.83361 9.61957 6.60867 11.25 6.31673V6C11.25 5.58579 11.5858 5.25 12 5.25Z" fill="CurrentColor"></path>
</svg>




<span>Package Cost:</span>

                        </div>
                        <span class="c-primary bold">&#8358;{{ number_format($data->package->cost,2) }}</span>
                       </div>
                         <div class="row w-full align-center g-5">
                        <div class="row align-center g-2">
                          <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M11.25 2C11.25 1.58579 11.5858 1.25 12 1.25C17.9371 1.25 22.75 6.06294 22.75 12C22.75 17.9371 17.9371 22.75 12 22.75C6.06294 22.75 1.25 17.9371 1.25 12C1.25 11.5858 1.58579 11.25 2 11.25C2.41421 11.25 2.75 11.5858 2.75 12C2.75 17.1086 6.89137 21.25 12 21.25C17.1086 21.25 21.25 17.1086 21.25 12C21.25 6.89137 17.1086 2.75 12 2.75C11.5858 2.75 11.25 2.41421 11.25 2ZM12 8.25C12.4142 8.25 12.75 8.58579 12.75 9V12.25H16C16.4142 12.25 16.75 12.5858 16.75 13C16.75 13.4142 16.4142 13.75 16 13.75H12C11.5858 13.75 11.25 13.4142 11.25 13V9C11.25 8.58579 11.5858 8.25 12 8.25Z" fill="CurrentColor"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M9.09958 2.39754C9.24874 2.78396 9.05641 3.21814 8.66999 3.36731C8.52855 3.42191 8.38879 3.47988 8.2508 3.54114C7.87221 3.70921 7.42906 3.53856 7.261 3.15997C7.09293 2.78139 7.26358 2.33824 7.64217 2.17017C7.80267 2.09892 7.96526 2.03147 8.1298 1.96795C8.51623 1.81878 8.95041 2.01112 9.09958 2.39754ZM5.6477 4.24026C5.93337 4.54021 5.92178 5.01495 5.62183 5.30061C5.51216 5.40506 5.40505 5.51216 5.30061 5.62183C5.01495 5.92178 4.54021 5.93337 4.24026 5.6477C3.94031 5.36204 3.92873 4.88731 4.21439 4.58736C4.33566 4.46003 4.46002 4.33566 4.58736 4.21439C4.88731 3.92873 5.36204 3.94031 5.6477 4.24026ZM3.15997 7.261C3.53856 7.42907 3.70921 7.87222 3.54114 8.2508C3.47988 8.38879 3.42191 8.52855 3.36731 8.66999C3.21814 9.05641 2.78396 9.24874 2.39754 9.09958C2.01112 8.95041 1.81878 8.51623 1.96795 8.12981C2.03147 7.96526 2.09892 7.80267 2.17017 7.64217C2.33824 7.26358 2.78139 7.09293 3.15997 7.261Z" fill="CurrentColor"></path>
</svg>


<span>Generated:</span>

                        </div>
                        <span class="c-primary bold">{{ $data->frame }}</span>
                       </div>
                     </div>
                    </div>
                @endforeach
                @if ($coupons->hasMorePages())
                   @include('components.sections',[
                    'infinite_loading' => true,
                    'page' => $coupons->currentPage() + 1
                   ]) 
                @endif
@endisset