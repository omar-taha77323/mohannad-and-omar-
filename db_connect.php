
<!-- copy to  app xampp -->

<!-- CREATE TABLE links (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    url VARCHAR(2083) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
); -->

<?php
// pull setting السرية 
require_once 'config.php';

// confagration connection
$dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // لإظهار الأخطاء
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // لجلب البيانات كـ (associative array)
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
     // PDO :  object the connection 
     $pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
} catch (\PDOException $e) {
     
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>