<?php

declare(strict_types=1);

class EmailValidator implements ValidatorInterface
{
    public function validate(string $input): bool
    {
        return $this->hasValidFormat(email: $input);
    }

    private function hasValidFormat(string $email): bool
    {
        $pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";

        return preg_match($pattern, $email) === 1;
    }
}