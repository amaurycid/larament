<?php

declare(strict_types=1);

namespace App\Console\Commands;

use Illuminate\Console\Command;

final class Welcome extends Command
{
    protected $signature = 'app:welcome';

    protected $description = 'A introduction message on installation of the application';

    public function handle(): void
    {
        $orangeColor = "\x1b[33m";
        $resetColor = "\x1b[0m";

        $this->line($orangeColor.'██╗      █████╗ ██████╗   █████╗ ███╗   ███╗███████╗███╗   ███╗████████╗'.$resetColor);
        $this->line($orangeColor.'██║     ██╔══██╗██╔══██╗ ██╔══██╗████╗ ████║██╔════╝████╗ ████║╚══██╔══╝'.$resetColor);
        $this->line($orangeColor.'██║     ███████║██████╔╝ ███████║██╔████╔██║█████╗  ██╔████╔██║   ██║   '.$resetColor);
        $this->line($orangeColor.'██║     ██╔══██║██╔══██╗ ██╔══██║██║╚██╔╝██║██╔══╝  ██║╚██╔╝██║   ██║   '.$resetColor);
        $this->line($orangeColor.'███████╗██║  ██║██║  ██║ ██║  ██║██║ ╚═╝ ██║███████╗██║ ╚═╝ ██║   ██║   '.$resetColor);
        $this->line($orangeColor.'╚══════╝╚═╝  ╚═╝╚═╝  ╚═╝ ╚═╝  ╚═╝╚═╝     ╚═╝╚══════╝╚═╝     ╚═╝   ╚═╝   '.$resetColor);
    }
}
