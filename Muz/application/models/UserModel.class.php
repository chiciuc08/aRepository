<?php

/**
 * UserModel short summary.
 *
 * UserModel description.
 *
 * @version 1.0
 * @author Costy
 */
class UserModel extends Model
{
    private $id;
    private $nume;
    public function getUsers(){

        $sql = "select * from $this->table";

        $users = $this->db->getAll($sql);

        return $users;

    }
}
?>