var user = document.querySelector('#username');
        user.addEventListener('keyup', function(){
            var n_times = document.querySelector('.n_times');
            var n_check = document.querySelector('.n_check');
            if (user.value.length == 0 || user.value.length < 3) {
                email.style.borderBottom = '2px solid #b11616';
                n_times.style.display = 'block';
                n_check.style.display = 'none';
                return false;
            }else{
                user.style.borderBottom = '2px solid #169616';
                n_times.style.display = 'none';
                n_check.style.display = 'block';
                user.classList.add("checked");
            }
        })
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
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
        var rpass = document.querySelector('#rpass');
        rpass.addEventListener('keyup', function(){
            var r_times = document.querySelector('.r_times');
            var r_check = document.querySelector('.r_check');
            if (document.getElementById('pass').value != document.getElementById('rpass').value) {
                rpass.style.borderBottom = '2px solid #b11616';
                r_times.style.display = 'block';
                r_check.style.display = 'none';
                return false;
            }else{
                rpass.style.borderBottom = '2px solid #169616';
                r_times.style.display = 'none';
                r_check.style.display = 'block';
                rpass.classList.add("checked");
            }
        })

        function validate_fileupload(fileName)
        {
            var allowed_extensions = new Array("jpg","png","jpeg");
            var file_extension = fileName.split('.').pop().toLowerCase(); // split function will split the filename by dot(.), and pop function will pop the last element from the array which will give you the extension as well. If there will be no extension then it will return the filename.
            var i_times = document.querySelector('.i_times');
            var i_check = document.querySelector('.i_check');
            for(var i = 0; i <= allowed_extensions.length; i++)
            {
                if(allowed_extensions[i]==file_extension)
                {   
                    i_times.style.display = 'none';
                    i_check.style.display = 'block';
                    return true; // valid file extension
                }
            }
            i_times.style.display = 'block';
            i_check.style.display = 'none';
            return false;
        }

        function validate(){
            if(email.classList.contains("checked") && pass.classList.contains("checked") && user.classList.contains("checked") && rpass.classList.contains("checked")){
                // document.getElementById('noterror').innerHTML = 'Succesfully loged in!';
                // return true;
                alert('Succesfully registred!');
                window.location.src = 'chat_page.html';
            }else{
                document.getElementById('error').innerHTML = 'Please fill the required fields!';
                return false;
            }
        };