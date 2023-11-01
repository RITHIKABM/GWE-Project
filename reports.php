

<FORM method="POST" style="position: relative;left: 500px;">
Starts From 
<input type="date" name="start_time" required>
To
<input type="date" name="end_time" required>
<input type="submit" value="view report" name="generate">
</form>


<?php
error_reporting(0);
$conn = mysqli_connect("localhost","root","","online_food_ordering_system");

//$conn = mysqli_select_db($connection,"online_food_ordering_system");


 if(isset($_POST['generate']))
 {
$start=$_POST['start_time'];
$end=$_POST['end_time'];

$name="select * from orders  where order_date between '$start' and '$end'";
//echo($name);
$res=mysqli_query($conn,$name);

$count=mysqli_affected_rows($conn);

if($count==0)
{
    echo '<script>alert("NO VALUES PRESENT")</script>';
}
else{
echo "<br><br><table border ='0' cellspacing='0' cellpadding='10' style='width:100%;padding: 0.75rem;vertical-align: top;border-top: 1px solid #dee2e6;'>";
echo "<tr style='color:#f16821;background-color: rgba(0, 0, 0, 0.05);' ><th>Order ID</th><th>Total Price</th><th>Order Date</th><th>Delivery Address</th><th>User Name</th><th>R Id</th><th>Order Status</th></tr>";
while($row = mysqli_fetch_assoc($res)) {
  echo "<tr style='text-align: center;'><td>".$row['order_ID']."</td><td>".$row['total_price']."</td><td>".$row['order_date']."</td><td>".$row['delivery_address']."</td><td>".$row['username']."</td><td>".$row['R_ID']."</td><td>".$row['order_status']."</td></tr>";


}
}
 }