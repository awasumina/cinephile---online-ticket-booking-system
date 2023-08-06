
        function validate(){
            var x = document.myForm.email.value;
            var atpos = x.indexOf('@');
            var dotpos = x.lastIndexOf(".");   
            if(document.myForm.name.value ==""){
                alert("Please provide your name");
                document.myForm.name.focus();
                return false;
            }

            if((document.myForm.email.value =='') || (atpos<1 || dotpos<atpos + 2 || dotpos+2>=x.length)){
                alert("please provide valid email");
                document.myForm.email.focus();
                return false;
            }

            if (document.myForm.password.value.length <= 4){
                document.myForm.password.focus();
            }    
                
            if(isNaN(document.myForm.number.value)){    
                alert("Must be number");
                return false;
            }

            // alert("all fiels are filled. thank u");
            // exit();
        }
