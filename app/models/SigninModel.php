<?php
class SigninModel extends DB
{
    private $sid;
    private $pass;
    private $bdd;
    public $result;
    
    public function __construct()
    {
        //echo 'Signin Model'.'<br>';
        $this->bdd = new DB();
        $this->setSignin();
    }

    public function setSignin()
    {

        if (isset($_POST['sid']) && isset($_POST['pwd'])) {
            $this->sid = ($_POST['sid']);
            $this->pass = ($_POST['pwd']);

            $sql = "SELECT First_Name,Last_Name FROM staffs WHERE Staff_ID = '$this->sid' AND Password = '$this->pass' LIMIT 1";

            return $this->result = $this->bdd->getSignin($sql);

        }
    }

   /* public function show()
    {
        if (isset($_POST['sid']) && isset($_POST['pwd']))
            return $this->result = 'show' ;
        else
            return $this->result = 'err' ;

    }*/
}
