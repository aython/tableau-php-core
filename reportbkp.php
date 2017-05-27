<html>
<body style="
    overflow-x: hidden;
">
<?php
session_start();
include("tableau_trusted.php");
if (!(isset($_SESSION['SESS_TABIO_NAME']) != '')) {
header ("Location: adfs.php");
}else{

    if($_GET['link'] == 'Globalops' && $_SESSION["TABLEA_REPORT_NAME_2"] == 'Globalops'){
        $h = get_trusted_url('ticket','tableau.altimetrik.com','t/travel/views/Globalops/Globalops-Analysis');
        echo "<a href=home.php>Go Back</a>";
        echo '<iframe src="'.$h.'" onload="this.width=screen.width;this.height=screen.height;"  frameborder="0">
</iframe>';
        }elseif($_GET['link'] == 'Utilization' && $_SESSION["TABLEA_REPORT_NAME_3"] == 'Utilization'){
        $h = get_trusted_url('ticket','tableau.altimetrik.com','t/travel/views/AltimetrikUtilizationReport_0/AltimetrikUtilizationDashboardIncludingSupportFunctions');
        echo "<a href=home.php>Go Back</a>";
        echo '<iframe src="'.$h.'" onload="this.width=screen.width;this.height=screen.height;"  frameborder="0">
</iframe>';
        }elseif($_GET['link'] == 'Space Management' && $_SESSION["TABLEA_REPORT_NAME_4"] == 'Space Management'){
$h = get_trusted_url('ticket','tableau.altimetrik.com','t/travel/views/AltimetrikSpaceManagement/SpaceMgmt-Totaldetails');
        echo "<a href=home.php>Go Back</a>";
        echo '<iframe src="'.$h.'" onload="this.width=screen.width;this.height=screen.height;"  frameborder="0">
</iframe>';

}elseif($_GET['link'] == 'Workpulse' && $_SESSION["TABLEA_REPORT_NAME_5"] == 'Workpulse'){
$h = get_trusted_url('ticket','tableau.altimetrik.com','t/travel/views/WorkPulse_0/WorkPulse-Dashboard');
        echo "<a href=home.php>Go Back</a>";
        echo '<iframe src="'.$h.'" onload="this.width=screen.width;this.height=screen.height;"  frameborder="0">
</iframe>';

}elseif($_GET['link'] == 'Mentor Mentee' && $_SESSION["TABLEA_REPORT_NAME_6"] == 'Mentor Mentee'){
$h = get_trusted_url('ticket','tableau.altimetrik.com','t/travel/views/TechnologyIncubator/TechnologyIncubator');
        echo "<a href=home.php>Go Back</a>";
        echo '<iframe src="'.$h.'" onload="this.width=screen.width;this.height=screen.height;" frameborder="0">
</iframe>';

}else{
        echo "Access Denied or report doesn't exist";
        }
}
?>
</body>
</html>
