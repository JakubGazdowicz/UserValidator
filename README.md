# UserValidator

Klasa PHP odpowiedzialna za walidację adresu e-mail oraz hasła.

Klasa zawiera dwie publiczne metody: 

``` php
validateEmail(string $email): bool

validatePassword(string $password): bool.
```

Adres email jest walidowany za pomocą regex. Prawidłowy adres e-mail musi spełniać podstawowe zasady: zawierać znak @, przed @ powinna być co najmniej jedna litera, a po @ powinna być domena (np. example.com), która zawiera kropkę (.) i co najmniej dwie litery po kropce.

Hasło powinno spełniać następujące kryteria:
 - musi zawierać co najmniej 8 znaków.
 - musi zawierać co najmniej jedną dużą literę, jedną małą literę, jedną cyfrę oraz jeden znak specjalny (np. !, @, #, etc.).


## Testy

Napisany kod jest pokryty testami w PHPUnit

Przed uruchomieniem testów należy zainstalować paczkę komendą:

```
composer install
```

Komenda do uruchomienia testów:

```
./vendor/bin/phpunit
```

## Przykład użycia
``` php
$validator = new UserValidator();

$email = "test@example.com";
$password = "StrongPass1!";

if ($validator->validateEmail($email)) {
    echo "Email is valid.\n";
} else {
    echo "Email is invalid.\n";
}

if ($validator->validatePassword($password)) {
    echo "Password is valid.\n";
} else {
    echo "Password is invalid.\n";
}
```
