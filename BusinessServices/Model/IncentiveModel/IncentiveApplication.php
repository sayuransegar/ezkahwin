<?php
// model.php
class Model {
    private $db;

    public function __construct() {
        // Replace 'hostname', 'username', 'password', and 'database' with your actual database credentials
        $this->db = new mysqli('localhost', 'root', '', 'pemohon_db');

        if ($this->db->connect_error) {
            die('Connection failed: ' . $this->db->connect_error);
        }
    }

    public function saveData($ic_number, $name, $birth_date, $birth_place, $address, $phone_number) {
        // $ic_number = $data['ic_number'];
        // $name = $data['name'];
        // $birth_date = $data['birth_date'];
        // $birth_place = $data['birth_place'];
        // $address = $data['address'];
        // $phone_number = $data['phone_number'];

        // Prepare and bind the SQL statement
        $stmt = $this->db->prepare("INSERT INTO pemohon (ic_num, name, birth_date, birth_place, address, phone_number) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $ic_number, $name, $birth_date, $birth_place, $address, $phone_number);

        // Execute the prepared statement
        if ($stmt->execute()) {
            ?> <script>
                alert("Successfully saved");
                window.location.href = "App/ManageIncentive/ApplicationRuleForm.php";
            </script><?php
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement and database connection
        $stmt->close();
        $this->db->close();
    }
}
?>
