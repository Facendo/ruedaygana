<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\..\resources\css\styles.css">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <title>Compra</title>
</head>
<body>
<section id="compra" class="container container_compra">
    <div class="container_compra">
        <div class="cont_form">
            <form action="{{route(cliente.store)}}" method="POST" class="form_compra">
                @csrf
                <input type="text" placeholder="cedula" id="cedula">
                <input type="text" placeholder="nombre" id="nombre">
                <input type="text" placeholder="apellido" id="apellido">
                <input type="text" placeholder="telefono" id="telefono">
                <input type="text" placeholder="correo" id="correo">
                <input type="text" placeholder="cantidad de tickets" id="cantidad">
                <input type="number" placeholder="referencia de pago" id="referencia">
                <input type="number" placeholder="monto" id="monto">
                <input type="date" placeholder="fecha de pago" id="fecha">
                <div>
                    <label for="opcion">Metodo de pago</label>
                    <select id="opcion" name="opcion">
                        <option value="opcion1">Pago Movil</option>
                        <option value="opcion2">Zelle</option>
                        <option value="opcion3">Binance</option>
                    </select>
                </div>
                <div>
                    <label for="imagen">Subir comprobante de pago</label>
                    <input type="file" id="imagen" name="imagen" accept="image/*">
                </div>
                <button class="button" type="submit">enviar</button>
            </form>
        </div>
    </div>
</section>
</body>
</html>
