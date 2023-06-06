<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="mainStaffstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Aduan/Khidmat Nasihat</title>
</head>
<body>

    <div class="overflow-auto">

    <div class="header">
        <img src="newbanner.png" class="img-fluid">
    </div>

    <div class="sidebar">
        <a href="#home">Profil Pengguna</a>
        <a href="#news">Permohonan Perkahwinan</a>
        <a href="#contact">Pendaftaran Perkahwinan</a>
        <a href="optionInterface.php">Aduan/Khidmat Nasihat</a>
        <a href="#insentif">Insentif</a>
        <a href="#logout">Log Keluar</a>
    </div>

    <div class="content">
        <div class="p-2 mb-2 custom-bg-color text-white">
            <span class="h6">ADUAN/KHIDMAT NASIHAT</span>
        </div>
            <span id="dateTimeBadge" class="badge badge-primary" style="font-size: 25px"></span>
                <script>
                    // Function to update the date and time badge
                    function updateDateTimeBadge() {
                        var currentDate = new Date();
                        var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', hour: 'numeric', minute: 'numeric', second: 'numeric' };
                        var currentDateTime = currentDate.toLocaleString('en-US', options);
                        
                        document.getElementById('dateTimeBadge').textContent = currentDateTime;
                    }

                    // Update the date and time badge initially
                    updateDateTimeBadge();

                    // Update the date and time badge every second
                    setInterval(updateDateTimeBadge, 1000);
            </script>

            <br><br>

                <div class="d-flex align-items-start" style="background-color:white;">
                    <table class="table table-bordered border-dark">
                        <thead>
                            <tr>
                                <th style="text-align: center;" scope="col">S1<br>08:00 a.m - 10:00 a.m</th>
                                <th style="text-align: center;" scope="col">S2<br>11:00 a.m - 01:00 p.m</th>
                                <th style="text-align: center;" scope="col">S3<br>03:00 p.m - 05:00 p.m</th>
                            </tr>

                                <?php
                                    // Array containing schedule data
                                    $schedule = array(
                                        array("Details1", "Details2", "Details3"),
                                        array("Details4", "Details5", "Details6"),
                                        // Add more entries for each activity
                                    );

                                    // Generate table rows dynamically
                                    foreach ($schedule as $activity) {
                                        echo "<tr>";
                                        echo "<td>" . $activity[0] . "</td>";
                                        echo "<td>" . $activity[1] . "</td>";
                                        echo "<td>" . $activity[2] . "</td>";
                                        echo "</tr>";
                                    }
                                ?>
                    </table>
                </div>
    </div>
    </div>

</body>
</html>
