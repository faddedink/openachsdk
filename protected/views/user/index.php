<?php
/*********************************************************************************
 * OpenACH is an ACH payment processing platform
 * Copyright (C) 2011 Steven Brendtro, ALL RIGHTS RESERVED
 * 
 * Refer to /legal/license.txt for license information, or view the full license
 * online at http://openach.com/community/license.txt
 ********************************************************************************/

$this->stockMenus( array( 'create', 'search' ) );

?>

<h1>Users</h1>

<?php $this->showOAListView( $dataProvider,  array( 'user_login', 'user_email_address', 'user_status' ) ); ?>

