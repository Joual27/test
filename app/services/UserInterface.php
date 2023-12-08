<?php



interface UserInterface{
    public function getAllUsers();
    public function getUserByID($username);
    public function addUser(User $user);
    public function updateUser(User $data);
    public function deleteUser($userID);

}



?>