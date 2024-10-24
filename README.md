# N-A-Movies

N-A-Movies is a PHP-based web application that provides users with an engaging platform to explore and review movies. This repository contains the source code, assets, and documentation required to set up and run the application.

## Table of Contents

- [Features](#features)
- [Technologies Used](#technologies-used)
- [Installation](#installation)
- [Usage](#usage)
- [Running the Application](#running-the-application)
- [License](#license)
- [Contributing](#contributing)
- [Contact](#contact)

## Features

- User authentication and registration
- Browse and search for movies
- View detailed movie information
- User reviews and ratings
- Responsive design for mobile and desktop

## Technologies Used

- PHP
- MySQL
- HTML/CSS/JavaScript
- Live Ad Extension (for PHP)

## Installation

To set up the N-A-Movies application on your local machine, follow these steps:

1. **Clone the repository**:
   ```bash
   git clone https://github.com/NathanTrung/N-A-Movies.git
   cd N-A-Movies

2. **Install PHP and MySQL: Ensure that you have PHP and MySQL installed on your machine. You can install them using XAMPP or MAMP.

3. **Set up a database:

    Create a new MySQL database for the application.
    Import the provided SQL file (if available) to set up the required tables and data.

4. **Configure database connection: Update the database connection settings in the config.php file to match your local database credentials.

## Usage

Once the installation is complete, you can navigate to the project directory and start working with the application. You can access the project via your web server.

### Running the Application

To run the application using the PHP built-in server with the Live Ad extension, follow these steps:

    Ensure the Live Ad extension is installed and enabled: Make sure the Live Ad extension is installed in your PHP environment. You can check this by running:
    ```bash
    php -m | grep live_ad

Start the PHP built-in server: Run the following command in your terminal:
    ```bash
    php -S 0.0.0.0:3000

This command will start the PHP built-in server and make your application accessible at http://localhost:3000.

Access the application: Open your web browser and navigate to http://localhost:3000 to view the N-A-Movies application.

## License

This project is licensed under the MIT License. See the LICENSE file for details.

## Contributing

Contributions are welcome! If you would like to contribute to the project, please fork the repository and submit a pull request with your changes.

## Contact

For any inquiries or issues, please contact me at [nathantrung5@gmail.com].