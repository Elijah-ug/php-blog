<?php include '../partials/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="../../../public/css/style.css">
        <link rel="stylesheet" href="../../../public/css/posts.css">
    <title>Document</title>
</head>
<body>
    <main class="blog-container">
    <section class="blog-hero">
        <h1>Our Blog</h1>
        <p>Insights, tutorials, and stories from our team.</p>
    </section>

    <div class="posts-grid">
        <section class="blog-posts">
        <?php
        // Example static posts (replace with DB query later)
        $posts = [
            [
                "title" => "Getting Started with Vanilla PHP",
                "date" => "November 20, 2025",
                "excerpt" => "Learn how to set up a clean PHP project structure without frameworks.",
                 "img"=> "https://upload.wikimedia.org/wikipedia/commons/thumb/3/31/Webysther_20160423_-_Elephpant.svg/250px-Webysther_20160423_-_Elephpant.svg.png",
                "link" => "#"
            ],
            [
                "title" => "Why Folder Structure Matters",
                "date" => "November 15, 2025",
                "excerpt" => "Organizing your app makes scaling and maintenance much easier.",
                "img"=> "https://upload.wikimedia.org/wikipedia/commons/thumb/3/31/Webysther_20160423_-_Elephpant.svg/250px-Webysther_20160423_-_Elephpant.svg.png",
                "link" => "#"
            ],
            [
                "title" => "Reusable Components in Views",
                "date" => "November 10, 2025",
                "excerpt" => "Discover how to use partials like headers and footers effectively.",
                 "img"=> "https://upload.wikimedia.org/wikipedia/commons/thumb/3/31/Webysther_20160423_-_Elephpant.svg/250px-Webysther_20160423_-_Elephpant.svg.png",
                "link" => "#"
            ]
        ];

        foreach ($posts as $post): ?>
            <article class="blog-post">
                <h2><a href="<?php echo $post['link']; ?>"><?php echo $post['title']; ?></a></h2>
                <span class="post-date"><?php echo $post['date']; ?></span>

                <?php if (!empty($post['img'])): ?>
                <img src="<?php echo $post['img']; ?>" alt="<?php echo $post['title']; ?>" class="post-image">
               <?php endif; ?>

                <p><?php echo $post['excerpt']; ?></p>
                <a class="read-more" href="<?php echo $post['link']; ?>">Read more →</a>
            </article>
        <?php endforeach; ?>
    </section>
    </div>
</main>
</body>
</html>

<?php include 'partials/footer.php'; ?>
