<?php

// This user-provided library should define get_user(), which returns the
// name of the user currently logged into this application.
//
#include 'auth.php';

// Tableau-provided functions for doing trusted authentication
include 'tableau_trusted.php';

?>

<!DOCTYPE html>
<html lang="en">
<body>


<iframe src="<?php echo get_trusted_url('admin','tableau.altimetrik.com','t/ive/views/CDashboard/MTD-D')?>"
        width="1325" height="900" frameborder="0">
</iframe>



</body>

</html>

