<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php include("admin_header.php")?>
<body><form action="" method="post">
  <center>
  <h1>Boys Events</h1>
  <br><br>
<table width="200" border="1" cellspacing="0" cellpadding="10">
  <tr>
    <th scope="col">SI</th>
    <th scope="col">College</th>
    <th scope="col">100M Running Boys</th>
    <th scope="col">200M Running Boys</th>
    <th scope="col">400M Running Boys</th>
    <th scope="col">800M Running Boys</th>
    <th scope="col">1500M Running Boys</th>
    <th scope="col">5000M Running Boys</th>
    <th scope="col">10000M Running Boys</th>
    <th scope="col">110M Hurdles Boys</th>
    <th scope="col">400M Hurdles Boys</th>
    <th scope="col">Shortput Boys</th>
    <th scope="col">Disc Throw Boys</th>
    <th scope="col">Javelin Boys</th>
    <th scope="col">Hammer Throw Boys</th>
    <th scope="col">Long jump Boys</th>
    <th scope="col">Triple Jump Boys</th>
    <th scope="col">High Jump Boys</th>
    <th scope="col">Pole walt Boys</th>
    <th scope="col">4*100M Relay Boys</th>
    <th scope="col">4*400M Relay Boys</th>
  </tr>
</table>
<br><br>

<h1>Girls Events</h1>
<br><br>
<table width="200" border="1" cellspacing="0" cellpadding="10">
  <tr>
    <th scope="col">SI</th>
    <th scope="col">College</th>
    <th scope="col">100M Running Girls</th>
    <th scope="col">200M Running Girls</th>
    <th scope="col">400M Running Girls</th>
    <th scope="col">800M Running Girls</th>
    <th scope="col">1500M Running Girls</th>
    <th scope="col">5000M Running Girls</th>
    <th scope="col">10000M Running Girls</th>
    <th scope="col">110M Hurdles Girls</th>
    <th scope="col">400M Hurdles Girls</th>
    <th scope="col">Shortput Girls</th>
    <th scope="col">Disc Throw Girls</th>
    <th scope="col">Javelin Girls</th>
    <th scope="col">Hammer Throw Girls</th>
    <th scope="col">Long jump Girls</th>
    <th scope="col">Triple Jump Girls</th>
    <th scope="col">High Jump Girls</th>
    <th scope="col">Pole walt Girls</th>
    <th scope="col">4*100M Relay Girls</th>
    <th scope="col">4*400M Relay Girls</th>
  </tr>
  </table>
  <br><br>

  <h1>Final Result</h1>
<br><br>
<table width="200" border="1" cellspacing="0" cellpadding="10">
  <tr>
    <th scope="col">SI</th>
    <th scope="col">College</th>
    <th scope="col">Total Point</th>
    <th scope="col">Position</th>
  </tr>


  <?php
include("connection.php");
$rs=mysqli_query($con,"");
  $i=1;
  if(mysqli_num_rows($rs)>0)
    {
      while($row=mysqli_fetch_array($rs))
      {
  
  ?>
	<tr>
    	<td><?php echo $i?></td>
    	<td><?php echo $row['']?></td>
    	<td><?php echo $row['']?></td>
    	<td><?php echo $row['']?></td>
    	<td><?php echo $row['']?></td>
   		<td><?php echo $row['']?></td>
    </tr>
   <?php
		 $i++; 
		 }
		}
   ?> 
</table>

</form>
</center>
</body>
<?php include("admin_footer.php")?>
</html>