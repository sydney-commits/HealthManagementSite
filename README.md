# 🏥 Health Management Website

This site is available online via the link : https://athomecare.co.ke/

> Health Management Website is a Laravel-based platform designed to help users manage and monitor their health metrics, set health goals, and track their wellness journey.

---

## 🌟 Features

- **🔐 User Authentication**: Secure login and registration system.
- **❤️ Health Metrics**: Log and track various health metrics like weight, calorie intake, steps walked, etc.
- **🎯 Goal Setting**: Users can set and monitor health-related goals.
- **📊 Reports**: Visual representations of health trends over time.
- **🔔 Notifications**: Reminders for medical appointments, medication, etc.

---

## 🛠 Prerequisites

Before you begin, ensure you have met the following requirements:

- 🐘 **PHP** >= 7.3 (or whatever your project requires)
- 🎵 **Composer** - Dependency manager for PHP.
- 🌐 **Node.js** and **npm** (for compiling assets)
- 📂 **MySQL** (or any other database system you're using)

---

## ⚙️ Setup & Installation

1. **📂 Clone the Repository**:

   ```bash
   git clone https://github.com/sydney-commits/HealthManagementSite.git
   cd HealthManagementSite

🎵 Install Composer Dependencies:

composer install

🌐 Install NPM Dependencies:

npm install



cp .env.example .env
🔐 Generate Application Key:

php artisan key:generate
📂 Set Database Information:

Open the .env file and set your database information.

📈 Run Migrations and Seeders :

php artisan migrate --seed
🌐 Compile Assets:


npm run dev
🚀 Start the Local Development Server:


php artisan serve
You should now be able to access the application at http://localhost:8000.
