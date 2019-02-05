<?php
include '../cn_db.php';

 $name_cg= $_POST['namebudget'];


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
$sql1="INSERT INTO category_fn( name_cg) VALUES (:p1)";
$stm=$con->prepare($sql1);
$stm->bindParam(':p1',$name_cg);



try{
    $stm->execute();
    header("Location:../index.php?action=budget");
// echo "<script>alert('บันทึกข้อมูลเรียบร้อยแล้ว');</script>";
// echo "<script>window.location='../index.php?action=budget'</script>";
} catch(Exception $exc){
    echo $exc->getTraceAsString();
}


?>