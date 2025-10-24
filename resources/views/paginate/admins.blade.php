@isset($coupons)
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
                    <div class="c-green">
                      <svg width="16" height="16" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<circle cx="12" cy="6" r="4" fill="CurrentColor"></circle>
<path fill-rule="evenodd" clip-rule="evenodd" d="M16.5 22C14.8501 22 14.0251 22 13.5126 21.4874C13 20.9749 13 20.1499 13 18.5C13 16.8501 13 16.0251 13.5126 15.5126C14.0251 15 14.8501 15 16.5 15C18.1499 15 18.9749 15 19.4874 15.5126C20 16.0251 20 16.8501 20 18.5C20 20.1499 20 20.9749 19.4874 21.4874C18.9749 22 18.1499 22 16.5 22ZM18.468 17.7458C18.6958 17.518 18.6958 17.1487 18.468 16.9209C18.2402 16.693 17.8709 16.693 17.6431 16.9209L15.7222 18.8417L15.3569 18.4764C15.1291 18.2486 14.7598 18.2486 14.532 18.4764C14.3042 18.7042 14.3042 19.0736 14.532 19.3014L15.3097 20.0791C15.5375 20.307 15.9069 20.307 16.1347 20.0791L18.468 17.7458Z" fill="CurrentColor"></path>
<path d="M15.4147 13.5074C14.4046 13.1842 13.24 13 12 13C8.13401 13 5 14.7909 5 17C5 19.1406 7.94244 20.8884 11.6421 20.9949C11.615 20.8686 11.594 20.7432 11.5775 20.6201C11.4998 20.0424 11.4999 19.3365 11.5 18.586V18.414C11.4999 17.6635 11.4998 16.9576 11.5775 16.3799C11.6639 15.737 11.8705 15.0333 12.4519 14.4519C13.0334 13.8705 13.737 13.6639 14.3799 13.5774C14.6919 13.5355 15.0412 13.5162 15.4147 13.5074Z" fill="CurrentColor"></path>
</svg>

                    </div>
                        <span>Vendor:</span> 
                   <a class="no-u c-green bold" {{ ($data->vendor_id ?? '') == 0 ? 'href="'.url('admins/user?id='.$data->id.'').'"' : '' }}>{{ $data->vendor->username ?? 'Non vendor' }}</a>
                   </div>
                </div>
                 <div class="row w-full g-2 align-center">
                   <div class="row align-center g-2">
                   <div class="c-green">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M12.0002 2.75C11.0217 2.75 10.1873 3.37503 9.87803 4.24993C9.73999 4.64047 9.3115 4.84517 8.92096 4.70713C8.53043 4.56909 8.32573 4.1406 8.46377 3.75007C8.97821 2.29459 10.3662 1.25 12.0002 1.25C13.6341 1.25 15.0222 2.29459 15.5366 3.75007C15.6747 4.1406 15.47 4.56909 15.0794 4.70713C14.6889 4.84517 14.2604 4.64047 14.1224 4.24993C13.8131 3.37503 12.9787 2.75 12.0002 2.75Z" fill="CurrentColor"></path>
<path d="M14 12.5H10C9.72386 12.5 9.5 12.7239 9.5 13V15.1615C9.5 15.3659 9.62448 15.5498 9.8143 15.6257L10.5144 15.9058C11.4681 16.2872 12.5319 16.2872 13.4856 15.9058L14.1857 15.6257C14.3755 15.5498 14.5 15.3659 14.5 15.1615V13C14.5 12.7239 14.2761 12.5 14 12.5Z" fill="CurrentColor"></path>
<path d="M8.01076 15.3691L3.00586 13.8677C3.03595 16.9822 3.21789 19.8505 4.31792 20.8283C5.63593 21.9998 7.75726 21.9998 11.9999 21.9998C16.2425 21.9998 18.3639 21.9998 19.6819 20.8283C20.7819 19.8505 20.9638 16.9822 20.9939 13.8677L15.9892 15.3691C15.913 16.1018 15.4372 16.7407 14.7428 17.0184L14.0426 17.2985C12.7314 17.823 11.2686 17.823 9.95735 17.2985L9.25722 17.0184C8.5628 16.7407 8.08702 16.1018 8.01076 15.3691Z" fill="CurrentColor"></path>
<path d="M7.60893 5H16.3911C18.8412 5 20.0663 5 20.8934 5.67298C21.0524 5.80233 21.1977 5.94762 21.327 6.10659C22 6.9337 22 8.15877 22 10.6089C22 11.2307 22 11.5415 21.8492 11.784C21.8199 11.8312 21.7866 11.8759 21.7498 11.9176C21.5609 12.1317 21.2631 12.2211 20.6676 12.3997L16 13.8V13C16 11.8954 15.1046 11 14 11H10C8.89543 11 8 11.8954 8 13V13.8L3.3324 12.3997C2.7369 12.2211 2.43915 12.1317 2.25021 11.9176C2.21341 11.8759 2.18015 11.8312 2.15078 11.784C2 11.5415 2 11.2307 2 10.6089C2 8.15877 2 6.9337 2.67298 6.10659C2.80233 5.94763 2.94763 5.80233 3.10659 5.67298C3.9337 5 5.15877 5 7.60893 5Z" fill="CurrentColor"></path>
</svg>

                    </div>  
                      <span>Package:</span> 
                   <strong>{{ $data->package->name ?? '' }}</strong>
                   </div>
                </div>
                 <div class="row w-full g-2 align-center">
                   <div class="row align-center g-2">
                    <div class="c-green">
                      <svg width="16" height="16" viewBox="0 0 24 24" fill="CurrentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M3.46447 20.5355C4.92893 22 7.28595 22 12 22C16.714 22 19.0711 22 20.5355 20.5355C22 19.0711 22 16.714 22 12C22 7.28595 22 4.92893 20.5355 3.46447C19.0711 2 16.714 2 12 2C7.28595 2 4.92893 2 3.46447 3.46447C2 4.92893 2 7.28595 2 12C2 16.714 2 19.0711 3.46447 20.5355ZM16.9348 8.19598L13.4227 17.3618C13.1045 18.1922 11.94 18.2192 11.6917 17.4019L10.6352 13.9249C10.553 13.6545 10.3455 13.447 10.0751 13.3648L6.5981 12.3083C5.78079 12.06 5.80779 10.8955 6.63824 10.5773L15.804 7.06521C16.5389 6.78361 17.2164 7.46107 16.9348 8.19598Z" fill="CurrentColor"></path>
</svg>

                      </div>
                         <span>Country:</span> 
                   <strong>{{ $data->package->country ?? 'nigeria' }}</strong>
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
@endisset
@isset($tasks)
      @foreach ($tasks as $data)
              <div class="w-full bg-white br-10 box-shadow p-10 column g-10">
                <div class="row w-full space-between g-10">
                    @switch(str_contains(strtolower($data->category),'whatsapp') ? 'whatsapp' : (str_contains(strtolower($data->category),'telegram') ? 'telegram' : 'others'))
                        @case('whatsapp')
                            <svg class="min-w-10" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#4caf50" viewBox="0 0 256 256"><path d="M152.58,145.23l23,11.48A24,24,0,0,1,152,176a72.08,72.08,0,0,1-72-72A24,24,0,0,1,99.29,80.46l11.48,23L101,118a8,8,0,0,0-.73,7.51,56.47,56.47,0,0,0,30.15,30.15A8,8,0,0,0,138,155ZM232,128A104,104,0,0,1,79.12,219.82L45.07,231.17a16,16,0,0,1-20.24-20.24l11.35-34.05A104,104,0,1,1,232,128Zm-40,24a8,8,0,0,0-4.42-7.16l-32-16a8,8,0,0,0-8,.5l-14.69,9.8a40.55,40.55,0,0,1-16-16l9.8-14.69a8,8,0,0,0,.5-8l-16-32A8,8,0,0,0,104,64a40,40,0,0,0-40,40,88.1,88.1,0,0,0,88,88A40,40,0,0,0,192,152Z"></path></svg>

                            @break
                        @case('telegram')
                            <svg class="min-w-32" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="navy" viewBox="0 0 256 256"><path d="M228.88,26.19a9,9,0,0,0-9.16-1.57L17.06,103.93a14.22,14.22,0,0,0,2.43,27.21L72,141.45V200a15.92,15.92,0,0,0,10,14.83,15.91,15.91,0,0,0,17.51-3.73l25.32-26.26L165,220a15.88,15.88,0,0,0,10.51,4,16.3,16.3,0,0,0,5-.79,15.85,15.85,0,0,0,10.67-11.63L231.77,35A9,9,0,0,0,228.88,26.19ZM175.53,208,92.85,135.5l119-85.29Z"></path></svg>

                            @break
                        @default
                            <svg class="min-w-10" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="var(--bg-secondary)" viewBox="0 0 256 256"><path d="M224,64H176V56a24,24,0,0,0-24-24H104A24,24,0,0,0,80,56v8H32A16,16,0,0,0,16,80v28a4,4,0,0,0,4,4H64V96.27A8.17,8.17,0,0,1,71.47,88,8,8,0,0,1,80,96v16h96V96.27A8.17,8.17,0,0,1,183.47,88,8,8,0,0,1,192,96v16h44a4,4,0,0,0,4-4V80A16,16,0,0,0,224,64Zm-64,0H96V56a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8Zm80,68v60a16,16,0,0,1-16,16H32a16,16,0,0,1-16-16V132a4,4,0,0,1,4-4H64v16a8,8,0,0,0,8.53,8A8.17,8.17,0,0,0,80,143.73V128h96v16a8,8,0,0,0,8.53,8,8.17,8.17,0,0,0,7.47-8.25V128h44A4,4,0,0,1,240,132Z"></path></svg>

                    @endswitch
                    <div class="column m-right-auto g-5">
                        <strong class="font-1">{{ $data->title ?? 'null' }}</strong>
                        <span class="text-dim row align-center g-2 text-small">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#708090" viewBox="0 0 256 256"><path d="M232,136.66A104.12,104.12,0,1,1,119.34,24,8,8,0,0,1,120.66,40,88.12,88.12,0,1,0,216,135.34,8,8,0,0,1,232,136.66ZM120,72v56a8,8,0,0,0,8,8h56a8,8,0,0,0,0-16H136V72a8,8,0,0,0-16,0Zm40-24a12,12,0,1,0-12-12A12,12,0,0,0,160,48Zm36,24a12,12,0,1,0-12-12A12,12,0,0,0,196,72Zm24,36a12,12,0,1,0-12-12A12,12,0,0,0,220,108Z"></path></svg>

                            Last Updated {{ $data->frame }}</span>
                    </div>
                    <div class="status {{ $data->status == 'active' ? 'green' : 'gold' }}">{{ $data->status }}</div>
                </div>
                <hr>
                <div class="row align-center g-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="rgb(108,92,230)" viewBox="0 0 256 256"><path d="M207.58,63.84C186.85,53.48,159.33,48,128,48S69.15,53.48,48.42,63.84,16,88.78,16,104v48c0,15.22,11.82,29.85,32.42,40.16S96.67,208,128,208s58.85-5.48,79.58-15.84S240,167.22,240,152V104C240,88.78,228.18,74.15,207.58,63.84ZM128,64c62.64,0,96,23.23,96,40s-33.36,40-96,40-96-23.23-96-40S65.36,64,128,64Zm-8,95.86v32c-19-.62-35-3.42-48-7.49V153.05A203.43,203.43,0,0,0,120,159.86Zm16,0a203.43,203.43,0,0,0,48-6.81v31.31c-13,4.07-29,6.87-48,7.49ZM32,152V133.53a82.88,82.88,0,0,0,16.42,10.63c2.43,1.21,5,2.35,7.58,3.43V178C40.17,170.16,32,160.29,32,152Zm168,26V147.59c2.61-1.08,5.15-2.22,7.58-3.43A82.88,82.88,0,0,0,224,133.53V152C224,160.29,215.83,170.16,200,178Z"></path></svg>
                    <span>Task Reward:</span>
                    <strong class="font-1 c-green">Package Based</strong>
                </div>
                <div class="row align-center g-5">
                   <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="rgb(108,92,230)" viewBox="0 0 256 256"><path d="M76,152a36,36,0,1,0,36,36A36,36,0,0,0,76,152Zm0,56a20,20,0,1,1,20-20A20,20,0,0,1,76,208ZM42.34,106.34,56.69,92,42.34,77.66A8,8,0,0,1,53.66,66.34L68,80.69,82.34,66.34A8,8,0,0,1,93.66,77.66L79.31,92l14.35,14.34a8,8,0,0,1-11.32,11.32L68,103.31,53.66,117.66a8,8,0,0,1-11.32-11.32Zm187.32,96a8,8,0,0,1-11.32,11.32L204,199.31l-14.34,14.35a8,8,0,0,1-11.32-11.32L192.69,188l-14.35-14.34a8,8,0,0,1,11.32-11.32L204,176.69l14.34-14.35a8,8,0,0,1,11.32,11.32L215.31,188Zm-45.19-89.51c-6.18,22.33-25.32,41.63-46.53,46.93A8.13,8.13,0,0,1,136,160a8,8,0,0,1-1.93-15.76c15.63-3.91,30.35-18.91,35-35.68,3.19-11.5,3.22-29-14.71-46.9L152,59.31V80a8,8,0,0,1-16,0V40a8,8,0,0,1,8-8h40a8,8,0,0,1,0,16H163.31l2.35,2.34C183.9,68.59,190.58,90.78,184.47,112.83Z"></path></svg>
                     <span>Completed:</span>
                    <strong class="font-1 c-green">{{ number_format($data->completed).'/'.number_format($data->limit) }}</strong>
                </div>
                <div class="row align-center g-5">
                   <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="rgb(108,92,230)" viewBox="0 0 256 256"><path d="M240,88.23a54.43,54.43,0,0,1-16,37L189.25,160a54.27,54.27,0,0,1-38.63,16h-.05A54.63,54.63,0,0,1,96,119.84a8,8,0,0,1,16,.45A38.62,38.62,0,0,0,150.58,160h0a38.39,38.39,0,0,0,27.31-11.31l34.75-34.75a38.63,38.63,0,0,0-54.63-54.63l-11,11A8,8,0,0,1,135.7,59l11-11A54.65,54.65,0,0,1,224,48,54.86,54.86,0,0,1,240,88.23ZM109,185.66l-11,11A38.41,38.41,0,0,1,70.6,208h0a38.63,38.63,0,0,1-27.29-65.94L78,107.31A38.63,38.63,0,0,1,144,135.71a8,8,0,0,0,16,.45A54.86,54.86,0,0,0,144,96a54.65,54.65,0,0,0-77.27,0L32,130.75A54.62,54.62,0,0,0,70.56,224h0a54.28,54.28,0,0,0,38.64-16l11-11A8,8,0,0,0,109,185.66Z"></path></svg>
                     <span>Task Link:</span>
                    <a href="{{ $data->link }}" target="_blank" class="font-1 bold c-green">Visit Link</a>
                </div>
                
                <div class="row align-center g-10 space-between">
                    <button onclick="
                        let data=`
                       <svg xmlns='http://www.w3.org/2000/svg' width='50' height='50' fill='red' viewBox='0 0 256 256'><path d='M216,48H176V40a24,24,0,0,0-24-24H104A24,24,0,0,0,80,40v8H40a8,8,0,0,0,0,16h8V208a16,16,0,0,0,16,16H192a16,16,0,0,0,16-16V64h8a8,8,0,0,0,0-16ZM96,40a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8v8H96Zm96,168H64V64H192ZM112,104v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Zm48,0v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Z'></path></svg> 
                        <span>Are you sure you want to delete this task? This action cannot be undone.</span>
                    <button onclick='window.location.href=&quot;{{ url('admins/get/task/delete?id='.$data->id.'') }}&quot;' class='btn-red-3d w-full clip-5 g-5 br-5'>Yes! Delete Task</button>
                        `;
                        PopUp(data);
                        " class="btn-red-3d g-5 clip-5 br-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="CurrentColor" viewBox="0 0 256 256"><path d="M216,48H176V40a24,24,0,0,0-24-24H104A24,24,0,0,0,80,40v8H40a8,8,0,0,0,0,16h8V208a16,16,0,0,0,16,16H192a16,16,0,0,0,16-16V64h8a8,8,0,0,0,0-16ZM96,40a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8v8H96Zm96,168H64V64H192ZM112,104v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Zm48,0v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Z"></path></svg>

                        Delete</button>
                     <button onclick="window.location.href='{{ url('admins/task/edit?id='.$data->id.'') }}'" class="btn-blue-3d g-5 clip-5 br-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="CurrentColor" viewBox="0 0 256 256"><path d="M201.54,54.46A104,104,0,0,0,54.46,201.54,104,104,0,0,0,201.54,54.46ZM88,192a16,16,0,0,1,32,0v23.59a88,88,0,0,1-32-9.22Zm48,0a16,16,0,0,1,32,0v14.37a88,88,0,0,1-32,9.22Zm-28.73-56h41.46l11.58,25.1A31.93,31.93,0,0,0,128,170.87a31.93,31.93,0,0,0-32.31-9.77Zm7.39-16L128,91.09,141.34,120Zm75.56,70.23c-2,2-4.08,3.87-6.22,5.64V176a7.91,7.91,0,0,0-.74-3.35l-48-104a8,8,0,0,0-14.52,0l-48,104A7.91,7.91,0,0,0,72,176v19.87c-2.14-1.77-4.22-3.64-6.22-5.64a88,88,0,1,1,124.44,0Z"></path></svg>

                        Edit</button>
                </div>
              </div>
          @endforeach
          @if ($tasks->hasMorePages())
              @include('components.sections',[
                'infinite_loading' => true,
                'page' => $tasks->currentPage() + 1
              ])
          @endif
