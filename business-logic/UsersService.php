<?php

// Check for a defined constant or specific file inclusion
if (!defined('MY_APP') && basename($_SERVER['PHP_SELF']) == basename(__FILE__)) {
    die('This file cannot be accessed directly.');
}

require_once __DIR__ . "/../data-access/UsersDatabase.php";

class UsersService{

    // Get one customer by creating a database object 
    // from data-access layer and calling its getOne function.
    public static function getUserById($id){
        $users_database = new UsersDatabase();

        $user = $users_database->getOne($id);


        return $user;
    }

    // Get all customers by creating a database object 
    // from data-access layer and calling its getAll function.
    public static function getAllUsers(){
        $users_database = new UsersDatabase();

        $users = $users_database->getAll();

        return $users;
    }

    // Save a customer to the database by creating a database object 
    // from data-access layer and calling its insert function.
    public static function saveUser(UserModel $user){
        $users_database = new UsersDatabase();

        $success = $users_database->insert($user);

        return $success;
    }

    // Update the customer in the database by creating a database object 
    // from data-access layer and calling its update function.
    public static function updateUserById($user_id, UserModel $user){
        $users_database = new UsersDatabase();

        $success = $users_database->updateById($user_id, $user);

        return $success;
    }

    // Delete the customer from the database by creating a database object 
    // from data-access layer and calling its delete function.
    public static function deleteUserById($user_id){
        $users_database = new UsersDatabase();

        $success = $users_database->deleteById($user_id);

        return $success;
    }
}

