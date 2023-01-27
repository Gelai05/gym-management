<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    public function displaymembership(){
        return view('membership')->with('memberships', Membership::orderByDesc('created_at')->get());
    }

    public function createmembership(Request $request){
        $memberships = new Membership;
        $memberships->membershiptype = $request->membershiptype;
        $memberships->membershipprice = $request->membershipprice;
    
        $memberships->save();

        return redirect()->route('displaymembership')->with('success', 'New membership added!');
    }

    public function update(Request $request){
        $memberships = Membership::find($request->id);
        $memberships->status = 'done';
        $memberships->save();

        return redirect()->route('membership')->with('success', $memberships->description.' completed!');
    }

    public function delete(Request $request){
        $memberships = Membership::find($request->id);
        $memberships->delete();

        return redirect()->route('membership')->with('success',' Items Deleted deleted!');
    }

} 