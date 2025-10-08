@extends('layout.users.app')
@section('title')
    Tasks
@endsection
@section('main')
    <section class="grid w-full pc-grid-2 g-10 p-10">
        @if ($tasks->isEmpty())
            @include('components.sections',[
                'null' => true,
                'text' => 'No task available at the moment,check back later'
            ])
        @else
        <strong class="desc c-primary grid-full">Available Tasks</strong>
            @foreach ($tasks as $data)
            <div class="column w-full no-select g-10 p-10 br-10 bg-secondary-dark box-shadow">
                <div class="row w-full align-center space-between">
                    <strong>{{ $data->title ?? 'null' }}</strong>
                    <div class="p-y-5 p-x-10 c-black bg-gold br-1000 bold">&#8358;{{ number_format($data->reward ?? 0,2) }}</div>
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
        @endif
    </section>
@endsection
@section('js')
    <script class="js">
        InfiniteLoading();
        window.MyFunc = {
            Completed : function(response,event){
                let data=JSON.parse(response);
                CreateNotify(data.status,data.message);
                if(data.status == 'success'){
                    spa(event,'{{ url('users/tasks') }}');
                }
            }
        }
    </script>
@endsection