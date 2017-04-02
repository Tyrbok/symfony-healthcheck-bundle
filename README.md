# Symfony Healthcheck Bundle
Shows application health information. You can also write your own indicators.

## How to install

Install Composer package

```
composer require tyrbok/symfony-healthcheck-bundle
```

Append to Symfony Kernel

```php
// app/AppKernel.php

$bundles = [
    // ..
    new Tyrbok\HealthCheckBundle\TyrbokHealthCheckBundle()
    ];
```

Configure routes

```yml
#app/config/routing.yml

health_check:
    resource: "@TyrbokHealthCheckBundle/Controller/"
    type:     annotation
    prefix:   /

```

## Usage

Open in browser: [https://YOUR_SITE/health](https://YOUR_SITE/health)