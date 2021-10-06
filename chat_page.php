<?php
	session_start();
	if(!isset($_SESSION['unique_id'])){
		header("location: index.php");
	}
?>



<?php include_once "header.php"; ?>
<body>
<section class="mainApp">
	<!--Change Username-->
	<!-- <div class="card">
		<div class="formchange">
			<label for="username">New Username</label><br>
			<input class="input_e" type="text" name="username" placeholder="New Username" id="user">
		</div>
		<div class="formchange">
			<button id="Login">Отправить</button>
		</div>
	</div> -->



	
        <!-- Наше модальное всплывающее окно -->
        <div style="text-align: center" id="popupWin" class="modalwin">
            <h2> Change Username </h2>
            <form class="changewin">
                <input placeholder="New Username" class="new_username">
                <input type="submit" value="OK" class="btn_username">
            </form>
        </div>







	<!--меню чела-->
	<div class="menu">
	<?php 
			include_once "php/config.php";
			$sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
			if(mysqli_num_rows($sql) > 0){
				$row = mysqli_fetch_assoc($sql);
			}
				
		?>
		<!-- Иконка меню -->
		<i class="fa fa-times" aria-hidden="true"></i>

		<!-- Меню -->
		<div class="mainImg">
			<img src="php/images/<?php echo $row['img'] ?>">
		</div>
		<div class="mainInf">
			<h1><?php echo $row['username'] ?></h1>
			<h4><?php echo $row['status'] ?></h4>
		</div>
		<div class="mainSettings">
			<ul>
				<li onclick="showModalWin()">Change Username </li>
				<li>Delete account</li>
			</ul>
		</div>
	</div>
	<div class="leftPanel">
		<header>
			<div class="nav">
			<button class="trigger">
				<i class="fa fa-bars" aria-hidden="true"></i>
			</button>
		</div>
			<div class="search">
				<input class="searchChats" type="search" placeholder="Search..."/>
				<!-- <i class="fa fa-search" aria-hidden="true"></i> -->
			</div>
			<div class="subnav">
				<ul>
					<li class="profile"><i class="fa fa-user" aria-hidden="true"></i>Профиль</li>
					<li><i class="fa fa-pencil" aria-hidden="true"></i>Написать</li>
					<a href="index.php"><li><i class="fa fa-sign-out" aria-hidden="true"></i>Выйти</li></a>
				</ul>
			</div>
		</header>
		<div class="chats">
			
		</div>
	</div>
	
	<div class="rightPanel">
		<div class="topBar">
			<?php 
				include_once "php/config.php";
				$user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
				$sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
				if(mysqli_num_rows($sql) > 0){
					$row = mysqli_fetch_assoc($sql);
				}
					
			?>
			<div class="leftSide">
			<p class="chatName"><span><?php echo $row['username'] ?></span></p>
			<p class="chatStatus"><?php echo $row['status'] ?></p>
			</div>
		</div>
		<div class="convHistory userBg">
		</div>
		
		<form class="replyBar">
            <div class="input_message">
                <button class="attach">
                    <i class="fa fa-paperclip" aria-hidden="true"></i>
                </button>
			<input type="text" name="outgoing_id" value="<?php echo $_SESSION['unique_id']; ?>" hidden>
			<input type="text" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
			<input type="text" name="message" class="replyMessage" placeholder="Type your message..." autocomplete="off"/>
			</div>
			<div class="otherTools">
				<button class="toolButtons send" id="sender" >
					<i class="fa fa-paper-plane" aria-hidden="true"></i>
				</button>
			</div>
		</form>
	</div>
</section>
<!-- <section class="config">
	<section class="configSect">
		<div class="profile">
		<p class="confTitle">Settings</p>
		
		<div class="image"></div>
		
		<div class="side">
		<p class="name">Random Name</p>
		<p class="pStatus">Online</p>
		</div>
			
		<button class="changePic">Change Profile Picture</button>
		<button class="edit">Edit Profile Info</button>
	</div>
</section> -->
<script src="js/mainpage.js"></script>
<script src="js/users.js"></script>
<script src="js/chat.js"></script>
</body>
</html>