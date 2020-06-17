<h1>Customers</h1>
<a href='/customers/create'>Add New Customer</a>
@forelse($customers as $c)
<p><strong><a href="/customers/{{$c->id}}">{{$c->name}}</a></strong>({{$c->email}})</p>
@empty
<p>No customers</p>
@endforelse