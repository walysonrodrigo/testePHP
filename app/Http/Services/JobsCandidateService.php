<?php

namespace App\Http\Services;
use App\Http\Interfaces\CandidatesRepositoryInterface;

class JobsCandidatesService
{
    public function __construct(
        protected CandidatesRepositoryInterface $candidatesRepository
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
}