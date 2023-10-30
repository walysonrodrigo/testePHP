<?php

namespace App\Http\Repositories;
use App\Models\Candidates;
use App\Http\Interfaces\CandidatesRepositoryInterface;
use App\Http\Repositories\BaseRepository;

class CandidatesRepository extends BaseRepository implements CandidatesRepositoryInterface
{
  public function __construct(
    protected Candidates $candidate
  ){
    parent::__construct($candidate);
  }

  public function getById($id){
    return $this->candidate->with('jobs')->find($id);
  }
}