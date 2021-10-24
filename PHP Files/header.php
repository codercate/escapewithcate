<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title>Escape With Cate</title>
</head>
<body>
    <nav class="navbar navbar-expand-md">
        <a href="#" id="logoItem" class="navbar-brand d-md-none"></a>
        <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#main-navigation" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-navigation">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="active" href="<?php echo site_url(''); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo site_url('/about'); ?>">About</a>
                </li>
                <li id="logoItem" class="nav-item d-none d-md-block">
                </li>
                <li class="nav-item">
                    <a href="<?php echo site_url('/blog'); ?>">Blog</a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo site_url('/projects'); ?>">Projects</a>
                </li>
            </ul>
        </div>
    </nav>