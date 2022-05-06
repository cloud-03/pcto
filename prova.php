<?php
	$pwd = '12345';
	$pwdh = password_hash($pwd, PASSWORD_DEFAULT);
	if(password_verify($pwd, '$2y$10$riEvUcafX8PbQfyMvujjvuP7U2683ZDe2gbP8.RzRIon2LsTzBZ0q'))
		echo 'success';
	else
		echo 'fail';
?>