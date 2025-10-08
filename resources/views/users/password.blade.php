@extends('layout.users.app')
@section('title')
    Update Password
@endsection
@section('main')
    <section class="w-full g-10 p-10 column flex-auto align-center">

        <div class="bg-secondary-dark w-full column g-10 max-w-500 br-10 p-10">
            <div class="row p-10 space-between br-10 border-1 border-color-dim align-center">

                <span class="desc bold">Update Password</span>
               <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4caf50" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm40-104a40,40,0,1,0-65.94,30.44L88.68,172.77A8,8,0,0,0,96,184h64a8,8,0,0,0,7.32-11.23l-13.38-30.33A40.14,40.14,0,0,0,168,112ZM136.68,143l11,25.05H108.27l11-25.05A8,8,0,0,0,116,132.79a24,24,0,1,1,24,0A8,8,0,0,0,136.68,143Z"></path></svg>

            </div>
            <div class="column g-5 w-full">
                <strong class="desc c-green">Note:</strong>
                <span>Your current account password would be changed upon updating password.</span>
            </div>
            <form action="{{ url('users/post/update/password/process') }}" method="POST" onsubmit="PostRequest(event,this,MyFunc.Updated)" class="w-full column g-10">
               <input type="hidden" class="input" name="_token" value="{{ @csrf_token() }}">
                <label for="">Current Password</label>
               <div class="cont row align-center w-full h-50 br-10 border-1 bg border-color-silver">
                    <input placeholder="Enter current password" name="current_password" type="password" class="w-full inp input required account-number h-full no-border br-10 bg-transparent">
                </div>
                  <label for="">New Password</label>
               <div class="cont row align-center w-full h-50 br-10 border-1 bg border-color-silver">
                    <input placeholder="Enter current password" name="new_password" type="password" class="w-full inp input required account-number h-full no-border br-10 bg-transparent">
                </div>
                  <label for="">Confirm New Password</label>
               <div class="cont row align-center w-full h-50 br-10 border-1 bg border-color-silver">
                    <input placeholder="Enter current password" name="confirm_password" type="password" class="w-full inp input required account-number h-full no-border br-10 bg-transparent">
                </div>
                
               
             
                <button class="post">Update Account Password</button>
            </form>
        </div>
      
    </section>
    
@endsection
@section('js')
    <script class="js">
        window.MyFunc = {
            Updated : function(response,event){
                let data=JSON.parse(response);
                if(data.status == 'success'){
                    spa(event,data.url);
                }
            }
        }
    </script>
@endsection