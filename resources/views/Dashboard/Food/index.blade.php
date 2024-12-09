<x-adminheader/>

<div class="main-panel mt-5 ml-auto">
    <div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="mb-4">Food List</h2>

        <a href="{{route('foods.create')}}" class="btn btn-success">Add Food</a>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Description</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($foods as $food)
                    <tr>
                        <td>{{ $food->id }}</td>
                        <td>{{ $food->name }}</td>
                        <td>{{ $food->price }}</td>
                        <td>{{ $food->stock }}</td>
                        <td>{{ $food->description ?? 'N/A' }}</td>
                       <td>
                        <img src="{{ asset('images/' . $food->image) }}" alt="{{ $food->name }}" width="50">
                    </td> 
                        <td class="text-center">
                            <a href="{{url('/food/edit/' . $food->id )}}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ url('/foodDelete/' . $food->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center">No food items available.</td>
                    </tr>
                    @endforelse
        </tbody>
    </table>
</div>
