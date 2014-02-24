Hi <?php e($name.$lastname); ?>,<br />
Thank you for signing up in HRBESTPICK. To complete the sign up
process please click on the link below:<br />
<a href="http://<?php e($server_name) ?><?php e($html->
url(array('controller' => 'users', 'action' => 'confirm')))
?>/<?php e($id) ?>/<?php e($code) ?>">Click Here to Confirm Your Account</a>