<?php
function loadTemplate($name) {
    include __DIR__."/../_templates/$name.php";
}
function insertUser($username, $password, $email, $phone) {
    $servername = "mysql.selfmade.ninja:3306";
    $username_db = "vigneshsb";
    $password_db = "admin404";
    $database = "vigneshsb_users";

    // Create connection
    $conn = new mysqli($servername, $username_db, $password_db, $database);

    // Check connection
    if ($conn->connect_error) {
        return "Connection failed: " . $conn->connect_error;
    }

    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO auth (username, password, email, phone) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $username, $password, $email, $phone);

    // Execute the statement
    try {
        if ($stmt->execute() === TRUE) {
            $stmt->close();
            $conn->close();
            return "Success";
        } else {
            $error = "Error inserting user: " . $stmt->error;
            $stmt->close();
            $conn->close();
            return $error;
        }
    } catch (mysqli_sql_exception $e) {
        $error = "Error inserting user: " . $e->getMessage();
        $stmt->close();
        $conn->close();
        return $error;
    }
}
function validate($email, $password) {
    $servername = "mysql.selfmade.ninja:3306";
    $username_db = "vigneshsb";
    $password_db = "admin404";
    $database = "vigneshsb_users";

    // Create connection
    $conn = new mysqli($servername, $username_db, $password_db, $database);

    // Check connection
    if ($conn->connect_error) {
        error_log("Connection failed: " . $conn->connect_error);
        return false;
    }

    // Prepare the SQL statement
    $query = "SELECT * FROM auth WHERE email = ? AND password = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $email, $password);

    // Execute the statement
    try {
        if ($stmt->execute() === TRUE) {
            $result = $stmt->get_result();
            $stmt->close();
            $conn->close();

            if ($result->num_rows > 0) {
                return true; // Authentication successful
            } else {
                return false; // Authentication failed
            }
        } else {
            $error = "Error executing query: " . $stmt->error;
            error_log($error . " Query: " . $query);
            $stmt->close();
            $conn->close();
            return false;
        }
    } catch (mysqli_sql_exception $e) {
        $error = "Error executing query: " . $e->getMessage();
        error_log($error . " Query: " . $query);
        $stmt->close();
        $conn->close();
        return false;
    }
}
/*function uploadBook($bookName, $authorName, $noOfPages, $noOfCopies, $thumbnailImage, $bookPdf) {
    $servername = "mysql.selfmade.ninja:3306";
    $username_db = "vigneshsb";
    $password_db = "admin404";
    $database = "vigneshsb_users";

    // Create connection
    $conn = new mysqli($servername, $username_db, $password_db, $database);

    // Check connection
    if ($conn->connect_error) {
        return "Connection failed: " . $conn->connect_error;
    }

    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO Books (book_name, author_name, no_of_pages, no_of_copies, thumbnail_image, book_pdf) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $bookName, $authorName, $noOfPages, $noOfCopies, $thumbnailImage, $bookPdf);

    // Execute the statement
    try {
        if ($stmt->execute() === TRUE) {
            $stmt->close();
            $conn->close();
            return "Success";
        } else {
            $error = "Error inserting book: " . $stmt->error;
            $stmt->close();
            $conn->close();
            return $error;
        }
    } catch (mysqli_sql_exception $e) {
        $error = "Error inserting book: " . $e->getMessage();
        $stmt->close();
        $conn->close();
        return $error;
    }
}
*/
function uploadBook($bookName, $authorName, $noOfPages, $noOfCopies, $thumbnailImage, $bookPdf) {
    $servername = "mysql.selfmade.ninja:3306";
    $username_db = "vigneshsb";
    $password_db = "admin404";
    $database = "vigneshsb_users";

    // Create connection
    $conn = new mysqli($servername, $username_db, $password_db, $database);

    // Check connection
    if ($conn->connect_error) {
        return "Connection failed: " . $conn->connect_error;
    }

    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO Books (book_name, author_name, no_of_pages, no_of_copies, thumbnail_image, book_pdf) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $bookName, $authorName, $noOfPages, $noOfCopies, $thumbnailImage, $bookPdf);

    // Execute the statement
    try {
        if ($stmt->execute() === TRUE) {
            $stmt->close();
            $conn->close();
            return "Success";
        } else {
            $error = "Error inserting book: " . $stmt->error;
            $stmt->close();
            $conn->close();
            return $error;
        }
    } catch (mysqli_sql_exception $e) {
        $error = "Error inserting book: " . $e->getMessage();
        $stmt->close();
        $conn->close();
        return $error;
    }
}
?>
