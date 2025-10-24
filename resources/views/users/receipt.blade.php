@extends('layout.users.app')
@section('title')
    Transaction Receipt
@endsection
@section('css')
    <style class="css">
        body{
            overflow: hidden;
        }
        .house{
            background-image:url('{{ url('images/background.jpg') }}');
            background-color:var(--bg);
            background-size:cover;
            background-position:center;
            z-index:5000;
        }
    </style>
@endsection
@section('main')
    <section class="pos-fixed column align-center no-select p-10 house top-0 left-0 bottom-0 right-0">
        <div class="row bg-transparent trx-head backdrop-blur-10 space-between pos-fixed top-0 left-0 right-0 p-10 align-center">
            <div onclick="
            spa(event,'{{ url('users/transactions') }}');
            " class="h-30 pc-pointer w-30 column bg circle justify-center br-10">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M10.5303 5.46967C10.8232 5.76256 10.8232 6.23744 10.5303 6.53033L5.81066 11.25H20C20.4142 11.25 20.75 11.5858 20.75 12C20.75 12.4142 20.4142 12.75 20 12.75H5.81066L10.5303 17.4697C10.8232 17.7626 10.8232 18.2374 10.5303 18.5303C10.2374 18.8232 9.76256 18.8232 9.46967 18.5303L3.46967 12.5303C3.17678 12.2374 3.17678 11.7626 3.46967 11.4697L9.46967 5.46967C9.76256 5.17678 10.2374 5.17678 10.5303 5.46967Z" fill="CurrentColor"></path>
</svg>

            </div>
            <strong class="desc">Transaction Receipt</strong>
            <span></span>
        </div>
        <div style="box-shadow:inset 0 0 50px var(--bg-light)" class="w-full max-w-500 receipt-body br-10 border-1 border-color-primary bg-transparent backdrop-blur-10 p-10">
            <div class="row align-center w-full space-between g-10">
              <div class="column g-2">
                  <strong>{{ $data->type }}</strong>
                <span class="text-average">{{ $data->uniqid ?? strtoupper(uniqid('TRX'))  }}</span>
              </div>
              <div class="status {{ $data->status == 'success' ? 'green' : ($data->status == 'pending' ? 'gold' : 'red') }}">{{ $data->status }}</div>
            </div>
            <hr class="bg-primary">
          @if ($data->class == 'credit')
                <strong style="font-size:2rem;"  class="desc w-fit c-green row m-x-auto">+ {!! Currency(Auth::guard('users')->user()->id)  !!}{{ number_format($data->amount,2) }}</strong>
          @else
                <strong style="font-size:2rem;" class="desc w-fit c-red row m-x-auto">- {!! Currency(Auth::guard('users')->user()->id)  !!}{{ number_format($data->amount,2) }}</strong>
          @endif
          <strong class="m-x-auto w-fit row font-weight-400">{{ $data->date_format }}</strong>
          <div style="border-top:1px dashed var(--primary)" class="w-full m-y-10"></div>
           <div class="row m-top-10 w-full align-center g-10 space-between">
    <span>Transaction Type</span>
    <span>{{ $data->type }}</span>
</div>
         <div class="row m-top-10 w-full align-center g-10 space-between">
    <span>Transaction Amount</span>
    <span>{!! Currency(Auth::guard('users')->user()->id)  !!}{{ number_format($data->amount,2) }}</span>
</div>
 <div class="row w-full m-top-10 align-center g-10 space-between">
    <span>Transaction Fee</span>
    <span>{!! Currency(Auth::guard('users')->user()->id)  !!}{{ number_format(0,2) }}</span>
</div>
<div class="row w-full m-top-10 align-center g-10 space-between">
    <span>Transaction ID</span>
    <span>TRX-{{ $data->id }}</span>
</div>
<div class="row w-full m-top-10 align-center g-10 space-between">
    <span>Transaction Status</span>
    @switch($data->status)
        @case('pending')
            <div class="bg-gold p-5  p-x-10 c-black br-5">{{ $data->status }}</div>
            @break
        @case('success')
             <div class="bg-green p-x-10 p-5 c-white br-5">{{ $data->status }}</div>
            @break
        @default
             <div class="bg-red p-x-10 p-5 c-white br-5">{{ $data->status }}</div>
    @endswitch
