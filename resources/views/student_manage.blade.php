<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <span>
        Bai thi thu php laravel

    </span>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Birthday</th>
            <th scope="col">Address</th>
            <th scope="col">Edit</th>
            
          </tr>
        </thead>
        <tbody>
          
            @forelse ($students as $student)
            <tr>
            <td>{{ $student['id'] }}</td>
                <td class="pr-5 text-right">{{ $student['fullname'] }}</td>
                <td>{{ $student['birthday'] }}</td>
                <td>{{ $student['address'] }}</td>
                <td><a href="student/{{ $student->id }}/edit"
                    class="btn btn-outline-primary">Edit</a></td>
                </tr>
                
            @empty
            <tr>
                <td colspan="3">No products found</td>
            </tr>
                
            @endforelse
          
        </tbody>
      </table>
</body>
</html>