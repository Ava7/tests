<?php
class User
{
    protected $db;
    private $username;

    public function __construct(Database $db)
    {
        if ($db instanceOf Database) {
            $this->db = $db;
        }
    }

    public function setUser($email)
    {
        $query = $this->db->query('SELECT * FROM `users` WHERE `email` = "' . $email . '"');
        $this->username = $query->fetch()['username'];
    }

    public function getUser()
    {
        return $this->username;
    }

}