<?php

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        //输出调试信息
        //$this->output->enable_profiler(TRUE);
    }

    public function index()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        //这里调用验证函数对用户名进行验证
        $this->form_validation->set_rules('username', 'Username', 'required|callback_validate');
        $this->form_validation->set_rules('password', 'Password', 'required');

        //第一次运行的时候没有提交表单，显示login页面
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('login');
        }
        else
        {
            //提取需要的session信息
            $sessiondata = array
                (
                    'username' => $this->input->post('username'),
                    'userid' => $this->login_model->getid()
                );
            //存储session
            $this->session->set_userdata($sessiondata);
            //跳转到image主页
            redirect('/success','refresh');
        }
    }

    //用户名验证函数
    public function validate($str)
    {
        if ($this->login_model->validate() == FALSE)
        {
            $this->form_validation->set_message('validate', 'Invalid Username or Password.');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }
}
