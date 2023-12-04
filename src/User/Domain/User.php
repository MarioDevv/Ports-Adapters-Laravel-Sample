<?php


namespace Src\User\Domain;

// Value Objects
use Src\User\Domain\ValueObjects\Name;
use Src\User\Domain\ValueObjects\Email;

final class User
{
    public function __construct(
        private Name $name,
        private Email $email
    ) {}

    // Getters
    public function name(): Name
    {
        return $this->name;
    }

    public function email(): Email
    {
        return $this->email;
    }

    // Setters
    public function setName(string $name): void
    {
        $this->name = new Name($name);
    }

    public function setEmail(string $email): void
    {
        $this->email = new Email($email);
    }

    // Static factory
    public static function create(string $name, string $email): User
    {
        return new self(
            name: new Name($name),
            email: new Email($email)
        );
    }

    // To array
    public function toArray(): array
    {
        return [
            'name' => $this->name->value(),
            'email' => $this->email->value()
        ];
    }
}
