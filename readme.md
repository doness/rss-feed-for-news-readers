# RSS feed for news readers

If you haven't already got a news reader check out [Feedly](https://feedly.com/). There are many others out there but this is the one I personally use. I am subscribed to a lot of sites and blogs like [Laracasts](https://laracasts.com/), [Codeception](http://codeception.com/), [murze.be](https://murze.be/), [Laravel Podcasts](http://www.laravelpodcast.com/), [Culttt](http://culttt.com/) , [Laravel News](https://laravel-news.com/) etc.

Having a way for your users to be able to subscribe to receive latest news on their news readers is awesome and increases chances that that user will come back to your site.

## Installation

Clone repository to your drive and type in terminal there:

```
composer install
```

## Configuration

Copy file `.env.example` to `.env` file:

```
cp .env.example .env
```

and change the `APP_KEY` in `.env` using:

```
php artisan key:generate
```

Create empty database file called `database.sqlite` in `database` directory.

Run migrations and seed database with:

```
php artisan migrate --seed
```

## Running

From terminal type:

```
php artisan serve
```

You should get an address to open in your browser like http://localhost:8000.

**Have fun!**