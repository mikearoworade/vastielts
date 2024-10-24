<?php
$hashed_password = password_hash('admin', PASSWORD_BCRYPT);

echo $hashed_password;
