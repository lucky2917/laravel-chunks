<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Student</title>
</head>
<body>
    <h2>Edit Student</h2>

    <form action="/update-student/{{ $user->id }}" method="POST">
        @csrf
        
        <div>
            <label>Name:</label>
            <input type="text" name="name" value="{{ $user->name }}" required>
        </div>
        <br>
        
        <div>
            <label>Email:</label>
            <input type="email" name="email" value="{{ $user->email }}" required>
        </div>
        <br>

        <div>
            <label>Age:</label>
            <input type="number" name="age" value="{{ $user->age }}" required>
        </div>
        <br>

        <button type="submit">Update Database</button>
    </form>
</body>
</html>