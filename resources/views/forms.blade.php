<!DOCTYPE html>
<html>
<body>
    <h2>fill details</h2>
    <form action="/submit-form" method="POST">
        @csrf 
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>