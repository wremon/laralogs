# Laralogs
### The ultimate all-in-one logging package for Laravel projects (Pro Edition)

[![Latest Version on Packagist](https://img.shields.io/packagist/v/wremon/laralogs.svg?style=flat-square)](https://packagist.org/packages/wremon/laralogs)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/wremon/laralogs/run-tests?label=tests)](https://github.com/wremon/laralogs/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/wremon/laralogs/Check%20&%20fix%20styling?label=code%20style)](https://github.com/wremon/laralogs/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/wremon/laralogs.svg?style=flat-square)](https://packagist.org/packages/wremon/laralogs)

---

## Installation

You can install the package via composer:

```bash
composer require wremon/laralogs
```

### Set Up .env
```
LARALOGS_DB_CONNECTION=sqlite
LARALOGS_DB_HOST=
LARALOGS_DB_PORT=
LARALOGS_DB_DATABASE=
LARALOGS_DB_USERNAME=
LARALOGS_DB_PASSWORD=
LARALOGS_DB_DATABASE="/Users/username/www/my-project/database/database.sqlite"
LARALOGS_MIGRATE=true
```

The `LARALOGS_MIGRATE` determines if you wish to run this package's migration table.

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Remon Lumapas](https://github.com/wremon)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
