<?php

namespace Src\User\Domain\ValueObjects;


final class Email
{
    public function __construct(private readonly string $email)
    {
        $this->validate();
    }

    public function value(): string
    {
        return $this->email;
    }

    private function validate(): void
    {
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            throw new \InvalidArgumentException('Invalid email');
        }
    }
}