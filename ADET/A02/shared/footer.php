<footer class="bg-dark text-white text-center py-2 mt-auto">
    <div class="container">
        <p class="mb-2">© <?php echo date('Y'); ?> Bookworm Library. All rights reserved.</p>
        <div>
            <a href="#" class="text-white mx-2" data-bs-toggle="tooltip" title="Twitter"><i class="bi bi-twitter"></i> Twitter</a>
            <a href="#" class="text-white mx-2" data-bs-toggle="tooltip" title="Facebook"><i class="bi bi-facebook"></i> Facebook</a>
            <a href="#" class="text-white mx-2" data-bs-toggle="tooltip" title="Instagram"><i class="bi bi-instagram"></i> Instagram</a>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script>
    if (typeof bootstrap === 'undefined') {
        document.write('<script src="assets/js/bootstrap.bundle.min.js"><\/script>');
        console.warn('Bootstrap CDN failed, using local fallback');
    }
</script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<script>

    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });

  
    document.querySelectorAll('[data-bs-toggle="modal"]').forEach(function(btn) {
        btn.addEventListener('click', function() {
            console.log('Modal button clicked, target: ' + btn.getAttribute('data-bs-target'));
        });
    });
</script>