<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 12.05.2016
 * Time: 18:36
 * Отправка соощений по емаил
 */
class Email
{
    public $CI;

    function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->library('smtp');

    }
}