<?php

require_once 'db_connect.php';


$stmt = $pdo->query("SELECT * FROM links ORDER BY created_at DESC");

//   هذي الداله تجلب كل الروابط
$links = $stmt->fetchAll();

//  here  file HTML 
?>

<h1>صفحة روابطي</h1>

<?php foreach ($links as $link): ?>
    <div>
        <a href="<?php echo htmlspecialchars($link['url']); ?>">
            <?php echo htmlspecialchars($link['title']); ?>
        </a>
    </div>
<?php endforeach; ?>
<br>
<a href="add_link.php">إضافة رابط جديد</a>