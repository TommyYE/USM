<?php 
$arr=$_POST[ 'client_info']; 
$t1 = $t2 = $t3 = $t4 = $t5 = $l1 = $l2 = $l3 = $l4 = $l5 = $l6 = $n1 = $n2 = $n3 = 0;

if(sizeof($arr) < 31) {
    print_r( "Error1!\n" );
} elseif($arr[0] == "0" && $arr[1] == "0" && $arr[2] == "0") {
    print_r( "Error2!\n" );
} elseif($arr[11] == "0" && $arr[12] == "0" && $arr[13] == "0") {
    print_r( "Error3!\n" );
} elseif($arr[24] == "0" && $arr[25] == "0") {
    print_r( "Error4!\n" );
} else {
    if($arr[1] == "1") {
        $t1 = 1;
    }
    if($arr[3] == "1") {
        $t2 = 1;
    }
    if($arr[5] == "1") {
        $t3 = 1;
    }
    if($arr[7] == "1") {
        $t4 = 1;
    }
    if($arr[9] == "1") {
        $t5 = 1;
    }
    
    
    if($arr[12] == "1") {
        $l1 = 1;
    }
    if($arr[14] == "1") {
        $l2 = 1;
    }
    if($arr[16] == "1") {
        $l3 = 1;
    }
    if($arr[18] == "1") {
        $l4 = 1;
    }
    if($arr[20] == "1") {
        $l5 = 1;
    }
    if($arr[22] == "1") {
        $l6 = 1;
    }
    if($arr[25] == "1") {
        $n1 = 1;
    }
    if($arr[26] == "1") {
        $n2 = 1;
    }
    if($arr[28] == "1") {
        $n3 = 1;
    }
    $comment = $arr[30];
    $con=mysqli_connect("localhost","root","","usm");
    
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
    $sql="INSERT INTO Reviews (ReviewID, RoomNumber, Date, Time, T1, T2, T3, T4, T5, L1, L2, L3, L4, L5, L6, N1, N2, N3, Comment) Values (null, '200', '2014-06-05', '12:50', '$t1', '$t2', '$t3', '$t4', '$t5', '$l1', '$l2', '$l3', '$l4', '$l5', '$l6', '$n1', '$n2', '$n3', '$comment')";
    
    if (!mysqli_query($con,$sql))
    {
        die('Error: ' . mysqli_error($con));
    }

    mysqli_close($con);
    print_r( "Review Submitted!\n");
}
?>