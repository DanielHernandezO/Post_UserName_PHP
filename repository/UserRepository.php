<?php
require_once 'IUserRepository.php';
class UserRepository
{
    private $connection;
    public function __construct($connection)
    {
        $this->connection=$connection;
    }
    public function saveUser(string $userName)
    {
        $query = "INSERT INTO users(username) VALUES ('$userName')";
        $result = mysqli_query($this->connection,$query);
        if(!$result){
            die("query field");
        }
        echo "saved";
        header("Location: index.php");
    }
}
?>