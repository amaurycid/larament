<?php

declare(strict_types=1);

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

final class SetAppUrl extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'larament:set-app-url';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Set the app url';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $url = 'https://'.basename(base_path()).'.test';

        $envPath = base_path('.env');

        if (File::exists($envPath)) {
            $contents = File::get($envPath);

            if (preg_match('/^APP_URL=.*/m', $contents)) {
                $contents = preg_replace('/^APP_URL=.*/m', 'APP_URL='.$url, $contents);
            } else {
                $contents .= PHP_EOL.'APP_URL='.$url;
            }

            File::put($envPath, $contents);
        }
    }
}
