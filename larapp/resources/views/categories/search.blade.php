@forelse ($categories as $category)
    <tr>
        <td>{{ $category->name }}</td>
        <td><img src="{{ asset($category->image) }}" width="36px" class="img-thumbnail rounded-circle"></td>
        <td class="d-none d-md-table-cell">{{ $category->description }}</td>                
        <td>
            <a href="{{ url('categories/'.$category->id) }}" class="btn btn-sm btn-larapp">
                <i class="fas fa-search"></i>
            </a>
            <a href="{{ url('categories/'.$category->id.'/edit') }}" class="btn btn-sm btn-larapp">
                <i class="fas fa-pen"></i>
            </a>
            <form action="{{ url('categories/'.$category->id) }}" class="d-inline" method="POST">
                @csrf
                @method('delete')
                <button type="button" class="btn btn-sm btn-danger btn-delete">
                    <i class="fas fa-trash"></i>
                </button>
            </form>
        </td>
    </tr>
@empty
    <tr>
        <td colspan="5" class="text-center">
            No users found by Name and Description!
        </td>
    </tr>
@endforelse 