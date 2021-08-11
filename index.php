<?php
$t = date("H");

if ($_SERVER['HTTP_USER_AGENT']??null = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) electron-quick-start/1.0.0 Chrome/94.0.4584.0 Electron/16.0.0-nightly.20210810 Safari/537.36") {
  include("webapp.html");
} else {
  include("site.html");
}
?>
