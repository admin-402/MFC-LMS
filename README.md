# Library Management System

This is a Library Management System web application hosted on vigneshsb.me. The system allows users to manage books, authors, and provides the ability to upload and download books.
## Temporary Server Downtime and Database Connection Issue
### this issue might be resolved when you are seeing this so do visit vigneshsb.me
As of 25th May 14:20 there is no issue in the server an everything works fine. hence you can cheak the [site](https://vigneshsb.me/).

## Features

- User authentication: Sign up and sign in to access the system.
- Book management: Add new books, edit existing books, and delete books.
- Author management: Manage authors, including adding and removing authors.
- Upload books: Upload books in PDF format to the system.
- Download books: Download books from the system in PDF format.

## Requirements

To run the Library Management System locally, you need the following:

- Apache web server
- PHP 7.0 or higher
- MySQL database

## Installation

1. Clone the repository: `git clone https://github.com/your-username/library-management-system.git`
2. Configure your web server to point to the project directory.
3. Import the provided SQL file into your MySQL database.
4. Update the database connection details in the `config.php` file.
5. Ensure that the necessary PHP extensions are enabled (e.g., mysqli).
6. Start your web server and access the application through the provided URL.

## Usage

1. Sign up or sign in to access the Library Management System.
2. Manage books and authors by adding, editing, or deleting them.
3. To upload a book:
   - Provide the book title, author name, and other details in the upload form.
   - Choose the book file (in PDF format) and submit the form.
4. To download a book:
   - Browse the available books in the system.
   - Click on the "Download" button next to the desired book to start the download.

## Known Issues

- None at the moment.

## Future Enhancements

- Improve the user interface and user experience.
- Implement search functionality for books and authors.
- Enhance the file management system to handle large book collections.
- Provide book rating and review features.

## License

This project is licensed under the [MIT License](LICENSE).
