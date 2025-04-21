<?php

?>
<main class="container my-5">
  
    <div id="bookCarousel" class="carousel slide mb-5" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div style="background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)), url('assets/images/carousel1.png') center/cover no-repeat; min-height: 400px;" class="text-white text-center py-5">
                    <h1>Discover New Worlds</h1>
                    <p class="lead">Explore fiction that transports you.</p>
                    <a href="?page=books&category=fiction" class="btn btn-light">Browse Fiction</a>
                </div>
            </div>
            <div class="carousel-item">
                <div style="background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)), url('assets/images/carousel3.png') center/cover no-repeat; min-height: 400px;" class="text-white text-center py-5">
                    <h1>Learn and Grow</h1>
                    <p class="lead">Dive into non-fiction masterpieces.</p>
                    <a href="?page=books&category=non-fiction" class="btn btn-light">Browse Non-Fiction</a>
                </div>
            </div>
            <div class="carousel-item">
                <div style="background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)), url('assets/images/carousel2.png') center/cover no-repeat; min-height: 400px;" class="text-dark text-center py-5">
                    <h1>Timeless Classics</h1>
                    <p class="lead">Revisit the stories that shaped literature.</p>
                    <a href="?page=books&category=classics" class="btn btn-dark">Browse Classics</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#bookCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#bookCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

 
    <h2 class="mb-4">Explore Our Categories</h2>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">Fiction</h5>
                    <p class="card-text">Lose yourself in gripping narratives and imaginative worlds.</p>
                    <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#fictionModal">Learn More</button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">Non-Fiction</h5>
                    <p class="card-text">Gain insights from history, science, and more.</p>
                    <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#nonFictionModal">Learn More</button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">Classics</h5>
                    <p class="card-text">Rediscover timeless literary treasures.</p>
                    <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#classicsModal">Learn More</button>
                </div>
            </div>
        </div>
    </div>

    
    <div class="modal fade" id="fictionModal" tabindex="-1" aria-labelledby="fictionModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="fictionModalLabel">Fiction Collection</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Our fiction collection includes modern bestsellers and beloved stories that spark the imagination.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="?page=books&category=fiction" class="btn btn-primary">View Books</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="nonFictionModal" tabindex="-1" aria-labelledby="nonFictionModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="nonFictionModalLabel">Non-Fiction Collection</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Explore our non-fiction titles covering science, history, biographies, and more.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="?page=books&category=non-fiction" class="btn btn-primary">View Books</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="classicsModal" tabindex="-1" aria-labelledby="classicsModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="classicsModalLabel">Classics Collection</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Our classics collection features works that have inspired generations.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="?page=books&category=classics" class="btn btn-primary">View Books</a>
                </div>
            </div>
        </div>
    </div>
</main>