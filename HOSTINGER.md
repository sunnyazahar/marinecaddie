# Hostinger fix — CSS / fonts / icons on mobile

## Problem
The site HTML was loading assets from `http://localhost/...`.
Phones cannot reach your computer, so CSS, JS, fonts, and icons fail.

## Do this in Hostinger hPanel (required)

### 1. Edit `.env`
Open **Files** → your site root → `.env` and set:

```env
APP_ENV=production
APP_DEBUG=false
APP_URL=https://indigo-jay-801538.hostingersite.com
ASSET_URL=https://indigo-jay-801538.hostingersite.com
```

Delete any line like:
`ASSET_URL=http://localhost/MarineCaddie/public`

### 2. Pull latest code from GitHub
```bash
git pull origin main
composer dump-autoload -o
php artisan config:clear
php artisan cache:clear
php artisan view:clear
```

If `bootstrap/cache/config.php` exists, delete it.

### 3. Confirm document root
Domain document root must be the **`public`** folder.

### 4. Check on phone
View page source. CSS links must look like:

`https://indigo-jay-801538.hostingersite.com/assets/css/styles.css`

NOT `http://localhost/...`
