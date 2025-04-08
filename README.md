# Laravel REST API (Blog API)

A simple RESTful API built using Laravel. This project includes:

- ✅ Post listing with pagination (10 per page)
- ✅ API authentication using Sanctum
- ✅ Admin notification (via email) on new post creation
- ✅ Laravel Events & Listeners for notifications

## 🚀 Setup Instructions

1. Clone or download this repo.
2. Run `composer install`.
3. Set up `.env` file and database.
4. Run migrations: `php artisan migrate`
5. Start server: `php artisan serve`
6. Use Sanctum token to access secured API routes.

## 🔐 API Endpoints

| Method | URI         | Description         |
|--------|-------------|---------------------|
| GET    | `/api/posts`| List posts (paginated) |
| POST   | `/api/posts`| Create new post (auth required) |

## 🧩 Notifications

When a new post is created, a `PostCreated` event is fired, and an email is sent to the admin via a Listener.

## 🗃️ Database

Use the provided `laravel.sql` or run Laravel migrations.

---

Made with ❤️ using Laravel 11.
