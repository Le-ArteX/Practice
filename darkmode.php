<!-- <!DOCTYPE html>
<head>
    <title>DOM</title>
   
</head>
<body>
    <center>
        <h1 id="page">Light Mode</h1>
        <button id="switchbutton" onclick="toggle()">Switch</button>
 
        <script>
            function toggle() {
                var body = document.body;
                var title = document.getElementById("page");
                var button = document.getElementById("switchbutton");
 
                if (body.style.backgroundColor === "black") {
                    body.style.backgroundColor = "white";
                    title.style.color = "black";
                    title.innerHTML = "Light Mode";
                    button.innerHTML = "Switch to Dark Mode";
                } else {
                    body.style.backgroundColor = "black";
                    title.style.color = "white";
                    title.innerHTML = "Dark Mode";
                    button.innerHTML = "Switch to Light Mode";
                }
            }
        </script>
    </center>
</body>
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dom</title>
</head>
<body>
    <center>
    <h1 id="text">Light Mode</h1>
    <button id="switch" onclick="toggle()">Switch</button>
</center>
<script>
    var body1=document.body;
    var text1=document.getElementById("text");
    var button1=document.getElementById("switch");
    function toggle()
{
    if(body1.style.backgroundColor==="black")
    {
        body1.style.backgroundColor="white";
        text1.style.color="black";
        text1.innerHTML="Light Mode";
        button1.innerHTML="Switch to dark Mode";
    }
    else
    {
        body1.style.backgroundColor="black";
        text1.style.color="white";
        text1.innerHTML="Dark Mode";
        button1.innerHTML="Switch to Light Mode";
    }
}

    </script>
    
</body>
</html>