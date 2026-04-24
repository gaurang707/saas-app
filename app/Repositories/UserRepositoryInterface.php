<?php

namespace App\Repositories;

interface UserRepositoryInterface 
{
    public function findById($id);
    public function findByEmail($email);
    public function create(array $data);

}