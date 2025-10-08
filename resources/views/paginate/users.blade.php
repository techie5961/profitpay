@isset($tasks)
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
@endisset
@isset($transactions)
     @foreach ($transactions as $data)
                <div class="w-full bg-secondary-dark p-10 br-5 row align-center g-10 space-between">
                    <div class="h-30 w-30 column svg justify-center bg-primary-transparent circle clip-circle">{!! $data->svg !!}</div>
               <div class="column g-2 m-right-auto">
                <strong class="font-1">{{ $data->type }}</strong>
                <span class="text-average text-dim">{{ $data->date }}</span>
               </div>
               <div class="column align-center g-2">
              @if ($data->class == 'credit')
               <strong class="font-1 c-green">+ &#8358;
                {{ number_format($data->amount,2) }}</strong>
                 @else
                  <strong class="font-1 c-red">- &#8358;
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
                <div class="w-full">
                  
                    {!! strlen($data->article) > 200 ? nl2br(substr($data->article,0,200)).'....' : nl2br($data->article) !!}
                    <span class="text-average row align-center g-2 m-left-auto text-light w-fit">
                       <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="CurrentColor" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24ZM74.08,197.5a64,64,0,0,1,107.84,0,87.83,87.83,0,0,1-107.84,0ZM96,120a32,32,0,1,1,32,32A32,32,0,0,1,96,120Zm97.76,66.41a79.66,79.66,0,0,0-36.06-28.75,48,48,0,1,0-59.4,0,79.66,79.66,0,0,0-36.06,28.75,88,88,0,1,1,131.52,0Z"></path></svg>

                        By {{ $data->user->username }}</span>
                </div>
                <div class="row w-full g-10 align-center space-between">
                    <div class="row no-select border-1 border-color-primary p-x-10 bg-primary-transparent br-10 p-5 align-center g-5">
                        <svg class="svg-{{ $data->id }} vote-svg {{ $data->voted > 0 ? 'voted' : '' }}" onclick="
                     if(this.classList.contains('voted')){
                      this.classList.remove('voted');
                     }else{
                      this.classList.add('voted');
                     }
                        GetRequest(event,'{{ url('users/get/vote/article?id='.$data->id.'') }}',this,MyFunc.Voted)
                        " xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="CurrentColor" viewBox="0 0 256 256"><path d="M234,80.12A24,24,0,0,0,216,72H160V56a40,40,0,0,0-40-40,8,8,0,0,0-7.16,4.42L75.06,96H32a16,16,0,0,0-16,16v88a16,16,0,0,0,16,16H204a24,24,0,0,0,23.82-21l12-96A24,24,0,0,0,234,80.12ZM32,112H72v88H32Z"></path></svg>
                        <span class="votes-{{ $data->id }} bold">{{ number_format($data->votes) }}</span>
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