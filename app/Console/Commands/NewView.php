<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class NewView extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:view {view}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new view';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $view = $this->argument('view');
        $fp = fopen(resource_path()."\\Views\\".$view.".blade.php", "w+");
        fputs($fp, "{{ -- new view -- }}");
        fclose($fp);
        $this->info("View {$view} created.");
    }
}
