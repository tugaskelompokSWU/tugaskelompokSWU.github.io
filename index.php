<!DOCTYPE html>
<html lang="en">
<head>
    <title>UAS Mata Kuliah Web Programming</title>
    <meta charset="UTF-8">
    <meta name="description" contents="STMIK Widya Utama Purwokerto">
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <header>
        <h1 class="title">STMIK Widya Utama Purwokerto</h1>
        <h3 class="desc">Membuat Website dinamis dengan PHP dan MySQL</h3>
        <nav id="navigation">
            <ul>
                <li><a href="index.php?page=home">Home</a></li>
                <li><a href="index.php?page=about">About</a></li>
                <li><a href="index.php?page=contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    <div id="contents">
        <?php 
        if(isset($_GET['page'])){
            $page = $_GET['page'];
 
            switch ($page) {
                case 'home':
                include "home.php";
                break;
                case 'about':
                include "about.php";
                break;
                case 'contact':
                include "contact.php";
                break;          
            }
        }
else{
            include "home.php";
        }
        ?>
 
    </div>
    <footer>
        &copy Copyright Abdul Faiz dan Resta Amalia Yuliani 2022 | SWU Purwokerto
    </footer>
</body>
</html>