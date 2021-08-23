<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\contact;

class ContactController extends Controller
{
    public function submit(ContactRequest $req){
    	$ct=new contact();
    	$ct->fname=$req->input('fname');
    	$ct->lname=$req->input('lname');
    	$ct->email=$req->input('email');
    	$ct->phone=$req->input('phone');
    	$ct->message=$req->input('message');
    	$ct->save();
    	return redirect()->route('contact')->with('success','Info sent');
    }

    public function all_data(){
        $mail=new contact;
        return view('mail',['data'=>contact::all()]);
    }

    public function del_con($id){
        $con=new contact;
        $con->find($id)->delete();
        return redirect()->route('mail')->with('success','email deleted');
    }
}
