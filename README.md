<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Acerca del proyecto

Este proyecto mostrará el valor actual del bitcoin segun https://min-api.cryptocompare.com.
El proyecto tiene las siguientes caracteristicas:
<ul>
    <li> - Laravel 7.8. </li>
    <li> - Plantilla html simple. </li>
    <li> - Uso de blade para mostrar las interfases. </li>
    <li> - Valor de bitcoin en dólares, peso chileno y sol peruano. </li>
    <li> - Uso de PostgreSQL como base de datos. </li>
    <li> - Tabla donde se registrará el valor del BTC en las distintas monedas. </li>
    <li> - Modelo y migración BTC. </li>
    <li> - Uso de file_get_contents para obtener el valor del bitcoin. Se opto por esta opción para usar elementos nativos y evitar el uso de librerías externas y asi       mejorar el rendimiento de la consulta. </li>
    <li> - Se muestra el porcentaje de variación entre cada consulta. </li>
    <li> - Vista con funcionalidad en Jquery. </li>
    <li> - Vista con funcionalidad en Vue. </li>
    <li> - Visita la página en heroku: https://btc-price2021.herokuapp.com </li>
</ul>
