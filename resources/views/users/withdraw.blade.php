@extends('layout.users.app')
@section('title')
    Withdraw
@endsection
@section('css')
    <style class="css">
       .wallets.active{
        background:#4caf50 !important;
        color:white !important;
        animation: scale-in-out 0.5s ease forwards;
       } 
       @keyframes scale-in-out{
        0%,100%{
            transform: scale(1)
        }

        50%{
            transform:scale(0.95);
        }

       }
      
    </style>
@endsection
@section('main')
    <section class="w-full align-center justify-center column g-10 p-10">
         <div class="bg-secondary-dark w-full column g-10 mmax-w-500 br-10 p-10">
            <div class="row p-10 space-between br-10 border-1 border-color-dim align-center">

                <span class="desc bold">Withdraw Funds</span>
               <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4caf50" viewBox="0 0 256 256"><path d="M216,64H56a8,8,0,0,1,0-16H192a8,8,0,0,0,0-16H56A24,24,0,0,0,32,56V184a24,24,0,0,0,24,24H216a16,16,0,0,0,16-16V80A16,16,0,0,0,216,64Zm0,128H56a8,8,0,0,1-8-8V78.63A23.84,23.84,0,0,0,56,80H216Zm-48-60a12,12,0,1,1,12,12A12,12,0,0,1,168,132Z"></path></svg>

            </div>
            <div class="column g-5 w-full">
               
                <span>Select a wallet you intend to withdraw from.</span>
            </div>
            <form action="{{ url('users/post/withdraw/process') }}" method="POST" onsubmit="PostRequest(event,this,MyFunc.Completed)" class="w-full column g-10">
              
                <input type="hidden" class="input" name="_token" value="{{ @csrf_token() }}">
                <div class="w-full grid grid-2 g-10 place-center">
                    <div onclick="
                     document.querySelectorAll('.wallets').forEach((wallet)=>{
                     wallet.classList.remove('active');
                     });
                     this.classList.add('active');
                        document.querySelector('.minimum_text').innerHTML=`MINIMUM WITHDRAWAL : {!! Currency(Auth::guard('users')->user()->id)  !!}{{ number_format($activities_minimum,2) }}`;
                    document.querySelector('input.wallet').value='activities_balance';
                    document.querySelector('button.post').classList.remove('disabled');
                   
                     " class="w-full wallets transition-ease-half column bg-dim align-center g-5 p-10 no-select pointer clip-5 br-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="CurrentColor" viewBox="0 0 256 256"><path d="M208,48H48A24,24,0,0,0,24,72V184a24,24,0,0,0,24,24H208a24,24,0,0,0,24-24V72A24,24,0,0,0,208,48Zm-56,72a24,24,0,0,1-48,0,8,8,0,0,0-8-8H40V96H216v16H160A8,8,0,0,0,152,120ZM48,64H208a8,8,0,0,1,8,8v8H40V72A8,8,0,0,1,48,64Z"></path></svg>

                        <strong class="font-1">Activities Wallet</strong>
                        <strong class="desc">{!! Currency(Auth::guard('users')->user()->id)  !!}{{ number_format(Auth::guard('users')->user()->activities_balance) }}</strong>
                    </div>
                     <div onclick="
                    try{
                     document.querySelectorAll('.wallets').forEach((wallet)=>{
                     wallet.classList.remove('active');
                      });
                    this.classList.add('active');
                      document.querySelector('.minimum_text').innerHTML=`MINIMUM WITHDRAWAL : {!! Currency(Auth::guard('users')->user()->id)  !!}{{ number_format($affiliate_minimum,2) }}`;
                    document.querySelector('input.wallet').value='affiliate_balance';
                    document.querySelector('button.post').classList.remove('disabled');
                  

                    }catch(error){
                    CreateNotify('error',error.stack);
                    }
                     
                     " class="w-full wallets transition-ease-half column bg-dim align-center g-5 p-10 no-select pointer clip-5 br-5">
                       <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="CurrentColor" viewBox="0 0 256 256"><path d="M128.09,57.38a36,36,0,0,1,55.17-27.82,4,4,0,0,1-.56,7A52.06,52.06,0,0,0,152,84c0,1.17,0,2.34.12,3.49a4,4,0,0,1-6,3.76A36,36,0,0,1,128.09,57.38ZM240,160.61a24.47,24.47,0,0,1-13.6,22l-.44.2-38.83,16.54a6.94,6.94,0,0,1-1.19.4l-64,16A7.93,7.93,0,0,1,120,216H16A16,16,0,0,1,0,200V160a16,16,0,0,1,16-16H44.69l22.62-22.63A31.82,31.82,0,0,1,89.94,112H140a28,28,0,0,1,27.25,34.45l41.84-9.62A24.61,24.61,0,0,1,240,160.61Zm-16,0a8.61,8.61,0,0,0-10.87-8.3l-.31.08-67,15.41a8.32,8.32,0,0,1-1.79.2H112a8,8,0,0,1,0-16h28a12,12,0,0,0,0-24H89.94a15.86,15.86,0,0,0-11.31,4.69L56,155.31V200h63l62.43-15.61,38-16.18A8.56,8.56,0,0,0,224,160.61ZM168,84a36,36,0,1,0,36-36A36,36,0,0,0,168,84Z"></path></svg>

                        <strong class="font-1">Affiliate Wallet</strong>
                        <strong class="desc">{!! Currency(Auth::guard('users')->user()->id)  !!}{{ number_format(Auth::guard('users')->user()->affiliate_balance) }}</strong>
                    </div>
                </div>
                {{-- WALLET SELECTED --}}
                <input type="hidden" name="wallet" class="input wallet">
                <label for="">Enter Withdrawal Amount</label>
                <div class="cont row align-center w-full h-50 br-10 border-1 bg border-color-silver">
                    <input placeholder="Enter withdrawal amount" name="amount" type="number" class="w-full inp input required account-number h-full no-border br-10 bg-transparent">
                </div>
                <span class="minimum_text"></span>
                  @if ($bank_linked !== 'false')
            <div class="w-full no-select m-x-auto max-w-500 p-10 br-10 bg-light g-10">
                <div class="w-full display-none p-10 bg-primary primary-text bold font-cinzel-decorative desc br-10 justify-center text-center">Bank Details

                </div>
            <div class="row space-between g-10 align-center">
                <strong class="font-1 c-primary">Account Number :</strong>
                <span>{{ $bank->account_number }}</span>
            </div>
               <div class="row space-between g-10 align-center">
                <strong class="font-1 c-primary">Bank Name:</strong>
                <span>{{ $bank->bank_name }}</span>
            </div>
            <div class="row space-between g-10 align-center">
                <strong class="font-1 c-primary">Account Holder Name :</strong>
                <span>{{ $bank->account_name }}</span>
            </div>
           <div onclick="spa(event,'{{ url('users/bank/add') }}')" class="w-full m-top-10 no-select clip-10 pointer row br-10 bg-dim p-10 align-center justify-center">
            Update Bank <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="CurrentColor" viewBox="0 0 256 256"><path d="M222.33,123.89c-.06-.13-.12-.26-.19-.38L192,69.91V32a16,16,0,0,0-16-16H80A16,16,0,0,0,64,32V69.9L33.86,123.51c-.07.12-.13.25-.2.38a15.94,15.94,0,0,0,1.46,16.57l.11.14,77.61,100.81A4,4,0,0,0,120,239V154.63a24,24,0,1,1,16,0V239a4,4,0,0,0,7.16,2.44l77.6-100.81.11-.14A15.92,15.92,0,0,0,222.33,123.89ZM176,64H80V32h96Z"></path></svg>


           </div>
        </div>
       @endif
                 
               
              
                <button class="post ddisabled">Withdraw Funds</button>
            </form>
        </div>
    </section>
@endsection
@section('js')
    <script class="js">
        window.MyFunc = {
            Completed : function(response,event){
                let data=JSON.parse(response);
                if(data.status == 'success'){
                    spa(event,data.url);
                }
            }
        }
    </script>
@endsection