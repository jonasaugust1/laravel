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
        $htmlContent = <<<HTML
        <!DOCTYPE html>
        <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">

                <title>Laravel</title>

                <!-- Fonts -->
                <link rel="preconnect" href="https://fonts.bunny.net">
                <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

                <!-- Styles -->
                <style>

                </style>
            </head>
            <body>

            </body>
        </html>
        HTML;
        $view = $this->argument('view');
        $fp = fopen(resource_path()."\\Views\\".$view.".blade.php", "w+");
        fputs($fp, $htmlContent);
        fclose($fp);
        $this->info("View {$view} created.");
    }
}
