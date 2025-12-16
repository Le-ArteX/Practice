<!DOCTYPE html>
<html>
<head>
    <style>
        .pass { background-color: green; color: white; }
        .fail { background-color: red; color: white; }
        table, th, td { border: 1px solid black; border-collapse: collapse; padding: 5px; }
    </style>
</head>
<body>

    <h2>Student Marks Entry</h2>
    <input type="text" id="name" placeholder="Enter Name">
    <input type="number" id="marks" placeholder="Enter Marks">
    <button onclick="addStudent()">Submit</button>

    <br><br>
    <table id="studentTable">
        <tr>
            <th>Name</th>
            <th>Marks</th>
        </tr>
    </table>

    <script>
        function addStudent() {
            const nameInput = document.getElementById('name').value;
            const marksInput = document.getElementById('marks').value;
            const table = document.getElementById('studentTable');

            // Validation Rules [cite: 329, 330]
            // Name: letters only, no spaces/numbers. Regex: /^[A-Za-z]+$/
            // Marks: 0-100
            const nameRegex = /^[A-Za-z]+$/;
            
            if (!nameRegex.test(nameInput)) {
                alert("Name must contain only letters and cannot be empty.");
                return;
            }
            
            if (marksInput === "" || marksInput < 0 || marksInput > 100) {
                alert("Marks must be a number between 0 and 100.");
                return;
            }

            // Create Row
            const row = table.insertRow();
            const cell1 = row.insertCell(0);
            const cell2 = row.insertCell(1);

            cell1.innerHTML = nameInput;
            cell2.innerHTML = marksInput;

            // Background Color Logic [cite: 335, 336]
            if (marksInput > 50) {
                row.className = "pass"; // Green
            } else {
                row.className = "fail"; // Red
            }
        }
    </script>
</body>
</html>