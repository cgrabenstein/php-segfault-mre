reproduce:
	docker run --rm -v ${PWD}/:/var/www php:8.2-cli /bin/sh -c "php /var/www/test.php"
