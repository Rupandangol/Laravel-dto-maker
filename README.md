# Laravel DTO Maker

This Laravel package provides an Artisan command to quickly generate Data Transfer Objects (DTOs).

## Installation

```bash
composer require rupandangol/laravel-dto-maker
```

## Usage

```bash
php artisan make:dto UserData
```
This creates :
app\DTOs\Userdata.php

### Example output
```bash
namespace App\DTOs;

class UserData
{
    // Your DTO properties and constructor here
}
```