<?php
require_once 'core/init.php';
$sql = "Select * from product where price IS NOT NULL";
$img_source = $db->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>BeDazzle Shop</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scaleable=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar sticky-top navbar-expand-lg navbar-light " id="navbar">
    <a class="navbar-brand mb-3 h2" id="title" href="welcome%20page.php">beDazzle</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <li class="navbar-nav mr-auto">
            <ul class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Accessories</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <?php
                    $sql = "Select * from category where name is not null";
                    $pquery = $db->query($sql);
                    ?>
                    <?php while ($items = mysqli_fetch_assoc($pquery)) : ?>
                    <li ><a class="dropdown-item" href="<?=$items['link']; ?>"><?php echo $items['name']?></a></li>
                    <?php endwhile; ?>
                </div>
            </ul>
            <ul class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Brands</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <?php
                    $sql = "Select * from brand where name is not null";
                    $pquery2 = $db->query($sql);
                    ?>
                    <?php while ($brand = mysqli_fetch_assoc($pquery2)) : ?>
                        <li ><a class="dropdown-item" href="<?=$brand['link'];?>"><?php echo $brand['name']?></a></li>
                    <?php endwhile; ?>
                </div>
            </ul>
            <a class="nav-link" href="aboutus.php" id="navbarDropdownAbout">About us </a>
        </li>
    </div>
</nav>
</body>
</html>