<div>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Dashboard</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
    }

    .dashboard {
      display: flex;
    }

    .sidebar {
      width: 250px;
      background: #333;
      padding: 30px 0;
      color: #fff;
    }

    .sidebar h2 {
      text-align: center;
    }

    .sidebar ul {
      list-style-type: none;
      padding: 0;
    }

    .sidebar ul li {
      padding: 10px 20px;
    }

    .sidebar ul li a {
      text-decoration: none;
      color: #fff;
    }

    .main-content {
      flex: 1;
      padding: 50px;
    }

    .main-content h2 {
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <div class="dashboard">
    <div class="sidebar">
      <h2>Dashboard</h2>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Analytics</a></li>
        <li><a href="#">Settings</a></li>
        <li><a href="#">Logout</a></li>
      </ul>
    </div>
    <div class="main-content">
      <h2>Welcome to Your Dashboard</h2>
      <p>This is a simple dashboard.</p>
    </div>
  </div>
</body>
</html>
</div>
