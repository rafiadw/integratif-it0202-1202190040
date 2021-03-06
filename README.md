<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Installation

1. Install [Composerr](https://getcomposer.org/download/)
2. Install [Laravel Framework](https://laravel.com/docs/master/installation) :japanese_goblin:
3. Install [MYSQL](https://www.mysql.com/products/workbench/)
4. Make Model, Controller, Migration, and view of post
5. Add this code to routes/web.php

```route
Route::get('/',[PostController::class, 'index']);
```

6. Database Schema
   ![database schema](/public/schema.jpeg)
7. list of rss url i use :
   [kumparan](https://lapi.kumparan.com/v2.0/rss/),
   [tempo](https://rss.tempo.co/nasional),
   [vise](https://www.vice.com/id/rss?locale=id_id)
8. Make view page using [Bootstap](https://getbootstrap.com/) cdn
   ![Display](/public/website.png)
9. Display of Search Pokemon
   ![JSON](/public/pokemon.png)
   ![JSON](/public/pokemon_2.png)
10. Make JSON from RSS Database Content,
    ![JSON](/public/json.png)
