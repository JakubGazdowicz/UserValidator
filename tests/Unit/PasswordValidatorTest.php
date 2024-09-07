<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class PasswordValidatorTest extends TestCase
{
    private PasswordValidator $validator;

    protected function setUp(): void
    {
        $this->validator = new PasswordValidator();
    }

    public function testValidPassword(): void
    {
        $this->assertTrue($this->validator->validate('StrongPass1!'));
    }

    public function testPasswordTooShort(): void
    {
        $this->assertFalse($this->validator->validate('Sh0rt!'));
    }

    public function testPasswordWithoutUppercase(): void
    {
        $this->assertFalse($this->validator->validate('nouppercase1!'));
    }

    public function testPasswordWithoutLowercase(): void
    {
        $this->assertFalse($this->validator->validate('NOLOWERCASE1!'));
    }

    public function testPasswordWithoutDigit(): void
    {
        $this->assertFalse($this->validator->validate('NoDigit!'));
    }

    public function testPasswordWithoutSpecialCharacter(): void
    {
        $this->assertFalse($this->validator->validate('NoSpecial1'));
    }
}
