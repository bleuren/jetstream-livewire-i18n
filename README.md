# Jetstream Livewire i18n

A Laravel package that provides multi-language support for Jetstream with Livewire, supporting English (`en`) and Traditional Chinese (`zh_TW`).

## Installation

1. Install via Composer:
```bash
composer require bleuren/jetstream-livewire-i18n
```

2. Publish resources:
```bash
php artisan jetstream-i18n:publish
```

3. (Optional) Publish with overwrite:
```bash
php artisan jetstream-i18n:publish --force
```

## Features

- Provides translations for all Jetstream views
- Supports English and Traditional Chinese out of the box
- Easy to extend with additional languages

## Directory Structure

```
project/
├── lang/                   # Language files
│   ├── en/                # English translations
│   └── zh_TW/             # Traditional Chinese translations
└── resources/
    └── views/
        ├── api/           # API management views
        ├── auth/          # Authentication views
        ├── emails/        # Email template views
        ├── profile/       # Profile management views
        └── teams/         # Team management views
```

## Usage

Ensure your Jetstream views use translation functions:
```blade
<h1>{{ __('jetstream.dashboard') }}</h1>
```

## Publishing Specific Resources

You can publish specific resources using the following commands:

```bash
# Publish Jetstream view overrides
php artisan vendor:publish --tag=jetstream-livewire-i18n-views-jetstream

# Publish language files
php artisan vendor:publish --tag=jetstream-livewire-i18n-lang
```

## Requirements
- PHP 8.2+
- Laravel 12.0+
- Livewire 3.0+
- Jetstream 5.3+

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](LICENSE)
