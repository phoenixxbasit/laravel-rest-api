# Laravel Task REST API

## Overview

This Laravel project serves as a REST API for managing tasks. It provides CRUD (Create, Read, Update, Delete) operations for tasks through a well-defined API.

## Project Structure
- **app/Http/Controllers/TaskController.php:** Controller responsible for handling task-related API endpoints.
- **app/Models/Task.php:** Model representing the Task entity.
- **database/migrations/YYYY_MM_DD_create_tasks_table.php:** Database migration for creating the tasks table.
- **routes/api.php:** API route definitions.
- **tests/Feature/TaskTest.php:** PHPUnit test cases for the Task API.

## API Endpoints

### 1. List all Tasks

```http
GET /api/tasks
```

Returns a JSON array of all tasks.

### 2. Get a Task by ID

```http
GET /api/tasks/{task}
```

Returns a JSON object representing a specific task.

### 3. Create a New Task

```http
POST /api/tasks
```

Creates a new task with the provided data. Requires a JSON payload with `title` and `description` fields.

### 4. Update an Existing Task

```http
PUT /api/tasks/{task}
```

Updates an existing task identified by `{task}`. Requires a JSON payload with `title` and `description` fields.

### 5. Delete a Task

```http
DELETE /api/tasks/{task}
```

Deletes an existing task identified by `{task}`.

## Installation and Local Setup

Follow these steps to set up the Laravel project locally:

1. **Clone the Repository:**

   ```bash
   git clone https://github.com/phoenixxbasit/laravel-rest-api.git .
   ```

2. **Install Dependencies:**

   ```bash
   composer install
   ```

3. **Set Up Environment:**

   Copy the `.env.example` file to `.env` and configure your database settings.

   ```bash
   cp .env.example .env
   ```

4. **Generate Application Key:**

   ```bash
   php artisan key:generate
   ```

5. **Run Migrations:**

   ```bash
   php artisan migrate
   ```

6. **Start the Laravel Development Server:**

   ```bash
   php artisan serve
   ```

   Open your browser and navigate to [http://localhost:8000](http://localhost:8000) to access the API.

## Contribution Guidelines

> [!Important]
> We welcome and appreciate contributions from the community! <br>
> Please ensure that your contributions adhere to the existing coding standards, include appropriate tests, and provide clear documentation.
