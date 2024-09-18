<form action="{{ route('photos.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required>
    </div>
    <div>
        <label for="photo">Photo:</label>
        <input type="file" name="photo" id="photo" required>
    </div>
    <button type="submit">Upload</button>
</form>
