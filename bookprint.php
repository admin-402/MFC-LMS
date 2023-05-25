<?php
    $servername = "cantshow_this:3306";
    $username_db = "also_this";
    $password_db = "and_this_as_well";
    $database = "vigneshsb_users";
$conn = new mysqli($servername, $username_db, $password_db, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT COUNT(*) AS total_books FROM Books";
$result = $conn->query($sql);
$totalBooks = 0;
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $totalBooks = $row["total_books"];
}
$conn->close();
$html = '';
if ($totalBooks > 0) {
    $html .= '<div class="row row-cols-1 row-cols-md-3 g-4">';
    $conn = new mysqli($servername, $username_db, $password_db, $database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM Books";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $bookTitle = $row["book_name"];
            $bookPages = $row["no_of_pages"];
            $html .= '<div class="col">';
            $html .= '<div class="card shadow-sm">';
            $html .= '<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>';
            $html .= '<div class="card-body">';
            $html .= '<p class="card-text">' . $bookTitle . '</p>';
            $html .= '<div class="d-flex justify-content-between align-items-center">';
            $html .= '<div class="btn-group">';
            $html .= '<button type="button" class="btn btn-sm btn-outline-secondary">Borrow</button>';
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
