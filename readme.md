# PHP Framework

A simple PHP Framework

## Requirements

-   PHP >=8.2
-   MySQL with Database Client
-   Composer
-   Nginx/Apache Server

## Installation

At first clone the repository.

```bash
git clone git@github.com:amdad121/php-framework.git
```

or download the zip file.

then go to the project directory. and install the dependencies using composer.

```bash
composer install
```

copy .env.example to .env and edit the database credentials.

```bash
cp .env.example .env
```

open Database Client and create a database and import the php-framework.sql file.

now run the server

```bash
php -S localhost:8000 -t public
```

or if you used laragon you can access the server using the url http://php-framework.test

## Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## Contributors

-   [Amdadul Haq](https://github.com/amdad121)

## Thanks

Thank you for using this framework.
