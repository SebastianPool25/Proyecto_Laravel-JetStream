<div>
    <input wire:model="search" type="text" placeholder="Ingresa users"/>
    <ul>
        @foreach($users as $user)
            <li>{{ $user->name }} | {{ $user->email }}</li>
        @endforeach
    </ul>
</div>
