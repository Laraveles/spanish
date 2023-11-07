<?php

namespace Laraveles\Spanish\Tests\Lang;

use Laraveles\Spanish\Tests\TestCase;

class EsTest extends TestCase
{
    /** @test */
    public function comprueba_traducciones()
    {
        foreach (['validation', 'passwords', 'pagination', 'auth'] as $fichero) {
            $claves     = array_keys(trans($fichero));
            $traduccion = (include __DIR__ . "/../../resources/lang/es/" . $fichero . ".php");

            foreach ($claves as $clave) {
                if ( ! isset($traduccion[$clave])) {
                    throw new \Exception("Falta traducción para $fichero.$clave");
                }

                if ($traduccion[$clave] === '') {
                    throw new \Exception("Traducción para $fichero.$clave vacía");
                }
            }
        }
    }

    /** @test */
    public function formato_json_correcto()
    {
        \Artisan::call('laraveles:install-lang');

        \App::setLocale('es');

        $fileJson = join(DIRECTORY_SEPARATOR, [
            dirname(__FILE__),
            '..',
            '..',
            'resources',
            'lang',
            'es.json',
        ]);

        $jsonData = file_get_contents($fileJson);

        $this->assertJson($jsonData);

        $traducciones = json_decode($jsonData, true);

        foreach ($traducciones as $key => $traduccion) {
            if (__($key) !== $traduccion) {
                throw new \Exception("Traducción errónea: $key");
            }
        }
    }

    /**
     * @test
     * Si el comando no existe lanzará CommandNotFoundException
     * */
    public function comprueba_instala_comando_artisan()
    {
        \Artisan::call('laraveles:install-lang');
    }
}
