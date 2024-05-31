<!DOCTYPE html>
<html>

<head>

    <?php include 'head.php'; ?>
    <?= $this->renderSection('head') ?>

</head>

<body>
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">SIG Kabupaten</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" ariaexpanded="false" aria-label="Togglenavigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="#">Logout</a>
            </div>
        </div>
    </header>
    <div class="container-fluid">
        <div class="row">

            <?php include 'sidebar.php'; ?>

            <?= $this->renderSection('content') ?>

        </div>
    </div>

    <?php include 'javascript.php'; ?>
    <?= $this->renderSection('javascript') ?>

</body>

</html>