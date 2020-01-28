<?php
class SearchMember extends Controller
{
    private $model;
    private $models;
    private $keySearch;
    private $result;
    public $member_id;
    public $member_name;
    public $member_lname;


    //*** ทำหน้ากำหนดค่าเริ่มต้นของตัวแปร */
    public function __construct()
    {
        $this->model = null;
        $this->models = null;
        $this->keySearch = null;
        $this->result = null;
    }

    //*** ทำหน้าที่ส่งต่อคำขอไปยังฟังชั่นอื่นๆ */
    public function index()
    {
        //echo 'SearchMember Controller'.'<br>';
        $this->invoke();
    }

    //*** ทำหน้าที่จัดการการค้นหาไอดี ของสมาชิกโดยการติดต่อกับส่วนของ Model*/
    public function invoke()
    {
        //echo 'invoke SearchMember' ;

        $this->model = $this->model('SearchMember');
        $this->models = new SearchMemberModel;

        $this->keySearch =  $_GET['search_member'];
        $this->result = $this->models->setSearchMember($this->keySearch);;
        $this->manageMember($this->result);
    }

    //*** ทำหน้าที่จัดการผลการค้นหา แล้วส่งผลการค้นหาไปยังส่วน View */
    public function manageMember($list)
    {
        $this->view('SearchMember/index');

        if ($list) {
            //print_r($list);
            $this->view('SearchMember/members',$list);

        }else{
            echo 'Member not found' ;
        }
    }
}
