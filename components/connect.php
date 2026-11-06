<?php

// Configuración de la base de datos (con soporte para variables de entorno o valores por defecto locales)
$db_host = getenv('DB_HOST') ?: 'localhost';
$db_name = getenv('DB_NAME') ?: 'blog_db';
$user_name = getenv('DB_USER') ?: 'root';
$user_password = getenv('DB_PASS') !== false ? getenv('DB_PASS') : '';

try {
   $conn = new PDO("mysql:host={$db_host};dbname={$db_name};charset=utf8mb4", $user_name, $user_password);
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
   die("Error al conectar con la base de datos. Por favor verifica las credenciales en components/connect.php o las variables de entorno.");
}

?>
