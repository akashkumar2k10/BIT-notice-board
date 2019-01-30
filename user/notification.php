<?php 
$q=mysqli_query($conn,"select * from notice");
$rr=mysqli_num_rows($q);
if($rr==0)
{
echo "<h2 style='color:red'>No any notice for You !!!</h2>";
}
else
{
?>

<h2>All Notification</h2>

<!-- <table class="table table-bordered">
	<Tr class="success">
		<th>Sr.No</th>
		<th>Subject</th>
		<th>Details</th>
		<th>Date</th>
		</Tr>
 -->		
 <?php 

//<div class='container' style='background:red'>
$i=1; 
while($row=mysqli_fetch_assoc($q))
{
// echo "<Tr>";
// echo "<td>".$i."</td>";
// echo "<td>".$row['subject']."</td>";
// echo "<td>".$row['Description']."</td>";
// echo "<td>".$row['Date']."</td>";

// echo "</Tr>";
echo "<p>";
echo "<div class='container'>";
echo "<div class='jumbotron'>";
echo "<h1>".$i.".".$row['subject']."</h1>";
echo "<h3>".$row['Date']."</h3>";
echo "<h4>".$row['Description']."</h4>";
echo "</div>";
echo"</div>";
echo "</p>"; 
$i++;
}
		?>
		
</table>
<?php }?>