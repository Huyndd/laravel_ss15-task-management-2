<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Danh sách khách hàng</h1>
<table border="1">
    <thead>
    <tr>
        <th>STT</th>
        <th>Họ và tên</th>
        <th>Email</th>
        <th>Địa chỉ</th>
        <th>Thao tác</th>
    </tr>
    </thead>
    <tbody>
    {{--{dd($listCustomer)}}--}}
    @foreach($listCustomer as $item)

        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->address}}</td>
            <td>
                <a href="{{route('show',$item->id)}}">Show</a>
                | <a href="{{route('edit',$item->id)}}">Edit</a>| <a
                        href="{{route('delete',$item->id)}}">Delete</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>