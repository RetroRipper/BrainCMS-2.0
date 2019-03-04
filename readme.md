## BrainCMS
A Habbo CMS using Laravel 5.7.

### Before You Start
Make sure to download and or install the following
- https://getcomposer.org/
- https://git-scm.com/book/en/v2/Getting-Started-The-Command-Line

### Getting Started
This block of instructions assumes you are familiar with PHP dev environments.

- Clone the repository
```bash
git clone https://github.com/RetroRipper/BrainCMS-2.0.git
```
- Install dependencies
```
composer install
```
- Setup .env
```bash
cp .env.example .env
```
- Configure .env
```
This step involves changing the DB_ values for the most part to coincide with your own
```
- Generate encryption key
```bash
php artisan key:generate
```
- Migrate DB changes 
```
php artisan migrate
```
- Start Dev Server
```bash
php artisan serve
```