@extends('layout.users.app')
@section('title')
    Read Articles
@endsection

@section('css')
    <style class="css">
        .vote-svg.voted{
            fill:var(--primary);
        }
    </style>
@endsection
@section('main')
   <section class="w-full p-10 g-10 grid pc-grid-2">
     @if ($articles->isEmpty())
        @include('components.sections',[
            'null' => true,
            'text' => 'No Article available at the moment,please check back later'
        ])
    @else
        @foreach ($articles as $data)
            <div class="w-full column br-10h border-1 border-color-primary p-10 g-10">
                <strong class="desc c-gold">{{ $data->topic->topic }}</strong>
                
                <hr class="bg-gold">
                <div class="w-full">
                  
                    {!! strlen($data->article) > 200 ? nl2br(substr($data->article,0,200)).'....' : nl2br($data->article) !!}
                    <span class="text-average row align-center g-2 m-left-auto text-light w-fit">
                       <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="CurrentColor" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24ZM74.08,197.5a64,64,0,0,1,107.84,0,87.83,87.83,0,0,1-107.84,0ZM96,120a32,32,0,1,1,32,32A32,32,0,0,1,96,120Zm97.76,66.41a79.66,79.66,0,0,0-36.06-28.75,48,48,0,1,0-59.4,0,79.66,79.66,0,0,0-36.06,28.75,88,88,0,1,1,131.52,0Z"></path></svg>

                        By {{ $data->user->username }}</span>
                </div>
                <div class="row w-full g-10 align-center space-between">
                    <div class="row no-select border-1 border-color-primary p-x-10 bg-primary-transparent br-10h p-5 align-center g-5">
                        <svg class="svg-{{ $data->id }} vote-svg {{ $data->voted > 0 ? 'voted' : '' }}" onclick="
                     if(this.classList.contains('voted')){
                      this.classList.remove('voted');
                     }else{
                      this.classList.add('voted');
                     }
                        GetRequest(event,'{{ url('users/get/vote/article?id='.$data->id.'') }}',this,MyFunc.Voted)
                        " xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="CurrentColor" viewBox="0 0 256 256"><path d="M234,80.12A24,24,0,0,0,216,72H160V56a40,40,0,0,0-40-40,8,8,0,0,0-7.16,4.42L75.06,96H32a16,16,0,0,0-16,16v88a16,16,0,0,0,16,16H204a24,24,0,0,0,23.82-21l12-96A24,24,0,0,0,234,80.12ZM32,112H72v88H32Z"></path></svg>
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
    @endif
   </section>
@endsection
@section('js')
    <script class="js">
        InfiniteLoading();
        window.MyFunc ={
            Voted : function(response){
               let data=JSON.parse(response);
               if(data.status == 'success'){
                document.querySelector(data.class).innerHTML=data.message;
                if(data.type == 'unvoted'){
                    document.querySelector(data.svg_class).classList.remove('voted');
                }
               }
            }
        }
    </script>
@endsection