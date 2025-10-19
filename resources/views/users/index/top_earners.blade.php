@extends('layout.users.index')
@section('title')
    Top Earners
@endsection
@section('css')
<style class="css">
     .quick-link{
            position:relative;
            

        }
        .quick-link .group{
            z-index:20;
            position:relative;
        }
        .quick-link::before{
            content:'';
            position:absolute;
            left:10%;
            top:10%;
            width:40%;
            height:40%;
            background:var(--primary);
            border-radius:50%;
            filter:blur(30px);
            z-index:10;
        }
         .quick-link::after{
            content:'';
            position:absolute;
            right:10%;
            bottom:10%;
            width:20%;
            height:20%;
            background:var(--primary);
            border-radius:50%;
            filter:blur(20px);
            z-index:10;
        }
</style>
    
@endsection
@section('main')
    <section class="w-full column g-10 align-center">
        <strong class="desc font-weight-400 c-primary" style="font-family:titan one;font-size:1.5rem;">Top Earners</strong>
        @if ($top->isEmpty())
            @include('components.sections',[
                'null' => 'true',
                'text' => 'No Data Found'
            ])
        @else
         <div class="grid pc-grid-2 w-full g-10 place-center">
          
        @foreach ($top as $data)
             <div style="box-shadow: inset 0 0 50px var(--bg-light);backdrop-filter:blur(50px);" class="w-full br-20 p-20 column g-10 bg-transparent">
              <div class="row w-full align-center space-between">
                <img src="{{ asset('users/'.$data->user->photo.'') }}" alt="" class="h-70 w-70 circle">
             
                <strong style="font-weight:400;font-family:titan one;font-size:3rem;" class="no-select">{{ $loop->iteration }}</strong>
              </div>
                <div class="row space-between align-center g-2">
                        <span class="desc c-primary" style="font-family:luckiest guy">{{ ucfirst($data->user->username) }}</span>
                        
                    </div>
                    <strong style="font-size:2rem;font-family:luckiest guy;font-weight:400" class="c-primary">&#8358;{{ number_format($data->total,2) }}</strong>
                       
            </div>
        @endforeach
         </div>
            
        @endif
       </section>
@endsection