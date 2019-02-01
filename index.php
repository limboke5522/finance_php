<!DOCTYPE html>
<html>
<head>
	<title>Home</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="css.css">
<link rel="stylesheet" href="j.css">

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
       
        
        <nav class="navbar navbar-expand navbar-dark c" > <a href="#menu-toggle" id="menu-toggle" class="navbar-brand"><span class="navbar-toggler-icon"></span></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse" id="navbarsExample02" >
                <ul class="navbar-nav mr-auto" class="c">
                    <li class="nav-item active" class="c"> <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> </li>
                    
                </ul>
                <form class="form-inline my-2 my-md-0"> </form>
            </div>
        </nav>
        <div id="wrapper" class="toggled">
            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand"> <a href='index.php?action=home'> Home </a> </li>
                    <li> <a href='index.php?action=table_data'> Table Data </a> </li>

                    <li  data-toggle="collapse" data-target="#Revenue" class="collapsed active">
                        <a href="#"><i class="fa fa-gift fa-lg"></i> Revenue <span class="arrow"></span></a>
                    </li>
                        <ul class="sub-menu collapse" id="Revenue">
                            <li><a href="index.php?action=Revenue_select">Select Revenue</a></li>
                            <li><a href="index.php?action=Revenue_select">เพิ่มข้อมูล</a></li>
                        </ul>
            

                        <li  data-toggle="collapse" data-target="#Expenditure" class="collapsed active">
                        <a href="#"><i class="fa fa-gift fa-lg"></i> Expenditure <span class="arrow"></span></a>
                    </li>
                        <ul class="sub-menu collapse" id="Expenditure">
                            <li><a href="index.php?action=expen_select">Select Expenditure</a></li>
                            <li><a href="index.php?action=expen_select">เพิ่มข้อมูล</a></li>
                        </ul>


                        <li  data-toggle="collapse" data-target="#Budget" class="collapsed active">
                        <a href="#"><i class="fa fa-gift fa-lg"></i> Budget <span class="arrow"></span></a>
                    </li>
                        <ul class="sub-menu collapse" id="Budget">
                            <li><a href="index.php?action=budget">Select Budget</a></li>
                            <li><a href="index.php?action=budget">เพิ่มข้อมูล</a></li>
                        </ul>
               

                  



                    <div class="panel-group">
  
  

                 

               
                    
                </ul>
            </div> <!-- /#sidebar-wrapper -->
            <!-- Page Content -->

            <body class="cen">
<?php
            
			if(empty($_GET['action'])){ //ถ้าตัวแปร module หรือ action 
				
                $action='home';
			}else{
				// $module =$_GET['module']; //เก็บชื่อ folder
				$action =$_GET['action']; //เก็บชื่อ files
			}
			
				include("$action.php"); //เรียกใช้ไฟล์ ตามชื่อโฟลเดอร์และชื่อไฟล์ที่ส่งมาจากลิงค์
			
?>
           
        </div> <!-- /#wrapper -->
        <!-- Bootstrap core JavaScript -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script> <!-- Menu Toggle Script -->
        <script>
          $(function(){
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });

            $(window).resize(function(e) {
              if($(window).width()<=768){
                $("#wrapper").removeClass("toggled");
              }else{
                $("#wrapper").addClass("toggled");
              }
            });
          });
           
        </script>
   </body>
  
  </html>