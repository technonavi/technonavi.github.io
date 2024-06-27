<?php
$posts = [
    'post1.php' => 'First Post',
    'post2.php' => 'Second Post'
];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
</head>
<body>
    <h1>My Blog</h1>
    <ul>
        <?php foreach ($posts as $file => $title): ?>
            <li><a href="posts/<?php echo $file; ?>"><?php echo $title; ?></a></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
