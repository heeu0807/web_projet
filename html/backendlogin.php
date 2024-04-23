<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>會員登入</title>
<!-- 引入 Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
  body {
    background-color: #e7f2ff; /* 設置背景顏色為淺藍色 */
  }

  .login-container {
    max-width: 400px;
    margin: auto;
    margin-top: 50px;
    background-color: #fff; /* 設置背景顏色為白色 */
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* 添加陰影效果 */
  }

  .btn {
    font-size: 24px; /* 放大按鈕字體 */
    padding: 12px 24px; /* 放大按鈕大小 */
  }

  .btn-block {
    width: 100%; /* 按鈕寬度100% */
  }
</style>
</head>
<body>

<div class="container login-container">
  <h2 class="text-center mb-4">會員登入</h2>
  <form method="POST">
    <div class="mb-3">
      <label for="username" class="form-label">使用者名稱</label>
      <input type="text" class="form-control" id="username" name="username" placeholder="輸入使用者名稱">
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">密碼</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="輸入密碼">
    </div>
    <button type="submit" class="btn btn-primary btn-block">登入</button>
  </form>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // 檢查使用者名稱和密碼是否存在
      if (isset($_POST["username"]) && isset($_POST["password"])) {
          // 獲取使用者名稱和密碼
          $username = $_POST["username"];
          $password = $_POST["password"];
          $valid_username = "admin"; // 指定有效的使用者名稱
          $valid_password = "admin"; // 指定有效的密碼
  
          // 在這裡進行登入驗證或其他相關處理
          // 例如，檢查使用者名稱和密碼是否有效
          if ($username === $valid_username && $password === $valid_password) {
              // 登入成功，重定向到其他頁面
              echo "<p class='text-success mt-3'>登入成功！正在導向...</p>";
              echo "<script>setTimeout(function(){window.location.href='backendindex.html';}, 2000);</script>";
              exit; // 終止腳本
          } else {
              // 登入失敗，顯示錯誤消息
              echo "<p class='text-danger mt-3'>使用者名稱或密碼不正確</p>";
          }
      } else {
          // 如果使用者名稱或密碼未提供，顯示錯誤消息
          echo "<p class='text-danger mt-3'>請提供使用者名稱和密碼</p>";
      }
  }
  ?>
  
</div>

<!-- 引入 Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
