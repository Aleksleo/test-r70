<?php

$db_params = array(
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=test_r70',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
    'tablePrefix' => 'tbl_',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
);

$app_params = array(
    'adminEmail' => 'admin@example.com',
);
