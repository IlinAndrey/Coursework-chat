const form = document.querySelector(".login form"),
continueBtn = form.querySelector(".button input");

form.onsubmit = (e)=>{
    e.preventDefault(); //prev
}


continueBtn.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/login.php", true);
    xhr.onload = ()=>{
        if (xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                // console.log(data);
                if(data == "success"){
                    location.href = "chat_page.php";
                }else{
                    // document.getElementById('error').innerHTML = 'Please fill the required fields!';
                    // return false;
                }
            }
        }
    }
    let formData = new FormData(form);

    xhr.send(formData);
}