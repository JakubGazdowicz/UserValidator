<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class EmailValidatorTest extends TestCase
{
    private EmailValidator $validator;

    protected function setUp(): void
    {
        $this->validator = new EmailValidator();
    }

    public function testValidEmail()
    {
        $this->assertTrue($this->validator->validate('test@example.com'));
    }

    public function testEmailWithoutAtCharacter()
    {
        $this->assertFalse($this->validator->validate('testexample.com'));
    }

    public function testEmailWithoutLetterBeforeAtCharacter()
    {
        $this->assertFalse($this->validator->validate('@example.com'));
    }

    public function testEmailWithoutDotCharacterAfterAtCharacter()
    {
        $this->assertFalse($this->validator->validate('test@examplecom'));
    }

    public function testEmailWithoutTwoLettersAfterDotCharacter()
    {
        $this->assertFalse($this->validator->validate('test@example.c'));
    }
}
