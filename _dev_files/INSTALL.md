# Installation Directions (for developers)

1. Copy the `includes/.env-sample` to `includes/.env` and fill out at minimum the `[general]` and `[database]` sections.
2. Import the `_dev_files/tghc-dev.sql` file into your database.
3. Run `composer install`

## On Code Pulls

Always run `composer update` as dependencies change frequently during development.