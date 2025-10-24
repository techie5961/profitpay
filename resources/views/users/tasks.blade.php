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
            <div class="column  w-full no-select g-10 p-10 br-10 bg-secondary-dark box-shadow">
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
                this.closest('.row').querySelector('.claim-btn').classList.remove('display-none');
                " class="btn-blue br-5 clip-5"><span>Perform task</span></button>
                <button onclick='
    let data=` <form action="{{ url("users/post/claim/task/reward/process") }}" onsubmit="PostRequest(event,this,MyFunc.Completed)" class="w-full align-center column g-5">
            <label style="border:0.1px dashed #4caf50;color:#4caf50;background:rgba(0,255,0,0.1)" class="w-200 cont pointer clip-20 no-select column p-10 justify-center h-200 no-shrink br-20">
                <div class="column summary p-10 align-center text-center g-5">
                    <svg width="50" height="50" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path d="M6.16934 6.30897C8.24667 4.23034 11.6145 4.23034 13.6918 6.30897C15.7694 8.38785 15.7694 11.7586 13.6918 13.8375L12.2612 15.2689C11.9684 15.5619 11.9686 16.0368 12.2616 16.3296C12.5545 16.6224 13.0294 16.6222 13.3222 16.3292L14.7528 14.8978C17.4157 12.2332 17.4157 7.91323 14.7528 5.24864C12.0896 2.58379 7.77154 2.58379 5.10835 5.24864L2.2472 8.11157C-0.415733 10.7762 -0.415733 15.0961 2.2472 17.7607C3.48184 18.9961 5.07401 19.6593 6.69015 19.7488C7.10372 19.7718 7.45758 19.4551 7.48051 19.0415C7.50343 18.6279 7.18674 18.2741 6.77316 18.2512C5.51156 18.1812 4.27192 17.6647 3.30819 16.7004C1.2306 14.6215 1.2306 11.2508 3.30819 9.1719L6.16934 6.30897Z" fill="CurrentColor"></path>
<path d="M17.3099 4.25115C16.8963 4.22822 16.5424 4.54491 16.5195 4.95849C16.4966 5.37207 16.8133 5.72593 17.2268 5.74885C18.4884 5.81878 19.7281 6.33528 20.6918 7.29961C22.7694 9.37849 22.7694 12.7492 20.6918 14.8281L17.8307 17.691C15.7533 19.7697 12.3855 19.7697 10.3082 17.691C8.2306 15.6122 8.2306 12.2414 10.3082 10.1626L11.7388 8.73108C12.0316 8.4381 12.0314 7.96322 11.7384 7.67042C11.4454 7.37762 10.9706 7.37777 10.6778 7.67075L9.2472 9.10222C6.58427 11.7668 6.58427 16.0868 9.2472 18.7514C11.9104 21.4162 16.2285 21.4162 18.8916 18.7514L21.7528 15.8884C24.4157 13.2238 24.4157 8.90387 21.7528 6.23928C20.5182 5.00387 18.926 4.34073 17.3099 4.25115Z" fill="CurrentColor"></path>
</svg>

                    <span>ATTACH SCREENSHOT OF TASK PERFORMED</span>
                    <span>JPG,PNG,JPEG MAX:2MB</span>
                </div>
                <img src="" alt="" class="h-full display-none br-10">
                    <input onchange="MyFunc.Preview(this)" type="file" accept="image/*" class="display-none inp input required">
            </label>
          <input type="text" value="{{ $data->id }}" name="id" class="inp input display-none">
            <input type="text" value="{{ @csrf_token() }}" name="_token" class="inp input display-none">

            <label class="row align-center g-2">
                <input required type="checkbox" style="transform:scale(0.7)">
                I have performed the task correctly</label>
                <span class="c-red bold text-average">
                    ⚠️ Warning
Submitting without properly completing the task will result in a permanent ban with no appeal.
All proofs are verified by admins — fake or incomplete submissions are not tolerated.
                </span>
            <button class="btn-green-3d c-white w-full clip-5 br-5">DONE</button>
        </form>`;
        PopUp(data)
                ' class="btn-green claim-btn display-none br-5 clip-5"><span>Claim Reward</span></button>
              {{-- <button onclick="GetRequest(event,'{{ url('users/get/claim/task/reward?id='.$data->id.'') }}',this,MyFunc.Completed)" class="btn-green claim-btn display-none br-5 clip-5"><span>Claim Reward</span></button> --}}
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
                    HidePopUp();
                    spa(event,'{{ url('users/tasks') }}');
                }
            },
            Preview : function(element){
                
                    if(element.files[0]){
                    
                   element.closest(".cont").querySelector("img").src=window.URL.createObjectURL(element.files[0]);
                     element.closest(".cont").querySelector("img").classList.remove("display-none");
                     element.closest(".cont").querySelector(".summary").classList.add("display-none");
                   
                    }else{
                    element.closest(".cont").querySelector("img").src="";
                     element.closest(".cont").querySelector("img").classList.add("display-none");
                     element.closest(".cont").querySelector(".summary").classList.remove("display-none");
                    }
            }
        }
    </script>
@endsection