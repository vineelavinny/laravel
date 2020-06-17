<div>
        <label>Name</label>
        <input type="text" name="name" autocomplete="off" value="{{old('name') ?? $customer->name}}"> 
        @error('name')<p style="color:red">{{$message}}</p>@enderror
    </div>
    <div>   
        <label>Email</label>
        <input type="email" name="email" autocomplete="off" value="{{old('email') ?? $customer->email}}">
        @error('email')<p style="color:red">{{$message}}</p>@enderror
    </div>
    @csrf