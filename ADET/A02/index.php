<?php

session_start();

$page = "home";

if (isset($_GET['page'])) {
    $page = strtolower(trim($_GET['page']));
    switch ($page) {
        case "home":
            $page = "home";
            break;
        case "books":
            $page = "books";
            break;
        case "contact":
            $page = "contact";
            break;
        default:
            header("Location: ?page=home");
            exit; 
    }
} else {
    header("Location: ?page=home");
    exit; 
}


$category = isset($_GET['category']) ? strtolower(trim($_GET['category'])) : '';
$page_num = isset($_GET['page_num']) ? max(1, (int)$_GET['page_num']) : 1;

$siteTitle = "Bookworm Library";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo ucfirst($page) . ' - ' . $siteTitle; ?></title>
    
    <?php include 'shared/header.php'; ?>
</head>
<body>
 
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-12">
                <div class="card shadow  p-3 content-container" style="min-height: 85vh;">
                    <?php
                    
                    include "shared/$page.php";
                    ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'shared/footer.php'; ?>
</body>
</html>