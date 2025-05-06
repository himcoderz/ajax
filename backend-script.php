<?php
	include("dbconnection.php");
	$db=$conn;
		function fetch_data(){
		global $db;
		$query="SELECT * from person";
		$exec=mysqli_query($db, $query);
		if(mysqli_num_rows($exec)>0){
			$row= mysqli_fetch_all($exec, MYSQLI_ASSOC);
			return $row;          
		}else {
			return $row=[];
		}
	}	
	$fetchData= fetch_data();
	show_data($fetchData);
	function show_data($fetchData){
		echo '
		<table align="center" cellspacing="0">
			<tr>
				<th>S.N</th>
				<th>Full Name</th>
				<th>Email Address</th>
				<th>City</th>
				<th>Country</th>
			</tr>';
		if(count($fetchData)>0){
			$sn=1;
			foreach($fetchData as $data){ 
				echo "
				<tr>
					<td>".$sn."</td>
					<td>".$data['fullname']."</td>
					<td>".$data['email']."</td>
					<td>".$data['city']."</td>
					<td>".$data['country']."</td>
				</tr>";
				$sn++; 
			}
		}else{ 
			echo "
			<tr>
				<td colspan='5'>No Data Found</td>
			</tr>"; 
		}
		echo "</table>";
	}
?>
<style>
	table {
        width: 100%;
        font-family: sans-serif;
        border: 1px solid goldenrod;
    }
    th {
        border: 1px solid goldenrod;
        background-color: crimson;
        padding: 10px 0px;
        color: white;
        font-weight: normal;
    }
    td {
        border: 1px solid goldenrod;
        padding: 6px 10px;
    }
</style>