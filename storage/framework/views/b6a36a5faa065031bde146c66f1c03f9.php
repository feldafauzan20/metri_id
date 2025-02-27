<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-YP50SG89J9"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-YP50SG89J9');
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metri Design Posts</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .post { border: 1px solid #ddd; padding: 10px; margin-bottom: 10px; padding: 10px; }
        img { max-width: 100%; height: auto; }
    </style>
</head>
<body>
    <h1>Metri Design Posts</h1>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <h2><?php echo e($post->title); ?></h2>
    <img src="<?php echo e(asset('storage/' . $post->image)); ?>" alt="Image">
    
    <!-- Menampilkan content dengan tag HTML -->
    <p><?php echo $post->content; ?></p> 
    
    <?php if($post->embed_link): ?>
        <iframe width="560" height="315" src="<?php echo e($post->embed_link); ?>" 
            frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
        </iframe>
    <?php else: ?>
        <a href="<?php echo e($post->link); ?>" target="_blank">Read more</a>
    <?php endif; ?>
    
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\metri_id\resources\views/index.blade.php ENDPATH**/ ?>