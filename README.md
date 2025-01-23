# Project Title
Edu-Course

## Description
Edu-Course is a Laravel-based application designed to manage and deliver educational courses. It features user authentication, a modern design, and the ability to generate PDF documents for course materials.

## Features
- **Authentication**: User registration, login, and password reset using Laravel Breeze.
- **Design**: Responsive and modern UI with Tailwind CSS and Flowbite UI components.
- **PDF Generation**: Create and download course materials as PDF files using Laravel-DOMPDF.

## Technologies Used
- **Backend Framework**: [Laravel](https://laravel.com/)
- **Authentication**: [Laravel Breeze](https://laravel.com/docs/8.x/starter-kits#breeze)
- **Styling**: [Tailwind CSS](https://tailwindcss.com/)
- **UI Components**: [Flowbite UI](https://flowbite.com/)
- **PDF Generation**: [Laravel-DOMPDF](https://github.com/barryvdh/laravel-dompdf)

## Installation Guide
1. Clone the repository:
    ```bash
    git clone https://github.com/RAFazarikha/edu-course.git
    cd edu-course
    ```
2. Install dependencies:
    ```bash
    composer install
    npm install
    ```
3. Copy the `.env.example` file to `.env` and configure your environment variables:
    ```bash
    cp .env.example .env
    ```
4. Generate an application key:
    ```bash
    php artisan key:generate
    ```
5. Run the migrations:
    ```bash
    php artisan migrate
    ```
6. Start the development server:
    ```bash
    php artisan serve
    npm run dev
    ```

## Usage Instructions
1. Register or log in to the application.
2. Browse available courses and enroll in the ones you are interested in.
3. Access course materials and download them as PDF files.
4. Manage your profile and track your progress.

## Contributing
Contributions are welcome! Please follow these steps:
1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Make your changes and commit them (`git commit -m 'Add new feature'`).
4. Push to the branch (`git push origin feature-branch`).
5. Open a pull request.

## License
This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.