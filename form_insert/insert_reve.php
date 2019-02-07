<?php
include '../cn_db.php';

$name_rn= $_POST['namelist'];
$values_rn= $_POST['amount'];
$category= $_POST['category'];
$date_rn= $_POST['date_time'];

// $ext = pathinfo(basename($_FILES['pro_reve']['name']), PATHINFO_EXTENSION);
// $new_pdf_name = 'pro_'.uniqid().".".$ext;
// $pro_path = "../pro/";
// $upload_path = $pro_path.$new_pdf_name;


// //uploading

// 	//if($ext==".pdf"){

// 		$success = move_uploaded_file($_FILES['pro_reve']['tmp_name'], $upload_path);
// 		if ($success==FALSE) {
// 				echo "<script>alert('Files ไม่ถูกต้อง');</script>";
// 		echo "<script>window.location='insert_reve.php'</script>";
// 		exit();
// 		}

// 	//}else{
// 		//echo "File ไม่ถูกต้อง";
// 	//}

// $pro_reve = $new_pdf_name;

//insert ข้อมูล
$sql1="INSERT INTO revenue( name_rn,values_rn, category_rn, date_rn) VALUES (:p1,:p2,:p3 ,:p4)";
$stm=$con->prepare($sql1);
$stm->bindParam(':p1',$name_rn);
$stm->bindParam(':p2',$values_rn);
$stm->bindParam(':p3',$category);
$stm->bindParam(':p4',$date_rn);



try{
    $stm->execute();
    
    echo "<script>alert('บันทึกข้อมูลเรียบร้อยแล้ว');</script>";

    echo "<script>window.close();</script>";
} catch(Exception $exc){
    echo $exc->getTraceAsString();
}


?>