<?php include 'connect1.php';

$sql = "Select * from `Post` where id=$id";
$result = mysqli_query( $conn, $sql );
$row = mysqli_fetch_assoc( $result );
$id = $row[ 'id' ];
$postTitle = $row[ 'postTitle' ];
$post_desription = $row[ 'post_description' ];

// $id = $_GET[ 'updateid' ];
if ( isset( $_POST[ 'update' ] ) ) {
    $id = $_GET[ 'updateid' ];

    $PostTitle = $_POST[ 'PostTitle' ];
    $PostDescription = $_POST[ 'PostDescription' ];

    echo "<script>alert('$id')</script>";

    $sql = "UPDATE Post SET post_title = '$PostTitle', post_description = '$PostDescription' WHERE id = $id" or die( 'this die!!!' );

    $result = mysqli_query( $conn, $sql );

    if ( $result ) {
        // $row = mysqli_fetch_array( $result );
        // echo 'updated successfully';
        header( 'location:show.php' );
    } else {
        die( mysqli_error( $conn ) );
    }
}
?>
<!doctype html>
<html lang = 'en'>

<head>

<meta charset = 'utf-8'>
<meta name = 'viewport' content = 'width=device-width, initial-scale=1, shrink-to-fit=no'>

<link rel = 'stylesheet' href = 'https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css'
integrity = 'sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin = 'anonymous'>

<title>Document</title>
<link rel="stylesheet" href="update.css">

</head>

<body>

<div class = 'container'>

<center><h2>Update Data</h2></center>

<form method = 'POST' action = ''>
<div class = 'form-group'>

<label for = 'PostTitle'>Post Title</label>
<input type = 'text' class = 'form-control' id = 'Ptitle' name = 'PostTitle' placeholder = 'Enter Post Title' required> <br>

<label for = 'PostDescription'>Post Description</label>
<input type = 'text' class = 'form-control' id = 'Pdescription' name = 'PostDescription'
placeholder = 'Enter Post Description' required>

</div>
<button type = 'submit' class = 'login-button' name = 'update' id = 'update'>Update</button>

</form>

</div>

</body>

</html>
