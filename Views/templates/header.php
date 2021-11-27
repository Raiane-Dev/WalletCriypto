<!DOCTYPE html>
<html>
<head>
    <title>Crypto</title>
    <script src="https://unpkg.com/feather-icons"></script>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH ?>Style/frontend.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <div class="menu">
        <div class="area-head">
            <h2>Raiane Devs</h2>
        </div>
        <div class="area-head">
            <div class="search">
                <input type="search" placeholder="Search for..." />
                <i data-feather="search"></i>
            </div>
        </div>
        <div class="area-head">
            <ul>
                <li>Discover</li>
                <li>Lorem</li>
                <li>Amet</li>
            </ul>
        </div>
        <div class="area-head">
            <span class="background-icon"><i data-feather="heart"></i></span>
            <span class="background-icon"><i data-feather="bell"></i></span>
        </div>
        <div class="area-head">
            <a href="<?php echo INCLUDE_PATH ?>access" class="button light">Create</a>
            <a href="<?php echo INCLUDE_PATH_DASHBOARD ?>create-wallet" class="button dark">Add Wallet</a>
        </div>
    </div>

    <div class="nav-menu">
        <nav>
            <ul>
                <li><a href="<?php echo INCLUDE_PATH ?>">Home</a></li>
                <li><a href="<?php echo INCLUDE_PATH ?>">Portfólio</a></li>
                <li><a href="<?php echo INCLUDE_PATH ?>#nfts">NFTS</a></li>
                <li><a href="<?php echo INCLUDE_PATH ?>">About</a></li>
                <li><a href="<?php echo INCLUDE_PATH ?>">Ranking</a></li>
                <li><a href="<?php echo INCLUDE_PATH ?>">Shop</a></li>
                <li><a href="<?php echo INCLUDE_PATH ?>">Support</a></li>
                <li><a href="<?php echo INCLUDE_PATH ?>">Chat</a></li>
                <li><a href="<?php echo INCLUDE_PATH ?>access">Register</a></li>
                <li><a href="<?php echo INCLUDE_PATH ?>access?login">Login</a></li>
            </ul>
        </nav>
    </div>
</header>