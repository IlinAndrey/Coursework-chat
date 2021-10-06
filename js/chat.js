const form = document.querySelector(".replyBar"),
inputField = form.querySelector(".replyMessage"),
sendBtn = form.querySelector(".otherTools button"),
chatBox = document.querySelector(".convHistory");

form.onsubmit = (e)=>{
    e.preventDefault(); //prev
}

sendBtn.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/insert-chat.php", true);
    xhr.onload = ()=>{
        if (xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
               inputField.value = ""; 
               scrollToBottom()
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}

// chatBox.onmouseenter = ()=>{
//     chatBox.classList.add("active");
// }
// chatBox.onmouseleave = ()=>{
//     chatBox.classList.remove("active");
// }




setInterval(()=>{
	let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/get-chat.php", true);
    xhr.onload = ()=>{
        if (xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                chatBox.innerHTML = data;
                if(!chatBox.classList.contains("active")){
                    scrollToBottom();
                }
                // scrollToBottom();
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}, 1000);

function scrollToBottom(){
    chatBox.scrollTop = chatBox.scrollHeight;
}