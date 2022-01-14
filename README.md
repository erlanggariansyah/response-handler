# response-handler
Mereturn JSON Response hanya dengan satu baris kode. 

## Instalasi
Package ini membutuhkan composer dan berjalan untuk framework Laravel.
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
```php
<?php
return Resp::requestInvalid($param);
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

Password Input Invalid
```php
<?php
return Resp::passwordInvalid($param);
```

Date Input Invalid
```php
<?php
return Resp::dateInvalid($param);
```

Unauthorized Access
```php
<?php
return Resp::accessUnauthorized($param);
```
## ACHTUNG!
Penggunaan package ini diperuntukkan khusus untuk Development API.
