<?php
include '../cn_db.php';

$strid=null ;
if(isset($_GET["id"]))
{
  $strid = $_GET["id"];
}


$id= $strid;

$sql="delete from revenue where id_reve =:p6";
$stm=$con->prepare($sql);
$stm->bindParam(":p6",$id);

try{
$stm->execute();
echo "<script>alert('ลบข้อมูลเรียบร้อยแล้ว');</script>";
echo "<script>window.location='../index.php?action=Revenue_select'</script>";
}catch(Exception $exc){
	echo $exc->getTraceAsString();
}