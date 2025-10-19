<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class UsersDashboardController extends Controller
{
    // login
    public function Login(){
        return view('users.auth.login');
    }
    // register
    public function Register(){
        return view('users.auth.register',[
            'pkg' => DB::table('packages')->where('status','active')->orderBy('date','desc')->get()
        ]);
    }
     // referral register
    public function RefRegister($ref){
    
        $username='';
       if( DB::table('users')->where('username',$ref)->exists()){
         $username=DB::table('users')->where('username',$ref)->first()->username;
       }
      // return $username;
        return view('users.auth.register',[
            'pkg' => DB::table('packages')->where('status','active')->orderBy('date','desc')->get(),
            'ref' => $username
        ]);
    }
    // dashboard
    public function Dashboard(){
 //   return 'tech';
    return view('users.dashboard',[
        'all_time' => DB::table('transactions')->where('class','credit')->whereNot('type','like','%deposit%')->where('status','success')->where('id',Auth::guard('users')->user()->id)->sum('amount'),
        'social' => json_decode(DB::table('settings')->where('key','social_settings')->first()->json)
    ]);
    }
    // tasks
    public function Tasks(){
       
        if(!json_decode(Auth::guard('users')->user()->package)->earning_per_click){
            return CheckPackage();
        }
    //   return json_decode(Auth::guard('users')->user()->package)->earning_per_click;
        $tasks=DB::table('tasks')->where('status','active')->whereNotIn('id',function($q){
          $q->select('task_id')->from('task_proofs')->where('user_id',Auth::guard('users')->user()->id);
        })->orderBy('date','desc')->paginate(10);
        if(request()->has('paginate')){
            return view('paginate.users',[
                'tasks' => $tasks,
                'reward' => json_decode(Auth::guard('users')->user()->package)->earning_per_click
            ]);
        }
        return view('users.tasks',[
            'tasks' => $tasks,
            'reward' => json_decode(Auth::guard('users')->user()->package)->earning_per_click
        ]);
    }
    // spin
    public function Spin(){
        return view('users.spin');
    }
    // transactions
    public function Transactions(){
        
        $transactions=DB::table('transactions')->where('user_id',Auth::guard('users')->user()->id)->orderBy('date','desc')->paginate(10);
       if(request()->has('status')){
           $transactions=DB::table('transactions')->where('user_id',Auth::guard('users')->user()->id)->where('status',request()->input('status'))->orderBy('date','desc')->paginate(10);
        
        }
        if(request()->has('class')){
           $transactions=DB::table('transactions')->where('user_id',Auth::guard('users')->user()->id)->where('class',request()->input('class'))->orderBy('date','desc')->paginate(10);
        
        }
        $transactions->getCollection()->transform(function($each){
            $each->date=Carbon::parse($each->date)->format('M d Y,H:i:s');
            return $each;
        });
        if(request()->has('paginate')){
             return view('paginate.users',[
            'transactions' => $transactions
        ]);
        }
        return view('users.transactions',[
            'transactions' => $transactions
        ]);
    }
    // profile
    public function Profile(){
        return view('users.profile',[
            'downlines' => DB::table('users')->where('ref',Auth::guard('users')->user()->username)->count()
        ]);
    }
    // add bank
    public function AddBank(){
        return view('users.bank',[
            'bank_linked' => Auth::guard('users')->user()->bank ?? 'false',
            'bank' => json_decode(Auth::guard('users')->user()->bank ?? '{}')
        ]);
    }
    // withdraw
    public function Withdraw(){
        if((Auth::guard('users')->user()->bank ?? '') == ''){
            return redirect('users/bank/add');
        }
        $finance=json_decode(DB::table('settings')->where('key','finance_settings')->first()->json ?? '{}');
        return view('users.withdraw',[
            'bank_linked' => Auth::guard('users')->user()->bank ?? 'false',
            'bank' => json_decode(Auth::guard('users')->user()->bank ?? '{}'),
            'activities_minimum' => $finance->wallets->activities->minimum,
            'affiliate_minimum' => $finance->wallets->affiliate->minimum
        ]);
    }
    // invite 
    public function Invite(){
        return view('users.refer',[
            'package' => json_decode(Auth::guard('users')->user()->package)
        ]);
    }
    // team
    public function Team(){
        $team=DB::table('users')->where('ref',Auth::guard('users')->user()->username)->orWhereIn('ref',function($q){
            $q->select('username')->from('users')->where('ref',Auth::guard('users')->user()->username);
        })->paginate(10);
        $team->getCollection()->transform(function($each){
            $each->frame=Carbon::parse($each->date)->diffForHumans();
            $each->commission=DB::table('transactions')->where('user_id',Auth::guard('users')->user()->id)->where('json->data->type','referral_commission')->where('json->data->user_id',$each->id)->sum('amount');
            $each->downlines=DB::table('users')->where('ref',$each->username)->count();
            return $each;
        });
        return view('users.referrals',[
            'team' => $team
        ]);
    }
    // password
    public function Password(){
        return view('users.password');
    }
    // write article
    public function WriteArticle(){
    if(CheckPackage()){
        return CheckPackage();
    }
        return view('users.articles.write',[
            'topics' => DB::table('article_topics')->where('status','active')->orderBy('date','desc')->limit(10)->get()
        ]);
    }
    // read articles
    public function ReadArticles(){
        $articles=DB::table('articles')->where('status','active')->orderBy('date','desc')->paginate(10);
        $articles->getCollection()->transform(function($each){
            $each->user=DB::table('users')->where('id',$each->user_id)->first();
            $each->topic=json_decode($each->topic);
            $each->voted=DB::table('article_votes')->where('user_id',Auth::guard('users')->user()->id)->where('article_id',$each->id)->count();
            return $each;

        });
        if(request()->has('paginate')){
            return view('paginate.users',[
            'articles' => $articles,
            
        ]);
        }
        return view('users.articles.read',[
            'articles' => $articles
        ]);
    }
      // read more
    public function ReadMore(){
        $article=DB::table('articles')->where('id',request()->input('id'))->orderBy('date','desc')->first();
      
           $article->user=DB::table('users')->where('id',$article->user_id)->first();
           $article->topic=json_decode($article->topic);
           $article->voted=DB::table('article_votes')->where('user_id',Auth::guard('users')->user()->id)->where('article_id',$article->id)->count();
          

      
      
        return view('users.articles.more',[
            'data' => $article
        ]);
    }
    // airtime topup
    public function AirtimeTopup(){
        return view('users.airtime',[
            'general' => json_decode(DB::table('settings')->where('key','finance_settings')->first()->json)
        ]);
    }
     // data topup
    public function DataTopup(){
        return view('users.data',[
            'general' => json_decode(DB::table('settings')->where('key','finance_settings')->first()->json)
        ]);
    }
    //  index page
    public function Index(){
        return view('users.index.home');
    }
    // transaction receipt
    public function TransactionReceipt(){
        $trx=DB::table('transactions')->where('id',request()->input('id'))->first();
        $trx->date_format=Carbon::parse($trx->date)->format('D, M Y,H:i:s');
        $trx->json=json_decode($trx->json ?? '{}');
        return view('users.receipt',[
            'data' => $trx
        ]);
    }
    // vendors
    public function Vendors(){
     
        $vendors=DB::table('users')->where('type','vendor')->where('status','active')->paginate(100);

        return view('users.index.vendors',[
            'vendors' => $vendors
        ]);
    }
    // profile photo update
    public function ProfilePhoto(){
        return view('users.photo');
    }
    // logout
     public function Logout(){
        Auth::guard('users')->logout();
        return redirect('login');
     }
    //  vendor dashboard
    public function VendorDashboard(){
        if(Auth::guard('users')->user()->type == 'user'){
            return redirect('users/dashboard');
        }
        $coupons=DB::table('coupons')->where('vendor_id',Auth::guard('users')->user()->id)->paginate(10);
        if(request()->has('status')){
            $coupons=DB::table('coupons')->where('vendor_id',Auth::guard('users')->user()->id)->where('status',request('status'))->paginate(10);
        }
        $coupons->getCollection()->transform(function($each){
            $each->used_by=DB::table('users')->where('coupon',$each->code)->first()->username ?? '---';
            $each->ref=DB::table('users')->where('coupon',$each->code)->first()->ref ?? '---';
            $each->frame=Carbon::parse($each->date)->diffForHumans();
            $each->package=json_decode($each->package);
            return $each;
        });
        if(request()->has('paginate')){
            return view('paginate.users',[
            'coupons' => $coupons,
            'vendors_dashboard' => true

        ]);
        }
        return view('users.vendor.dashboard',[
            'total_coupons' => DB::table('coupons')->where('vendor_id',Auth::guard('users')->user()->id)->count(),
            'active_coupons' => DB::table('coupons')->where('vendor_id',Auth::guard('users')->user()->id)->where('status','active')->count(),
            'redeemed_coupons' => DB::table('coupons')->where('vendor_id',Auth::guard('users')->user()->id)->where('status','redeemed')->count(),
            'value' => DB::table('coupons')->where('vendor_id',Auth::guard('users')->user()->id)->sum('package->cost'),
            'coupons' => $coupons
        ]);
    }
    // coupon checker
    public function CouponChecker(){
        return view('users.index.checker');
    }
    // top earners
    public function TopEarners(){
        $top=DB::table('transactions')->where('type','like','%commission%')->groupBy('user_id')->select('user_id',DB::raw('SUM(amount) as total'))->having('total','>','0')->orderBy('total','desc')->limit(10)->get();
        $top->transform(function($each){
            $each->user=DB::table('users')->where('id',$each->user_id)->first();
            return $each;
        });

        return view('users.index.top_earners',[
            'top' => $top
        ]);
    }
    // about us 
    public function AboutUs(){
        return view('users.index.about');
    }

    // terms
    public function Terms(){
        return view('users.index.terms');
    }
    // package list
    public function PackageList(){
        $packages=DB::table('packages')->orderBy('cost','asc')->get();
        return view('users.index.packages',[
            'packages' => $packages
        ]);
    }

}