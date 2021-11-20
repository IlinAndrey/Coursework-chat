package com.inbox.app.room;

import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.Date;
import java.util.LinkedHashSet;
import java.util.LinkedList;
import java.util.List;
import java.util.Set;

import javax.persistence.ElementCollection;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.Id;

@Entity
public class Room {
	
	private @Id @GeneratedValue long roomId ;
	private @ElementCollection Set<Long> usersId ;
	
	private @ElementCollection List<Message> messages ;
	
	private String roomName ;
	private RoomType roomtype ;
	private Date creationDate = new Date();
	private String roomDescription ;
	private String imagePath;
	
	Room(){
		this.messages = new LinkedList<>();
		this.usersId = new LinkedHashSet<>();
	}
	
	Room(String roomName , RoomType roomtype , String roomDescription){
		this.roomName = roomName ;
		this.roomtype = roomtype ;
		this.messages = new LinkedList<>();
		this.usersId = new LinkedHashSet<>();
		this.roomDescription = roomDescription ;
		this.imagePath = "profile-1.png";
	}


	public long getRoomId() {
		return roomId;
	}

	public void setRoomId(long roomId) {
		this.roomId = roomId;
	}

	public Set<Long> getUsersId() {		
		return usersId;
	}

	public void setUsersId(Set<Long> usersId) {
		this.usersId = usersId;
	}

	public List<Message> getMessages() {
		
		return messages;
	}

	public void setMessages(List<Message> messages) {
		this.messages = messages;
	}

	public String getRoomName() {
		return roomName;
	}

	public void setRoomName(String roomName) {
		this.roomName = roomName;
	}

	public RoomType getRoomtype() {
		return roomtype;
	}

	public void setRoomtype(RoomType roomtype) {
		this.roomtype = roomtype;
	};
	
	public String getCreationDate() throws ParseException {
		SimpleDateFormat format = new SimpleDateFormat("yyyy-MM-dd");
        return format.format(creationDate);
    }
	

	public String getRoomDescription() {
		return roomDescription;
	}

	public void setRoomDescription(String roomDescription) {
		this.roomDescription = roomDescription;
	}
	
	
	public Long getFriendId(Long userId) {
		for(Long id : getUsersId()) {
			if(userId != id) {
				return id ;
			}
		}
		return 0L ;
	}
	
	public String getImagePath() {
		return imagePath;
	}

	public void setImagePath(String imagePath) {
		this.imagePath = imagePath;
	}
	
	public int getSize() {
		return this.getUsersId().size();
	}
	
	public boolean isMember(Long userId) {
		for(Long id : usersId) {
			if(id == userId)
				return true ;
		}
		return false ;
	}
}
