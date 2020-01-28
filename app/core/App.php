<?php
class App
{
    protected $controller = 'Signin';
    protected $method = 'index';
    protected $params = [];

    //*** ทำหน้าที่จัดการทางไปสู่ Controller
    public function __construct()
    {
        $url = $this->parseUrl();
        //print_r($url);
        
        if (file_exists('../app/controllers/' . $url[0] . '.php')) {
            
            $this->controller = $url[0];
            unset($url[0]);

        }
        require_once '../app/controllers/' . $this->controller . '.php';
        //echo $this->controller; 
        
        $this->controller = new $this->controller;
        
        if (isset($url[1])) {
            if(method_exists($this->controller, $url[1]))
            {
                //echo 'ok';
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        $this->params = $url ?  array_values($url) : [] ;

        /*  
            ตัวอย่าง : localhost/myweb/home/name/saifah
            home == controller
            name == method in 'home' controller 
            saifah == params in 'name' method
        */

        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    //*** ทำหน้าที่วิเคราะห์ URL และจัดการกับคำภายใน URL
    public function parseUrl()
    {
        if (isset($_GET['url'])) {
            return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }
}
