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

    /** @test */
    public function formato_json_correcto()
    {
        $fileJson = join(DIRECTORY_SEPARATOR, array(
            dirname(__FILE__),
            '..',
            '..',
            'resources',
            'lang',
            'es.json'
        ));

        $jsonData = file_get_contents($fileJson);

        $this->assertJson($jsonData);

        $traductions = json_decode($jsonData, true);

        foreach ($traductions as $key => $traduction) {
            $this->assertEquals(
                __($key),
                $traduction
            );
        }
    }
}
