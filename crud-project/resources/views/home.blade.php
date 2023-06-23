<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">  

</head>
<body>
    

<form action="{{ route('save.user') }}" method="post">
    @csrf
  <div class="form-group">
    <label for="">Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter name">
  </div>
  <div class="form-group m">
    <label for="">Email address</label>
    <input type="email" class="form-control" name="email" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="">Phone</label>
    <input type="text" class="form-control" name="phone" placeholder="phone">
  </div>
  <div class="form-group">
    <label for="">Register Number</label>
    <input type="text" class="form-control" name="rgnumber" placeholder="Register  number">
  </div>

  <div class="form-group">
    <!-- <label for="">Gender</label>
    <select name="" name="gender" class="form-control">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select> -->
    <label for="gender">Gender:</label><br>
        <select id="gender" name="gender" required>
            @foreach(\App\Models\User::getGenderOptions() as $value => $label)
                <option value="{{ $value }}">{{ $label }}</option>
            @endforeach
        </select>
  </div>
  <div class="form-group">
    <label for="">Course</label>
    <input type="text" class="form-control" name="course" placeholder="course">
  </div>
  <button type="submit" class="btn btn-primary mt-3">Submit</button>
</form>
</body>
</html>