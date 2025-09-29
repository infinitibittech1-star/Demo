# Symfony + Twig + Tailwind Demo (scaffold)

This repository is a lightweight scaffold demonstrating how to combine **Symfony (Twig)** templating with **Tailwind CSS** and **Webpack Encore**.
It is intended as a starting point you can use to show a working project structure to clients.

## What's included
- `composer.json` — lists PHP dependencies (Symfony/Twig bundles). Run `composer install` to install.
- `package.json` & `postcss.config.js` — Tailwind + Webpack Encore config for asset building.
- `webpack.config.js` — basic Encore setup.
- `public/index.php` — front controller (very minimal).
- `templates/base.html.twig` & `templates/home.html.twig` — Twig templates using Tailwind classes.
- `assets/styles/app.css` — Tailwind entry file.
- `README` includes setup steps to make the project run locally.

## Quick setup (local)
1. Install PHP (8.1+), Composer, Node.js (16+) and Yarn/NPM.
2. From repo root, install PHP deps:
   ```bash
   composer install
   ```
3. Install JS deps and build assets:
   ```bash
   npm install
   npm run dev
   ```
   For production:
   ```bash
   npm run build
   ```
4. Serve the `public/` folder with PHP's built-in webserver (for demo):
   ```bash
   php -S 127.0.0.1:8000 -t public
   ```
5. Open http://127.0.0.1:8000 in your browser.

## Notes
This scaffold is intentionally minimal — you will still need to run `composer install` and `npm install` to build a working demo. The goal is to provide a Git-ready repository structure that shows competency with Twig, Symfony conventions, Tailwind and Webpack Encore.
