@foreach($categories as $category)
    <tr class="border-b border-gray-300 hover:bg-gray-100">
        <td class="p-2">{{ $category->name }}</td>
        <td class="p-2">{{ $category->created_at->format('d/m/Y') }}</td>
        <td class="p-2">
            <a href="{{ route('admin.category.edit', $category->id) }}" class="text-alert-500 hover:text-alert-700 ml-4">Editar</a>
            <form action="{{ route('admin.category.destroy', $category->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-alert-500 hover:text-alert-700">Eliminar</button>
            </form>
        </td>
    </tr>
@endforeach

