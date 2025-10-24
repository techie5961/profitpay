@extends('layout.users.app')
@section('title')
    Team
@endsection
@section('main')
    <section class="w-full grid pc-grid-2 g-5 p-10">
        @if ($team->isEmpty())
            @include('components.sections',[
                'null' => true,
                'text' => 'No Referrals Found'
            ])
        @else
            @foreach ($team as $data)
                <div class="w-full br-10 p-10 bg-secondary-dark column g-10">
                    <div class="row align-center w-full g-10 space-between">
                        <img src="{{ asset('users/'.$data->photo.'') }}" alt="User Photo" class="circle clip-circle h-50 w-50">
                        <div class="column g-5 m-right-auto">
                            <strong class="font-1 c-primary bold no-select">{{ $data->username }}</strong>
                            <span class="row text-dim text-light text-average align-cjenter g-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#708090" viewBox="0 0 256 256"><path d="M232,136.66A104.12,104.12,0,1,1,119.34,24,8,8,0,0,1,120.66,40,88.12,88.12,0,1,0,216,135.34,8,8,0,0,1,232,136.66ZM120,72v56a8,8,0,0,0,8,8h56a8,8,0,0,0,0-16H136V72a8,8,0,0,0-16,0Zm40-24a12,12,0,1,0-12-12A12,12,0,0,0,160,48Zm36,24a12,12,0,1,0-12-12A12,12,0,0,0,196,72Zm24,36a12,12,0,1,0-12-12A12,12,0,0,0,220,108Z"></path></svg>

                               Registered {{ $data->frame }}</span>
                               <span class="row align-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="gold" viewBox="0 0 256 256"><path d="M192,24a8,8,0,0,0-8,8V64H72V32a8,8,0,0,0-16,0V224a8,8,0,0,0,16,0V192H184v32a8,8,0,0,0,16,0V32A8,8,0,0,0,192,24Zm-8,56v40H72V80ZM72,176V136H184v40Z"></path></svg>
                                @if ($data->ref == Auth::guard('users')->user()->username)
                                    Direct Referral
                                    @else
                                    Indirect Referral
                                @endif</span>
                                </div>
                                <div class="status {{ $data->status == 'active' ? 'green' : 'red' }}">{{ $data->status }}</div>
                       
                    </div>
                    <hr>
                    <div class="row w-full g-10 align-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="orange" viewBox="0 0 256 256"><path d="M207.58,63.84C186.85,53.48,159.33,48,128,48S69.15,53.48,48.42,63.84,16,88.78,16,104v48c0,15.22,11.82,29.85,32.42,40.16S96.67,208,128,208s58.85-5.48,79.58-15.84S240,167.22,240,152V104C240,88.78,228.18,74.15,207.58,63.84ZM128,64c62.64,0,96,23.23,96,40s-33.36,40-96,40-96-23.23-96-40S65.36,64,128,64Zm-8,95.86v32c-19-.62-35-3.42-48-7.49V153.05A203.43,203.43,0,0,0,120,159.86Zm16,0a203.43,203.43,0,0,0,48-6.81v31.31c-13,4.07-29,6.87-48,7.49ZM32,152V133.53a82.88,82.88,0,0,0,16.42,10.63c2.43,1.21,5,2.35,7.58,3.43V178C40.17,170.16,32,160.29,32,152Zm168,26V147.59c2.61-1.08,5.15-2.22,7.58-3.43A82.88,82.88,0,0,0,224,133.53V152C224,160.29,215.83,170.16,200,178Z"></path></svg>

                        <span>Total Commission:</span>
                        <strong class="c-green font-1">{!! Currency(Auth::guard('users')->user()->id)  !!}{{ number_format($data->commission,2) }}</strong>
                    </div>
                    <div class="row w-full g-10 align-center">
                       <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="rgb(108,92,230)" viewBox="0 0 256 256"><path d="M117.25,157.92a60,60,0,1,0-66.5,0A95.83,95.83,0,0,0,3.53,195.63a8,8,0,1,0,13.4,8.74,80,80,0,0,1,134.14,0,8,8,0,0,0,13.4-8.74A95.83,95.83,0,0,0,117.25,157.92ZM40,108a44,44,0,1,1,44,44A44.05,44.05,0,0,1,40,108Zm210.14,98.7a8,8,0,0,1-11.07-2.33A79.83,79.83,0,0,0,172,168a8,8,0,0,1,0-16,44,44,0,1,0-16.34-84.87,8,8,0,1,1-5.94-14.85,60,60,0,0,1,55.53,105.64,95.83,95.83,0,0,1,47.22,37.71A8,8,0,0,1,250.14,206.7Z"></path></svg>

                        <span>Total Direct Referrals:</span>
                        <strong class="c-green font-1">{{ number_format($data->downlines) }}</strong>
                    </div>
                </div>
            @endforeach
        @endif
    </section>
@endsection