<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&display=swap" rel="stylesheet">
<link rel="icon" href="assets/images/logo.png">
https://github.com/zielcocloei/backup.git
<style>

    body {
        font-family: 'Lora', serif;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        background-color: #FBF3E6 !important;
        color: #2A3436 !important;
    }

    main {
        flex: 1;
    }

    h1, h2, h3, h4, h5, h6, p, .card-text, .card-title, .list-group-item, .dropdown-item {
        color: #2A3436 !important;
    }

    .navbar {
        background-color: #FBF3E6 !important;
    }

    .navbar-brand {
        color: #2A3436 !important;
    }

    .navbar-brand img {
        margin-right: 10px;
    }

    .navbar-nav .nav-link {
        color: #2A3436 !important;
        transition: color 0.3s;
    }

    .navbar-nav .nav-link:hover,
    .navbar-nav .nav-link.active {
        color: white;
    }

    /* Card styling */
    .card {
        background-color: #D3BF9C !important;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .card.book-card {
        width: 100%;
        max-width: 300px;
        margin: 0 auto;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .card-img-top {
        height: 200px;
        object-fit: cover;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .carousel-item h1 {
            font-size: 1.75rem;
        }
        .carousel-item p {
            font-size: 1rem;
        }
        .card-img-top {
            height: 150px;
        }
        .card.book-card {
            max-width: 100%;
            min-width: 200px;
        }
    }

    @media (max-width: 576px) {
        .card-img-top {
            height: 120px;
        }
        .card.book-card {
            min-width: 150px;
        }
        .card-title {
            font-size: 1rem;
        }
        .card-text {
            font-size: 0.875rem;
        }
    }

    /* Button styling */
    .btn.btn-primary {
        background-color: #AA976F !important;
        border-color: #AA976F !important;
        color: #2A3436 !important;
    }

    .btn.btn-primary:hover,
    .btn.btn-primary:active,
    .btn.btn-primary:focus {
        background-color: #998663 !important;
        border-color: #998663 !important;
        color: #2A3436 !important;
    }

    .btn.btn-outline-primary {
        border-color: #AA976F !important;
        color: #664229 !important;
    }

    .btn.btn-outline-primary:hover,
    .btn.btn-outline-primary:active,
    .btn.btn-outline-primary:focus {
        background-color: #AA976F !important;
        border-color: #AA976F !important;
        color: #2A3436 !important;
    }

    .btn.btn-light,
    .btn.btn-dark {
        background-color: #AA976F !important;
        border-color: #AA976F !important;
        color: #2A3436 !important;
    }

    .btn.btn-light:hover,
    .btn.btn-light:active,
    .btn.btn-light:focus,
    .btn.btn-dark:hover,
    .btn.btn-dark:active,
    .btn.btn-dark:focus {
        background-color: #998663 !important;
        border-color: #998663 !important;
        color: #2A3436 !important;
    }

    .bg-primary {
        background-color: #684f36 !important;
    }

    .bg-success {
        background-color: #b39977 !important;
    }

    .bg-warning {
        background-color: #ede6d9 !important;
    }

    .carousel-item h1,
    .carousel-item p {
        color: #2A3436 !important;
    }
/
    footer {
        background-color: #343a40 !important;
        color: #2A3436 !important;
    }

    footer a {
        text-decoration: none;
        color: #FFFFF0 !important;
        transition: color 0.3s;
    }

    footer a:hover {
        color: #ffd700 !important;
    }

    footer .container {
        background-color:#997950 !important;
        padding: 10px;
        border-radius: 5px;
    }

    .alert.alert-info {
        background-color: #FFFFF0 !important;
        color: #2A3436 !important;
        border-color: #D3BF9C !important;
    }
</style>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="?page=home">
                <img src="assets/images/logo.png" alt="Bookworm Logo" width="45" height="45" class="d-inline-block align-text-top">
                Bookworm
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($page == 'home') ? 'active' : ''; ?>" href="?page=home">Home</a>
                    </li>
                    <?php if ($page == 'home'): ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Categories
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
                                <li><a class="dropdown-item" href="?page=books&category=fiction">Fiction</a></li>
                                <li><a class="dropdown-item" href="?page=books&category=non-fiction">Non-Fiction</a></li>
                                <li><a class="dropdown-item" href="?page=books&category=classics">Classics</a></li>
                            </ul>
                        </li>
                    <?php else: ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?php echo ($page == 'books') ? 'active' : ''; ?>" href="?page=books" id="booksDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Books
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="booksDropdown">
                                <li><a class="dropdown-item" href="?page=books&category=fiction">Fiction</a></li>
                                <li><a class="dropdown-item" href="?page=books&category=non-fiction">Non-Fiction</a></li>
                                <li><a class="dropdown-item" href="?page=books&category=classics">Classics</a></li>
                            </ul>
                        </li>
                    <?php endif; ?>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($page == 'contact') ? 'active' : ''; ?>" href="?page=contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>