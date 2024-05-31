<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Web App</title>
    <link rel="stylesheet" href="styles.css">
    <script>
        function fetchGreeting() {
            var name = document.getElementById("nameInput").value;
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "fetch_message.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById("greeting").innerHTML = xhr.responseText;
                }
            };
            xhr.send("name=" + name);
        }
    </script>
</head>
<body>
    <div class="container">
        <h1>Welcome to Our Simple Web App!</h1>
        <label for="nameInput">Enter Your Name:</label>
        <input type="text" id="nameInput" placeholder="Your Name">
        <button onclick="fetchGreeting()">Submit</button>
        <div id="greeting"></div>
    </div>
</body>
</html>
