<?php

namespace App\Http\Controllers;

use App\Models\customers;
use Illuminate\Http\Request;
use DB;

class crudcontroller extends Controller
{
    public function getallusers()
    {
        $users = DB::table('customers')->get();
        return view('userspage')->with('users', $users);
    }
    public function postuser(Request $req)
    {

        $input = $req->all();
        $insert = new customers();
        $insert->username = $input['username'];
        $insert->firstname = $input['firstname'];
        $insert->lastname = $input['lastname'];
        $insert->email = $input['email'];
        $insert->customer = $input['customer'];
        if(isset($input['role'])){
            $insert->role = $input['role'];
        }
        $insert->save();

        $users = DB::table('customers')->get();
        return view('userspage')->with('users', $users);
    }
    public function updateuser(Request $req)
    {

        $input = $req->all();

        $insert = customers::find($input['hid'])->get();

        if ($insert != null) {
            if(isset($input['role'])){
                DB::table('customers')->where('id',$input['hid'])->update(['username'=>$input['username'],'firstname'=>$input['firstname'],'lastname'=>$input['lastname'],'customer'=>$input['customer'],'email'=>$input['email'],'role'=>$input['role']]);
            }
            DB::table('customers')->where('id',$input['hid'])->update(['username'=>$input['username'],'firstname'=>$input['firstname'],'lastname'=>$input['lastname'],'customer'=>$input['customer'],'email'=>$input['email']]);            
        } else {
            echo "No Record Found";
        }

        $users = DB::table('customers')->get();
        return view('userspage')->with('users', $users);
    }

    public function deleteuser(Request $req)
    {

        $input = $req->all();

        $insert = customers::find($input['hid'])->get();

        if ($insert != null) {
            DB::table('customers')->where('id',$input['hid'])->delete();
        } else {
            echo "No Record Found";
        }

        $users = DB::table('customers')->get();
        return view('userspage')->with('users', $users);
    }

}