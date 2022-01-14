# response-handler
Mereturn Response dengan Response Handler

## Instalasi
Package ini membutuhkan composer.
```
$ composer require erlanggariansyah/response-handler
```

## Penggunaan
Mereturn response dengan status sukses
```php
<?php
use ErlanggaRiansyah\ResponseHandler\Resp;

return Resp::requestSuccess();
```

Bad Request
```php
<?php
return Resp::requestEmpty();
```
## ACHTUNG!
Penggunaan untuk development API.