</div>
           
       
          {{--  NEW ROW --}}
          <div style="padding-left:50px;" class="row m-top-10 align-center g-10">
            <div class="h-40 c-red w-40 column justify-center circle bg-dim">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M11.4697 3.46967C11.7626 3.17678 12.2374 3.17678 12.5303 3.46967L18.5303 9.46967C18.8232 9.76256 18.8232 10.2374 18.5303 10.5303C18.2374 10.8232 17.7626 10.8232 17.4697 10.5303L12.75 5.81066L12.75 20C12.75 20.4142 12.4142 20.75 12 20.75C11.5858 20.75 11.25 20.4142 11.25 20L11.25 5.81066L6.53033 10.5303C6.23744 10.8232 5.76256 10.8232 5.46967 10.5303C5.17678 10.2374 5.17678 9.76256 5.46967 9.46967L11.4697 3.46967Z" fill="CurrentColor"></path>
</svg>


            </div>
            <div class="column g-2">
                <span class="text-dim">From</span>
               @if ($data->class == 'debit')
                    <strong class="desc">{{ ucfirst(explode('_',$data->json->wallet)[0]) }} Wallet</strong>
               @else
                    <strong class="desc">{{ $data->type }}</strong>
               @endif
            </div>
          </div>
          @if ($data->class == 'credit')
                <hr class="bg-primary">
             {{--  NEW ROW --}}
          <div  style="padding-left:50px;" class="row m-top-10 align-center g-10">
            <div class="h-40 c-green w-40 column justify-center circle bg-dim">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M12 3.25C12.4142 3.25 12.75 3.58579 12.75 4L12.75 18.1893L17.4697 13.4697C17.7626 13.1768 18.2374 13.1768 18.5303 13.4697C18.8232 13.7626 18.8232 14.2374 18.5303 14.5303L12.5303 20.5303C12.3897 20.671 12.1989 20.75 12 20.75C11.8011 20.75 11.6103 20.671 11.4697 20.5303L5.46967 14.5303C5.17678 14.2374 5.17678 13.7626 5.46967 13.4697C5.76256 13.1768 6.23744 13.1768 6.53033 13.4697L11.25 18.1893L11.25 4C11.25 3.58579 11.5858 3.25 12 3.25Z" fill="CurrentColor"></path>
</svg>


            </div>
            <div class="column g-2">
                <span class="text-dim">To</span>
                 <strong class="desc">{{ ucfirst(explode('_',$data->json->wallet)[0]) }} Wallet</strong>
                 
            </div>
          </div>
          @else
              @if (str_contains(strtolower($data->type),'withdrawal'))
    <hr class="bg-primary">
             {{--  NEW ROW --}}
          <div  style="padding-left:50px;" class="row m-top-10 align-center g-10">
            <div class="h-40 c-green w-40 column justify-center circle bg-dim">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M12 3.25C12.4142 3.25 12.75 3.58579 12.75 4L12.75 18.1893L17.4697 13.4697C17.7626 13.1768 18.2374 13.1768 18.5303 13.4697C18.8232 13.7626 18.8232 14.2374 18.5303 14.5303L12.5303 20.5303C12.3897 20.671 12.1989 20.75 12 20.75C11.8011 20.75 11.6103 20.671 11.4697 20.5303L5.46967 14.5303C5.17678 14.2374 5.17678 13.7626 5.46967 13.4697C5.76256 13.1768 6.23744 13.1768 6.53033 13.4697L11.25 18.1893L11.25 4C11.25 3.58579 11.5858 3.25 12 3.25Z" fill="CurrentColor"></path>
</svg>


            </div>
            <div class="column g-2">
                <span class="text-dim">To</span>
                <strong class="desc">{{ $data->json->data->bank->account_name }}</strong>
                  <span>{{ $data->json->data->bank->account_number }} / {{ $data->json->data->bank->bank_name }}</span>
             
            </div>
          </div>
                 @endif
                @if (str_contains(strtolower($data->type),'data bundle'))
                   <hr class="bg-primary">
             {{--  NEW ROW --}}
          <div  style="padding-left:50px;" class="row m-top-10 align-center g-10">
            <div class="h-40 c-green w-40 column justify-center circle bg-dim">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M12 3.25C12.4142 3.25 12.75 3.58579 12.75 4L12.75 18.1893L17.4697 13.4697C17.7626 13.1768 18.2374 13.1768 18.5303 13.4697C18.8232 13.7626 18.8232 14.2374 18.5303 14.5303L12.5303 20.5303C12.3897 20.671 12.1989 20.75 12 20.75C11.8011 20.75 11.6103 20.671 11.4697 20.5303L5.46967 14.5303C5.17678 14.2374 5.17678 13.7626 5.46967 13.4697C5.76256 13.1768 6.23744 13.1768 6.53033 13.4697L11.25 18.1893L11.25 4C11.25 3.58579 11.5858 3.25 12 3.25Z" fill="CurrentColor"></path>
