
@extends('layouts.app')


@section('content')
<div class="container">
<form action="{{ url('/empresa/'.$item->id) }} "  class="needs-validation" novalidate  method="POST" enctype="multipart/form-data">
@csrf
 {{ method_field('PATCH') }}

@include('empresa.form',['modo'=>'Editar'])

</form>

</div>
@endsection

