<!-- partner.php -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>e-Munakahat</title>
	<style>


/** * More sensible default box-sizing: * css-tricks.com/inheriting-box-sizing-probably-slightly-better-best-practice */
 html, body {
	 box-sizing: border-box;
	 font-family: 'Open Sans', sans-serif;
	 margin: 0px;
	 height: 100%; 
}
 *, *:before, *:after {
	 box-sizing: inherit;
}
 .site-header, .site-footer {
	 display: flex;
	 justify-content: center;
	 align-items: center;
}
 .site-header {
	 height: 180px;
	 background-color: #e7eaed;
}

@media screen and (max-width: 799px){
	.site-header {
		 height: 100px;
	 }
}

@media screen and (min-width: 800px) and (max-width: 998px){
	.site-header {
		 height: 140px;
	 }
}

@media screen and (min-width: 999px) and (max-width: 1181px){
	 .site-header {
		 height: 160px;
	 }
}



 .site-header img{
	 width: 100%;
	 height: 100%;
	 
 }

 .site-header .gap{
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

	 background-image: url('image/background.jpg');
	 background-repeat: no-repeat;
	 background-size: cover;
	 background-position: center;

}
 .site-main {
	 width: 100%;
	 /*background-color: rgb(200 221 253);*/
	 background: rgba(255,255,255,0.5);


}
 .sidebar-area {
	 /*background-color: #217feb;*/
	 background: rgba(255,255,255,0.5);
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
.side-navigation .menu-item.active:before{
	/*background-color: #2A72D7;*/
	background-color: #2A72D7;
	width: 100%;
}
.side-navigation .menu-item:before {
	 content: '';
	 position: absolute;
	 top: 0;
	 left: 0;
	 bottom: 0;
	 width: 0;
	 /*background-color: #2A72D7;*/
	 background-color: #2A72D7;
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

.sidebar-area .userinfo{
	padding-top: 50px;
	padding-right: 50px;
	padding-left: 50px;
}

 .sidebar-area .userinfo .box{
	 display: flex;
	 align-items: center;
	 color: #4D4D53;
	 padding-top: 20px;
 }

 .sidebar-area .userinfo .label{
	 width: 50px;
 }

 .contentTitle{
	 background-color: #2A72D7;
	 padding: 20px 20px;
	 color: #ffffff;
	 font-weight: 500;
	 font-size: 20px;
 }

 .formTitle{
	 font-weight: 600;
	 font-size: 24px;
	 color: #000;
	 padding: 30px 20px 20px 20px;
 }


 .contentBox .desc{
	 padding: 15px 20px;
 }

 .contentBox .desc .text{
	 display: flex;
 }

 .contentBox .desc .number{
	 padding-right: 15px;
 }

 .contentBox .desc p{
	 font-size: 18px;
 }


 .btnGroup{
	 display: flex;
	 align-items: center;
	 justify-content: center;
	 padding: 30px;
 }


 .btnGroup .btn{
	 outline: 0;
	 border: 0px;
	 background-color: #00387C;
	 padding: 10px 20px;
	 margin: 0px 5px;
	 color: #ffffff;
	 text-decoration: none;
	 cursor: pointer;
 }

 .formgroup{
	 display: flex;
	 padding:  10px 22px;
 }

 .formgroup p{
	 margin: 0px;
	 width: 350px;
	 font-size: 18px;
	 white-space: nowrap;
	 transform: translateY(10px);
 }

  .formgroup input,  .formgroup textarea{
	   border-radius: 0px;
	   padding: 10px 20px;
	   outline: 0;
	   box-shadow: none;
	   width:-webkit-fill-available ;
	   border: 1.5px solid #5e5e5e;
  }

</style>
	
 </head>
<body>
<header class="site-header" id="headerBanner"> 
 		<img src="image/header1.png" id="imgbanner"/>
    </header>
	<div class="content-area">
        <aside class="sidebar-area" role="complementary">
        	<div class="userinfo">
        		<div class="box">
	        		<div class="label">ID</div>
	        		<div>: ST 20812</div>
	        	</div>
	        	<div class="box">
	        		<div class="label">Nama</div>
        			<div>: Nur Amalin binti Razali</div>
	        	</div>
        	</div>
        
            <nav class="side-navigation" role="navigation" id="sidenavigation">
               <ul class="menu">
                    <li class="menu-item">
                        <a href="javascript:;">Profil Pengguna</a>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:;">Permohonan Kursus Perkahwinan</a>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:;">Permohonan Perkahwinan</a>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:;">Pendaftaran Perkahwinan</a>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:;">Aduan/Khidmat Nasihat</a>
                    </li>
                    <li class="menu-item active">
                        <a href="javascript:;">Insentif</a>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:;">Log Keluar</a>
                    </li>
               </ul>
            </nav>
        </aside>
        <main class="site-main" role="main" id="sitemain">

        	<div class="contentTitle">
        		Pemohonan Perkahwinan
        	</div>

        	<div class="contentBox">

        		<
  <div class="formTitle">
        			MAKLUMAT WALI
        		</div>

     <form action="index.php?action=submitGuardian" method="POST">
     <div class="formgroup">
                    <p>No Kad Pengenalan </p>
        				<input type="text" name="guardian_ID" placeholder="Hospital Sultan Haji Ahmad Shah, Temerloh" />
        			</div>
					<div class="formgroup">
        				<p>Nama Wali </p>
        				<input type="text" name="guardian_name" placeholder="Hospital Sultan Haji Ahmad Shah, Temerloh" />
        			</div>
					<div class="formgroup">
        				<p>Alamat Semasa </p>
        				<input type="text" name="guardian_addrress" placeholder="Hospital Sultan Haji Ahmad Shah, Temerloh" />
        			</div>
					<div class="formgroup">
        				<p>No Telefon </p>
        				<input type="tel" name="guardian_phone_number" placeholder="013-9868652" />
        			</div>




        <input type="submit" value="Submit">
    </form>
</body>
</html>

		

        				