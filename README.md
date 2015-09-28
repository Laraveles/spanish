# Laravel Español

En este repositorio se encuentran los archivos de idioma por defecto de Laravel 5 traducidos a las diferentes variaciones del español.

- [¿Cómo se usa?](#como-se-usa)
- [Colaborar](#colaborar)


<a name="como-se-usa"></a>
## ¿Cómo usar los archivos de traducción?

Los archivos de idioma de Laravel 5 se encuentran en la carpeta `resources/lang`. En la versión de Laravel 4 se encuentran en `app/lang`. El funcionamiento es exactamente el mismo en ambas versiones, solo cambia la ubicación.

Archivos por defecto incluidos en Laravel:

```
passwords.php
pagination.php
validation.php
```

En el directorio `lang` se incluye por defecto una carpeta por defecto llamada `en`. Esta carpeta contiene el idioma inglés de Laravel.

Para instalar un nuevo idioma no hay más que crear una carpeta dentro de `lang` correspondiente correspondiente al idioma quedando por ejemplo la siguiente estructura para diferentes idiomas o variantes de estos:
```
/resources
    /lang
        /en
            passwords.php
            pagination.php
            validation.php
            ...
        /es
            passwords.php
            pagination.php
            validation.php
            ...
        /pt
            ...
        /fr
            ...
```

Cada carpeta contendrá los archivos de idioma oportunos, siendo por defecto: auth, passwords, validation y pagination, pero pueden ser muchos otros para traducir otras partes de la aplicación y mantener las traducciones bien agrupadas.

Una vez instalado un idioma, se puede utilizar cambiando el parámetro `locale` de la configuración de Laravel en `config/app.php`:

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

Para conocer de forma más completa como funcionan los archivos de traducción de Laravel visita la documentación.

[Ver documentación (traducida)](http://laraveles.com/docs/5.1/localization)

<a name="colaborar"></a>
## Colaborar

Mejoras y otras variaciones de paises de habla hispana son más que bienvenidas. Cualquier aportación vía Pull-Request ;D
