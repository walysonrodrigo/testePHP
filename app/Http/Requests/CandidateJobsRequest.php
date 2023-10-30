<?php

namespace App\Http\Requests;

use App\Rules\UniqueApplyJob;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class CandidateJobsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "job_id"=> ["required","integer","exists:jobs,id"],
            "candidate_id"=> ["required","integer","exists:candidates,id", new UniqueApplyJob($this->job_id, $this->candidate_id)],
        ];
    }
}