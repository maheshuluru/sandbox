<!DOCTYPE html>
<html>
<head>
    <title>Expenses</title>
</head>
<body>
<h1>Expenses</h1>


<table border="1">
@foreach ($expenses as $expense)
    <tr>
    <td>{{ $expense['id'] }}</td>
    <td>{{ $expense['name'] }}</td>
    <td>{{ $expense['price'] }}</td>
    </tr>
@endforeach
</table>

</body>
</html>