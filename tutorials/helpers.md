## Установка хелперов

Публикация файлов:

>php artisan vendor:publish --tag=site-helper-lib

Необходимо выполнить следующие действия:

Подключить в конфигурационном файле app.php который расшарит опции на ве шаблоны сайта:

```php
App\Providers\HelpersLoadProvider::class,
```

Сбросить конфиги:

>php artisan config:cache

## Форматирование номера телефона

Используется для вывода "очищенного" номера телефона например для подстановки в href

Пример работы:

```php
phone_format('+7 999 012 00 22');

// результат: 9990120022 
```

Вызов с опцией сайта: 

```php
<a href="tel:+7{{ phone_format($options['phone']) }}">{{ $options['phone'] }}</a>
```