@endisset
@isset($transactions)
     @foreach ($transactions as $data)
          <div class="w-full bg-white column  p-10 br-10 box-shadow">
            <div class="row w-full g-10 space-between">
                <img src="{{ asset('users/'.$data->user->photo.'') }}" alt="" class="h-50 w-50 clip-circle circle">
            <div class="column g-2 m-right-auto">
                <a href="{{ url('admins/user?id='.$data->user->id.'') }}" class="no-u bold font-1 c-green">{{ $data->user->username }}</a>
                <div class="row text-average text-dim align-center g-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="CurrentColor" viewBox="0 0 256 256"><path d="M224,48H32a8,8,0,0,0-8,8V192a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A8,8,0,0,0,224,48Zm-8,144H40V74.19l82.59,75.71a8,8,0,0,0,10.82,0L216,74.19V192Z"></path></svg>

                    {{ $data->user->email }}
                </div>
                   <div class="row text-average text-dim align-center g-2">
                   <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="CurrentColor" viewBox="0 0 256 256"><path d="M232,136.66A104.12,104.12,0,1,1,119.34,24,8,8,0,0,1,120.66,40,88.12,88.12,0,1,0,216,135.34,8,8,0,0,1,232,136.66ZM120,72v56a8,8,0,0,0,8,8h56a8,8,0,0,0,0-16H136V72a8,8,0,0,0-16,0Zm40-24a12,12,0,1,0-12-12A12,12,0,0,0,160,48Zm36,24a12,12,0,1,0-12-12A12,12,0,0,0,196,72Zm24,36a12,12,0,1,0-12-12A12,12,0,0,0,220,108Z"></path></svg>
                    Submitted
                    {{ $data->frame }}
                </div>
            </div>
            <div class="status {{ $data->status == 'success' ? 'green' : ($data->status == 'rejected' ? 'red' : 'gold') }}">{{ $data->status }}</div>
            </div>
            <hr>
            <div class="row m-top-10 w-full g-10 space-between">
                <div class="column g-2">
                    <div class="row m-right-auto align-center g-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="rgba(108,92,230)" viewBox="0 0 256 256"><path d="M239.76,158.06,217.28,68.12A16,16,0,0,0,201.75,56H136V40a16,16,0,0,0-16-16H80A16,16,0,0,0,64,40V56H54.25A16,16,0,0,0,38.72,68.12L16.24,158.06A7.93,7.93,0,0,0,16,160v32a16,16,0,0,0,16,16H224a16,16,0,0,0,16-16V160A7.93,7.93,0,0,0,239.76,158.06ZM80,40h40V56H80ZM54.25,72h147.5l20,80H34.25ZM32,192V168H224v24ZM64,96a8,8,0,0,1,8-8H88a8,8,0,0,1,0,16H72A8,8,0,0,1,64,96Zm48,0a8,8,0,0,1,8-8h16a8,8,0,0,1,0,16H120A8,8,0,0,1,112,96Zm48,0a8,8,0,0,1,8-8h16a8,8,0,0,1,0,16H168A8,8,0,0,1,160,96ZM64,128a8,8,0,0,1,8-8H88a8,8,0,0,1,0,16H72A8,8,0,0,1,64,128Zm48,0a8,8,0,0,1,8-8h16a8,8,0,0,1,0,16H120A8,8,0,0,1,112,128Zm48,0a8,8,0,0,1,8-8h16a8,8,0,0,1,0,16H168A8,8,0,0,1,160,128Z"></path></svg>

                        Transaction Type
                    </div>
                    <strong class="font-1 m-right-auto">{{ $data->type }}</strong>
                </div>
                 <div class="column g-2">
                    <div class="row m-left-auto align-center g-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="orangered  " viewBox="0 0 256 256"><path d="M216,40H40A16,16,0,0,0,24,56V200a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40Zm0,16V96H40V56ZM40,112H96v88H40Zm176,88H112V112H216v88Z"></path></svg>

                        Transaction Class
                    </div>
                    <strong class="font-1 m-left-auto">{{ $data->class }}</strong>
                </div>
            </div>
            @if (str_contains(strtolower($data->type),'withdrawal'))
                 <div class="row m-top-10 w-full g-10 space-between">
                <div class="column g-2">
                    <div class="row m-right-auto align-center g-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="blue" viewBox="0 0 256 256"><path d="M224,88H175.4l8.47-46.57a8,8,0,0,0-15.74-2.86l-9,49.43H111.4l8.47-46.57a8,8,0,0,0-15.74-2.86L95.14,88H48a8,8,0,0,0,0,16H92.23L83.5,152H32a8,8,0,0,0,0,16H80.6l-8.47,46.57a8,8,0,0,0,6.44,9.3A7.79,7.79,0,0,0,80,224a8,8,0,0,0,7.86-6.57l9-49.43H144.6l-8.47,46.57a8,8,0,0,0,6.44,9.3A7.79,7.79,0,0,0,144,224a8,8,0,0,0,7.86-6.57l9-49.43H208a8,8,0,0,0,0-16H163.77l8.73-48H224a8,8,0,0,0,0-16Zm-76.5,64H99.77l8.73-48h47.73Z"></path></svg>
                     
                        Account Number
                    </div>
                    <strong class="font-1 m-right-auto">{{ $data->json->data->bank->account_number }} <svg onclick="copy('{{ $data->json->data->bank->account_number }}')" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000000" viewBox="0 0 256 256"><path d="M216,32H88a8,8,0,0,0-8,8V80H40a8,8,0,0,0-8,8V216a8,8,0,0,0,8,8H168a8,8,0,0,0,8-8V176h40a8,8,0,0,0,8-8V40A8,8,0,0,0,216,32Zm-8,128H176V88a8,8,0,0,0-8-8H96V48H208Z"></path></svg>
                    </strong>
                </div>
                 <div class="column g-2">
                    <div class="row m-left-auto align-center g-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="#4caf50" viewBox="0 0 256 256"><path d="M24,104H48v64H32a8,8,0,0,0,0,16H224a8,8,0,0,0,0-16H208V104h24a8,8,0,0,0,4.19-14.81l-104-64a8,8,0,0,0-8.38,0l-104,64A8,8,0,0,0,24,104Zm40,0H96v64H64Zm80,0v64H112V104Zm48,64H160V104h32ZM128,41.39,203.74,88H52.26ZM248,208a8,8,0,0,1-8,8H16a8,8,0,0,1,0-16H240A8,8,0,0,1,248,208Z"></path></svg>

                        Bank Name
                    </div>
                    <strong class="font-1 m-left-auto">{{ $data->json->data->bank->bank_name }}</strong>
                </div>
            </div>
              <div class="row m-top-10 w-full g-10 space-between">
                <div class="column g-2">
                    <div class="row m-right-auto align-center g-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="pink" viewBox="0 0 256 256"><path d="M216,40H40A16,16,0,0,0,24,56V192a16,16,0,0,0,16,16H56v16a8,8,0,0,0,16,0V208H184v16a8,8,0,0,0,16,0V208h16a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40Zm0,152H40V56H216v64H199.32a48,48,0,1,0,0,16H216v56Zm-50.16-72a16,16,0,1,0,0,16H183a32,32,0,1,1,0-16Z"></path></svg>

                        Account Holder Name
                    </div>
                    <strong class="font-1 m-right-auto">{{ $data->json->data->bank->account_name }}</strong>
                </div>
                 <div class="column g-2">
                    <div class="row m-left-auto align-center g-2">
                     <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="orange" viewBox="0 0 256 256"><path d="M224,64H32A16,16,0,0,0,16,80v72a16,16,0,0,0,16,16H56v32a8,8,0,0,0,16,0V168H184v32a8,8,0,0,0,16,0V168h24a16,16,0,0,0,16-16V80A16,16,0,0,0,224,64Zm0,64.69L175.31,80H224ZM80.69,80l72,72H103.31L32,80.69V80ZM32,103.31,80.69,152H32ZM224,152H175.31l-72-72h49.38L224,151.32V152Z"></path></svg>

                      Gateway
                    </div>
                    <strong class="font-1 m-left-auto">Local Bank</strong>
                </div>
                
            </div>
            @endif
              @if (str_contains(strtolower($data->type),'deposit') && $data->gateway == 'manual')
                 <div class="row m-top-10 w-full g-10 space-between">
               
                 <div class="column g-2">
                    <div class="row m-right-auto align-center g-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="#4caf50" viewBox="0 0 256 256"><path d="M24,104H48v64H32a8,8,0,0,0,0,16H224a8,8,0,0,0,0-16H208V104h24a8,8,0,0,0,4.19-14.81l-104-64a8,8,0,0,0-8.38,0l-104,64A8,8,0,0,0,24,104Zm40,0H96v64H64Zm80,0v64H112V104Zm48,64H160V104h32ZM128,41.39,203.74,88H52.26ZM248,208a8,8,0,0,1-8,8H16a8,8,0,0,1,0-16H240A8,8,0,0,1,248,208Z"></path></svg>

                        Bank Sent From
                    </div>
                    <strong class="font-1 m-right-auto">{{ $data->json->data->bank->bank_name }}</strong>
                </div>
                 <div class="column g-2">
                    <div class="row m-left-auto align-center g-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="pink" viewBox="0 0 256 256"><path d="M216,40H40A16,16,0,0,0,24,56V192a16,16,0,0,0,16,16H56v16a8,8,0,0,0,16,0V208H184v16a8,8,0,0,0,16,0V208h16a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40Zm0,152H40V56H216v64H199.32a48,48,0,1,0,0,16H216v56Zm-50.16-72a16,16,0,1,0,0,16H183a32,32,0,1,1,0-16Z"></path></svg>

                        Name on Account
                    </div>
                    <strong class="font-1 m-left-auto">{{ $data->json->data->bank->account_name }}</strong>
                </div>
            </div>
            
            @endif
            <div class="row w-full m-top-10 align-center space-between">
              <strong class="desc m-left-auto c-green">{!! Currency($data->user->id)  !!}{{ number_format($data->amount,2) }}</strong>
            </div>
           
           @if ($data->status == 'pending')
           
               <hr> 
               
               <div class="row w-full g-10 align-center space-between">
                <button onclick="
                @if(str_contains(strtolower($data->type),'deposit'))
                let data=`<div class='align-center column g-5 text-center'>
                  <svg xmlns='http://www.w3.org/2000/svg' width='50' height='50' fill='blue' viewBox='0 0 256 256'><path d='M208,40H48A16,16,0,0,0,32,56v56c0,52.72,25.52,84.67,46.93,102.19,23.06,18.86,46,25.26,47,25.53a8,8,0,0,0,4.2,0c1-.27,23.91-6.67,47-25.53C198.48,196.67,224,164.72,224,112V56A16,16,0,0,0,208,40Zm-34.32,69.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z'></path></svg>
                  <strong class='desc c-blue'>Security Check</strong>
                 <span> Are you sure you want to approve this deposit, <strong class='desc c-green'>{{ $data->user->username }}</strong> would be creditted the sum of <strong class='desc c-green'>{!! Currency($data->user->id)  !!}{{ number_format($data->amount,2) }}</strong> into his/her deposit wallet</span></div>
                <button onclick=&quot;GetRequest(event,'{{ url('admins/get/transaction/approve?id='.$data->id.'') }}',this,MyFunc.Actioned)&quot; class='btn-green-3d c-white w-full clip-5 g-5 br-5'>Yes! i confirm to approve this deposit</button>
                `;
                PopUp(data);


                @else
                   let data=`<div class='align-center column g-5 text-center'>
                  <svg xmlns='http://www.w3.org/2000/svg' width='50' height='50' fill='blue' viewBox='0 0 256 256'><path d='M208,40H48A16,16,0,0,0,32,56v56c0,52.72,25.52,84.67,46.93,102.19,23.06,18.86,46,25.26,47,25.53a8,8,0,0,0,4.2,0c1-.27,23.91-6.67,47-25.53C198.48,196.67,224,164.72,224,112V56A16,16,0,0,0,208,40Zm-34.32,69.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z'></path></svg>
                  <strong class='desc c-blue'>Security Check</strong>
                 <span> Are you sure you want to approve this withdrawal, <strong class='desc c-green'>{{ $data->user->username }}</strong> would be notified that his/her withdrawal has been approved so it is advisable to send the funds before confirming else reject this withdrawal.</span></div>
                <button onclick=&quot;GetRequest(event,'{{ url('admins/get/transaction/approve?id='.$data->id.'') }}',this,MyFunc.Actioned)&quot; class='btn-green-3d c-white w-full clip-5 g-5 br-5'>Yes! i confirm to approve this withdrawal</button>
                `;
                PopUp(data);

                @endif
                " class="btn-green-3d c-white clip-5 g-5 br-5">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="CurrentColor" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z"></path></svg>

                  Approve
                </button>
                 <button onclick="
                @if(str_contains(strtolower($data->type),'deposit'))
                let data=`<div class='align-center column g-5 text-center'>
                  <svg xmlns='http://www.w3.org/2000/svg' width='50' height='50' fill='blue' viewBox='0 0 256 256'><path d='M208,40H48A16,16,0,0,0,32,56v56c0,52.72,25.52,84.67,46.93,102.19,23.06,18.86,46,25.26,47,25.53a8,8,0,0,0,4.2,0c1-.27,23.91-6.67,47-25.53C198.48,196.67,224,164.72,224,112V56A16,16,0,0,0,208,40Zm-34.32,69.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z'></path></svg>
                  <strong class='desc c-blue'>Security Check</strong>
                 <span> Are you sure you want to reject this deposit, <strong class='desc c-green'>{{ $data->user->username }}</strong> would be notified that his/her deposit has been rejected.</span></div>
                <button onclick=&quot;GetRequest(event,'{{ url('admins/get/transaction/reject?id='.$data->id.'') }}',this,MyFunc.Actioned)&quot; class='btn-red-3d c-white w-full clip-5 g-5 br-5'>Yes! i confirm to reject this deposit</button>
                `;
                PopUp(data);


                @else
                   let data=`<div class='align-center column g-5 text-center'>
                  <svg xmlns='http://www.w3.org/2000/svg' width='50' height='50' fill='blue' viewBox='0 0 256 256'><path d='M208,40H48A16,16,0,0,0,32,56v56c0,52.72,25.52,84.67,46.93,102.19,23.06,18.86,46,25.26,47,25.53a8,8,0,0,0,4.2,0c1-.27,23.91-6.67,47-25.53C198.48,196.67,224,164.72,224,112V56A16,16,0,0,0,208,40Zm-34.32,69.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z'></path></svg>
                  <strong class='desc c-blue'>Security Check</strong>
                 <span> Are you sure you want to approve this withdrawal, <strong class='desc c-green'>{{ $data->user->username }}</strong> would be refunded back the sum of <strong class='desc c-green'>{!! Currency($data->user->id)  !!}{{ number_format($data->amount,2) }}</strong> into his/her {{ ucfirst(str_replace('_balance','',$data->json->wallet)) }} Wallet.</span></div>
                <button onclick=&quot;GetRequest(event,'{{ url('admins/get/transaction/reject?id='.$data->id.'') }}',this,MyFunc.Actioned)&quot; class='btn-red-3d c-white w-full clip-5 g-5 br-5'>Yes! i confirm to reject this withdrawal</button>
                `;
                PopUp(data);

                @endif
                " class="btn-red-3d clip-5 g-5 br-5">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="CurrentColor" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm37.66,130.34a8,8,0,0,1-11.32,11.32L128,139.31l-26.34,26.35a8,8,0,0,1-11.32-11.32L116.69,128,90.34,101.66a8,8,0,0,1,11.32-11.32L128,116.69l26.34-26.35a8,8,0,0,1,11.32,11.32L139.31,128Z"></path></svg>

                  Reject
                </button>
               </div>
           @endif
          </div>
      @endforeach
          @if ($transactions->hasMorePages())
              @include('components.sections',[
                'infinite_loading' => true,
                'page' => $transactions->currentPage() + 1
              ])
          @endif
