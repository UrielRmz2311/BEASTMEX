<!DOCTYPE html>
<html>
<head>
    <title>Detalle del Producto</title>
</head>
<body>
    <h1>Detalle del Producto</h1>
    <p><strong>No. de Serie:</strong> {{ $producto->noserie }}</p>
    <p><strong>Marca:</strong> {{ $producto->marca }}</p>
    <p><strong>Cantidad:</strong> {{ $producto->cantidad }}</p>
    <p><strong>Costo de compra:</strong> {{ $producto->costodecompra }}</p>
    <p><strong>Precio de Venta:</strong> {{ $producto->preciodeventa }}</p>
    <p><strong>Fecha de Ingreso:</strong> {{ $producto->fechaingreso }}</p>
    <p><strong>Imagen del producto:</strong> {{ $producto->fotoproducto }}</p>
    <img src="{{ asset($producto->fotoproducto) }}" alt="Imagen del producto">

</body>
</html>