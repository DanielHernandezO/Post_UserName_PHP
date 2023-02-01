<?php
require_once 'IUserService.php';
class UserService implements IUserService
{
    private $userRepository;
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    public function saveUser(string $userName)
    {
        $this->userRepository->saveUser($userName);
    }
}
?>