@endisset
@isset($users)
     @foreach ($users as $data)
             <div class="column w-full g-10 p-10 br-10 bg-white box-shadow">
                <div class="row w-full g-10 space-between">
                    <img src="{{ asset('users/'.$data->photo.'') }}" alt="" class="h-50 w-50 circle clip-circle">
                <div class="column g-2 m-right-auto">
                    <strong onclick="window.location.href='{{ url('admins/user?id='.$data->id.'') }}'" class="font-1 no-select pointer c-green u">{{ $data->username }}</strong>
                <span class="row text-dim text-average g-2 align-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#708090" viewBox="0 0 256 256"><path d="M224,48H32a8,8,0,0,0-8,8V192a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A8,8,0,0,0,224,48ZM98.71,128,40,181.81V74.19Zm11.84,10.85,12,11.05a8,8,0,0,0,10.82,0l12-11.05,58,53.15H52.57ZM157.29,128,216,74.18V181.82Z"></path></svg>

                    {{ $data->email }}</span>
                     <span class="row text-dim text-average g-2 align-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#000000" viewBox="0 0 256 256"><path d="M232,136.66A104.12,104.12,0,1,1,119.34,24,8,8,0,0,1,120.66,40,88.12,88.12,0,1,0,216,135.34,8,8,0,0,1,232,136.66ZM120,72v56a8,8,0,0,0,8,8h56a8,8,0,0,0,0-16H136V72a8,8,0,0,0-16,0Zm40-24a12,12,0,1,0-12-12A12,12,0,0,0,160,48Zm36,24a12,12,0,1,0-12-12A12,12,0,0,0,196,72Zm24,36a12,12,0,1,0-12-12A12,12,0,0,0,220,108Z"></path></svg>
                        Registered 
                    {{ $data->frame }}</span>
                </div>
                <div class="status {{ $data->status == 'active' ? 'green' : 'red' }}">{{ $data->status }}</div>
                </div>
                <hr>
                <div class="grid w-full g-10 place-center grid-2">
                    <div class="column br-10 align-center g-5 bg-dim no-select w-full p-10">
                        <span>Activities Balance</span>
                        <strong class="desc c-green">{!! Currency($data->id)  !!}{{ number_format($data->activities_balance,2) }}</strong>
                    </div>
                     <div class="column br-10 align-center g-5 bg-dim no-select w-full p-10">
                        <span>Affiliate Balance</span>
                        <strong class="desc c-green">{!! Currency($data->id)  !!}{{ number_format($data->affiliate_balance,2) }}</strong>
                    </div>
                     <div class="column br-10 align-center g-5 bg-dim no-select w-full p-10">
                        <span>Deposit Balance</span>
                        <strong class="desc c-green">{!! Currency($data->id)  !!}{{ number_format($data->deposit_balance,2) }}</strong>
                    </div>
                     <div class="column br-10 align-center g-5 bg-dim no-select w-full p-10">
                        <span>Last Deposit</span>
                        <strong class="desc c-green">{!! Currency($data->id)  !!}{{ number_format($data->last_deposit,2) }}</strong>
                    </div>
                </div>
                <div class="row align-center g-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000" viewBox="0 0 256 256"><path d="M200,112a8,8,0,0,1-8,8H152a8,8,0,0,1,0-16h40A8,8,0,0,1,200,112Zm-8,24H152a8,8,0,0,0,0,16h40a8,8,0,0,0,0-16Zm40-80V200a16,16,0,0,1-16,16H40a16,16,0,0,1-16-16V56A16,16,0,0,1,40,40H216A16,16,0,0,1,232,56ZM216,200V56H40V200H216Zm-80.26-34a8,8,0,1,1-15.5,4c-2.63-10.26-13.06-18-24.25-18s-21.61,7.74-24.25,18a8,8,0,1,1-15.5-4,39.84,39.84,0,0,1,17.19-23.34,32,32,0,1,1,45.12,0A39.76,39.76,0,0,1,135.75,166ZM96,136a16,16,0,1,0-16-16A16,16,0,0,0,96,136Z"></path></svg>
                    <span>Full Name:</span>
                    <strong class="font-1 c-green">{{ $data->name }}</strong>
                </div>
                <div class="row align-center g-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000" viewBox="0 0 256 256"><path d="M253.66,90.34l-40-40a8,8,0,0,0-11.32,0L168,84.69,133.66,50.34a8,8,0,0,0-11.32,0L88,84.69,53.66,50.34a8,8,0,0,0-11.32,0l-40,40a8,8,0,0,0,0,11.32l40,40a8,8,0,0,0,11.32,0L88,107.31,116.69,136,82.34,170.34a8,8,0,0,0,0,11.32l40,40a8,8,0,0,0,11.32,0l40-40a8,8,0,0,0,0-11.32L139.31,136,168,107.31l34.34,34.35a8,8,0,0,0,11.32,0l40-40A8,8,0,0,0,253.66,90.34ZM48,124.69,19.31,96,48,67.31,76.69,96Zm80,80L99.31,176,128,147.31,156.69,176Zm0-80L99.31,96,128,67.31,156.69,96Zm80,0L179.31,96,208,67.31,236.69,96Z"></path></svg>
                    <span>Uniqid/User ID:</span>
                    <strong class="font-1 c-green">{{ $data->uniqid }}</strong>
                </div>
                <div class="row align-center g-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000" viewBox="0 0 256 256"><path d="M176,16H80A24,24,0,0,0,56,40V216a24,24,0,0,0,24,24h96a24,24,0,0,0,24-24V40A24,24,0,0,0,176,16Zm8,200a8,8,0,0,1-8,8H80a8,8,0,0,1-8-8V40a8,8,0,0,1,8-8h96a8,8,0,0,1,8,8ZM140,60a12,12,0,1,1-12-12A12,12,0,0,1,140,60Z"></path></svg>
                    <span>Phone Number:</span>
                    <strong class="font-1 c-green">{{ $data->phone }}</strong>
                </div>
                <div class="row align-center g-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000" viewBox="0 0 256 256"><path d="M216,64H56a8,8,0,0,1,0-16H192a8,8,0,0,0,0-16H56A24,24,0,0,0,32,56V184a24,24,0,0,0,24,24H216a16,16,0,0,0,16-16V80A16,16,0,0,0,216,64Zm0,128H56a8,8,0,0,1-8-8V78.63A23.84,23.84,0,0,0,56,80H216Zm-48-60a12,12,0,1,1,12,12A12,12,0,0,1,168,132Z"></path></svg>
                     <span>Total Withdrawn:</span>
                    <strong class="font-1 c-green">{!! Currency($data->id)  !!}{{ number_format($data->total_withdrawn,2) }}</strong>
                </div>
                 <div class="row align-center g-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000" viewBox="0 0 256 256"><path d="M223.68,66.15,135.68,18a15.88,15.88,0,0,0-15.36,0l-88,48.17a16,16,0,0,0-8.32,14v95.64a16,16,0,0,0,8.32,14l88,48.17a15.88,15.88,0,0,0,15.36,0l88-48.17a16,16,0,0,0,8.32-14V80.18A16,16,0,0,0,223.68,66.15ZM128,32l80.34,44-29.77,16.3-80.35-44ZM128,120,47.66,76l33.9-18.56,80.34,44ZM40,90l80,43.78v85.79L40,175.82Zm176,85.78h0l-80,43.79V133.82l32-17.51V152a8,8,0,0,0,16,0V107.55L216,90v85.77Z"></path></svg>
                     <span>Package:</span>
                    <strong class="font-1 c-green">{{ $data->package->name }}</strong>
                </div>
              
                  <div class="row align-center g-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000" viewBox="0 0 256 256"><path d="M117.25,157.92a60,60,0,1,0-66.5,0A95.83,95.83,0,0,0,3.53,195.63a8,8,0,1,0,13.4,8.74,80,80,0,0,1,134.14,0,8,8,0,0,0,13.4-8.74A95.83,95.83,0,0,0,117.25,157.92ZM40,108a44,44,0,1,1,44,44A44.05,44.05,0,0,1,40,108Zm210.14,98.7a8,8,0,0,1-11.07-2.33A79.83,79.83,0,0,0,172,168a8,8,0,0,1,0-16,44,44,0,1,0-16.34-84.87,8,8,0,1,1-5.94-14.85,60,60,0,0,1,55.53,105.64,95.83,95.83,0,0,1,47.22,37.71A8,8,0,0,1,250.14,206.7Z"></path></svg>
                     <span>Referred By:</span>
                    <strong {!! ($data->ref ?? '') == '' ? '' : 'onclick="window.location.href=&quot;'.url('admins/user?id='.($data->ref_id ?? '').'').'&quot;"' !!} class="font-1 c-green no-select {{ $data->ref == '' ? '' : 'u pointer' }}">{{ $data->ref == '' ? 'None' : $data->ref }}</strong>
                </div>
                  <div class="row align-center g-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000" viewBox="0 0 256 256"><path d="M117.25,157.92a60,60,0,1,0-66.5,0A95.83,95.83,0,0,0,3.53,195.63a8,8,0,1,0,13.4,8.74,80,80,0,0,1,134.14,0,8,8,0,0,0,13.4-8.74A95.83,95.83,0,0,0,117.25,157.92ZM40,108a44,44,0,1,1,44,44A44.05,44.05,0,0,1,40,108Zm210.14,98.7a8,8,0,0,1-11.07-2.33A79.83,79.83,0,0,0,172,168a8,8,0,0,1,0-16,44,44,0,1,0-16.34-84.87,8,8,0,1,1-5.94-14.85,60,60,0,0,1,55.53,105.64,95.83,95.83,0,0,1,47.22,37.71A8,8,0,0,1,250.14,206.7Z"></path></svg>
                     <span>Total Downlines:</span>
                    <strong class="font-1 c-green">{{ number_format($data->total_downlines) }}</strong>
                </div>
                <button onclick="window.location.href='{{ url('admins/user?id='.$data->id.'') }}'" class="btn-green-3d c-white m-left-auto clip-5 br-5">View More....</button>
                
             </div>
         @endforeach 
         @if ($users->hasMorePages())
             @include('components.sections',[
                'infinite_loading' => true,
                'page' => $users->currentPage() + 1

             ])
         @endif
