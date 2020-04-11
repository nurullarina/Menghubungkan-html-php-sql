<?php
//Tipe data dan operator: semua variabel di php diawal dengan $
//Global variable
//$_REQUEST = POST/GET
echo $action = $_REQUEST["action"];

//DATA YANG DIKIRIM ASYNC => $_REQUEST= {dataku : "firstname=ali&lastname=bos&paymentMethod=creditcard"}
/* ASYNC */
parse_str($_REQUEST['formulir'], $hasil); 

//ini yang saya tambahkan, yg sql saya komentar dulu
/*
echo "First Name: ".$hasil['First']."<br/>";
echo "Last Name: ".$hasil['Last']."<br/>";
echo "Email: ".$hasil['email']."<br/>";
echo "Alamat: ".$hasil['address']."<br/>";
echo "Tanggal lahir: ".$hasil['birthday']."<br/>";
echo "Pendidikan Terakhir: ".$hasil['Pendidikan']."<br/>";
echo "Institusi: ".$hasil['institusi']."<br/>";
echo "Jenis Kelamin: ".$hasil['paymentMethod']."<br/>";
echo "Motto Hidup: ".$hasil['Motto']."<br/>";
echo "Hobby: ".$hasil['Hobby']."<br/>";



//ASYNC, data yang diterima format array of record memerlukan looping untuk parsing data - tidak digunakan di sini
//$arrrecordhasil = $_REQUEST['dataku'];

//DATA YANG DIKIRIM SYNC => $_REQUEST = ["firstname" => "ali", "lastname" => "bos"]
/* SYNC */
//$hasil = $_REQUEST;

/* SQL: select, update, delete */

if($action == 'create')
	$sql = "insert into formulir_user values ('$hasil[First]','$hasil[Last]', '$hasil[email]', '$hasil[address]', '$hasil[birthday]', '$hasil[Pendidikan]', '$hasil[institusi]', '$hasil[paymentMethod]', '$hasil[Motto]', '$hasil[Hobby]') ";
elseif($action == 'update')
	$sql = "update formulir_user set First_Name = '$hasil[First]', Last_Name = '$hasil[Last]', Email = '$hasil[email]', Alamat_Lengkap = '$hasil[address]', Tanggal_Lahir = '$hasil[birthday]', Pendidikan_Terakhir = '$hasil[Pendidikan]', Nama_Institusi = '$hasil[institusi]', Jenis_Kelamin = '$hasil[paymentMethod]', Motto_Hidup = '$hasil[Motto]', Hobby = '$hasil[Hobby]' where First_Name = '$hasil[First]'";
elseif($action == 'delete')
	$sql = "delete from formulir_user where First_Name = '$hasil[First]' ";
elseif($action == 'read')
	$sql = "select * from formulir_user";
	
//eksekusi syntaxsql 
$conn = new mysqli("localhost","root","","form"); //dbhost, dbuser, dbpass, dbname
if ($conn->connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}else{
  echo "Database connected. ";
}
//create, update, delete query($syntaxsql) -> true false
if ($conn->query($sql) === TRUE) {
	echo "Query $action with syntax $sql suceeded !";
}
elseif ($conn->query($sql) === FALSE){
	echo "Error: $sql" .$conn->error;
}
//khusus read query($syntaxsql) -> semua associated array
else{
	$result = $conn->query($sql); //bukan true false tapi data array asossiasi
	if($result->num_rows > 0){
		echo "<table id='tresult' class='table table-striped table-bordered'>";
		echo 
		"<thead><th>First Name</th>
				<th>Last Name</th>
				<th>Email</th>
				<th>Alamat Lengkap</th>
				<th>Tanggal Lahir</th>
				<th>Pendidikan Terakhir</th>
				<th>Nama Institusi</th>
				<th>Jenis Kelamin</th>
				<th>Motto</th>
				<th>Hobby</th>
		</thead>";
		echo "<tbody>";
		while($row = $result->fetch_assoc()) {
			echo 
			"<tr>
				<td>".$row['First_Name']."</td>
				<td>". $row['Last_Name']."</td>
				<td>". $row['Email']."</td>
				<td>". $row['Alamat_lengkap']."</td>
				<td>". $row['Tanggal_Lahir']."</td>
				<td>". $row['Pendidikan_Terakhir']."</td>
				<td>". $row['Nama_Institusi']."</td>
				<td>". $row['Jenis_Kelamin']."</td>
				<td>". $row['Motto_Hidup']."</td>
				<td>". $row['Hobby']."</td>
			</tr>";
		}
		echo "</tbody>";
		echo "</table>";
	}
}
$conn->close();

//Global variable advanced
//$_SESSION //$_COOKIE
//$_SERVER
//$_FILES

//Struktur kendali:
//Percabangan:
//Pengulangan:
//Struktur data
//array: array - $hasil = ["ali","bos","creditcard"];
//record: associated array - $hasil = [firstname => ali, lastname => bos, paymentMethod => creditcard]
//Fungsi
/**/
?>