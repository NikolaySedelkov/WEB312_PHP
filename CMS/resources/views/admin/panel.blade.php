@php
    // импорт модели "Телефон"
    use App\Models\Phone;
@endphp


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <script>
        function handleClickDeleteRequest(e) {
            const xhr = new XMLHttpRequest();
            xhr.open("DELETE", "admin/panel", false);
            xhr.send();
        }
    </script>
    <table
        border="1px"
        bordercolor="black"
    >
        <caption>База Данных</caption>
        <thead>
            <tr>
                <th>Название</th>
                <th>Производитель</th>
                <th>Цена</th>
                <th>Изображение</th>
                <th>Редактировать</th>
                <th>Удалить</th>
            </tr>
        </thead>
        <tbody>
            @foreach(Phone::all() as $phone)
                <tr>
                    <td>{{ $phone->name }}</td>
                    <td>{{ $phone->brand }}</td>
                    <td>{{ $phone->price }}$</td>
                    <td>
                        <img width="50" src="{{ $phone->image }}">
                    </td>
                    <td>
                        <form
                            method="GET"
                            action="/admin/panel/update"
                        >
                            <button
                                name="id"
                                value="{{ $phone->id }}"
                            >
                                ~
                            </button>
                        </form>
                    </td>
                    <td> 
                        <form
                            method="GET"
                            action="/admin/panel/delete"
                        >
                            <button
                                name="id"
                                value="{{ $phone->id }}"
                            >
                                x
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            <tr>
                <td colspan="6">
                    <form
                        method="GET"
                        action="/admin/panel/insert"
                    >
                        <button> + </button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>