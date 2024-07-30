<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <style>
        body {
            font-family: Arial;
            margin: 0;
            background-color: #f4f4f4;
            color: red;
        }
        header, footer {
            background-color: skyblue;
            color: red;
            width: 100%;
            text-align: center;
        }
        header {
            top: 0;
            padding: 10px 0;
        }
        footer {
            position: absolute;
            padding: 10px 0;
        }
        nav a {
            color: white;
            margin: 0 10px;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <header>
        <h1>Shrestha Website</h1>
        <nav>
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']): ?>
                <a href="index.php">Home</a>
                <a href="index.php?logout=true">Log Out</a>
            <?php else: ?>
                <a href="index.php">Registeration</a>
                <a href="login.php">Log In</a>
            <?php endif; ?>
        </nav>
    </header>