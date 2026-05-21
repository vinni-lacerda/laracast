<!DOCTYPE html>
<title>My blog</title>
{{--@vite('resources/css/app.css')--}}
<link rel="stylesheet" href="/app.css">
<body>
    <?php foreach ($posts as $post) : ?>
        <article>
            <?= $post; ?>
        </article>
    <?php endforeach; ?>
</body>
