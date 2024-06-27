// blog.php
$posts = [
    ['title' => 'First Post', 'content' => 'This is my first post.'],
    ['title' => 'Second Post', 'content' => 'This is my second post.']
];
foreach ($posts as $post) {
    echo "<h2>{$post['title']}</h2>";
    echo "<p>{$post['content']}</p>";
}
