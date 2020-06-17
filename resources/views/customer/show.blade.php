<h1>Customer Details</h1>
<div><a href="/customers"> >Back</a></div>
<label><strong>Name</strong></label>
<p>{{$customer->name}}</p>
<label><strong>Email</strong></label>
<p>{{$customer->email}}</p>

<div><a href="/customers/{{$customer->id}}/edit"> Edit</a></div>
<form action="/customers/{{$customer->id}}" method="post">
@method('DELETE')
@csrf
<button>Delete</button>
</form>