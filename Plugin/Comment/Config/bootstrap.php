<?php
$default = array(
	'user'	 => array(
		'model' => 'User',
		'username' => 'userlol',
		'mail'	   => 'mail',
	),
	'order'  => 'Comment.created ASC',
	'subcomments' => true
);
Configure::write('Plugin.Comment', (Configure::read('Plugin.Comment') ? Configure::read('Plugin.Comment') : array()) + $default);
