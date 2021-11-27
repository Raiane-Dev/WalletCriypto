<?php
    if(isset($_POST['git'])){
        Controller::git($_POST['git']);
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Wallet</title>
    <script src="https://unpkg.com/feather-icons"></script>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH ?>Style/dashboard.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
<section id="global">
    <div>
        <aside><form method="post">
            <div class="aside">
                <span class="icon">
                    <i data-feather="menu"></i>
                </span>
                <div class="divider"></div>
                <span class="icon active">
                    <a href="<?php echo INCLUDE_PATH_DASHBOARD ?>home"><i data-feather="grid"></i></a>
                </span>
                <div class="separator"></div>
                <span class="icon">
                    <a href="<?php echo INCLUDE_PATH_DASHBOARD ?>create-wallet"><i data-feather="credit-card"></i></a>
                </span>
                <div class="separator"></div>
                <span class="icon">
                    <a href="<?php echo INCLUDE_PATH_DASHBOARD ?>transfer"><i data-feather="refresh-cw"></i></a>
                </span>
                <div class="separator"></div>
                <span class="icon">
                    <a href="<?php echo INCLUDE_PATH_DASHBOARD ?>crypto"><i data-feather="bar-chart"></i></a>
                </span>
                <div class="separator"></div>
                <span class="icon">
                    <a href="<?php echo INCLUDE_PATH_DASHBOARD ?>with-drawals"><i data-feather="git-commit"></i></a>
                </span>
                <div class="separator"></div>
                <span class="icon">
                    <input type="checkbox" name="git" value="git personality" class="git" id="git-personality" />
                    <label for="git-personality"><i data-feather="printer"></i></label>
                </span>
                <div class="separator"></div>
                <span class="icon">
                    <input type="submit" name="action" value="action" class="git" id="git-send" />
                    <label for="git-send"><i data-feather="send"></i></label>
                </span>
            </div>
        </form></aside>
    </div>
<div>
    <header>
        <div class="head-area">
            <h2>Raiane Dev</h2>
        </div>
        <div class="area-head">
            <div class="search">
                <input type="search" />
                <i data-feather="search"></i>
            </div>
        </div>
        <div class="head-area">
            <i data-feather="phone-call"></i>
            <i data-feather="bell"></i>
            <i data-feather="message-circle"></i>
            <i data-feather="github"></i>
        </div>
    </header>
