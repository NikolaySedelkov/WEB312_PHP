<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Заметки | Создание</title>
</head>
<body>
    <form
        method="GET"
        action="/model/notes/api/create"
    >
        <table
            border="1px"
            bordercolor='black'
        >
            <caption> Введите данные новой заметки </caption>
            <tbody>
                <tr>
                    <td>
                        <label for="notes-create-text"> Заметка </label>
                    </td>
                    <td>
                        <input type="text" name="text" required id="notes-create-text">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="notes-create-priority"> Приоретит </label>
                    </td>
                    <td>
                        <input min="0" type="number" name="priority" id="notes-create-priority">
                    </td>
                </tr>
                <tr>
                    <td>
                        <button>Создать</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</body>
</html>