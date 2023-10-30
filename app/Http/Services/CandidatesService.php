<?php

namespace App\Http\Services;
use App\Http\Interfaces\CandidatesRepositoryInterface;
use App\Http\Interfaces\CandidateJobsRepositoryInterface;

class CandidatesService
{
    public function __construct(
        protected CandidatesRepositoryInterface $candidatesRepository,
        protected CandidateJobsRepositoryInterface $candidateJobsRepository
    ) {}

    public function getAll()
    {
        return $this->candidatesRepository->getAll();
    }
    
    public function create($data)
    {
        return $this->candidatesRepository->create($data);
    }

    public function update($data, $id)
    {
        return $this->candidatesRepository->update($data, $id);
    }

    public function delete($id)
    {
        return $this->candidatesRepository->delete($id);
    }

    public function apply($data)
    {
        return $this->candidateJobsRepository->create($data);
    }

    public function applications($id)
    {
        return $this->candidatesRepository->getById($id);
    }

    public function cancelApplication($data, $id)
    {
        return $this->candidateJobsRepository->update($data, $id);
    }
}