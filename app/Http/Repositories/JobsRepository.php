<?php

namespace App\Http\Repositories;
use App\Models\Jobs;
use App\Http\Repositories\BaseRepository;
use App\Http\Interfaces\JobsRepositoryInterface;

class JobsRepository extends BaseRepository implements JobsRepositoryInterface
{
  public function __construct(
    protected Jobs $jobs
  ){
    parent::__construct($jobs);
  }

  public function jobsOpen(){
    return $this->jobs->where('active', '1')->get();
  }

}