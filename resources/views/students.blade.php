<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students List</title>
    <style>
        table { width: 50%; border-collapse: collapse; margin: 20px 0; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f4f4f4; }
    </style>
</head>
<body>
    <h2>Students List</h2>
<body>
    <h2>Students List</h2>

    <a href="/add-student-form" style="padding: 8px 12px; background: #28a745; color: white; text-decoration: none; border-radius: 4px;">+ Add New Student</a>
    <br><br>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>Actions</th> 
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->age }}</td>
                    <td>
                        <a href="/edit-student/{{ $user->id }}" style="color: blue; text-decoration: none;">Edit</a> 
                        <a href="/ctrl-delete-user/{{ $user->id }}" style="color: red; text-decoration: none;" onclick="return confirm('Are you sure you want to delete this specific record?');">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
</html>