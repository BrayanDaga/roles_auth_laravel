@csrf
<div class="form-group">
    <label for="name">Nombre del producto</label>
    <input id="name" class="form-control" type="text" name="name" value="{{ $product->name ?? '' }}">
</div>
<div class="form-group">
    <label for="description">Descripcion del producto</label>
    <input id="description" class="form-control" type="text" name="description" value="{{ $product->description ?? '' }}">
</div>
<div class="form-group">
   <button type="submit" class="btn btn-sm btn-primary">Guardar</button>
</div>
