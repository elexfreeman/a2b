<?php
/**
 * Created by PhpStorm.
 * User: cod_llo
 * Date: 11.03.16
 * Time: 17:39
 * Настройки
 */


class Settings_model extends CI_Model {

    public $s_key;
    public $s_value;
    public $s_description;


    public function __construct()
    {
        parent::__construct();

    }

    /*Выдает список всех юзеров или одного по емайлу*/
    public function get($key=false)
    {
        if ($key === FALSE)
        {
            $query = $this->db->get('settings');
            $setings=array();
            foreach($query->result_array() as $row)
            {
                $setings[$row['s_key']]=$row['s_value'];
            }
            return $setings;
        }

        $query = $this->db->get_where('settings', array('s_key' => $key));
        return $query->row_array();
        $setings=array();
       foreach($query->row_array() as $row)
        {
            $setings[$row['s_key']]=$row['s_value'];
        }
        return $setings;


    }
}