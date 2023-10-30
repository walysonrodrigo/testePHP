<?php

namespace App\Providers;


use App\Http\Interfaces\CandidateJobsRepositoryInterface;
use App\Http\Interfaces\CandidatesRepositoryInterface;
use App\Http\Interfaces\JobsRepositoryInterface;
use App\Http\Repositories\CandidateJobsRepository;
use App\Http\Repositories\CandidatesRepository;
use App\Http\Repositories\JobsRepository;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(CandidatesRepositoryInterface::class, CandidatesRepository::class);
        $this->app->bind(JobsRepositoryInterface::class, JobsRepository::class);
        $this->app->bind(CandidateJobsRepositoryInterface::class, CandidateJobsRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
