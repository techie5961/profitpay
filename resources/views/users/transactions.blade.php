@extends('layout.users.app')
@section('title')
    Transaction History
@endsection
@section('css')
    <style class="css">
        .svg svg{
            fill:var(--primary);
           
        }
        
        svg.rotated{
            transform: rotate(180deg)
        }
    </style>
@endsection
@section('main')
    <section class="w-full align-center p-10 column g-10">
        @if ($transactions->isEmpty())
            @include('components.sections',[
                'null' => true,
                'text' => 'No Transactions Found'
            ])
        @else
       <div class="column g-10  w-full">
         <strong class="desc c-primary">Transaction History</strong>
         <div class="grid pos-relative grid-2 space-between align-center g-10">
            <div onclick="
               try{
                if(document.querySelector('.categories-filter').classList.contains('display-none')){
                document.querySelectorAll('.filters').forEach((data)=>{
                
                data.classList.add('display-none');
                });
                document.querySelectorAll('svg.chevron').forEach((data)=>{
                data.classList.remove('rotated');
                })
                document.querySelector('.categories-filter').classList.remove('display-none');
                this.querySelector('svg').classList.add('rotated');
                }else{
                document.querySelectorAll('.filters').forEach((data)=>{
                
                data.classList.add('display-none');
                });
                 document.querySelectorAll('svg.chevron').forEach((data)=>{
                data.classList.remove('rotated');
                })
                document.querySelector('.categories-filter').classList.add('display-none');
                this.querySelector('svg').classList.remove('rotated');
                }
               }catch(error){
               alert(error.stack)
               }
                
                " class="bg-secondary-dark column no-select pc-pointer g-5 w-full p-10 row justify-center br-10">
            <div class="row align-center g-10">
          <span>  All Categories
            </span>    
                <svg class="transition-ease-full chevron" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="CurrentColor" viewBox="0 0 256 256"><path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,48,88H208a8,8,0,0,1,5.66,13.66Z"></path></svg>
              
            </div> 
           
            </div>
            <div onclick="
               try{
                if(document.querySelector('.status-filter').classList.contains('display-none')){09
                document.querySelectorAll('.filters').forEach((data)=>{
                
                data.classList.add('display-none');
                });
                document.querySelectorAll('svg.chevron').forEach((data)=>{
                data.classList.remove('rotated');
                });
                document.querySelector('.status-filter').classList.remove('display-none');
                this.querySelector('svg').classList.add('rotated');
                }else{
                document.querySelectorAll('.filters').forEach((data)=>{
                
                data.classList.add('display-none');
                });
                 document.querySelectorAll('svg.chevron').forEach((data)=>{
                data.classList.remove('rotated');
                })
                document.querySelector('.status-filter').classList.add('display-none');
                this.querySelector('svg').classList.remove('rotated');
                }
               }catch(error){
               alert(error.stack)
               }
                
                " class="bg-secondary-dark no-select pc-pointer g-5 w-full p-10 row justify-center br-10">
                <div class="row align-center g-10">
                <span>All Status</span>
                <svg class="transition-ease-full chevron" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="CurrentColor" viewBox="0 0 256 256"><path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,48,88H208a8,8,0,0,1,5.66,13.66Z"></path></svg>
            
                </div>
                </div>
                 <div class="pos-absolute filters display-none categories-filter top-full no-select average grid-full flex-wrap row align-center g-10 stick-top bg br-0-0-10-10 p-10 w-full">
                <div onclick="spa(event,'{{ url('users/transactions?class=credit') }}')" class="bg-secondary-light p-10 w-fit pointer">Credit</div>
                <div onclick="spa(event,'{{ url('users/transactions?class=debit') }}')" class="bg-secondary-light p-10 w-fit pointer">Debit</div>
                <div onclick="spa(event,'{{ url('users/transactions') }}')" class="bg-secondary-light p-10 w-fit pointer">All Transactions</div>
                
            </div>   
             <div class="pos-absolute filters display-none status-filter top-full no-select average grid-full flex-wrap row align-center g-10 stick-top bg br-0-0-10-10 p-10 w-full">
                <div onclick="spa(event,'{{ url('users/transactions?status=pending') }}')" class="bg-secondary-light p-10 w-fit pointer">Pending</div>
                <div onclick="spa(event,'{{ url('users/transactions?status=success') }}')" class="bg-secondary-light p-10 w-fit pointer">Successfull</div>
                <div onclick="spa(event,'{{ url('users/transactions?status=rejected') }}')" class="bg-secondary-light p-10 w-fit pointer">Rejected</div>
                
            </div>   
         </div>
       </div>
          <div class="w-full g-5 column  br-10 box-shadow">
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
          </div>
        @endif
    </section>
@endsection
@section('js')
    <script class="js">
        InfiniteLoading();
    </script>
@endsection