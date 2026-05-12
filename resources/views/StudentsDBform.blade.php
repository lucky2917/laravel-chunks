<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student to Database</title>
</head>
<body>
    <h2>Add New Student</h2>
    <form action="/submit-student" method="POST">
        @csrf
        
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <br>
        
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <br>

        <div>
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" required>
        </div>
        <br>

        <button type="submit">Save to Database</button>
    </form>
</body>
</html>