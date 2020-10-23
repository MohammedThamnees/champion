<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>KSAA</title>
</head>
<?php
include("admin_header.php");
include("connection.php");
$lid=$_GET['id'];
$rs=mysqli_query($con,"select * from college_registration,login where college_registration.lid=login.id and login.id='$lid'");
if($row=mysqli_fetch_array($rs))
{
?>
<body><center><h2>Institution </h2>
<form action="" method="post">
  <table width="500" border="0" cellspacing="0" cellpadding="10">
  <tr>
    <td>Name</td>
    <td><?php echo $row[1]?></td>
  </tr>
  <tr>
    <td>Affliation Number</td>
    <td><?php echo $row[2]?></td>
  </tr>
  <tr>
    <td>Address</td>
    <td><?php echo $row[3]?></td>
  </tr>
  <tr>
    <td>District</td>
    <td><?php echo $row[4]?></td>
  </tr>
  <tr>
    <td>Pin</td>
    <td><?php echo $row[5]?></td>
  </tr>
  <tr>
    <td>E-mail</td>
    <td><?php echo $row[6]?></td>
  </tr>
  <tr>
    <td>Phone Number</td>
    <td><?php echo $row[7]?></td>
  </tr>
  <?php }?>
  <tr>
    <td align="center">
      <div class="form-group form-button">
      <input type="submit" name="submit" id="submit" value="VERIFY" class="form-submit"/></td></div>
    <td align="center">
      <div class="form-group form-button">
        <input type="submit" name="reject" id="reject" value="Reject" class="form-submit"/></td></div>
    </tr>
</table>
</form></center>
</body>
<?php include("admin_footer.php")?>
</html>
<?php
if(isset($_POST['submit'])){  
  $str="update login set type='user' where id='$lid'";
  $rs=mysqli_query($con,$str);
  if($rs>0)
  {
    ?>
     <script>
       alert("verified...");
     window.location="collegeView.php";
     
        </script>
    <?php
  }
  else
  {
  ?>
    <script>
  alert("Some thing went wrong...");
    </script>
<?php
}
}

if(isset($_POST['reject'])){  
  $str1="update login set type='reject' where id='$lid'";
  $rs1=mysqli_query($con,$str1);
  if($rs1>0)
  {
    ?>
     <script>
       alert("Rejected...");
     window.location="collegeView.php";
     
        </script>
    <?php
  }
  else
  {
  ?>
    <script>
  alert("Some thing went wrong...");
    </script>
<?php
}
}

?>