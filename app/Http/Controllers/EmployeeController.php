<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EmployeeRequest;
use App\Models\employee;

class EmployeeController extends Controller
{
    public function submit(EmployeeRequest $req){
    	$emp=new employee();
    	$emp->fullname=$req->input('fullname');
    	$emp->position=$req->input('position');
    	$emp->shift=$req->input('shift');
    	$emp->email=$req->input('email');
    	$emp->phone=$req->input('phone');
    	$emp->address=$req->input('address');

        if ($req->hasFile('image')){
           $file=$req->file('image');
           $extension=$file->getClientOriginalExtension();
           $filename=time().'.'.$extension;
           $file->move('upload/image/',$filename);
           $emp->image=$filename; 
        }else{
            return $req;
            $emp->image="";
        }
    	
    	$emp->save();
    	return redirect()->route('add_employee')->with('success','Employee added');
    }

    public function all_emp(){
        $emp=new employee;
        return view('add_employee',['data'=>employee::all()]);
    }

    // public function show_emp($id){
    //     // $emp=new employee;
    //     return view('up_emp',['data'=>employee::find($id)]);
    // }

    public function del_emp($id){
        $emp=new employee;
        $emp->find($id)->delete();
        return redirect()->route('add_employee')->with('success','Employee deleted');
    }


    public function update_emp($id) { 
        return view("update_emp", ['employee' => employee::find($id)]);
    } 

    public function update_emp_submit($id, EmployeeRequest $req) {
       $emp = employee::find($id);
            
       $emp-> fullname =$req->input('fullname');
        $emp-> position =$req->input('position');
        $emp-> shift =$req->input('shift');
        $emp-> email =$req->input('email');
        $emp-> phone =$req->input('phone');
        $emp-> address =$req->input('address');

        if ($req->hasFile('image')){
           $file=$req->file('image');
           $extension=$file->getClientOriginalExtension();
           $filename=time().'.'.$extension;
           $file->move('upload/image/',$filename);
           $emp->image=$filename; 
        }else{
            return $req;
            $emp->image="";
        }
       $emp -> save();
       return redirect() -> route("add_employee",$id)->with("success","Item Updated");
    }

    //  public function update_emp(EmployeeRequest $req,$id){
    //     $emp= employee::find($id);
    //     $emp->fullname=$req->input('fullname');
    //     $emp->position=$req->input('position');
    //     $emp->shift=$req->input('shift');
    //     $emp->email=$req->input('email');
    //     $emp->phone=$req->input('phone');
    //     $emp->address=$req->input('address');

    //     if ($req->hasFile('image')){
    //        $file=$req->file('image');
    //        $extension=$file->getClientOriginalExtension();
    //        $filename=time().'.'.$extension;
    //        $file->move('upload/image/',$filename);
    //        $emp->image=$filename; 
    //     }else{
    //         return $req;
    //         $emp->image="";
    //     }
    //     $emp->save();
    //     return redirect()->route('add_employee')->with('success','Employee update');
    // }
}
