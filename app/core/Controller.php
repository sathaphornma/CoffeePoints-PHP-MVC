<?php
    class Controller
    {
        //*** ทำหน้าที่นำเข้าส่วนของ Model เพื่อเชื่อมต่อหรือจัดการกับระบบฐานข้อมูลต่อไป*/
        public function model($model)
        {
            require_once '../app/models/Database.php' ;
            require_once '../app/models/' .$model. '.php';
            return new $model() ;
        }
        
        //*** ทำหน้าที่นำเข้าไฟล์ในส่วนของ View เพื่อแสดงผล*/
        public function view($view, $data =array())
        {
            require_once '../app/views/pages/' .$view. '.php' ;
        }

    }
?>
