# Validate colors with Laravel 5 and above
[![Latest Version](https://img.shields.io/github/issues/nikhilbhatia22/laravel-validator-color)](https://github.com/nikhilbhatia22/laravel-validator-color/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![For Laravel 5](https://img.shields.io/badge/Laravel-5.x|6.x|7.x-orange.svg?style=flat-square)](https://github.com/nikhilbhatia22/laravel-validator-color)

This package will let you validate that a certain value is a valid CSS color string.

## Installation

Install via [composer](https://getcomposer.org/) - In the terminal:
```bash
composer require nikhilbhatia22/laravel-validator-color
```

For Laravel version below 5.5, add the following to the `providers` array in your `config/app.php`
```php
Nikhilbhatia22\Validator\Color\ServiceProvider::class
```

## Usage

```php
// Test any color type
Validator::make(['test' => '#454ACF'], ['test' => 'color']);

// Test for rgb 
Validator::make(['test' => 'rgb(0, 200, 150)'], ['test' => 'color_rgb']);

// Test for rgba 
Validator::make(['test' => 'rgba(0, 200, 150, 0.52)'], ['test' => 'color_rgba']);

// Test for hex 
Validator::make(['test' => '#333'], ['test' => 'color_hex']);

// Test for css color keyword 
Validator::make(['test' => 'gold'], ['test' => 'color_keyword']);