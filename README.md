Online Course Management System

A web-based Online Course Management System developed as part of the Full Stack Development course.

📌 Project Overview

The Online Course Management System is designed to manage online courses and provide different functionality for Admin and Student users.

The system supports:

User registration

User login and logout

Role-based access for Admin and Student

Course creation

Course update and deletion

Course enrollment

Viewing course content

🎯 System Objectives

The main objective of the system is to provide a centralized platform for managing and accessing online courses.

The system provides separate functionality for different types of users:

Admin: manages course information.

Student: enrolls in courses and views course content.

👥 User Roles

Admin

The Admin is responsible for managing courses.

Admin functions include:

Login

Create courses

Update courses

Delete courses

Manage course information

Student

Students use the platform to access courses.

Student functions include:

Register an account

Login and logout

View available courses

Enroll in courses

View course content

✨ Features

1. User Registration

New users can create an account and become registered users of the system.

2. User Login & Logout

Registered users can log in to the system and access functionality according to their role. Users can also log out of the system.

3. User Roles

The system provides two roles:

Admin

Student

Different functionality is available depending on the user's role.

4. Course Creation

Admin users can create and add new courses to the system.

Workflow:

Admin Login
    ↓
Course Management
    ↓
Create Course
    ↓
Enter Course Information
    ↓
Save Course

5. Course Update

Admin users can modify existing course information when changes are required.

Workflow:

Admin Login
    ↓
Select Course
    ↓
Update Course Information
    ↓
Save Changes

6. Course Delete

Admin users can remove an existing course from the system.

Workflow:

Admin Login
    ↓
Select Course
    ↓
Delete Course

7. Course Enrollment

Students can select and enroll in available courses.

Workflow:

Student Login
    ↓
View Courses
    ↓
Select Course
    ↓
Enroll

8. View Course Content

Students can access and view the content associated with their course.

Workflow:

Student Login
    ↓
Access Course
    ↓
View Course Content

🔄 Overall System Workflow

                 ONLINE COURSE MANAGEMENT SYSTEM
                              |
             +----------------+----------------+
             |                                 |
           ADMIN                            STUDENT
             |                                 |
           Login                            Register
             |                                 |
     Course Management                       Login
             |                                 |
     +-------+-------+                View Available Courses
     |       |       |                         |
   Create  Update  Delete                    Enroll
                                             |
                                   View Course Content

📋 Feature Summary

Feature

User Role

Description

User Registration

Student/User

Creates a new account

User Login & Logout

Admin / Student

Handles user authentication

User Roles

Admin / Student

Separates functionality by role

Course Creation

Admin

Adds new courses

Course Update

Admin

Modifies existing courses

Course Delete

Admin

Removes courses

Course Enrollment

Student

Enrolls students in courses

View Course Content

Student

Allows students to view course content

🧩 Main System Components

Authentication

Handles:

User registration

User login

User logout

Role Management

Provides separate access for:

Admin

Student

Course Management

Handles:

Course creation

Course update

Course deletion

Enrollment

Allows students to enroll in courses.

Course Content

Allows students to access and view course content.

🚶 User Journey

Admin Journey

Login
  ↓
Admin Access
  ↓
Course Management
  ↓
Create / Update / Delete Courses

Student Journey

Register
   ↓
Login
   ↓
View Courses
   ↓
Enroll in Course
   ↓
View Course Content

🌐 Working Website

You can access the working system here:

Online Course Management System

🔐 Demo Login

Important: Avoid publishing real passwords in a public GitHub repository. Use demo/test credentials for a public repository.

Admin

Username: sapanachaudhary120@gmail.com
Password: 12345

Registered Users

nishan@gmail.com
shahsagar0988@gmail.com

Password:

12345

🚀 How to Use

Student

Open the website.

Register for an account.

Log in using the registered account.

View available courses.

Select a course.

Enroll in the course.

View course content.

Admin

Open the website.

Log in using an Admin account.

Access course management.

Create a new course, or select an existing course.

Update or delete courses as required.

📂 Project Structure

The provided project documentation identifies the public entry point as public/index.php. The complete internal folder structure is not specified in the documentation.

A conceptual structure is:

OnlineCourseManagement/
├── public/
│   └── index.php
├── application/
├── system/
└── README.md

📚 Learning Outcomes

This project provided practical experience with:

Full-stack web application development

User registration and authentication

Login and logout functionality

Role-based functionality

Course management

Course enrollment

Course content access

Designing functionality for different types of users

✅ Conclusion

The Online Course Management System provides a web-based platform for managing and accessing online courses.

The system includes user authentication, role-based functionality, course management, course enrollment, and course-content access. Admin users manage courses, while students interact with courses through enrollment and content viewing.

This project demonstrates the development of a practical web-based system with separate functionality for administrative and student users.
