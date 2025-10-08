@extends('layout.admins.app')
@section('title')
    Users
@endsection
@section('main')
      <section class="grid w-full g-10 p-10">
       
     
       
     
        
             <div class="column w-full g-10 p-10 br-10 bg-white box-shadow">
                <div class="row w-full g-10 space-between">
                    <img src="{{ asset('users/'.$data->photo.'') }}" alt="" class="h-50 w-50 circle clip-circle">
                <div class="column g-2 m-right-auto">
                    <strong class="font-1 row align-center g-2 no-select pointer c-green">{{ $data->username }} 

                        @if ($data->type == 'vendor')
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#001beb" viewBox="0 0 256 256"><path d="M225.86,102.82c-3.77-3.94-7.67-8-9.14-11.57-1.36-3.27-1.44-8.69-1.52-13.94-.15-9.76-.31-20.82-8-28.51s-18.75-7.85-28.51-8c-5.25-.08-10.67-.16-13.94-1.52-3.56-1.47-7.63-5.37-11.57-9.14C146.28,23.51,138.44,16,128,16s-18.27,7.51-25.18,14.14c-3.94,3.77-8,7.67-11.57,9.14C88,40.64,82.56,40.72,77.31,40.8c-9.76.15-20.82.31-28.51,8S41,67.55,40.8,77.31c-.08,5.25-.16,10.67-1.52,13.94-1.47,3.56-5.37,7.63-9.14,11.57C23.51,109.72,16,117.56,16,128s7.51,18.27,14.14,25.18c3.77,3.94,7.67,8,9.14,11.57,1.36,3.27,1.44,8.69,1.52,13.94.15,9.76.31,20.82,8,28.51s18.75,7.85,28.51,8c5.25.08,10.67.16,13.94,1.52,3.56,1.47,7.63,5.37,11.57,9.14C109.72,232.49,117.56,240,128,240s18.27-7.51,25.18-14.14c3.94-3.77,8-7.67,11.57-9.14,3.27-1.36,8.69-1.44,13.94-1.52,9.76-.15,20.82-.31,28.51-8s7.85-18.75,8-28.51c.08-5.25.16-10.67,1.52-13.94,1.47-3.56,5.37-7.63,9.14-11.57C232.49,146.28,240,138.44,240,128S232.49,109.73,225.86,102.82Zm-52.2,6.84-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z"></path></svg>

                        @endif
                    </strong>
                <span class="row text-dim text-average g-2 align-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#708090" viewBox="0 0 256 256"><path d="M224,48H32a8,8,0,0,0-8,8V192a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A8,8,0,0,0,224,48ZM98.71,128,40,181.81V74.19Zm11.84,10.85,12,11.05a8,8,0,0,0,10.82,0l12-11.05,58,53.15H52.57ZM157.29,128,216,74.18V181.82Z"></path></svg>

                    {{ $data->email }}</span>
                     <span class="row text-dim text-average g-2 align-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#000000" viewBox="0 0 256 256"><path d="M232,136.66A104.12,104.12,0,1,1,119.34,24,8,8,0,0,1,120.66,40,88.12,88.12,0,1,0,216,135.34,8,8,0,0,1,232,136.66ZM120,72v56a8,8,0,0,0,8,8h56a8,8,0,0,0,0-16H136V72a8,8,0,0,0-16,0Zm40-24a12,12,0,1,0-12-12A12,12,0,0,0,160,48Zm36,24a12,12,0,1,0-12-12A12,12,0,0,0,196,72Zm24,36a12,12,0,1,0-12-12A12,12,0,0,0,220,108Z"></path></svg>
                        Registered 
                    {{ $data->frame }}</span>
                </div>
                <div class="status {{ $data->status == 'active' ? 'green' : 'red' }}">{{ $data->status }}</div>
                </div>
                <hr>
                <div class="grid w-full g-10 place-center grid-2">
                    <div class="column br-10 align-center g-5 bg-dim no-select w-full p-10">
                        <span>Activities Balance</span>
                        <strong class="desc c-green">&#8358;{{ number_format($data->activities_balance,2) }}</strong>
                    </div>
                     <div class="column br-10 align-center g-5 bg-dim no-select w-full p-10">
                        <span>Affiliate Balance</span>
                        <strong class="desc c-green">&#8358;{{ number_format($data->affiliate_balance,2) }}</strong>
                    </div>
                     <div class="column br-10 align-center g-5 bg-dim no-select w-full p-10">
                        <span>Deposit Balance</span>
                        <strong class="desc c-green">&#8358;{{ number_format($data->deposit_balance,2) }}</strong>
                    </div>
                     <div class="column br-10 align-center g-5 bg-dim no-select w-full p-10">
                        <span>Last Deposit</span>
                        <strong class="desc c-green">&#8358;{{ number_format($data->last_deposit,2) }}</strong>
                    </div>
                </div>
                <div class="row align-center g-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000" viewBox="0 0 256 256"><path d="M200,112a8,8,0,0,1-8,8H152a8,8,0,0,1,0-16h40A8,8,0,0,1,200,112Zm-8,24H152a8,8,0,0,0,0,16h40a8,8,0,0,0,0-16Zm40-80V200a16,16,0,0,1-16,16H40a16,16,0,0,1-16-16V56A16,16,0,0,1,40,40H216A16,16,0,0,1,232,56ZM216,200V56H40V200H216Zm-80.26-34a8,8,0,1,1-15.5,4c-2.63-10.26-13.06-18-24.25-18s-21.61,7.74-24.25,18a8,8,0,1,1-15.5-4,39.84,39.84,0,0,1,17.19-23.34,32,32,0,1,1,45.12,0A39.76,39.76,0,0,1,135.75,166ZM96,136a16,16,0,1,0-16-16A16,16,0,0,0,96,136Z"></path></svg>
                    <span>Full Name:</span>
                    <strong class="font-1 c-green">{{ $data->name }}</strong>
                </div>
                <div class="row align-center g-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000" viewBox="0 0 256 256"><path d="M253.66,90.34l-40-40a8,8,0,0,0-11.32,0L168,84.69,133.66,50.34a8,8,0,0,0-11.32,0L88,84.69,53.66,50.34a8,8,0,0,0-11.32,0l-40,40a8,8,0,0,0,0,11.32l40,40a8,8,0,0,0,11.32,0L88,107.31,116.69,136,82.34,170.34a8,8,0,0,0,0,11.32l40,40a8,8,0,0,0,11.32,0l40-40a8,8,0,0,0,0-11.32L139.31,136,168,107.31l34.34,34.35a8,8,0,0,0,11.32,0l40-40A8,8,0,0,0,253.66,90.34ZM48,124.69,19.31,96,48,67.31,76.69,96Zm80,80L99.31,176,128,147.31,156.69,176Zm0-80L99.31,96,128,67.31,156.69,96Zm80,0L179.31,96,208,67.31,236.69,96Z"></path></svg>
                    <span>Uniqid:</span>
                    <strong class="font-1 c-green">{{ $data->uniqid }}</strong>
                </div>
                 <div class="row align-center g-2">
                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000" viewBox="0 0 256 256"><path d="M200,40H56A16,16,0,0,0,40,56V200a16,16,0,0,0,16,16H200a16,16,0,0,0,16-16V56A16,16,0,0,0,200,40Zm0,80H136V56h64ZM120,56v64H56V56ZM56,136h64v64H56Zm144,64H136V136h64v64Z"></path></svg>
                     <span>User ID:</span>
                    <strong class="font-1 c-green">{{ $data->id }}</strong>
                </div>
                <div class="row align-center g-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000" viewBox="0 0 256 256"><path d="M176,16H80A24,24,0,0,0,56,40V216a24,24,0,0,0,24,24h96a24,24,0,0,0,24-24V40A24,24,0,0,0,176,16Zm8,200a8,8,0,0,1-8,8H80a8,8,0,0,1-8-8V40a8,8,0,0,1,8-8h96a8,8,0,0,1,8,8ZM140,60a12,12,0,1,1-12-12A12,12,0,0,1,140,60Z"></path></svg>
                    <span>Phone Number:</span>
                    <strong class="font-1 c-green">{{ $data->phone }}</strong>
                </div>
                <div class="row align-center g-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000" viewBox="0 0 256 256"><path d="M216,64H56a8,8,0,0,1,0-16H192a8,8,0,0,0,0-16H56A24,24,0,0,0,32,56V184a24,24,0,0,0,24,24H216a16,16,0,0,0,16-16V80A16,16,0,0,0,216,64Zm0,128H56a8,8,0,0,1-8-8V78.63A23.84,23.84,0,0,0,56,80H216Zm-48-60a12,12,0,1,1,12,12A12,12,0,0,1,168,132Z"></path></svg>
                     <span>Total Withdrawn:</span>
                    <strong class="font-1 c-green">&#8358;{{ number_format($data->total_withdrawn,2) }}</strong>
                </div>
                <div class="row align-center g-2">
                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000" viewBox="0 0 256 256"><path d="M224,48H32A16,16,0,0,0,16,64V192a16,16,0,0,0,16,16H224a16,16,0,0,0,16-16V64A16,16,0,0,0,224,48Zm0,16V88H32V64Zm0,128H32V104H224v88Zm-16-24a8,8,0,0,1-8,8H168a8,8,0,0,1,0-16h32A8,8,0,0,1,208,168Zm-64,0a8,8,0,0,1-8,8H120a8,8,0,0,1,0-16h16A8,8,0,0,1,144,168Z"></path></svg>
                     <span>Total Deposit:</span>
                    <strong class="font-1 c-green">&#8358;{{ number_format($data->total_deposit,2) }}</strong>
                </div>
                  <div class="row align-center g-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000" viewBox="0 0 256 256"><path d="M173.66,98.34a8,8,0,0,1,0,11.32l-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35A8,8,0,0,1,173.66,98.34ZM224,48V208a16,16,0,0,1-16,16H48a16,16,0,0,1-16-16V48A16,16,0,0,1,48,32H208A16,16,0,0,1,224,48ZM208,208V48H48V208H208Z"></path></svg>
                     <span>Total Tasks Submitted:</span>
                    <strong class="font-1 c-green">{{ number_format($data->total_tasks) }}</strong>
                </div>
                
                 <div class="row align-center g-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000" viewBox="0 0 256 256"><path d="M223.68,66.15,135.68,18a15.88,15.88,0,0,0-15.36,0l-88,48.17a16,16,0,0,0-8.32,14v95.64a16,16,0,0,0,8.32,14l88,48.17a15.88,15.88,0,0,0,15.36,0l88-48.17a16,16,0,0,0,8.32-14V80.18A16,16,0,0,0,223.68,66.15ZM128,32l80.34,44-29.77,16.3-80.35-44ZM128,120,47.66,76l33.9-18.56,80.34,44ZM40,90l80,43.78v85.79L40,175.82Zm176,85.78h0l-80,43.79V133.82l32-17.51V152a8,8,0,0,0,16,0V107.55L216,90v85.77Z"></path></svg>
                     <span>Package:</span>
                    <strong class="font-1 c-green">{{ $data->package->name }}</strong>
                </div>
              
                  <div class="row align-center g-2">
                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000" viewBox="0 0 256 256"><path d="M254.3,107.91,228.78,56.85a16,16,0,0,0-21.47-7.15L182.44,62.13,130.05,48.27a8.14,8.14,0,0,0-4.1,0L73.56,62.13,48.69,49.7a16,16,0,0,0-21.47,7.15L1.7,107.9a16,16,0,0,0,7.15,21.47l27,13.51,55.49,39.63a8.06,8.06,0,0,0,2.71,1.25l64,16a8,8,0,0,0,7.6-2.1l55.07-55.08,26.42-13.21a16,16,0,0,0,7.15-21.46Zm-54.89,33.37L165,113.72a8,8,0,0,0-10.68.61C136.51,132.27,116.66,130,104,122L147.24,80h31.81l27.21,54.41ZM41.53,64,62,74.22,36.43,125.27,16,115.06Zm116,119.13L99.42,168.61l-49.2-35.14,28-56L128,64.28l9.8,2.59-45,43.68-.08.09a16,16,0,0,0,2.72,24.81c20.56,13.13,45.37,11,64.91-5L188,152.66Zm62-57.87-25.52-51L214.47,64,240,115.06Zm-87.75,92.67a8,8,0,0,1-7.75,6.06,8.13,8.13,0,0,1-1.95-.24L80.41,213.33a7.89,7.89,0,0,1-2.71-1.25L51.35,193.26a8,8,0,0,1,9.3-13l25.11,17.94L126,208.24A8,8,0,0,1,131.82,217.94Z"></path></svg>
                      <span>Referred By:</span>
                    <strong {!! ($data->ref ?? '') == '' ? '' : 'onclick="window.location.href=&quot;'.url('admins/user?id='.($data->ref_id ?? '').'').'&quot;"' !!} class="font-1 c-green no-select {{ $data->ref == '' ? '' : 'u pointer' }}">{{ $data->ref == '' ? 'None' : $data->ref }}</strong>
                </div>
                  <div class="row align-center g-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000" viewBox="0 0 256 256"><path d="M117.25,157.92a60,60,0,1,0-66.5,0A95.83,95.83,0,0,0,3.53,195.63a8,8,0,1,0,13.4,8.74,80,80,0,0,1,134.14,0,8,8,0,0,0,13.4-8.74A95.83,95.83,0,0,0,117.25,157.92ZM40,108a44,44,0,1,1,44,44A44.05,44.05,0,0,1,40,108Zm210.14,98.7a8,8,0,0,1-11.07-2.33A79.83,79.83,0,0,0,172,168a8,8,0,0,1,0-16,44,44,0,1,0-16.34-84.87,8,8,0,1,1-5.94-14.85,60,60,0,0,1,55.53,105.64,95.83,95.83,0,0,1,47.22,37.71A8,8,0,0,1,250.14,206.7Z"></path></svg>
                     <span>Total Downlines:</span>
                    <strong class="font-1 c-green">{{ number_format($data->total_downlines) }}</strong>
                </div>
                <div class="row align-center g-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000" viewBox="0 0 256 256"><path d="M243.31,136,144,36.69A15.86,15.86,0,0,0,132.69,32H40a8,8,0,0,0-8,8v92.69A15.86,15.86,0,0,0,36.69,144L136,243.31a16,16,0,0,0,22.63,0l84.68-84.68a16,16,0,0,0,0-22.63Zm-96,96L48,132.69V48h84.69L232,147.31ZM96,84A12,12,0,1,1,84,72,12,12,0,0,1,96,84Z"></path></svg>
                  
                    <span>Coupon Used:</span>
                    <strong class="font-1 c-green">{{ $data->coupon ?? 'None' }}</strong>
                </div>
                 
                <div class="row align-center g-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000" viewBox="0 0 256 256"><path d="M24,104H48v64H32a8,8,0,0,0,0,16H224a8,8,0,0,0,0-16H208V104h24a8,8,0,0,0,4.19-14.81l-104-64a8,8,0,0,0-8.38,0l-104,64A8,8,0,0,0,24,104Zm40,0H96v64H64Zm80,0v64H112V104Zm48,64H160V104h32ZM128,41.39,203.74,88H52.26ZM248,208a8,8,0,0,1-8,8H16a8,8,0,0,1,0-16H240A8,8,0,0,1,248,208Z"></path></svg>
                      <span>Bank Details:</span>
                    @if (empty($data->bank))
                        <strong class="font-1 c-green">Not Yet Linked</strong>
                    @else
                        <strong class="font-1 c-green">{{ $data->bank->account_number ?? ''  }} | {{ $data->bank->bank_name ?? ''  }} | {{ $data->bank->account_name ?? ''  }}</strong>
                    @endif
                </div>
              <div class="w-full g-10 grid grid-3 place-center ">

                 @if ($data->status == 'active')
                      <button onclick="window.location.href='{{ url('admins/ban/user?id='.$data->id.'&status='.$data->status.'') }}'" class="btn-green-3d c-white clip-5 br-5 h-full w-full">Ban User</button>
              
                 @else
                      <button onclick="window.location.href='{{ url('admins/ban/user?id='.$data->id.'&status='.$data->status.'') }}'" class="btn-red-3d c-white clip-5 br-5 h-full w-full">UnBan User</button>
              
                 @endif
                  <button onclick="window.open('{{ url('admins/login/as/user?id='.$data->id.'') }}')" class="btn-blue-3d c-white clip-5 br-5 h-full w-full">Login as User</button>
               <button onclick="window.location.href='{{ url('admins/mark/as/vendor?id='.$data->id.'&type='.$data->type.'') }}'" class="clip-5 text-primary br-5 h-full w-full btn-primary-3d">{{ $data->type == 'user' ? 'Mark' : 'UnMark' }} as Vendor</button>
              
                </div>  
             </div>
             <form action="{{ url('admins/post/credit/user/process') }}" method="POST" onsubmit="PostRequest(event,this,MyFunc.reload)" class="w-full column bg-white br-10 box-shadow p-10 g-10">
                <input type="hidden" value="{{ @csrf_token() }}" class="input" name="_token">
                <input type="hidden" name="id" value="{{ $data->id }}" class="input">
                <div class="row font-1 c-green w-full g-10 align-center">
                   <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="CurrentColor" viewBox="0 0 256 256"><path d="M208,32H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM184,136H136v48a8,8,0,0,1-16,0V136H72a8,8,0,0,1,0-16h48V72a8,8,0,0,1,16,0v48h48a8,8,0,0,1,0,16Z"></path></svg>
                    Credit User
                </div>
                <hr>
               <div class="cont h-50 w-full br-10 p-10 bg-dim border-1 border-color-silver">
                <select name="wallet" class="inp required input w-full h-full border-none br-10 bg-transparent">
                    <option value="" selected disabled>Select Wallet...</option>
                 
                     <option value="activities_balance">Activities Wallet</option>
                      <option value="affiliate_balance">Affiliate Wallet</option>
                         <option value="deposit_balance">Deposit Wallet</option>
                </select>
               </div>
                <div class="cont h-50 w-full br-10 bg-dim border-1 border-color-silver">
              <input type="number" step="any" name="amount" placeholder="Enter Credit Amount" class="inp input required w-full h-full border-none bg-transparent br-10">
               </div>
               <button class="btn-green-3d c-white h-50 w-full clip-5 br-5">Credit User</button>
             </form>
              <form action="{{ url('admins/post/debit/user/process') }}" method="POST" onsubmit="PostRequest(event,this,MyFunc.reload)" class="w-full column bg-white br-10 box-shadow p-10 g-10">
                <input type="hidden" value="{{ @csrf_token() }}" class="input" name="_token">
                <input type="hidden" name="id" value="{{ $data->id }}" class="input">
                <div class="row font-1 c-red w-full g-10 align-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="CurrentColor" viewBox="0 0 256 256"><path d="M208,32H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM168,136H88a8,8,0,0,1,0-16h80a8,8,0,0,1,0,16Z"></path></svg>
                      Debit User
                </div>
                <hr>
               <div class="cont h-50 w-full br-10 p-10 bg-dim border-1 border-color-silver">
                <select name="wallet" class="inp required input w-full h-full border-none br-10 bg-transparent">
                    <option value="" selected disabled>Select Wallet...</option>
                 
                     <option value="activities_balance">Activities Wallet</option>
                      <option value="affiliate_balance">Affiliate Wallet</option>
                         <option value="deposit_balance">Deposit Wallet</option>
                </select>
               </div>
                <div class="cont h-50 w-full br-10 bg-dim border-1 border-color-silver">
              <input type="number" step="any" name="amount" placeholder="Enter Debit Amount" class="inp input required w-full h-full border-none bg-transparent br-10">
               </div>
               <button class="btn-red-3d c-white h-50 w-full clip-5 br-5">Debit User</button>
             </form>
  

      </section>
@endsection
@section('js')
    <script class="js">
       window.MyFunc = {
        reload : function(){
            window.location.reload();
        }
       }
    </script>
@endsection