<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require_once 'db_connect.php';

   
    $title = $_POST['title'];
    $url = $_POST['url'];

   
    if (!empty($title) && !empty($url) && filter_var($url, FILTER_VALIDATE_URL)) {

        try {
           
            $sql = "INSERT INTO links (title, url) VALUES (?, ?)";
            $stmt = $pdo->prepare($sql);

           
            $stmt->execute([$title, $url]);

           
            header("Location: index.php");
            exit;

        } catch (\PDOException $e) {
            echo "خطأ: " . $e->getMessage();
        }

    } else {
        echo "خطأ: يرجى ملء جميع الحقول برابط صحيح.";
    }
} else {
   
    header("Location: index.php");
    exit;
}
?>