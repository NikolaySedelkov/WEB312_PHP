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
        <title>Каталог телефонов</title>
    </head>

    <style>
        .container_phones {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .item_phone {
            border: 1px solid black;
            border-radius: 10px;
            box-shadow: 0 0 5px darkgray;
            width: 250px;
            text-align: center;
            margin: 10px;
        }

        .item_phone img {
            padding: 5px;
            box-sizing: border-box;
            width: 100%;
        }
    </style>
    <body>
        <div class="container_phones">
            @foreach (Phone::all() as $phone)
                <div class="item_phone">
                    <figure>
                        @php
                            $path = 'https://i.pinimg.com/236x/9b/fd/2b/9bfd2b397daa065e19edc8aa708dd7e7.jpg?nii=t';
                            if(isset($phone['image'])) {
                                $path = $phone['image'];
                            }
                        @endphp
                        <img src="{{$path}}"/>
                        <hr/>
                        <figcaption>
                            {{$phone['brand']}} | {{$phone['name']}} | {{$phone['price']}}$
                        </figcaption>
                    </figure>
                </div>                
            @endforeach
        </div>
    </body>
</html>