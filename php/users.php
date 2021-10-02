<?php
    session_start();
    include_once "config.php";
    $sql = mysqli_query($conn, "SELECT * FROM users");
    $output = "";
    if(mysqli_num_rows($sql) == 1){
        $output .= "No users are available to chat";
    }elseif(mysqli_num_rows($sql) > 0){
        while($row = mysqli_fetch_assoc($sql)){
            $output .= '<div class="chatButton">
                        <div class="chatInfo">
                            <div class="your-image">
                            <img src="php/images/'. $row['img'] .'">
                        </div>
                        <div class="chat_middle">
                            <p class="name">'. $row['username'] .'</p>
                            
                            <p class="message">Хороший вопрос, но через код)</p>
                            </div>
                        </div>
                        <div class="status normal">
                            <p class="date">00:02</p>
                            <p class="count">10</p>
                            <i class="fa fa-check read" aria-hidden="true"></i>
                            <i class="fa fa-thumb-tack fixed" aria-hidden="true"></i>
                        </div>
                        </div>';
        }
    }
    echo $output;
?>


<!-- <div class="chatButton">
				<div class="chatInfo">
                    <div class="your-image">
                        <img src="img/IA2G3ORVG.jpg">
                    </div>
                    <div class="chat_middle">
                        <p class="name">
                            Doge
                        </p>
                        
                        <p class="message">Wow!WowWowWowWowWowWowWowWowWowWowWowWowWowWowWowWow</p>
                    </div>
				</div>
				
				<div class="status normal">
					<p class="date">Now</p>
					<p class="count">42</p>
					<i class="fa fa-check read" aria-hidden="true"></i>
					<i class="material-icons fixed">loyalty</i>
				</div>
			</div> -->