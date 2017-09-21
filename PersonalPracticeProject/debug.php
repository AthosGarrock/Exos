<?php 

require 'includes/db.php';
require 'usermanager.php';

$query = $userDB->get('Athos');
xdebug_debug_zval('$query');

?>