<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function store(Request $request) 
    {
        $this->validate($request, [
            'title' => 'required|max:256|string',
            'description' => 'required|max:10000|string',
            'status' => 'required',
            'workplace' => 'nullable|string',
            'salary' => 'nullable|numeric',
        ]);
    
        $job = new Job;
    
        $job->title = $request->title;
        $job->description = $request->description;
        $job->status = $request->status;
        $job->workplace = $request->workplace;
        $job->salary = $request->salary;
    
        $job->save();
        
        return $job;
    }
}