@endisset
@isset($manage_packages)
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
                      <strong class="font-1 c-green">{!! Currency($data->country)  !!}{{ number_format($data->cost,2) }}</strong>
           </div>
            <div class="column g-2 align-center">
            <div class="row align-center g-2">
             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#6c5ce6" viewBox="0 0 256 256"><path d="M246,98.73l-56-64A8,8,0,0,0,184,32H72a8,8,0,0,0-6,2.73l-56,64a8,8,0,0,0,.17,10.73l112,120a8,8,0,0,0,11.7,0l112-120A8,8,0,0,0,246,98.73ZM222.37,96H180L144,48h36.37ZM74.58,112l30.13,75.33L34.41,112Zm89.6,0L128,202.46,91.82,112ZM96,96l32-42.67L160,96Zm85.42,16h40.17l-70.3,75.33ZM75.63,48H112L76,96H33.63Z"></path></svg>
               Cashback
            </div>
                      @isset($data->cashback)
                          <strong class="font-1 c-green">{!! Currency($data->country)  !!}{{ number_format($data->cashback,2) }}</strong>
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
                          <strong class="font-1 c-green">{!! Currency($data->country)  !!}{{ number_format($data->subordinate,2) }}</strong>
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
                          <strong class="font-1 c-green">{!! Currency($data->country)  !!}{{ number_format($data->first_indirect,2) }}</strong>
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
                          <strong class="font-1 c-green">{!! Currency($data->country)  !!}{{ number_format($data->article_writing,2) }}</strong>
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
                          <strong class="font-1 c-green">{!! Currency($data->country)  !!}{{ number_format($data->earning_per_click,2) }}</strong>
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
                          <strong class="font-1 c-green">{!! Currency($data->country)  !!}{{ number_format($data->tiktok_monitizing,2) }}</strong>
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
                          <strong class="font-1 c-green">{!! Currency($data->country)  !!}{{ number_format($data->casino_game,2) }}</strong>
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
                          <strong class="font-1 c-green">{!! Currency($data->country)  !!}{{ number_format($data->daily_advert,2) }}</strong>
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
@endisset
@isset($task_proofs)
    @foreach ($proofs as $data)
              <div class="w-full box--shadow br-10 p-10 bg-white column g-10">
                <div class="row w-full g-10 space-between">
                <img src="{{ asset('users/'.$data->user->photo.'') }}" alt="" class="h-50 w-50 clip-circle circle">
            <div class="column g-2 m-right-auto">
                <a href="{{ url('admins/user?id='.$data->user->id.'') }}" class="no-u bold font-1 c-green">{{ $data->user->username }}</a>
               
                   <div class="row text-average text-dim align-center g-2">
                   <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="CurrentColor" viewBox="0 0 256 256"><path d="M232,136.66A104.12,104.12,0,1,1,119.34,24,8,8,0,0,1,120.66,40,88.12,88.12,0,1,0,216,135.34,8,8,0,0,1,232,136.66ZM120,72v56a8,8,0,0,0,8,8h56a8,8,0,0,0,0-16H136V72a8,8,0,0,0-16,0Zm40-24a12,12,0,1,0-12-12A12,12,0,0,0,160,48Zm36,24a12,12,0,1,0-12-12A12,12,0,0,0,196,72Zm24,36a12,12,0,1,0-12-12A12,12,0,0,0,220,108Z"></path></svg>
                    Submitted
                    {{ $data->frame }}
                </div>
            </div>
            <div class="status {{ $data->status == 'success' ? 'green' : ($data->status == 'rejected' ? 'red' : 'gold') }}">{{ $data->status }}</div>
            </div>
            <hr>
            <div class="row g-5 align-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="rgb(108,92,230)" viewBox="0 0 256 256"><path d="M253.66,90.34l-40-40a8,8,0,0,0-11.32,0L168,84.69,133.66,50.34a8,8,0,0,0-11.32,0L88,84.69,53.66,50.34a8,8,0,0,0-11.32,0l-40,40a8,8,0,0,0,0,11.32l40,40a8,8,0,0,0,11.32,0L88,107.31,116.69,136,82.34,170.34a8,8,0,0,0,0,11.32l40,40a8,8,0,0,0,11.32,0l40-40a8,8,0,0,0,0-11.32L139.31,136,168,107.31l34.34,34.35a8,8,0,0,0,11.32,0l40-40A8,8,0,0,0,253.66,90.34ZM48,124.69,19.31,96,48,67.31,76.69,96Zm80,80L99.31,176,128,147.31,156.69,176Zm0-80L99.31,96,128,67.31,156.69,96Zm80,0L179.31,96,208,67.31,236.69,96Z"></path></svg>
                <span>Task ID:</span>
                <strong class="font-1 c-green">{{ $data->json->id }}</strong>
            </div>
            <div class="row g-5 align-center">
               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#6c5ce6" viewBox="0 0 256 256"><path d="M184,32H72A16,16,0,0,0,56,48V224a8,8,0,0,0,12.24,6.78L128,193.43l59.77,37.35A8,8,0,0,0,200,224V48A16,16,0,0,0,184,32Zm0,16V161.57l-51.77-32.35a8,8,0,0,0-8.48,0L72,161.56V48ZM132.23,177.22a8,8,0,0,0-8.48,0L72,209.57V180.43l56-35,56,35v29.14Z"></path></svg>
                <span>Task Title:</span>
                <strong class="font-1 c-green">{{ $data->json->title }}</strong>
            </div>
            <div class="row g-5 align-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#6c5ce6" viewBox="0 0 256 256"><path d="M240,88.23a54.43,54.43,0,0,1-16,37L189.25,160a54.27,54.27,0,0,1-38.63,16h-.05A54.63,54.63,0,0,1,96,119.84a8,8,0,0,1,16,.45A38.62,38.62,0,0,0,150.58,160h0a38.39,38.39,0,0,0,27.31-11.31l34.75-34.75a38.63,38.63,0,0,0-54.63-54.63l-11,11A8,8,0,0,1,135.7,59l11-11A54.65,54.65,0,0,1,224,48,54.86,54.86,0,0,1,240,88.23ZM109,185.66l-11,11A38.41,38.41,0,0,1,70.6,208h0a38.63,38.63,0,0,1-27.29-65.94L78,107.31A38.63,38.63,0,0,1,144,135.71a8,8,0,0,0,16,.45A54.86,54.86,0,0,0,144,96a54.65,54.65,0,0,0-77.27,0L32,130.75A54.62,54.62,0,0,0,70.56,224h0a54.28,54.28,0,0,0,38.64-16l11-11A8,8,0,0,0,109,185.66Z"></path></svg>
                <span>Task Link:</span>
                <strong class="font-1 c-green"><a target="_blank" href="{{ $data->json->link }}" class="c-inherit">Visit Link</a></strong>
            </div>
            <div class="row g-5 align-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#6c5ce6" viewBox="0 0 256 256"><path d="M207.58,63.84C186.85,53.48,159.33,48,128,48S69.15,53.48,48.42,63.84,16,88.78,16,104v48c0,15.22,11.82,29.85,32.42,40.16S96.67,208,128,208s58.85-5.48,79.58-15.84S240,167.22,240,152V104C240,88.78,228.18,74.15,207.58,63.84ZM128,64c62.64,0,96,23.23,96,40s-33.36,40-96,40-96-23.23-96-40S65.36,64,128,64Zm-8,95.86v32c-19-.62-35-3.42-48-7.49V153.05A203.43,203.43,0,0,0,120,159.86Zm16,0a203.43,203.43,0,0,0,48-6.81v31.31c-13,4.07-29,6.87-48,7.49ZM32,152V133.53a82.88,82.88,0,0,0,16.42,10.63c2.43,1.21,5,2.35,7.58,3.43V178C40.17,170.16,32,160.29,32,152Zm168,26V147.59c2.61-1.08,5.15-2.22,7.58-3.43A82.88,82.88,0,0,0,224,133.53V152C224,160.29,215.83,170.16,200,178Z"></path></svg>
                 <span>Task Earning:</span>
                <strong class="font-1 c-green">{!! Currency($data->user->id)  !!}{{ number_format($data->json->reward,2) }}</strong>
            </div>

              </div>
          @endforeach
          @if ($proofs->hasMorePages())
              @include('components.sections',[
                'infinite_loading' => true,
                'page' => $proofs->currentPage() + 1
              ])
          @endif
