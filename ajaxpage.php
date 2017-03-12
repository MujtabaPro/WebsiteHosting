<?php
session_start();
include('connect.php');
if(isset($_GET['catId']))
{
	$id= $_GET['catId'];
	$q='select * from products where c_id='.$id;
	 $query2=mysqli_query($con,$q);
					while($row=mysqli_fetch_assoc($query2))
					{
						echo '<div style="float:left; border:solid 5px black; margin:10px;">';
						echo '<h5>'.$row['p_name'].'</h5>';
						echo  '<img src="images/'.$row['p_pic'].'"  style="width:100px; height:150px;" />';
						
						echo '<p>'.$row['p_price'].'/=</p>';
						echo '</div>';
						
						
					}
					
	
	
}
else
{
	$q='select * from products where';
	
	
}


?>