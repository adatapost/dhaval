<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title><?php echo empty($title) ? 'Welcome': $title ?></title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="container">
    <section class="page">
        <header class="header">
            <h1>The Appleman Pvt Ltd</h1>
            <h3>Sample webapp</h3>
        </header>
        <nav class="nav">
            <ul class="menu">
                <li class="level1"><a href="index.php">Home</a></li>
                <li class="level1"><a href="about.php">About us</a></li>
                <li class="level1">
                    <a href="#">Product</a>
                    <ul>
                        <li><a href="#">Item 1</a></li>
                        <li><a href="#">Item 2</a></li>
                        <li><a href="#">Item 3</a></li>
                    </ul>
                </li>
                <li class="level1">
                    <a href="#">Services</a>
                    <ul>
                        <li><a href="#">We are someone</a></li>
                        <li><a href="#">You wanted to learn</a></li>
                        <li><a href="#">Item 3</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div class="content">