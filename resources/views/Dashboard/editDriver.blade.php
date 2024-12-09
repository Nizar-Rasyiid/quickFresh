<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <h2>Edit Driver</h2>
        <form action="{{ route('driver.update', $driver->idDriver) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="namaDriver">Nama Driver</label>
                <input type="text" class="form-control" id="namaDriver" name="namaDriver" value="{{ $driver->namaDriver }}" required>
            </div>
            <div class="form-group">
                <label for="emailDriver">Email Driver</label>
                <input type="email" class="form-control" id="emailDriver" name="emailDriver" value="{{ $driver->emailDriver }}" required>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" value="{{ $driver->username }}" required>
            </div>
            <div class="form-group">
                {{-- <label for="password">Password</label> --}}
                <input type="password" class="form-control" id="password" name="password" hidden value="{{$driver->password}}">
            </div>
            <div class="form-group">
                <label for="balance">Balance</label>
                <input type="number" class="form-control" id="balance" name="balance" value="{{ $driver->balance }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>