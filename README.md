# response-handler
Mereturn Response dengan Response Handler

## Instalasi
Package ini membutuhkan composer.
```
$ composer require erlanggariansyah/response-handler
```

## Penggunaan
Request Success
```php
<?php
use ErlanggaRiansyah\ResponseHandler\Resp;

return Resp::requestSuccess();
```

Bad Request
```php
<?php
return Resp::requestEmpty($param);
```
```php
<?php
return Resp::requestNull($param);
```

Request Conflict
```php
<?php
return Resp::requestConflict($param);
```

Resource Not Found
```php
<?php
return Resp::requestNotFound($param);
```
## ACHTUNG!
Penggunaan untuk development API.
