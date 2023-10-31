<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobCandidate extends Model
{
    use HasFactory;

    protected $table = 'job_candidate';

    protected $fillable = [
        'job_id',
        'candidate_id'
    ];

    public function job()
    {
        return $this->belongsTo(Jobs::class);
    }

    public function candidate()
    {
        return $this->belongsTo(Candidates::class);
    }
}
