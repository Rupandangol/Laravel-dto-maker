# Laravel Class Maker

This Laravel package provides an Artisan command to quickly generate 
```bash
Data Transfer Objects (DTOs)
Enums
Traits
Services
Interfaces
and so on
```

## Installation

```bash
composer require rupandangol/laravel-class-maker
```

## Usage

```bash
php artisan make:dto UserData
php artisan make:enums TestEnum
php artisan make:traits TestTrait
php artisan make:service TestService
php artisan make:interface TestInterface
```
### Example output
DTO:
```bash
namespace App\DTOs;

class UserData
{
    // Your DTO properties and constructor here
}
```
Traits:
```bash
namespace App\Traits;

trait TestTrait
{
    // Your test traits
}
```
Enums:
```bash
namespace App\Enums;

enum TestEnum: string
{
    //case EXAMPLE='example';
}
```
Services:
```bash
namespace App\Services;

class TestService
{
    // Your Service properties and constructor here
}
```
Interfaces:
```bash
namespace App\Interfaces;

interface TestInterface
{
    // public function example();
}
```