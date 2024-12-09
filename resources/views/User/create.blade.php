<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
</head>
<body>
    <div class="container">
        <h2 class="text-center mb-4" style="color: var(--primary-color);">Isi Datamu Dulu YUKK!</h2>
        <form action="{{route('pelanggan.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="namaPelanggan" class="form-label" style="color: var(--text-color);">Name</label>
                <input type="text" class="form-control input-field" id="namaPelanggan" name="namaPelanggan" required>
            </div>
            <div class="mb-3">
                <label for="emailPelanggan" class="form-label" style="color: var(--text-color);">Email</label>
                <input type="email" class="form-control input-field" id="emailPelanggan" name="emailPelanggan" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label" style="color: var(--text-color);">Alamat</label>
                <input type="text" class="form-control input-field" id="alamat" name="alamat" required>
            </div>
            <div class="mb-3">
                <label for="noTelp" class="form-label" style="color: var(--text-color);">Nomor Telepon</label>
                <input type="noTelp" class="form-control input-field" id="noTelp" name="noTelp" required>
            </div>
            <button type="submit" class="btn button">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>