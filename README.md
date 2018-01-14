# Export php.ini settings into own file

A script to export all local php.ini settings into own php.ini file. 

This can be useful, if you want to configure your Docker image, to use managed server php.ini settings.

## Configure

Change the filename (and path) of file to export, in line 8:

```php
$file = 'php.ini';
```

To export global, not local, php.ini settings, change line 19

```php
$val['local_value']
```

into 

```php
$val['global_value']
```
