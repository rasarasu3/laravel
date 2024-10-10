<?php
interface UserRepositoryInterface {
    public function getAllUsers();
    public function createUser(array $data);
}
?>