<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;

class ReadGitInfo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'git:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reads git information and updates value in cache';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // $process = new Process(['cd /git', '&&','git', 'rev-parse', 'HEAD']);
        $process = new Process('cd /git && git rev-parse HEAD');
        $process->run();

        // executes after the command finishes
        if (!$process->isSuccessful()) {
            $process = new Process('git rev-parse HEAD');
            $process->run();
        }

        Cache::forever('git_commit', $process->getOutput());

        $process = new Process('cd /git && git log -1 --pretty=format:%ct');

        $process->run();

        // executes after the command finishes
        if (!$process->isSuccessful()) {
            $process = new Process('git log -1 --pretty=format:%ct');
            $process->run();
        }

        

        Cache::forever('git_last_update', $process->getOutput());


    }
}
