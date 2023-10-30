<?php

namespace App\Http\Repositories;
use App\Models\Base;

abstract class BaseRepository
{
  public function __construct(
    protected object $base
  ){}

  public function getAll()
  {
    return $this->base->all();
  }

  public function getById($id)
  {
    return $this->base->find($id);
  }

  public function create(array $data)
  {
    return $this->base->create($data);
  }

  public function update(array $data, $id)
  {
    $update = $this->base->find($id);
    
    if ($update)
      return $update->update($data);
    
    return false;
  }

  public function delete($id)
  {
    
    $delete = $this->base->find($id);
   
    if ($delete)
      return $delete->delete();
    
    return false;
  }
}