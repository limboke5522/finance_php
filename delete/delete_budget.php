<?php
include '../cn_db.php';

$strid=null ;
if(isset($_GET["id_cg"]))
{
  $strid = $_GET["id_cg"];
}


$id= $strid;

$sql="DELETE FROM category_fn WHERE id_cg =:p6";
$stm=$con->prepare($sql);
$stm->bindParam(":p6",$id);

try{
$stm->execute();
echo "<script>alert('ลบข้อมูลเรียบร้อยแล้ว');</script>";
echo "<script>window.location='../index.php?action=budget'</script>";
}catch(Exception $exc){
	echo $exc->getTraceAsString();
}