<?php
class IncentiveProfile {
    private $db;

    public function __construct() {
        // Replace 'hostname', 'username', 'password', and 'database' with your actual database credentials
        $this->db = new mysqli('localhost', 'root', '', 'pemohon_db');

        if ($this->db->connect_error) {
            die('Connection failed: ' . $this->db->connect_error);
        }
    }

    public function saveData($ic_number, $name, $birth_date, $birth_place, $address, $phone_number) {
        // Prepare and bind the SQL statement
        $stmt = $this->db->prepare("INSERT INTO pemohon (ic_number, name, birth_date, birth_place, address, phone_number) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $ic_number, $name, $birth_date, $birth_place, $address, $phone_number);

        // Execute the prepared statement
        if ($stmt->execute()) {
            echo '<script>
                alert("Successfully saved");
                window.location.href = "ApplicationRuleForm.html";
            </script>';
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement and database connection
        $stmt->close();
        $this->db->close();
    }

    public function searchData($ic_number) {
        // Prepare the SQL statement
        $stmt = $this->db->prepare("SELECT * FROM pemohon WHERE ic_number = ?");
        $stmt->bind_param("s", $ic_number);

        // Execute the prepared statement
        if ($stmt->execute()) {
            echo '<script>
                alert("Successfully retrieved data");
                window.location.href = "ApplicantsListForm.html";
            </script>';
        } else {
            echo "Error: " . $stmt->error;
        }

        // Get the result
        $result = $stmt->get_result();

        // Fetch the data into an associative array
        $data = $result->fetch_assoc();

        // Close the statement
        $stmt->close();

        // Return the fetched data
        return $data;
    }
}
?>
