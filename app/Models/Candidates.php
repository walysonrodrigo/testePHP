<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidates extends Model
{
  use HasFactory;
  protected $fillable = [
    'name',
    'email'
  ];

  function jobs()
  {
    return $this->belongsToMany(Jobs::class, 'job_candidate','candidate_id', 'job_id');
  }
}