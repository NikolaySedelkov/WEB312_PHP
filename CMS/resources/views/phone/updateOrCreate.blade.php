<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Контент-менеджер</title>
</head>
<body>
    <script>
        function handleSubmit(e) {
            const form = e.target;
            form.
        } 
    </script>
    <form
        method="POST"
        action="/phone/save"
        enctype="multipart/form-data"
    >
        @csrf
        <input type="number" name="id" value="{{ $data->id }}" hidden/>
        <table
            border="1px"
            bordercolor="black"
        >
            <caption>Карточка телефона | {{ $data->id }}</caption>
            
            <tbody>
                <tr>
                    <td>
                        <label for="form_phone-content_name">Название</label>
                    </td>
                    <td>
                        <input name="name" value="{{ $data->name }}" type="text" required id="form_phone-content_name"/>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="form_phone-content_brand">Производитель</label>
                    </td>
                    <td>
                        @php
                            $brands = ['hp', 'apple', 'nokia'];
                        @endphp
                        <select name="brand" required id="form_phone-content_brand">
                            @foreach ($brands as $brand)
                                <option @if($brand == $data->brand) selected @endif> {{$brand}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="form_phone-content_price">Цена</label>
                    </td>
                    <td>
                        <input name="price" value="{{ $data->price }}" type="number" step="0.01" required id="form_phone-content_price"/>$
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="form_phone-content_image">Превью</label>
                    </td>
                    <td>
                        <input name="image" type="file" required id="form_phone-content_image"/>
                    </td>
                </tr>

            </tbody>
        </table>
        <button>Сохранить</button>
    </form>
</body>
</html>