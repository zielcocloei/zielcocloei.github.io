<?php
$imageBasePath = 'assets/images/books/';
$books = [
    'fiction' => [
        ['title' => '1984', 'author' => 'George Orwell', 'genre' => 'Fiction, Dystopian', 'summary' => 'A chilling vision of a totalitarian future.', 'image' => 'book1.jpg'],
        ['title' => 'The Handmaid’s Tale', 'author' => 'Margaret Atwood', 'genre' => 'Fiction, Dystopian', 'summary' => 'A woman’s struggle in a patriarchal society.', 'image' => 'book2.jpg'],
        ['title' => 'Dune', 'author' => 'Frank Herbert', 'genre' => 'Fiction, Sci-Fi', 'summary' => 'A saga of power and destiny on a desert planet.', 'image' => 'book3.jpg'],
        ['title' => 'Neuromancer', 'author' => 'William Gibson', 'genre' => 'Fiction, Cyberpunk', 'summary' => 'A hacker’s journey in a digital underworld.', 'image' => 'book4.jpg'],
        ['title' => 'The Road', 'author' => 'Cormac McCarthy', 'genre' => 'Fiction, Post-Apocalyptic', 'summary' => 'A father and son’s survival in a bleak world.', 'image' => 'book5.jpg'],
        ['title' => 'Fahrenheit 451', 'author' => 'Ray Bradbury', 'genre' => 'Fiction, Dystopian', 'summary' => 'A future where books are banned.', 'image' => 'book6.jpg'],
        ['title' => 'Brave New World', 'author' => 'Aldous Huxley', 'genre' => 'Fiction, Dystopian', 'summary' => 'A society of engineered happiness.', 'image' => 'book7.jpg'],
        ['title' => 'Snow Crash', 'author' => 'Neal Stephenson', 'genre' => 'Fiction, Cyberpunk', 'summary' => 'A virtual reality adventure.', 'image' => 'book8.jpg'],
        ['title' => 'The Left Hand of Darkness', 'author' => 'Ursula K. Le Guin', 'genre' => 'Fiction, Sci-Fi', 'summary' => 'A tale of gender and politics.', 'image' => 'book9.jpg'],
        ['title' => 'Ender’s Game', 'author' => 'Orson Scott Card', 'genre' => 'Fiction, Sci-Fi', 'summary' => 'A young boy trains to save humanity.', 'image' => 'book10.jpg'],
        ['title' => 'The Martian', 'author' => 'Andy Weir', 'genre' => 'Fiction, Sci-Fi', 'summary' => 'An astronaut’s survival on Mars.', 'image' => 'book11.jpg'],
        ['title' => 'Hyperion', 'author' => 'Dan Simmons', 'genre' => 'Fiction, Sci-Fi', 'summary' => 'A pilgrimage in a cosmic war.', 'image' => 'book12.jpg']
    ],
    'non-fiction' => [
        ['title' => 'Sapiens', 'author' => 'Yuval Noah Harari', 'genre' => 'Non-Fiction, History', 'summary' => 'A history of humankind’s evolution.', 'image' => 'book13.jpg'],
        ['title' => 'Educated', 'author' => 'Tara Westover', 'genre' => 'Non-Fiction, Memoir', 'summary' => 'A journey from isolation to education.', 'image' => 'book14.jpg'],
        ['title' => 'The Immortal Life of Henrietta Lacks', 'author' => 'Rebecca Skloot', 'genre' => 'Non-Fiction, Science', 'summary' => 'The story of a woman’s cells.', 'image' => 'book15.jpg'],
        ['title' => 'Thinking, Fast and Slow', 'author' => 'Daniel Kahneman', 'genre' => 'Non-Fiction, Psychology', 'summary' => 'How we make decisions.', 'image' => 'book16.jpg'],
        ['title' => 'The Sixth Extinction', 'author' => 'Elizabeth Kolbert', 'genre' => 'Non-Fiction, Science', 'summary' => 'Human impact on Earth’s species.', 'image' => 'book17.jpg'],
        ['title' => 'Becoming', 'author' => 'Michelle Obama', 'genre' => 'Non-Fiction, Memoir', 'summary' => 'A former First Lady’s story.', 'image' => 'book18.jpg'],
        ['title' => 'Guns, Germs, and Steel', 'author' => 'Jared Diamond', 'genre' => 'Non-Fiction, History', 'summary' => 'Why civilizations rise and fall.', 'image' => 'book19.jpg'],
        ['title' => 'The Selfish Gene', 'author' => 'Richard Dawkins', 'genre' => 'Non-Fiction, Science', 'summary' => 'Evolution through genes.', 'image' => 'book20.jpg'],
        ['title' => 'A Short History of Nearly Everything', 'author' => 'Bill Bryson', 'genre' => 'Non-Fiction, Science', 'summary' => 'A tour of science and history.', 'image' => 'book21.jpg'],
        ['title' => 'The Power of Habit', 'author' => 'Charles Duhigg', 'genre' => 'Non-Fiction, Psychology', 'summary' => 'How habits shape our lives.', 'image' => 'book22.jpg'],
        ['title' => 'The Emperor of All Maladies', 'author' => 'Siddhartha Mukherjee', 'genre' => 'Non-Fiction, Science', 'summary' => 'A biography of cancer.', 'image' => 'book23.jpg'],
        ['title' => 'When Breath Becomes Air', 'author' => 'Paul Kalanithi', 'genre' => 'Non-Fiction, Memoir', 'summary' => 'A neurosurgeon’s battle with cancer.', 'image' => 'book24.jpg']
    ],
    'classics' => [
        ['title' => 'Pride and Prejudice', 'author' => 'Jane Austen', 'genre' => 'Classic, Romance', 'summary' => 'Love and society in 19th-century England.', 'image' => 'book25.jpg'],
        ['title' => 'The Great Gatsby', 'author' => 'F. Scott Fitzgerald', 'genre' => 'Classic, Fiction', 'summary' => 'Wealth and dreams in the Jazz Age.', 'image' => 'book26.jpg'],
        ['title' => 'Jane Eyre', 'author' => 'Charlotte Brontë', 'genre' => 'Classic, Romance', 'summary' => 'A governess’s journey to love.', 'image' => 'book27.jpg'],
        ['title' => 'Wuthering Heights', 'author' => 'Emily Brontë', 'genre' => 'Classic, Romance', 'summary' => 'A tale of passion and revenge.', 'image' => 'book28.jpg'],
        ['title' => 'Moby-Dick', 'author' => 'Herman Melville', 'genre' => 'Classic, Adventure', 'summary' => 'A captain’s obsession with a whale.', 'image' => 'book29.jpg'],
        ['title' => 'Crime and Punishment', 'author' => 'Fyodor Dostoevsky', 'genre' => 'Classic, Psychological', 'summary' => 'A murderer’s moral struggle.', 'image' => 'book30.jpg'],
        ['title' => 'The Catcher in the Rye', 'author' => 'J.D. Salinger', 'genre' => 'Classic, Fiction', 'summary' => 'A teenager’s rebellion.', 'image' => 'book31.jpg'],
        ['title' => 'Great Expectations', 'author' => 'Charles Dickens', 'genre' => 'Classic, Fiction', 'summary' => 'A boy’s rise to wealth.', 'image' => 'book32.jpg'],
        ['title' => 'Dracula', 'author' => 'Bram Stoker', 'genre' => 'Classic, Horror', 'summary' => 'A vampire’s reign of terror.', 'image' => 'book33.jpg'],
        ['title' => 'Frankenstein', 'author' => 'Mary Shelley', 'genre' => 'Classic, Horror', 'summary' => 'A scientist’s monstrous creation.', 'image' => 'book34.jpg'],
        ['title' => 'The Scarlet Letter', 'author' => 'Nathaniel Hawthorne', 'genre' => 'Classic, Fiction', 'summary' => 'Sin and redemption in Puritan America.', 'image' => 'book35.jpg'],
        ['title' => 'Anna Karenina', 'author' => 'Leo Tolstoy', 'genre' => 'Classic, Romance', 'summary' => 'Love and tragedy in Russian society.', 'image' => 'book36.jpg']
    ]
];

