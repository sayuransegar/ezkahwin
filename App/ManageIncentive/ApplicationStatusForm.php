<?php
include('../../BusinessServices/MODEL/db.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EZKahwin</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<link rel="stylesheet" href="../../../ezkahwin/public/css/styles.css">
	<style>
		/** * More sensible default box-sizing: * css-tricks.com/inheriting-box-sizing-probably-slightly-better-best-practice */
		html,
		body {
			box-sizing: border-box;
			font-family: 'Open Sans', sans-serif;
			margin: 0px;
			height: 100%;
		}

		*,
		*:before,
		*:after {
			box-sizing: inherit;
		}

		.site-header,
		.site-footer {
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.site-header {
			height: 180px;
			background-color: #e7eaed;
		}

		@media screen and (max-width: 799px) {
			.site-header {
				height: 100px;
			}
		}

		@media screen and (min-width: 800px) and (max-width: 998px) {
			.site-header {
				height: 140px;
			}
		}

		@media screen and (min-width: 999px) and (max-width: 1181px) {
			.site-header {
				height: 160px;
			}
		}



		.site-header img {
			width: 100%;
			height: 100%;

		}

		.site-header .gap {
			background: red;
			height: 20px;
			width: 100%;
		}

		.site-footer {
			background-color: #333536;
			height: 200px;
			color: #fff;
		}

		.content-area {
			display: flex;
			height: -webkit-fill-available;

			background-image: url('public\image\background.jpg');
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center;

		}

		.site-main {
			width: 100%;
			/*background-color: rgb(200 221 253);*/
			background: rgba(255, 255, 255, 0.5);


		}

		.sidebar-area {
			/*background-color: #217feb;*/
			background: rgba(255, 255, 255, 0.5);
			position: relative;
			width: 500px;
			border-right: 1.5px solid #5e5e5e;

		}

		.side-navigation.fixed {
			position: fixed;
			top: 0;
			width: 500px;

		}

		.side-navigation.bottom {
			position: absolute;
			bottom: 0;
			top: auto;
			width: 500px;
		}

		.side-navigation .menu {
			padding-top: 15px;
			list-style-type: none;
			padding-left: 10%;
			padding-right: 10%;
		}

		.side-navigation .menu-item {
			background-color: #ffffff;
			position: relative;
			border: 1px solid #cdcdd3;
		}

		.side-navigation .menu-item.active:before {
			/*background-color: #5dbaff;*/
			background-color: #93CB41;
			width: 100%;
		}

		.side-navigation .menu-item:before {
			content: '';
			position: absolute;
			top: 0;
			left: 0;
			bottom: 0;
			width: 0;
			/*background-color: #5dbaff;*/
			background-color: #93CB41;
			transition: width 0.3s ease-in;

		}

		.side-navigation .menu-item:hover:before {
			width: 100%;
		}

		.side-navigation .menu-item a {
			color: #4D4D53;
			text-decoration: none;
			position: relative;
			display: block;
			padding: 18px 20px;
			text-align: center;
		}

		.sidebar-area .userinfo {
			padding-top: 50px;
			padding-right: 50px;
			padding-left: 50px;
		}

		.sidebar-area .userinfo .box {
			display: flex;
			align-items: center;
			color: #4D4D53;
			padding-top: 20px;
		}

		.sidebar-area .userinfo .label {
			width: 50px;
		}

		.contentTitle {
			background-color: #93CB41;
			padding: 20px 20px;
			color: #ffffff;
			font-weight: 500;
			font-size: 20px;
		}


		.contentBox .desc {
			padding: 15px 20px;
		}

		.contentBox .desc .text {
			display: flex;
		}

		.contentBox .desc .number {
			padding-right: 15px;
		}

		.contentBox .desc p {
			font-size: 18px;
		}


		.btnGroup {
			display: flex;
			align-items: center;
			justify-content: center;
			padding: 30px;
		}


		.btnGroup .btn {
			outline: 0;
			border: 0px;
			background-color: #00387C;
			padding: 10px 20px;
			margin: 0px 5px;
			color: #ffffff;
			text-decoration: none;
			cursor: pointer;
		}
	</style>
</head>

<body>
	<?php include "../Component/header.php"; ?>

	<div class="container-fluid">
		<div class="row">
			<?php
            $activePage = 'insentif';
            include "../Component/sidebarStaff.php"; 
            ?>

			<div class="col-md-9 content">
				<div class="content-title bg-success text-white p-3">
					<h1 class="h3 m-0">Insentif</h1>
				</div>
				<div class="contentBox mt-3">
					<div class="desc">
						<main class="site-main" role="main" id="sitemain">

							<div class="contentBox">
								<div class="col-md-8">
									<div class="card">
										<div class="card-header bg-primary">
										</div>
										<div class="card-body">
											<div class="row">
												<div class="col-12">
													No. Kad Pengenalan / Passport
													<br />
													<form action="../../../ezkahwin/facade.php?process=search_button" method="POST">
														<div class="d-flex">
															<input type="text" class="form-control me-3 mt-2" style="width: 70%" />
															<button class="btn btn-primary" type="submit" name="search_button">CARIAN</button>
														</div>
												</div>
												<div class="col-12 mt-5">
													<table class="table table-striped">
														<thead>
															<th>NO</th>
															<th>NAMA PEMOHON</th>
															<th>NO IC</th>
															<th>TARIKH</th>
															<th>STATUS</th>
															<th>TINDAKAN</th>
														</thead>
														<tbody>
															<tr>
																<td>1</td>
																<td>Muhammad Azam bin Mahmood</td>
																<td>930201-06-0313</td>
																<td>28.12.2022</td>
																<td><b>PENDING</b></td>
																<td>
																	<i class="fa fa-search-plus" aria-hidden="true"></i>
																	<i class="fa fa-download" aria-hidden="true"></i>
																	<i class="fa fa-folder-open-o" aria-hidden="true"></i>
																	<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
																</td>
															</tr>
														</tbody>
													</table>


												</div>
											</div>
										</div>
									</div>

								</div>
								<div class="btnGroup">

									<a class="btn" href="ApplicantsListForm.php">HOME</a>

								</div>
						</main>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"></script>
</body>

</html>