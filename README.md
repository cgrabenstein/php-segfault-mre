# What?

This is an MRE to demonstrate a PHP Segfault we were running into in our project.

# How?

Clone the repository and run `make reproduce`.

If successful, the final lines of the output should look like this:

```
docker run --rm -v /:/var/www php:8.2-cli /bin/sh -c "php /var/www/test.php"
Segmentation fault
make: *** [reproduce] Error 139
```

# What?!

I have no idea what the underlying reason for the segfault is, but two oddities are required and present in this MRE:
* Multiple Kernels in one project, that load different but overlapping sets of services. The Foo\Kernel and Bar\Kernel both load the classes in the App\Common namespace. But the only load the Foo or Bar namespace, respectively.
* An enum with a public const that's being referenced. The error does not happen if you change the enum into a class and the enum cases into public consts.

The final call is `ReflectionAttribute->__toString()`, this eventually causes the Segfault.