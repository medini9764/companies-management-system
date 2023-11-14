<?php

namespace App\Jobs;

use App\Mail\CompanyMailSend;
use App\Models\Company;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class CompanyJobSend implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $company_id;

    /**
     * Create a new job instance.
     */
    public function __construct($company_id)
    {
        $this->company_id= $company_id;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $company = Company::findOrFail( $this->company_id);

        Mail::to($company->email)
        ->send(new CompanyMailSend($this->company_id,$company->name,$company->logo));
    }
}
