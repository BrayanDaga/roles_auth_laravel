@csrf
<div class="form-group">
    <label for="name">Nombre del rol</label>
    <input id="name" class="form-control" type="text" name="name" value="{{ $role->name ?? '' }}">
</div>
<div class="form-group">
    <label for="slug">URL Amigable</label>
    <input id="slug" class="form-control" type="text" name="slug" value="{{ $role->slug ?? '' }}">
</div>
<div class="form-group">
    <label for="description">Descripcion</label>
    <textarea name="description" class="form-control">{{ $role->description ?? '' }}</textarea>
</div>
<hr>

<h3>Permiso especial</h3>
<div class="form-group">
    <label class="form-check-inline" for="special">
        <input type="radio" class="form-check-input" id="special" name="special" value="all-access"
        @isset($role)
            @if ($role->special=='all-access')
             {{'checked'}}
            @endif
        @endisset>Acceso total
    </label>
    <label class="form-check-inline" for="special">
        <input type="radio" class="form-check-input" id="special" name="special" value="no-access"
        @isset($role)
            @if ($role->special=='no-access')
            {{'checked'}}
        @endif
        @endisset>Ningún acceso
    </label>
</div>
<hr>
<h3>Lista de permisos</h3>


<div class="form-group">
 <ul class="list-unstyled">
  @foreach($permissions as $permission)
   <div class="form-check">
    <label class="form-check-label" for="permissions[{{ $permission->id }}]">
     <!--
     En la vista recibimos 2 arrays : "permissions" que contiene TODOS los PERMISOS y "assignedPermisions" que contiene los PERMISOS asignados a cada ROLE
     Vamos recorriendo el ARRAY de TODOS los PERMISOS y generando los INPUT CHECKBOX
     Si el ID del PERMISO $permission->id se encuenta el array de assignedPermissions ponemos el texto "checked" y si no ""
     -->
     <input type="checkbox" value="{{ $permission->id }}"
       name="permissions[]" id="permissions[{{ $permission->id }}]"
       class="form-check-input"
       @if(isset($assignedPermissions)){{in_array($permission->id,$assignedPermissions) ? 'checked':''}}@endif
       >{{ $permission->name }}
     <em>({{ $permission->description ? : 'Sin descripción' }})</em>
    </label>
   </div>
  @endforeach
 </ul>
</div>
<div class="form-group">
    <button type="submit" class="btn btn-sm btn-primary">Guardar</button>
 </div>
