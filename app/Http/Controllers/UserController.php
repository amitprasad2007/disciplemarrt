<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Spatie\Permission\Models\Role;
use DB;
use Validator;
use URL;
use Hash;
use Session;

class UserController extends Controller
{
    public function index()
    {
        if(isset($_GET['role']) && $_GET['role']) {
            $role = $_GET['role'];
        } else {
            $role = '';
        }
        if($role == 1) {
            $users = User::role('Admin')->where('is_deleted',0)->get();
        }
        elseif($role == 2) {
            $users = User::role('Instructor')->where('is_deleted',0)->get();
        } elseif($role == 3) {
            $users = User::role('Member')->where('is_deleted',0)->get();
        }elseif($role == 4) {
            $users = User::role('Author')->where('is_deleted',0)->get();
        } else {
            $users = User::where('is_deleted',0)->get();
        } 
        //$users = User::where([['is_deleted','=',0],['role','=',2]])->sortable()->paginate(5);
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
         $roles = Role::pluck('name','name')->all();
          return view('admin.users.create',compact('roles'));
    }

    public function store(Request $request)
    {  
                   $this->validate($request, [

            'name' => 'required',

            'email' => 'required|email|unique:users,email',

           'password' => ['required', 'string', 'min:8'],

            'roles' => 'required'

        ]);
            $input = $request->all();
            $input['password'] = Hash::make($input['password']);
            $user = User::create($input);
            $user->assignRole($request->input('roles'));
            return redirect()->route('users.index')
            ->with('success','User created successfully');
             
    }

  
    public function show($id)
    {
         $user = User::with('roles')->find($id);

        return view('admin.users.show', compact('user'));
    }

   
    public function edit($id)
    {
         $user = User::with('roles')->findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

  
    public function update(Request $request, $id)
    {   
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->address= $request->address;
        $user->city= $request->city;
        $user->state= $request->state;
        $user->country= $request->country;
        if ($request->hasFile('image')) {

            $file =$request->image;
            $imageName = $file->getClientOriginalName();
            $file_ext = pathinfo($imageName, PATHINFO_EXTENSION);
            $image = time() . "." . $file_ext;
            $upload_image = $file->move('users_images', $image);
            $input['image'] = $image;
            if ($user->image) {
                unlink(public_path('users_images/' . $user->image));
            }
        }
        if ($request->hasFile('aadhar_card_photo')) {

            $file1 = $request->aadhar_card_photo;
            $imageName1 = $file1->getClientOriginalName();
            $file_ext1 = pathinfo($imageName1, PATHINFO_EXTENSION);
            $image1 = time() . "." . $file_ext1;
            $upload_image1 = $file1->move('documents', $image1);
            $input['aadhar_card_photo'] = $image1;
            if ($user->aadhar_card_photo) {
                unlink(public_path('documents/' . $user->aadhar_card_photo));
            }
        }
        
        if ($request->hasFile('pan_card_photo')) {

            $file2 = $request->pan_card_photo;
            $imageName2 = $file2->getClientOriginalName();
            $file_ext2 = pathinfo($imageName2, PATHINFO_EXTENSION);
            $image2 = time() . "." . $file_ext2;
            $upload_image2 = $file2->move('documents', $image2);
            $input['pan_card_photo'] = $image2;
            if ($user->pan_card_photo) {
                unlink(public_path('documents/' . $user->pan_card_photo));
            }
        }    
         $user->save();
         DB::table('model_has_roles')->where('model_id',$id)->delete();
         $user->assignRole($request->input('role'));
         $request->session()->flash("message", "User has been updated successfully");
                return redirect("users");
    }

public function destroy($id) {
        
         $user = User::find($id);
        $status = $user->is_deleted;

        if ($status == 0) {
            $user->is_deleted = '1';
        } else {
            $user->is_deleted = '0';
        }
        $user->save();

        Session::flash('message', 'User deleted successfully');
        Session::flash('alert-class', 'alert-success');
        return redirect('users');
    }
    
    public function changeStatus($id) {

        $user = User::find($id);
        $status = $user->is_active;

        if ($status == 0) {
            $user->is_active = '1';
            $msg = 'User Active.';
            $alert = 'alert-success';
        } else {
            $user->is_active = '0';

            $msg = 'User Inactive.';
            $alert = 'alert-danger';
        }
        $user->save();

        Session::flash('message', $msg);
        Session::flash('alert-class', $alert);
        return redirect('users');
    }


}
