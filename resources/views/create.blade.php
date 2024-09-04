<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('store') }}" method="POST">
        @csrf
        <input type="text" name="nama">
        <input type="text" name="kelas">
        <input type="text" name="absen">
        <button type="submit">submit</button>
    </form>
</body>
</html>