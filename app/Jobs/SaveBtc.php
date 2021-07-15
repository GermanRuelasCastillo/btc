<?php

namespace App\Jobs;

use App\Btc;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class SaveBtc implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $btc;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($btc)
    {
        $this->btc = $btc;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Btc::create([
            'usd' => $this->btc["USD"],
            'clp' => $this->btc["CLP"],
            'pen' => $this->btc["PEN"]
        ]);
    }
}
