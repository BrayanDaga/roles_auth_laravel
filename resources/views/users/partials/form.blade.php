@csrf

<div class="form-group">
    <label for="name">Nombre</label>
    <input name="name" type="text" value="@isset($user->name){{ $user->name }}@endisset" class="form-control">


</div>

<hr>
<h3>Lista de Roles</h3>

<div class="form-group">
    <ul>
        @foreach ($roles as $role)
            <li>
                <label>
                    <input type="checkbox" name="roles[]" value="{{ $role->id }}"
                    @foreach ($user->roles as $rolUser)
                    @if ($rolUser->id == $role->id)
                      checked
                    @endif
                    @endforeach
                    >
                    {{ $role->name }}
                    <em>({{ $role->description }})</em>
                </label>
            </li>
        @endforeach
    </ul>
</div>
<button type="submit" class="btn btn-sm btn-primary">Guardar</button>
