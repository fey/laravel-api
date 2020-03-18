start:
	php artisan serve

install:
	composer install
	cp -n .env.example .env
	php artisan key:generate --ansi
	touch database/database.sqlite || true

console:
	php artisan tinker

log:
	tail -f storage/logs/laravel.log

lint:
	composer phpcs

lint-fix:
	composer phpcbf

.PHONY: install
