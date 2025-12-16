<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form onsubmit="return data()">
        Enter name
        <input type="text" id="d1">
        <br><br>
        Enter phone
        <input type="text" id="d2">
        <br><br>
        Enter email
        <input type="email" id="d3">
        <br><br>
        Enter password
        <input type="password" id="d4">
        <br><br>
        Enter confirm password
        <input type="password" id="d5">
        <br><br>
        
        <input type="submit" id="d6">
        <br><br>
        
        <!-- Added output element -->
        <div id="output"></div>
    </form>
    
    <script>
    function data() {
        var a = document.getElementById("d1").value;
        var b = document.getElementById("d2").value;
        var c = document.getElementById("d3").value;
        var d = document.getElementById("d4").value;
        var e = document.getElementById("d5").value;
        var show = document.getElementById("output");
        
        // Validate all fields are filled
        if(a == "" || b == "" || c == "" || d == "" || e == "") {
            alert("All information is required");
            return false;
        }
        
        // Validate phone is a number
        if(isNaN(b) || b.trim() === "") {
            alert("Phone must be a number");
            return false;
        }
        
        // Validate passwords match
        if(d !== e) {
            alert("Passwords do not match");
            return false;
        }
        
        // Display the results
        show.innerHTML = `
            <strong>Info Submitted:</strong><br>
            Name: ${a}<br>
            Email: ${c}<br>
            Phone: ${b}
        `;
        
        return false; // Prevents form submission for demo
        // In real app, you might want: return true;
    }
    </script>
</body>
</html>