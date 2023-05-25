# Library Management System

This is a Library Management System web application hosted on vigneshsb.me. The system allows users to manage books, authors, and provides the ability to upload and download books.
## Temporary Server Downtime and Database Connection Issue
### this issue might be resolved when you are seeing this so do visit vigneshsb.me

Dear Mozilla Firefox Club Member,
I would like to inform you about the current status of the Library Management System hosted on vigneshsb.me. At the moment, the server is experiencing some technical difficulties related to the database connection when posting a book.
The issue arose as a result of an unintended mistake during routine server maintenance performed solely by myself. Unfortunately, while executing file cleanup operations, I mistakenly ran the command ```sudo rm /*``` instead of the intended ```sudo rm ./*```. This led to the deletion of critical system files, causing the server's inability to establish a connection with the database when attempting to post a new book.
Please accept my sincere apologies for this unfortunate incident, as it has caused the system to be temporarily unavailable. Rest assured that I am actively working to resolve the problem and have already identified the root cause. I am taking immediate steps to rectify the situation, and I anticipate that the server will be fully functional again within a few hours.
As an individual developer responsible for the Library Management System, I understand the importance of providing a reliable and accessible service. I deeply regret any inconvenience this may have caused to you and other members of the Mozilla Firefox Club. Your trust and satisfaction are of utmost importance to me, and I am committed to resolving this issue promptly.
I will keep you updated on the progress of the server restoration. If you have any further questions or concerns, please feel free to reach out to me directly. Your understanding and patience are greatly appreciated during this time.
Thank you for your support. if you are seeing this please do contact me in [Twitter](https://twitter.com/SbVignesh).

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
