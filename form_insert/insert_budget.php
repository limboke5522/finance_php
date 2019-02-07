<?php
include '../cn_db.php';


// $sql = "SELECT *FROM category_fn";
// $stm = $con->prepare($sql);


//     $stm->execute();

//     $row = $stm->fetch(PDO::FETCH_ASSOC))
//     extract($row);


 $name_bg= $_POST['namebudget'];

 
 $values_bg= $_POST['amount'];

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


$sql1="INSERT INTO category_fn( name_cg,values_bg) VALUES (:p1,:p2)";
$stm=$con->prepare($sql1);
$stm->bindParam(':p1',$name_bg);
$stm->bindParam(':p2',$values_bg);



try{
    $stm->execute();
    
echo "<script>alert('บันทึกข้อมูลเรียบร้อยแล้ว');</script>";
echo "<script>window.close();</script>";


} catch(Exception $exc){
    echo $exc->getTraceAsString();
}


?>