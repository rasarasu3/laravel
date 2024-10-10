
<?php
class StoreRepository implements StoreRepositoryInterface {
    public function getAllStores() {
        return Store::all();
    }

    public function createStore(array $data) {
        return Store::create($data);
    }
}
?>