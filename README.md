# Hospital Management Website

![Website Screenshot](iwp11.png)

## Table of Contents
- [Introduction](#introduction)
- [Technologies Used](#technologies-used)
- [Features](#features)
- [Setup Instructions](#setup-instructions)
- [Usage](#usage)
- [Database Configuration](#database-configuration)
- [User Roles](#user-roles)


## Introduction
The Hospital Management Website is a comprehensive system designed to streamline hospital operations. It allows for the management of patient appointments, doctor records, and user authentication. The website provides three distinct logins: Admin, Patient, and Doctor.

## Technologies Used
- Frontend: HTML, CSS, JavaScript
- Backend: PHP
- Database: PHPMyAdmin
- Server: Apache

## Features
- **Admin**: 
  - Manage doctor and patient records.
  - Add new doctors to the system.

- **Patient**:
  - Book appointments with doctors.
  - View appointment details and status.

- **Doctor**:
  - Access and address patient appointments.
  - Update appointment status.

## Setup Instructions
Follow these steps to set up the project locally:

1. Clone or download the repository to your local machine.
2. Place the project files in your Apache server's web directory (e.g., `htdocs`).
3. Import the provided database SQL file into PHPMyAdmin to set up the database.
4. Update the database connection details in the PHP files, typically found in a `config.php` or `db.php` file.
5. Start your Apache server and MySQL service.
6. Open your web browser and navigate to the project URL (e.g., `http://localhost/hospital-management`).

## Usage
1. Access the website and log in with the appropriate role (Admin, Patient, or Doctor).
2. Depending on your role, perform the corresponding actions:
   - Admin: Manage doctors and patients, add new doctors.
   - Patient: Book appointments with available doctors, view appointment status.
   - Doctor: Access and address patient appointments, update appointment status.

## Database Configuration
- Create a MySQL database in PHPMyAdmin.
- Import the provided SQL file (`database.sql`) to set up the necessary tables.
- Update the database connection details in the PHP files where necessary (e.g., `config.php`).

## User Roles
- **Admin**: Admin credentials and functionalities.
  - Username: admin
  - Password: admin123

- **Patient**: Patient credentials.
  - Username: patient
  - Password: patient123

- **Doctor**: Doctor credentials.
  - Username: doctor
  - Password: doctor123


