<?php     

require_once __DIR__ . '/../db_connect/db_config.php';
require_once __DIR__ . '/../db_connect/create_account.php';

createAccount('mytest@email.com', 'password', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

?>
