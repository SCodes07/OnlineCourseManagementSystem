# Online Course Management System

A web-based Online Course Management System developed as part of a Full Stack Development project. The system provides separate functionality for Admin and Student users, allowing administrators to manage courses and students to enroll in and access course content.

## 📌 Project Overview

The Online Course Management System is designed to provide a centralized platform for managing and accessing online courses.

The system supports:

- User registration
- User login and logout
- Role-based access control
- Course creation
- Course updating
- Course deletion
- Course enrollment
- Course content viewing

The system has two main types of users:

- **Admin** – Manages course information
- **Student** – Registers, enrolls in courses, and views course content

## 🎯 Objectives

- Provide a centralized platform for online course management.
- Implement user authentication.
- Provide role-based access for Admin and Student users.
- Allow administrators to create, update, and delete courses.
- Allow students to browse and enroll in available courses.
- Allow enrolled students to access course content.
- Gain practical experience in full-stack web application development.

## 👥 User Roles

### 👨‍💼 Admin

Admin functionalities:

- Login
- Access Admin dashboard
- Create courses
- Update courses
- Delete courses
- Manage course information

### 👨‍🎓 Student

Student functionalities:

- Register an account
- Login
- Logout
- View available courses
- Select courses
- Enroll in courses
- View enrolled course content

## ✨ Features

### 1. User Registration

New students can create an account by providing the required registration information.

### 2. User Login & Logout

Registered users can log in and access functionality according to their role.

### 3. Role-Based Access

The system provides different functionality based on whether the user is an Admin or Student.

### 4. Course Creation

Admin users can create new courses by entering course information.

### 5. Course Update

Admin users can modify existing course information.

### 6. Course Delete

Admin users can remove courses from the system.

### 7. Course Enrollment

Students can browse available courses and enroll in courses.

### 8. View Course Content

Enrolled students can access and view course content.

## 🔄 Overall System Workflow

```text
                  ONLINE COURSE
                MANAGEMENT SYSTEM
                         |
             +-----------+-----------+
             |                       |
           ADMIN                   STUDENT
             |                       |
           Login                  Register
             |                       |
     Admin Dashboard                Login
             |                       |
    Course Management        View Available Courses
             |                       |
       +-----+-----+               Select
       |     |     |                 |
     Create Update Delete          Enroll
                                   |
                            View Course Content
```

## 🧩 Main System Components

### Authentication Module

Handles:

- User registration
- User login
- User logout
- Authentication

### Role Management Module

Provides separate access for:

- Admin
- Student

### Course Management Module

Handles:

- Course creation
- Course updating
- Course deletion
- Course information

### Enrollment Module

Allows students to select and enroll in courses.

### Course Content Module

Allows enrolled students to access course content.

## 📋 Feature Summary

| Feature | User Role | Description |
|---|---|---|
| User Registration | Student | Creates a new account |
| User Login | Admin / Student | Authenticates users |
| User Logout | Admin / Student | Ends the user session |
| Role Management | Admin / Student | Provides role-based access |
| Course Creation | Admin | Adds new courses |
| Course Update | Admin | Modifies existing courses |
| Course Delete | Admin | Removes courses |
| Course Enrollment | Student | Enrolls in available courses |
| Course Content | Student | Allows students to view course content |

## 🚶 User Journey

### Admin Journey

```text
Login
  ↓
Admin Dashboard
  ↓
Course Management
  ↓
Create / Update / Delete Courses
```

### Student Journey

```text
Register
   ↓
Login
   ↓
View Available Courses
   ↓
Select Course
   ↓
Enroll
   ↓
View Course Content
```

## 🛠️ Technologies Used

### Frontend

- HTML
- CSS
- JavaScript

### Backend

- PHP

### Database

- MySQL

### Server

- Apache / XAMPP

> Update this section if your actual project uses different technologies.

## 📂 Project Structure

The main public entry point of the application is:

```text
OnlineCourseManagement/
│
├── public/
│   └── index.php
│
├── application/
│
├── system/
│
└── README.md
```

> The exact internal structure may vary depending on the project implementation.

## 🚀 Installation & Setup

### Prerequisites

- PHP
- MySQL
- Apache
- XAMPP or another PHP development environment
- Web browser

### Step 1: Clone the Repository

```bash
git clone https://github.com/your-username/online-course-management-system.git
```

### Step 2: Move the Project

If using XAMPP, place the project inside:

```text
xampp/htdocs/
```

For example:

```text
xampp/htdocs/OnlineCourseManagement/
```

### Step 3: Start XAMPP

Start:

```text
Apache
MySQL
```

### Step 4: Create the Database

Open:

```text
http://localhost/phpmyadmin
```

Create the application database and import the project's SQL database file if one is provided.

### Step 5: Configure the Database

Update the database configuration for your local environment.

Example:

```text
Database Host: localhost
Database Name: your_database
Username: root
Password:
```

### Step 6: Run the Application

Open:

```text
http://localhost/OnlineCourseManagement/public/
```

## 🔐 Demo Credentials

For a public repository, use dummy credentials rather than real passwords.

### Admin

```text
Email: admin@example.com
Password: demo123
```

### Student

```text
Email: student@example.com
Password: demo123
```

> ⚠️ Do not publish real passwords in a public GitHub repository.

## 🌐 Working Website

**Live Demo:** Add your deployed website URL here.

```text
https://your-website-url.com
```

## 📚 Learning Outcomes

This project provided practical experience with:

- Full-stack web application development
- User authentication
- User registration
- Login and logout functionality
- Role-based access control
- CRUD operations
- Course management
- Course enrollment
- Database integration
- Backend development
- Frontend development
- Designing systems for different user roles

## 🔮 Future Improvements

Possible future enhancements include:

- Student dashboard
- Admin dashboard
- Course categories
- Course search and filtering
- Course ratings and reviews
- Instructor role
- Video-based course content
- Assignment management
- Online quizzes
- Progress tracking
- Certificate generation
- Payment integration
- Email notifications
- Password reset
- Improved security
- Responsive mobile design

## ⚠️ Limitations

The current version focuses mainly on basic course management and enrollment.

Advanced e-learning features such as online quizzes, assignment submission, progress tracking, certificates, payment processing, and video streaming may not be included.

## 🤝 Contribution

Contributions are welcome.

1. Fork the repository.
2. Create a new branch.

```bash
git checkout -b feature/new-feature
```

3. Make your changes.
4. Commit your changes.

```bash
git commit -m "Add new feature"
```

5. Push the branch.

```bash
git push origin feature/new-feature
```

6. Create a Pull Request.

## 📄 License

This project is developed for educational and academic purposes.
Online Course Management System  
Full Stack Development Project
