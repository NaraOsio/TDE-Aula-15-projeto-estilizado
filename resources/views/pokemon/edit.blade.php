<form action="{{ url('pokemon' .$pokemon->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" placeholder="Name" value="{{$pokemon->name }}" required>
    <input type="text" name="type" placeholder="type" value="{{$pokemon->name }}"required>
    <input type="number" name="strength" placeholder="strength" value="{{$pokemon->strength }}"required>  
    <button type="submit">Update Pokemon</button>
</form>