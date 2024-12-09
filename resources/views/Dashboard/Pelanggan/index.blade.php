<x-adminheader/>

<div class="main-panel mt-5 ml-auto">
    <div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="mb-4">Pelanggan List</h2>

        <a href="{{route('pelanggan.create')}}" class="btn btn-success">Add Pelanggan</a>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>alamat</th>
                {{-- <th>Password</th> --}}
                <th>Nomor Telepon</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($pelanggans as $p)
                    <tr>
                        <td>{{ $p->idPelanggan }}</td>
                        <td>{{ $p->namaPelanggan }}</td>
                        <td>{{ $p->emailPelanggan }}</td>
                        <td>{{ $p->alamat ?? 'N/A' }}</td>
                        {{-- <td>{{ $driver->password ?? 'N/A' }}</td> --}}
                        <td>{{ $p->noTelp ?? 'N/A' }}</td>
                        <td class="text-center">
                            <a href="{{url('/driver/edit/' . $p->idPelanggan )}}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ url('/driverDelete/' . $p->idPelanggan) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center">No drivers available.</td>
                    </tr>
                    @endforelse
        </tbody>
    </table>
</div>
