<?php
require 'MyPDO.class.php';
$db = MyPDO::getInstance('localhost', 'root', 'root', 'laravel', 'utf8');
$a  =1;
$a  =1;
$a  =1;
$a  =1;
$a  =1;
$a  =1;
$a  =1;

 for ($i=1; $i<11; $i++) { 
  $id= $i%5;
  //echo $id;
  //echo $id;die;
  if($id == 0){
     $id = $i%6;
     //echo '222';
  }
  //echo $id;die;
  //die;
  
  $table = 'user_';
  $table.= $id;
 //echo $table;die;
  $arr   = array('id'=>$id,'user_name'=>'骚旺');
  $data = $db->insert($table,$arr);     
          // $re=DB::table($table)->insert($arr);
}  





//print_r($data);die;
//关闭数据连接，减少资源消耗
// $db->destruct();
?>