</svg>


            </div>
            <div class="column g-2">
                <span class="text-dim">To</span>
                 <strong class="desc">{{ $data->json->body->number }}</strong>
                  <span>{{ $data->json->body->network }} / {{ ($data->json->body->amount / 1000) }}GB</span>
             
            </div>
          </div>
                   @endif
                 @if (str_contains(strtolower($data->type),'airtime'))
                    <hr class="bg-primary">
             {{--  NEW ROW --}}
          <div  style="padding-left:50px;" class="row m-top-10 align-center g-10">
            <div class="h-40 c-green w-40 column justify-center circle bg-dim">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M12 3.25C12.4142 3.25 12.75 3.58579 12.75 4L12.75 18.1893L17.4697 13.4697C17.7626 13.1768 18.2374 13.1768 18.5303 13.4697C18.8232 13.7626 18.8232 14.2374 18.5303 14.5303L12.5303 20.5303C12.3897 20.671 12.1989 20.75 12 20.75C11.8011 20.75 11.6103 20.671 11.4697 20.5303L5.46967 14.5303C5.17678 14.2374 5.17678 13.7626 5.46967 13.4697C5.76256 13.1768 6.23744 13.1768 6.53033 13.4697L11.25 18.1893L11.25 4C11.25 3.58579 11.5858 3.25 12 3.25Z" fill="CurrentColor"></path>
</svg>


            </div>
            <div class="column g-2">
                <span class="text-dim">To</span>
                 <strong class="desc">{{ $data->json->body->number }}</strong>
                  <span>{{ $data->json->body->network }} / {!! Currency(Auth::guard('users')->user()->id)  !!}{{ number_format($data->json->body->amount,2) }}</span>
              
            </div>
          </div>
                    @endif

            
          @endif
          <hr class="gradient m-top-10 m-bottom-10">
          <div style="border:0.1px solid var(--primary)" class="w-full timer br-10 p-10 row g-10">
            <div class="h-40 pos-relative timer-circle w-40 circle c-primary bg-dim column justify-center">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M12 2.75C6.89137 2.75 2.75 6.89137 2.75 12C2.75 17.1086 6.89137 21.25 12 21.25C17.1086 21.25 21.25 17.1086 21.25 12C21.25 6.89137 17.1086 2.75 12 2.75ZM1.25 12C1.25 6.06294 6.06294 1.25 12 1.25C17.9371 1.25 22.75 6.06294 22.75 12C22.75 17.9371 17.9371 22.75 12 22.75C6.06294 22.75 1.25 17.9371 1.25 12ZM12 7.25C12.4142 7.25 12.75 7.58579 12.75 8V11.6893L15.0303 13.9697C15.3232 14.2626 15.3232 14.7374 15.0303 15.0303C14.7374 15.3232 14.2626 15.3232 13.9697 15.0303L11.4697 12.5303C11.329 12.3897 11.25 12.1989 11.25 12V8C11.25 7.58579 11.5858 7.25 12 7.25Z" fill="CurrentColor"></path>
