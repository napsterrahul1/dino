<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

use App\User;
use App\Profile;
use App\Warranty;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Validation\Rule;
use DataTables,Auth;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('users.index');
    }

    public function getUserList(Request $request)
    {
        
        $data  = Profile::get();
        $sr = 1;

        return Datatables::of($data) 
                
                ->addColumn('action', function($data){
                    
                    if ($data->status == 'Open'){
                        return '<div class="table-actions">
                                <a href="'.url('customers/'.$data->id).'" >'.editIcon().'</a>
                            </div>';
                    }else{
                        return '';
                    }
                                // <a href="'.url('user/delete/'.$data->id).'">'.deleteIcon().'</i></a>

                })
                ->addColumn('srn', function($data) use ($sr){
                        return $sr++;
                })
                ->rawColumns(['action','srn'])
                ->make(true);
    }
    public function getUserList1(Request $request)
    {
        
        $data  = Warranty::get();

        return Datatables::of($data)
                ->addColumn('action', function($data){
                    if (Auth::user()->can('manage_user')){
                        return '<div class="table-actions">
                                <a href="'.url('user/'.$data->id).'" >'.editIcon().'</a>
                            </div>';
                    }else{
                        return '';
                    }
                })
                ->rawColumns(['roles','permissions','action'])
                ->make(true);
    }

    public function create()
    {
        try
        {
            $roles = Role::pluck('name','id');
            return view('users.create-user', compact('roles'));

        }catch (\Exception $e) {
            $bug = $e->getMessage();
            return redirect()->back()->with('error', $bug);

        }
    }

    public function store(Request $request)
    {
        // create user 
        $validator = Validator::make($request->all(), [
            'name'     => 'required | string ',
            'email'    => 'required | email | unique:users',
            'password' => 'required | confirmed',
            'role'     => 'required'
        ]);
        
        if($validator->fails()) {
            return redirect()->back()->withInput()->with('error', $validator->messages()->first());
        }
        try
        {
            // store user information
            $user = User::create([
                        'name'     => $request->name,
                        'email'    => $request->email,
                        'password' => Hash::make($request->password),
                    ]);

            // assign new role to the user
            $user->syncRoles($request->role);

            if($user){ 
                return redirect('users')->with('success', 'New user created!');
            }else{
                return redirect('users')->with('error', 'Failed to create new user! Try again.');
            }
        }catch (\Exception $e) {
            $bug = $e->getMessage();
            return redirect()->back()->with('error', $bug);
        }
    }

    public function edit($id)
    {
        try
        {
            $user  = User::with('roles','permissions')->find($id);

            if($user){
                $user_role = $user->roles->first();
                $roles     = Role::pluck('name','id');

                return view('users.user-edit', compact('user','user_role','roles'));
            }else{
                return redirect('404');
            }

        }catch (\Exception $e) {
            $bug = $e->getMessage();
            return redirect()->back()->with('error', $bug);
        }
    }

    public function update(Request $request)
    {

        // update user info
        $validator = Validator::make($request->all(), [
            'id'       => 'required',
            'name'     => 'required | string ',
            'email'    => 'required | email',
            'role'     => 'required'
        ]);

        // check validation for password match
        if(isset($request->password)){
            $validator = Validator::make($request->all(), [
                'password' => 'required | confirmed'
            ]);
        }
        
        if ($validator->fails()) {
            return redirect()->back()->withInput()->with('error', $validator->messages()->first());
        }

        try{
            
            $user = User::find($request->id);

            $update = $user->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);

            // update password if user input a new password
            if(isset($request->password)){
                $update = $user->update([
                    'password' => Hash::make($request->password)
                ]);
            }

            // sync user role
            $user->syncRoles($request->role);

            return redirect()->back()->with('success', 'User information updated succesfully!');
        }catch (\Exception $e) {
            $bug = $e->getMessage();
            return redirect()->back()->with('error', $bug);

        }
    }

    public function profile()
    {
        try
        {
            $user = Auth::user(); 

            if($user){
                
                return view('users.profile', compact('user'));
            }else{
                return redirect('404');
            }

        }catch (\Exception $e) {
            $bug = $e->getMessage();
            return redirect()->back()->with('error', $bug);
        }
    }

    public function updateProfile(Request $request)
    {

        $id = $request->user_id;
        $request->validate([
            'email'   =>  [
            'required',
            'email',
            'max:255',
            Rule::unique('users')->ignore($id)
        ],
        'name' => 'required|string|min:3|max:255',
        ]);

        $user = User::find($id);

        $udata  =      [
            'name'=>$request->name,
            'email'=>$request->email,
            'address'=>$request->address,
            'phone'=>$request->phone,
        ];

        if($request->password){
            $udata['password']=Hash::make($request->password);
        }              
        $image = $request->file('profile_img');

        if($image)  {
            $profile_img = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/profile_img/');

            if(isset($user->profile_img) && $user->profile_img!=""){
                @unlink($destinationPath.$user->profile_img);
            }

            if (!is_dir($destinationPath)) {
                @mkdir($destinationPath, 0777, true);
            }
            $image->move($destinationPath, $profile_img);
            $udata['profile_img']  = $profile_img;
        } 

        $updated = $user->update($udata);
        return redirect('profile')->with(['success'=>'Profile has updated succesfully']);
    }


    public function delete($id)
    {
        $user   = User::find($id);
        if($user){
            $user->delete();
            return redirect('users')->with('success', 'User removed!');
        }else{
            return redirect('users')->with('error', 'User not found');
        }
    }
}