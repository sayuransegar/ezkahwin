</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Header and Sidebar Example</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="public/css/styles.css">
</head>

<body>
    <?php include "App/Component/header.php"; ?>

    <div class="container-fluid">
        <div class="row">
            <?php include "App/Component/sidebar.php"; ?>

            <div class="col-md-9 content">
                <div class="content-title bg-primary text-white p-3">
                    <h1 class="h3 m-0">Aduan/Khidmat Nasihat</h1>
                </div>
                <div class="contentBox mt-3">
                    <div class="desc">
                        <span id="dateTimeBadge" class="badge badge-primary" style="font-size: 25px"></span>
                        <script>
                            // Function to update the date and time badge
                            function updateDateTimeBadge() {
                                var currentDate = new Date();
                                var options = {
                                    weekday: 'long',
                                    year: 'numeric',
                                    month: 'long',
                                    day: 'numeric',
                                    hour: 'numeric',
                                    minute: 'numeric',
                                    second: 'numeric'
                                };
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
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"></script>
</body>

</html>