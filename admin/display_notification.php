<script>
	function DeleteNotice(id)
	{
		if(confirm("You want to delete this record ?"))
		{
		window.location.href="delete_notice.php?id="+id;
		}
	}
</script>
<?php 
$q=mysqli_query($conn,"select * from notice ");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No any Notice found !!!</h2>";
}
else
{
?>
<h2 style="color:#00FFCC">All Notice</h2>

		<a href="index.php?page=add_notice">ADD NEW NOTICE</a>	<br>

		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<p>";
echo "<div class='container'>";
echo "<div class='jumbotron'>";
echo "<h1>".$i.".".$row['subject']."</h1>";
echo "<h3>".$row['Date']."</h3>";
echo "<h4>".$row['Description']."</h4>";

?>

<a onclick="DeleteNotice('<?php echo $row['notice_id']; ?>')" style='color:Red'>Delete</a>


<?php 
echo "</div>";
echo"</div>";
echo "</p>";
$i++;
}
		?>
		
</table>
<?php }?>