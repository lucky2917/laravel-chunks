<h2>Upload a File</h2>

    <form action="/upload" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="file">Choose a file:</label>
        <input type="file" name="file" id="">
        <br>
        <button type="submit">Upload</button>
    </form>
</body>
</html>