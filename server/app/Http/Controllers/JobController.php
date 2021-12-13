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
        $jobData = json_decode($req -> getContent());

        $job = new Job();
        $job->language = $jobData->language;
        $job->agency = $jobData->agency;
        $job->ral = $jobData->ral;
        $job->experience = $jobData->experience;
        $job->location = $jobData->location;
        $job->description = $jobData->description;
        $job->save();
    }

    public function delete($id){
        return Job::destroy($id);
    }
}
