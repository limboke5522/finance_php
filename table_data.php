
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
                                                <th scope="col">คงเหลือ</th>
                                                <th scope="col">รายจ่ายรวม</th>
                                                <th scope="col">รายรับรวย</th>
                                                <th scope="col">จำนวนเงิน งบเดิม</th>
                                                <th scope="col">ประเภทงบประมาณ</th>
                                                <th scope="col" >ลำดับ</th>
                                                
                                                </tr>
                                            </thead>
                                            <tbody>
                                                 

                                                <?php 

                                                    $n=1;



                                                    $sql = "SELECT id_expen, name_ex, sum(values_ex) as total_ex, category, time_ex, id_cg, name_cg, values_bg
                                                    FROM expenditure, category_fn
                                                    WHERE name_cg = category
                                                    GROUP BY name_cg 
                                                    ";


                                               
                                                    $sql1 = "SELECT id_reve, name_rn, sum(values_rn) as total_rn, category_rn, date_rn, id_cg, name_cg, values_bg
                                                            FROM  category_fn, revenue
                                                            WHERE name_cg = category_rn
                                                            GROUP BY name_cg 
                                                            ";


                                                    $stm = $con->prepare($sql1);
                                                    $sss = $con->prepare($sql);
                                                    $stm->execute();
                                                    $sss->execute();
                                                    
                                                        if($stm->rowCount() > 0 &&  $sss->rowCount() > 0){


                                                            while($row = $stm->fetch(PDO::FETCH_ASSOC) AND $rowi = $sss->fetch(PDO::FETCH_ASSOC)){
                                                                extract($row);
                                                                extract($rowi);



                                                            
                                                                ?>



                                                        

                                                    

                                                    

                                                        <tr align="center">
                                                            
                                                        
                                                            <td bgcolor="#D3D3D3"><?php 
                                                            $balance = ($values_bg+$total_rn)-$total_ex;
                                                            echo number_format($balance, 2   , '.'  , ','    )
                                                            ?>฿</td>
                                                            <td><?php echo number_format($total_ex, 2   , '.'  , ','    )?>฿</td>
                                                            <td><?php echo number_format($total_rn, 2   , '.'  , ','    )?>฿</td>
                                                            <td><?php echo number_format($values_bg, 2   , '.'  , ','    )?>฿</td>
                                                            <td><?php echo $name_cg; ?></td>
                                                            <td><?php echo $n;?></td>
                                                            

                                                        



                                                        
                                                        </tr>


                                                    <?php $n++;  }
                                                                } else{?>
                                                    <?php } ?>



                                            </tbody>
                                            </table>
                                




                                    </div>
                                    </div>





                                    </div>
            </div> <!-- /#page-content-wrapper -->