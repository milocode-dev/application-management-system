<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Project Page</title>
</head>
<body>
    <h1>Welcome to Create Projects Page!</h1>

    <form action="{{ route('projects.store') }}" method="POST">
        @csrf
        <div class="form-input">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" placeholder="Fill title..">
        </div>

        <div class="form-inpuit">
            <label for="description">Description</label>
            <input type="text" id="description" name="description" placeholder="Fill description..">
        </div>

        <button type="submit">Add project</button>
    </form>
</body>
</html>