reproduce:
	docker run --rm -v ${PWD}/:/var/www composer:2 /bin/sh -c "cd /var/www && composer install"
	docker run --rm -v ${PWD}/:/var/www php:8.2-cli /bin/sh -c "php /var/www/test.php"
