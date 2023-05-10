<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/js/app.js'])
</head>
<body>
<form action="{{route('form.store')}}" method="POST">
    @csrf
    @if(Session::has('message'))
        <div class="alert alert-success m-2">{{Session::get('message')}}</div>
    @endif
  <div class="form-group">
    <label for="exampleInputPassword1">First Name</label>
    <input type="text" value="{{old('first_name')}}" name="first_name" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  @error('first_name')
        <div class="alert alert-danger p-2 mt-2 mx-2"> {{ $message }}</div>
    @enderror
    <div class="form-group">
    <label for="exampleInputPassword1">Middle Name</label>
    <input type="text" value="{{old('middle_name')}}" name="middle_name" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  @error('middle_name')
        <div class="alert alert-danger p-2 mt-2 mx-2"> {{ $message }}</div>
    @enderror
    <div class="form-group">
    <label for="exampleInputPassword1">Last name</label>
    <input type="text" value="{{old('last_name')}}" name="last_name" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  @error('last_name')
        <div class="alert alert-danger p-2 mt-2 mx-2"> {{ $message }}</div>
    @enderror
    <div class="form-group">
    <label for="exampleInputPassword1">Contact Number</label>
    <input type="text" value="{{old('contact_number')}}" name="contact_number" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  @error('contact_number')
        <div class="alert alert-danger p-2 mt-2 mx-2"> {{ $message }}</div>
    @enderror
    <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="text" value="{{old('email')}}" name="email" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  @error('email')
        <div class="alert alert-danger p-2 mt-2 mx-2"> {{ $message }}</div>
    @enderror
  <button type="submit" class="btn btn-primary">Submit</button>
</form>    
</body>
</html>