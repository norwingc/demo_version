<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
</head>
<body>
    <h1>Agenda</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Nombre</td>
                <td>324242423</td>
                <td>jfladsf.com</td>
                <td><a href="{{ route('view.person', 1) }}">View</a></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
