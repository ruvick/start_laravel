# Хлебные крошки

Публикация файлов:

>php artisan vendor:publish --tag=breadcrumbs-component

Будет скопирован компонент хлебных крошек размеченный в соотвествии со schema.org

Использование компанента:
```php
<x-breadcrumbs.main :title="$title"></x-breadcrumbs.main>
```

Если необходимо использовать внутри секции:

```php
<section class="breadcrumbs_section">
    <div class="container">
        <x-breadcrumbs.main :title="$title"></x-breadcrumbs.main>
    </div>
</section>


```
