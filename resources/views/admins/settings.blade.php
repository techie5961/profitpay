@extends('layout.admins.app')
@section('title')
    Site Settings
@endsection
@section('main')
    <section class="column w-full p-10 g-10">
        <form action="{{ url('admins/post/general/settings/process') }}" method="POST" onsubmit="PostRequest(event,this)" class="w-full p-10 g-5 column bg-white box-shadow br-10">
            <div class="row g-5 align-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="var(--bg-secondary)" viewBox="0 0 256 256"><path d="M128,80a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160Zm88-29.84q.06-2.16,0-4.32l14.92-18.64a8,8,0,0,0,1.48-7.06,107.21,107.21,0,0,0-10.88-26.25,8,8,0,0,0-6-3.93l-23.72-2.64q-1.48-1.56-3-3L186,40.54a8,8,0,0,0-3.94-6,107.71,107.71,0,0,0-26.25-10.87,8,8,0,0,0-7.06,1.49L130.16,40Q128,40,125.84,40L107.2,25.11a8,8,0,0,0-7.06-1.48A107.6,107.6,0,0,0,73.89,34.51a8,8,0,0,0-3.93,6L67.32,64.27q-1.56,1.49-3,3L40.54,70a8,8,0,0,0-6,3.94,107.71,107.71,0,0,0-10.87,26.25,8,8,0,0,0,1.49,7.06L40,125.84Q40,128,40,130.16L25.11,148.8a8,8,0,0,0-1.48,7.06,107.21,107.21,0,0,0,10.88,26.25,8,8,0,0,0,6,3.93l23.72,2.64q1.49,1.56,3,3L70,215.46a8,8,0,0,0,3.94,6,107.71,107.71,0,0,0,26.25,10.87,8,8,0,0,0,7.06-1.49L125.84,216q2.16.06,4.32,0l18.64,14.92a8,8,0,0,0,7.06,1.48,107.21,107.21,0,0,0,26.25-10.88,8,8,0,0,0,3.93-6l2.64-23.72q1.56-1.48,3-3L215.46,186a8,8,0,0,0,6-3.94,107.71,107.71,0,0,0,10.87-26.25,8,8,0,0,0-1.49-7.06Zm-16.1-6.5a73.93,73.93,0,0,1,0,8.68,8,8,0,0,0,1.74,5.48l14.19,17.73a91.57,91.57,0,0,1-6.23,15L187,173.11a8,8,0,0,0-5.1,2.64,74.11,74.11,0,0,1-6.14,6.14,8,8,0,0,0-2.64,5.1l-2.51,22.58a91.32,91.32,0,0,1-15,6.23l-17.74-14.19a8,8,0,0,0-5-1.75h-.48a73.93,73.93,0,0,1-8.68,0,8,8,0,0,0-5.48,1.74L100.45,215.8a91.57,91.57,0,0,1-15-6.23L82.89,187a8,8,0,0,0-2.64-5.1,74.11,74.11,0,0,1-6.14-6.14,8,8,0,0,0-5.1-2.64L46.43,170.6a91.32,91.32,0,0,1-6.23-15l14.19-17.74a8,8,0,0,0,1.74-5.48,73.93,73.93,0,0,1,0-8.68,8,8,0,0,0-1.74-5.48L40.2,100.45a91.57,91.57,0,0,1,6.23-15L69,82.89a8,8,0,0,0,5.1-2.64,74.11,74.11,0,0,1,6.14-6.14A8,8,0,0,0,82.89,69L85.4,46.43a91.32,91.32,0,0,1,15-6.23l17.74,14.19a8,8,0,0,0,5.48,1.74,73.93,73.93,0,0,1,8.68,0,8,8,0,0,0,5.48-1.74L155.55,40.2a91.57,91.57,0,0,1,15,6.23L173.11,69a8,8,0,0,0,2.64,5.1,74.11,74.11,0,0,1,6.14,6.14,8,8,0,0,0,5.1,2.64l22.58,2.51a91.32,91.32,0,0,1,6.23,15l-14.19,17.74A8,8,0,0,0,199.87,123.66Z"></path></svg>
                <span class="desc bold c-bg-secondary ws-nowrap">General Settings</span>
                
            </div>
            <hr>
            <input type="hidden" name="_token" value="{{ @csrf_token() }}" class="input">
            <label for="">Spin & Win Minimum Reward</label>
            <div class="cont w-full h-50 br-10 border-1 border-color-silver bg-dim">
                <input value="{{ $general->spin_minimum ?? 0 }}" type="number" placeholder="E.g 500" name="spin_minimum"  class="inp required input h-full w-full no-border bg-transparent br-10">
            </div>
             <label for="">Spin & Win Maximum Reward</label>
            <div class="cont w-full h-50 br-10 border-1 border-color-silver bg-dim">
                <input value="{{ $general->spin_maximum ?? 0 }}" type="number" placeholder="E.g 1500" name="spin_maximum"  class="inp required input h-full w-full no-border bg-transparent br-10">
            </div>
            <button class="post bg-secondary secondary-text"><span>Update General Settings</span></button>
        </form>
          <form action="{{ url('admins/post/finance/settings/process') }}" method="POST" onsubmit="PostRequest(event,this)" class="w-full p-10 g-5 column bg-white box-shadow br-10">
            <div class="row g-5 align-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="var(--bg-secondary)" viewBox="0 0 256 256"><path d="M224,48H32A16,16,0,0,0,16,64V192a16,16,0,0,0,16,16H224a16,16,0,0,0,16-16V64A16,16,0,0,0,224,48Zm0,16V88H32V64Zm0,128H32V104H224v88Zm-16-24a8,8,0,0,1-8,8H168a8,8,0,0,1,0-16h32A8,8,0,0,1,208,168Zm-64,0a8,8,0,0,1-8,8H120a8,8,0,0,1,0-16h16A8,8,0,0,1,144,168Z"></path></svg>
               <span class="desc bold c-bg-secondary ws-nowrap">Finance Settings</span>
                
            </div>
            <hr>
              <label for="">Airtime Portal</label>
           <div class="w-full p-10 column g-5 bg-secondary-light br-10 border-1 border-color-bg">
            <div class="row space-between g-10 align-center w-full">
                <strong class="desc c-bg">Airtime Portal</strong>
                <div class="toggle {{ ($finance->vtu->airtime ?? 'active') == 'open' ? 'active' : '' }}"><div onclick="
                if(this.closest('.toggle').classList.contains('active')){
                this.closest('.toggle').classList.remove('active');
                document.querySelector('input[name=airtime_portal]').value='closed';
                }else{
                this.closest('.toggle').classList.add('active');
             document.querySelector('input[name=airtime_portal]').value='open';
                }
                " class="child"></div></div>
            </div>
            <input type="hidden" class="input" value="{{ $finance->vtu->airtime ?? 'active' }}" name="airtime_portal">
        
          
           </div>
            <label for="">Data Portal</label>
           <div class="w-full p-10 column g-5 bg-secondary-light br-10 border-1 border-color-bg">
            <div class="row space-between g-10 align-center w-full">
                <strong class="desc c-bg">Data Portal</strong>
                <div class="toggle {{ ($finance->vtu->data ?? 'active') == 'open' ? 'active' : '' }}"><div onclick="
                if(this.closest('.toggle').classList.contains('active')){
                this.closest('.toggle').classList.remove('active');
                document.querySelector('input[name=data_portal]').value='closed';
                }else{
                this.closest('.toggle').classList.add('active');
             document.querySelector('input[name=data_portal]').value='open';
                }
                " class="child"></div></div>
            </div>
            <input type="hidden" class="input" value="{{ $finance->vtu->data ?? 'active' }}" name="data_portal">
        
          
           </div>
            <input type="hidden" name="_token" value="{{ @csrf_token() }}" class="input">
            <label for="">Activities Wallet</label>
           <div class="w-full p-10 column g-5 bg-secondary-light br-10 border-1 border-color-bg">
            <div class="row space-between g-10 align-center w-full">
                <strong class="desc c-bg">Withdrawal Portal</strong>
                <div class="toggle {{ $finance->wallets->activities->portal == 'open' ? 'active' : '' }}"><div onclick="
                if(this.closest('.toggle').classList.contains('active')){
                this.closest('.toggle').classList.remove('active');
                document.querySelector('input[name=activities_withdrawal_portal]').value='closed';
                }else{
                this.closest('.toggle').classList.add('active');
             document.querySelector('input[name=activities_withdrawal_portal]').value='open';
                }
                " class="child"></div></div>
            </div>
            <input type="hidden" class="input" value="{{ $finance->wallets->activities->portal ?? 'active' }}" name="activities_withdrawal_portal">
            <label for="" class="text-dim m-top-5">Minimum Withdrawal</label>
            <div class="cont w-full h-50 br-10 border-1 border-color-silver bg-white">
                <input value="{{ $finance->wallets->activities->minimum ?? 0 }}" type="number" placeholder="E.g 500" name="activities_minimum_withdrawal"  class="inp required input h-full w-full no-border bg-transparent br-10">
            </div>
           </div>
            <label for="">Affiliate Wallet</label>
           <div class="w-full p-10 column g-5 bg-secondary-light br-10 border-1 border-color-bg">
            <div class="row space-between g-10 align-center w-full">
                <strong class="desc c-bg">Withdrawal Portal</strong>
                <div class="toggle {{ $finance->wallets->affiliate->portal == 'open' ? 'active' : '' }}"><div onclick="
                if(this.closest('.toggle').classList.contains('active')){
                this.closest('.toggle').classList.remove('active');
                 document.querySelector('input[name=affiliate_withdrawal_portal]').value='closed';
                }else{
                this.closest('.toggle').classList.add('active');
             document.querySelector('input[name=affiliate_withdrawal_portal]').value='open';
                }
                " class="child"></div></div>
            </div>
            <input type="hidden" value="{{ $finance->wallets->activities->portal ?? 'active' }}" class="input" name="affiliate_withdrawal_portal">
            <label for="" class="text-dim m-top-5">Minimum Withdrawal</label>
            <div class="cont w-full h-50 br-10 border-1 border-color-silver bg-white">
                <input value="{{ $finance->wallets->affiliate->minimum ?? 0 }}" type="number" placeholder="E.g 500" name="affiliate_minimum_withdrawal"  class="inp required input h-full w-full no-border bg-transparent br-10">
            </div>
           </div>
          
           
            <button class="post bg-secondary secondary-text"><span>Update Finance Settings</span></button>
        </form>
    </section>
@endsection