</svg>
<div class="w-1 pos-absolute top-full line bg-primary" style="width:0.2px"></div>

            </div>
            <div class="column g-2">
                <span style="font-family:luckiest guy" class="desc">Processing Time</span>
                <span class="text-dim">
                    @switch($data->status)
                        @case('success')
                            Your transaction has been successfully processed
                            @break
                        @case('pending')
                            Your transaction is currently being processed
                            @break

                        @default
                            Your transaction has been declined by the system
                    @endswitch
                </span>

                @if ($data->status == 'pending')
                    <span class="row c-primary align-center g-2">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M12 22C16.8362 22 20.7567 18.1162 20.7567 13.3253C20.7567 8.53446 16.8362 4.65069 12 4.65069C7.16383 4.65069 3.24334 8.53446 3.24334 13.3253C3.24334 18.1162 7.16383 22 12 22ZM12 8.74705C12.403 8.74705 12.7297 9.0707 12.7297 9.46994V13.0259L14.9484 15.2238C15.2334 15.5061 15.2334 15.9638 14.9484 16.2461C14.6634 16.5284 14.2014 16.5284 13.9164 16.2461L11.484 13.8365C11.3472 13.7009 11.2703 13.5171 11.2703 13.3253V9.46994C11.2703 9.0707 11.597 8.74705 12 8.74705Z" fill="CurrentColor"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M8.2405 2.33986C8.45409 2.67841 8.3502 3.1244 8.00844 3.33599L4.11657 5.74562C3.77481 5.95722 3.32461 5.8543 3.11102 5.51574C2.89742 5.17718 3.00131 4.7312 3.34307 4.5196L7.23494 2.10998C7.5767 1.89838 8.0269 2.0013 8.2405 2.33986Z" fill="CurrentColor"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M15.7595 2.33985C15.9731 2.0013 16.4233 1.89838 16.7651 2.10998L20.6569 4.5196C20.9987 4.7312 21.1026 5.17719 20.889 5.51574C20.6754 5.8543 20.2252 5.95722 19.8834 5.74562L15.9916 3.33599C15.6498 3.1244 15.5459 2.67841 15.7595 2.33985Z" fill="CurrentColor"></path>
