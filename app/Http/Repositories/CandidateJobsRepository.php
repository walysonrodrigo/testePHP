<?php

namespace App\Http\Repositories;
use App\Models\JobCandidate;
use App\Http\Interfaces\CandidateJobsRepositoryInterface;
use App\Http\Repositories\BaseRepository;

class CandidateJobsRepository extends BaseRepository implements CandidateJobsRepositoryInterface
{
  public function __construct(
    protected JobCandidate $jobCandidate
  ){
    parent::__construct($jobCandidate);
  }

  public function getAll()
  {
    return $this->jobCandidate->with('job')->with('candidate')->get();
  }
}