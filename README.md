
[![Latest Version on Packagist](https://img.shields.io/packagist/v/laraveles/spanish.svg?style=flat-square)](https://packagist.org/packages/laraveles/spanish)
[![Total Downloads](https://img.shields.io/packagist/dt/laraveles/spanish.svg?style=flat-square)](https://packagist.org/packages/laraveles/spanish)

# Laravel Español

Paquete de traducciones en español para Laravel 5. Este paquete te agrega a tu proyecto los ficheros de traducciones en español que Laravel 5 trae por defecto.

## Versiones

Para Laravel 5.8 utilizar la versión 1.2+, incluye la validación de contraseña hasta 8 caracteres. Para el resto de versiones utilizar 1.1+.

Archivos por defecto incluidos en Laravel:

```
es.json
es/auth.php
es/passwords.php
es/pagination.php
es/validation.php
```

- [Instalación](#instalar)
- [Colaborar](#colaborar)


<a name="instalar"></a>
## Instalación

Puedes instalar este paquete mediante composer:

```bash
composer require laraveles/spanish
```

En versiones anteriores a la 5.5 debes agregar el proveedor de servicios en tu fichero `config/app.php` (no es necesario en Laravel 5.5+ gracias al [sistema de autodiscovery](https://medium.com/@taylorotwell/package-auto-discovery-in-laravel-5-5-ea9e3ab20518)):

```php
'providers' => [
    // ...
    Laraveles\Spanish\SpanishServiceProvider::class,
];
```

Ahora simplemente necesitamos necesitamos actualizar las traducciones que lo haremos con el siguiente comando:

```bash
php artisan vendor:publish --tag=lang
```

O también podramos usar:

```bash
php artisan laraveles:install-lang
```


Déspues de todos estos pasos, ya tenemos disponible nuestras traducciones en español, y solo necesitamos configurar Laravel para que use el idioma deseado.

Esto lo podemos hacer modificando el parámetro `locale` de la configuración de Laravel en `config/app.php`:

```
// Ej: español
'locale'          => 'es',
// Ej: inglés
'locale'          => 'en',
```

Se puede ser mas concreto e indicar las variaciones de un lenguaje:

```
// Inglés americano
'locale' => 'en_US'
// Portugués de Portugal
'locale' => 'pt_PT'
```

Pero en este caso nos valdrá con un español internacional para todos.

También se puede cambiar el idioma en tiempo de ejecución utilizando el método `setLocale` de `App`. Este cambio no es permanente, en la siguiente ejecución se utilizará el valor de configuración por defecto:

```
App::setLocale('es');
```

<a name="colaborar"></a>
## Colaborar

Mejoras y otras variaciones de paises de habla hispana son más que bienvenidas. Cualquier aportación vía Pull-Request ;D
