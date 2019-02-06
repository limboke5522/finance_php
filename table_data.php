
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
                                  
                                  
                                    <th scope="col">รายการ</th>
                                    <th scope="col">งบ</th>
                                    

                                    </tr>
                                    </thead>
                                    <tbody>


                                    <?php 
                                    

                                    $sql = "SELECT revenue.name_rn,revenue.values_rn,revenue.category,revenue.date_rn,expenditure.name_ex,expenditure.values_ex,expenditure.category, category_fn.name_cg FROM revenue INNER JOIN category_fn INNER JOIN expenditure on revenue.category=category_fn.name_cg=expenditure.category ";

                                    $stm = $con->prepare($sql);
                                    
                                    $i=1;

                                    try{
                                    $stm->execute();

                                    }catch(Exception $exc){
                                    echo $exc->getTraceAsString();
                                    }
                                    
                                    
                                    while($row = $stm->fetch(PDO::FETCH_ASSOC)){
                                        
                                        ?>
                                    
                                    <tr align="center">

                                    
                                    <td><?php echo $row['name_rn']; ?></td>
                                    <td><?php echo $row['name_cg']; ?></td>
                                 







                                    </tr>


                                    <?php  }?>



                                    </tbody>
                                    </table>




                                    </div>
                                    </div>





                                    </div>
            </div> <!-- /#page-content-wrapper -->