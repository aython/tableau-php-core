<?php

// Returns a trusted URL for a view on a server for the
// given user.  For example, if the URL of the view is:
//    http://tabserver/views/MyWorkbook/MyView
//
// Then:
//   $server = "tabserver";
//   $view_url = "views/MyWorkbook/MyView";
//
function get_trusted_url($user,$server,$view_url) {


  $params = '&:embed=yes&:toolbar=yes&:toolbar=top';

  $ticket = get_trusted_ticket($server, $user, $_SERVER['REMOTE_ADDR']);
  if (strcmp($ticket, "-1") != 0) {
    return "https://$server/trusted/$ticket/$view_url?$params";
  }
  else 
    return 0;
}

// Note that this function requires the pecl_http extension. 
// See: http://pecl.php.net/package/pecl_http

// the client_ip parameter isn't necessary to send in the POST unless you have
// wgserver.extended_trusted_ip_checking enabled (it's disabled by default)
function get_trusted_ticket($wgserver, $user, $remote_addr) {
    $server = $wgserver;
    $url = 'https://'.$server.'/trusted';
    $fields_string ='target_site=$remote_addr&username=$user';

    $ch = curl_init($url);
    $data = array('target_site' => 'insights', 'username' => $user, 'client_ip' => $remote_addr);

    curl_setopt($ch, CURLOPT_POST, true); 
    curl_setopt($ch,CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    return curl_exec($ch);
   curl_close($ch);      
}
?>


