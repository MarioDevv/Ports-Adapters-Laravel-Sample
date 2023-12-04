<?php


namespace Src\User\Domain\ValueObjects;


final class Name
{
    public function __construct(private readonly string $name)
    {
        $this->validate();
    }

    public function value(): string
    {
        return $this->name;
    }

    private function validate(): void
    {
        if (strlen($this->name) < 3) {
            throw new \InvalidArgumentException('Invalid name');
        }
    }
}