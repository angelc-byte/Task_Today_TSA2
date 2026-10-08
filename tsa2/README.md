# Tasks for Today Management System TSA2

CodeIgniter 4 application completed for IT0049 Technical Summative Assessment 2. It extends the TSA1 task manager with validated full CRUD, authentication, protected management actions, and soft deletion.

## Required features

- Public Welcome, Task List, Profile, and About pages
- Login and logout with PHP password hashing and verification
- Session-based authentication and reusable `AuthFilter`
- Authenticated task creation, editing, updating, and archiving
- Validation for required title and task date fields
- Soft deletion through `is_archived`; archived tasks are excluded from public lists
- CSRF protection on POST forms
- Database migration, seeder, and SQL export

## Demo account

- Username: `angel`
- Password: `password123`

This is a demonstration account only.

## Local setup with XAMPP

1. Copy the project to `C:\xampp\htdocs\tasks-today-tsa2`.
2. Copy `.env.example` to `.env` and adjust the base URL or database credentials if needed.
3. Start Apache and MySQL in XAMPP.
4. Create/import the database using `database/tasks_today_tsa2.sql` in phpMyAdmin.
5. Open `http://localhost/tasks-today-tsa2/public/`.

The `writable` directory and its runtime subdirectories are included in the repository and ZIP. Do not delete them; CodeIgniter needs them to start.

Alternative migration workflow:

```bash
php spark migrate
php spark db:seed Tsa2Seeder
```

## Access-control verification

1. Log out, then visit `/tasks/new` or `/tasks/1/edit`; the application redirects to `/login`.
2. Log in using the demo account.
3. Create a task, edit it, and archive it.
4. Confirm the archived task disappears from both the Welcome page and Task List while remaining in the database with `is_archived = 1`.

## Submission contents

- Raw CodeIgniter project files
- `database/tasks_today_tsa2.sql`
- Migrations and `Tsa2Seeder`
- Setup and testing instructions in this README
- Completed TSA2 documentation: `docs/TOLENTINO_IT0049_TSA2_Completed.pdf` and editable `.docx`
- Actual test screenshots: `docs/screenshots/`

This continues the existing course repository. A hosted deployment is not required for this submission.

## Developer

Angel Clarise C. Tolentino
