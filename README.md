# Laravel Storyblok - CSS helper plugin

[![Latest Version on Packagist](https://img.shields.io/packagist/v/riclep/laravel-storyblok-css.svg?style=flat-square)](https://packagist.org/packages/riclep/laravel-storyblok-css)
[![Total Downloads](https://img.shields.io/packagist/dt/riclep/laravel-storyblok-css.svg?style=flat-square)](https://packagist.org/packages/riclep/laravel-storyblok-css)
![GitHub Actions](https://github.com/riclep/laravel-storyblok-css/actions/workflows/main.yml/badge.svg)

This is a small package that adds a few additional helper methods to `Block`s for generating dynamic CSS class names. You can create class names for `Block`s based on their component name in Storyblok, where they’re nested in the tree etc.

## Installation

You can install the package via composer:

```bash
composer require riclep/laravel-storyblok-css
```

## Usage

It’s really simple to use, just add the trait to any blocks you want to create CSS classes for or alternatively the `App\Storyblok\Block` class.

```php
namespace App\Storyblok;

use Riclep\Storyblok\Block as BaseBlock;
use Riclep\StoryblokCss\Traits\CssClasses;

class Block extends BaseBlock
{
	use CssClasses;
}
```

[Read the docs for more](https://ls.sirric.co.uk/docs/2.14/views#creating-css-class-names).

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email ric@sirric.co.uk instead of using the issue tracker.

## Credits

-   [Richard Le Poidevin](https://github.com/riclep)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
