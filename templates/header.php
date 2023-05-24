

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="public/styles/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
<?php include('config/config.php') ?>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo $base_url?>">
                    <img src="public/images/logo.png" alt="logo" class="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class= "nav-link <?php if(basename($_SERVER['PHP_SELF'])== 'index.php') echo 'active'?>" href="<?php echo $base_url?>">home</a>
                        </li>
                        <li class="nav-item">
                            <a class= "nav-link <?php if(basename($_SERVER['PHP_SELF'])== 'about-us.php') echo 'active'?>" href="<?php echo $base_url?>about-us">about</a>
                        </li>
                        <li class="nav-item">
                            <a class= "nav-link <?php if(basename($_SERVER['PHP_SELF'])== 'course.php') echo 'active'?>" href="<?php echo $base_url?>course">course</a>
                        </li>
                        <li class="nav-item">
                            <a class= "nav-link <?php if(basename($_SERVER['PHP_SELF'])== 'enquiry.php') echo 'active'?>" href="<?php echo $base_url?>enquiry">enquiry</a>
                        </li>
                        <li class="nav-item">
                            <a class= "nav-link <?php if(basename($_SERVER['PHP_SELF'])== 'contact.php') echo 'active'?>" href="<?php echo $base_url?>contact">contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div id="main">
    
