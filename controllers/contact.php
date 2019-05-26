<?php
if(!class_exists('Main'))
    require CONTROLLERS_PATH.'Main.php';

class contact extends Main
{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
        $page_data = array(
            'page_title' => 'Closet to Cleaners | Contact Us'
        );
        $this->plugin->add('contact');
        $this->load_view('layout', $page_data);
    }

    function form_post(){
        if(strtolower($_SERVER['REQUEST_METHOD']) !== 'post'){
            return $this->index();
        }
        $vConf = array(
            'type' => 'required',
            'name' => 'required|alpha|min_length[5]|max_length[32]',
            'email' => 'required|email',
            'phone' => 'required|phone|min_length[10]',
            'message' => 'required|alnum|min_length[10]',
            'subject' => 'required|alnum|min_length[6]'
        );
        $this->load_lib('Form',$_POST);
        if($this->form->validate($vConf)) {
            $this->load_lib("Mail");
            $message = $_POST['message'];
            $result = $this->mail->send($_POST['name'],$_POST['email'],$_POST['subject'],$message);
            if($result['status'])
                echo "OK";
            else
                echo $result['errmsg'];
        }else
            echo "Failed to validate form data.".json_encode($this->form->get_validation_logs());
    }

}