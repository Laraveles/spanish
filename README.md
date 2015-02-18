# Laravel Español

En este repositorio se encuentran los archivos de idioma por defecto de Laravel 5 traducidos a las diferentes variaciones del español.

- [¿Cómo se usa?](#como-se-usa)
- [Variaciones por traducir](#variaciones-por-traducir)
- [Colaborar](#colaborar)

<a name="variaciones-por-traducir"></a>
Archivos incluidos en Laravel:
```
passwords.php
pagination.php
validation.php
```


## ¿Cómo usar los archivos de traducción?

Los archivos de idioma de Laravel 5 se encuentran en la carpeta `resources/lang`. En la versión de Laravel 4 se encuentran en `app/lang`. El funcionamiento es exactamente el mismo en ambas versiones, solo cambia la ubicación.

En el directorio `lang` se incluye por defecto una carpeta por defecto llamada `en`. Esta carpeta contiene el idioma inglés de Laravel.

Para instalar un nuevo idioma no hay más que crear una carpeta dentro de `lang` correspondiente correspondiente al idioma quedando por ejemplo la siguiente estructura para diferentes idiomas o variantes de estos:
```
/resources
    /lang
        /en     (inglés por defecto)
        /pt_BR  (portugués de Brasil)
        /pt_PT  (portugués de Portugal)
        /fr_FR  (francés de Francia)
        /es_ES  (español de España)
        /es_AR  (español de Argentina)
```
Una vez instalado un idioma, se puede utilizar cambiando el parámetro `locale` de la configuración de Laravel en `config/app.php`:

```
// Ej: español argentino
'locale'          => 'es_AR',
// Ej: inglés británico
'locale'          => 'en_UK',
```

También se puede cambiar el idioma en tiempo de ejecución utilizando el método `setLocale` de `App`. Este cambio no es permanente, en la siguiente ejecución se utilizará el valor de configuración por defecto:

```
App::setLocale('es_ES');
```

Para conocer de forma más completa como funcionan los archivos de traducción de Laravel visita la documentación.

[Ver documentación (traducida)](http://laraveles.com/docs/4.1/localization)

<a name="variaciones-por-traducir"></a>
## Variaciones por traducir

- [ ] es_AR - Argentina
- [ ] es_BO - Bolivia
- [ ] es_CL - Chile
- [ ] es_CO - Colombia
- [ ] es_CR - Costa Rica
- [ ] es_DO - República Dominicana
- [ ] es_EC - Ecuador
- [x] ~~es_ES - España~~
  - [ ] es_CA - Catalán (Cataluña)
  - [ ] es_GL - Gallego (Galicia)
  - [ ] es_EU - Euskera (País Vasco)
- [ ] es_GT - Guatemala
- [ ] es_HN - Honduras
- [ ] es_MX - México
- [ ] es_NI - Nicaragua
- [ ] es_PA - Panamá
- [ ] es_PE - Perú
- [ ] es_PR - Puerto Rico
- [ ] es_PY - Paraguay
- [ ] es_SV - El Salvador
- [ ] es_US - Estados Unidos
- [ ] es_UY - Uruguay
- [ ] es_VE - Venezuela

<a name="colaborar"></a>
## Colaborar

Mejoras y otras variaciones de otros paises de habla hispana son más que bienvenidas. Cualquier aportación vía Pull-Request ;D
