<div>
    {{-- Be like water. --}}
    <h1>Usuarios existentes</h1>
    <p>{{ $mensaje }}</p>
    <input type="text" id="prueba" name="prueba" wire:model='mensaje'>
    <div>
        <div class="flex">
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td><button wire:click="show ({{ $user->id }})">Detalles</button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div>
                <h2>Detalles del user</h2>
                @isset($detallesUser)
                <ul>
                    <li>Nombre: {{ $detallesUser->name }} 
                    <button wire:click="edit({{$user->id}})">editar</button>
                    @if ($editarNombre)
                    <input type="text" wire:model="nombre">
                    <button wire:click = "update({{$detallesUser->id}})">aceptar</button>
                    </li>
                    @else

                    @endif
                    <li>Email: {{ $detallesUser->email }}</li>
                    <li>Confirmado desde: {{$detallesUser->email_verified_at->locale('es')->isoFormat('dddd, MMMM D, YYYY');}}</li>
                </ul>
                @endisset
            </div>
        </div>
    </div>
    {{ $users->links() }}
</div>
