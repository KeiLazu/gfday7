<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" 
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" 
    integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" 
    crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Memo Home</title>
</head>
<body>
    <h1>Test Memo</h1>
    <table border="1" cellspacing="0" width="100%">
        <tr>
            <td>Title</td>
            <td>Container</td>
            <td></td>
            <td></td>
        </tr>
        @foreach($memodata as $memo)
            <tr>
                <td>{{$memo->titlememo}}</td>
                <td>{{$memo->containermemo}}</td>
                
                {!! Form::open(['route' => ['memo.update']]) !!}
                
                {!! Form::hidden('id', $memo->id) !!}
                
                {{
                {!! Form::submit('Update', [name='action']) !!}
                }}
                <td><button onclick="{{route('memo.update', $memo->id)}}">Update</button></td>
                <td><button onclick="">Delete</button></td>
                
                {!! Form::close() !!}
                
            </tr>
        @endforeach
    </table>

    <br><br><button onclick="location.href='/'">Back To Index</button>

</body>
</html>