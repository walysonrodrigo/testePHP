<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\JobsService;
use App\Http\Requests\JobsRequest;



class JobsController extends Controller
{
    public function __construct(
        protected JobsService $jobsService
    ) {}
    
    public function index()
    {
        $jobs = $this->jobsService->getAll();
        return $jobs;
    }

    public function store(JobsRequest $request)
    {
        $job = $this->jobsService->create($request->all());
        return $job;
    }

    public function update(Request $request, $id)
    {
        $job = $this->jobsService->update($request->all(), $id);
        return $job;
    }

    public function destroy($id)
    {
        $job = $this->jobsService->delete($id);
        return $job;
    }
}