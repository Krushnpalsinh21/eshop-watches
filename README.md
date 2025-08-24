# E-Shop-Watches
# Overview
Welcome to this E-shop for watches, a full-stack project developed using PHP and MySQL. This project aims to recreate the experience of a watch e-commerce website, inspired by brands like DKNY. It offers various features for both customers and administrators, all integrated with a MySQL database.

# Project Features
 - User Authentication: Users can log in to their accounts or register if they don't have one.
 - Profile Management: Registered users can update their profiles with personal information.
 - Administrator Privileges: Administrators have additional features such as adding, editing, and deleting products from the inventory.
 - Database Integration: All functionalities are connected to the MySQL database, ensuring data integrity and consistency.
 -Feel free to explore the website and its features! Enjoy your shopping experience!
# Requirements
 - XAMPP installed on your system.
# Setup Instructions
Follow these steps to run the project locally:

1. `Install XAMPP:`
- Download and install XAMPP from the official website.
2. `Start XAMPP:`
- Launch the XAMPP Control Panel.
- Start the Apache and MySQL servers.
3. `Troubleshooting MySQL Error:`
- If you encounter a MySQL shutdown error, ensure there are no other MySQL instances running.
- Stop any conflicting MySQL instances using the services management tool (Windows) or terminal commands (Linux/macOS).
  - Stop MySQL Service (Windows):
  - Press Win + R to open the Run dialog.
  - Type services.msc and press Enter to open the Services window.
  - Look for a service named "MySQL" or "MySQL Server" in the list.
  - Right-click on it and select "Stop" to stop the MySQL service.
4. `Access phpMyAdmin:`
- Open your web browser and navigate to http://localhost/phpmyadmin.
5. `Import Database:`
- Create a new database named your_database_name.
- Import the provided SQL file (schema.sql) into the newly created database.
6. `Move Project Files:`
- Place the project folder inside the htdocs directory of your XAMPP installation.
7. `Access the Project:`
- Open your web browser and enter http://localhost/your_project_folder_name in the address bar.
- Replace your_project_folder_name with the actual name of your project folder.
# Technologies Used
- MySql
- PHP
- Hack
- HTML
- CSS
# Contributors
- Zgjim Zhubaj
# License
This project is licensed under the MIT License.
