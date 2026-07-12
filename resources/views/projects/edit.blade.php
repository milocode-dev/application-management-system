<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Page</title>
</head>
<body>
    <h1>Welcome to edit page!</h1>

    <form action="{{ route('projects.update', $project) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-input">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" value="{{ old('title', $project->title) }}" placeholder="Fill title..">
        </div>

        <div class="form-inpuit">
            <label for="description">Description</label>
            <input type="text" id="description" name="description" value="{{ old('description', $project->description) }}" placeholder="Fill description..">
        </div>

        <button type="submit">Update</button>
    </form>
</body>
</html>