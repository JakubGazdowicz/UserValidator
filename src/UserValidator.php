<?php

declare(strict_types=1);

class UserValidator
{
    public function __construct(
        private readonly EmailValidator    $emailValidator,
        private readonly PasswordValidator $passwordValidator,
    ) {}

    public function validateEmail(string $email): bool
    {
        return $this->emailValidator->validate($email);
    }

    public function validatePassword(string $password): bool
    {
        return $this->passwordValidator->validate($password);
    }
}