$filteredBooks = [];
if ($category && isset($books[$category])) {
    $filteredBooks = $books[$category];
    $pageTitle = ucfirst($category) . ' Books';
} else {
    foreach ($books as $catBooks) {
        $filteredBooks = array_merge($filteredBooks, $catBooks);
    }
    $pageTitle = 'Our Book Collection';
}


$booksPerPage = 12;
$totalBooks = count($filteredBooks);
$totalPages = ceil($totalBooks / $booksPerPage);
$pagedBooks = $filteredBooks;

if ($totalBooks > $booksPerPage) {
    $page_num = min(max(1, $page_num), $totalPages);
    $startIndex = ($page_num - 1) * $booksPerPage;
    $pagedBooks = array_slice($filteredBooks, $startIndex, $booksPerPage);
} else {
    $page_num = 1;
}
?>
<main class="container my-5">
    <h2 class="mb-4"><?php echo htmlspecialchars($pageTitle); ?> <span class="badge bg-primary">New Arrivals</span></h2>
    <div class="alert alert-info" role="alert">
        Check out our latest books! Click on any title to learn more.
    </div>

  
    <?php
    $modals = [];
    foreach ($pagedBooks as $book) {
        
        $modalId = 'modal_' . preg_replace('/[^a-zA-Z0-9]/', '_', strtolower($book['title']));
        $modals[] = ['id' => $modalId, 'book' => $book];
    ?>
        <div class="modal fade" id="<?php echo $modalId; ?>" tabindex="-1" aria-labelledby="<?php echo $modalId; ?>Label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="<?php echo $modalId; ?>Label"><?php echo htmlspecialchars($book['title']); ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="<?php echo htmlspecialchars($imageBasePath . $book['image']); ?>" class="img-fluid mb-3" alt="<?php echo htmlspecialchars($book['title']); ?> Cover" style="max-height: 200px;">
                        <p><strong>Author:</strong> <?php echo htmlspecialchars($book['author']); ?></p>
                        <p><strong>Genre:</strong> <?php echo htmlspecialchars($book['genre']); ?></p>
                        <p><strong>Summary:</strong> <?php echo htmlspecialchars($book['summary']); ?></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>

    <div class="row g-4">
        <?php foreach ($pagedBooks as $book):
            $modalId = 'modal_' . preg_replace('/[^a-zA-Z0-9]/', '_', strtolower($book['title']));
            $badgeClass = strpos($book['genre'], 'Fiction') !== false ? 'bg-danger' : (strpos($book['genre'], 'Non-Fiction') !== false ? 'bg-info' : 'bg-success');
        ?>
            <div class="col-md-4 col-lg-3">
                <div class="card book-card h-100 shadow-sm">
                    <img src="<?php echo htmlspecialchars($imageBasePath . $book['image']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($book['title']); ?> Cover" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo htmlspecialchars($book['title']); ?> <span class="badge <?php echo $badgeClass; ?>"><?php echo htmlspecialchars(strstr($book['genre'], ',', true) ?: $book['genre']); ?></span></h5>
                        <p class="card-text">By <?php echo htmlspecialchars($book['author']); ?>. <?php echo htmlspecialchars($book['summary']); ?></p>
                        <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#<?php echo $modalId; ?>" onclick="console.log('Opening modal: <?php echo $modalId; ?>')">Details</button>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <?php if ($totalBooks > $booksPerPage): ?>
        <nav aria-label="Book pagination" class="mt-4">
            <ul class="pagination justify-content-center">
                <li class="page-item <?php echo $page_num <= 1 ? 'disabled' : ''; ?>">
                    <a class="page-link" href="?page=books<?php echo $category ? '&category=' . urlencode($category) : ''; ?>&page_num=<?php echo $page_num - 1; ?>" aria-label="Previous">
                        <span aria-hidden="true">«</span>
                    </a>
                </li>
                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                    <li class="page-item <?php echo $i == $page_num ? 'active' : ''; ?>">
                        <a class="page-link" href="?page=books<?php echo $category ? '&category=' . urlencode($category) : ''; ?>&page_num=<?php echo $i; ?>"><?php echo $i; ?></a>
                    </li>
                <?php endfor; ?>
                <li class="page-item <?php echo $page_num >= $totalPages ? 'disabled' : ''; ?>">
                    <a class="page-link" href="?page=books<?php echo $category ? '&category=' . urlencode($category) : ''; ?>&page_num=<?php echo $page_num + 1; ?>" aria-label="Next">
                        <span aria-hidden="true">»</span>
                    </a>
                </li>
            </ul>
        </nav>
    <?php endif; ?>
</main>