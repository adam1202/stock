<?php
	

//variabel nim yang dikirimkan form.php
$order_no = $_GET['order_no']; 

//$order_no =  '1062120191001890';

//mengambil data
$con        = mysqli_connect("localhost","root","","stock");
$query  	= "select * from konsumen_aktif where order_no = '$order_no'" ;
$res   	 	= mysqli_query($con,$query);
$customer 	= mysqli_fetch_array($res);

$data = array(
            'nm_cus'      		=>  $customer[1],
            'item_short_desc'   =>  $customer[3],
            'item_year'      	=>  $customer[4],
            'day_overdue'      	=>  $customer[5],
            'od_status_kwts'   	=>  $customer[6],
            'present_value'   	=>  $customer[7],
            'namacabangs_kat'  	=>  $customer[2]
 	       );



//tampil data
echo json_encode($data);
?>