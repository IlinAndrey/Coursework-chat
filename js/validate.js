var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
var email = document.querySelector('#email');
email.addEventListener('keyup', function(){
    var u_times = document.querySelector('.u_times');
    var u_check = document.querySelector('.u_check');
    if (filter.test(email.value)) {
        email.style.borderBottom = '2px solid #169616';
        u_times.style.display = 'none';
        u_check.style.display = 'block';
        email.classList.add("checked");
    }else{
        email.style.borderBottom = '2px solid #b11616';
        u_times.style.display = 'block';
        u_check.style.display = 'none';
        return false;
    }
})
var pass = document.querySelector('#pass');
pass.addEventListener('keyup', function(){
    var p_times = document.querySelector('.p_times');
    var p_check = document.querySelector('.p_check');
    if (pass.value.length == 0 || pass.value.length < 6) {
        pass.style.borderBottom = '2px solid #b11616';
        p_times.style.display = 'block';
        p_check.style.display = 'none';
        return false;
    }else{
        pass.style.borderBottom = '2px solid #169616';
        p_times.style.display = 'none';
        p_check.style.display = 'block';
        pass.classList.add("checked");
    }
})
function validate(){
    if(email.classList.contains("checked") && pass.classList.contains("checked")){
        // document.getElementById('noterror').innerHTML = 'Succesfully loged in!';
        // return true;
        alert('Succesfully loged in!');
        window.location.src = 'chat_page.html';
    }else{
        document.getElementById('error').innerHTML = 'Please fill the required fields!';
        return false;
    }
};