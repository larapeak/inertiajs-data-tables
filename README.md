[![Larapeak](https://raw.githubusercontent.com/larapeak/inertiajs-data-tables/master/.github/Header.png)](https://larapeak.com/)


# Create Data Tables in Laravel with Ease!

[![Latest Version on Packagist](https://img.shields.io/packagist/v/larapeak/inertiajs-data-tables.svg?style=flat-square)](https://packagist.org/packages/larapeak/inertiajs-data-tables)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/larapeak/inertiajs-data-tables/run-tests?label=tests)](https://github.com/larapeak/inertiajs-data-tables/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/larapeak/inertiajs-data-tables/Check%20&%20fix%20styling?label=code%20style)](https://github.com/larapeak/inertiajs-data-tables/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/larapeak/inertiajs-data-tables.svg?style=flat-square)](https://packagist.org/packages/larapeak/inertiajs-data-tables)

---
This package provides a trait that will generate a datatable for your model. It also provides Vue components that you can use with Inertiajs.

## Installation

You can install the package via composer:

```bash
composer require larapeak/inertiajs-data-tables
```

You can publish the Vue components with following command:

```bash
php artisan vendor:publish --provider="Larapeak\InertiajsDataTables\InertiajsDataTablesServiceProvider" --tag="assets"
```

The Vue components will be published in:

```bash
resources\js\Shared\DataTables
```

## Usage

Your Eloquent models should use the `Larapeak\InertiajsDataTables\HasSorting` trait.

Here's an example of how to implement the trait:

```php
namespace App\Models;

use Larapeak\InertiajsDataTables\HasSorting;
use Illuminate\Database\Eloquent\Model;

class YourEloquentModel extends Model
{
    use HasSorting;

    public $sortables = [
        'field1', 'field2', 'field3'
    ]
}
```

On your Vue page you can use the DataTable component like this:

```js
<template>
    <data-table :tableData:"data" :tableFields="tablefields" :filters="filters" model="posts" slug></data-table>
</template>

<script>
    import DataTable from '@/Shared/DataTables/DataTable'
    
    export default {
        components: {
            DataTable,
        },
        
        props: {
            data: Array,
            filters: Object,
        },
        
        data() {
            return {
                tableFields: [
                    {
                        id: 'field1',
                        name: 'Field1',
                        type: 'text',
                    },
                    {
                        id: 'field2',
                        name: 'Field2',
                        type: 'text',
                    },
                    {
                        id: 'field3',
                        name: 'Field3',
                        type: 'text',
                    }
                ]
            }
        }
    }
</script>
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Larapeak](https://github.com/larapeak)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
