<?php
// Downloads files
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];
   
    // fetch file to download from database
    $conn = mysqli_connect('localhost','password','password','photos');
    $sql = "SELECT * FROM images WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'images/' . $file['image'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('images/' . $file['image']));
        readfile('images/' . $file['image']);

        // Now update downloads count
        $newCount = $file['downloads'] + 1;
        $updateQuery = "UPDATE files SET downloads=$newCount WHERE id=$id";
        mysqli_query($conn, $updateQuery);
        exit;
    }

}
?>