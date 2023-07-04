<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <nav class="navbar">
        <div class="navbar-brand">
            <a class="navbar-logo" href="#">
                <img src="logo.png" alt="Logo">
            </a>
        </div>
        <ul class="navbar-menu">
            <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Menu</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Over ons</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Locaties</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
        </ul>
    </nav>
</body>

</html>

<style>
    .navbar {
        background-color: #fff;
        padding: 10px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .navbar-brand {
        display: flex;
        align-items: center;
    }

    .navbar-logo img {
        height: 40px;
        width: auto;
    }

    .navbar-menu {
        list-style-type: none;
        margin: 0;
        padding: 0;
        display: flex;
    }

    .nav-item {
        margin-left: 15px;
    }

    .nav-link {
        color: #333;
        text-decoration: none;
        font-size: 16px;
    }

    .nav-link:hover {
        color: #ff7f00;
    }
</style>