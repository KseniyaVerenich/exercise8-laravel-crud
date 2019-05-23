@extends ('layouts')

@section('content')

<h1>Edit Plants</h1>

<form method="POST" action="/plants/{{$plant->id}}">
{{method_field('PATCH')}}
{{csrf_field()}}
<div class='field'>
    <label class="label" for="common"> Common Name </label>
<div class="control">
        <input type="text" class="input" name="common" placeholder="Common Name" value="{{$plant->common}}">
</div>
</div>


<div class='field'>
    <label class="label" for="genus"> Genus </label>
<div class="control">
        <input type="text" class="input" name="genus" placeholder="Genus" value="{{$plant->genus}}">
</div>
</div>


<div class='field'>
    <label class="label" for="species"> Species </label>
<div class="control">
        <input type="text" class="input" name="species" placeholder="Species" value="{{$plant->species}}">
</div>
</div>

<div class='field'>
    <label class="label" for="Description"> Description </label>
<div class="control">
        <input type="text" class="input" name="description" placeholder="Description" value="{{$plant->description}}">
</div>
</div>

<div class='field'>
    <div class="control">
       <button type="submit" class='button is-link'>Update Plants</button>
</div>
</div>

</form>

<form method="POST" action="/plants/{{$plant->id}}">
{{method_field('DELETE')}}
{{csrf_field()}}

<div class='field'>
    <div class="control">
       <button type="submit" class='button'>Delete Plants</button>
</div>
</div>

</form>

@endsection 