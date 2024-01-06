# Form Application app

An app for input user profile.

## Usage

### Database Setup
This app uses MySQL. Make sure you install it, setup a database and then add your db credentials(database, username and password) to the .env.example file and rename it to .env

### Migrations
To create all the nessesary tables and columns, run the following
```
php artisan migrate
```

### Seeding The Database
To add the dummy listings with a single user, run the following
```
php artisan db:seed
```

### Running The App
Running using:
```
php artisan serve
```
