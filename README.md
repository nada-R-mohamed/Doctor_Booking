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
---

## 📬 API Endpoints (Overview)

| Method | Endpoint                              | Description                     | Auth |
|--------|---------------------------------------|---------------------------------|------|
| POST   | /api/appointments                     | Create new appointment (guest) | ❌   |
| POST   | /api/login                            | Doctor login (token)           | ❌   |
| GET    | /api/appointments                     | List all appointments          | ✅   |
| GET    | /api/appointments?status=pending      | Filter appointments by status  | ✅   |
| PATCH  | /api/appointments/{id}                | Approve or reject appointment  | ✅   |
| DELETE | /api/appointments/{id}                | Delete appointment             | ✅   |
| GET    | /api/appointments/export/pdf          | Export appointments as PDF     | ✅   |
| GET    | /api/appointments/export/excel        | Export appointments as Excel   | ✅   |
| GET    | /api/notifications                    | List unread notifications      | ✅   |
| PATCH  | /api/notifications/{id}/read          | Mark notification as read      | ✅   |


## 📦 Installation

```bash
git clone https://github.com/your-username/doctor-appointment-api.git
cd doctor-appointment-api
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
