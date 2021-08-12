<?php
if(strlen(strstr($_SERVER['HTTP_USER_AGENT'],"warlike-gun-fence-7fjs6")) <= 1 ){ // if not debile-gc webapp
  include("site.html");
} else {
  include("webapp.html");
}
?>
