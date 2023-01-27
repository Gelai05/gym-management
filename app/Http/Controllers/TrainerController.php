<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    public function displaytrainer(){
        return view('trainer')->with('trainers', Trainer::orderByDesc('created_at')->get());
    }

    public function createtrainer(Request $request){
        $trainers = new Trainer;
        $trainers->name = $request->name;
        $trainers->email = $request->email;
        $trainers->specialization = $request->specialization;
        $trainers->phone = $request->phone;
    
        $trainers->save();

        return redirect()->route('displaytrainer')->with('success', 'New Trainer added!');

    }

    public function update(Request $request){
        $trainers = Trainer::find($request->id);
        $trainers->status = 'done';
        $trainers->save();

        return redirect()->route('membership')->with('success', $trainers->description.' completed!');
    }

    public function delete(Request $request){
        $trainers = Trainer::find($request->id);
        $trainers->delete();

        return redirect()->route('membership')->with('success',' Items Deleted deleted!');
    }
}
