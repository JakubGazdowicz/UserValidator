## UserValidator

Klasa PHP odpowiedzialna za walidację adresu e-mail oraz hasła.

## Testy

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
