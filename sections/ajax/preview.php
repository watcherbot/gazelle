<?php
/* AJAX Previews, simple stuff. */

include(SERVER_ROOT.'/classes/class_text.php'); // Text formatting class
$Text = new TEXT;

if (!empty($_POST['AdminComment'])) {
    echo $Text->full_format($_POST['AdminComment'],true);
} else {
    $Content = $_REQUEST['body']; // Don't use URL decode.
      echo $Text->full_format($Content, get_permissions_advtags($LoggedUser['ID'], $LoggedUser['CustomPermissions']), true);
}
