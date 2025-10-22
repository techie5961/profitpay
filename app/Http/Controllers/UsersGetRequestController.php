<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class UsersGetRequestController extends Controller
{
    // claim task reward
    public function ClaimTaskReward(){
        $task=DB::table('tasks')->where('id',request('id'))->first();
        $task->reward=json_decode(Auth::guard('users')->user()->package)->earning_per_click;
        DB::table('users')->where('id',Auth::guard('users')->user()->id)->update([
            'activities_balance' => DB::raw('activities_balance + '.$task->reward.''),
            'updated' => Carbon::now()
        ]);
        DB::table('transactions')->insert([
             'uniqid' => strtoupper(uniqid('trx')),
            'user_id' => Auth::guard('users')->user()->id,
            'type' => 'Task Reward',
            'class' => 'credit',
            'amount' => $task->reward,
            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000" viewBox="0 0 256 256"><path d="M208,32H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32Zm-12.69,88L136,60.69V48h12.69L208,107.32V120ZM136,83.31,172.69,120H136Zm72,1.38L171.31,48H208ZM120,48v72H48V48ZM107.31,208,48,148.69V136H60.69L120,195.31V208ZM120,172.69,83.31,136H120Zm-72-1.38L84.69,208H48ZM208,208H136V136h72v72Z"></path></svg>',
            'json' => json_encode([
                'data' => $task,
                'wallet' => 'activities_wallet'
            ]),
            'status' => 'success',
            'updated' => Carbon::now(),
            'date' => Carbon::now()
        ]);
        DB::table('task_proofs')->insert([
            'user_id' => Auth::Guard('users')->user()->id,
            'task_id' => $task->id,
            'json' => json_encode($task),
            'uniqid' => strtoupper(uniqid('PRF')),
            'status' => 'success',
            'updated' => Carbon::now(),
            'date' => Carbon::now()
        ]);
        DB::table('tasks')->where('id',request()->input('id'))->update([
            'completed' => DB::raw('`completed` + 1'),
            'status' => DB::raw('CASE WHEN `completed` + 1 >= `limit` THEN "completed" ELSE "active" END')
        ]);
        DB::table('notifications')->insert([
        'message' => '<strong class="font-1 c-green">'.Auth::guard('users')->user()->username.'</strong> Just performed a task',
        'status' => 'unread',
        'date' => Carbon::now(),
        'updated' => Carbon::now()
       ]);
        return response()->json([
            'status' => 'success',
            'message' => 'Task completed and reward granted',
        
        ]);


    }
    // spin grant reward
    public function SpinReward(){
        $general=json_decode(DB::table('settings')->where('key','general_settings')->first()->json ?? '{}');
        $reward=rand($general->spin_minimum,$general->spin_maximum);
        if(DB::table('transactions')->where('user_id',Auth::guard('users')->user()->id)->where('type','Spin Reward')->whereDate('date',Carbon::today())->exists()){
            return response()->json([
                'message' => 'You have spinned today,try again tomorrow',
                'status' => 'error'
            ]);
        }
        DB::table('users')->where('id',Auth::guard('users')->user()->id)->update([
            'activities_balance' => DB::raw('activities_balance + '.$reward.''),
            'updated' => Carbon::now()
        ]);
       DB::table('transactions')->insert([
         'uniqid' => strtoupper(uniqid('trx')),
            'user_id' => Auth::guard('users')->user()->id,
            'type' => 'Spin Reward',
            'class' => 'credit',
            'amount' => $reward,
            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm87.82,98.46c-28.34,20-49.57,14.68-71.87,4.39,20.06-14.19,38.86-32.21,39.53-67.11A87.92,87.92,0,0,1,215.82,122.46ZM167.11,49.19C170.24,83.71,155,99.44,135,113.61c-2.25-24.48-8.44-49.8-38.37-67.82a87.89,87.89,0,0,1,70.5,3.4ZM79.32,54.73c31.45,14.55,37.47,35.58,39.71,60-22.33-10.29-47.35-17.59-77.93-.68A88.18,88.18,0,0,1,79.32,54.73ZM40.18,133.54c28.34-20,49.57-14.68,71.87-4.39C92,143.34,73.19,161.36,72.52,196.26A87.92,87.92,0,0,1,40.18,133.54Zm48.71,73.27C85.76,172.29,101,156.56,121,142.39c2.25,24.48,8.44,49.8,38.37,67.82a87.89,87.89,0,0,1-70.5-3.4Zm87.79-5.54c-31.45-14.55-37.47-35.58-39.71-60,12.72,5.86,26.31,10.75,41.3,10.75,11.33,0,23.46-2.8,36.63-10.08A88.2,88.2,0,0,1,176.68,201.27Z"></path></svg>',
            'json' => json_encode([
                'data' => $reward,
                'wallet' => 'activities_wallet'
            ]),
            'status' => 'success',
            'updated' => Carbon::now(),
            'date' => Carbon::now()
        ]);
        DB::table('notifications')->insert([
        'message' => '<strong class="font-1 c-green">'.Auth::guard('users')->user()->username.'</strong> Just spinned and won',
        'status' => 'unread',
        'date' => Carbon::now(),
        'updated' => Carbon::now()
       ]);
        return response()->json([
            'message' => '&#8358;'.$reward.' spin reward granted successfully',
            'status' => 'success',
            'reward' => $reward
        ]);
    }
    //  bank auto verify
    public function BankAutoVerify(){
        //  return response()->json([
        //     'message' => 'David James',
        //     'status' => 'success'
        //   ]);
        $verify=Http::withToken(env('PSTCK_SECRET_KEY'))->get('https://api.paystack.co/bank/resolve',[
            'account_number' => request()->input('account_number'),
            'bank_code' => request()->input('bank_code')
        ]);
        if($verify->successful()){
            $data=$verify->json();
          return response()->json([
            'message' => $data['data']['account_name'],
            'status' => 'success'
          ]);
          
        }else{
            return response()->json([
                'message' => 'Invalid account details',
                'status' => 'error'
            ]);
        }
    }
    // vote article
    public function VoteArticle(){
        if(DB::table('article_votes')->where('article_id',request()->input('id'))->where('user_id',Auth::guard('users')->user()->id)->exists()){
            DB::table('article_votes')->where('user_id',Auth::guard('users')->user()->id)->where('article_id',request()->input('id'))->delete();
            DB::table('articles')->where('id',request()->input('id'))->update([
                'votes' => DB::raw('votes - 1')
            ]);
            return response()->json([
                'message' => number_format(DB::table('articles')->where('id',request()->input('id'))->first()->votes),
                'status' => 'success',
                'class' => '.votes-'.request()->input('id').'',
                'type' => 'unvoted',
                'svg_class' => '.svg-'.request()->input('id').''
            ]);
        }else{
            DB::table('article_votes')->insert([
                'user_id' => Auth::guard('users')->user()->id,
                'article_id' => request()->input('id'),
                'updated' => Carbon::now(),
                'date' => Carbon::now()
            ]);
            DB::table('articles')->where('id',request()->input('id'))->update([
                'votes' => DB::raw('votes + 1')
            ]);
            return response()->json([
                'message' => number_format(DB::table('articles')->where('id',request()->input('id'))->first()->votes),
                'status' => 'success',
                'class' => '.votes-'.request()->input('id').'',
                'type' => 'voted',
                'svg_class' => '.svg-'.request()->input('id').''
            ]);

        }
    }
    // airtime topup
    public function AirtimeTopup(){
        $settings=json_decode(DB::table('settings')->where('key','finance_settings')->first()->json);
        if($settings->vtu->airtime == 'closed'){
            return response()->json([
                'message' => 'Airtime portal is currently closed',
                'status' => 'error'
            ]);
        }
        
        $networks=[
            'mtn' => '01',
            'airtel' => '04',
            'globacom' => '02',
            '9mobile' => '03'
        ];
        $plans=[
            '50' => '50',
            '1000' => '10000',
            '2000' => '2000',
            '3000' => '3000',
            '4000' => '4000',
            '5000' => '5000',
            '6000' => '6000'
        ];
          if(Auth::guard('users')->user()->activities_balance < $plans[request()->input('amount')]){
            return response()->json([
                'message' => 'Insufficient funds in  your  Activities balance',
                'status' => 'error'
            ]);
        }
        $response=Http::withToken(env('CKONNECT_API_KEY'))->get('https://nellobytesystems.com/APIAirtimeV1.asp',[
            'UserID' => env('CKONNECT_USER_ID'),
            'APIKey' => env('CKONNECT_API_KEY'),
            'MobileNetwork' => $networks[strtolower(request()->input('network'))],
            'Amount' => request()->input('amount'),
            'MobileNumber' => request()->input('number'),
            'RequestID' => strtoupper(uniqid('VTU')),
            'CallBackURL' => url('users/get/airtime/topup/complete')
        ]);
       $json=json_decode(json_encode($response->json()));

       if($json->status = 'ORDER_RECEIVED'){
        DB::table('users')->where('id',Auth::guard('users')->user()->id)->update([
            'activities_balance' => DB::raw('activities_balance - '.$plans[request()->input('amount')].'')
        ]);
          DB::table('transactions')->insert([
             'uniqid' => strtoupper(uniqid('trx')),
            'user_id' => Auth::guard('users')->user()->id,
            'type' => 'Airtime Topup',
            'class' => 'debit',
            'amount' => request()->input('amount'),
            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000" viewBox="0 0 256 256"><path d="M176,16H80A24,24,0,0,0,56,40V216a24,24,0,0,0,24,24h96a24,24,0,0,0,24-24V40A24,24,0,0,0,176,16ZM72,64H184V192H72Zm8-32h96a8,8,0,0,1,8,8v8H72V40A8,8,0,0,1,80,32Zm96,192H80a8,8,0,0,1-8-8v-8H184v8A8,8,0,0,1,176,224Z"></path></svg>',
            'json' => json_encode([
                'data' => json_encode($json),
                'wallet' => 'activities_wallet',
                'body' => [
                    'number' => request()->input('number'),
                    'network' => request()->input('network'),
                    'amount' => request()->input('amount')
                ]
            ]),
            'status' => 'success',
            'updated' => Carbon::now(),
            'date' => Carbon::now()
        ]);
        return response()->json([
            'message' => 'Airtime Topup successfull',
            'status' => 'success',
            'url' => url('users/transactions')
        ]);
       }else{
       // return $json->status;
        return response()->json([
            'message' => 'Internal server error,please try again later',
            'status' => 'error'
        ]);
       }

       
    }
    // data topup
    public function DataTopup(){
        $settings=json_decode(DB::table('settings')->where('key','finance_settings')->first()->json);
        if($settings->vtu->data == 'closed'){
            return response()->json([
                'message' => 'Airtime portal is currently closed',
                'status' => 'error'
            ]);
        }
        
        $networks=[
            'mtn' => '01',
            'airtel' => '04',
            'globacom' => '02',
            '9mobile' => '03'
        ];
        $plans=[
            '50' => '50',
            '1000' => '10000',
            '2000' => '2000',
            '3000' => '3000',
            '4000' => '4000',
            '5000' => '5000',
            '6000' => '6000'
        ];
        if(strtolower(request()->input('network')) == 'mtn'){
            $data_plans=[
                '1000' => '1000.0',
                '2000' => '2000.0',
                '3000' => '3000.0',
                '5000' => '5000.0'
            ];

        }
          if(strtolower(request()->input('network')) == 'glo'){
            $data_plans=[
                '1000' => '1000.11',
                '2000' => '2000',
                '3000' => '3000.12',
                '5000' => '5000.11',
                '6000' => '1500.02'
            ];

        }
        if(strtolower(request()->input('network')) == 'airtel'){
            $data_plans=[
                '1000' => '499.91',
                '2000' => '749.91',
                '3000' => '999.91',
                '5000' => '1499.91',
                '6000' => '2499.91'
            ];

        }
        if(strtolower(request()->input('network')) == '9mobile'){
            $data_plans=[
                '1000' => '1000.01',
                '2000' => '2000.01',
                '3000' => '3000.01',
                '5000' => '4000.01',
                '6000' => '5000.01'
            ];

        }
        if(Auth::guard('users')->user()->activities_balance < $plans[request()->input('amount')]){
            return response()->json([
                'message' => 'Insufficient funds in  your  Activities balance',
                'status' => 'error'
            ]);
        }
       $plan=$data_plans[strtolower(request()->input('amount'))] ?? '';
       if($plan == ''){
        return response()->json([
            'message' => 'This data plan is currently unavailable,please select another plan',
            'status' => 'error'
        ]);
       }
      

      
        $response=Http::withToken(env('CKONNECT_API_KEY'))->get('https://nellobytesystems.com/APIDatabundleV1.asp',[
            'UserID' => env('CKONNECT_USER_ID'),
            'APIKey' => env('CKONNECT_API_KEY'),
            'MobileNetwork' => $networks[strtolower(request()->input('network'))],
            'DataPlan' => $plan,
            'MobileNumber' => request()->input('number'),
            'RequestID' => strtoupper(uniqid('VTU')),
            'CallBackURL' => url('users/get/airtime/topup/complete')
        ]);
       $json=json_decode(json_encode($response->json()));

       if($json->status = 'ORDER_RECEIVED'){
        DB::table('users')->where('id',Auth::guard('users')->user()->id)->update([
            'activities_balance' => DB::raw('activities_balance - '.$plans[request()->input('amount')].'')
        ]);
          DB::table('transactions')->insert([
             'uniqid' => strtoupper(uniqid('trx')),
            'user_id' => Auth::guard('users')->user()->id,
            'type' => 'Data Bundle',
            'class' => 'debit',
            'amount' => request()->input('amount'),
            'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000" viewBox="0 0 256 256"><path d="M135.16,84.42a8,8,0,0,0-14.32,0l-72,144a8,8,0,0,0,14.31,7.16L77,208h102.1l13.79,27.58A8,8,0,0,0,200,240a8,8,0,0,0,7.15-11.58ZM128,105.89,155.06,160H100.94ZM85,192l8-16h70.1l8,16Zm74.54-98.26a32,32,0,1,0-63,0,8,8,0,1,1-15.74,2.85,48,48,0,1,1,94.46,0,8,8,0,0,1-7.86,6.58,8.74,8.74,0,0,1-1.43-.13A8,8,0,0,1,159.49,93.74ZM64.15,136.21a80,80,0,1,1,127.7,0,8,8,0,0,1-12.76-9.65,64,64,0,1,0-102.18,0,8,8,0,0,1-12.76,9.65Z"></path></svg>',
            'json' => json_encode([
                'data' => json_encode($json),
                'wallet' => 'activities_wallet',
                'body' => [
                    'number' => request()->input('number'),
                    'network' => request()->input('network'),
                    'amount' => request()->input('amount')
                ]
            ]),
            'status' => 'success',
            'updated' => Carbon::now(),
            'date' => Carbon::now()
        ]);
        return response()->json([
            'message' => 'Data Bundle purchase successfull',
            'status' => 'success',
            'url' => url('users/transactions')
        ]);
       }else{
      //  return $json->status;
        return response()->json([
            'message' => 'Internal server error,please try again later',
            'status' => 'error'
        ]);
       }

       
    }
}
