<?php

namespace App\Service;

use App\Repository\UserRepository;
use App\Model\User;

class UserService
{
    /**
     * @var UserRepository
     */
    protected $userRepository;

    /**
     * UserService constructor.
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }



    
    /**
     * @param array $userData
     * @return User $user
     */
    public function createUser(array $userData) :User{
        $user = $this->userRepository->create($userData);

        return $user;
    }
}