
    @foreach($users as $user)
    <tr class="border-b border-gray-300 hover:bg-gray-100">
        <td class="p-2">{{ $user->name }}</td>
        <td class="p-2 text-left">{{ $user->email }}</td>
        <td class="p-2 text-left">{{ $user->status }}</td>
        <td class="p-2">{{ $user->created_at->format('d/m/Y') }}</td>
        <td class="p-2">{{ $user->role }}</td>
        <td class="p-2">
            <div class="flex space-x-2">
                <a href="{{ route('admin.users.edit', ['user' => $user->id]) }}" class="text-alert-500 hover:text-alert-700">Editar</a>
                <form action="{{ route('admin.users.destroy', ['user' => $user->id]) }}" method="POST" class="inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-danger-500 hover:text-danger-700" onclick="return confirm('¿Estás seguro de que deseas eliminar este usuario?');">Eliminar</button>
                </form>
                <a href="#" class="text-primary-500 hover:text-primary-700">Restablecer Contraseña</a>
            </div>
        </td>
    </tr>
    @endforeach

