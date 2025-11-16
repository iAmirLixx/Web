<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>vip</title>
  <link rel="stylesheet" href="Vip.css">
</head>
<body>


<?php include 'header-footer.html'; ?>

<main>
  <section class="about">
    <h2>بخش VIP</h2>
    <p><strong>@AmirLixx</strong> : در حال توسعه توسط</p>

    <div class="vip-container">
      <label for="plan">مدت عضویت را انتخاب کنید:</label><br><br>
      <select id="plan" class="vip-select" onchange="updatePrice()">
        <option value="1" data-price="100000">1 ماه - 100,000 تومان</option>
        <option value="3" data-price="270000">3 ماه - 270,000 تومان</option>
        <option value="6" data-price="500000">6 ماه - 500,000 تومان</option>
      </select>

      <div class="price-display" id="price">------</div>

      <button class="btn-confirm" onclick="confirmVIP()">تأیید</button>
    </div>
  </section>

  <script>
    function updatePrice() {
      const select = document.getElementById('plan');
      const price = select.options[select.selectedIndex].dataset.price;
      document.getElementById('price').innerText = price + ' تومان';
    }

    function confirmVIP() {
      const select = document.getElementById('plan');
      alert('پلن ' + select.value + ' ماهه با قیمت ' + select.options[select.selectedIndex].dataset.price + ' تومان انتخاب شد.');
    }

    updatePrice();
  </script>
</main>
