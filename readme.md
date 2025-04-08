# Student Control System

A simple web-based student management system built with PHP and MySQL that allows you to manage student records.

## Features

- Add new students with ID, name, and address
- Delete existing students
- View all students in a tabulated format
- Responsive admin panel interface

## Requirements

- PHP
- MySQL/MariaDB
- Web server (Apache/Nginx)

## Database Setup

1. Create a database named `student1`
2. Create a table named `student` with the following structure:
```sql
CREATE TABLE student (
    id INT,
    name VARCHAR(100),
    addres VARCHAR(255)
);
```

## Configuration

Database connection settings in [home.php](home.php):
```php
$host = "localhost";
$user = "root";
$password = "root";
$db = "student1";
```

## Installation

1. Clone this repository to your web server directory
2. Set up the database as described above
3. Configure your database connection settings
4. Access the application through your web browser

## Usage

- To add a student: Fill in the ID, name, and address fields and click "Add student"
- To delete a student: Enter the student's name and click "Delete student"
- The main table automatically displays all student records

## Screenshots

![Admin Panel](img/P1.png)