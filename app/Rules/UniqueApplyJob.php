<?php

namespace App\Rules;

use App\Models\JobCandidate;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class UniqueApplyJob implements ValidationRule
{
        public function __construct(
            protected $job_id, 
            protected $candidate_id
        ) {}
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $application = JobCandidate::where('job_id', $this->job_id)
        ->where('candidate_id', $this->candidate_id)
        ->exists();

        if ($application) {
            $fail('You have already applied for this job.');
        }
    }
}
