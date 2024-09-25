<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Article List</title>
</head>
<body>
    <h1>Danh sách bài viết</h1>
    <ul>
        <?php if (empty($articles)): ?>
            <li>Không tìm thấy bài viết nào</li>
        <?php else: ?>
            <?php foreach ($articles as $article): ?>
                <li>
                    <strong><?= htmlspecialchars($article['title']) ?></strong><br>
                    <?= htmlspecialchars($article['content']) ?><br>
                    <small>Xuất bản vào: <?= htmlspecialchars($article['published_at']) ?></small>
                </li>
            <?php endforeach; ?>
        <?php endif; ?>
    </ul>
</body>
</html>