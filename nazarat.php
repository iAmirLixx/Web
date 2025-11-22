<?php

$comments = [
    ['user' => 'امیر', 'text' => 'این سایت عالیه! خیلی خوشم اومد.'],
    ['user' => 'سارا', 'text' => 'طراحی صفحه ورود خیلی زیباست.'],
    ['user' => 'حسین', 'text' => 'مرسی از پشتیبانی سریع شما.']
];
?>
<!doctype html>
<html lang="fa">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>آپلود فایل</title>
  <link rel="stylesheet" href="nazarat.css">
  <link rel="stylesheet" href="salam.css"> 
  
</head>
<body>

<?php include 'header-footer.html'; ?> 


<main class="big-frame">
    
  

  


    

   


  <!-- بخش نظرات -->
  <section class="comments-section">
    <h2>نظرات کاربران</h2>
    <?php foreach ($comments as $comment): ?>
      <div class="comment">
        <p class="comment-user"><?php echo $comment['user']; ?>:</p>
        <p class="comment-text"><?php echo $comment['text']; ?></p>
      </div>
    <?php endforeach; ?>
  </section>

</main>

</body>
</html>
