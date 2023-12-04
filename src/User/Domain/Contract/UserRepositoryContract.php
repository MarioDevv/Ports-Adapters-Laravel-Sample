<?php


namespace Src\User\Domain\Contract;

use Src\User\Domain\User;

interface UserRepositoryContract
{
    public function getUsers(): array;
    public function delete(int $id): void;
    public function getById(int $id): User;
    public function update(User $user, int $id): void;
    public function createUser(User $user): void;
}