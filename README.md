# Online Banking System
A fully functional Online Banking System web application developed using PHP. This project aims to provide a secure, efficient, and user-friendly platform for customers to manage their banking needs online, including viewing accounts, transferring funds, managing beneficiaries, and accessing transaction histories.
![image](https://github.com/user-attachments/assets/7e2d607e-2181-4895-a380-b8e227c0154b)

## Table of Contents
- [Features](#features)
- [Project Structure](#project-structure)
- [Installation](#installation)
- [Usage](#usage)
- [Screenshots](#screenshots)
- [License](#license)

## Features
- **User Account Management**: Users can create and manage their accounts.
- **Fund Transfer**: Securely transfer funds between accounts with OTP verification.
- **Beneficiary Management**: Add or remove beneficiaries for easier fund transfers.
- **Transaction History**: View detailed transaction history and account statements.
- **Staff Management**: Admin and staff members can manage customer accounts and oversee banking operations.
- **Branch Management**: Information about different bank branches for better service management.
- **Loan and EMI Calculator**: Calculate loan EMIs and apply for loans directly.
- **Account Security**: Password recovery, OTP validation, and other security features.


## Description

This project is structured to separate different functionalities into modules, making it easier to maintain and scale. Here’s a quick rundown of the main components:

- **DATABASE FILE/**: Contains all necessary database files for initial setup.
- **css/**: Stylesheets that define the application's look and feel.
- **img/**: Image assets used throughout the project.
- **Blank_page.php**: A template for creating new pages.
- **Staff_profile_header.php**: The header layout specifically for staff profile pages.
- **account_approve_process.php**: Script to handle the approval process for new customer accounts.
- **active_customers.php**: Page displaying currently active customers.
- **add_beneficiary.php**: Form to add a new beneficiary for fund transfers.
- **bank_branch.php**: Page to manage and display bank branch information.
- **credit_customer_ac.php**: Script to credit a customer's account.
- **customer_login.php**: Login page for customers.
- **customer_profile.php**: Page to display customer profile information.
- **db_connect.php**: Contains the code for database connection and credentials.
- **fund_transfer.php**: Handles the logic for fund transfers between customer accounts.
- **staff_login.php**: Login page for staff members.



## ER
![image](https://github.com/user-attachments/assets/1d5aeb03-4137-4f95-9235-7b133b45f32b)


## Installation

1. **Clone the repository**  
   ```bash
   git clone https://github.com/Chowdhurynaseeh/Online-Banking-System.git

2. **Setup the Database**

Import the database file from DATABASE FILE/ into your MySQL server.
Update the database credentials in db_connect.php to match your server configuration.

3. **Start a Local Server**

You can use XAMPP, WAMP, or any PHP server setup to run the project locally.
Navigate to the Project in Your Browser

Open your browser and go to http://localhost/Online-Banking-System to access the application.

![image](https://github.com/user-attachments/assets/a89f877a-c533-4778-8829-326862521b6b)


## License

This project is licensed under the [Your License] License - see the LICENSE file for details.


