@extends('layout.admins.app')
@section('title')
    Manage Packages
@endsection
@section('main')
    <section class="grid pc-grid-2 w-full g-10 p-10">
      @if ($pkg->isEmpty())
          @include('component.sections',[
            'text' => 'No package found',
            'null' => true
          ])
      @else
          @foreach ($pkg as $data)
               <div class="w-full bg-white p-10 br-10 box-shadow column g-5">
      <div class="row w-full align-center space-between g-10">
          <strong class="desc c-green">{{ $data->name }}</strong>
          <div class="row align-center g-2">
            <button onclick="
                        let data=`
                       <svg xmlns='http://www.w3.org/2000/svg' width='50' height='50' fill='red' viewBox='0 0 256 256'><path d='M216,48H176V40a24,24,0,0,0-24-24H104A24,24,0,0,0,80,40v8H40a8,8,0,0,0,0,16h8V208a16,16,0,0,0,16,16H192a16,16,0,0,0,16-16V64h8a8,8,0,0,0,0-16ZM96,40a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8v8H96Zm96,168H64V64H192ZM112,104v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Zm48,0v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Z'></path></svg> 
                        <span class='text-center'>Are you sure you want to delete this package? This action cannot be undone.</span>
                    <button onclick='window.location.href=&quot;{{ url('admins/get/package/delete?id='.$data->id.'') }}&quot;' class='btn-red-3d w-full clip-5 g-5 br-5'>Yes! Delete Package</button>
                        `;
                        PopUp(data);
                        " class="btn-red-3d c-white">Delete</button>
            <button onclick="window.location.href='{{ url('admins/package/edit?id='.$data->id.'') }}'" class="btn-green-3d c-white">Edit</button>
          </div>
      </div>
        <hr>
        <div class="row w-full space-between g-10 align-center">
          <div class="column g-2 align-center">
            <div class="row align-center g-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#6c5ce6" viewBox="0 0 256 256"><path d="M224,48H32A16,16,0,0,0,16,64V192a16,16,0,0,0,16,16H224a16,16,0,0,0,16-16V64A16,16,0,0,0,224,48Zm0,16V88H32V64Zm0,128H32V104H224v88Zm-16-24a8,8,0,0,1-8,8H168a8,8,0,0,1,0-16h32A8,8,0,0,1,208,168Zm-64,0a8,8,0,0,1-8,8H120a8,8,0,0,1,0-16h16A8,8,0,0,1,144,168Z"></path></svg>
              Registration Fee
            </div>
                      <strong class="font-1 c-green">&#8358;{{ number_format($data->cost,2) }}</strong>
           </div>
            <div class="column g-2 align-center">
            <div class="row align-center g-2">
             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#6c5ce6" viewBox="0 0 256 256"><path d="M246,98.73l-56-64A8,8,0,0,0,184,32H72a8,8,0,0,0-6,2.73l-56,64a8,8,0,0,0,.17,10.73l112,120a8,8,0,0,0,11.7,0l112-120A8,8,0,0,0,246,98.73ZM222.37,96H180L144,48h36.37ZM74.58,112l30.13,75.33L34.41,112Zm89.6,0L128,202.46,91.82,112ZM96,96l32-42.67L160,96Zm85.42,16h40.17l-70.3,75.33ZM75.63,48H112L76,96H33.63Z"></path></svg>
               Cashback
            </div>
                      @isset($data->cashback)
                          <strong class="font-1 c-green">&#8358;{{ number_format($data->cashback,2) }}</strong>
                          @else
                        <strong class="font-1 c-green">NULL</strong>
                      @endisset
           </div>

        </div>
         <div class="row m-top-5 w-full space-between g-10 align-center">
          <div class="column g-2 align-center">
            <div class="row align-center g-2">
             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#6c5ce6" viewBox="0 0 256 256"><path d="M244.8,150.4a8,8,0,0,1-11.2-1.6A51.6,51.6,0,0,0,192,128a8,8,0,0,1-7.37-4.89,8,8,0,0,1,0-6.22A8,8,0,0,1,192,112a24,24,0,1,0-23.24-30,8,8,0,1,1-15.5-4A40,40,0,1,1,219,117.51a67.94,67.94,0,0,1,27.43,21.68A8,8,0,0,1,244.8,150.4ZM190.92,212a8,8,0,1,1-13.84,8,57,57,0,0,0-98.16,0,8,8,0,1,1-13.84-8,72.06,72.06,0,0,1,33.74-29.92,48,48,0,1,1,58.36,0A72.06,72.06,0,0,1,190.92,212ZM128,176a32,32,0,1,0-32-32A32,32,0,0,0,128,176ZM72,120a8,8,0,0,0-8-8A24,24,0,1,1,87.24,82a8,8,0,1,0,15.5-4A40,40,0,1,0,37,117.51,67.94,67.94,0,0,0,9.6,139.19a8,8,0,1,0,12.8,9.61A51.6,51.6,0,0,1,64,128,8,8,0,0,0,72,120Z"></path></svg>
               SubOrdinate
            </div>
                   @isset($data->subordinate)
                          <strong class="font-1 c-green">&#8358;{{ number_format($data->subordinate,2) }}</strong>
                          @else
                             <strong class="font-1 c-green">NULL</strong>
                   @endisset
           </div>
            <div class="column g-2 align-center">
            <div class="row align-center g-2">
             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#6c5ce6" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216ZM140,80v96a8,8,0,0,1-16,0V95l-11.56,7.71a8,8,0,1,1-8.88-13.32l24-16A8,8,0,0,1,140,80Z"></path></svg>
               First Indirect
            </div>
                     @isset($data->first_indirect)
                          <strong class="font-1 c-green">&#8358;{{ number_format($data->first_indirect,2) }}</strong>
                          @else
                           <strong class="font-1 c-green">NULL</strong>
                     @endisset
           </div>

        </div>
         <div class="row m-top-5 w-full space-between g-10 align-center">
          <div class="column g-2 align-center">
            <div class="row align-center g-2">
             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#6c5ce6" viewBox="0 0 256 256"><path d="M128,24C74.17,24,32,48.6,32,80v96c0,31.4,42.17,56,96,56s96-24.6,96-56V80C224,48.6,181.83,24,128,24Zm80,104c0,9.62-7.88,19.43-21.61,26.92C170.93,163.35,150.19,168,128,168s-42.93-4.65-58.39-13.08C55.88,147.43,48,137.62,48,128V111.36c17.06,15,46.23,24.64,80,24.64s62.94-9.68,80-24.64ZM69.61,53.08C85.07,44.65,105.81,40,128,40s42.93,4.65,58.39,13.08C200.12,60.57,208,70.38,208,80s-7.88,19.43-21.61,26.92C170.93,115.35,150.19,120,128,120s-42.93-4.65-58.39-13.08C55.88,99.43,48,89.62,48,80S55.88,60.57,69.61,53.08ZM186.39,202.92C170.93,211.35,150.19,216,128,216s-42.93-4.65-58.39-13.08C55.88,195.43,48,185.62,48,176V159.36c17.06,15,46.23,24.64,80,24.64s62.94-9.68,80-24.64V176C208,185.62,200.12,195.43,186.39,202.92Z"></path></svg>
                Free Data
            </div>
                     @isset($data->free_data)
                          <strong class="font-1 c-green">{{ number_format($data->free_data) }}GB</strong>
                          @else
                           <strong class="font-1 c-green">NULL</strong>
                     @endisset
           </div>
            <div class="column g-2 align-center">
            <div class="row align-center g-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#6c5ce6" viewBox="0 0 256 256"><path d="M216,40H40A16,16,0,0,0,24,56V200a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40Zm0,160H40V56H216V200ZM184,96a8,8,0,0,1-8,8H80a8,8,0,0,1,0-16h96A8,8,0,0,1,184,96Zm0,32a8,8,0,0,1-8,8H80a8,8,0,0,1,0-16h96A8,8,0,0,1,184,128Zm0,32a8,8,0,0,1-8,8H80a8,8,0,0,1,0-16h96A8,8,0,0,1,184,160Z"></path></svg>
              Article Writing
            </div>
                      @isset($data->article_writing)
                          <strong class="font-1 c-green">&#8358;{{ number_format($data->article_writing,2) }}</strong>
                          @else
                          <strong class="font-1 c-green">NULL</strong>
                      @endisset
           </div>

        </div>
         <div class="row m-top-5 w-full space-between g-10 align-center">
          <div class="column g-2 align-center">
            <div class="row align-center g-2">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#6c5ce6" viewBox="0 0 256 256"><path d="M168,132.69,214.08,115l.33-.13A16,16,0,0,0,213,85.07L52.92,32.8A15.95,15.95,0,0,0,32.8,52.92L85.07,213a15.82,15.82,0,0,0,14.41,11l.78,0a15.84,15.84,0,0,0,14.61-9.59l.13-.33L132.69,168,184,219.31a16,16,0,0,0,22.63,0l12.68-12.68a16,16,0,0,0,0-22.63ZM195.31,208,144,156.69a16,16,0,0,0-26,4.93c0,.11-.09.22-.13.32l-17.65,46L48,48l159.85,52.2-45.95,17.64-.32.13a16,16,0,0,0-4.93,26h0L208,195.31Z"></path></svg>
    Earn per Click
            </div>
                      @isset($data->earning_per_click)
                          <strong class="font-1 c-green">&#8358;{{ number_format($data->earning_per_click,2) }}</strong>
                          @else
                          <strong class="font-1 c-green">NULL</strong>
                      @endisset
           </div>
            <div class="column g-2 align-center">
            <div class="row align-center g-2">
           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#6c5ce6" viewBox="0 0 256 256"><path d="M224,72a48.05,48.05,0,0,1-48-48,8,8,0,0,0-8-8H128a8,8,0,0,0-8,8V156a20,20,0,1,1-28.57-18.08A8,8,0,0,0,96,130.69V88a8,8,0,0,0-9.4-7.88C50.91,86.48,24,119.1,24,156a76,76,0,0,0,152,0V116.29A103.25,103.25,0,0,0,224,128a8,8,0,0,0,8-8V80A8,8,0,0,0,224,72Zm-8,39.64a87.19,87.19,0,0,1-43.33-16.15A8,8,0,0,0,160,102v54a60,60,0,0,1-120,0c0-25.9,16.64-49.13,40-57.6v27.67A36,36,0,1,0,136,156V32h24.5A64.14,64.14,0,0,0,216,87.5Z"></path></svg>
               Tiktok Monitizing
            </div>
                      @isset($data->tiktok_monitizing)
                          <strong class="font-1 c-green">&#8358;{{ number_format($data->tiktok_monitizing,2) }}</strong>
                          @else
                          
                          <strong class="font-1 c-green">NULL</strong>
                      @endisset
           </div>

        </div>
        <div class="row m-top-5 w-full space-between g-10 align-center">
          <div class="column g-2 align-center">
            <div class="row align-center g-2">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#6c5ce6" viewBox="0 0 256 256"><path d="M192,32H64A32,32,0,0,0,32,64V192a32,32,0,0,0,32,32H192a32,32,0,0,0,32-32V64A32,32,0,0,0,192,32Zm16,160a16,16,0,0,1-16,16H64a16,16,0,0,1-16-16V64A16,16,0,0,1,64,48H192a16,16,0,0,1,16,16ZM104,92A12,12,0,1,1,92,80,12,12,0,0,1,104,92Zm72,0a12,12,0,1,1-12-12A12,12,0,0,1,176,92Zm-72,72a12,12,0,1,1-12-12A12,12,0,0,1,104,164Zm36-36a12,12,0,1,1-12-12A12,12,0,0,1,140,128Zm36,36a12,12,0,1,1-12-12A12,12,0,0,1,176,164Z"></path></svg>
  Casino Games
            </div>
                      @isset($data->casino_game)
                          <strong class="font-1 c-green">&#8358;{{ number_format($data->casino_game,2) }}</strong>
                          @else
                          <strong class="font-1 c-green">NULL</strong>
                      @endisset
           </div>
            <div class="column g-2 align-center">
            <div class="row align-center g-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#6c5ce6" viewBox="0 0 256 256"><path d="M192,24H64A16,16,0,0,0,48,40V216a16,16,0,0,0,16,16H192a16,16,0,0,0,16-16V40A16,16,0,0,0,192,24Zm0,192H64V40H192ZM116,76a12,12,0,1,1,12,12A12,12,0,0,1,116,76Zm12,116a40,40,0,1,0-40-40A40,40,0,0,0,128,192Zm0-64a24,24,0,1,1-24,24A24,24,0,0,1,128,128Z"></path></svg>
              Daily Adverts
            </div>
                     @isset($data->daily_advert)
                          <strong class="font-1 c-green">&#8358;{{ number_format($data->daily_advert,2) }}</strong>
                          @else
                           <strong class="font-1 c-green">NULL</strong>
                     @endisset
           </div>

        </div>
       </div>
          @endforeach
          @if ($pkg->hasMorePages())
              @include('components.sections',[
                'infinite_loading' => true,
                'page' => $pkg->currentPage() + 1
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