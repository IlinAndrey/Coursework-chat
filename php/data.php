<?php
    while($row = mysqli_fetch_assoc($sql)){
        $sql2 = "SELECT * FROM messages WHERE (incoming_msg_id = {$row['unique_id']}
                 OR outgoing_msg_id = {$row['unique_id']}) AND (outgoing_msg_id = {$outgoing_id}
                 OR incoming_msg_id = {$outgoing_id}) ORDER BY msg_id DESC LIMIT 1";
        $query2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_assoc($query2);
        if(mysqli_num_rows($query2) > 0){
            $result = $row2['msg'];
        }else{
            $result = "No message available";
        }

        (strlen($result) > 28) ? $msg = substr($result, 0, 28).'...' : $msg = $result;
        ($outgoing_id == $row2['outgoing_msg_id']) ? $you = "You: " : $you = "";

        $output .= '<a href="chat_page.php?user_id='.$row['unique_id'].'"
                    <div class="chatButton">
                    <div class="chatInfo">
                        <div class="your-image">
                        <img src="php/images/'. $row['img'] .'">
                    </div>
                    <div class="chat_middle">
                        <p class="name">'. $row['username'] .'</p>
                        
                        <p class="message">'. $you . $msg .'</p>
                        </div>
                    </div>
                    <div class="status normal">
                        <p class="date">'. $today = date("H:i") .'</p>
                        
                        <i class="fa fa-check read" aria-hidden="true"></i>
                        <i class="fa fa-thumb-tack fixed" aria-hidden="true"></i>
                    </div>
                    </div>';
    }
?>