<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Bill Generation System</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        body {
            background-color: #f4f7f6;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #007BFF;
            padding: 20px 0;
            text-align: center;
            color: white;
            font-size: 26px;
            font-weight: bold;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .container {
            max-width: 800px;
            margin: 40px auto;
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .intro-text {
            font-size: 18px;
            margin-bottom: 20px;
            color: #333;
            font-weight: bold;
        }

        .button-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;  /* Adds space between buttons */
        }

        .btn {
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            padding: 15px 30px;
            border-radius: 10px;
            font-size: 16px;
            transition: background-color 0.3s, transform 0.2s;
            box-shadow: 0 4px 6px rgba(0, 123, 255, 0.3);
        }

        .btn:hover {
            background-color: #0056b3;
            transform: translateY(-3px);  /* Adds lift effect on hover */
        }

        footer {
            background-color: #007BFF;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
            box-shadow: 0 -2px 6px rgba(0, 0, 0, 0.1);
        }

        @media (max-width: 600px) {
            .btn {
                padding: 12px 20px;
                font-size: 14px;
            }
        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <header>
        Welcome to Bill Generation System for DRMC Math Club
    </header>

    <!-- Main Container -->
    <div class="container">
        <p class="intro-text">Billing Procedure for Executives of DRMC Math Club</p>

        <div class="button-grid">
            <a href="public/invoice_generation.php" target="_blank" class="btn">Generate Invoice</a>
            <a href="public/invoice_history.php" target="_blank" class="btn">View Invoice History</a>
            <a href="public/invoice_search.php" target="_blank" class="btn">Search Invoice</a>
            <a href="public/add_executive.php" target="_blank" class="btn">Add Executive</a>
            <a href="public/view_executive.php" target="_blank" class="btn">View Executive List</a>
            <a href="public/login.php" class="btn">Start Admin Session</a>
            <a href="public/logout.php" target="_blank" class="btn">End Admin Session</a>
            <a href="admin_system/public/admin_console.php" target="_blank" class="btn">Admin Management</a>
        </div>
        <h1>Credit Balance Generation</h1>
    </div>

    <!-- Footer Section -->
    <footer>
        <p>&copy; <span id="currentYear"></span>; All rights reserved for DRMC Math Club</p>
    </footer>

    <script>
        document.getElementById('currentYear').textContent = new Date().getFullYear();
    </script>
</body>
</html>
