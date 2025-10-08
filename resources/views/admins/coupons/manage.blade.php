@extends('layout.admins.app')
@section('title')
    Manage Coupons
@endsection
@section('main')
    <section class="grid pc-grid-2 w-full g-10 p-10">
      <div class="w-full row space-between g-10 br-10 bg-white box-shadow grid-full p-10">
        <div class="h-50 br-10 column justify-center w-50 bg-green-transparent c-green">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="CurrentColor" viewBox="0 0 256 256"><path d="M88,64a8,8,0,0,1,8-8H216a8,8,0,0,1,0,16H96A8,8,0,0,1,88,64Zm128,56H96a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16Zm0,64H96a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16ZM56,56H40a8,8,0,0,0,0,16H56a8,8,0,0,0,0-16Zm0,64H40a8,8,0,0,0,0,16H56a8,8,0,0,0,0-16Zm0,64H40a8,8,0,0,0,0,16H56a8,8,0,0,0,0-16Z"></path></svg>

        </div>
        <div class="column g-2 m-right-auto">
          <span>Total Coupon Codes</span>
          <strong class="desc">{{ number_format($total) }}</strong>

        </div>
      </div>
        <div class="w-full row space-between g-10 br-10 bg-white box-shadow grid-full p-10">
        <div class="h-50 br-10 column justify-center w-50 bg-green-transparent c-green">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="CurrentColor" viewBox="0 0 256 256"><path d="M215.79,118.17a8,8,0,0,0-5-5.66L153.18,90.9l14.66-73.33a8,8,0,0,0-13.69-7l-112,120a8,8,0,0,0,3,13l57.63,21.61L88.16,238.43a8,8,0,0,0,13.69,7l112-120A8,8,0,0,0,215.79,118.17ZM109.37,214l10.47-52.38a8,8,0,0,0-5-9.06L62,132.71l84.62-90.66L136.16,94.43a8,8,0,0,0,5,9.06l52.8,19.8Z"></path></svg>

        </div>
        <div class="column g-2 m-right-auto">
          <span>Total Active Coupons</span>
          <strong class="desc">{{ number_format($active) }}</strong>

        </div>
      </div>
        <div class="w-full row space-between g-10 br-10 bg-white box-shadow grid-full p-10">
        <div class="h-50 br-10 column justify-center w-50 bg-green-transparent c-green">
         <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="CurrentColor" viewBox="0 0 256 256"><path d="M53.92,34.62A8,8,0,1,0,42.08,45.38L81.33,88.56l-39.18,42a8,8,0,0,0,3,13l57.63,21.61L88.16,238.43a8,8,0,0,0,13.69,7l61.86-66.28,38.37,42.2a8,8,0,1,0,11.84-10.76ZM109.37,214l10.47-52.38a8,8,0,0,0-5-9.06L62,132.71l30.12-32.27,60.78,66.86ZM108.66,71a8,8,0,0,1-.39-11.31l45.88-49.16a8,8,0,0,1,13.69,7L153.18,90.9l57.63,21.61a8,8,0,0,1,3,12.95l-22.3,23.89a8,8,0,0,1-11.7-10.91L194,123.29l-52.8-19.8a8,8,0,0,1-5-9.06l10.47-52.38L120,70.62A8,8,0,0,1,108.66,71Z"></path></svg>

        </div>
        <div class="column g-2 m-right-auto">
          <span>Total Redeemed Coupons</span>
          <strong class="desc">{{ number_format($redeemed) }}</strong>

        </div>
      </div>
        @if ($coupons->isEmpty())
            @include('components.sections',[
                'null' => true,
                'text' => 'No coupons found'
            ])
        @else
        <strong class="desc grid-full c-bg-secondary">Coupon Codes</strong>
          @foreach ($coupons as $data)
              <div class="bg-white w-full br-10 box-shadow p-10 column g-5">
                <div class="row w-full space-between g-10">
                    <div class="column g-2">
                        <strong class="font-1 row align-center g-2 c-green">{{ $data->code ?? '' }}
                        <svg onclick="copy('{{ $data->code ?? '' }}')" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" viewBox="0 0 256 256"><path d="M216,32H88a8,8,0,0,0-8,8V80H40a8,8,0,0,0-8,8V216a8,8,0,0,0,8,8H168a8,8,0,0,0,8-8V176h40a8,8,0,0,0,8-8V40A8,8,0,0,0,216,32Zm-8,128H176V88a8,8,0,0,0-8-8H96V48H208Z"></path></svg>

                    </strong>
                    <span class="text-small row align-center g-2 text-dim">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#708090" viewBox="0 0 256 256"><path d="M232,136.66A104.12,104.12,0,1,1,119.34,24,8,8,0,0,1,120.66,40,88.12,88.12,0,1,0,216,135.34,8,8,0,0,1,232,136.66ZM120,72v56a8,8,0,0,0,8,8h56a8,8,0,0,0,0-16H136V72a8,8,0,0,0-16,0Zm40-24a12,12,0,1,0-12-12A12,12,0,0,0,160,48Zm36,24a12,12,0,1,0-12-12A12,12,0,0,0,196,72Zm24,36a12,12,0,1,0-12-12A12,12,0,0,0,220,108Z"></path></svg>

                        Created {{ $data->frame ?? '' }}</span>
                    </div>
                    <div class="status {{ ($data->status ?? '') == 'active' ? 'gold' : 'green' }}">{{ $data->status ?? '' }}</div>

                </div>
                <hr>
                <div class="row w-full g-2 align-center">
                   <div class="row align-center g-2">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#4caf50" viewBox="0 0 256 256"><path d="M92,140a12,12,0,1,1,12-12A12,12,0,0,1,92,140Zm72-24a12,12,0,1,0,12,12A12,12,0,0,0,164,116Zm-12.27,45.23a45,45,0,0,1-47.46,0,8,8,0,0,0-8.54,13.54,61,61,0,0,0,64.54,0,8,8,0,0,0-8.54-13.54ZM232,128A104,104,0,1,1,128,24,104.11,104.11,0,0,1,232,128Zm-16,0a88.11,88.11,0,0,0-84.09-87.91C120.32,56.38,120,71.88,120,72a8,8,0,0,0,16,0,8,8,0,0,1,16,0,24,24,0,0,1-48,0c0-.73.13-14.3,8.46-30.63A88,88,0,1,0,216,128Z"></path></svg>
                   <span>Vendor:</span> 
                   <a class="no-u c-green bold" {{ ($data->vendor_id ?? '') == 0 ? 'href="'.url('admins/user?id='.$data->id.'').'"' : '' }}>{{ $data->vendor->username ?? 'Non vendor' }}</a>
                   </div>
                </div>
                 <div class="row w-full g-2 align-center">
                   <div class="row align-center g-2">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#4caf50" viewBox="0 0 256 256"><path d="M224,64H176V56a24,24,0,0,0-24-24H104A24,24,0,0,0,80,56v8H32A16,16,0,0,0,16,80V192a16,16,0,0,0,16,16H224a16,16,0,0,0,16-16V80A16,16,0,0,0,224,64ZM96,56a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8v8H96ZM224,80v32H192v-8a8,8,0,0,0-16,0v8H80v-8a8,8,0,0,0-16,0v8H32V80Zm0,112H32V128H64v8a8,8,0,0,0,16,0v-8h96v8a8,8,0,0,0,16,0v-8h32v64Z"></path></svg>
                       <span>Package:</span> 
                   <strong>{{ $data->package->name ?? '' }}</strong>
                   </div>
                </div>
              
                <button onclick="
                let data=`
                <svg xmlns='http://www.w3.org/2000/svg' width='50' height='50' fill='red' viewBox='0 0 256 256'><path d='M216,48H176V40a24,24,0,0,0-24-24H104A24,24,0,0,0,80,40v8H40a8,8,0,0,0,0,16h8V208a16,16,0,0,0,16,16H192a16,16,0,0,0,16-16V64h8a8,8,0,0,0,0-16ZM112,168a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Zm48,0a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Zm0-120H96V40a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8Z'></path></svg>

                Are you sure you want to trash this code? this action cannot be undone.
                  <button onclick='window.location.href=&quot;{{ url('admins/get/coupon/delete?id='.$data->id.'') }}&quot;' class='btn-red-3d m-top-10 w-full clip-5 br-'>Yes! Trash Code</button>
                `;
                PopUp(data)" class="btn-red-3d m-left-auto br-5 clip-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" viewBox="0 0 256 256"><path d="M216,48H176V40a24,24,0,0,0-24-24H104A24,24,0,0,0,80,40v8H40a8,8,0,0,0,0,16h8V208a16,16,0,0,0,16,16H192a16,16,0,0,0,16-16V64h8a8,8,0,0,0,0-16ZM112,168a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Zm48,0a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Zm0-120H96V40a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8Z"></path></svg>

                    Trash</button>
              </div>
          @endforeach  
         @if ($coupons->hasMorePages())
             @include('components.sections',[
              'infinite_loading' => true,
              'page' => $coupons->currentPage() + 1
             ])
         @endif
        @endif
    </section>
@endsection
@section('js')
    <script class="js">
      InfiniteLoading();
    </script>
@endsection