# Hostinger .env (production)

Copy these into your Hostinger `.env` (hPanel → Files → `.env`), then clear cache.

```env
APP_ENV=production
APP_DEBUG=false
APP_URL=https://indigo-jay-801538.hostingersite.com

# Document root must be the /public folder.
# Do NOT use /public in ASSET_URL on Hostinger.
ASSET_URL=https://indigo-jay-801538.hostingersite.com
```

Then in Hostinger terminal (or SSH):

```bash
php artisan config:clear
php artisan cache:clear
php artisan view:clear
```

If assets still 404, set the domain document root to `public`.
