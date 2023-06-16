<?php
include('../../BusinessServices/Model/db.php');
require_once 'C:\xampp\htdocs\ezkahwin\BusinessServices\controllers\MANAGEUSERCONTROLLER\profilepenggunaController.php';
session_start();

if (isset($_COOKIE['staff_data'])) {
    $userArray = json_decode($_COOKIE['staff_data'], true);
    $id = $userArray['sid'];
}

//   $query = "SELECT * FROM `user`";
//   $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
//   $count = mysqli_num_rows($result);
$userData = new allUserData();
$users = $userData->getUsersData();

?>

<head>
    <style>
        table,
        th,
        td {
            background-color: white;
            border-collapse: collapse;
            border: 2px solid #000000;
            padding: 0.5em;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Header and Sidebar Example</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../../../ezkahwin/public/css/styles.css">
    <style type="text/css">
        .action {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
        }

        .action .item {
            text-decoration: none;
            cursor: pointer;
        }

        .action .item img {
            width: 25px;
        }

        .table-custom {
            width: 90%;
            margin-top: 15px;
            margin-bottom: 15px;
        }

        .table-custom p {
            margin: 0px;
        }

        .table-custom td,
        .table-custom th {
            border: 1px solid #000;
        }
    </style>
</head>

<body>
    <?php include "../Component/header.php"; ?>

    <div class="container-fluid">
        <div class="row">
            <?php
            $activePage = 'profil';
            include "../Component/sidebarStaff.php";
            ?>

            <div class="col-md-9 content">
                <div class="content-title bg-primary text-white p-3">
                    <h1 class="h3 m-0">Pendaftaran Baharu</h1>
                </div>
                <div class="contentBox mt-3">
                    <div class="desc">
                        <section class="edit-profile-body">
                            <h1>Senarai Pengguna</h1>

                            <table class="table-custom">
                                <thead>
                                    <tr>
                                        <th>
                                            NO
                                        </th>
                                        <th class="text-start">
                                            NO IC/NAMA SUAMI
                                        </th>
                                        <th class="text-start">
                                            EMAIl PENGGUNA
                                        </th>
                                        <th>
                                            PERANAN
                                        </th>
                                        <th>
                                            TINDAKAN
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    if (!empty($users)) {
                                        $count = 1;
                                        foreach ($users as $user) {
                                            echo '<tr>
                                                    <td>' . $count . '</td>
                                                    <td class="text-start">
                                                        <p>' . $user["icnum"] . '</p>
                                                        <p>' . $user["name"] . '</p>
                                                    </td>
                                                    <td class="text-start">' . $user["email"] . '</td>
                                                    <td>User</td>
                                                    <td>
                                                        <div class="action">
                                                            <a class="item">
                                                                <img src="../../../ezkahwin/public/Images/view.png" />
                                                            </a>
                                                            <a class="item">
                                                                <img src="../../../ezkahwin/public/Images/print.png" />
                                                            </a>
                                                            <a class="item" href="deletepenggunaController.php?did=' . $user["id"] . '" onclick="return confirm(\'Are you sure to delete data?\');">
                                                                <img src="../../../ezkahwin/public/Images/delete.png"  />
                                                            </a>
                                                            <a class="item" href="editpengguna.php?eid=' . $user["id"] . '">
                                                                <img src="../../../ezkahwin/public/Images/edit.png" />
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>';
                                            $count++;
                                        }
                                    } else {
                                        echo "<tr><td colspan='5'>No Data</td></tr>";
                                    }
                                    ?>


                                </tbody>
                            </table>

                        </section>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"></script>
</body>

</html>