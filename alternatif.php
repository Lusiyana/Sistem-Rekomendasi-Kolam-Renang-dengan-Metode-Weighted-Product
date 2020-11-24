<?php
// Create connection
$conn = mysqli_connect("localhost","root","","spk");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql    = "SELECT * FROM alternatif";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $rows = array();
    while ($row = mysqli_fetch_array($result)) {
        $rows[] = array(
		'id' => $row['id'],
		'tempat' => $row['tempat'],
		'jarak' => $row['jarak'],
		'harga' => $row['harga'],
		'rating' => $row['rating'],
		'fasilitas' => $row['fasilitas']
		);
    }
	header ('content-type:application/json');
	echo json_encode($rows);
}
mysqli_close($conn);
?>