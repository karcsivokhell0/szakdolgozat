<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        h2 {
            text-align: center;
        }
        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px 14px;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
<div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold">Admin Dashboard</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Is Admin?</th>
                <th>Registered</th>
            </tr>
        </thead>
        <tbody>
        @forelse($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->isAdmin() ? 'Yes' : 'No' }}</td>
                <td>{{ $user->created_at->format('Y-m-d') }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="5" style="text-align: center;">No users found.</td>
            </tr>
        @endforelse
        </tbody>
    </table>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Type of the error</th>
                <th>Description</th>
                <th>Registered</th>
            </tr>
        </thead>
        <tbody>
        @forelse($form_items as $form_item)
            <tr>
                <td>{{ $form_item->id }}</td>
                <td>{{ $form_item->email }}</td>
                <td>{{ $form_item->type }}</td>
                <td>{{ $form_item->error }}</td>
                <td>{{ $form_item->created_at->format('Y-m-d') }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="5" style="text-align: center;">No users found.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
</div>
</body>
</html>