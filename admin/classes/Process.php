<?php
 $filepath = realpath(dirname(__FILE__));
    include_once($_SERVER['DOCUMENT_ROOT'].'/slide/admin/lib/Session.php');
  include_once($_SERVER['DOCUMENT_ROOT'].'/slide/admin/lib/Database.php'); 
  include_once($_SERVER['DOCUMENT_ROOT'].'/slide/admin/helpers/Format.php'); 
class Process
{

 private $db;
 private $fm;

public function __construct()
   {
 $this->db = new Database();
 $this->fm = new Format();



   }
    public function all_data()
   {
   $query= "SELECT * FROM presentations ";
     $result=$this->db->select($query);
     return $result;
   }
   public function add_data($jd){
    // $jd='{"name":"jack","school":"colorado state","city":"NJ","id":null}';

    $new_json_data=json_encode($jd);
    var_dump($new_json_data);


     $query="INSERT INTO presentations(title,slide_1_text,chart_data_1) VALUES ('ok','ok',$new_json_data)";
         if ($result= $this->db->insert($query)) {
           return true;
         }
    }
   





 }