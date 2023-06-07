<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Xarjy;
use App\Models\Lokk;
use Hash;


class userconteoller extends Controller

{
 function mh(){
  
    return view('welcome');
 }
public function fav($id,$idd){
 $con=Lokk::where('id',$id)->first();
 $first = collect($idd);
    $user = Lokk::find($id);
    $user->fav= $first->merge($user->fav);
    $user->increment('zhmara');
    $user->save();
  
    return back();
   
 }
 public function del($id,$idd){
    $con=Lokk::where('id',$id)->first();
    $first = collect($idd);
       $user = Lokk::find($id);
    ///   $user->fav= $first->merge($user->fav);
    $length = count($user->fav);
    $array=$user->fav;
    for ($i = 0; $i < $length; $i++) {
      if ( $array[$i]==$idd) {
        unset($array[$i]);

      
      }
    }
    $user->fav= array_values($array);
    $user->decrement('zhmara');
    $user->save();
  
    return back();
     
      
      
    }

 function dash($id,Request $request){
    $noresult="no";
    $search=$request['search'] ?? "";
    if ($search != "") {
        $lokk=Lokk::where('name' ,'LIKE', "%$search%")->get(); 
        if ( $lokk->count()==0) {
           $noresult="yes";
        }
        else{  $noresult="no";}
    }else{
        $lokk=Lokk::where('uid', '<>' , $id)->orderBy('zhmara', 'DESC')->get();
    }
    $user=new User();
    $a=User::all();
 $taibat=Lokk::where('uid' , $id)->get();
 if($taibat->count()==0) {
    $noty='yes';

}else{
    $noty='no';
}
    $xarjy=new Xarjy();
    $hama=$user::where('id',$id)->first();
    $amount = Xarjy::where('uid', $id)->sum('price');
    return view('dashboard',['a'=>$a,'noresult' => $noresult,'id'=>$id ,'hama' => $hama,'amount'=>$amount,'lokk' => $lokk,'taibat'=>$taibat,'noty'=>$noty,'search'=>$search]);
 }
 public function register(Request $request){
    $request->validate([
'username'=>'required',
'password'=>'required',
'confirm'=>'required|same:password'
    ],[
        'comfirm.same'=>'not the same'
    ]);
$user=new User();
$user->name=$request->username;
$user->password=$request->password;
$date=$user->save();
if ($date) {
    
   return redirect('/dashboard/'.$user->id)->with('session','yes');
}
else{
    return redirect()->back()->with('erorr','No');
}
 }
 public function expense($id){
    $xarjy=new Xarjy();
    $user=new User();
    $mama=$user::where('id',$id)->first();
    $hama=$xarjy::where('uid',$id)->get();
    return view('epense',['hama' => $hama,'mama'=>$mama]);
    
 }

public function add(Request $request){
    $request->validate([
'name'=>'required',
'type'=>'required',
'price'=>'required'
    ]);
    $xarjy=new Xarjy();
    $xarjy->uid=$request->id;
    $xarjy->name=$request->name;
    $xarjy->type=$request->type;
    $xarjy->price=$request->price;
    $date=$xarjy->save();

    if ($date) {
    
        return redirect('/dashboard/'.$request->id.'/epense');
     }
}

public function log(){
  
    return view('login');

}
public function mha(){
  
    return view('mhamad');

}
public function login(Request $request){
    $credentials = $request->validate([
        'name' => ['required'],
        'password' => ['required'],
    ]);

$mh= User::where('name',$request->name)->first();
if($mh){
if (($mh->password)==$request->password) {
  
}
  return redirect('/dashboard/'.$mh->id)->with('user',$request->name);
  
}
else{
   return redirect('/login');
}
}
public function addpost(Request $request){
$request->validate([
'title'=>'required'
]);
$post=new Lokk();
$post->title=$request->title;
$post->name=$request->naw;
$post->uid=$request->index;
$a=$post->save();
if ($a) {
  return back();
}
}
public function addcoment(Request $request){
$user = Lokk::find($request->id);
$first = collect($request->coment);
$second = collect($request->name);

$user->coment= $first->merge($user->coment);
$user->comentuid= $second->merge($user->comentuid);
    $user->save();


    return back();
}
}