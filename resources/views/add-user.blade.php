<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add user</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">
       <div class="card">
        <div class="card-header">
            Add New User
        </div>        
        @if (session('fail'))
    <div class="alert alert-danger">
        {{ session('fail') }}
    </div>
@endif
        
        <div class="card-body">
           
        <form action="{{ route('AddUser')}}" method="POST">
        @csrf
     
        <div class="mb-3">
                <label for="full name" class="form-label">Full Name</label>
                <input type="text" name="full_name" class="form-control" placeholder="Enter your name">
                @error('full_name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter your email">
                @error('email')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="phone number" class="form-label">Phone Number</label>
                <input type="number" name="phone_number" class="form-control" placeholder="Enter your phone number">
                @error('phone_number')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                 <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter your password">
                @error('password')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                 <label for="password" class="form-label">Re-Type Password</label>
                <input type="password" name="password_confirmation" class="form-control" placeholder="Enter your password">
                @error('password_confirmation')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
           
            
            
                <button type="submit" class="btn btn-primary">Save</button>
            
        </form>
        </div>
       </div>
       
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>