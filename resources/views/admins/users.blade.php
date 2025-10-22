@extends('layout.admins.app')
@section('title')
    Users
@endsection
@section('main')
      <section class="grid pc-grid-2 w-full g-10 p-10">
         <div class="w-full row space-between g-10 br-10 bg-white box-shadow grid-full p-10">
        <div class="h-50 br-10 column justify-center w-50 bg-green-transparent c-green">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="CurrentColor" viewBox="0 0 256 256"><path d="M88,64a8,8,0,0,1,8-8H216a8,8,0,0,1,0,16H96A8,8,0,0,1,88,64Zm128,56H96a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16Zm0,64H96a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16ZM56,56H40a8,8,0,0,0,0,16H56a8,8,0,0,0,0-16Zm0,64H40a8,8,0,0,0,0,16H56a8,8,0,0,0,0-16Zm0,64H40a8,8,0,0,0,0,16H56a8,8,0,0,0,0-16Z"></path></svg>

        </div>
        <div class="column g-2 m-right-auto">
          @isset($vendors)
              <span>Total Vendors</span>
              @else
              <span>Total Users</span>
          @endisset
         
          <strong class="desc">{{ number_format($total) }}</strong>

        </div>
      </div>
      <div class="w-full row space-between g-10 br-10 bg-white box-shadow grid-full p-10">
        <div class="h-50 br-10 column justify-center w-50 bg-green-transparent c-green">
       <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="CurrentColor" viewBox="0 0 256 256"><path d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM72,48v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V80H48V48ZM208,208H48V96H208V208Zm-64-56a16,16,0,1,1-16-16A16,16,0,0,1,144,152Z"></path></svg>

        </div>
        <div class="column g-2 m-right-auto">
          @isset($vendors)
              <span>New Vendors(today)</span>
              @else
              <span>Today's Signups</span>
          @endisset
          <strong class="desc">{{ number_format($today) }}</strong>

        </div>
      </div>
       <div class="w-full row space-between g-10 br-10 bg-white box-shadow grid-full p-10">
        <div class="h-50 br-10 column justify-center w-50 bg-green-transparent c-green">
         <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="CurrentColor" viewBox="0 0 256 256"><path d="M80,120h96a8,8,0,0,0,8-8V64a8,8,0,0,0-8-8H80a8,8,0,0,0-8,8v48A8,8,0,0,0,80,120Zm8-48h80v32H88ZM200,24H56A16,16,0,0,0,40,40V216a16,16,0,0,0,16,16H200a16,16,0,0,0,16-16V40A16,16,0,0,0,200,24Zm0,192H56V40H200ZM100,148a12,12,0,1,1-12-12A12,12,0,0,1,100,148Zm40,0a12,12,0,1,1-12-12A12,12,0,0,1,140,148Zm40,0a12,12,0,1,1-12-12A12,12,0,0,1,180,148Zm-80,40a12,12,0,1,1-12-12A12,12,0,0,1,100,188Zm40,0a12,12,0,1,1-12-12A12,12,0,0,1,140,188Zm40,0a12,12,0,1,1-12-12A12,12,0,0,1,180,188Z"></path></svg>

        </div>
        <div class="column g-2 m-right-auto">
        @isset($vendors)
              <span>Active Vendors</span>
              @else
                <span>Active Users</span>
        @endisset
          <strong class="desc">{{ number_format($active) }}</strong>

        </div>
      </div>
      @if ($users->isEmpty())
          @include('components.sections',[
            'null' => 'true',
            'text' => 'No User Found'
          ])
      @else
      <div class="w-full pos-relative grid-full p-10 row align-center br-10 bg-white box-shadow">
        <div class="cont w-full h-50 row border-1 border-color-silver br-10 align-center">
          <div class="h-full perfect-square column justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000000" viewBox="0 0 256 256"><path d="M226.83,221.17l-52.7-52.7a84.1,84.1,0,1,0-5.66,5.66l52.7,52.7a4,4,0,0,0,5.66-5.66ZM36,112a76,76,0,1,1,76,76A76.08,76.08,0,0,1,36,112Z"></path></svg>

          </div>
          <input oninput="
       try{
          GetRequest(event,'{{ url('admins/search/users?q=') }}' + this.value,document.createElement('div'),MyFunc.Searched);

       }catch(error){
       alert(error.stack)
       }
          " placeholder="Search by username,email or full name..." type="search" class="w-full h-full no-border bg-transparent br-10">
        </div>
        <div class="w-full search-results display-none column low bg-white br-10 box-shadow pos-absolute top-full left-0 right-0">
        
           
        </div>
      </div>
      @isset($package)
         <div style="background: rgba(0,255,0,0.1);border:0.1px dashed green;" class="w-full br-5 p-5">
           <span style="font-family:titan one" class="font-100 desc c-green">
           {{ $package }} Registered Users
          </span>
         </div>
      @endisset
         @foreach ($users as $data)
             <div class="column w-full g-10 p-10 br-10 bg-white box-shadow">
                <div class="row w-full g-10 space-between">
                    <img src="{{ asset('users/'.$data->photo.'') }}" alt="" class="h-50 w-50 circle clip-circle">
                <div class="column g-2 m-right-auto">
                    <strong onclick="window.location.href='{{ url('admins/user?id='.$data->id.'') }}'" class="font-1 row align-center g-2 no-select pointer c-green u">{{ $data->username }}
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
                    <span>Uniqid/User ID:</span>
                    <strong class="font-1 c-green">{{ $data->uniqid }}</strong>
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
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000" viewBox="0 0 256 256"><path d="M223.68,66.15,135.68,18a15.88,15.88,0,0,0-15.36,0l-88,48.17a16,16,0,0,0-8.32,14v95.64a16,16,0,0,0,8.32,14l88,48.17a15.88,15.88,0,0,0,15.36,0l88-48.17a16,16,0,0,0,8.32-14V80.18A16,16,0,0,0,223.68,66.15ZM128,32l80.34,44-29.77,16.3-80.35-44ZM128,120,47.66,76l33.9-18.56,80.34,44ZM40,90l80,43.78v85.79L40,175.82Zm176,85.78h0l-80,43.79V133.82l32-17.51V152a8,8,0,0,0,16,0V107.55L216,90v85.77Z"></path></svg>
                     <span>Package:</span>
                    <strong class="font-1 c-green">{{ $data->package->name }}</strong>
                </div>
              
                  <div class="row align-center g-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000" viewBox="0 0 256 256"><path d="M117.25,157.92a60,60,0,1,0-66.5,0A95.83,95.83,0,0,0,3.53,195.63a8,8,0,1,0,13.4,8.74,80,80,0,0,1,134.14,0,8,8,0,0,0,13.4-8.74A95.83,95.83,0,0,0,117.25,157.92ZM40,108a44,44,0,1,1,44,44A44.05,44.05,0,0,1,40,108Zm210.14,98.7a8,8,0,0,1-11.07-2.33A79.83,79.83,0,0,0,172,168a8,8,0,0,1,0-16,44,44,0,1,0-16.34-84.87,8,8,0,1,1-5.94-14.85,60,60,0,0,1,55.53,105.64,95.83,95.83,0,0,1,47.22,37.71A8,8,0,0,1,250.14,206.7Z"></path></svg>
                     <span>Referred By:</span>
                    <strong {!! ($data->ref ?? '') == '' ? '' : 'onclick="window.location.href=&quot;'.url('admins/user?id='.($data->ref_id ?? '').'').'&quot;"' !!} class="font-1 c-green no-select {{ $data->ref == '' ? '' : 'u pointer' }}">{{ $data->ref == '' ? 'None' : $data->ref }}</strong>
                </div>
                  <div class="row align-center g-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000" viewBox="0 0 256 256"><path d="M117.25,157.92a60,60,0,1,0-66.5,0A95.83,95.83,0,0,0,3.53,195.63a8,8,0,1,0,13.4,8.74,80,80,0,0,1,134.14,0,8,8,0,0,0,13.4-8.74A95.83,95.83,0,0,0,117.25,157.92ZM40,108a44,44,0,1,1,44,44A44.05,44.05,0,0,1,40,108Zm210.14,98.7a8,8,0,0,1-11.07-2.33A79.83,79.83,0,0,0,172,168a8,8,0,0,1,0-16,44,44,0,1,0-16.34-84.87,8,8,0,1,1-5.94-14.85,60,60,0,0,1,55.53,105.64,95.83,95.83,0,0,1,47.22,37.71A8,8,0,0,1,250.14,206.7Z"></path></svg>
                     <span>Total Downlines:</span>
                    <strong class="font-1 c-green">{{ number_format($data->total_downlines) }}</strong>
                </div>
                <button onclick="window.location.href='{{ url('admins/user?id='.$data->id.'') }}'" class="btn-green-3d c-white m-left-auto clip-5 br-5">View More....</button>
                
             </div>
         @endforeach 
         @if ($users->hasMorePages())
             @include('components.sections',[
                'infinite_loading' => true,
                'page' => $users->currentPage() + 1

             ])
         @endif
      @endif

      </section>
@endsection
@section('js')
    <script class="js">
        InfiniteLoading();
        window.MyFunc = {
          Searched : function(response,event){
           if(response == ''){
             document.querySelector('.search-results').innerHTML=response;
            document.querySelector('.search-results').classList.add('display-none');
           }else{
             document.querySelector('.search-results').innerHTML=response;
            document.querySelector('.search-results').classList.remove('display-none');
           }
          }
        }
    </script>
@endsection