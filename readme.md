# Sri Lanka Districts Map Project

<br/>
<div align="center">

[![cover-image](https://i.ibb.co/sWYGYLP/interactive-SVG-map-of-Sri-Lanka-s-districts-2.png)](#)

</div>
<br/>

This project aims to create an interactive SVG map of Sri Lanka's districts and dynamically color each district based on its corresponding value from a MySQL database. The map will be hosted on a shared hosting platform, and the colors of the districts will be updated periodically based on the data retrieved from the database.

## Table of Contents

- [Technologies Used](#technologies-used)
- [Project Overview](#project-overview)
- [Getting Started](#getting-started)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
- [Database Setup](#database-setup)
- [Data Retrieval and Map Coloring](#data-retrieval-and-map-coloring)
- [SVG Map](#svg-map)
- [Hosting](#hosting)
- [Project Structure](#project-structure)
- [Contributing](#contributing)
- [License](#license)

## Technologies Used

- HTML
- CSS
- JavaScript
- MySQL
- SVG

## Project Overview

This project creates an SVG map of Sri Lanka with districts outlined. Each district is color-coded based on its corresponding value retrieved from a MySQL database. The map is hosted on a shared hosting platform, and the colors of the districts are periodically updated based on the data stored in the database.

## Getting Started

### Prerequisites ⭐

To run this project, you need the following prerequisites:

1. Web browser (e.g., Google Chrome, Mozilla Firefox)
2. Text editor or Integrated Development Environment (IDE) for code editing
3. Access to a MySQL database server
4. Basic knowledge of HTML, CSS, JavaScript, and SQL

### Installation 🔋

1. Clone the project repository to your local machine:

```bash
git clone https://github.com/your-username/sri-lanka-districts-map.git
```

### Database Setup ⚙️

- Connect to your MySQL database using a tool like MySQL Workbench or the MySQL command-line client.
- Create a new database (if it doesn't exist):

```sql
CREATE DATABASE your_database_name;
```

- Create the districts table to store district data:

```sql

CREATE TABLE districts (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    value INT NOT NULL
);
```

- Insert initial data into the districts table using the provided SQL script or your own data.

2. Update PHP Script

- In the **get_districts.php** file, replace the database connection details **(hostname, username, password, and database name)** with your actual credentials.

3. Host the Project

- Upload all project files (HTML, CSS, JavaScript, PHP, and SVG) to your web server.

## Data Retrieval and Map Coloring 🪝

The project uses JavaScript to fetch data from the MySQL database via a PHP script (`get_districts.php`). The data is then used to update the colors of the SVG map's districts based on their corresponding values.

The `fetchData()` function in `script.js` is responsible for retrieving data from the database and calling the `updateMapColors(data)` function to color the districts.

## SVG Map 🗺️

The SVG map (`lkmap.svg`) contains the outlines of Sri Lanka's districts. Each district has a unique `id` attribute that corresponds to the `id` in the database. The `id` is used to match the fetched data with the correct district in the SVG map.

## Hosting 🧊

To host the project on a shared hosting platform, follow these steps:

1. Upload all project files (HTML, CSS, JavaScript, PHP, and SVG) to the shared hosting server.

2. Ensure that the necessary PHP settings and modules are enabled on the hosting server to handle database connections and data retrieval.

3. Schedule periodic updates for the data retrieval process, either through a cron job or a custom solution using JavaScript intervals.

## Project Structure 🏗️

The project directory contains the following files:

- `index.html`: The main HTML file that displays the SVG map and includes the JavaScript code.
- `styles.css`: CSS styles for the SVG map and other page elements.
- `script.js`: JavaScript code responsible for fetching data, updating map colors, and periodic data updates.
- `lkmap.svg`: SVG map file containing the outlines of Sri Lanka's districts.
- `get_districts.php`: PHP script for fetching data from the MySQL database.

## Contributing 🫂

Contributions to this project are welcome. If you find any issues or have suggestions for improvements, feel free to create a pull request or raise an issue in the project repository.

## License 🎴

This project is licensed under the **MIT License**. You can find the details in the LICENSE file.
