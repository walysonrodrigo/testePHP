<?php

namespace App\Http\Interfaces;

interface CandidateJobsRepositoryInterface
{
  public function create(array $data);

  public function update(array $data, $id);

  public function getAll();
}
