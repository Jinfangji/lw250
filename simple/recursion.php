<?php
require 'MyPDO.class.php';
$db = MyPDO::getInstance('localhost', 'root', 'root', 'blog', 'utf8');
header("content-type:text/html;charset=utf-8");
$data = $db->query('select * from area');

$arr  = recursion($data,'0');



function recursion($data,$pid='0'){
   $tree = array();
	foreach($data as $k =>$v){  
        if($v['fid'] == $pid){                      //匹配子记录  
           
            //print_r($v)."</br>";
            $v['children'] = recursion($data,$v['id']); //递归获取子记录  
           
           
            if($v['children'] == null){  
                unset($v['children']);             //如果子元素为空则unset()进行删除，说明已经到该分支的最后一个元素了（可选）  
            }  
            $tree[] = $v;                           //将记录存入新数组  
        

        }  
           
    }  
   return $tree;  
}
print_r($arr);die;
//print_r($data);die;