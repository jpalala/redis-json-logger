# redis-json-logger

[![Total Downloads](https://img.shields.io/packagist/dt/jpalala/redis-json-logger.svg?style=flat-square)](https://packagist.org/packages/jpalala/redis-json-logger)

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)

## Installation

You can install the package via Composer. Run this command in your terminal:


```composer require jpalala/redis-json-logger```

Register and add it into configure in `config/app.php` or you can use `AppServiceProvider.php`.

```
'providers' => [
    // Other service providers...
    Jpalala\RedisJsonLogger\RedisLoggerServiceProvider::class,
],
```


## Usage

Basically do your Exception handling and the package will override it, as long as you've registered this package in the config/app.php file.

## Contributing
Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Joe Palala](https://github.com/jpalala)
- [All Contributors](https://github.com/jpalala/redis-json-logger/contributors)

## Security
If you discover any security-related issues, please email joe@palala.dev instead of using the issue tracker.

## License
The MIT License (MIT). Please see [License File](/LICENSE.md) for more information.
