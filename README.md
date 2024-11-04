![image](https://github.com/user-attachments/assets/7e2d607e-2181-4895-a380-b8e227c0154b)# Online Banking System

A fully functional Online Banking System web application developed using PHP. This project aims to provide a secure, efficient, and user-friendly platform for customers to manage their banking needs online, including viewing accounts, transferring funds, managing beneficiaries, and accessing transaction histories.
![image](https://github.com/user-attachments/assets/39eead62-21b9-4ccf-9564-73932d8f4c6b)

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

## Project Structure
The project follows a modular structure for easy maintenance and scaling.

Online-Banking-System/
├── DATABASE FILE/             # Database files for initial setup
├── css/                       # Stylesheets for the application
├── img/                       # Image assets
├── Blank_page.php             # Template for creating new pages
├── README.md                  # Project README file
├── Staff_profile_header.php   # Header layout for staff profile pages
├── account_approve_process.php # Process for approving new accounts
├── active_customers.php       # Displays currently active customers
├── add_beneficiary.php        # Adds a new beneficiary for fund transfer
├── bank_branch.php            # Manages and displays bank branch details
├── credit_customer_ac.php     # Handles customer credit account functions
├── customer_login.php         # Customer login page
├── customer_profile.php       # Displays customer profile details
├── db_connect.php             # Database connection file with credentials
├── fund_transfer.php          # Handles fund transfer between accounts
├── staff_login.php            # Staff login page

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


