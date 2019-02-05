<?php
include '../cn_db.php';

$name_rn= $_POST['namelist'];
$values_rn= $_POST['amount'];
$category= $_POST['category'];
$date_rn= $_POST['date_time'];

// $ext = pathinfo(basename($_FILES['pro_expen']['name']), PATHINFO_EXTENSION);
// $new_pdf_name = 'pro_ex'.uniqid().".".$ext;
// $pro_path = "../pro/";
// $upload_path = $pro_path.$new_pdf_name;


// //uploading

// 	//if($ext==".pdf"){

// 		$success = move_uploaded_file($_FILES['pro_expen']['tmp_name'], $upload_path);
// 		if ($success==FALSE) {
// 				echo "<script>alert('Files ไม่ถูกต้อง');</script>";
// 		echo "<script>window.location='insert_expen.php'</script>";
// 		exit();
// 		}

// 	//}else{
// 		//echo "File ไม่ถูกต้อง";
// 	//}

// $pro_reve = $new_pdf_name;

//insert ข้อมูล
$sql1="INSERT INTO expenditure( name_ex,values_ex, category, time_ex ) VALUES (:p1,:p2,:p3 ,:p4)";
$stm=$con->prepare($sql1);
$stm->bindParam(':p1',$name_rn);
$stm->bindParam(':p2',$values_rn);
$stm->bindParam(':p3',$category);
$stm->bindParam(':p4',$date_rn);



try{
    $stm->execute();

echo "<script>alert('บันทึกข้อมูลเรียบร้อยแล้ว');</script>";
echo "<script>window.location='../index.php?action=expen_select'</script>";
} catch(Exception $exc){
    echo $exc->getTraceAsString();
}


?>