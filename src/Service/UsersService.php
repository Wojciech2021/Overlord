<?php

namespace App\Service;

use App\Repository\UserRepository;

class UsersService
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getAllUsers()
    {
        return $this->userRepository->getAllUsers();
    }

    public function getUser(int $id)
    {
        return $this->userRepository->findOneBy(['id' => $id]);
    }
}