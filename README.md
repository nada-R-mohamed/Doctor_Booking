# 🏥 Doctor Appointment Booking API

A RESTful API built with **Laravel 12** to manage online appointment bookings for doctors. Patients can request appointments without creating an account, while doctors can log in to view, filter, manage, and export booking data.

> This is an **API-only** backend – no frontend views are included. It's designed to be consumed by a separate frontend (React, Vue, or mobile app).

---

## 🚀 Features

- Public appointment request form (no login required)
- Doctor login with Sanctum authentication
- View, filter, approve, reject, and delete appointments
- Internal notification system for new appointments
- Export bookings to PDF and Excel
- Clean RESTful JSON API structure
- Built using Laravel best practices

---

## 🧱 Tech Stack

- **Laravel 12**
- **Laravel Sanctum** for authentication
- **Eloquent ORM**
- **Laravel Excel** & **DomPDF** for exports
- **MySQL** or **SQLite**
- Fully RESTful API (no Blade)

---

## 📦 Installation

```bash
git clone https://github.com/your-username/doctor-appointment-api.git
cd doctor-appointment-api
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
