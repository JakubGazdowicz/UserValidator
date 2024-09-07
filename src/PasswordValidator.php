<?php

declare(strict_types=1);

class PasswordValidator implements ValidatorInterface
{
    private const int MIN_LENGTH = 8;

    public function validate(string $input): bool
    {
        return $this->validatePassword(password: $input);
    }

    private function validatePassword(string $password): bool
    {
        return $this->hasMinimumLength($password) &&
            $this->hasUppercaseLetter($password) &&
            $this->hasLowercaseLetter($password) &&
            $this->hasDigit($password) &&
            $this->hasSpecialCharacter($password);
    }

    private function hasMinimumLength(string $password): bool
    {
        return strlen($password) >= self::MIN_LENGTH;
    }

    private function hasUppercaseLetter(string $password): bool
    {
        return preg_match('/[A-Z]/', $password) === 1;
    }

    private function hasLowercaseLetter(string $password): bool
    {
        return preg_match('/[a-z]/', $password) === 1;
    }

    private function hasDigit(string $password): bool
    {
        return preg_match('/\d/', $password) === 1;
    }

    private function hasSpecialCharacter(string $password): bool
    {
        return preg_match('/[\W_]/', $password) === 1;
    }
}