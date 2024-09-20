<p align="center">
    <a href="https://laravel.com" target="_blank">
        <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
    </a>
    <a href="https://github.com" target="_blank" style="margin-left: 20px;">
        <img src="https://github.githubassets.com/images/modules/logos_page/GitHub-Mark.png" width="150" alt="GitHub Logo">
    </a>
</p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Github Login with Laravel using Socialite

![screencapture-localhost-8000-login-2024-09-18-23_30_25](https://github.com/user-attachments/assets/0a90d406-314e-4c7e-bf9c-8f7cc7a6304d)

## Requirements
-  Laravel = 11.20.0
-  PHP = 8.2.12
-  Composer Version = 2.7.7

## Getting Started
-  Clone the repository.
-  Run composer install to install dependencies.
-  Set up your database configuration in the .env file.
-  Run php artisan migrate to create the necessary database tables.
-  Customize the application as needed.

```javascript
composer install
```

```javascript
php artisan migrate
```

```javascript
php artisan serve
```

```javascript
npm install
```

```javascript
npm run build
```
## How to Use

1)  Install the Laravel Socialite package using Composer:
   ```javascript
    composer require laravel/socialite
   ```

2) Configure your config/services.php file with your Github app keys:
   ```
   'github' => [
   'client_id' => 'Your App ID', 
   'client_secret' => 'Your App Secret',
   'redirect' => 'http://localhost:8000/auth/github/callback',
   ],
   ```

4) Create a github project here (https://github.com/settings/developers), and copy the App ID and App Secret into the above configuration.
