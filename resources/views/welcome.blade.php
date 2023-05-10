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
<form action="{{route('">
    @if(session('message'))
        <span class="alert alert-success">{{session('message')</span>
    @endif
  <div class="form-group">
    <label for="exampleInputPassword1">first_name</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    @error('first_name')
        <span class="alert alert-danger"> {{ message }}</span>
    @error
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>    
</body>
</html>