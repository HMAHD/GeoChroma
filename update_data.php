<?php
// Database connection code here (e.g., using PDO or mysqli)

// Function to fetch districts data from the database
function getDistrictsData()
{
    // Replace 'your_database_name', 'your_username', 'your_password', and 'your_host' with the actual database credentials
    $conn = new PDO("mysql:host=localhost;dbname=sample", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "SELECT * FROM districts";
    $stmt = $conn->prepare($query);
    $stmt->execute();

    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

// Function to update district value in the database
function updateDistrictValue($id, $value)
{
    // Replace 'your_database_name', 'your_username', 'your_password', and 'your_host' with the actual database credentials
    $conn = new PDO("mysql:host=localhost;dbname=sample", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "UPDATE districts SET value = :value WHERE id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id', $id, PDO::PARAM_STR);
    $stmt->bindParam(':value', $value, PDO::PARAM_INT);
    $stmt->execute();
}

// Update district value if the form is submitted
if (isset($_POST['update'])) {
    $id = $_POST['district'];
    $value = $_POST['value'];
    updateDistrictValue($id, $value);
}

// Fetch districts data from the database
$data = getDistrictsData();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update District Data</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f8f9fa;
        }

        /* Add styling for the form */
        .update-form {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
        }

        .form-control {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .update-btn {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Add styling for the "Back to Map" link */
        .back-to-map {
            text-align: center;
            margin-top: 20px;
        }

        .back-to-map a {
            color: #007bff;
            text-decoration: none;
        }

        /* Add styling for the footer */
        footer {
            background-color: #007bff;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="update-form">
            <h3 class="mb-4">Update District Data</h3>
            <form action="" method="post">
                <div class="form-group">
                    <label for="district-select">Select District:</label>
                    <select class="form-control" id="district-select" name="district">
                        <?php foreach ($data as $district) : ?>
                            <option value="<?php echo $district['id']; ?>">
                                <?php echo $district['name']; ?> (ID: <?php echo $district['id']; ?>)
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="value-input">Value:</label>
                    <input type="number" class="form-control" id="value-input" name="value" value="0">
                </div>
                <button type="submit" class="update-btn" name="update">Update</button>
            </form>
            <div class="back-to-map">
                <a href="index.html">Back to Map</a>
            </div>
        </div>
    </div>

    <!-- Add Bootstrap JS (required for dropdown functionality) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Add additional custom scripts if needed -->
</body>
<footer>
    <!-- Footer content (if any) -->
</footer>
</html>
