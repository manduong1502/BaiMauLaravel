<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show</title>
    <style>
        img,h1,p{
            margin: 0;
        }
    </style>
</head>
<body>
    <h1 style="margin-bottom:50px">Book phòng đi nào</h1>
    <div style="display:flex;">
        @for ($i = 0; $i < 5; $i++)
        <div style=" margin-right:20px;">
            @if($image)
            <img src="{{ asset('images/' . $image) }}" alt="{{ $name }}" style="width:200px; height:150px; border-radius:10px">
            <h1>{{ $name }}</h1>
            <p>{{ $description }}</p>
            <p>Giá tiền: {{ $price }}đ</p>
            <p>Còn 10 phòng</p>
            <button style="width:200px">Đặt ngay</button>
        </div>
        @endif
    @endfor
    </div>
</body>
</html>