<?php
session_start();
if (!isset($_SESSION['username'])) {
  header('Location: login.html');
  exit();
}
$first_name = htmlspecialchars($_SESSION['first_name']);
$last_name = htmlspecialchars($_SESSION['last_name']);
$username = htmlspecialchars($_SESSION['username']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
  <script src="starry.js" defer></script>
  <style>
    .dashboard-card {
      background: rgba(20, 30, 48, 0.98);
      border-radius: 18px;
      box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
      padding: 2.5rem 2rem 2rem 2rem;
      max-width: 420px;
      margin: 4rem auto 2rem auto;
      display: flex;
      flex-direction: column;
      gap: 1.5rem;
      align-items: center;
    }
    .user-info {
      color: #fff;
      text-align: center;
      margin-bottom: 1.5rem;
    }
    .user-info h2 {
      margin-bottom: 0.5rem;
      font-size: 2rem;
      font-weight: 600;
    }
    .user-info p {
      margin: 0.2rem 0;
      color: #90caf9;
      font-size: 1.1rem;
    }
    .logout-btn {
      background: #1e90ff;
      color: #fff;
      border: none;
      border-radius: 8px;
      padding: 0.7rem 1.5rem;
      font-size: 1rem;
      font-weight: 500;
      cursor: pointer;
      margin-top: 1.2rem;
      transition: background 0.2s;
    }
    .logout-btn:hover {
      background: #1565c0;
    }
  </style>
</head>
<body>
  <div class="dashboard-card">
    <div class="user-info">
      <h2>Welcome, <?php echo $first_name; ?>!</h2>
      <p><i class="fa fa-user"></i> <?php echo $first_name . ' ' . $last_name; ?></p>
      <p><i class="fa fa-at"></i> <?php echo $username; ?></p>
    </div>
    <form method="post" action="logout.php">
      <button type="submit" class="logout-btn"><i class="fa fa-sign-out-alt"></i> Logout</button>
    </form>
  </div>
</body>
</html> 