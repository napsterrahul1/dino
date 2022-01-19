<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class CustomerController extends Controller
{
    
    public function index()
    {
        return view('dashboard.index');
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
        dd($request->all());
        $status  = Profile::find($request->id);
        $status->status = $request->status;
        $status->save();

        return redirect('customers')->with('sucess','Update suceesfuly');
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
