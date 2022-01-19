<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\Warranty;
use App\User;

class DashboardController extends Controller
{
    public function index()
    {

        $user = auth()->user();
        if($user->role_id ==1){
            return view('dashboard.index');
        }else{
            return view('dashboard.patient');
        }

//        return view('');
        // return redirect('customers');
    }
     public function login()
    {
        if(auth()->user()){
            return redirect('home');
        }
        return view('login.index');
    }
    
    public function customers()
    {
        return view('dashboard.customers');
    }
    public function customersedit(Request $request,$id)
    {
        $user = Profile::find($id);
        return view('dashboard.edit',compact('user'));
    }
    public function customersupdate(Request $request)
    {
        $status  = Profile::find($request->id);
        $status->status = $request->status;
        $status->save();

        if($status->email){
            $content['name'] =  $status->name;
            $content['receipt'] =  $status->receipt;
            $content['seriel'] =  $status->seriel;
            $content['status'] = $request->status;
            $content['message'] = '';
            User::sendMailR($content,$status->email);
        }
        

        return redirect('customers')->with('success','Update suceesfuly');
        // return view('dashboard.edit',compact('user'));
    }
    
    public function storecustomer(Request $request)
    {
        $checkexist = Profile::where('mobile',$request->mobile)
                ->where('receipt',$request->receipt)->first();
        
        // if($checkexist){
        //     return redirect('/')->with('error','Update sucessfuly'); 
        // }
        $status  = new Profile();
        $status->name = $request->name;
        $status->email = $request->email;
        $status->mobile = $request->mobile;
        $status->receipt = $request->receipt;
        $status->seriel = $request->seriel;
        $status->date = $request->date;
        $status->save();

        $content['name'] = $request->name;
        $content['receipt'] = $request->receipt;
        $content['seriel'] = $request->seriel;
        User::sendMail($content,$request->email);

        return redirect('/')->with('success','Request Created sucessfuly. You will receive call from team within 24 hours.');
        // return view('dashboard.edit',compact('user'));
    }

    public function storecustomer1(Request $request)
    {
        $checkexist = Warranty::where('mobile',$request->mobile)
        ->where('receipt',$request->receipt)->first();

            if($checkexist){
                return redirect('/')->with('error','Warranty Data already Exist'); 
            }

        $status  = new Warranty();
        $status->name = $request->name;
        $status->email = $request->email;
        $status->mobile = $request->mobile;
        $status->receipt = $request->receipt;
        $status->seriel = $request->seriel;
        $status->date = $request->date;
        $status->save();

        $content['name'] = $request->name;
        $content['receipt'] = $request->receipt;
        $content['seriel'] = $request->seriel;
        User::sendMail($content,$request->email);
        
        return redirect('/registration')->with('success','Warranty Registered sucessfuly');
        // return view('dashboard.edit',compact('user'));
    }

    public function form()
    {
        return view('dashboard.forms');
    
    }

    public function clearCache()
    {
        \Artisan::call('cache:clear');
        return view('dashboard.clear-cache');
    }
}
