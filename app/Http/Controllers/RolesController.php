<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Validator;
use DataTables,Auth;

class RolesController extends Controller
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
     * Show the roles page
     *
     */
    public function index()
    {
        try{
            $permissions = Permission::pluck('name','id');

            return view('roles.index', compact('permissions'));
        }catch (\Exception $e) {
            $bug = $e->getMessage();
            return redirect()->back()->with('error', $bug);

        }
    }

    /**
     * Show the role list with associate permissions.
     * Server side list view using yajra datatables
     */

    public function getRoleList(Request $request)
    {
        
        $data  = Role::get();

        return Datatables::of($data)
                ->addColumn('permissions', function($data){
                    $roles = $data->permissions()->get();
                    $badges = '';
                   
                    if($data->name == 'Super Admin'){
                        return '<span class="badge badge-success m-1">All permissions</span>';
                    }else{
                        if (Auth::user()->can('manage_permission')){
                            return '<span class="badge badge-success m-1"><a href="'.url('permission/'.$data->id).'" >View Permission</a></span>';
                        }else{
                            return '';
                        }
                    }

                    return $badges;
                })
                ->addColumn('action', function($data){
                    if($data->name == 'Super Admin'){
                        return '';
                    }
                    if (Auth::user()->can('manage_roles')){
                        return '<div class="table-actions">
                                    <a href="'.url('role/edit/'.$data->id).'" >'.editIcon().'</a>
                                    <a href="'.url('role/delete/'.$data->id).'"  >'.deleteIcon().'</a>
                                </div>';
                    }else{
                        return '';
                    }
                })
                ->rawColumns(['permissions','action'])
                ->make(true);
    }

    /**
     * Store new roles with assigned permission
     * Associate permissions will be stored in table
     */

    public function create(Request $request)
    {
        // laravel default validator
        $validator = Validator::make($request->all(), [
            'role' => 'required'
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()->withInput()->with('error', $validator->messages()->first());
        }
        try{

            $role = Role::create(['name' => $request->role]);
            //$role->syncPermissions($request->permissions);

            if($role){ 
                return redirect('roles')->with('success', 'Role created succesfully!');
            }else{
                return redirect('roles')->with('error', 'Failed to create role! Try again.');
            }
        }catch (\Exception $e) {
            $bug = $e->getMessage();
            return redirect()->back()->with('error', $bug);
        }
    }

    public function edit($id)
    {
        $role  = Role::where('id',$id)->first();
        // if role exist
        if($role){

            return view('roles.edit', compact('role'));
        }else{
            return redirect('404');
        }
    }

    public function update(Request $request)
    {
        echo "<pre>"; print_r($request->all());die;

        // update role
        $validator = Validator::make($request->all(), [
            'role' => 'required',
            'id'   => 'required'
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()->withInput()->with('error', $validator->messages()->first());
        }
        try{
            
            $role = Role::find($request->id);

            $update = $role->update([
                          'name' => $request->role
                      ]);

            // Sync role permissions
            //$role->syncPermissions($request->permissions);

            return redirect('roles')->with('success', 'Role info updated succesfully!');
        }catch (\Exception $e) {
            $bug = $e->getMessage();
            return redirect()->back()->with('error', $bug);

        }
    }


    public function delete($id)
    {
        $role   = Role::find($id);
        if($role){
            $delete = $role->delete();
            $perm   = $role->permissions()->delete();

            return redirect('roles')->with('success', 'Role deleted!');
        }else{
            return redirect('404');
        }
    }
}