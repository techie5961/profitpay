@extends('layout.users.app')
@section('title')
    Users Profile
@endsection
@section('main')
    <section class="w-full column g-10 p-10">
        <div class="row align-center w-full g-10 space-between">
            <img class="h-70 w-70 circle clip-circle" src="{{ asset('users/avatar.svg') }}" alt="User Photo">
            <div class="column g-5 m-right-auto">
               <strong class="desc">{{ Auth::guard('users')->user()->username ?? 'null' }}</strong>
               <span class text-dim>{{ Auth::guard('users')->user()->phone ?? 'null' }}</span>
            </div>
            <button class="btn-red">Logout</button>
        </div> 
        <div class="w-full grid grid-2 g-10 pc-grid-4 place-center">
            <div style="border:0.1px solid var(--bg-secondary-light)" class="bg-secondary-dark align-center w-full br-10 border-1 border-color-dim p-10 column g-10">
               <div class="row align-center w-full g-5">
                 <div class="h-40 min-h-40 min-w-40 w-40 column justify-center bg-green c-white br-10">
                   <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="CurrentColor" viewBox="0 0 256 256"><path d="M117.25,157.92a60,60,0,1,0-66.5,0A95.83,95.83,0,0,0,3.53,195.63a8,8,0,1,0,13.4,8.74,80,80,0,0,1,134.14,0,8,8,0,0,0,13.4-8.74A95.83,95.83,0,0,0,117.25,157.92ZM40,108a44,44,0,1,1,44,44A44.05,44.05,0,0,1,40,108Zm210.14,98.7a8,8,0,0,1-11.07-2.33A79.83,79.83,0,0,0,172,168a8,8,0,0,1,0-16,44,44,0,1,0-16.34-84.87,8,8,0,1,1-5.94-14.85,60,60,0,0,1,55.53,105.64,95.83,95.83,0,0,1,47.22,37.71A8,8,0,0,1,250.14,206.7Z"></path></svg>
                 </div>
                <strong class="desc">Total Downlines</strong>
               </div>
               <strong class="desc">500</strong>
            </div>
             <div style="border:0.1px solid var(--bg-secondary-light)" class="bg-secondary-dark align-center w-full br-10 border-1 border-color-dim p-10 column g-10">
               <div class="row align-center w-full g-5">
                 <div class="h-40 min-h-40 min-w-40 w-40 column justify-center bg-blue c-white br-10">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="CurrentColor" viewBox="0 0 256 256"><path d="M216,72H130.67L102.93,51.2a16.12,16.12,0,0,0-9.6-3.2H40A16,16,0,0,0,24,64V200a16,16,0,0,0,16,16H216.89A15.13,15.13,0,0,0,232,200.89V88A16,16,0,0,0,216,72Zm0,128H40V64H93.33L123.2,86.4A8,8,0,0,0,128,88h88Zm-56-56a8,8,0,0,1-8,8H136v16a8,8,0,0,1-16,0V152H104a8,8,0,0,1,0-16h16V120a8,8,0,0,1,16,0v16h16A8,8,0,0,1,160,144Z"></path></svg>
                </div>
                <strong class="desc">Affiliate Balance</strong>
               </div>
               <strong class="desc">&#8358;{{ number_format(Auth::guard('users')->user()->affiliate_balance,2) }}</strong>
            </div>
             <div style="border:0.1px solid var(--bg-secondary-light)" class="bg-secondary-dark align-center w-full br-10 border-1 border-color-dim p-10 column g-10">
               <div class="row align-center w-full g-5">
                 <div class="h-40 min-h-40 min-w-40 w-40 column justify-center bg-gold c-black br-10">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="CurrentColor" viewBox="0 0 256 256"><path d="M208,48H48A24,24,0,0,0,24,72V184a24,24,0,0,0,24,24H208a24,24,0,0,0,24-24V72A24,24,0,0,0,208,48ZM40,96H216v16H160a8,8,0,0,0-8,8,24,24,0,0,1-48,0,8,8,0,0,0-8-8H40Zm8-32H208a8,8,0,0,1,8,8v8H40V72A8,8,0,0,1,48,64ZM208,192H48a8,8,0,0,1-8-8V128H88.8a40,40,0,0,0,78.4,0H216v56A8,8,0,0,1,208,192Z"></path></svg>
                </div>
                <strong class="desc">Activities Balance</strong>
               </div>
               <strong class="desc">&#8358;{{ number_format(Auth::guard('users')->user()->activities_balance,2) }}</strong>
            </div>
             <div style="border:0.1px solid var(--bg-secondary-light)" class="bg-secondary-dark align-center w-full br-10 border-1 border-color-dim p-10 column g-10">
               <div class="row align-center w-full g-5">
                 <div class="h-40 min-h-40 min-w-40 w-40 column justify-center bg-purple c-white br-10">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="CurrentColor" viewBox="0 0 256 256"><path d="M216,40H40A16,16,0,0,0,24,56V192a16,16,0,0,0,16,16H56v16a8,8,0,0,0,16,0V208H184v16a8,8,0,0,0,16,0V208h16a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40Zm0,152H40V56H216v64H199.32a48,48,0,1,0,0,16H216v56Zm-50.16-72a16,16,0,1,0,0,16H183a32,32,0,1,1,0-16Z"></path></svg>
                  </div>
                <strong class="desc">Deposit Balance</strong>
               </div>
               <strong class="desc">&#8358;{{ number_format(Auth::guard('users')->user()->deposit_balance,2) }}</strong>
            </div>
        </div>
        <div class="row font-1 align-center g-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="CurrentColor" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24ZM74.08,197.5a64,64,0,0,1,107.84,0,87.83,87.83,0,0,1-107.84,0ZM96,120a32,32,0,1,1,32,32A32,32,0,0,1,96,120Zm97.76,66.41a79.66,79.66,0,0,0-36.06-28.75,48,48,0,1,0-59.4,0,79.66,79.66,0,0,0-36.06,28.75,88,88,0,1,1,131.52,0Z"></path></svg>

           ACCOUNT DETAILS
        </div>
        <div class="w-full no-select bg-secondary-dark p-10 br-10 column">
            <div style="border-bottom:0.1px solid #708090" class="w-full p-10 g-5 row align-center">
                <div class="h-40 min-h-40 min-w-40 w-40 column justify-center bg-gold c-black br-10">
             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="CurrentColor" viewBox="0 0 256 256"><path d="M200,112a8,8,0,0,1-8,8H152a8,8,0,0,1,0-16h40A8,8,0,0,1,200,112Zm-8,24H152a8,8,0,0,0,0,16h40a8,8,0,0,0,0-16Zm40-80V200a16,16,0,0,1-16,16H40a16,16,0,0,1-16-16V56A16,16,0,0,1,40,40H216A16,16,0,0,1,232,56ZM216,200V56H40V200H216Zm-80.26-34a8,8,0,1,1-15.5,4c-2.63-10.26-13.06-18-24.25-18s-21.61,7.74-24.25,18a8,8,0,1,1-15.5-4,39.84,39.84,0,0,1,17.19-23.34,32,32,0,1,1,45.12,0A39.76,39.76,0,0,1,135.75,166ZM96,136a16,16,0,1,0-16-16A16,16,0,0,0,96,136Z"></path></svg>
  
                </div>
                              <div class="column m-right-auto">
                    <strong class="font-1">Username</strong>
                    <span class="text-dim">{{ Auth::guard('users')->user()->username }}</span>
                </div>
            </div>
             <div style="border-bottom:0.1px solid #708090" class="w-full p-10 g-5 row align-center">
                <div class="h-40 min-h-40 min-w-40 w-40 column justify-center bg-red c-white br-10">
             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="CurrentColor" viewBox="0 0 256 256"><path d="M224,48H32a8,8,0,0,0-8,8V192a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A8,8,0,0,0,224,48ZM203.43,64,128,133.15,52.57,64ZM216,192H40V74.19l82.59,75.71a8,8,0,0,0,10.82,0L216,74.19V192Z"></path></svg>

                </div>
                              <div class="column m-right-auto">
                    <strong class="font-1">Email</strong>
                    <span class="text-dim">{{ Auth::guard('users')->user()->email }}</span>
                </div>
            </div>
             <div style="border-bottom:0.1px solid #708090" class="w-full p-10 g-5 row align-center">
                <div class="h-40 min-h-40 min-w-40 w-40 column justify-center bg-white c-black br-10">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="CurrentColor" viewBox="0 0 256 256"><path d="M75.19,198.4a8,8,0,0,0,11.21-1.6,52,52,0,0,1,83.2,0,8,8,0,1,0,12.8-9.6A67.88,67.88,0,0,0,155,165.51a40,40,0,1,0-53.94,0A67.88,67.88,0,0,0,73.6,187.2,8,8,0,0,0,75.19,198.4ZM128,112a24,24,0,1,1-24,24A24,24,0,0,1,128,112Zm72-88H56A16,16,0,0,0,40,40V216a16,16,0,0,0,16,16H200a16,16,0,0,0,16-16V40A16,16,0,0,0,200,24Zm0,192H56V40H200ZM88,64a8,8,0,0,1,8-8h64a8,8,0,0,1,0,16H96A8,8,0,0,1,88,64Z"></path></svg>

                </div>
                              <div class="column m-right-auto">
                    <strong class="font-1">Full Name</strong>
                    <span class="text-dim">{{ Auth::guard('users')->user()->name }}</span>
                </div>
            </div>
            <div style="bodrder-bottom:0.1px solid #708090" class="w-full p-10 g-5 row align-center">
                <div class="h-40 min-h-40 min-w-40 w-40 column justify-center bg-green c-white br-10">
           <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="CurrentColor" viewBox="0 0 256 256"><path d="M222.37,158.46l-47.11-21.11-.13-.06a16,16,0,0,0-15.17,1.4,8.12,8.12,0,0,0-.75.56L134.87,160c-15.42-7.49-31.34-23.29-38.83-38.51l20.78-24.71c.2-.25.39-.5.57-.77a16,16,0,0,0,1.32-15.06l0-.12L97.54,33.64a16,16,0,0,0-16.62-9.52A56.26,56.26,0,0,0,32,80c0,79.4,64.6,144,144,144a56.26,56.26,0,0,0,55.88-48.92A16,16,0,0,0,222.37,158.46ZM176,208A128.14,128.14,0,0,1,48,80,40.2,40.2,0,0,1,82.87,40a.61.61,0,0,0,0,.12l21,47L83.2,111.86a6.13,6.13,0,0,0-.57.77,16,16,0,0,0-1,15.7c9.06,18.53,27.73,37.06,46.46,46.11a16,16,0,0,0,15.75-1.14,8.44,8.44,0,0,0,.74-.56L168.89,152l47,21.05h0s.08,0,.11,0A40.21,40.21,0,0,1,176,208Z"></path></svg>

                </div>
                              <div class="column m-right-auto">
                    <strong class="font-1">Phone Number</strong>
                    <span class="text-dim">{{ Auth::guard('users')->user()->phone }}</span>
                </div>
            </div>
            <div onclick="spa(event,'{{ url('users/password/update') }}')" class="row bg-secondary-light w-full no-select align-center justify-center pointer p-10 clip-10">
               <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="CurrentColor" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm40-104a40,40,0,1,0-65.94,30.44L88.68,172.77A8,8,0,0,0,96,184h64a8,8,0,0,0,7.32-11.23l-13.38-30.33A40.14,40.14,0,0,0,168,112ZM136.68,143l11,25.05H108.27l11-25.05A8,8,0,0,0,116,132.79a24,24,0,1,1,24,0A8,8,0,0,0,136.68,143Z"></path></svg>

                <span>Update Password</span>
            </div>
        </div>
         <div class="row font-1 align-center g-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="CurrentColor" viewBox="0 0 256 256"><path d="M240,88.23a54.43,54.43,0,0,1-16,37L189.25,160a54.27,54.27,0,0,1-38.63,16h-.05A54.63,54.63,0,0,1,96,119.84a8,8,0,0,1,16,.45A38.62,38.62,0,0,0,150.58,160h0a38.39,38.39,0,0,0,27.31-11.31l34.75-34.75a38.63,38.63,0,0,0-54.63-54.63l-11,11A8,8,0,0,1,135.7,59l11-11A54.65,54.65,0,0,1,224,48,54.86,54.86,0,0,1,240,88.23ZM109,185.66l-11,11A38.41,38.41,0,0,1,70.6,208h0a38.63,38.63,0,0,1-27.29-65.94L78,107.31A38.63,38.63,0,0,1,144,135.71a8,8,0,0,0,16,.45A54.86,54.86,0,0,0,144,96a54.65,54.65,0,0,0-77.27,0L32,130.75A54.62,54.62,0,0,0,70.56,224h0a54.28,54.28,0,0,0,38.64-16l11-11A8,8,0,0,0,109,185.66Z"></path></svg>

           OTHERS
        </div>
        <div class="w-full no-select bg-secondary-dark p-10 br-10 column">
            <div class="w-full clip-10 pointer p-10 g-5 row align-center">
                
             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="gold" viewBox="0 0 256 256"><path d="M24,104H48v64H32a8,8,0,0,0,0,16H224a8,8,0,0,0,0-16H208V104h24a8,8,0,0,0,4.19-14.81l-104-64a8,8,0,0,0-8.38,0l-104,64A8,8,0,0,0,24,104Zm40,0H96v64H64Zm80,0v64H112V104Zm48,64H160V104h32ZM128,41.39,203.74,88H52.26ZM248,208a8,8,0,0,1-8,8H16a8,8,0,0,1,0-16H240A8,8,0,0,1,248,208Z"></path></svg>

               
                              <div class="column m-right-auto">
                    <strong class="font-1">Bank Information</strong>
                   
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="CurrentColor" viewBox="0 0 256 256"><path d="M181.66,133.66l-80,80a8,8,0,0,1-11.32-11.32L164.69,128,90.34,53.66a8,8,0,0,1,11.32-11.32l80,80A8,8,0,0,1,181.66,133.66Z"></path></svg>

            </div>
             <div class="w-full clip-10 pointer p-10 g-5 row align-center">
                
             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="orange" viewBox="0 0 256 256"><path d="M128,88a40,40,0,1,0,40,40A40,40,0,0,0,128,88Zm0,64a24,24,0,1,1,24-24A24,24,0,0,1,128,152ZM240,56H16a8,8,0,0,0-8,8V192a8,8,0,0,0,8,8H240a8,8,0,0,0,8-8V64A8,8,0,0,0,240,56ZM193.65,184H62.35A56.78,56.78,0,0,0,24,145.65v-35.3A56.78,56.78,0,0,0,62.35,72h131.3A56.78,56.78,0,0,0,232,110.35v35.3A56.78,56.78,0,0,0,193.65,184ZM232,93.37A40.81,40.81,0,0,1,210.63,72H232ZM45.37,72A40.81,40.81,0,0,1,24,93.37V72ZM24,162.63A40.81,40.81,0,0,1,45.37,184H24ZM210.63,184A40.81,40.81,0,0,1,232,162.63V184Z"></path></svg>

               
                              <div class="column m-right-auto">
                    <strong class="font-1">CashOut</strong>
                   
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="CurrentColor" viewBox="0 0 256 256"><path d="M181.66,133.66l-80,80a8,8,0,0,1-11.32-11.32L164.69,128,90.34,53.66a8,8,0,0,1,11.32-11.32l80,80A8,8,0,0,1,181.66,133.66Z"></path></svg>

            </div>
            <div class="w-full clip-10 pointer p-10 g-5 row align-center">
                
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4caf50" viewBox="0 0 256 256"><path d="M187.58,144.84l-32-16a8,8,0,0,0-8,.5l-14.69,9.8a40.55,40.55,0,0,1-16-16l9.8-14.69a8,8,0,0,0,.5-8l-16-32A8,8,0,0,0,104,64a40,40,0,0,0-40,40,88.1,88.1,0,0,0,88,88,40,40,0,0,0,40-40A8,8,0,0,0,187.58,144.84ZM152,176a72.08,72.08,0,0,1-72-72A24,24,0,0,1,99.29,80.46l11.48,23L101,118a8,8,0,0,0-.73,7.51,56.47,56.47,0,0,0,30.15,30.15A8,8,0,0,0,138,155l14.61-9.74,23,11.48A24,24,0,0,1,152,176ZM128,24A104,104,0,0,0,36.18,176.88L24.83,210.93a16,16,0,0,0,20.24,20.24l34.05-11.35A104,104,0,1,0,128,24Zm0,192a87.87,87.87,0,0,1-44.06-11.81,8,8,0,0,0-6.54-.67L40,216,52.47,178.6a8,8,0,0,0-.66-6.54A88,88,0,1,1,128,216Z"></path></svg>

               
                              <div class="column m-right-auto">
                    <strong class="font-1">Whatsapp Community</strong>
                   
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="CurrentColor" viewBox="0 0 256 256"><path d="M181.66,133.66l-80,80a8,8,0,0,1-11.32-11.32L164.69,128,90.34,53.66a8,8,0,0,1,11.32-11.32l80,80A8,8,0,0,1,181.66,133.66Z"></path></svg>

            </div>
             
            <div class="w-full clip-10 pointer p-10 g-5 row align-center">
                
           <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="aqua" viewBox="0 0 256 256"><path d="M228.88,26.19a9,9,0,0,0-9.16-1.57L17.06,103.93a14.22,14.22,0,0,0,2.43,27.21L72,141.45V200a15.92,15.92,0,0,0,10,14.83,15.91,15.91,0,0,0,17.51-3.73l25.32-26.26L165,220a15.88,15.88,0,0,0,10.51,4,16.3,16.3,0,0,0,5-.79,15.85,15.85,0,0,0,10.67-11.63L231.77,35A9,9,0,0,0,228.88,26.19Zm-61.14,36L78.15,126.35l-49.6-9.73ZM88,200V152.52l24.79,21.74Zm87.53,8L92.85,135.5l119-85.29Z"></path></svg>

                              <div class="column m-right-auto">
                    <strong class="font-1">Telegram Community</strong>
                   
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="CurrentColor" viewBox="0 0 256 256"><path d="M181.66,133.66l-80,80a8,8,0,0,1-11.32-11.32L164.69,128,90.34,53.66a8,8,0,0,1,11.32-11.32l80,80A8,8,0,0,1,181.66,133.66Z"></path></svg>

            </div>
             

           
        </div>
       </section>
@endsection