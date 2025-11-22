<?php include 'header-footer.html'; ?>
<!doctype html>
<html lang="fa">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>آپلود فایل</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>

  <main class="کادربزرگ">
    
    <header>
      <h1>آپلود فایل</h1>
      <p>فایل خود را انتخاب کنید و آپلود را انجام دهید.</p>
    </header>

    <section class="اپلودکادر">
      <div class="ایکون">📁</div>
      <h2>فایل خود را آپلود کنید</h2>
      <p>فایل را بکشید یا اینجا رها کنید، یا دکمه را بزنید.</p>

      <form action="#" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="file" style="display:none;">
        <label for="file" class="فایل">انتخاب فایل</label>
      </form>

      <div class="کادرپرایوت">
        <p>توجه: فایل‌های حساس را در اینجا ارسال نکنید.</p>
      </div>
    </section>

  </main>
</body>
</html>
