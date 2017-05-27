<!DOCTYPE html>
<body style="
    overflow-x: hidden;
    overflow-y: hidden;
">
<?php
session_start();
include("tableau_trusted.php");
if (!(isset($_SESSION['SESS_TABIO_NAME']) != '')) {
header ("Location: adfs.php");
}else{

    if(($_GET['link'] == 'Globalops Overview' && $_SESSION["TABLEA_REPORT_NAME_2"] == 'Globalops Overview') || ($_GET['link'] == 'Globalops Overview' && $_SESSION["TABLEA_REPORT_NAME_3"] == 'Globalops Overview') || ($_GET['link'] == 'Globalops Overview' && $_SESSION["TABLEA_REPORT_NAME_4"] == 'Globalops Overview') || ($_GET['link'] == 'Globalops Overview' && $_SESSION["TABLEA_REPORT_NAME_5"] == 'Globalops Overview') || ($_GET['link'] == 'Globalops Overview' && $_SESSION["TABLEA_REPORT_NAME_6"] == 'Globalops Overview') || ($_GET['link'] == 'Globalops Overview' && $_SESSION["TABLEA_REPORT_NAME_7"] == 'Globalops Overview') || ($_GET['link'] == 'Globalops Overview' && $_SESSION["TABLEA_REPORT_NAME_8"] == 'Globalops Overview') || ($_GET['link'] == 'Globalops Overview' && $_SESSION["TABLEA_REPORT_NAME_9"] == 'Globalops Overview') || ($_GET['link'] == 'Globalops Overview' && $_SESSION["TABLEA_REPORT_NAME_10"] == 'Globalops Overview')){
        $h = get_trusted_url('user','ereports.altimetrik.com','t/insights/views/GlobalopsMain/Globalops-Analysis');
        echo "<a href=home.php>Go Back</a>";
        echo '<iframe src="'.$h.'" onload="this.width=screen.width;this.height=600;"  frameborder="0">
</iframe>';
        }elseif(($_GET['link'] == 'Globalops Sourcing' && $_SESSION["TABLEA_REPORT_NAME_2"] == 'Globalops Sourcing') || ($_GET['link'] == 'Globalops Sourcing' && $_SESSION["TABLEA_REPORT_NAME_3"] == 'Globalops Sourcing') || ($_GET['link'] == 'Globalops Sourcing' && $_SESSION["TABLEA_REPORT_NAME_4"] == 'Globalops Sourcing') || ($_GET['link'] == 'Globalops Sourcing' && $_SESSION["TABLEA_REPORT_NAME_5"] == 'Globalops Sourcing') || ($_GET['link'] == 'Globalops Sourcing' && $_SESSION["TABLEA_REPORT_NAME_6"] == 'Globalops Sourcing') || ($_GET['link'] == 'Globalops Sourcing' && $_SESSION["TABLEA_REPORT_NAME_7"] == 'Globalops Sourcing') || ($_GET['link'] == 'Globalops Sourcing' && $_SESSION["TABLEA_REPORT_NAME_8"] == 'Globalops Sourcing') || ($_GET['link'] == 'Globalops Sourcing' && $_SESSION["TABLEA_REPORT_NAME_9"] == 'Globalops Sourcing') || ($_GET['link'] == 'Globalops Sourcing' && $_SESSION["TABLEA_REPORT_NAME_10"] == 'Globalops Sourcing')){
        $h = get_trusted_url('user','ereports.altimetrik.com','t/insights/views/GlobalopsSourcing/ResourceHuntingChannel');
        echo "<a href=home.php>Go Back</a>";
        echo '<iframe src="'.$h.'" onload="this.width=screen.width;this.height=600;"  frameborder="0">
</iframe>';
        }elseif(($_GET['link'] == 'Globalops IPR' && $_SESSION["TABLEA_REPORT_NAME_2"] == 'Globalops IPR') || ($_GET['link'] == 'Globalops IPR' && $_SESSION["TABLEA_REPORT_NAME_3"] == 'Globalops IPR') || ($_GET['link'] == 'Globalops IPR' && $_SESSION["TABLEA_REPORT_NAME_4"] == 'Globalops IPR') || ($_GET['link'] == 'Globalops IPR' && $_SESSION["TABLEA_REPORT_NAME_5"] == 'Globalops IPR') || ($_GET['link'] == 'Globalops IPR' && $_SESSION["TABLEA_REPORT_NAME_6"] == 'Globalops IPR') || ($_GET['link'] == 'Globalops IPR' && $_SESSION["TABLEA_REPORT_NAME_7"] == 'Globalops IPR') || ($_GET['link'] == 'Globalops IPR' && $_SESSION["TABLEA_REPORT_NAME_8"] == 'Globalops IPR') || ($_GET['link'] == 'Globalops IPR' && $_SESSION["TABLEA_REPORT_NAME_9"] == 'Globalops IPR') || ($_GET['link'] == 'Globalops IPR' && $_SESSION["TABLEA_REPORT_NAME_10"] == 'Globalops IPR')){
        $h = get_trusted_url('user','ereports.altimetrik.com','t/insights/views/GlobalopsIPR/InternalProposalDashboard');
        echo "<a href=home.php>Go Back</a>";
        echo '<iframe src="'.$h.'" onload="this.width=screen.width;this.height=600;" frameborder="0">
</iframe>';
        }elseif(($_GET['link'] == 'Globalops Productivity' && $_SESSION["TABLEA_REPORT_NAME_2"] == 'Globalops Productivity') || ($_GET['link'] == 'Globalops Productivity' && $_SESSION["TABLEA_REPORT_NAME_3"] == 'Globalops Productivity') || ($_GET['link'] == 'Globalops Productivity' && $_SESSION["TABLEA_REPORT_NAME_4"] == 'Globalops Productivity') || ($_GET['link'] == 'Globalops Productivity' && $_SESSION["TABLEA_REPORT_NAME_5"] == 'Globalops Productivity') || ($_GET['link'] == 'Globalops Productivity' && $_SESSION["TABLEA_REPORT_NAME_6"] == 'Globalops Productivity') || ($_GET['link'] == 'Globalops Productivity' && $_SESSION["TABLEA_REPORT_NAME_7"] == 'Globalops Productivity') || ($_GET['link'] == 'Globalops Productivity' && $_SESSION["TABLEA_REPORT_NAME_8"] == 'Globalops Productivity') || ($_GET['link'] == 'Globalops Productivity' && $_SESSION["TABLEA_REPORT_NAME_9"] == 'Globalops Productivity') || ($_GET['link'] == 'Globalops Productivity' && $_SESSION["TABLEA_REPORT_NAME_10"] == 'Globalops Productivity')){
        $h = get_trusted_url('user','ereports.altimetrik.com','t/insights/views/GlobalopsProductivity/ProductivityReport');
        echo "<a href=home.php>Go Back</a>";
        echo '<iframe src="'.$h.'" onload="this.width=screen.width;this.height=600;"  frameborder="0">
</iframe>';
        }elseif(($_GET['link'] == 'Utilization' && $_SESSION["TABLEA_REPORT_NAME_2"] == 'Utilization') || ($_GET['link'] == 'Utilization' && $_SESSION["TABLEA_REPORT_NAME_3"] == 'Utilization') || ($_GET['link'] == 'Utilization' && $_SESSION["TABLEA_REPORT_NAME_4"] == 'Utilization') || ($_GET['link'] == 'Utilization' && $_SESSION["TABLEA_REPORT_NAME_5"] == 'Utilization') || ($_GET['link'] == 'Utilization' && $_SESSION["TABLEA_REPORT_NAME_6"] == 'Utilization') || ($_GET['link'] == 'Utilization' && $_SESSION["TABLEA_REPORT_NAME_7"] == 'Utilization') || ($_GET['link'] == 'Utilization' && $_SESSION["TABLEA_REPORT_NAME_8"] == 'Utilization') || ($_GET['link'] == 'Utilization' && $_SESSION["TABLEA_REPORT_NAME_9"] == 'Utilization') || ($_GET['link'] == 'Utilization' && $_SESSION["TABLEA_REPORT_NAME_10"] == 'Utilization')){
        $h = get_trusted_url('user','ereports.altimetrik.com','t/insights/views/AltimetrikUtilizationReport_0/GeoSummary');
        echo "<a href=home.php>Go Back</a>";
        echo '<iframe src="'.$h.'" onload="this.width=screen.width;this.height=600;"  frameborder="0">
</iframe>';
        }elseif(($_GET['link'] == 'Space Management' && $_SESSION["TABLEA_REPORT_NAME_2"] == 'Space Management') || ($_GET['link'] == 'Space Management' && $_SESSION["TABLEA_REPORT_NAME_3"] == 'Space Management') || ($_GET['link'] == 'Space Management' && $_SESSION["TABLEA_REPORT_NAME_4"] == 'Space Management') || ($_GET['link'] == 'Space Management' && $_SESSION["TABLEA_REPORT_NAME_5"] == 'Space Management') || ($_GET['link'] == 'Space Management' && $_SESSION["TABLEA_REPORT_NAME_6"] == 'Space Management') || ($_GET['link'] == 'Space Management' && $_SESSION["TABLEA_REPORT_NAME_7"] == 'Space Management') || ($_GET['link'] == 'Space Management' && $_SESSION["TABLEA_REPORT_NAME_8"] == 'Space Management') || ($_GET['link'] == 'Space Management' && $_SESSION["TABLEA_REPORT_NAME_9"] == 'Space Management') || ($_GET['link'] == 'Space Management' && $_SESSION["TABLEA_REPORT_NAME_10"] == 'Space Management')){
$h = get_trusted_url('user','ereports.altimetrik.com','t/insights/views/AltimetrikSpaceManagement/SpaceMgmt-floor');
        echo "<a href=home.php>Go Back</a>";
        echo '<iframe src="'.$h.'" onload="this.width=screen.width;this.height=600;"  frameborder="0">
</iframe>';

}elseif(($_GET['link'] == 'Workpulse' && $_SESSION["TABLEA_REPORT_NAME_2"] == 'Workpulse') || ($_GET['link'] == 'Workpulse' && $_SESSION["TABLEA_REPORT_NAME_3"] == 'Workpulse') || ($_GET['link'] == 'Workpulse' && $_SESSION["TABLEA_REPORT_NAME_4"] == 'Workpulse') || ($_GET['link'] == 'Workpulse' && $_SESSION["TABLEA_REPORT_NAME_5"] == 'Workpulse') || ($_GET['link'] == 'Workpulse' && $_SESSION["TABLEA_REPORT_NAME_6"] == 'Workpulse') || ($_GET['link'] == 'Workpulse' && $_SESSION["TABLEA_REPORT_NAME_7"] == 'Workpulse') || ($_GET['link'] == 'Workpulse' && $_SESSION["TABLEA_REPORT_NAME_8"] == 'Workpulse') || ($_GET['link'] == 'Workpulse' && $_SESSION["TABLEA_REPORT_NAME_9"] == 'Workpulse') || ($_GET['link'] == 'Workpulse' && $_SESSION["TABLEA_REPORT_NAME_10"] == 'Workpulse')){
$h = get_trusted_url('user','ereports.altimetrik.com','t/insights/views/WorkPulse/WorkpulseDashboard');
        echo "<a href=home.php>Go Back</a>";
        echo '<iframe src="'.$h.'" onload="this.width=screen.width;this.height=600;"  frameborder="0">
</iframe>';

}elseif(($_GET['link'] == 'Timesheet Tracker' && $_SESSION["TABLEA_REPORT_NAME_2"] == 'Timesheet Tracker') || ($_GET['link'] == 'Timesheet Tracker' && $_SESSION["TABLEA_REPORT_NAME_3"] == 'Timesheet Tracker') || ($_GET['link'] == 'Timesheet Tracker' && $_SESSION["TABLEA_REPORT_NAME_4"] == 'Timesheet Tracker') || ($_GET['link'] == 'Timesheet Tracker' && $_SESSION["TABLEA_REPORT_NAME_5"] == 'Timesheet Tracker') || ($_GET['link'] == 'Timesheet Tracker' && $_SESSION["TABLEA_REPORT_NAME_6"] == 'Timesheet Tracker') || ($_GET['link'] == 'Timesheet Tracker' && $_SESSION["TABLEA_REPORT_NAME_7"] == 'Timesheet Tracker') || ($_GET['link'] == 'Timesheet Tracker' && $_SESSION["TABLEA_REPORT_NAME_8"] == 'Timesheet Tracker') || ($_GET['link'] == 'Timesheet Tracker' && $_SESSION["TABLEA_REPORT_NAME_9"] == 'Timesheet Tracker') || ($_GET['link'] == 'Timesheet Tracker' && $_SESSION["TABLEA_REPORT_NAME_10"] == 'Timesheet Tracker')){
$h = get_trusted_url('user','ereports.altimetrik.com','t/insights/views/TimesheetTrackerLatest/TimeSheetAnalysis');
        echo "<a href=home.php>Go Back</a>";
        echo '<iframe src="'.$h.'" onload="this.width=screen.width;this.height=600;" frameborder="0">
</iframe>';

}elseif(($_GET['link'] == 'Ford Timesheet' && $_SESSION["TABLEA_REPORT_NAME_2"] == 'Ford Timesheet') || ($_GET['link'] == 'Ford Timesheet' && $_SESSION["TABLEA_REPORT_NAME_3"] == 'Ford Timesheet') || ($_GET['link'] == 'Ford Timesheet' && $_SESSION["TABLEA_REPORT_NAME_4"] == 'Ford Timesheet') || ($_GET['link'] == 'Ford Timesheet' && $_SESSION["TABLEA_REPORT_NAME_5"] == 'Ford Timesheet') || ($_GET['link'] == 'Ford Timesheet' && $_SESSION["TABLEA_REPORT_NAME_6"] == 'Ford Timesheet') || ($_GET['link'] == 'Ford Timesheet' && $_SESSION["TABLEA_REPORT_NAME_7"] == 'Ford Timesheet') || ($_GET['link'] == 'Ford Timesheet' && $_SESSION["TABLEA_REPORT_NAME_8"] == 'Ford Timesheet') || ($_GET['link'] == 'Ford Timesheet' && $_SESSION["TABLEA_REPORT_NAME_9"] == 'Ford Timesheet') || ($_GET['link'] == 'Ford Timesheet' && $_SESSION["TABLEA_REPORT_NAME_10"] == 'Ford Timesheet')){
$h = get_trusted_url('user','ereports.altimetrik.com','t/insights/views/FordTimesheets/TimesheetConsolidated');
        echo "<a href=home.php>Go Back</a>";
        echo '<iframe src="'.$h.'" onload="this.width=screen.width;this.height=600;" frameborder="0">
</iframe>';

}else{
        echo "Access Denied or report doesn't exist";
        }
}
?>
</body>
</html>


