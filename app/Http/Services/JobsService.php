<?php

namespace App\Http\Services;
use App\Http\Interfaces\JobsRepositoryInterface;

class JobsService
{
  public function __construct(
      protected JobsRepositoryInterface $jobsRepository
  ) {}

  public function getAll()
  {
    return $this->jobsRepository->getAll();
  }

  public function create($data){
    return $this->jobsRepository->create($data);
  }

  public function update($data, $id){
    return $this->jobsRepository->update($data, $id);
  }

  public function delete($id){
    return $this->jobsRepository->delete($id);
  }
}