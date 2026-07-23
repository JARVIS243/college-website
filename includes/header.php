<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>
    <?php echo isset($pageTitle) ? $pageTitle : 'COLLEGE OF APPLIED SCIENCE MAVELIKARA'; ?>
</title>

<!-- Bootstrap -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap Icons -->

<link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<!-- Custom CSS -->

<link rel="stylesheet" href="/college-website/assets/css/style.css">

<!-- Favicon -->

<link rel="icon" href="/college-website/assets/images/logo.png">

</head>

<body>

<!-- =========================
     HEADER
========================== -->

<header class="college-header">

    <div class="container-fluid">

        <div class="header-wrapper">

            <div class="logo-section">

                <img src="/college-website/assets/images/logo.png"
                    alt="College Logo"
                    class="college-logo">

                <div class="college-info">

                    <h1>COLLEGE OF APPLIED SCIENCE</h1>

                    <h2>MAVELIKARA</h2>

                    <p>
                        Managed By IHRD Affiliated To Kerala University
                    </p>

                </div>

            </div>

            <div class="working-hours">

                <span class="working-label">
                    Working Hours
                </span>

                <span class="working-time">
                    Mon-FRI 08:30am-3:30pm
                </span>

            </div>

        </div>

    </div>

</header>

<!-- =========================
     NAVBAR
========================== -->

<?php include 'navbar.php'; ?>

<!-- =========================
     MAIN CONTENT START
========================== -->

<main>
