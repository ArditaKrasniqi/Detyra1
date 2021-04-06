<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserMember;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Table;

class UserGym extends Controller
{
    function add(Request $req)
    {

        $userMember = new UserMember;

        $userMember->fname = $req->fname;
        $userMember->lname = $req->lname;
        $userMember->bdate = $req->bdate;
        $userMember->edate = $req->edate;
        $userMember->ppicture = $req->ppicture;

        $userMember->save();

    }

    function show()
    {
        $data = UserMember::all();
        return view('usergym', ['members' => $data]);
    }
   function delete($id){
        $data=UserMember::find($id);
        $data->delete();
        return redirect('usergym');
}
    function edit($id){
        $data= UserMember::find($id);
        return view('edit',['data'=>$data]);
    }
    function update(Request $req){
        $data= UserMember::find($req->id);


        $data->fname = $req->fname;
        $data->lname = $req->lname;
        $data->bdate = $req->bdate;
        $data->edate = $req->edate;
        $data->ppicture = $req->ppicture;

        $data->save();
        return redirect('usergym');


    }







}
