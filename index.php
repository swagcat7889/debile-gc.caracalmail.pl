<?php
if(strlen(strstr($_SERVER['HTTP_USER_AGENT'],"Electron")) <= 0 ){ // if not electron
  include("site.html");
} else {
  include("webapp.html");
}
?>