@endisset
@isset($logs)
      @foreach ($logs as $data)
                <div class="w-full br-10 bg-white box-shadow p-10 column g-10">
                    <div class="row g-10 space-between">
                        <img class="h-50 w-50 circle clip-circle" src="{{ asset('users/'.$data->user->photo.'') }}" alt="">
                        <div class="column g-2 m-right-auto">
                <a href="{{ url('admins/user?id='.$data->user->id.'') }}" class="no-u bold font-1 c-green">{{ $data->user->username }}</a>
                <div class="row text-average text-dim align-center g-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="CurrentColor" viewBox="0 0 256 256"><path d="M224,48H32a8,8,0,0,0-8,8V192a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A8,8,0,0,0,224,48Zm-8,144H40V74.19l82.59,75.71a8,8,0,0,0,10.82,0L216,74.19V192Z"></path></svg>

                    {{ $data->user->email }}
                </div>
                   <div class="row text-average text-dim align-center g-2">
                   <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="CurrentColor" viewBox="0 0 256 256"><path d="M232,136.66A104.12,104.12,0,1,1,119.34,24,8,8,0,0,1,120.66,40,88.12,88.12,0,1,0,216,135.34,8,8,0,0,1,232,136.66ZM120,72v56a8,8,0,0,0,8,8h56a8,8,0,0,0,0-16H136V72a8,8,0,0,0-16,0Zm40-24a12,12,0,1,0-12-12A12,12,0,0,0,160,48Zm36,24a12,12,0,1,0-12-12A12,12,0,0,0,196,72Zm24,36a12,12,0,1,0-12-12A12,12,0,0,0,220,108Z"></path></svg>
                    Logged
                    {{ $data->frame }}
                </div>
            </div>
            <div class="status {{ $data->status == 'success' ? 'green' : ($data->status == 'rejected' ? 'red' : 'gold') }}">{{ $data->status }}</div>
           
                    </div>
                    <hr>
                    <div class="row align-center g-5 w-full">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#6c5ce6" viewBox="0 0 256 256"><path d="M232,112H136V88h8a16,16,0,0,0,16-16V40a16,16,0,0,0-16-16H112A16,16,0,0,0,96,40V72a16,16,0,0,0,16,16h8v24H24a8,8,0,0,0,0,16H56v32H48a16,16,0,0,0-16,16v32a16,16,0,0,0,16,16H80a16,16,0,0,0,16-16V176a16,16,0,0,0-16-16H72V128H184v32h-8a16,16,0,0,0-16,16v32a16,16,0,0,0,16,16h32a16,16,0,0,0,16-16V176a16,16,0,0,0-16-16h-8V128h32a8,8,0,0,0,0-16ZM112,40h32V72H112ZM80,208H48V176H80Zm128,0H176V176h32Z"></path></svg>

                        <span>IP Address:</span>
                        <strong class="desc c-green">{{ $data->ip }}</strong>
                    </div>
                </div>
            @endforeach
            @if ($logs->hasMorePages())
                @include('components.sections',[
                    'infinite_loading' => true,
                    'page' => $logs->currentPage() + 1
                ])
            @endif
@endisset
@isset($notifications)
     @foreach ($notifications as $data)
                <div class="w-full br-10 bg-white box-shadow p-10 column g-10">
                    <div class="row g-10 align-center space-between">
                      <div class="h-50 circle w-50 bg-green column justify-center c-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="white" viewBox="0 0 256 256"><path d="M16,176a8,8,0,0,1,8-8h8V152a96.12,96.12,0,0,1,88-95.66V40H104a8,8,0,0,1,0-16h48a8,8,0,0,1,0,16H136V56.34A96.12,96.12,0,0,1,224,152v16h8a8,8,0,0,1,0,16H24A8,8,0,0,1,16,176Zm216,24H24a8,8,0,0,0,0,16H232a8,8,0,0,0,0-16Z"></path></svg>

                      </div>
                        <div class="column g-2 m-right-auto">
               
                   <div class="row text-average text-dim align-center g-2">
                   <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="CurrentColor" viewBox="0 0 256 256"><path d="M232,136.66A104.12,104.12,0,1,1,119.34,24,8,8,0,0,1,120.66,40,88.12,88.12,0,1,0,216,135.34,8,8,0,0,1,232,136.66ZM120,72v56a8,8,0,0,0,8,8h56a8,8,0,0,0,0-16H136V72a8,8,0,0,0-16,0Zm40-24a12,12,0,1,0-12-12A12,12,0,0,0,160,48Zm36,24a12,12,0,1,0-12-12A12,12,0,0,0,196,72Zm24,36a12,12,0,1,0-12-12A12,12,0,0,0,220,108Z"></path></svg>
                   
                    {{ $data->frame }}
                </div>
            </div>
            <div class="status {{ $data->status == 'read' ? 'green' : 'gold' }}">{{ $data->status }}</div>
           
                    </div>
                    <hr>
                    <div class="w-full">
                        {!! $data->message !!}
                    </div>
                   @if ($data->status == 'unread')
                        <button onclick="window.location.href='{{ url('admins/notification/mark/as/read?id='.$data->id.'') }}'" class="btn-green-3d m-left-auto clip-5 br-5 c-white">Mark As Read</button>
                   @endif
                </div>
            @endforeach
            @if ($notifications->hasMorePages())
                @include('components.sections',[
                    'infinite_loading' => true,
                    'page' => $notifications->currentPage() + 1
                ])
            @endif
@endisset
@isset($article_topics)
     @foreach ($topics as $data)
                <div class="w-full br-10 bg-white p-10 box-shadow column g-5">
                    <div class="row space-between align-center g-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#13d816" viewBox="0 0 256 256"><path d="M216,40H40A16,16,0,0,0,24,56V200a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40ZM176,168H80a8,8,0,0,1,0-16h96a8,8,0,0,1,0,16Zm0-32H80a8,8,0,0,1,0-16h96a8,8,0,0,1,0,16Zm0-32H80a8,8,0,0,1,0-16h96a8,8,0,0,1,0,16Z"></path></svg>
                        <strong class="c-green m-right-auto font-1">{{ $data->topic }}</strong>
                        <div class="status {{ $data->status == 'active' ? 'gold' : 'green' }}">{{ $data->status }}</div>
                    </div>
                    <hr>
                      <div class="row align-center g-5">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#ffd700" viewBox="0 0 256 256"><path d="M232,64H208V48a8,8,0,0,0-8-8H56a8,8,0,0,0-8,8V64H24A16,16,0,0,0,8,80V96a40,40,0,0,0,40,40h3.65A80.13,80.13,0,0,0,120,191.61V216H96a8,8,0,0,0,0,16h64a8,8,0,0,0,0-16H136V191.58c31.94-3.23,58.44-25.64,68.08-55.58H208a40,40,0,0,0,40-40V80A16,16,0,0,0,232,64ZM48,120A24,24,0,0,1,24,96V80H48v32q0,4,.39,8ZM232,96a24,24,0,0,1-24,24h-.5a81.81,81.81,0,0,0,.5-8.9V80h24Z"></path></svg>
                       <span>Winner:</span>
                     @if (($data->winner_id ?? '') !== '')
                          <strong onclick="window.location.href='{{ url('admins/user?id='.$data->winner_id.'') }}'" class="c-green u font-1">{{ $data->winner_username }}</strong>
                     @else
                          <strong class="c-green font-1">---</strong>
                     @endif
                    </div>
                    <div class="row align-center g-10 space-between w-full">
                        <span class="text-dim row align-center g-2 text-average">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#708090" viewBox="0 0 256 256"><path d="M232,136.66A104.12,104.12,0,1,1,119.34,24,8,8,0,0,1,120.66,40,88.12,88.12,0,1,0,216,135.34,8,8,0,0,1,232,136.66ZM120,72v56a8,8,0,0,0,8,8h56a8,8,0,0,0,0-16H136V72a8,8,0,0,0-16,0Zm40-24a12,12,0,1,0-12-12A12,12,0,0,0,160,48Zm36,24a12,12,0,1,0-12-12A12,12,0,0,0,196,72Zm24,36a12,12,0,1,0-12-12A12,12,0,0,0,220,108Z"></path></svg>

                            Added {{ $data->frame }}</span>
                        <button onclick="
                        let data=`
                       <svg xmlns='http://www.w3.org/2000/svg' width='50' height='50' fill='red' viewBox='0 0 256 256'><path d='M216,48H176V40a24,24,0,0,0-24-24H104A24,24,0,0,0,80,40v8H40a8,8,0,0,0,0,16h8V208a16,16,0,0,0,16,16H192a16,16,0,0,0,16-16V64h8a8,8,0,0,0,0-16ZM96,40a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8v8H96Zm96,168H64V64H192ZM112,104v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Zm48,0v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Z'></path></svg> 
                        <span class='text-center'>Are you sure you want to delete/remove this topic? This action cannot be undone.</span>
                    <button onclick='window.location.href=&quot;{{ url('admins/get/topic/delete?id='.$data->id.'') }}&quot;' class='btn-red-3d w-full clip-5 g-5 br-5'>Yes! Delete Topic</button>
                        `;
                        PopUp(data);
                        " class="btn-red-3d clip-5 br-5">Remove Topic</button>
                    </div>
                    
                </div>
            @endforeach
            @if ($topics->hasMorePages())
                @include('components.sections',[
                    'infinite_loading' => true,
                    'page' => $topics->CurrentPage() + 1
                ])
            @endif
@endisset
@isset($writers)
       @foreach ($writers as $data)
         
            <div class="w-full box-shadow bg-white br-10 p-10 column g-10">
                  <div class="row w-full g-10 space-between">
                <img src="{{ asset('users/'.$data->user->photo.'') }}" alt="" class="h-50 w-50 clip-circle circle">
            <div class="column g-2 m-right-auto">
                <a href="{{ url('admins/user?id='.$data->user->id.'') }}" class="no-u row align-center g-2 bold font-1 c-green">{{ $data->user->username }}
               @if ($data->winner == 'true')
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="CurrentColor" viewBox="0 0 256 256"><path d="M248,80a28,28,0,1,0-51.12,15.77l-26.79,33L146,73.4a28,28,0,1,0-36.06,0L85.91,128.74l-26.79-33a28,28,0,1,0-26.6,12L47,194.63A16,16,0,0,0,62.78,208H193.22A16,16,0,0,0,209,194.63l14.47-86.85A28,28,0,0,0,248,80ZM128,40a12,12,0,1,1-12,12A12,12,0,0,1,128,40ZM24,80A12,12,0,1,1,36,92,12,12,0,0,1,24,80ZM220,92a12,12,0,1,1,12-12A12,12,0,0,1,220,92Z"></path></svg>

               @endif
                </a>
                <div class="row text-average text-dim align-center g-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="CurrentColor" viewBox="0 0 256 256"><path d="M224,48H32a8,8,0,0,0-8,8V192a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A8,8,0,0,0,224,48Zm-8,144H40V74.19l82.59,75.71a8,8,0,0,0,10.82,0L216,74.19V192Z"></path></svg>

                    {{ $data->user->email }}
                </div>
                   <div class="row text-average text-dim align-center g-2">
                   <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="CurrentColor" viewBox="0 0 256 256"><path d="M232,136.66A104.12,104.12,0,1,1,119.34,24,8,8,0,0,1,120.66,40,88.12,88.12,0,1,0,216,135.34,8,8,0,0,1,232,136.66ZM120,72v56a8,8,0,0,0,8,8h56a8,8,0,0,0,0-16H136V72a8,8,0,0,0-16,0Zm40-24a12,12,0,1,0-12-12A12,12,0,0,0,160,48Zm36,24a12,12,0,1,0-12-12A12,12,0,0,0,196,72Zm24,36a12,12,0,1,0-12-12A12,12,0,0,0,220,108Z"></path></svg>
                    Written
                    {{ $data->frame }}
                </div>
            </div>
           <div class="status bg-dim p-5 br-1000 bold no-select">{{ number_format($data->votes) }} vote(s)</div>
            </div>
            <hr>
            <div class="w-full">
                {!! strlen($data->article) > 200 ? nl2br(substr($data->article,0,200)).'....' : nl2br($data->article) !!}

            </div>
            <div class="w-full align-center row g-10 space-between">
              @if (strlen($data->article) > 200)
                    <button onclick="window.location.href='{{ url('admins/article/read/more?id='.$data->id.'') }}'" class="btn-green-3d clip-5 c-white br-5">Read More...</button>
              
              @endif
              <button onclick="
                        let data=`
                       <svg xmlns='http://www.w3.org/2000/svg' width='50' height='50' fill='red' viewBox='0 0 256 256'><path d='M216,48H176V40a24,24,0,0,0-24-24H104A24,24,0,0,0,80,40v8H40a8,8,0,0,0,0,16h8V208a16,16,0,0,0,16,16H192a16,16,0,0,0,16-16V64h8a8,8,0,0,0,0-16ZM96,40a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8v8H96Zm96,168H64V64H192ZM112,104v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Zm48,0v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Z'></path></svg> 
                        <span class='text-center'>Are you sure you want to delete/remove this article from this writer? This action cannot be undone.</span>
                    <button onclick='window.location.href=&quot;{{ url('admins/get/article/delete?id='.$data->id.'') }}&quot;' class='btn-red-3d w-full clip-5 g-5 br-5'>Yes! Delete Article</button>
                        `;
                        PopUp(data);
                        " class="btn-red-3d m-left-auto clip-5 br-5">Delete Article</button>
            </div>
                </div>   
           @endforeach
           @if ($writers->hasMorePages())
               @include('components.sections',[
                'infinite_loading' => true,
                'page' => $writers->currentPage() + 1
               ])
           @endif
