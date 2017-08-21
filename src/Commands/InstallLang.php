<?php

namespace Laraveles\Spanish\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class InstallLang extends Command
{
    protected $signature = 'laraveles:install-lang';
    protected $description = 'Instala/Actualiza los ficheros de traducción';

    public function handle()
    {
        Artisan::call('vendor:publish' , [
            '--provider' => 'Laraveles\Spanish\SpanishServiceProvider'
        ]);
        
        $this->info('Idiomas actualizados.');
    }
}
