<?php 
set_time_limit(0);

include("header.php"); 
include("db.php");
?>
<html>
   <head>
      <title>Admin</title>

      <style type="text/css">
        body
         {
         /*background-image: linear-gradient( 109.2deg,  rgba(254,3,104,1) 9.3%, rgba(103,3,255,1) 89.5% );*/
         background-attachment: fixed;
         background-size: cover;
         }
         .input
         {
            margin-bottom: 10px;
         }

         .sidebar 
         {
           margin: 0;
           padding: 0;
           width: 200px;
           background-color: #333333;
           /*background-color: rgba(58, 83, 155, 1);*/
           /*background-color: rgba(96,125,139,1);*/
           position: fixed;
           height: 100%;
           overflow: auto;
           /*opacity: 0.5;*/
           /*border-radius: 5px;
           margin-top: 10px;
           margin-left: 10px;
           border: 1px solid black;
           box-shadow: 10px;*/
         }

         .sidebar a 
         {
           display: block;
           color: white;
           padding: 16px;
           text-decoration: none;
           margin: 0;
           text-align: center;
         }
          
         .sidebar a.active 
         {
           background-color: rgba(82, 179, 217, 1);
           color: white;
         }

         .sidebar a:hover:not(.active) 
         {
           background-color: #555;
           color: white;
         }
         a
         {
          opacity: 1;
         }

         /*div.content {
           margin-left: 200px;
           padding: 1px 16px;
           height: 1000px;
         }*/

         /*@media screen and (max-width: 700px) {
           .sidebar {
             width: 100%;
             height: auto;
             position: relative;
           }
           .sidebar a {float: left;}
           div.content {margin-left: 0;}
         }

         @media screen and (max-width: 400px) {
           .sidebar a {
             text-align: center;
             float: none;
           }
         }*/
         .box
         {
          border: 1px solid black;
          border-radius: 10px;
          width: 100%;
          padding: 20px;
          margin-top: 20px;
         }
         .edit_btn button
        {
          border-radius: 30px;
          border: none;
          outline: none;
          background-color: hsla(187, 100%, 40%,1);
          color: white;
          padding: 3px 30px 3px 30px;
        }
        .edit
        {
          display: block;
        }
      </style>
   </head>
   <body>
      <div class="container" style="margin: 0; padding: 0;">
         <div class="row" style="margin: 0;">
            <div class="col-sm-2" style="background-color: gray; height: 100%; padding: 0;">
               <div class="sidebar">
                 <a class="<?php if(isset($_GET['admin'])) echo "active"; ?>" href="admin.php?admin=true">Admin</a>
                 <a class="<?php if(isset($_GET['stu_det'])) echo "active"; ?>" href="admin.php?stu_det=true">Student Details</a>
                 <a class="<?php if(isset($_GET['sem_marks'])) echo "active"; ?>" href="admin.php?sem_marks=true">Semester Marks</a>

               </div>
            </div>
            <div class="col-sm-10">
               <?php if(isset($_GET['sem_marks']))  { ?>
                  <h3 style="text-align: center; margin-left: 180px; margin-bottom: 40px;">Add Semester Marks</h3>

                  <div class="container">
                    <form method="post" enctype="multipart/form-data">
                      
                    <div class="row">
                      <div class="col-sm-4"></div>
                      <div class="col-sm-7">
                        <div class="row">
                          <div class="col-sm-6" style="text-align: center;">Academic year : </div>
                          <div class="col-sm-6 input"><input style="height: 25px;" type="text" name="academic_year"></div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-4"></div>
                      <div class="col-sm-7">
                        <div class="row">
                          <div class="col-sm-6" style="text-align: center;">Year : </div>
                          <div class="col-sm-6 input"><input style="height: 25px;" type="text" name="year"></div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-4"></div>
                      <div class="col-sm-7">
                        <div class="row">
                          <div class="col-sm-6" style="text-align: center;">Semester : </div>
                          <div class="col-sm-6 input"><input style="height: 25px;" type="text" name="semester"></div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-4"></div>
                      <div class="col-sm-7">
                        <div class="row">
                          <div class="col-sm-6" style="text-align: center;">File Upload</div>
                          <div class="col-sm-6 input"><input style="height: 25px;" type="file" name="file"></div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-4"></div>
                      <div class="col-sm-7">
                        <div class="row">
                          <div class="col-sm-6" style="text-align: center;"></div>
                          <div class="col-sm-6 input"><input style="" type="submit" name="upload_marks" value="Upload"></div>
                        </div>
                      </div>
                    </div>
                    </form>

                    <?php if (isset($_POST['upload_marks'])) { ?>
                      <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-8">
                          <div style="text-align: center; width: 100%;"> 
                            <div class="progress-bar progress-bar-striped" style="border-radius: 30px;"></div> 
                          </div>
                        </div>
                        <div class="col-sm-2"></div>
                      </div>

                    <?php } ?>

                  </div>
               <?php } ?>
              

               <?php if(isset($_GET['stu_det']))  { ?>
                  <h3 style="text-align: center; margin-left: 180px; margin-bottom: 40px;">Add Semester Marks</h3>

                  <div class="container">
                    <form method="post" enctype="multipart/form-data">
                      
                    
                    <div class="row">
                      <div class="col-sm-4"></div>
                      <div class="col-sm-7">
                        <div class="row">
                          <div class="col-sm-6" style="text-align: center;">File Upload</div>
                          <div class="col-sm-6 input"><input style="height: 25px;" type="file" name="file"></div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-4"></div>
                      <div class="col-sm-7">
                        <div class="row">
                          <div class="col-sm-6" style="text-align: center;"></div>
                          <div class="col-sm-6 input"><input style="" type="submit" name="upload_details" value="Upload"></div>
                        </div>
                      </div>
                    </div>
                    </form>

                    <?php if (isset($_POST['upload_details'])) { ?>
                      <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-8">
                          <div style="text-align: center; width: 100%;"> 
                            <div class="progress-bar progress-bar-striped" style="border-radius: 30px;"></div> 
                          </div>
                        </div>
                        <div class="col-sm-2"></div>
                      </div>

                    <?php } ?>

                  </div>
               <?php }


                if (isset ($_GET['admin'])) { ?>
                  <div>
                     <!-- <div class="col-sm-4"></div>
                     <div class="input">
                        <h4 style="text-align: center;top: 50%; transform: translateY(50%);">Welcome Admin</h4>
                     </div>  -->  
                     <div class="container">
                       <div class="row">
                         <div class="col-sm-4"></div>
                         <div class="col-sm-6">
                           <h4 style="text-align: center; margin-top: 30px;">Welcome Admin</h4>
                         </div>
                         <div class="col-sm-2"></div>
                       </div>
                     </div>                 
                  </div>
               <?php } ?>
            </div>
         </div>
      </div>
   </body>
