package com.inbox.app.socket;

import org.springframework.messaging.handler.annotation.MessageMapping;
import org.springframework.messaging.handler.annotation.Payload;
import org.springframework.messaging.handler.annotation.SendTo;
import org.springframework.security.core.Authentication;
import org.springframework.stereotype.Controller;

import com.inbox.app.room.RoomManagement;
import com.inbox.app.user.User;
import com.inbox.app.user.UserManagement;

@Controller
public class WebSocketController {
	
	@MessageMapping("/chat.send")
	@SendTo("/topic/distribution")
	public SocketMessage sendMessageWithServer(@Payload SocketMessage chatMessage) {
		return chatMessage;
	}
}
