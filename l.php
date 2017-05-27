<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=11" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Altimetrik Reports</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <!-- Fonts -->
        <link href="font.css" rel="stylesheet" type="text/css">
    </head>
    <body>
<header>	
        <div class="flex-center position-ref full-height">
            
            <div class="content">
<div style="margin-top: -140px;margin-bottom: 10px;"><img src="css/img/logo.png" align="middle" height=150></img></div>
<div class="title m-b-md">
                   <font color="#e67e22">Welcome</font> <font color="White">to Enterprise  Reports</font> 
					
                </div>

                <div class="links"> 
                    <?php
//include("tableau_trusted.php");
// Try and connect to the database
error_reporting(0);
if(!($_POST['example'])){
header ("Location: adfs.php");
}
function db_chkio_pol($query) {
$username = 'xyz';
$password = 'xyz';
$dbname = 'xyz';
$connection = mysqli_connect('localhost',$username,$password,$dbname);
$result = mysqli_query($connection,$query);
return $result;
}
// If connection was not successful, handle the error
//"SELECT * FROM `access` WHERE `emailid` = '" . mysql_escape_string($_POST['example']) . "';"
$username2 = 'xyz';
$password2 = 'xyz';
$dbname2 = 'xyz';
$connection2 = mysqli_connect('localhost',$username2,$password2,$dbname2);
$result2 = db_chkio_pol("SELECT * FROM `access` WHERE `emailid` = '" . mysqli_real_escape_string($connection2,$_POST['example']) . "' ORDER BY id ASC;");

if($result2 === false) {
echo "result failed";
} else {
$rows = array();
while ($row = mysqli_fetch_assoc($result2)) {
$rows[] = $row;
}
$count= mysqli_num_rows($result2);
if ($count >= 1){
//echo json_encode($rows);
session_start();
$_SESSION['SESS_TABIO_NAME'] = $_POST['example'];
//echo get_trusted_url('admin','tableau.altimetrik.com','t/ive/views/CDashboard/MTD-D');
$jkop= 1;
foreach($rows as $c){
$jkop++;
$_SESSION["TABLEA_REPORT_NAME_$jkop"] = $c['report'];
echo '<a style="margin: 6px;" class="btn btn-full" href="report.php?link='.$c['report'].'">'.$c['report'].'</a>';
}
session_write_close();
}else{
echo "No records found";
}
}

                    ?>
                </div>
<br><br><a style="color:white;font-size:12px;font-weight: 600;text-decoration: none;">For any queries please send an email to <a style="color:orange;font-size:12px;font-weight: 600;text-decoration: none;" href="mailto:someone@example.com?Subject=Submit%20Query" target="_top">ereports@altimetrik.com</a> </a>
</div>
        </div>
</header>
    </body>
</html>