</html>


<?php
if(isset($_POST["upload_marks"]))
{
  $tb_name=$_POST['academic_year']."_".$_POST['year']."sem".$_POST['semester']."";

  $filename=$_FILES["file"]["tmp_name"];
  $tmpf = fopen($filename, "r");
  $tmp = fgetcsv($tmpf);
  fclose($tmpf);
  $cols= count($tmp);
  $cols=$cols-3;

  $subjects="";
  for ($i=1;$i<=$cols;$i++) $subjects=$subjects.", s".$i." varchar(7)";
  // echo $subjects;
  
  if ($subjects!="")
  {
    $qry = "CREATE TABLE IF NOT EXISTS `$tb_name` (rollno varchar(15) primary key, sgpa varchar(5), cgpa varchar(5)".$subjects.")";
    $result = mysqli_query($conn, $qry);
    
    if($_FILES["file"]["size"] > 0)
    {
      $file = fopen($filename, "r");
      ?><script type="text/javascript">//console.log(<?php echo count($file); ?>);</script><?php

      $tot=0;
      $tmpf = fopen($filename, "r");
      while (($tmp = fgetcsv($tmpf)) !== FALSE) $tot++;

      $subjects="";
      for ($i=1;$i<=$cols;$i++) $subjects=$subjects.", `s".$i."`";

      $c=0;
      while (($stu = fgetcsv($file)) !== FALSE)
      {
        $val = implode('", "', $stu);
        $val = preg_replace("/[e\r]/", "", $val);
        // echo $val."<br>";
        $sql = "INSERT INTO `$tb_name`(`rollno`, `sgpa`, `cgpa`".$subjects.") VALUES (".'"'.$val.'"'.")";
        $result = mysqli_query($conn, $sql);
        // echo $sql."<br>";
        $c++;


        ?>
        <script>
          var i=<?php echo round(($c/$tot)*100); ?>;
          $(".progress-bar").css("width", i + "%").text(i + " %");
        </script>
        <?php
        ob_flush(); flush(); //usleep(50000);
        
      }
      fclose($file);
    }
  }
}


if(isset($_POST["upload_details"]))
{

  $filename=$_FILES["file"]["tmp_name"];
  
  if($_FILES["file"]["size"] > 0)
  {
    $tot=0;
    $file = fopen($filename, "r");
    $stu = fgetcsv($file);

    $tmpf = fopen($filename, "r");
    while (($tmp = fgetcsv($tmpf)) !== FALSE) $tot++;
    $tot--;

    $c=0;

    while (($stu = fgetcsv($file)) !== FALSE)
    {
      $val="";
      $l=sizeof($stu);
      for ($i=0;$i<$l;$i++)
      {
        $stu[$i] = preg_replace("/[']/", "\'", $stu[$i]);
        $stu[$i] = preg_replace('/["]/', '\"', $stu[$i]);
      }
      $val = implode('", "', $stu);


      // echo $val."<br><br>";
      $sql = "INSERT INTO `details` VALUES (\"".$val."\")";
      $result = mysqli_query($conn, $sql);
      $c++;

      ?>
      <script>
        var i=<?php echo round(($c/$tot)*100); ?>;
        $(".progress-bar").css("width", i + "%").text(i + " %");
      </script>
      <?php
      ob_flush(); flush(); //usleep(50000);

    }
    fclose($file);
    
  }

}

?>