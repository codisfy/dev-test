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


### Setup

```bash
# build and watch
npm run watch
# start the server in another cli window
php artisan serve
```

### Tasks 
1. Added seeder and migrations for users and survey table. Password Reset, use any email with 123456 to login.
2. Makes Use of laravel datatables, VueJS, Bootstrap4 and other vue packages. 
3. Added survey listing with option to add multiple user to each survey. 

### Remaining Items.
Since I was more focused on fininshing the functionality. Given more time the quality of the system could have been much better. 
Following are the list of items I would like to improve
1. Validations and sanity checks. 
2. Vuex was not utilized. 
3. Delete functionality is hackish.
4. Overall design could have been improved. 
5. Pagination on datatables.


### Demo Video

Just in case code setup doesn't work. 
[Video](https://youtu.be/b2JKgUt6XSk)