</svg>

                    Estimated completion:1 to 24 hrs
                    </span>
                @endif
            </div>
          </div>
          <div class="p-10 m-top-10 row g-5 align-center w-full bg-dim br-10">
            <svg width="30" height="30" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M16.5249 2H16.5932C17.477 1.99999 18.1897 1.99999 18.7635 2.05454C19.3552 2.1108 19.8707 2.22996 20.3343 2.51405C20.8037 2.80168 21.1983 3.19632 21.486 3.6657C21.77 4.12929 21.8892 4.64482 21.9455 5.23653C22 5.8103 22 6.52304 22 7.40683V7.47517C22 8.05587 22 8.54048 21.9626 8.9341C21.9235 9.34559 21.8386 9.72907 21.623 10.0808C21.4121 10.425 21.1227 10.7144 20.7785 10.9254C20.4267 11.1409 20.0433 11.2258 19.6318 11.2649C19.2382 11.3024 18.7535 11.3023 18.1728 11.3023L17.0679 11.3023C16.2321 11.3024 15.5352 11.3024 14.9819 11.228C14.3979 11.1495 13.8706 10.9768 13.4469 10.5531C13.0232 10.1294 12.8505 9.60212 12.772 9.01812C12.6976 8.46484 12.6976 7.76789 12.6977 6.93209L12.6977 5.82725C12.6977 5.24654 12.6976 4.76185 12.7351 4.36823C12.7742 3.95674 12.8591 3.57325 13.0746 3.22152C13.2856 2.87731 13.575 2.5879 13.9192 2.37697C14.2709 2.16142 14.6544 2.07653 15.0659 2.0374C15.4595 1.99998 15.9442 1.99999 16.5249 2ZM17.3488 7.81395C16.8694 7.81395 16.6297 7.81395 16.4604 7.69385C16.4007 7.65148 16.3485 7.59933 16.3061 7.5396C16.186 7.37034 16.186 7.13061 16.186 6.65117C16.186 6.17173 16.186 5.93199 16.3061 5.76273C16.3485 5.703 16.4007 5.65085 16.4604 5.60847C16.6297 5.48837 16.8694 5.48837 17.3488 5.48837C17.8283 5.48837 18.068 5.48837 18.2373 5.60847C18.297 5.65085 18.3491 5.703 18.3915 5.76273C18.5116 5.93199 18.5116 6.17171 18.5116 6.65116C18.5116 7.13061 18.5116 7.37034 18.3915 7.5396C18.3491 7.59933 18.297 7.65148 18.2373 7.69385C18.068 7.81395 17.8283 7.81395 17.3488 7.81395Z" fill="CurrentColor"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M10.0808 2.37697C9.72907 2.16142 9.34559 2.07653 8.9341 2.0374C8.54047 1.99998 8.05583 1.99999 7.4751 2H7.40684C6.52307 1.99999 5.81029 1.99999 5.23653 2.05454C4.64482 2.1108 4.12929 2.22996 3.6657 2.51405C3.19632 2.80168 2.80168 3.19632 2.51405 3.6657C2.22996 4.12929 2.1108 4.64482 2.05454 5.23653C1.99999 5.81029 1.99999 6.52302 2 7.40679V7.47506C1.99999 8.05579 1.99998 8.54047 2.0374 8.9341C2.07653 9.34559 2.16142 9.72907 2.37697 10.0808C2.5879 10.425 2.87731 10.7144 3.22152 10.9254C3.57325 11.1409 3.95674 11.2258 4.36823 11.2649C4.76183 11.3024 5.24643 11.3023 5.82711 11.3023L6.93209 11.3023C7.76787 11.3024 8.46484 11.3024 9.01812 11.228C9.60212 11.1495 10.1294 10.9768 10.5531 10.5531C10.9768 10.1294 11.1495 9.60212 11.228 9.01812C11.3024 8.46484 11.3024 7.7679 11.3023 6.93212L11.3023 5.82726C11.3023 5.24658 11.3024 4.76183 11.2649 4.36823C11.2258 3.95674 11.1409 3.57325 10.9254 3.22152C10.7144 2.87731 10.425 2.5879 10.0808 2.37697ZM5.76273 7.69385C5.93199 7.81395 6.17171 7.81395 6.65116 7.81395C7.13061 7.81395 7.37034 7.81395 7.5396 7.69385C7.59933 7.65148 7.65148 7.59933 7.69385 7.5396C7.81395 7.37034 7.81395 7.13061 7.81395 6.65116C7.81395 6.17171 7.81395 5.93199 7.69385 5.76273C7.65148 5.703 7.59933 5.65085 7.5396 5.60847C7.37034 5.48837 7.13061 5.48837 6.65116 5.48837C6.17171 5.48837 5.93199 5.48837 5.76273 5.60847C5.703 5.65085 5.65085 5.703 5.60847 5.76273C5.48837 5.93199 5.48837 6.17171 5.48837 6.65116C5.48837 7.13061 5.48837 7.37034 5.60847 7.5396C5.65085 7.59933 5.703 7.65148 5.76273 7.69385Z" fill="CurrentColor"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M9.01812 12.772C9.60212 12.8505 10.1294 13.0232 10.5531 13.4469C10.9768 13.8706 11.1495 14.3979 11.228 14.9819C11.3024 15.5352 11.3024 16.2321 11.3023 17.0679L11.3023 18.1728C11.3023 18.7535 11.3024 19.2382 11.2649 19.6318C11.2258 20.0433 11.1409 20.4267 10.9254 20.7785C10.7144 21.1227 10.425 21.4121 10.0808 21.623C9.72907 21.8386 9.34559 21.9235 8.9341 21.9626C8.54048 22 8.05577 22 7.47507 22H7.40683C6.52304 22 5.8103 22 5.23653 21.9455C4.64482 21.8892 4.12929 21.77 3.6657 21.486C3.19632 21.1983 2.80168 20.8037 2.51405 20.3343C2.22996 19.8707 2.1108 19.3552 2.05454 18.7635C1.99999 18.1897 1.99999 17.477 2 16.5932V16.5249C1.99999 15.9442 1.99998 15.4595 2.0374 15.0659C2.07653 14.6544 2.16142 14.2709 2.37697 13.9192C2.5879 13.575 2.87731 13.2856 3.22152 13.0746C3.57325 12.8591 3.95674 12.7742 4.36823 12.7351C4.76184 12.6976 5.24648 12.6977 5.82717 12.6977L6.93209 12.6977C7.76789 12.6976 8.46484 12.6976 9.01812 12.772ZM6.65116 18.5116C6.17171 18.5116 5.93199 18.5116 5.76273 18.3915C5.703 18.3491 5.65085 18.297 5.60847 18.2373C5.48837 18.068 5.48837 17.8283 5.48837 17.3488C5.48837 16.8694 5.48837 16.6297 5.60847 16.4604C5.65085 16.4007 5.703 16.3485 5.76273 16.3061C5.93199 16.186 6.17171 16.186 6.65115 16.186C7.13059 16.186 7.37034 16.186 7.5396 16.3061C7.59933 16.3485 7.65148 16.4007 7.69385 16.4604C7.81395 16.6297 7.81395 16.8694 7.81395 17.3488C7.81395 17.8283 7.81395 18.068 7.69385 18.2373C7.65148 18.297 7.59933 18.3491 7.5396 18.3915C7.37034 18.5116 7.13061 18.5116 6.65116 18.5116Z" fill="CurrentColor"></path>
