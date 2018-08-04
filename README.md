> USES A Laravel-Vue SPA starter project template.


## Features

- Laravel 5.6 
- Vue + VueRouter + Vuex + VueI18n + ESlint
- Pages with dynamic import and custom layouts
- Login, register and password reset
- Authentication with JWT
- Socialite integration
- Bootstrap 4 + Font Awesome 5

## Installation

- Edit `.env` and set your database connection details
- `php artisan key:generate` and `php artisan jwt:secret`
- `php artisan migrate`
- `php artisan db:seed`
- `yarn install`


#### Development

```bash
# build and watch
npm run watch
# start the server in another cli window
php artisan serve
```