@php

use App\Models\myself\Node;

@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Заметки</title>
</head>
<body>
    <table
        border="1px"
        bordercolor='black'
    >
        <caption>Ваши заметки</caption>
        <thead>
            <tr>
                <th>Название</th><th>Приоритет</th><th>Удалить</th>
            </tr>
        </thead>
        <tbody>
            @foreach(Node::all() as $node)
                <tr>
                    <td>{{ $node['text'] }}</td> <td>{{ $node['priority'] }}</td>
                    <td>
                        <form
                            method="GET"
                            action="/model/notes/api/delete"
                        >
                            <input name="id" hidden type="number" value="{{ $node['id'] }}"/>
                            <button>X</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        <tbody>
    </table>
</body>
</html>