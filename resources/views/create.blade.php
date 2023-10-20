<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
    <style>
        label,button{
            display: block;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="/room" method="post" enctype="multipart/form-data">
        @csrf
        <label>Tên phòng:</label>
        <input type="text" name="name">
        
        <label>Mô tả phòng:</label>
        <textarea name="description"></textarea>
        
        <label>Giá phòng:</label>
        <input type="number" name="price">
        
        <label>Tải lên hình ảnh:</label>
        <input type="file" name="image">
        
        <button type="submit" style="width:180px; height:40px">Gửi</button>
    </form>
</body>
</html>