#  <h1> 🍔 Online Food Ordering System</h1>

Welcome to the **Online Food Ordering System**! This project is a full-featured web-based application designed to simplify the food ordering process for users and efficiently manage orders for the admin.

https://github.com/user-attachments/assets/36a66724-4896-43ac-b76e-423be4c3519f





## <h2> 📋 Table of Contents</h2>
- [Introduction](#introduction)
- [Features](#features)
- [Technologies Used](#technologies-used)
- [Installation](#installation)
- [Usage](#usage)
- [Admin Panel](#admin-panel)
- [Future Enhancements](#future-enhancements)
- [Contributing](#contributing)
- [License](#license)

## <h2> 📝 Introduction</h2>

The **Online Food Ordering System** is designed to provide an easy and seamless way for users to browse food categories, search for specific dishes, and place orders. On the administrative side, admins can monitor and manage the food items, categories, orders, and customer details in real-time. This helps both users and admins to efficiently handle their activities without much hassle.

## <h2> ✨ Features</h2>

### <h3>User Side:</h3>
- **Browse Categories:** Users can explore different categories of food to find what they like.
- **Search for Food:** Users can quickly find specific dishes using the search functionality.
- **Place Orders:** Users can select the items and easily place an order.
- **View Order Status:** Users can check the status of their placed orders.

### <h3>Admin Side:</h3>
- **Manage Categories:** Admins can add, edit, or remove food categories.
- **Manage Food Items:** Admins have complete control over the list of foods available for users.
- **View Orders and Details:** Admins can view logs of all orders placed by users and monitor each order’s status.
- **Order Management:** Admins can update the order status (e.g., processing, completed, or canceled) and view details of each order such as what items were ordered and who placed the order.

##  <h2> 🛠️ Technologies Used</h2>

- **Frontend:** HTML, CSS, JavaScript
- **Backend:** PHP 
- **Database:** MySQL
- **Additional Libraries/Tools:** Bootstrap (for responsive design)

##  <h2> 🚀 Installation</h2>

1. **Clone the repository:**
   ```bash
   git clone https://github.com/Aymen016/Online-Food-Ordering-System.git
   cd Online-Food-Ordering-System
   
##  <h2> 📂 Set Up the Database</h2>

1. **Import the SQL File:**
   - Import the provided SQL file (`database.sql`) into your MySQL database using a tool like phpMyAdmin or MySQL Workbench.

2. **Update the Configuration:**
   - Update the database configuration settings in the backend PHP files (`db-config.php`) with your database credentials (e.g., hostname, username, password, database name).

3. **Start the Server:**
   - For local development, you can use a server like **XAMPP**, **WAMP**, or **MAMP**.
   - Place the cloned project folder in the server’s root directory (e.g., `htdocs` for XAMPP or `www` for WAMP).

4. **Access the System:**
   - Open your browser and navigate to: `http://localhost/Online-Food-Ordering-System/`.

## <h2> 💡 Usage</h2>

### <h3>For Users:</h3>
- **Browse Categories:** Explore the different food categories to find your favorite dishes.
- **Search for Food:** Use the search bar to quickly find a specific dish.
- **Place Orders:** Add items to your cart and complete your order.
- **View Order Status:** Keep track of your placed orders and their status.

### <h3>For Admin:</h3>
- **Log in to the Admin Panel:** Go to `/admin` in the URL to access the admin login page.
- **Password:** admin for user admin.
- **Manage Categories and Food Items:** Add, edit, or remove food categories and food items as needed.
- **Monitor Orders:** View the list of all placed orders and their details.
- **Update Order Status:** Change the order status to reflect the current state of each order.

## <h2> 🎯 Future Enhancements</h2>

- **User Registration and Login:** Allow users to create accounts and log in to view their order history.
- **Payment Gateway Integration:** Enable users to make payments securely online.
- **Order Notifications:** Implement real-time notifications for order updates.
- **Ratings and Reviews:** Allow users to rate and review dishes.

## <h2>  🤝 Contributing</h2>

We welcome contributions to the **Online Food Ordering System**! If you find any bugs or have suggestions for new features, please feel free to open an issue or submit a pull request.

### <h3>Steps to Contribute:</h3>
1. **Fork the repository** to your own GitHub account.
2. **Create a new branch** for your feature or bug fix:
   ```bash
   git checkout -b feature-branch
3. **Make your changes** to the code.
4. **Commit and push your changes** to your GitHub repository:
   ```bash
      git commit -m "Added new feature"
      git push origin feature-branch
5. **Submit a pull request** to the original repository.
