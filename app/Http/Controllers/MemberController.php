<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    //In the MemberController, create actions for 
    //displaying a list of members, creating a new member, 
    //updating a member's information, and deleting a member.

    public function displaymember(){
        return view('gymmanagement')->with('members', Member::orderByDesc('created_at')->get());
    }

    public function createmember(Request $request){
        $members = new Member;
        $members->name = $request->name;
        $members->email = $request->email;
        $members->membershiptype = $request->membershiptype;
        $members->membershipx = $request->membershipx;
        $members->trainer_id =  $request->trainer_id;
        $members->membershipid = $request->membership_id;
        $members->save();

        return redirect()->route('gymmanagement')->with('success', 'New member added!');

    }

    public function update(Request $request){
        $members = Member::find($request->id);
        $members->status = 'done';
        $members->save();

        return redirect()->route('gymmanagement')->with('success','Update completed!');
    }

    public function delete(Request $request){
        $members = Member::find($request->id);
        $members->delete();

        return redirect()->route('gymmanagement')->with('success',' Items Deleted deleted!');

    }
}
