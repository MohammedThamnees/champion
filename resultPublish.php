<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php include("admin_header.php")?>
<body>
<center>
  <form action="" method="post">
<table width="600" border="0" cellspacing="0" cellpadding="10">
  <tr>
    <th colspan="2" scope="row"><label for="select">Select Meet</label>
      <label for="select6"></label>
      <?php
      $buffer = "<select name='select6' id='select6'>
        <option>-select-</option>";
      
        include("connection.php");
        $rep="select * from meet_register";
      $r1=mysqli_query($con,$rep);
      if (mysqli_num_rows($r1)>0)
{
      while($row=mysqli_fetch_array($r1)){
      $buffer = $buffer."<option value='".$row[0]."'>".$row[1]."</option>";
    }
}
$buffer = $buffer."</select>";
echo $buffer;
     ?>
      </select>
    </th>
  </tr>
  <tr>
    <th colspan="2" scope="row"><label for="select">Select Gender</label>
      <label for="select5"></label>
      <select name="select5" id="select5" onchange="shows(this.value)">
      <option>-select-</option>
      <option>Male</option>
      <option>Female</option>
      </select></th>
    </tr>
  <tr>
    <th colspan="2" scope="row"><label for="select">Select Event</label>
      <label for="select"></label>
      <select name="select" id="select" onchange="show(this.value)">
      <option>-select-</option>
        
		
      </select></th>
  </tr>
  <tr>
    <th scope="row">1<sup>st</sup> Price</th>
    <td>
    
      <select name="select2" id="select2">
      
	  
      
      
      </select></td>
  </tr>
  <tr>
    <th scope="row">2<sup>nd</sup> Price</th>
    <td><label for="select3"></label>
      <select name="select3" id="select3">
      
      
      
      </select></td>
  </tr>
  <tr>
    <th scope="row">3<sup>rd</sup> Price</th>
    <td><label for="select4"></label>
      <select name="select4" id="select4">
      
      
      
      </select></td>
  </tr>
  <tr>
    <th colspan="2" scope="row">
      <input type="submit" name="button" id="button" value="Publish Result" />
    </th>
  </tr>
</table>

</form>
</center>
</body>
<?php
 include("admin_footer.php");
include("connection.php");
if(isset($_POST['button']))
{
  $meet=$_POST['select6'];
	$event=$_POST['select'];
	$first=$_POST['select2'];
	$second=$_POST['select3'];
	$third=$_POST['select4'];
	
	mysqli_query($con,"insert into result values(null,curdate(),'$first','$second','$third','$event','$meet')");

  ?>
  <script>
     alert("Result Published...");
   window.location="resultPublish.php";
    </script>

  <?php
	
}
	?>
</html>

<script language="javascript" type="text/javascript">
            var xmlHttp;
            function show(to){
				//alert(to)
				
                if (typeof XMLHttpRequest != "undefined"){
                xmlHttp= new XMLHttpRequest();
                }
                else if (window.ActiveXObject){
                    xmlHttp= new ActiveXObject("Microsoft.XMLHTTP");
                }
                if (xmlHttp==null){
                    alert("Browser does not support XMLHTTP Request")
                    return;
                }
                var url="shown.php";
                url +="?event= " +to
                xmlHttp.onreadystatechange = stateChange;
                xmlHttp.open("GET", url, true);
                xmlHttp.send(null);
            }
            
            
            function stateChange(){
                if(xmlHttp.readyState==4 || xmlHttp.readyState=="complete"){
					//alert(xmlHttp.responseText)
                    document.getElementById("select2").innerHTML=xmlHttp.responseText   
					 document.getElementById("select3").innerHTML=xmlHttp.responseText
					 document.getElementById("select4").innerHTML=xmlHttp.responseText 
					
 

                }
            }
</script>
<script language="javascript" type="text/javascript">
            var xmlHttp;
            function shows(to){
				//alert(to)
				
                if (typeof XMLHttpRequest != "undefined"){
                xmlHttp= new XMLHttpRequest();
                }
                else if (window.ActiveXObject){
                    xmlHttp= new ActiveXObject("Microsoft.XMLHTTP");
                }
                if (xmlHttp==null){
                    alert("Browser does not support XMLHTTP Request")
                    return;
                }
                var url="showevent.php";
                url +="?gender=" +to
                xmlHttp.onreadystatechange = stateChange1;
                xmlHttp.open("GET", url, true);
                xmlHttp.send(null);
            }
            
            
            function stateChange1(){
                if(xmlHttp.readyState==4 || xmlHttp.readyState=="complete"){
					//alert(xmlHttp.responseText)
                    document.getElementById("select").innerHTML=xmlHttp.responseText   
					
					
 

                }
            }
</script>
