
<?php

 
include 'cn_db.php';


?>


<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<div id="page-content-wrapper">
                <div align="center">
                    <h2>BUDGET</h2>
                </div>




                <div>

                                                            <table class="table table-hover">
                                            <thead class="thead-dark">
                                                <tr>
                                                <th scope="col">ลบข้อมูล</th>
                                                <th scope="col">แก้ไข</th>
                                                <th scope="col">จำนวนเงิน</th>
                                                <th scope="col">ประเภทงบประมาณ</th>
                                                <th scope="col" >ลำดับ</th>
                                                
                                                </tr>
                                            </thead>
                                            <tbody>
                                                 

                                                <?php 


                                                    $sql = "SELECT *FROM category_fn";

                                                    $stm = $con->prepare($sql);

                                                    try{
                                                        $stm->execute();

                                                    }catch(Exception $exc){
                                                    echo $exc->getTraceAsString();
                                                    }

                                                    while($row = $stm->fetch(PDO::FETCH_ASSOC)){?>

                                                        <tr align="center">
                                                            
                                                        <td><a href=delete/delete_budget.php?id_cg=<?php echo $row["id_cg"]?>><img src='images/icons/delete.png'></a></td>
                                                            <td> <a href=formedit.php?id=<?php echo $row["id_cg"]?>><img src='images/icons/writing.png'></a></td>

                                                            <td><?php echo number_format($row['values_bg'], 2   , '.'  , ','    ); ?>฿</td>
                                                            
                                                            <td><?php echo $row['name_cg']; ?></td>
                                                            <td><?php echo $row['id_cg']; ?></td>
                                                            

                                                        



                                                        
                                                        </tr>


                                                    <?php  }?>



                                            </tbody>
                                            </table>
                                
                                          
                                            <script>
                                            function myFunction() {
					                            window.open("form_insert/form_isert_budget.php","50%","50%","");

					                    }</script>

                                             <button class="w3-button w3-circle w3-black w3-right" onclick="myFunction()">+</button>
                                           
                        </div>





                        </div>



            </div> <!-- /#page-content-wrapper -->
            
                   