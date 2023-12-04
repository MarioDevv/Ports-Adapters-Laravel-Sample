<?php


namespace Src\User\Infrastructure\Repository;

use App\Models\User as EloquentUser;
use Src\User\Domain\User;
use Src\User\Domain\Contract\UserRepositoryContract;


final class EloquentUserRepository implements UserRepositoryContract
{
    public function __construct(private readonly EloquentUser $eloquentUser)
    {}


    public function getById(int $id): User
    {
        $user = $this->eloquentUser->findOrFail($id);
        
        return User::create(
            name: $user->name,
            email: $user->email,
        );
    }

    public function getUsers(): array
    {
        return $this->eloquentUser->all()->toArray();
    }

    public function delete(int $id): void
    {
        $this->eloquentUser->findOrFail($id)->delete();
    }


    public function createUser(User $user): void
    {
        $this->eloquentUser->create([
            'name'  => $user->name()->value(),
            'email' => $user->email()->value(),
        ]);
    }

    public function update(User $user, int $id): void
    {
        $eloquentUser = $this->eloquentUser->findOrFail($id);
        
        $eloquentUser->name   = $user->name()->value();
        $eloquentUser->email  = $user->email()->value();
        
        $eloquentUser->save();
    }
}