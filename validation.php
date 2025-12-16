<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
<script>
    function data()
    {
    var a=document.getElementById("n1").value
    var b=document.getElementById("n2").value
    var c=document.getElementById("n3").value
    var d=document.getElementById("n4").value

    if(a==""||b==""||c==""||d=="")
    {
        alert("all fields are mendatory");
        return false;
    }
    else if(b.length<10||b.length>10)
    {
        alert("enter valid number");
        return false;
    }
    else if(isNaN(b))
    {
        alert("only numbers are allowed");
        return false;
    }
    else if(c!=d)
    {
        alert("enter same password");
        return false;
    }
    else{
        true;
    }

    }
</script>
    <form onsubmit="return data()" action="lab1.php">
        <td>
            <tr>
                Enter Your Name:
 </tr><br>
 <tr>
    <input type="text", placeholder="enter name" id="n1">
 </tr>
 </td><br><br>
 <td>
            <tr>
                Enter Contact Number:
 </tr><br>
 <tr>
    <input type="text", placeholder="enter number" id="n2">
 </tr>
 </td><br><br>
 <td>
            <tr>
                Enter Your Password:
 </tr><br>
 <tr>
    <input type="password" id="n3">
 </tr>
 </td><br><br>
 <td>
            <tr>
                Confirm Password:
 </tr><br>
 <tr>
    <input type="password" id="n4">
 </tr>
 </td><br><br>
 
<input type="submit", value="Submit Data">
 </form>
    

</body>
</html>