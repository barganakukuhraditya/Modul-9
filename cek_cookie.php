<?php
if(isset($HTTP_COOKIE_VARS["cookie_no_induk"]))
{
    echo("Isi data <b>".$HTTP_COOKIE_VARS["cookie_no_induk"]."</b><br>");
}else
{
    header("Location: cookie.php");
    exit;
}
?>