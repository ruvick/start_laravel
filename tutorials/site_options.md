# Опции сайта

Устанавливает все необходимое для использования опций (телефоны, e-mail и т. д.) при написании сайта

Публикация файлов:

>php artisan vendor:publish --tag=site-options-component

## Для подключения необходимо выполнить следующие действия:

Подключить в конфигурационном файле app.php который расшарит опции на ве шаблоны сайта:

```php
App\Providers\OptionsProvider::class,
```

Выполнить миграцию

>php artisan migrate

Заполнить таблицу опций данными по умолчанию:

>php artisan db:seed OptionSeeder

## Использование опций в коде
```php
{{$options["vk_lnk"]}}
```
передается в качестве ключа name соответствующей опции

При необходимости добавить в сипиок сидеров в файле DatabaseSeeder.php

```php
$this->call(
    [
        OptionSeeder::class
    ]
);
```