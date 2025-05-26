<?php
session_start();

// لو في ملف redirect.php و session.php تقدر تستخدمهم
// هنا بس للتوضيح، لو عندك دوال Redirect() تستخدمها
function Redirect($url, $permanent = false) {
    if (headers_sent() === false) {
        header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
    }
    exit();
}

// تحقق من تسجيل الدخول
if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
    // إعادة التوجيه إلى صفحة الحساب
    Redirect('./php/myAccount.php');
}

// إذا المستخدم غير مسجل دخول، نعرض الصفحة الرئيسية أدناه
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>توظيف | الصفحة الرئيسية</title>
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <style>
    body {
      background-color: #0f0f23;
      color: #fff;
      font-family: 'Cairo', sans-serif;
    }
    /* Navbar */
    .navbar { background-color: #121227; }
    .navbar .nav-link { color: #ddd; }
    .navbar .nav-link:hover { color: #fff; }
    .navbar-brand { color: #4e84f1; font-weight: bold; }
    /* Hero */
    .hero {
      background: linear-gradient(to right, #6a11cb, #2575fc);
      padding: 80px 20px;
      text-align: center;
    }
    .hero h1 { font-size: 2.5rem; margin-bottom: 1rem; }
    .hero p { font-size: 1.1rem; }
    .btn-start {
      background-color: #e74c3c;
      border: none;
      padding: .75rem 1.5rem;
      font-size: 1rem;
    }
    /* Features */
    .features {
      padding: 60px 0;
      background-color: #0d0d1a;
      text-align: center;
    }
    .features h2 { color: #4e84f1; margin-bottom: 2rem; }
    .feature-box {
      background-color: #1a1a2e;
      padding: 30px 20px;
      border-radius: 12px;
      transition: transform .2s;
    }
    .feature-box:hover { transform: translateY(-5px); }
    .feature-box i {
      font-size: 2.5rem;
      margin-bottom: 15px;
      color: #8a2be2;
    }
    /* Footer */
    footer {
      background-color: #121227;
      padding: 20px 0;
      text-align: center;
      color: #aaa;
      margin-top: 40px;
    }
  </style>
</head>
<body>

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="index.php">توظيف | Tawzeef</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>

  <!-- HERO SECTION -->
  <section class="hero text-white">
    <div class="container">
      <h1>أنشئ سيرتك الذاتية باحترافية</h1>
      <p>قوالب احترافية متوافقة مع أنظمة ATS مع دعم كامل للغة العربية والإنجليزية</p>
      <a href="html/register.php" class="btn btn-start text-white mt-4">
        ابدأ الآن
      </a>
    </div>
  </section>

  <!-- FEATURES SECTION -->
  <section class="features">
    <div class="container">
      <h2>المميزات</h2>
      <div class="row gy-4">
        <div class="col-md-4">
          <div class="feature-box">
            <i class="bi bi-search"></i>
            <h5>بحث عن وظائف</h5>
            <p>تقديم تلقائي للوظائف المناسبة</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-box">
            <i class="bi bi-translate"></i>
            <h5>دعم اللغتين</h5>
            <p>العربية والإنجليزية</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-box">
            <i class="bi bi-file-earmark-text"></i>
            <h5>قوالب احترافية</h5>
            <p>قوالب متعددة بتصميم عصري</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer>
    &copy; <?php echo date('Y'); ?> توظيف | Tawzeef. جميع الحقوق محفوظة.
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
