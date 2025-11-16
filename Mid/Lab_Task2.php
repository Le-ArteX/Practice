
<!DOCTYPE html>
<head>
    <title> Participant Registration</title>
    <style>
        form{
            background-color : white;
            padding : 10px;
            margin : 0 auto;
            border-radius : 15px;
            width: 400px ;
         
        }
        body{
           padding : 20px;
        }
        input{
            padding : 5px;  
        }
        button {
            background-color:#27A3F5;

        }
        </style>


</head>
<body>
    <center>
    <h2> Participant Registration</h2></center>
    <form onsubmit="return handleSubmit()">
        <lable>Full Name: </lable><br>
        <input type = "text" id = "name"/><br>

        <lable>Email:</lable><br>
        <input type = "email" id =" email"/><br>

        <lable>Phone number:</lable><br>
        <input type = "tel" id ="phone"/><br>

        <lable>Password: </lable><br>
        <input type = " password " id =" pass" /><br>

        <lable> Confirm Password : </lable><br>
        <input type =" password " id =" conpass" /><br>
        <br>

        <button type =" button" > Register </button>

    </form>
    <center> <h2>Active Selection </h2>  </center>  
    <form>
     <lable> Activity Name : </lable><br>
     <input type ="text" id ="ActName"/><br><br>
     <button type ="submit"> Add Activity </button><br>

    </form>
  
    <script>
        function  handleSubmit(){

            var errorSec = document.getElementbyId("error");
            var outer = document.getElementbyId("output");

            var name = document.getElementbyId("name").value.trim();
            var email = document.getElementbyId("email").value.trim();
            var phone = document.getElementbyId("phone").value.trim();
            var password = document.getElementbyId("pass").value.trim();
            var confirmPassword = document.getElementbyId("conpass").value.trim();

            errorSec.innerHTML=" ";
            outer.innerHTML=" ";
        
            if(name === " "|| email===" "|| phone===" "||password===" "||confirmPassword===" ")
            {
                errorSec.innerHTML = "Please Fill in all fields";
                return false;
            }
            if()

            outer.innerHTML = `
            <strong>Registration Complete!</strong><br><br>
             Full Name: ${name}<br>
             Email: ${email}<br>
            Phone number : ${phone}<br>
             Password : ${pass}<br>
             Confirm Password : ${conpass}<br>
           `;

          return false;
        }
        </script>

</body>
</html>
