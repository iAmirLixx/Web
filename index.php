<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upolad</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php include 'header-footer.html'; ?>

<main>
  <div class="main-box">
    <header>
      <h1>📷 سایت آپلود عکس</h1>
      <p>سریع آپلود کن و لینک بگیر!</p>
    </header>

    <div class="upload-box">
      <div class="middle-box"></div>
      <div class="icon">☁️</div>
      <h2>فایل خود را اینجا بکشید و رها کنید</h2>
      <p>یا روی دکمه زیر کلیک کنید</p>

      <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file" required>
        <button type="submit">انتخاب فایل</button>
      </form>

      <div class="preview-box">
        <p>پیش‌نمایش در اینجا نمایش داده می‌شود</p>
      </div>
    </div>
  </div>
</main>
