@extends('layouts.app')


@section('conteudo')

@endsection
    <form action="{{ url('pokemon') }}" method="POST">
        @csrf

        <input type="text" name="name" placeholder="Name" required>
        <input type="text" name="type" placeholder="type" required>
        <input type="number" name="strength" placeholder="strength" required>  
        <button type="submit">Create Pokemon</button>
    </form>