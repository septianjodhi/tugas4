<?php
// Check for the path elements
// Turn off error reporting
error_reporting(0);
// Report runtime errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);
// Report all errors
error_reporting(E_ALL);
// Same as error_reporting(E_ALL);
ini_set("error_reporting", E_ALL);
// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);
$path = $_SERVER[PATH_INFO];    
if ($path != null) {
$path_params = spliti ("/", $path);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//
	$con=mysqli_connect("localhost","id4103787_oktioryan0140","billabong45","id4103787_sertifikasi	");
// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
//
$input = file_get_contents("php://input");

$json = json_decode($input, true);
echo "json =".$json["nim"] ;
echo "Proses".$json->nim;
$nim=$json["nim"];
$nama=$json["nama"];
$prodi=$json["prodi"];
/*foreach ($json as $key => $value){
  echo  $key . ':' . $value;
}*/
		$querycek = "SELECT nim,nama,prodi FROM mahasiswa WHERE nim ='$nimmhsw'";
		echo "query select ".$querycek;
	//if ($result=mysqli_query($con,querycek))
	//{
		$result=mysqli_query($kon,querycek);
		echo "result =".$result;
		while ($row=mysqli_fetch_row($result))
		{
		printf ("%s (%s)\n",$row[0],$row[1]);
		}
		$rowcount=mysqli_num_rows($result);
		echo $rowcount . '<br />';
		
		if ( $rowcount == 0)
		{
		$query = "INSERT INTO mahasiswa (
		nim,
		nama,
		prodi)
		VALUES (				
		'$nim',
		'$nama',
		'$prodi')";
		echo "query ".$query;
		mysqli_query($con,$query);
		}
		else if ($rowcount > 0)
		{
		$query = "UPDATE mahasiswa SET
		nama = '$namamhsw',
		prodi = '$prodimhsw'
		WHERE nim ='$nimmhsw'";
		echo "query ".$query;
		mysqli_query($con,$query);
		}
	//}
mysqli_close($con);
}
?> 