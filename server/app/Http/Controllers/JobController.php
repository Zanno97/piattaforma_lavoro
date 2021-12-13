<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function list(){
        return Job::all();
    }

    public function detail($id){
        return Job::find($id);
    }

    public function create(Request $req){
        $todoData = json_decode($req -> getContent());

        $todo = new Job();
        $todo->task = $todoData->task;
        $todo->save();
    }

    public function edit(Request $req){
        $todoData = json_decode($req -> getContent());

        $todo = new Job();
        $todo->task = $todoData->task;
        $todo->save();
    }

    public function delete($id){
        return Job::destroy($id);
    }
}
