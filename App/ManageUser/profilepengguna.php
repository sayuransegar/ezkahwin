<?php
  include('connect_db.php');
  session_start();
  
  $id = $_SESSION['id'];
  
  $query = "SELECT * FROM `user`";
  $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
  $count = mysqli_num_rows($result);


?>


<!DOCTYPE html>
<html>
  <head>
    <style>
  table, th, td{
			background-color:white;
			border-collapse: collapse;
			border: 2px solid #000000;
        	padding: 0.5em;
        	text-align: center;
			margin-left: auto;
  			margin-right: auto;
        }
		</style>
    <title>Profil Pengguna | EzKahwin </title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="profilemanage.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    />
    <style type="text/css">
      .action{
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 15px;
      }

      .action .item{
         text-decoration: none;
         cursor: pointer;
      }

      .action .item img{
        width: 25px;
      }

      .table-custom{
        width: 90%;
        margin-top: 15px;
        margin-bottom: 15px;
      }

      .table-custom p{
         margin: 0px;
      }

      .table-custom td, .table-custom th{
        border: 1px solid #000;
      }
    </style>
  </head>
  <body>
    <div class="page-parent">
      <img src="https://i.imgur.com/XRrwtZk.png" class="page-bg" width="100%" />
      <header>
        <img
          src="https://i.imgur.com/D3gqdM6.jpg"
          alt="e-Munakahat Header Image"
          class="header-img"
        />
      </header>
      <div class="main-page">
        <section class="side-nav-body">
          <h6>ID:<?php echo $_SESSION["icnum"] ?></h6>
          <h6>Nama:<?php echo $_SESSION["name"] ?></h6>
          <nav class="side-nav mt-5">
            <div class="side-nav-link">
              <h5>Profile Pengguna</h5>
            </div>
            <div class="side-nav-link">
              <a href="#">
                <p>Profile Pengguna</p>
              </a>
            </div>
            <div class="side-nav-link">
              <a href="#">
                <p>Permohonan Kursus Perkahwinan</p>
              </a>
            </div>
            <div class="side-nav-link">
              <a href="#">
                <p>Permohonan Perkahwinan</p>
              </a>
            </div>
            <div class="side-nav-link">
              <a href="#">
                <p>Pendaftaran Perkahwinan</p>
              </a>
            </div>
            <div class="side-nav-link">
              <a href="#">
                <p>Aduan/Khidmat Nasihat</p>
              </a>
            </div>
            <div class="side-nav-link">
              <a href="#">
                <p>Insentif</p>
              </a>
            </div>
            <div class="side-nav-link-bot">
              <a href="logout.php">
                <p>Log Keluar</p>
              </a>
            </div>
          </nav>
        </section>
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

                      if($count > 0){

                          $count = 1;
                          while($row = mysqli_fetch_assoc($result)) {

                              echo '<tr>
                                        <td>
                                           '.$count .'
                                        </td>
                                        <td class="text-start">
                                           <p>'.$row["icnum"].'</p>
                                           <p>'.$row["name"].'</p>
                                        </td>
                                        <td class="text-start">
                                           '.$row["email"].'
                                        </td>
                                        <td>
                                           User
                                        </td>
                                        <td>
                                           <div class="action">
                                              <a class="item">
                                                <img src="images/view.png" />
                                              </a>
                                              <a class="item">
                                                <img src="images/print.png" />
                                              </a>
                                              <a class="item" href="deletepenggunaController.php?did='.$row["id"].'" onclick="return confirm(\'Are you sure to delete data?\');">
                                                <img src="images/delete.png"  />
                                              </a>
                                              <a class="item" href="editpengguna.php?eid='.$row["id"].'">
                                                <img src="images/edit.png" />
                                              </a>
                                              
                                           </div>
                                        </td>
                                     </tr>';
                              
                              $count++;
                          }

                      }else{

                          echo "<tr><td colspan='10'>No Data</td></tr>";

                      } 

                   ?>

                  
              </tbody>
          </table>
        
        </section>

   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
