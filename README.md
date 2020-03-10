# laravel-model-mutator
Load relations and append attributes from request query
## Basic usage

### Including relations based on a request: `/?include=first_relation,second_relation`:

```php
$model->allowedLoads([
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
