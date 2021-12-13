<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function list(){
        return Jobs::all();
    }

    public function detail($id){
        return Jobs::find($id);
    }

    public function create(Request $req){
        $todoData = json_decode($req -> getContent());

        $todo = new Jobs();
        $todo->task = $todoData->task;
        $todo->save();
    }

    public function edit(Request $req){
        $todoData = json_decode($req -> getContent());

        $todo = new Jobs();
        $todo->task = $todoData->task;
        $todo->save();
    }

    public function delete($id){
        return Jobs::destroy($id);
    }
}
