
        function validate(){   
            if(document.myForm.cardName.value ==""){
                alert("Please provide your card name");
                document.myForm.cardName.focus();
                return false;
            }

            if (document.myForm.cardNumber.value.length < 12){
                alert("card number must be 12 characters");
                document.myForm.cardNumber.focus();
            }    

            if (document.myForm.number.value.length < 12){
                alert("card number must be 12 characters");
                document.myForm.number.focus();
            } 
                
            if (document.myForm.code.value.length < 4){
                alert("card number must be 4 characters");
                document.myForm.code.focus();
            }   

            // alert("all fiels are filled. thank u");
            // exit();
        }
