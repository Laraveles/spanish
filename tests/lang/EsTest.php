<?php

namespace Laraveles\Spanish\Tests\Lang;

use Laraveles\Spanish\Tests\TestCase;
use Illuminate\Support\Facades\Artisan;

class EsTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        $this->app['config']->set('app.locale', 'es');

        Artisan::call('laraveles:install-lang');
    }

    /** @test */
    public function tenemos_traduccion_para_la_autentificacion_fallida()
    {
        $this->assertEquals(
            trans('auth.failed'),
            'Estas credenciales no coinciden con nuestros registros.'
        );
    }

    /** @test */
    public function tenemos_traduccion_para_plantilla()
    {
        $this->assertEquals(
            __('Name'),
            'Nombre'
        );
    }
}
