<?php
class UserController
{

    private $userService;
    public function __construct(IUserService $userService)
    {
        $this->userService = $userService;
    }
    public function saveUser(){
        echo "voy aqui";
        if(isset($_POST["saveUserName"])){
            $userName = $_POST['userName'];
            $this->userService->saveUser($userName);
        }
    }
}
?>