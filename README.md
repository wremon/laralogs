# Laralogs

This package is for centralized logging of multiple Laravel application into one connection.

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

### Configuration
After installing, publish the config using the command below:
```bash
php artisan vendor:publish --provider="Wremon\Laralogs\LaralogsServiceProvider"
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
LARALOGS_APP_NAME="My App Name"
LARALOGS_USER_COLUMN="email"
```

The `LARALOGS_APP_NAME` determines the name of the application in the logging table.

## User Model
Include Laralogs to your User.php model.
```
use Wremon\Laralogs\Loggable;

use Loggable;
```

## Usage

Get all the authentication logs of a user
```
User::find(1)->logs
```

Get the last authentication logs of a user
```
User::find(1)->lastLogin()
User::find(1)->lastLoginIp()
```

Get the previous authentication logs of a user
```
User::find(1)->previousLogin()
User::find(1)->previousLoginIp()
```

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
