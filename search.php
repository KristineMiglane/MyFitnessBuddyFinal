<?php
$connection = mysqli_connect('localhost','root','','mysqli_login');
$output='';
if(isset($_POST['search'])){
    $searchkey= $_POST['search'];
    $searchkey=preg_replace("#[^0-9a-z]#i", "", $searchkey);

    $query = mysqli_query($connection,"SELECT * FROM tbl_users WHERE username LIKE '%$searchkey%'") or die("Could not search!");
    $count = mysqli_num_rows($query);

    if($count == 0){
        header("Location: history.php");
    }
    else{
        while($row=mysqli_fetch_array($query)){
            $username=$row['username'];
            
            header("Location: history2.php");
            $output .='<div>'.$username.' is your buddy!</div>';
            
            echo "$output";

        }
    }
}
?>