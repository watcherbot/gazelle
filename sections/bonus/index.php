<?
include(SERVER_ROOT.'/sections/bonus/functions.php');

if(!isset($_REQUEST['action'])) {
	include(SERVER_ROOT.'/sections/bonus/bonus.php');
}
else
{
    switch ($_REQUEST['action']){
          case 'buy':
            include(SERVER_ROOT.'/sections/bonus/takebonus.php');
            break;
        default:
            include(SERVER_ROOT.'/sections/bonus/bonus.php');
            break;
    }
} 
?>