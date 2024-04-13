<?php
session_start();

// Include database connection file
include 'conn.php';

// Retrieve blood bank information from the database
$select_hospitals_query = "SELECT DISTINCT hospital_name FROM hospital_blood";
$hospitals_result = mysqli_query($conn, $select_hospitals_query);

// Retrieve blood bank information including hospital names from the database
$select_query = "SELECT * FROM hospital_blood";
$result = mysqli_query($conn, $select_query);

// Handle form submission for receiver details
if(isset($_POST['buy_blood'])) {
    // Retrieve receiver details from the form
    $receiver_name = $_POST['receiver_name'];
    $receiver_email = $_POST['receiver_email'];
    $blood_type_requested = $_POST['blood_type_requested'];
    $quantity_requested = $_POST['quantity_requested'];
    $hospital_requested = $_POST['hospital_requested'];

    // Insert receiver details into a table (you need to create this table)
    $insert_query = "INSERT INTO receiver_details (receiver_name, receiver_email, blood_type_requested, quantity_requested, hospital_requested) VALUES ('$receiver_name', '$receiver_email', '$blood_type_requested', '$quantity_requested', '$hospital_requested')";
    $insert_result = mysqli_query($conn, $insert_query);
    if($insert_result) {
        echo '<script>alert("Receiver details submitted successfully. We will contact you soon.");</script>';
    } else {
        echo '<script>alert("Failed to submit receiver details.");</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receiver - Blood Bank Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
            background-image: url('https://static.vecteezy.com/system/resources/previews/008/191/708/non_2x/human-blood-donate-and-heart-rate-on-white-background-free-vector.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8); /* Adding opacity to make content readable */
            border-radius: 8px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .form-container {
            margin-top: 30px;
            padding: 20px;
            border-radius: 8px;
            background-color: rgba(255, 255, 255, 0.8); /* Adding opacity to make content readable */
        }

        .form-container label {
            display: block;
            margin-bottom: 10px;
        }

        .form-container input[type="text"],
        .form-container input[type="email"],
        .form-container select,
        .form-container input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .form-container button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-container button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Receiver - Blood Bank Information</h1>

        <!-- Display blood bank information -->
        <h2>Available Blood in Respective Hospitals</h2>
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

        <!-- Receiver details form -->
        <div class="form-container">
            <h2>Provide Receiver Details to Buy Blood</h2>
            <form method="POST">
                <label for="receiver_name">Receiver Name:</label>
                <input type="text" id="receiver_name" name="receiver_name" required>

                <label for="receiver_email">Receiver Email:</label>
                <input type="email" id="receiver_email" name="receiver_email" required>

                <label for="hospital_requested">Select Hospital:</label>
                <select id="hospital_requested" name="hospital_requested" required>
                    <?php
                    // Populate hospital names in the dropdown
                    while ($hospital = mysqli_fetch_assoc($hospitals_result)) {
                        echo "<option value='{$hospital['hospital_name']}'>{$hospital['hospital_name']}</option>";
                    }
                    ?>
                </select>

                <label for="blood_type_requested">Blood Type Requested:</label>
                <select id="blood_type_requested" name="blood_type_requested" required>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                </select>

                <label for="quantity_requested">Quantity Requested (in units):</label>
                <input type="number" id="quantity_requested" name="quantity_requested" min="1" required>

                <button type="submit" name="buy_blood">Submit Receiver Details</button>
            </form>
        </div>
    </div>

    <!-- Add your JavaScript code here -->
</body>
</html>

