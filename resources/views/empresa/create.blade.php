
@extends('layouts.app')


@section('content')
<div class="container">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresa</title>
</head>
<body>

</body>
</html>


<form action="{{ url('/empresa') }} "   class="needs-validation" novalidate method="POST" enctype="multipart/form-data">
@csrf
<h1>crear datos</h1>
@include('empresa.form',['modo'=>'Crear'])
</form>

</div>
@endsection
