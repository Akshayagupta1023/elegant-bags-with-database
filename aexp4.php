<?php
    error_reporting(0);
    $n1=$_POST['name'];
    $n2=$_POST['phno'];
    $n3=$_POST['address'];
    $n4=$_POST['bagtype'];
    $n5=$_POST['bagmaterial'];
    $n6=$_POST['favcolor'];
    $n7=$_POST['bagsize'];
    $n8=$_POST['bagcostfrom'];
    $n9=$_POST['bagcostto'];
    $n10=$_POST['textprint'];
    $n11=$_POST['bagno'];
    $con=mysqli_connect('localhost','root','','aexp4');
    $sql="INSERT INTO checks(AA,BB,CC,DD,EE,FF,GG,HH,II,JJ,KK ) values('$n1','$n2','$n3','$n4','$n5','$n6','$n7','$n8','$n9','$n10','$n11')";
    $result=mysqli_query($con,$sql);
?>