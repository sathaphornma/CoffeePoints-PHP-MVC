<?php
class SearchMemberModel extends DB
{
    //*** ประกาศตัวแปรเริ่มต้น */
    private $bdd;
    public $result;

    //*** กำหนดค่าให้ตัวแปรเริ่มต้น และเรียกใช้งานคำสั่งถัดไป */
    public function __construct()
    {
        //echo 'SearchMember Model'.'<br>';
        $this->bdd = new DB();
        $this->result = null;
    }

    //*** ทำหน้าที่กำหนดคำสั่ง SQL เพื่อติดต่อกับฐานข้อมูล*/
    public function setSearchMember($keySearch)
    {
        //echo $keySearch ;

        $sql = "SELECT Member_ID,First_Name,Last_Name FROM members
        WHERE Member_ID = '$keySearch' OR Phone = '$keySearch' ";

        return $this->result = $this->bdd->getOne($sql);
        
    }
}
