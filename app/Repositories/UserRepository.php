<?php
class UserRepository implements UserRepositoryInterface {
    public function getAllUsers() {
        return User::all();
    }

    public function createUser(array $data) {
        return User::create($data);
    }
}
?>