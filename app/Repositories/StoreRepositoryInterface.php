<?php
interface StoreRepositoryInterface {
    public function getAllStores();
    public function createStore(array $data);
}
?>