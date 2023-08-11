# What?

This is an MRE to demonstrate a PHP Segfault we were running into in our project.

# How?

Clone the repository and run `make reproduce`.

If successful, the output should look like this:

```
docker run --rm -v /:/var/www php:8.2-cli /bin/sh -c "php /var/www/test.php"
Segmentation fault
make: *** [reproduce] Error 139
```