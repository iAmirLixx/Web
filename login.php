<!DOCTYPE html>
<html lang="fa">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>صفحه ورود</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>

<?php include 'header-footer.html'; ?>

<main class="login-page">
  <div class="container">
    <form action="login.php" method="POST">
      <input type="text" name="username" placeholder="نام کاربری" class="input-field" required>
      <input type="password" name="password" placeholder="رمز عبور" class="input-field" required>
      <button type="submit">ورود</button>
      <button type="button" onclick="register()">ثبت نام</button>
    </form>
  </div>
</main>

</body>
</html>