<path d="M12.6977 16.6155V16.6512H14.093C14.093 15.9834 14.0939 15.5351 14.1286 15.1933C14.1622 14.8632 14.2216 14.7107 14.289 14.6098C14.3738 14.4828 14.4828 14.3738 14.6098 14.289C14.7107 14.2216 14.8632 14.1622 15.1933 14.1286C15.5351 14.0939 15.9834 14.093 16.6512 14.093H18.5116V12.6977H16.6155C15.9926 12.6977 15.4729 12.6976 15.0521 12.7404C14.6117 12.7853 14.203 12.8827 13.8346 13.1288C13.5553 13.3154 13.3154 13.5553 13.1288 13.8346C12.8827 14.203 12.7853 14.6117 12.7404 15.0521C12.6976 15.4729 12.6977 15.9926 12.6977 16.6155Z" fill="CurrentColor"></path>
<path d="M22 18.5351V18.5116H20.6046C20.6046 18.9546 20.6043 19.2519 20.5886 19.4821C20.5733 19.706 20.5459 19.8151 20.5161 19.8868C20.3981 20.1718 20.1718 20.3981 19.8868 20.5161C19.8151 20.5459 19.706 20.5733 19.4821 20.5886C19.2519 20.6043 18.9546 20.6046 18.5116 20.6046H16.6512V22H18.5351C18.9486 22 19.2937 22 19.5771 21.9807C19.8721 21.9606 20.1507 21.9172 20.4208 21.8053C21.0476 21.5456 21.5456 21.0476 21.8053 20.4208C21.9172 20.1507 21.9606 19.8721 21.9807 19.5771C22 19.2937 22 18.9486 22 18.5351Z" fill="CurrentColor"></path>
<path d="M14.093 21.3023C14.093 21.6876 13.7807 22 13.3953 22C13.01 22 12.6977 21.6876 12.6977 21.3023V18.5116H14.093V21.3023Z" fill="CurrentColor"></path>
<path d="M21.3023 12.6977C20.917 12.6977 20.6046 13.01 20.6046 13.3953V16.6512H22V13.3953C22 13.01 21.6876 12.6977 21.3023 12.6977Z" fill="CurrentColor"></path>
<path d="M16.0761 16.6173C16 16.8011 16 17.0341 16 17.5C16 17.9659 16 18.1989 16.0761 18.3827C16.1776 18.6277 16.3723 18.8224 16.6173 18.9239C16.8011 19 17.0341 19 17.5 19C17.9659 19 18.1989 19 18.3827 18.9239C18.6277 18.8224 18.8224 18.6277 18.9239 18.3827C19 18.1989 19 17.9659 19 17.5C19 17.0341 19 16.8011 18.9239 16.6173C18.8224 16.3723 18.6277 16.1776 18.3827 16.0761C18.1989 16 17.9659 16 17.5 16C17.0341 16 16.8011 16 16.6173 16.0761C16.3723 16.1776 16.1776 16.3723 16.0761 16.6173Z" fill="CurrentColor"></path>
</svg>

<div class="column g-2">
    <strong>Secure Transaction</strong>
    <span class="text-small">This transaction is protected by end-to-end encryption</span>
</div>
          </div>
          <div style="border-top:0.1px dashed silver" class="w-full text-average text-dim text-center p-5 m-y-10">
            {{ config('app.name')}} - Your daily companion for earning opportunities. Transform your smartphone into an income generator with our innovative platform.
          </div>
        </div>
    </section>
@endsection
@section('js')
    <script class="js">
        window.MyFunc = {
            Restyle : function(){
                try{
                   
                       document.querySelector('.receipt-body').style.marginTop=document.querySelector('.trx-head').getBoundingClientRect().height + 'px';
                       let cont_bottom=document.querySelector('.timer').getBoundingClientRect().bottom;
                    document.querySelector('.line').style.height=cont_bottom - document.querySelector('.timer-circle').getBoundingClientRect().bottom + 'px';
                    
                }catch(error){
                    alert(error.stack);
                }
                 }
        }
        MyFunc.Restyle()
    </script>
@endsection


 