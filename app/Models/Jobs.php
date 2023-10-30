<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
  use HasFactory;
  protected $fillable = ['title', 'type', 'active'];

  function candidates()
  {
    return $this->hasMany(JobCandidate::class);
  }
}