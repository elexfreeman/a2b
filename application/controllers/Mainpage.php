<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*контроллер главной страницы*/
class Mainpage extends CI_Controller {

    /*тут хранятся настройки, закгружаются в конструкторе*/
    public $settings;
    public $data;

    public function __construct()
    {
        parent::__construct();

        /*AUTH*/
        $this->load->library('ion_auth');
        $this->load->library('session');

        $this->load->model('users_model');
        $this->load->model('mainpage_model');

        $this->load->helper('url_helper');

        //Загружаем языки
        $this->lang->load('mainpage');

        /*загружаем настройки*/
        $this->load->model('settings_model');


        $this->settings=$this->settings_model->get();

        //Описывает в лангве для страницы
        $this->data['pagetitle']=$this->lang->line('pagetitle');

        /*загружаем navbar*/
        $this->load->model('navbar_model');
        $this->data['navbar']=$this->navbar_model->Get();
    }

	public function index()
	{
        /*переменные для языков описанны тут: \application\language\*/
        $this->data['text_h1']=$this->lang->line('text_h1');;
        $this->data['text_description']=$this->lang->line('text_description');


        /*Проверяем логин*/
        /*если не залогинен*/
        if (!$this->ion_auth->logged_in())
        {
            // redirect them to the login page
            redirect('http://'.$_SERVER['SERVER_NAME'].'/auth/login', 'refresh');
        }
        /*Если не админ то подгружаем user view*/
        elseif (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
        {
            /*Заголовок общтй для всех*/
            $this->load->view('head',$this->data);
            /*навбар*/
            $this->load->view('navbar/navbar',$this->data);

            /*футер общий для всех*/
            $this->load->view('footer');
        }
        else
        {
            /*иначе подгружаем интерфейс админа*/
            /*todo подумать об инетрефейсе админа*/
            /*Заголовок общтй для всех*/
            $this->load->view('head',$this->data);
            /*навбар*/
            $this->load->view('navbar/admin_navbar',$this->data);
            /*шаблон страницы*/
            $this->load->view('mainpage/tpl_mainpage');
            /*футер общий для всех*/
            $this->load->view('footer');

        }
	}
}
