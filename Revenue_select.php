
<?php

 
include 'cn_db.php';


?>


<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<div id="page-content-wrapper">
                <div align="center">
                    <h2>REVENUE</h2>
                </div>




                <div>

                                                            <table class="table table-hover">
                                            <thead class="thead-dark">
                                                <tr>
                                                <th scope="col">ลบข้อมูล</th>
                                                <th scope="col">แก้ไข</th>
                                                <th scope="col">ว/ด/ป</th>
                                                <th scope="col">จำนวนเงิน</th>
                                                <th scope="col">ประเภทงบประมาณ</th>
                                                
                                                <th scope="col">รายการ</th>
                                                <th scope="col" >รหัส</th>
                                                
                                                </tr>
                                            </thead>
                                            <tbody>
                                                 

                                                <?php 


                                                    $sql = "SELECT *FROM revenue";

                                                    $stm = $con->prepare($sql);

                                                    try{
                                                        $stm->execute();

                                                    }catch(Exception $exc){
                                                    echo $exc->getTraceAsString();
                                                    }

                                                    while($row = $stm->fetch(PDO::FETCH_ASSOC)){
                                                        
                                                        
                                                        
                                                   

                                                            

                                                            
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        ?>

                                                        <tr align="center">
                                                            
                                                        <td><a href=delete.php?id=<?php echo $row["id_reve"]?>><img src='images/icons/delete.png'></a></td>
                                                            <td> <a href=formedit.php?id=<?php echo $row["id_reve"]?>><img src='images/icons/writing.png'></a></td>
                                                            <td><?php echo $row['date_rn']; ?></td>
                                                            <td><?php echo number_format($row['values_rn'], 2   , '.'  , ','    ); ?></td>
                                                            <td><?php echo $row['category']; ?></td>
                                                            
                                                            <td><?php echo $row['name_rn']; ?></td>
                                                            <td><?php echo $row['id_reve']; ?></td>
                                                            

                                                        



                                                        
                                                        </tr>


                                                    <?php  } ?>

                                                    <?php 


                                                        $sql = "SELECT sum(values_rn) as total FROM revenue";
                                                        $stm = $con->prepare($sql);
                                                        $stm->execute();
                                                        $rowj= $stm->fetch(PDO::FETCH_ASSOC);
                                                        ?>  
                                                        
                                                        <tr bgcolor="#D3D3D3">
                                                        <td></td>
                                                        <td></td>
                                                        <td align="left"></td>
                                                        <td align="center"><?php echo number_format($rowj['total'], 2   , '.'  , ','    ); ?>฿</td>
                                                        <th>รวม</th>
                                                        <td></td>
                                                        <td></td>

                                                        </tr>

                                            </tbody>
                                            </table>
                                
                                          
                                            <a href="form_insert/form_isert_reve.php"> <button class="w3-button w3-circle w3-black w3-right" >+</button></a>
                                            
                                           
                        </div>





                        </div>



            </div> <!-- /#page-content-wrapper -->
            
                   