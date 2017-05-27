<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
</head>

<form id="myform" action="l.php" method="post">
    <input type="text" id="example" hidden name="example">
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://secure.aadcdn.microsoftonline-p.com/lib/1.0.0/js/adal.min.js"></script>
<script type="text/javascript">
(function () {
	"use strict";
  // Some samples will use the tenant name here like "tenant.onmicrosoft.com"
  // I prefer to user the subscription Id
  var subscriptionId = "e9cb3c80-4156-4c39-a7fe-68fe427a3d46";
  // Copy the client ID of your AAD app here once you have registered one, configured the required permissions, and
  // allowed implicit flow https://msdn.microsoft.com/en-us/office/office365/howto/get-started-with-office-365-unified-api
  var clientId = "232d5c5b-ec1f-4765-bd3f-55aa530d0e1e";

  window.config = {
    subscriptionId: subscriptionId,
    clientId: clientId,
    postLogoutRedirectUri: window.location.origin,
    endpoints: {
      graphApiUri: 'https://graph.microsoft.com'
    },
    //cacheLocation: 'localStorage' // enable this for IE, as sessionStorage does not work for localhost.
  };
  var authContext = new AuthenticationContext(config);
  // Check For & Handle Redirect From AAD After Login
  var isCallback = authContext.isCallback(window.location.hash);
  authContext.handleWindowCallback();
  if (isCallback && !authContext.getLoginError()) {
    window.location = authContext._getItem(authContext.CONSTANTS.STORAGE.LOGIN_REQUEST);
  }
  // If not logged in force login
  var user = authContext.getCachedUser();
  if (user) {
    // Logged in already
   // window.location.href = "l.php?username="+user.userName;
	  document.getElementById("example").value = user.userName; 
	  //document.getElementById("example").setAttribute('value',user.userName);
	  }
  else {
    // NOTE: you may want to render the page for anonymous users and render
    // a login button which runs the login function upon click.
    authContext.login();

  }
  // Acquire token for Files resource.
  authContext.acquireToken(config.endpoints.graphApiUri, function (error, token) {
    // Handle ADAL Errors.
    if (error || !token) {
console.log('ADAL error occurred: ' + error);
      return;
    }
	console.log(user.userName);
        document.getElementById("example").value = user.userName;	
//document.getElementById("example").setAttribute('value',user.userName);
	//window.location.href = "YOUR REDIRECT URL"
    // Execute GET request to Files API.
    //var currentUserApiBaseUri = graphApiUri + "/beta/" + config.subscriptionId + "/users/" + user.userName;
    //var filesUri = currentUserApiBaseUri + "/files";
    var filesUri = config.endpoints.graphApiUri + "/beta/me/files";
    $.ajax({
      type: "GET",
      url: filesUri,
      headers: {
        'Authorization': 'Bearer ' + token,
      }
    }).done(function (response) {
      console.log('Successfully fetched files from OneDrive.');
      console.log(response);
    }).fail(function () {
      console.log('Fetching files from OneDrive failed.');
    });
  });
})();


</script>
<script type="text/javascript">
  document.getElementById('myform').submit();
</script>
</html>



