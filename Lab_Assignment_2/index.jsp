<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Web App</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to Our Simple Web App!</h1>
        <form action="getGreeting" method="post">
            <label for="nameInput">Enter Your Name:</label>
            <input type="text" id="nameInput" name="name" placeholder="Your Name" required>
            <button type="submit">Submit</button>
        </form>
        <div id="greeting">
            <%
                String message = request.getParameter("greetingMessage");
                if (message != null) {
                    out.println(message);
                }
            %>
        </div>
    </div>
</body>
</html>
