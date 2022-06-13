<?php
$conn=mysqli_connect("localhost","root","","studentdb");
if($conn==false){
die("ERROR:Could not connect.".mysqli_connect_error());
}
$name=$_REQUEST['name'];
$roll=$_REQUEST['roll'];
$ssmark=$_REQUEST['ssmark'];
$psamark=$_REQUEST['psamark'];
$edcmark=$_REQUEST['edcmark'];
$pspsmark=$_REQUEST['pspsmark'];
$webmark=$_REQUEST['webmark'];
$sql = "INSERT INTO marks VALUES('$name','$roll','$ssmark','$psamark','$edcmark','$pspsmark','$webmark')";
//$sql="INSERT INTO marks VALUES('$name','$roll','$ssmark','$psamark','$edcmark','$pspsmark','$webmark')";

if(mysqli_query($conn,$sql)){
echo"Data Stored in a database successfully.Please Browse your location php
my admin.To view the updated data";
echo nl2br("\n$name\n $roll\n $ssmark\n $psamark\n $edcmark\n $pspsmark\n $webmark");
}
else{
echo "ERROR:Hush!Sorry $sql.".mysqli_error($conn);
}
mysqli_close($conn);
$sql = "SELECT * FROM marks";
echo $sql;
?>
