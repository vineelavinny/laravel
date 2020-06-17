@extends('app')
@section('title','Sample2')
@section('content')
 <!--@foreach($services as $s)
 <li>{{$s}}</li>
 @endforeach
-->
<form action="/ser" method="post">
    <input type="text" name="name">
    @csrf
    <input type="submit" value="Add service">
    <p style="color:red">@error('name') {{$message}} @enderror</p>
</form>

<ul>
@forelse($services as $s)
<li>{{$s->name}}</li>
@empty
<li>No services</li>

@endforelse
</ul>
@endsection