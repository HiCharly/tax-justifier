# Tax Justifier

![Laravel](https://img.shields.io/badge/Laravel-12.x-red?logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.4-blue?logo=php)
![Build Status](https://img.shields.io/github/actions/workflow/status/hicharly/tax-justifier/tests.yml?branch=main&logo=github)

A modern Laravel application for managing professional travel expenses and generating tax reports. Built with Laravel 12, Livewire 3, and Filament 4.

## 🚀 Features

- **Professional Travel Management**: Track your daily commutes and business trips
- **Address Management**: Store home and work addresses for automatic distance calculations
- **Vehicle Tracking**: Manage your personal and business vehicles
- **Tax Reports**: Generate detailed reports for tax declarations
- **Modern UI**: Beautiful interface built with Flux UI and Tailwind CSS
- **Admin Panel**: Full-featured admin interface with Filament

## 🛠️ Tech Stack

- **Backend**: Laravel 12, PHP 8.4
- **Frontend**: Livewire 3, Volt, Tailwind CSS 4
- **Admin Panel**: Filament 4
- **UI Components**: Flux UI
- **Testing**: Pest 4
- **Package Manager**: Bun
- **Database**: MySQL

## 📋 Requirements

- PHP 8.4+
- Composer
- Bun
- Node.js 22+

## 🚀 Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/HiCharly/tax-justifier.git
   cd tax-justifier
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node dependencies**
   ```bash
   bun install
   ```

4. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Database setup**
   ```bash
   php artisan migrate
   ```

6. **Build assets**
   ```bash
   bun run build
   ```

7. **Start the development server**
   ```bash
   php artisan serve
   ```

## 🎯 Usage

### For Users

1. **Register** an account at `/app/register`
2. **Add your addresses** (home and work)
3. **Add your vehicles** (personal and business)
4. **Record your trips** with dates and vehicles used
5. **Generate reports** for tax declarations

### For Developers

The application uses:
- **Filament** for the admin panel at `/app`
- **Flux UI** for consistent component design
- **Pest** for testing

## 🧪 Testing

Run the test suite:

```bash
# Run all tests
php artisan test

# Run with coverage
php artisan test --coverage

# Run specific test file
php artisan test tests/Feature/ExampleTest.php
```

## 🏗️ Development

### Available Commands

```bash
# Development with hot reload
composer run dev

# Code formatting
vendor/bin/pint

# Database operations
php artisan migrate
php artisan migrate:fresh --seed
```

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## 🙏 Acknowledgments

- [Laravel](https://laravel.com) - The PHP framework
- [Livewire](https://livewire.laravel.com) - Full-stack framework
- [Filament](https://filamentphp.com) - Admin panel
- [Flux UI](https://fluxui.dev) - Component library
- [Tailwind CSS](https://tailwindcss.com) - Utility-first CSS framework

## 📞 Support

If you have any questions or need help, please open an issue on GitHub.

---

**Made with ❤️ using Laravel, Livewire, and Filament**
