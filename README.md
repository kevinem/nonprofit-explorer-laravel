# Nonprofit Explorer for Laravel 5

ProPublica provides an application programming interface (API) to the search engine and database that powers Nonprofit Explorer.

[![Latest Stable Version](https://poser.pugx.org/kevinem/lime-light-crm-laravel/v/stable?format=flat-square)](https://packagist.org/packages/kevinem/nonprofit-explorer-laravel)
[![License](https://poser.pugx.org/kevinem/lime-light-crm-laravel/license?format=flat-square)](https://packagist.org/packages/kevinem/nonprofit-explorer-laravel)
[![Build Status](https://travis-ci.org/kevinem/lime-light-crm-laravel.svg?branch=master)](https://travis-ci.org/kevinem/nonprofit-explorer-laravel)

## Installation

To install, use composer:

```
composer require kevinem/nonprofit-explorer-laravel
```

## Documentation

https://projects.propublica.org/nonprofits/api

## Configuration

After installing the package, register the `KevinEm\NonprofitExplorerLaravel\NonprofitExplorerServiceProvider`
in your `config/app.php` configuration file:

```php
'providers' => [
    // Other service providers...

    KevinEm\NonprofitExplorerLaravel\NonprofitExplorerServiceProvider::class,
],

```
Also, you can add the `NonprofitExplorer` facade to the `aliases` array in your `config/app.php` configuration file:

```php
'aliases' => [
    // Other facades...
    
    'NonprofitExplorer' => KevinEm\NonprofitExplorerLaravel\Facades\NonprofitExplorer::class,
],
```

## Example Usage

```php
NonprofitExplorer::search(['q' => 'propublica']);

NonprofitExplorer::organization(142007220);
```

## License 

The MIT License (MIT)
Copyright (c) 2016 Kevin Em

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated
documentation files (the "Software"), to deal in the Software without restriction, including without limitation
the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software,
and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of
the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED
TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF
CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS
IN THE SOFTWARE.
