<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\http\requests\MenuRequest;
use App\Models\menu;
//we should make ang get request for the request 
//the model is the kind of model that corresponds to the database in sql
class MenuController extends Controller
{
    public function addItem(MenuRequest $req){
    	$pl=new menu();
        //it gets the the value of the object in the menu object
    	$pl->itemcode=$req->input('itemcode');
    	$pl->itemname=$req->input('itemname');
    	$pl->quantity=$req->input('quantity');
    	$pl->type=$req->input('type');
    	$pl->piece=$req->input('piece');
    	$pl->weight=$req->input('weight');
    	$pl->price=$req->input('price');
        //$pl what we name to the show the value->(eg.price) which is equel to $req(variable we name)->and input the value that correspond to the name in the form which is the same in the mysql database
        
    	if($req->hasFile('img')){
            //when the $req checks that hasFile function has an image present
    		$file=$req->file('img');
            //a file variable gets the file uploaded eg.img which correspond to mysql
            $fname=$file->getClientOriginalName();
            //and here we have to get the original name of the uploaded file 
    		$extension=$file->getClientOriginalExtension();
            //and here wh get the extension of the file
    		$filename=$fname.time().".".$extension;
            //and here we concatenate the file name and a time stamp with the extension
    		$file->move('upload/image/',$filename);
            //here we we move the uploaded file to the folder created with the eg. $filename
    		$pl->img=$filename;
            //and then we make the data equal to the img
    	}else{
    		return $req;
    		$pl->img="";
            //if above conditions aren't met then we get a return for the image from the object no image
    	}
        $pl->save();
        //at the we save it with the save function;
        // dd($pl);
        return redirect()->route('add_menu')->with('success','Item Added');
        //her we return and redirect to the route eg.the page we want and with the (with function) we create a message of success with its corresponding value

    }

    public function allItems(){
    	$pl=new menu;
    	return view('add_menu',['data'=>menu::all()]);
    }

    //with the above function we get the value of the object and we return view to the page desired eg.(aad_menu) and data(or a name the corresponds to the model or info) and the (menu::all() which is an abstract function that get all the value from the data as an associative array)

    public function allItem(){
    	$pl=new menu;
    	return view('menu',['menu'=>menu::all()]);
    }

    public function one_emp($id) {
        $emp = new employee;
        return view('up_emp', ['data' => $emp-> find($id)]);
    }
    //here we get the corresponding value that correspond to the id of the data in mysql and display the data with the view function to the corresponding page that is or to be created


    public function del_item($id){
    	$pl=new menu;
    	$pl->find($id)->delete();
    	return redirect()->route('add_menu')->with('success','Item deleted');
    }

    //here we get the value that correspond to the id of the data and with the delete funtion we delete it and the with the redirect function we go the the route defined with a success message were no view is applied just redirection after changing the data iin that section


    public function update_menu($id) { 
        return view("update_menu", ['menu' => menu::find($id)]);
    } 


    public function update_menu_submit(MenuRequest $req){
        $pl=menu::find($id);
        $pl->itemname=$req->input('itemname');
        $pl->quantity=$req->input('quantity');
        $pl->type=$req->input('type');
        $pl->piece=$req->input('piece');
        $pl->weight=$req->input('weight');
        $pl->price=$req->input('price');

        if($req->hasFile('img')){
            $file=$req->file('img');
            $extension=$file->getClientOriginalExtension();
            $filename=time().".".$extension;
            $file->move('upload/image/',$filename);
            $pl->img=$filename;
        }else{
            return $req;
            $pl->img="";
        }
        $pl->save();
        // dd($pl);
        return redirect()->route('add_menu')->with('success','Item Updated');
     //and the same operation as delete applies here with redirection and data change
    }

}
