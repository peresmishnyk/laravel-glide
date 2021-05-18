# LaravelGlide

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![The Whole Fruit Manifesto](https://img.shields.io/badge/writing%20standard-the%20whole%20fruit-brightgreen)](https://github.com/the-whole-fruit/manifesto)

> **// TODO: customize this description and delete this line**

This package is wrapper for [thephpleague/glide-laravel](!https://github.com/thephpleague/glide-laravel).

Glide is a wonderfully easy on-demand image manipulation library written in PHP. Its straightforward API is exposed via
HTTP, similar to cloud image processing services like Imgix and Cloudinary. Glide leverages powerful libraries like
Intervention Image (for image handling and manipulation) and Flysystem (for file system abstraction).

## Screenshots

![Backpack Toggle Field Addon](https://glide.herokuapp.com/1.0/kayaks.jpg?w=1000&gam=.9&sharp=8)

## Installation

Via Composer

``` bash
composer require peresmishnyk/laravel-glide
```

## Usage

> **// TODO: explain to your users how to use the functionality** this package provides;
> we've provided an example for a Backpack addon that provides a custom field

The package registers url prefixes /img/... and /glide/...

```code
//your-domain.tld/img/@{disk}/{image_path}?w=200
```

OR

```code
//your-domain.tld/glide/@{disk}/{image_path}?w=200
```

something like https://test.site/img/@local/app/galeries/daria.jpg?w=100

where *{disk}* is any disk from config/filesystems.php

### Example filesystems config
```php
'disk' =>[
    // For access to files in storage
    'local' => [
        'driver' => 'local',
        'root' => storage_path('app'),
    ],
    // For access to files under vcs
    'img' => [
        'driver' => 'local',
        'root' => app_path('../public/img'),
    ],
    ...
    ];
```

## Change log

Changes are documented here on Github. Please see
the [Releases tab](https://github.com/peresmishnyk/laravel-glide/releases).

## Testing

``` bash
composer test
```

## Contributing

Please see [contributing.md](contributing.md) for a todolist and howtos.

## Security

If you discover any security related issues, please email michkire@gmail.com instead of using the issue tracker.

## Credits

- [Michkire Dmytro][link-author]
- [All Contributors][link-contributors]

## License

This project was released under MIT, so you can install it on top of any Backpack & Laravel project. Please see
the [license file](license.md) for more information.

However, please note that you do need Backpack installed, so you need to also abide by
its [YUMMY License](https://github.com/Laravel-Backpack/CRUD/blob/master/LICENSE.md). That means in production you'll
need a Backpack license code. You can get a free one for non-commercial use (or a paid one for commercial use)
on [backpackforlaravel.com](https://backpackforlaravel.com).


[ico-version]: https://img.shields.io/packagist/v/peresmishnyk/laravel-glide.svg?style=flat-square

[ico-downloads]: https://img.shields.io/packagist/dt/peresmishnyk/laravel-glide.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/peresmishnyk/laravel-glide

[link-downloads]: https://packagist.org/packages/peresmishnyk/laravel-glide

[link-author]: https://github.com/peresmishnyk

[link-contributors]: ../../contributors
