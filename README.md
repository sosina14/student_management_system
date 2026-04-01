# 📘 Student Management System (Laravel Project)

## 🧾 Project Description

The **Student Management System** is a web-based application developed using the Laravel framework. Its purpose is to manage student records efficiently by allowing users to perform basic operations such as adding, viewing, updating, and deleting student information.

This system follows the **CRUD (Create, Read, Update, Delete)** principle and uses Laravel’s MVC (Model-View-Controller) architecture to separate the application logic, user interface, and data handling.

---

## 🎯 Main Objective

The main goal of this project is to:

* Learn how Laravel works in real applications
* Understand CRUD operations
* Practice database integration and backend development

---

## ⚙️ Technologies Used

* **Laravel (PHP Framework)** — backend logic
* **MySQL / SQLite** — database
* **Blade Templates** — frontend views
* **Bootstrap (optional)** — styling

---

## 🧩 System Features

### ✅ 1. Add Student (Create)

Users can fill out a form to add a new student with:

* Name
* Email
* Course
* Enrollment Date

The system validates the input before saving it to the database.

---

### ✅ 2. View Students (Read)

* Displays all students in a table format
* Shows all stored records from the database

---

### ✅ 3. Edit Student (Update)

* Users can modify existing student information
* Form is pre-filled with current data

---

### ✅ 4. Delete Student (Delete)

* Users can remove a student record
* The system deletes it permanently from the database

---

## 🧠 How the System Works (Flow)

1. User interacts with the interface (forms/buttons)
2. Request goes to the **Controller**
3. Controller communicates with the **Model**
4. Model interacts with the **Database**
5. Response is returned to the **View (Blade)**
6. User sees updated results

---

## 🏗️ Architecture Used

The system follows **MVC Architecture**:

* **Model (Student Model)** → Handles database data
* **View (Blade Files)** → Displays UI
* **Controller (StudentController)** → Controls logic


