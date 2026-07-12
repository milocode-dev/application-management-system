<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Page</title>
</head>
<body>
    <h1>Hasil</h1>
    <ul>
        <li>{{ $project->title }}</li>
        <li>{{ $project->description }}</li>
        <li>{{ $project->user->name }}</li>
    </ul>

    <a href="{{ route('projects.index') }}">Back</a>
</body>
</html>