<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\CandidatesService;
use App\Http\Requests\CandidatesRequest;
use App\Http\Requests\CandidateJobsRequest;

class CandidatesController extends Controller
{
    public function __construct(
        protected CandidatesService $candidatesService
    ) {}
    
    public function index()
    {
        $candidates = $this->candidatesService->getAll();
        return $candidates;
    }

    public function store(CandidatesRequest $request)
    {
        $candidate = $this->candidatesService->create($request->all());
        return $candidate;
    }

    public function update(CandidatesRequest $request, $id)
    {
        $candidate = $this->candidatesService->update($request->all(), $id);
        return $candidate;
    }

    public function destroy($id)
    {
        $candidate = $this->candidatesService->delete($id);
        return $candidate;
    }

    public function apply(CandidateJobsRequest $request)
    {
        $candidate = $this->candidatesService->apply($request->all());
        return $candidate;
    }

    public function applicationsById($id)
    {
        $candidate = $this->candidatesService->applicationsById($id);
        return $candidate;
    }

    public function applications()
    {
        $candidate = $this->candidatesService->applications();
        return $candidate;
    }

    public function cancelApplication(Request $request)
    {
        $candidate = $this->candidatesService->cancelApplication($request);
        return $candidate;
    }
}