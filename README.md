# laravel-model-mutator
Load relations and append attributes from request query
## Basic usage

### Including relations based on a request: `/?include=first_relation,second_relation`:

```php
$model->allowLoads([
'firstRelation',
'secondRelation',
]);
```

### Appending attributes to a query: `/?append=first_attribute,second_attribute`

```php
$model->allowAppends([
'firstAttribute',
'secondAttribute',
```

### Testing

```bash
composer test
```

### Security

If you discover any security related issues, please email freek@spatie.be instead of using the issue tracker.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
