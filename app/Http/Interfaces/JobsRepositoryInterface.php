<?php

namespace App\Http\Interfaces;

interface JobsRepositoryInterface
{
  public function getAll();

  public function create(array $data);

  public function update(array $data, $id);

  public function delete($id);
}