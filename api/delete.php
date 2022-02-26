
<?php
function deleteImage($image) {
    include './src/config.php';
    // Connection string
    $conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);
    
    // Prevent SQL injection. **Jeg har ikke testet det Lasse**
    // Source - https://www.php.net/manual/en/mysqli.real-escape-string.php >> Example #1
    $query = sprintf("DELETE FROM data WHERE id = '%s'", mysqli_real_escape_string($conn, $image)); 
    $result = mysqli_query($conn,$query);
    
    if ($result) {
        return true;
    }else{
        return false;
    }
}
?>
