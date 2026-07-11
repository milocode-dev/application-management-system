<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projects Page</title>
</head>
<body>
    <h1>Welcome to Projects Page!</h1>

    <table border="1">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Owner</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <th>{{ $project->title }}</th>
                    <th>{{ $project->description }}</th>
                    <th>{{ $project->user->name }}</th>
                    <th>
                        <a href="{{ route('projects.show', $project->id) }}">Detail</a>
                        <a href="{{ route('projects.edit', $project->id) }}">Edit</a>
                        <form action="{{ route('projects.destroy', $project->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Yakin ingin hapus data ini?')">Delete</button>
                        </form>
                    </th>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('projects.create') }}">+ Tambah Projects</a>
</body>
</html>