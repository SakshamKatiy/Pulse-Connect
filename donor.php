<?php
session_start();



// Include database connection file
include 'conn.php';

// Handle form submission to add blood bank information
if(isset($_POST['add_blood_bank'])) {
    $hospital_name = $_POST['hospital_name'];
    $blood_type = $_POST['blood_type'];
    $quantity = $_POST['quantity'];

    // Insert blood bank information into the database
    $insert_query = "INSERT INTO hospital_blood (hospital_name, blood_type, quantity) VALUES ('$hospital_name', '$blood_type', '$quantity')";
    $result = mysqli_query($conn, $insert_query);
    if($result) {
        echo '<script>alert("Blood bank information added successfully.");</script>';
    } else {
        echo '<script>alert("Failed to add blood bank information.");</script>';
    }
}

// Retrieve blood bank information from the database
$select_query = "SELECT * FROM hospital_blood";
$result = mysqli_query($conn, $select_query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor - Blood Bank Management</title>
    <style>
        body {
            background-image: url('https://static.vecteezy.com/system/resources/previews/001/879/514/original/people-donate-blood-to-hospital-emergency-services-transfusion-bag-with-heart-and-red-cross-symbol-doctor-check-health-of-patients-for-donor-illustration-for-business-card-banner-brochure-flyer-free-vector.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            font-family: Arial, sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        .container {
            max-width: 600px;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
            border-radius: 10px;
        }

        form {
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Donor - Blood Bank Management</h1>

        <!-- Form to add blood bank information -->
        <h2>Add Blood Bank Information</h2>
        <form method="POST">
            <label for="hospital_name">Hospital Name:</label><br>
            <input type="text" id="hospital_name" name="hospital_name" required><br>
            <label for="blood_type">Blood Type:</label><br>
            <select id="blood_type" name="blood_type" required>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select><br>
            <label for="quantity">Quantity (in units):</label><br>
            <input type="number" id="quantity" name="quantity" min="1" required><br><br>
            <button type="submit" name="add_blood_bank">Add Blood Bank Information</button>
        </form>

        <!-- Display blood bank information -->
        <h2>Blood Bank Information</h2>
        <table border="1">
            <tr>
                <th>Hospital Name</th>
                <th>Blood Type</th>
                <th>Quantity (in units)</th>
            </tr>
            <?php
            // Loop through each row of blood bank information
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>{$row['hospital_name']}</td>";
                echo "<td>{$row['blood_type']}</td>";
                echo "<td>{$row['quantity']}</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>

    <!-- Add your JavaScript code here -->
</body>
</html>
