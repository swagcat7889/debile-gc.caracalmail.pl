<?php
if(strlen(strstr($_SERVER['HTTP_USER_AGENT'],"Electron")) <= 0 ){ // if not firefox
  include("webapp.html");
} else {
  include("site.html");
}
?>
