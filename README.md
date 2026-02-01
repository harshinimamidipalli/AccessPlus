# AccessPlus – Event Registration Web Application

AccessPlus is a simple PHP & MySQL based web application developed that allows users to register for different college fest events and enables an admin view to retrieve and display all registrations.

---

## 🚀 Features

- Multiple event registration pages
- Dynamic form handling using PHP
- Data insertion and retrieval using MySQL
- Admin page to view all registrations
- Simple and clean UI using Bootstrap
- Hosted on Microsoft Azure (Ubuntu VM)

---

## 🛠️ Tech Stack

- **Frontend:** HTML, CSS, Bootstrap
- **Backend:** PHP
- **Database:** MySQL
- **Server:** Apache (Ubuntu)
- **Cloud Hosting:** Microsoft Azure VM

---

## ⚙️ How It Works

1. User selects an event from the home page.
2. Event-specific registration form is displayed.
3. User fills the form and submits.
4. Data is inserted into MySQL database using PHP.
5. Admin can view all registrations on `view.php`.

---

## 🗄️ Database Details

- **Database Name:** `accessplus_db`
- **Table Name:** `registrations`

Table stores:
- Name
- USN
- Semester
- Branch
- Email
- Volunteer preference
- Team size
- Event name
- Event-specific details
- Timestamp

---

## 🌐 Live Deployment (Azure)

- **Home Page:**  
  `http://<VM_PUBLIC_IP>/accessplus`

- **Admin View:**  
  `http://<VM_PUBLIC_IP>/accessplus/view.php`

---

## 👩‍💻 Author

**Harshini Mamidipalli**  
