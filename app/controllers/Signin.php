<?php
class Signin extends Controller
{
    private $model;
    private $result;

    public function __construct()
    {
        session_start();
        $this->model = '';
        $this->result = '';

    }

    public function index()
    {
        //echo 'Signin Controller' .'<br>';
        $this->invoke();
            
    }

    public function invoke()
    {   
        $this->model = $this->model('SigninModel');
        
        $this->result = $this->model->result ;

        $this->checkSesstion($this->result);

        //print_r($this->model);
        //echo $this->model->result;
    }

    public function checkSesstion($res)
    {

        if (!$res) {
            $this->view('Signin/index');
        } 
        else {
            $this->view('SearchMember/index');
        }

        /*
        if ($this->result) {
            $this->view('dashboard/index');
        } else {
            $this->view('signin/index');
        }*/
    }
}
