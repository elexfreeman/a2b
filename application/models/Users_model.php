<?php
/**
 * Created by PhpStorm.
 * User: cod_llo
 * Date: 11.03.16
 * Time: 17:34
 * Работа с таблицей users
 */


class Users_model extends CI_Model {

    public $email;
    public $password;
    public $description;


    public function __construct()
    {
        parent::__construct();

    }

    /*Выдает список всех юзеров или одного по емайлу*/
    public function get($email=false)
    {
        if ($email === FALSE)
        {
            $query = $this->db->get('users');
            return $query->result_array();
        }

        $query = $this->db->get_where('users', array('email' => $email));
        return $query->row_array();
    }
}