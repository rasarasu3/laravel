<?php
Gate::define('is-admin', function (User $user) {
    return $user->role === 'admin';
});
?>