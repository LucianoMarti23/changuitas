{{-- resources/views/partials/publications_table.blade.php --}}
@foreach($jobs as $job)
    <tr class="border-b border-gray-300 hover:bg-gray-100">
        <td class="p-2">{{ $job->job_title }}</td>
        <td class="p-2">{{ $job->category->name }}</td>
        <td class="p-2">{{ $job->created_at->format('d/m/Y') }}</td>
        <td class="p-2">{{ $job->user->email }}</td>
        <td class="p-2"></td>
        <td class="p-2">
            <div class="flex space-x-2">
                <form action="{{ route('admin.destroyPub', $job->id) }}" method="POST" class="inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-danger-500 hover:text-danger-700" onclick="return confirm('¿Estás seguro de que deseas eliminar este job?');">Eliminar</button>
                </form>
            </div>
        </td>
    </tr>
@endforeach

