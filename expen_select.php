
<?php

 
include 'cn_db.php';


?>


<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<div id="page-content-wrapper">
                <div align="center">
                    <h2>EXPENDITURE</h2>
                </div>




                <div>

                                                            <table class="table table-hover">
                                            <thead class="thead-dark">
                                                <tr>
                                                <th scope="col">ลบข้อมูล</th>
                                                <th scope="col">แก้ไข</th>
                                                <th scope="col">ว/ด/ป</th>
                                                <th scope="col">ประเภทงบประมาณ</th>
                                                <th scope="col">จำนวนเงิน</th>
                                                <th scope="col">รายการ</th>
                                                <th scope="col" >รหัส</th>
                                                
                                                </tr>
                                            </thead>
                                            <tbody>
                                                 

                                                <?php 


                                                    $sql = "SELECT *FROM expenditure";

                                                    $stm = $con->prepare($sql);

                                                    try{
                                                        $stm->execute();

                                                    }catch(Exception $exc){
                                                    echo $exc->getTraceAsString();
                                                    }

                                                    while($row = $stm->fetch(PDO::FETCH_ASSOC)){?>

                                                        <tr align="center">
                                                            
                                                        <td><a href=delete.php?id=<?php echo $row["id_expen"]?>><img src='images/icons/delete.png'></a></td>
                                                            <td> <a href=formedit.php?id=<?php echo $row["id_expen"]?>><img src='images/icons/writing.png'></a></td>
                                                            <td><?php echo $row['time_ex']; ?></td>
                                                            <td><?php echo $row['category']; ?></td>
                                                            <td><?php echo number_format($row['values_ex'], 2   , '.'  , ','    ); ?></td>
                                                            <td><?php echo $row['name_ex']; ?></td>
                                                            <td><?php echo $row['id_expen']; ?></td>
                                                            

                                                        



                                                        
                                                        </tr>


                                                    <?php  }?>



                                            </tbody>
                                            </table>
                                
                                          
                                            <a href="form_insert/form_isert_expen.php"> <button class="w3-button w3-circle w3-black w3-right" >+</button></a>
                                            
                                           
                        </div>





                        </div>



            </div> <!-- /#page-content-wrapper -->
            
                   