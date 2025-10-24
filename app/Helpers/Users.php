<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

function CheckPackage(){
 
  return null;
    
}
function Currency($user_id,$nation=null){
  if($nation == null){
 $country=DB::table('users')->where('id',$user_id)->first()->country;
  }else{
     $country=$nation;
  }
 
  switch($country){
    case 'ghana':
      $currency = 'GHC';
      break;
    case 'cameroon':
      $currency='XAF';
      break;
    default:
    $currency='&#8358;';
  }
  return $currency;
}