@endisset
@isset($airtime_transactions)
     @foreach ($airtime_transactions as $data)
          <div class="w-full bg-white column  p-10 br-10 box-shadow">
            <div class="row w-full g-10 space-between">
                <img src="{{ asset('users/'.$data->user->photo.'') }}" alt="" class="h-50 w-50 clip-circle circle">
            <div class="column g-2 m-right-auto">
                <a href="{{ url('admins/user?id='.$data->user->id.'') }}" class="no-u bold font-1 c-green">{{ $data->user->username }}</a>
                <div class="row text-average text-dim align-center g-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="CurrentColor" viewBox="0 0 256 256"><path d="M224,48H32a8,8,0,0,0-8,8V192a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A8,8,0,0,0,224,48Zm-8,144H40V74.19l82.59,75.71a8,8,0,0,0,10.82,0L216,74.19V192Z"></path></svg>

                    {{ $data->user->email }}
                </div>
                   <div class="row text-average text-dim align-center g-2">
                   <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="CurrentColor" viewBox="0 0 256 256"><path d="M232,136.66A104.12,104.12,0,1,1,119.34,24,8,8,0,0,1,120.66,40,88.12,88.12,0,1,0,216,135.34,8,8,0,0,1,232,136.66ZM120,72v56a8,8,0,0,0,8,8h56a8,8,0,0,0,0-16H136V72a8,8,0,0,0-16,0Zm40-24a12,12,0,1,0-12-12A12,12,0,0,0,160,48Zm36,24a12,12,0,1,0-12-12A12,12,0,0,0,196,72Zm24,36a12,12,0,1,0-12-12A12,12,0,0,0,220,108Z"></path></svg>
                    Submitted
                    {{ $data->frame }}
                </div>
            </div>
            <div class="status {{ $data->status == 'success' ? 'green' : ($data->status == 'rejected' ? 'red' : 'gold') }}">{{ $data->status }}</div>
            </div>
            <hr>
            <div class="row m-top-10 w-full g-10 space-between">
                <div class="column g-2">
                    <div class="row m-right-auto align-center g-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="rgba(108,92,230)" viewBox="0 0 256 256"><path d="M239.76,158.06,217.28,68.12A16,16,0,0,0,201.75,56H136V40a16,16,0,0,0-16-16H80A16,16,0,0,0,64,40V56H54.25A16,16,0,0,0,38.72,68.12L16.24,158.06A7.93,7.93,0,0,0,16,160v32a16,16,0,0,0,16,16H224a16,16,0,0,0,16-16V160A7.93,7.93,0,0,0,239.76,158.06ZM80,40h40V56H80ZM54.25,72h147.5l20,80H34.25ZM32,192V168H224v24ZM64,96a8,8,0,0,1,8-8H88a8,8,0,0,1,0,16H72A8,8,0,0,1,64,96Zm48,0a8,8,0,0,1,8-8h16a8,8,0,0,1,0,16H120A8,8,0,0,1,112,96Zm48,0a8,8,0,0,1,8-8h16a8,8,0,0,1,0,16H168A8,8,0,0,1,160,96ZM64,128a8,8,0,0,1,8-8H88a8,8,0,0,1,0,16H72A8,8,0,0,1,64,128Zm48,0a8,8,0,0,1,8-8h16a8,8,0,0,1,0,16H120A8,8,0,0,1,112,128Zm48,0a8,8,0,0,1,8-8h16a8,8,0,0,1,0,16H168A8,8,0,0,1,160,128Z"></path></svg>

                        Transaction Type
                    </div>
                    <strong class="font-1 m-right-auto">{{ $data->type }}</strong>
                </div>
                 <div class="column g-2">
                    <div class="row m-left-auto align-center g-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="orangered  " viewBox="0 0 256 256"><path d="M216,40H40A16,16,0,0,0,24,56V200a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40Zm0,16V96H40V56ZM40,112H96v88H40Zm176,88H112V112H216v88Z"></path></svg>

                        Transaction Class
                    </div>
                    <strong class="font-1 m-left-auto">{{ $data->class }}</strong>
                </div>
            </div>
              <div class="row m-top-10 w-full g-10 space-between">
                <div class="column g-2">
                    <div class="row m-right-auto align-center g-2">
                       <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="#6c5ce6" viewBox="0 0 256 256"><path d="M176,16H80A24,24,0,0,0,56,40V216a24,24,0,0,0,24,24h96a24,24,0,0,0,24-24V40A24,24,0,0,0,176,16Zm8,200a8,8,0,0,1-8,8H80a8,8,0,0,1-8-8V40a8,8,0,0,1,8-8h96a8,8,0,0,1,8,8ZM140,60a12,12,0,1,1-12-12A12,12,0,0,1,140,60Z"></path></svg>

                        Mobile Number
                    </div>
                    <strong class="font-1 m-right-auto">{{ $data->json->body->number ?? 'null' }}</strong>
                </div>
                 <div class="column g-2">
                    <div class="row m-left-auto align-center g-2">
                       <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="#6c5ce6" viewBox="0 0 256 256"><path d="M135.16,84.42a8,8,0,0,0-14.32,0l-72,144a8,8,0,0,0,14.31,7.16L77,208h102.1l13.79,27.58A8,8,0,0,0,200,240a8,8,0,0,0,7.15-11.58ZM128,105.89,155.06,160H100.94ZM85,192l8-16h70.1l8,16Zm74.54-98.26a32,32,0,1,0-63,0,8,8,0,1,1-15.74,2.85,48,48,0,1,1,94.46,0,8,8,0,0,1-7.86,6.58,8.74,8.74,0,0,1-1.43-.13A8,8,0,0,1,159.49,93.74ZM64.15,136.21a80,80,0,1,1,127.7,0,8,8,0,0,1-12.76-9.65,64,64,0,1,0-102.18,0,8,8,0,0,1-12.76,9.65Z"></path></svg>

                        Network Provider
                    </div>
                    <strong class="font-1 m-left-auto">{{ $data->json->body->network ?? '' }}</strong>
                </div>
            </div>
              <div class="row m-top-10 w-full g-10 space-between">
                <div class="column g-2">
                    <div class="row m-right-auto align-center g-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="#6c5ce6" viewBox="0 0 256 256"><path d="M224,48H32A16,16,0,0,0,16,64V192a16,16,0,0,0,16,16H224a16,16,0,0,0,16-16V64A16,16,0,0,0,224,48Zm0,16V88H32V64Zm0,128H32V104H224v88Zm-16-24a8,8,0,0,1-8,8H168a8,8,0,0,1,0-16h32A8,8,0,0,1,208,168Zm-64,0a8,8,0,0,1-8,8H120a8,8,0,0,1,0-16h16A8,8,0,0,1,144,168Z"></path></svg>

                       Topup Amount
                    </div>
                    <strong class="font-1 m-right-auto">{!! Currency($data->user->id)  !!}{{ number_format($data->json->body->amount ?? 0,2) }}</strong>
                </div>
                 <div class="column g-2">
                    <div class="row m-left-auto align-center g-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="#6c5ce6" viewBox="0 0 256 256"><path d="M178.16,176H111.32A48,48,0,1,1,25.6,139.19a8,8,0,0,1,12.8,9.61A31.69,31.69,0,0,0,32,168a32,32,0,0,0,64,0,8,8,0,0,1,8-8h74.16a16,16,0,1,1,0,16ZM64,184a16,16,0,0,0,14.08-23.61l35.77-58.14a8,8,0,0,0-2.62-11,32,32,0,1,1,46.1-40.06A8,8,0,1,0,172,44.79a48,48,0,1,0-75.62,55.33L64.44,152c-.15,0-.29,0-.44,0a16,16,0,0,0,0,32Zm128-64a48.18,48.18,0,0,0-18,3.49L142.08,71.6A16,16,0,1,0,128,80l.44,0,35.78,58.15a8,8,0,0,0,11,2.61A32,32,0,1,1,192,200a8,8,0,0,0,0,16,48,48,0,0,0,0-96Z"></path></svg>

                        API Response
                    </div>
                    <strong class="font-1 m-left-auto">ORDER_RECEIVED</strong>
                </div>
            </div>
            @if (str_contains(strtolower($data->type),'withdrawal'))
                 <div class="row m-top-10 w-full g-10 space-between">
                <div class="column g-2">
                    <div class="row m-right-auto align-center g-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="blue" viewBox="0 0 256 256"><path d="M224,88H175.4l8.47-46.57a8,8,0,0,0-15.74-2.86l-9,49.43H111.4l8.47-46.57a8,8,0,0,0-15.74-2.86L95.14,88H48a8,8,0,0,0,0,16H92.23L83.5,152H32a8,8,0,0,0,0,16H80.6l-8.47,46.57a8,8,0,0,0,6.44,9.3A7.79,7.79,0,0,0,80,224a8,8,0,0,0,7.86-6.57l9-49.43H144.6l-8.47,46.57a8,8,0,0,0,6.44,9.3A7.79,7.79,0,0,0,144,224a8,8,0,0,0,7.86-6.57l9-49.43H208a8,8,0,0,0,0-16H163.77l8.73-48H224a8,8,0,0,0,0-16Zm-76.5,64H99.77l8.73-48h47.73Z"></path></svg>
                     
                        Account Number
                    </div>
                    <strong class="font-1 m-right-auto">{{ $data->json->data->bank->account_number }} <svg onclick="copy('{{ $data->json->data->bank->account_number }}')" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000000" viewBox="0 0 256 256"><path d="M216,32H88a8,8,0,0,0-8,8V80H40a8,8,0,0,0-8,8V216a8,8,0,0,0,8,8H168a8,8,0,0,0,8-8V176h40a8,8,0,0,0,8-8V40A8,8,0,0,0,216,32Zm-8,128H176V88a8,8,0,0,0-8-8H96V48H208Z"></path></svg>
                    </strong>
                </div>
                 <div class="column g-2">
                    <div class="row m-left-auto align-center g-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="#4caf50" viewBox="0 0 256 256"><path d="M24,104H48v64H32a8,8,0,0,0,0,16H224a8,8,0,0,0,0-16H208V104h24a8,8,0,0,0,4.19-14.81l-104-64a8,8,0,0,0-8.38,0l-104,64A8,8,0,0,0,24,104Zm40,0H96v64H64Zm80,0v64H112V104Zm48,64H160V104h32ZM128,41.39,203.74,88H52.26ZM248,208a8,8,0,0,1-8,8H16a8,8,0,0,1,0-16H240A8,8,0,0,1,248,208Z"></path></svg>

                        Bank Name
                    </div>
                    <strong class="font-1 m-left-auto">{{ $data->json->data->bank->bank_name }}</strong>
                </div>
            </div>
              <div class="row m-top-10 w-full g-10 space-between">
                <div class="column g-2">
                    <div class="row m-right-auto align-center g-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="pink" viewBox="0 0 256 256"><path d="M216,40H40A16,16,0,0,0,24,56V192a16,16,0,0,0,16,16H56v16a8,8,0,0,0,16,0V208H184v16a8,8,0,0,0,16,0V208h16a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40Zm0,152H40V56H216v64H199.32a48,48,0,1,0,0,16H216v56Zm-50.16-72a16,16,0,1,0,0,16H183a32,32,0,1,1,0-16Z"></path></svg>

                        Account Holder Name
                    </div>
                    <strong class="font-1 m-right-auto">{{ $data->json->data->bank->account_name }}</strong>
                </div>
                 <div class="column g-2">
                    <div class="row m-left-auto align-center g-2">
                     <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="orange" viewBox="0 0 256 256"><path d="M224,64H32A16,16,0,0,0,16,80v72a16,16,0,0,0,16,16H56v32a8,8,0,0,0,16,0V168H184v32a8,8,0,0,0,16,0V168h24a16,16,0,0,0,16-16V80A16,16,0,0,0,224,64Zm0,64.69L175.31,80H224ZM80.69,80l72,72H103.31L32,80.69V80ZM32,103.31,80.69,152H32ZM224,152H175.31l-72-72h49.38L224,151.32V152Z"></path></svg>

                      Gateway
                    </div>
                    <strong class="font-1 m-left-auto">Local Bank</strong>
                </div>
                
            </div>
            @endif
              @if (str_contains(strtolower($data->type),'deposit') && $data->gateway == 'manual')
                 <div class="row m-top-10 w-full g-10 space-between">
               
                 <div class="column g-2">
                    <div class="row m-right-auto align-center g-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="#4caf50" viewBox="0 0 256 256"><path d="M24,104H48v64H32a8,8,0,0,0,0,16H224a8,8,0,0,0,0-16H208V104h24a8,8,0,0,0,4.19-14.81l-104-64a8,8,0,0,0-8.38,0l-104,64A8,8,0,0,0,24,104Zm40,0H96v64H64Zm80,0v64H112V104Zm48,64H160V104h32ZM128,41.39,203.74,88H52.26ZM248,208a8,8,0,0,1-8,8H16a8,8,0,0,1,0-16H240A8,8,0,0,1,248,208Z"></path></svg>

                        Bank Sent From
                    </div>
                    <strong class="font-1 m-right-auto">{{ $data->json->data->bank->bank_name }}</strong>
                </div>
                 <div class="column g-2">
                    <div class="row m-left-auto align-center g-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="pink" viewBox="0 0 256 256"><path d="M216,40H40A16,16,0,0,0,24,56V192a16,16,0,0,0,16,16H56v16a8,8,0,0,0,16,0V208H184v16a8,8,0,0,0,16,0V208h16a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40Zm0,152H40V56H216v64H199.32a48,48,0,1,0,0,16H216v56Zm-50.16-72a16,16,0,1,0,0,16H183a32,32,0,1,1,0-16Z"></path></svg>

                        Name on Account
                    </div>
                    <strong class="font-1 m-left-auto">{{ $data->json->data->bank->account_name }}</strong>
                </div>
            </div>
            
            @endif
            <div class="row w-full m-top-10 align-center space-between">
              <strong class="desc m-left-auto c-green">{!! Currency($data->user->id)  !!}{{ number_format($data->amount,2) }}</strong>
            </div>
           
           @if ($data->status == 'pending')
           
               <hr> 
               
               <div class="row w-full g-10 align-center space-between">
                <button onclick="
                @if(str_contains(strtolower($data->type),'deposit'))
                let data=`<div class='align-center column g-5 text-center'>
                  <svg xmlns='http://www.w3.org/2000/svg' width='50' height='50' fill='blue' viewBox='0 0 256 256'><path d='M208,40H48A16,16,0,0,0,32,56v56c0,52.72,25.52,84.67,46.93,102.19,23.06,18.86,46,25.26,47,25.53a8,8,0,0,0,4.2,0c1-.27,23.91-6.67,47-25.53C198.48,196.67,224,164.72,224,112V56A16,16,0,0,0,208,40Zm-34.32,69.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z'></path></svg>
                  <strong class='desc c-blue'>Security Check</strong>
                 <span> Are you sure you want to approve this deposit, <strong class='desc c-green'>{{ $data->user->username }}</strong> would be creditted the sum of <strong class='desc c-green'>{!! Currency($data->user->id)  !!}{{ number_format($data->amount,2) }}</strong> into his/her deposit wallet</span></div>
                <button onclick=&quot;GetRequest(event,'{{ url('admins/get/transaction/approve?id='.$data->id.'') }}',this,MyFunc.Actioned)&quot; class='btn-green-3d c-white w-full clip-5 g-5 br-5'>Yes! i confirm to approve this deposit</button>
                `;
                PopUp(data);


                @else
                   let data=`<div class='align-center column g-5 text-center'>
                  <svg xmlns='http://www.w3.org/2000/svg' width='50' height='50' fill='blue' viewBox='0 0 256 256'><path d='M208,40H48A16,16,0,0,0,32,56v56c0,52.72,25.52,84.67,46.93,102.19,23.06,18.86,46,25.26,47,25.53a8,8,0,0,0,4.2,0c1-.27,23.91-6.67,47-25.53C198.48,196.67,224,164.72,224,112V56A16,16,0,0,0,208,40Zm-34.32,69.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z'></path></svg>
                  <strong class='desc c-blue'>Security Check</strong>
                 <span> Are you sure you want to approve this withdrawal, <strong class='desc c-green'>{{ $data->user->username }}</strong> would be notified that his/her withdrawal has been approved so it is advisable to send the funds before confirming else reject this withdrawal.</span></div>
                <button onclick=&quot;GetRequest(event,'{{ url('admins/get/transaction/approve?id='.$data->id.'') }}',this,MyFunc.Actioned)&quot; class='btn-green-3d c-white w-full clip-5 g-5 br-5'>Yes! i confirm to approve this withdrawal</button>
                `;
                PopUp(data);

                @endif
                " class="btn-green-3d c-white clip-5 g-5 br-5">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="CurrentColor" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z"></path></svg>

                  Approve
                </button>
                 <button onclick="
                @if(str_contains(strtolower($data->type),'deposit'))
                let data=`<div class='align-center column g-5 text-center'>
                  <svg xmlns='http://www.w3.org/2000/svg' width='50' height='50' fill='blue' viewBox='0 0 256 256'><path d='M208,40H48A16,16,0,0,0,32,56v56c0,52.72,25.52,84.67,46.93,102.19,23.06,18.86,46,25.26,47,25.53a8,8,0,0,0,4.2,0c1-.27,23.91-6.67,47-25.53C198.48,196.67,224,164.72,224,112V56A16,16,0,0,0,208,40Zm-34.32,69.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z'></path></svg>
                  <strong class='desc c-blue'>Security Check</strong>
                 <span> Are you sure you want to reject this deposit, <strong class='desc c-green'>{{ $data->user->username }}</strong> would be notified that his/her deposit has been rejected.</span></div>
                <button onclick=&quot;GetRequest(event,'{{ url('admins/get/transaction/reject?id='.$data->id.'') }}',this,MyFunc.Actioned)&quot; class='btn-red-3d c-white w-full clip-5 g-5 br-5'>Yes! i confirm to reject this deposit</button>
                `;
                PopUp(data);


                @else
                   let data=`<div class='align-center column g-5 text-center'>
                  <svg xmlns='http://www.w3.org/2000/svg' width='50' height='50' fill='blue' viewBox='0 0 256 256'><path d='M208,40H48A16,16,0,0,0,32,56v56c0,52.72,25.52,84.67,46.93,102.19,23.06,18.86,46,25.26,47,25.53a8,8,0,0,0,4.2,0c1-.27,23.91-6.67,47-25.53C198.48,196.67,224,164.72,224,112V56A16,16,0,0,0,208,40Zm-34.32,69.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z'></path></svg>
                  <strong class='desc c-blue'>Security Check</strong>
                 <span> Are you sure you want to approve this withdrawal, <strong class='desc c-green'>{{ $data->user->username }}</strong> would be refunded back the sum of <strong class='desc c-green'>{!! Currency($data->user->id)  !!}{{ number_format($data->amount,2) }}</strong> into his/her {{ ucfirst(str_replace('_balance','',$data->json->wallet)) }} Wallet.</span></div>
                <button onclick=&quot;GetRequest(event,'{{ url('admins/get/transaction/reject?id='.$data->id.'') }}',this,MyFunc.Actioned)&quot; class='btn-red-3d c-white w-full clip-5 g-5 br-5'>Yes! i confirm to reject this withdrawal</button>
                `;
                PopUp(data);

                @endif
                " class="btn-red-3d clip-5 g-5 br-5">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="CurrentColor" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm37.66,130.34a8,8,0,0,1-11.32,11.32L128,139.31l-26.34,26.35a8,8,0,0,1-11.32-11.32L116.69,128,90.34,101.66a8,8,0,0,1,11.32-11.32L128,116.69l26.34-26.35a8,8,0,0,1,11.32,11.32L139.31,128Z"></path></svg>

                  Reject
                </button>
               </div>
           @endif
          </div>
      @endforeach
          @if ($airtime_transactions->hasMorePages())
              @include('components.sections',[
                'infinite_loading' => true,
                'page' => $airtime_transactions->currentPage() + 1
              ])
          @endif
