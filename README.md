# 🏠 PG Finder – Laravel + Vue/React (WG-Gesucht Style)

A modern PG (Paying Guest) search and listing platform , inspired by WG-Gesucht. Built with **Laravel (API backend)** and **Vue 3 or React (frontend)**.

---

## 🚀 Features

- 🧑‍💼 Roles: Tenant, Landlord, Admin
- 🔐 Auth: Register / Login / Logout with Sanctum
- 🏠 Listings: Add/Edit/Delete PG listings with photos and filters
- 🔎 Search: Filter by city, price, availability, amenities
- 💬 Messages: Contact landlords (optional)
- ❤️ Favorites: Save PGs for later
- 📊 Admin Panel: Manage users and listings

---

## 🛠 Tech Stack

- **Backend:** Laravel 10+, Sanctum, MySQL
- **Frontend:** Vue 3 + Tailwind CSS *(or React + Tailwind)*
- **API Auth:** Laravel Sanctum
- **Image Uploads:** Laravel File Storage

---

## 📁 Project Structure

/pg-finder-platform
├── /backend # Laravel API
└── /frontend # Vue or React frontend

## ⚙️ Setup Instructions
1. Clone the Repository - ```bash
git clone https://github.com/your-username/pg-finder.git
cd pg-finder
2. Backend – Laravel Setup
cd backend
# Install dependencies
composer install

# Copy env file & generate key
cp .env.example .env
php artisan key:generate

# Configure DB credentials in .env
# Then run migrations
php artisan migrate

# (Optional) Seed test data
php artisan db:seed

# Serve Laravel API
php artisan serve

3. Frontend – Vue or React Setup
   cd ../frontend

# Install Node modules
npm install

# Start dev server
npm run dev

** Make sure the .env file includes the backend API URL(VITE_API_URL=http://localhost:8000/api) **


** Todo / Future Features **
✅ Basic tenant & landlord dashboard
✅ Search + filter system
⏳ Google Maps location integration
⏳ Admin moderation tools
⏳ Messaging/chat module

## Pull requests welcome! Feel free to fork and suggest improvements.
