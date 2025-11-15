<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>darbarema</title>
  <link rel="stylesheet" href="delet.css">
</head>
<body>
<?php include 'header-footer.html'; ?>

<main>
  <section class="about">
    <h2>حذف فایل آپلود شده</h2>
    <p><strong>@AmirLixx</strong> : در حال توسعه توسط</p>

    <div class="delete-box">
      <p>برای حذف فایل اسم آن را وارد کنید:</p>
      <form action="delete_file.php" method="POST">
        <input type="text" name="filename" placeholder="مثلاً: Web.jpg" required>
        <button type="submit">حذف فایل</button>
      </form>
    </div>
  </section>
</main>