@endisset
@isset($data_transactions)
      @foreach ($data_transactions as $data)
          <div class="w-full bg-white column  p-10 br-10 box-shadow">
            <div class="row w-full g-10 space-between">
                <img src="{{ asset('users/'.$data->user->photo.'') }}" alt="" class="h-50 w-50 clip-circle circle">
            <div class="column g-2 m-right-auto">
                <a href="{{ url('admins/user?id='.$data->user->id.'') }}" class="no-u bold font-1 c-green">{{ $data->user->username }}</a>
                <div class="row text-average text-dim align-center g-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="CurrentColor" viewBox="0 0 256 256"><path d="M224,48H32a8,8,0,0,0-8,8V192a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A8,8,0,0,0,224,48Zm-8,144H40V74.19l82.59,75.71a8,8,0,0,0,10.82,0L216,74.19V192Z"></path></svg>

                    {{ $data->user->email }}
                </div>
                   <div class="row text-average text-dim align-center g-2">
                   <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="CurrentColor" viewBox="0 0 256 256"><path d="M232,136.66A104.12,104.12,0,1,1,119.34,24,8,8,0,0,1,120.66,40,88.12,88.12,0,1,0,216,135.34,8,8,0,0,1,232,136.66ZM120,72v56a8,8,0,0,0,8,8h56a8,8,0,0,0,0-16H136V72a8,8,0,0,0-16,0Zm40-24a12,12,0,1,0-12-12A12,12,0,0,0,160,48Zm36,24a12,12,0,1,0-12-12A12,12,0,0,0,196,72Zm24,36a12,12,0,1,0-12-12A12,12,0,0,0,220,108Z"></path></svg>
                    Submitted
                    {{ $data->frame }}
                </div>
            </div>
            <div class="status {{ $data->status == 'success' ? 'green' : ($data->status == 'rejected' ? 'red' : 'gold') }}">{{ $data->status }}</div>
            </div>
            <hr>
            <div class="row m-top-10 w-full g-10 space-between">
                <div class="column g-2">
                    <div class="row m-right-auto align-center g-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="rgba(108,92,230)" viewBox="0 0 256 256"><path d="M239.76,158.06,217.28,68.12A16,16,0,0,0,201.75,56H136V40a16,16,0,0,0-16-16H80A16,16,0,0,0,64,40V56H54.25A16,16,0,0,0,38.72,68.12L16.24,158.06A7.93,7.93,0,0,0,16,160v32a16,16,0,0,0,16,16H224a16,16,0,0,0,16-16V160A7.93,7.93,0,0,0,239.76,158.06ZM80,40h40V56H80ZM54.25,72h147.5l20,80H34.25ZM32,192V168H224v24ZM64,96a8,8,0,0,1,8-8H88a8,8,0,0,1,0,16H72A8,8,0,0,1,64,96Zm48,0a8,8,0,0,1,8-8h16a8,8,0,0,1,0,16H120A8,8,0,0,1,112,96Zm48,0a8,8,0,0,1,8-8h16a8,8,0,0,1,0,16H168A8,8,0,0,1,160,96ZM64,128a8,8,0,0,1,8-8H88a8,8,0,0,1,0,16H72A8,8,0,0,1,64,128Zm48,0a8,8,0,0,1,8-8h16a8,8,0,0,1,0,16H120A8,8,0,0,1,112,128Zm48,0a8,8,0,0,1,8-8h16a8,8,0,0,1,0,16H168A8,8,0,0,1,160,128Z"></path></svg>

                        Transaction Type
                    </div>
                    <strong class="font-1 m-right-auto">{{ $data->type }}</strong>
                </div>
                 <div class="column g-2">
                    <div class="row m-left-auto align-center g-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="orangered  " viewBox="0 0 256 256"><path d="M216,40H40A16,16,0,0,0,24,56V200a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40Zm0,16V96H40V56ZM40,112H96v88H40Zm176,88H112V112H216v88Z"></path></svg>

                        Transaction Class
                    </div>
                    <strong class="font-1 m-left-auto">{{ $data->class }}</strong>
                </div>
            </div>
              <div class="row m-top-10 w-full g-10 space-between">
                <div class="column g-2">
                    <div class="row m-right-auto align-center g-2">
                       <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="#6c5ce6" viewBox="0 0 256 256"><path d="M176,16H80A24,24,0,0,0,56,40V216a24,24,0,0,0,24,24h96a24,24,0,0,0,24-24V40A24,24,0,0,0,176,16Zm8,200a8,8,0,0,1-8,8H80a8,8,0,0,1-8-8V40a8,8,0,0,1,8-8h96a8,8,0,0,1,8,8ZM140,60a12,12,0,1,1-12-12A12,12,0,0,1,140,60Z"></path></svg>

                        Mobile Number
                    </div>
                    <strong class="font-1 m-right-auto">{{ $data->json->body->number ?? 'null' }}</strong>
                </div>
                 <div class="column g-2">
                    <div class="row m-left-auto align-center g-2">
                       <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="#6c5ce6" viewBox="0 0 256 256"><path d="M135.16,84.42a8,8,0,0,0-14.32,0l-72,144a8,8,0,0,0,14.31,7.16L77,208h102.1l13.79,27.58A8,8,0,0,0,200,240a8,8,0,0,0,7.15-11.58ZM128,105.89,155.06,160H100.94ZM85,192l8-16h70.1l8,16Zm74.54-98.26a32,32,0,1,0-63,0,8,8,0,1,1-15.74,2.85,48,48,0,1,1,94.46,0,8,8,0,0,1-7.86,6.58,8.74,8.74,0,0,1-1.43-.13A8,8,0,0,1,159.49,93.74ZM64.15,136.21a80,80,0,1,1,127.7,0,8,8,0,0,1-12.76-9.65,64,64,0,1,0-102.18,0,8,8,0,0,1-12.76,9.65Z"></path></svg>

                        Network Provider
                    </div>
                    <strong class="font-1 m-left-auto">{{ $data->json->body->network ?? '' }}</strong>
                </div>
            </div>
              <div class="row m-top-10 w-full g-10 space-between">
                <div class="column g-2">
                    <div class="row m-right-auto align-center g-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="#6c5ce6" viewBox="0 0 256 256"><path d="M224,48H32A16,16,0,0,0,16,64V192a16,16,0,0,0,16,16H224a16,16,0,0,0,16-16V64A16,16,0,0,0,224,48Zm0,16V88H32V64Zm0,128H32V104H224v88Zm-16-24a8,8,0,0,1-8,8H168a8,8,0,0,1,0-16h32A8,8,0,0,1,208,168Zm-64,0a8,8,0,0,1-8,8H120a8,8,0,0,1,0-16h16A8,8,0,0,1,144,168Z"></path></svg>

                       Data Bundle
                    </div>
                    <strong class="font-1 m-right-auto">{{ number_format(($data->json->body->amount ?? 0)/1000) }}GB</strong>
                </div>
                 <div class="column g-2">
                    <div class="row m-left-auto align-center g-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="#6c5ce6" viewBox="0 0 256 256"><path d="M178.16,176H111.32A48,48,0,1,1,25.6,139.19a8,8,0,0,1,12.8,9.61A31.69,31.69,0,0,0,32,168a32,32,0,0,0,64,0,8,8,0,0,1,8-8h74.16a16,16,0,1,1,0,16ZM64,184a16,16,0,0,0,14.08-23.61l35.77-58.14a8,8,0,0,0-2.62-11,32,32,0,1,1,46.1-40.06A8,8,0,1,0,172,44.79a48,48,0,1,0-75.62,55.33L64.44,152c-.15,0-.29,0-.44,0a16,16,0,0,0,0,32Zm128-64a48.18,48.18,0,0,0-18,3.49L142.08,71.6A16,16,0,1,0,128,80l.44,0,35.78,58.15a8,8,0,0,0,11,2.61A32,32,0,1,1,192,200a8,8,0,0,0,0,16,48,48,0,0,0,0-96Z"></path></svg>

                        API Response
                    </div>
                    <strong class="font-1 m-left-auto">ORDER_RECEIVED</strong>
                </div>
            </div>
            @if (str_contains(strtolower($data->type),'withdrawal'))
                 <div class="row m-top-10 w-full g-10 space-between">
                <div class="column g-2">
                    <div class="row m-right-auto align-center g-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="blue" viewBox="0 0 256 256"><path d="M224,88H175.4l8.47-46.57a8,8,0,0,0-15.74-2.86l-9,49.43H111.4l8.47-46.57a8,8,0,0,0-15.74-2.86L95.14,88H48a8,8,0,0,0,0,16H92.23L83.5,152H32a8,8,0,0,0,0,16H80.6l-8.47,46.57a8,8,0,0,0,6.44,9.3A7.79,7.79,0,0,0,80,224a8,8,0,0,0,7.86-6.57l9-49.43H144.6l-8.47,46.57a8,8,0,0,0,6.44,9.3A7.79,7.79,0,0,0,144,224a8,8,0,0,0,7.86-6.57l9-49.43H208a8,8,0,0,0,0-16H163.77l8.73-48H224a8,8,0,0,0,0-16Zm-76.5,64H99.77l8.73-48h47.73Z"></path></svg>
                     
                        Account Number
                    </div>
                    <strong class="font-1 m-right-auto">{{ $data->json->data->bank->account_number }} <svg onclick="copy('{{ $data->json->data->bank->account_number }}')" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000000" viewBox="0 0 256 256"><path d="M216,32H88a8,8,0,0,0-8,8V80H40a8,8,0,0,0-8,8V216a8,8,0,0,0,8,8H168a8,8,0,0,0,8-8V176h40a8,8,0,0,0,8-8V40A8,8,0,0,0,216,32Zm-8,128H176V88a8,8,0,0,0-8-8H96V48H208Z"></path></svg>
                    </strong>
                </div>
                 <div class="column g-2">
                    <div class="row m-left-auto align-center g-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="#4caf50" viewBox="0 0 256 256"><path d="M24,104H48v64H32a8,8,0,0,0,0,16H224a8,8,0,0,0,0-16H208V104h24a8,8,0,0,0,4.19-14.81l-104-64a8,8,0,0,0-8.38,0l-104,64A8,8,0,0,0,24,104Zm40,0H96v64H64Zm80,0v64H112V104Zm48,64H160V104h32ZM128,41.39,203.74,88H52.26ZM248,208a8,8,0,0,1-8,8H16a8,8,0,0,1,0-16H240A8,8,0,0,1,248,208Z"></path></svg>

                        Bank Name
                    </div>
                    <strong class="font-1 m-left-auto">{{ $data->json->data->bank->bank_name }}</strong>
                </div>
            </div>
              <div class="row m-top-10 w-full g-10 space-between">
                <div class="column g-2">
                    <div class="row m-right-auto align-center g-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="pink" viewBox="0 0 256 256"><path d="M216,40H40A16,16,0,0,0,24,56V192a16,16,0,0,0,16,16H56v16a8,8,0,0,0,16,0V208H184v16a8,8,0,0,0,16,0V208h16a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40Zm0,152H40V56H216v64H199.32a48,48,0,1,0,0,16H216v56Zm-50.16-72a16,16,0,1,0,0,16H183a32,32,0,1,1,0-16Z"></path></svg>

                        Account Holder Name
                    </div>
                    <strong class="font-1 m-right-auto">{{ $data->json->data->bank->account_name }}</strong>
                </div>
                 <div class="column g-2">
                    <div class="row m-left-auto align-center g-2">
                     <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="orange" viewBox="0 0 256 256"><path d="M224,64H32A16,16,0,0,0,16,80v72a16,16,0,0,0,16,16H56v32a8,8,0,0,0,16,0V168H184v32a8,8,0,0,0,16,0V168h24a16,16,0,0,0,16-16V80A16,16,0,0,0,224,64Zm0,64.69L175.31,80H224ZM80.69,80l72,72H103.31L32,80.69V80ZM32,103.31,80.69,152H32ZM224,152H175.31l-72-72h49.38L224,151.32V152Z"></path></svg>

                      Gateway
                    </div>
                    <strong class="font-1 m-left-auto">Local Bank</strong>
                </div>
                
            </div>
            @endif
              @if (str_contains(strtolower($data->type),'deposit') && $data->gateway == 'manual')
                 <div class="row m-top-10 w-full g-10 space-between">
               
                 <div class="column g-2">
                    <div class="row m-right-auto align-center g-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="#4caf50" viewBox="0 0 256 256"><path d="M24,104H48v64H32a8,8,0,0,0,0,16H224a8,8,0,0,0,0-16H208V104h24a8,8,0,0,0,4.19-14.81l-104-64a8,8,0,0,0-8.38,0l-104,64A8,8,0,0,0,24,104Zm40,0H96v64H64Zm80,0v64H112V104Zm48,64H160V104h32ZM128,41.39,203.74,88H52.26ZM248,208a8,8,0,0,1-8,8H16a8,8,0,0,1,0-16H240A8,8,0,0,1,248,208Z"></path></svg>

                        Bank Sent From
                    </div>
                    <strong class="font-1 m-right-auto">{{ $data->json->data->bank->bank_name }}</strong>
                </div>
                 <div class="column g-2">
                    <div class="row m-left-auto align-center g-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="pink" viewBox="0 0 256 256"><path d="M216,40H40A16,16,0,0,0,24,56V192a16,16,0,0,0,16,16H56v16a8,8,0,0,0,16,0V208H184v16a8,8,0,0,0,16,0V208h16a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40Zm0,152H40V56H216v64H199.32a48,48,0,1,0,0,16H216v56Zm-50.16-72a16,16,0,1,0,0,16H183a32,32,0,1,1,0-16Z"></path></svg>

                        Name on Account
                    </div>
                    <strong class="font-1 m-left-auto">{{ $data->json->data->bank->account_name }}</strong>
                </div>
            </div>
            
            @endif
            <div class="row w-full m-top-10 align-center space-between">
              <strong class="desc m-left-auto c-green">{!! Currency($data->user->id)  !!}{{ number_format($data->amount,2) }}</strong>
            </div>
           
           @if ($data->status == 'pending')
           
               <hr> 
               
               <div class="row w-full g-10 align-center space-between">
                <button onclick="
                @if(str_contains(strtolower($data->type),'deposit'))
                let data=`<div class='align-center column g-5 text-center'>
                  <svg xmlns='http://www.w3.org/2000/svg' width='50' height='50' fill='blue' viewBox='0 0 256 256'><path d='M208,40H48A16,16,0,0,0,32,56v56c0,52.72,25.52,84.67,46.93,102.19,23.06,18.86,46,25.26,47,25.53a8,8,0,0,0,4.2,0c1-.27,23.91-6.67,47-25.53C198.48,196.67,224,164.72,224,112V56A16,16,0,0,0,208,40Zm-34.32,69.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z'></path></svg>
                  <strong class='desc c-blue'>Security Check</strong>
                 <span> Are you sure you want to approve this deposit, <strong class='desc c-green'>{{ $data->user->username }}</strong> would be creditted the sum of <strong class='desc c-green'>{!! Currency($data->user->id)  !!}{{ number_format($data->amount,2) }}</strong> into his/her deposit wallet</span></div>
                <button onclick=&quot;GetRequest(event,'{{ url('admins/get/transaction/approve?id='.$data->id.'') }}',this,MyFunc.Actioned)&quot; class='btn-green-3d c-white w-full clip-5 g-5 br-5'>Yes! i confirm to approve this deposit</button>
                `;
                PopUp(data);


                @else
                   let data=`<div class='align-center column g-5 text-center'>
                  <svg xmlns='http://www.w3.org/2000/svg' width='50' height='50' fill='blue' viewBox='0 0 256 256'><path d='M208,40H48A16,16,0,0,0,32,56v56c0,52.72,25.52,84.67,46.93,102.19,23.06,18.86,46,25.26,47,25.53a8,8,0,0,0,4.2,0c1-.27,23.91-6.67,47-25.53C198.48,196.67,224,164.72,224,112V56A16,16,0,0,0,208,40Zm-34.32,69.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z'></path></svg>
                  <strong class='desc c-blue'>Security Check</strong>
                 <span> Are you sure you want to approve this withdrawal, <strong class='desc c-green'>{{ $data->user->username }}</strong> would be notified that his/her withdrawal has been approved so it is advisable to send the funds before confirming else reject this withdrawal.</span></div>
                <button onclick=&quot;GetRequest(event,'{{ url('admins/get/transaction/approve?id='.$data->id.'') }}',this,MyFunc.Actioned)&quot; class='btn-green-3d c-white w-full clip-5 g-5 br-5'>Yes! i confirm to approve this withdrawal</button>
                `;
                PopUp(data);

                @endif
                " class="btn-green-3d c-white clip-5 g-5 br-5">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="CurrentColor" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z"></path></svg>

                  Approve
                </button>
                 <button onclick="
                @if(str_contains(strtolower($data->type),'deposit'))
                let data=`<div class='align-center column g-5 text-center'>
                  <svg xmlns='http://www.w3.org/2000/svg' width='50' height='50' fill='blue' viewBox='0 0 256 256'><path d='M208,40H48A16,16,0,0,0,32,56v56c0,52.72,25.52,84.67,46.93,102.19,23.06,18.86,46,25.26,47,25.53a8,8,0,0,0,4.2,0c1-.27,23.91-6.67,47-25.53C198.48,196.67,224,164.72,224,112V56A16,16,0,0,0,208,40Zm-34.32,69.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z'></path></svg>
                  <strong class='desc c-blue'>Security Check</strong>
                 <span> Are you sure you want to reject this deposit, <strong class='desc c-green'>{{ $data->user->username }}</strong> would be notified that his/her deposit has been rejected.</span></div>
                <button onclick=&quot;GetRequest(event,'{{ url('admins/get/transaction/reject?id='.$data->id.'') }}',this,MyFunc.Actioned)&quot; class='btn-red-3d c-white w-full clip-5 g-5 br-5'>Yes! i confirm to reject this deposit</button>
                `;
                PopUp(data);


                @else
                   let data=`<div class='align-center column g-5 text-center'>
                  <svg xmlns='http://www.w3.org/2000/svg' width='50' height='50' fill='blue' viewBox='0 0 256 256'><path d='M208,40H48A16,16,0,0,0,32,56v56c0,52.72,25.52,84.67,46.93,102.19,23.06,18.86,46,25.26,47,25.53a8,8,0,0,0,4.2,0c1-.27,23.91-6.67,47-25.53C198.48,196.67,224,164.72,224,112V56A16,16,0,0,0,208,40Zm-34.32,69.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z'></path></svg>
                  <strong class='desc c-blue'>Security Check</strong>
                 <span> Are you sure you want to approve this withdrawal, <strong class='desc c-green'>{{ $data->user->username }}</strong> would be refunded back the sum of <strong class='desc c-green'>{!! Currency($data->user->id)  !!}{{ number_format($data->amount,2) }}</strong> into his/her {{ ucfirst(str_replace('_balance','',$data->json->wallet)) }} Wallet.</span></div>
                <button onclick=&quot;GetRequest(event,'{{ url('admins/get/transaction/reject?id='.$data->id.'') }}',this,MyFunc.Actioned)&quot; class='btn-red-3d c-white w-full clip-5 g-5 br-5'>Yes! i confirm to reject this withdrawal</button>
                `;
                PopUp(data);

                @endif
                " class="btn-red-3d clip-5 g-5 br-5">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="CurrentColor" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm37.66,130.34a8,8,0,0,1-11.32,11.32L128,139.31l-26.34,26.35a8,8,0,0,1-11.32-11.32L116.69,128,90.34,101.66a8,8,0,0,1,11.32-11.32L128,116.69l26.34-26.35a8,8,0,0,1,11.32,11.32L139.31,128Z"></path></svg>

                  Reject
                </button>
               </div>
           @endif
          </div>
      @endforeach
          @if ($data_transactions->hasMorePages())
              @include('components.sections',[
                'infinite_loading' => true,
                'page' => $data_transactions->currentPage() + 1
              ])
          @endif
@endisset