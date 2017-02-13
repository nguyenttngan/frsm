<?php
namespace App\Repositories\Eloquent;

class UserRepository extends Repository
{
    public function model()
    {
        return 'App\Models\User';
    }
}
