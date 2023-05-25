<?php
$servername = "icantshowthis";
$username_db = "vigneshsb";
$password_db = "eventhis";
$database = "andthis";

// Create connection
$conn = new mysqli($servername, $username_db, $password_db, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the number of books
$sql = "SELECT COUNT(*) AS total_books FROM Books";
$result = $conn->query($sql);
$totalBooks = 0;

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $totalBooks = $row["total_books"];
}

$conn->close();

// HTML display of books
$html = '';

if ($totalBooks > 0) {
    $html .= '<div class="row row-cols-1 row-cols-md-3 g-4">';
    
    $conn = new mysqli($servername, $username_db, $password_db, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve the books
    $sql = "SELECT * FROM Books";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $bookTitle = $row["book_name"];
            $bookPages = $row["no_of_pages"];
            $thumbnailImage = $row["thumbnail_image"];
            $bookPdf = $row["book_pdf"];
            
            $html .= '<div class="col">';
            $html .= '<div class="card shadow-sm">';
            $html .= '<img src="uploads/' . $thumbnailImage . '" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="Book Thumbnail">';
            $html .= '<div class="card-body">';
            $html .= '<p class="card-text">' . $bookTitle . '</p>';
            $html .= '<div class="d-flex justify-content-between align-items-center">';
            $html .= '<div class="btn-group">';
            $html .= '<a href="uploads/' . $bookPdf . '" class="btn btn-sm btn-outline-secondary" download>Download</a>';
            $html .= '<button type="button" class="btn btn-sm btn-outline-secondary">View</button>';
            $html .= '</div>';
            $html .= '<small class="text-body-secondary">' . $bookPages . ' pages</small>';
            $html .= '</div>';
            $html .= '</div>';
            $html .= '</div>';
            $html .= '</div>';
        }
    }
    
    $html .= '</div>';
    
    $conn->close();
} else {
    $html = '<p>No books found.</p>';
}

echo $html;
?>
