<?php

namespace App\Http\Interfaces;

interface JobsRepositoryInterface
{
  public function getAll();

  public function getById($id);

  public function jobsOpen();

  public function create(array $data);

  public function update(array $data, $id);

  public function delete($id);
}