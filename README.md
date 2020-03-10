# laravel-model-mutator
![Packagist](https://img.shields.io/packagist/dt/envant/laravel-model-mutator)
![GitHub](https://img.shields.io/github/license/envant/laravel-model-mutator)

Load relations and append attributes from request query

## Installation

Install package through Composer

``` bash
$ composer require envant/laravel-model-mutator
```

## Basic usage

Add `Envant\ModelMutator\AllowedQueryMutationsTrait` trait to your model

### Including relations based on a request: `/?include=first_relation,second_relation`:

```php
$model->allowedLoads([
'firstRelation',
'secondRelation',
]);
```

### Count relations based on a request: `/?count=first_relation,second_relation`:

```php
$model->allowedCounts([
'firstRelation',
'secondRelation',
]);
```

### Appending attributes to a query: `/?append=first_attribute,second_attribute`

```php
$model->allowedAppends([
'firstAttribute',
'secondAttribute',
]);
```
### Make attributes visible to a query: `/?visible=first_attribute,second_attribute`

```php
$model->allowedVisible([
'firstAttribute',
'secondAttribute',
]);
```

### Make attributes hidden to a query: `/?hidden=first_attribute,second_attribute`

```php
$model->allowedHidden([
'firstAttribute',
'secondAttribute',
]);
```

### Security

If you discover any security related issues, please email davidnadejdin@gmail.com instead of using the issue tracker.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Related packages
- [spatie/laravel-query-builder](https://github.com/spatie/laravel-query-builder) Easily build Eloquent queries from API requests.
