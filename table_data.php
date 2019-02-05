
<?php

 
include 'cn_db.php';


?>




<div id="page-content-wrapper">
                <div align="center">
                    <h1>Hello THEJANE</h1>
                    <h2>Table Data</h2>

                    
                <div>

                                    <table class="table table-hover">
                                    <thead class="thead-dark">
                                    <tr>
                                  
                                    <th scope="col">ว/ด/ป</th>
                                    <th scope="col">ประเภทงบประมาณ</th>
                                    <th scope="col">รายจ่าย</th>
                                    <th scope="col">รายรับ</th>
                                    <th scope="col">รายการ</th>
                                    <th scope="col" >รหัส</th>

                                    </tr>
                                    </thead>
                                    <tbody>


                                    <?php 


                                    $sql = "SELECT *FROM revenue";

                                    $stm = $con->prepare($sql);
                                    
                                    $i=1;

                                    try{
                                    $stm->execute();

                                    }catch(Exception $exc){
                                    echo $exc->getTraceAsString();
                                    }

                                    while($row = $stm->fetch(PDO::FETCH_ASSOC)){?>
                                    
                                    <tr align="center">

                                    
                                    <td><?php echo $row['date_rn']; ?></td>
                                    <td><?php echo $row['category']; ?></td>
                                    <td><?php echo $row['values_rn']; ?></td>
                                    <td><?php echo $row['values_rn']; ?></td>
                                    <td><?php echo $row['name_rn']; ?></td>
                                    <td><?php echo  $i++; ?></td>







                                    </tr>


                                    <?php  }?>



                                    </tbody>
                                    </table>




                                    </div>
                                    </div>





                                    </div>
            </div> <!-- /#page-content-wrapper -->