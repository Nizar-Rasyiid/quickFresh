<x-adminheader/>

<div class="main-panel mt-5 ml-auto">
    <div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="mb-4">Driver List</h2>

        <a href="{{route('createDriver')}}" class="btn btn-success">Add Driver</a>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Username</th>
                {{-- <th>Password</th> --}}
                <th>Balance</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($drivers as $driver)
                    <tr>
                        <td>{{ $driver->idDriver }}</td>
                        <td>{{ $driver->namaDriver }}</td>
                        <td>{{ $driver->emailDriver }}</td>
                        <td>{{ $driver->username ?? 'N/A' }}</td>
                        {{-- <td>{{ $driver->password ?? 'N/A' }}</td> --}}
                        <td>{{ $driver->balance ?? 'N/A' }}</td>
                        <td class="text-center">
                            <a href="{{url('/driver/edit/' . $driver->idDriver )}}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ url('/driverDelete/' . $driver->idDriver) }}" method="POST" style="display:inline;">
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
