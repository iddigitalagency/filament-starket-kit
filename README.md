## Installation

1. TODO::Still have to deploy this to packagist. For now, clone the Project from github.

```bash
composer create-project iddigital/starter
```

2. Install dependencies
   
   ```bash
   composer install
   ```
3. NPM install
   
   ```bash
   npm install && npm run build
   ```
4. copy Environment file
   
   ```bash
   cp .env.example.
   ```
5. Configure database settings
   
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.01
   DB_PORT=3306
   DB_DATABASE=starter
   DB_USERNAME=root
   DB_PASSWORD=password
   ```
6. (Optional) Add Sign in by Google configuration
   
   ```
   GOOGLE_CLIENT_ID={clientID}
   GOOGLE_CLIENT_SECRET={clientSecret}
   GOOGLE_REDIRECT_URI=https://starter.test/admin/oauth/callback/google
   ```
7. Run Installation Command
   
   ```bash
   php artisan starter:install
   ```
8. Acccess admin panel.
   
   If you are using laravel Herd:
   
   ```
   http(s)://{foldername}.test/admin
   ```
   
   Note: Installer script creates admin@admin.com / password credentials. You can use this account to create actual users in stating and production servers. Developer login is also added - refer to step 6 to enable. Please make sure that the google app credentials is only allowed to be used by @iddigital.com.au accounts

## Manage Pages

To manage frontend pages: https://starter.test/admin/pages

### Page customisation

Pages was customised to included Meta Fields. Page fields can also customisable. You can do this by updating the  \App\Filament\Fabricator\PageResource. Please note that Page model and database tables need to be updated accoringly

### Layout

Starter Kit comes with only a Default Layout. You can add a new layout using this command:

```bash
php artisan filament-fabricator:layout AdditionalLayout
```

Refer to this documentation for more info: https://v2.filamentphp.com/plugins/fabricator#layouts

### Blocks

Starter Kit comes with a few basic Blocks. You can add a new block using this command:

```bash
php artisan filament-fabricator:block MyBlock
```

Page Blocks is fully customisable. Refer to the documentation for more details: https://v2.filamentphp.com/plugins/fabricator#page-blocks

## Roles

Starter Kit comes with Super Admin and Developer Roles and seeded with the initial permissions. If necessary, you can add more roles and custom permissions.

Refer to the plugin documentation for more info: https://filamentphp.com/plugins/bezhansalleh-shield






