@extends('front.layouts.app')
@section('content')

<div class="container carrito-container mt-3">

        <h2 class="d-block text-center main-color">Carrito</h2>

    <p class="text-center">Hacé tu pedido y recibilo en la puerta de tu casa!</p>

    <div class="row panel-agregarNuevo justify-content-center my-3">
        <a class="main-btn btn my-3" href="{{route('productos.index')}}">Seguir comprando</a>
    </div>

    <div class="row panel-detalles justify-content-center">
        <table id="listado" class="table table-bordered table-hover w-100">
            <thead>
                <tr>
                  <th class="main-color">Producto</th>
                  <th class="main-color">Precio Unitario</th>
                  <th class="main-color">Cantidad</th>
                  <th class="main-color">Descuento</th>
                  <th class="main-color">Subtotal</th>
                  <th class="main-color">Acciones</th>
                </tr>
            </thead>
            <tbody id="myTable">


                
                <tr>
                    <td class="align-middle">Producto</a></td>
                    <td class="align-middle precio_unitario">100</td>
                    <td class="align-middle cantidad">2</td>
                    <td class="align-middle descuento">10%</td>
                    <td class="align-middle subtotal">90</td>
                    <td>    
                        <form action="" method="post" class="align-middle float-left">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="id" value="id">
                            <button type="submit" title="Eliminar producto" class="main-btn btn" onclick="return confirm('Seguro que quiere eliminar el producto del carrito?')"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        </form>


                    </td>
                </tr>

              </tbody>

          </table>
    </div>
    <div class="my-5 contenedor-totales d-flex justify-content-center align-items-center">
        <span class="mr-5"> Total: $90 (+ envío)</span>
        <button type="button" class="main-btn btn ">Comprar Todo</button>
    </div>
  </div>
  <div class="container contenedor-faq">
        <h2 class="main-color text-center my-4">Preguntas frecuentes</h2>

        <div class="contenedor-pregunta">
            <h4 class="main-color">¿Puedo freezar productos?</h4>
            <p>¡Si! Todos nuestros productos pueden freezarse tranquilamente, y descongelarse a temperatura ambiente o como más te gusten ¡aprovechá y hacé un pedido para toda la semana!</p> 
        </div>

        <div class="contenedor-pregunta">
            <h4 class="main-color">¿Puedo pedir desde otro barrio?</h4>
            <p> Lamentablemente no, porque no podemos hacer envíos fuera del radio indicado. Pero aún podés acercarte a nuestros locales ¡consultá horarios actualizados en Instagram!</p>
        </div>

        <div class="contenedor-pregunta">
            <h4 class="main-color">¿En qué horario me lo entregan?</h4>
            <p> Los pedidos se entregan entre las 10:00 y 15:00 aproximadamente. El orden de entrega depende de los pedidos del día, y no es posible especificar una hora exacta. Considerá que debido a las circunstancias y controles en las calles, a veces pueden haber pequeñas demoras.</p>
        </div>

        <div class="contenedor-pregunta">
            <h4 class="main-color">¿Y si no veo el producto que me gusta en la lista?</h4>
            <p> Los productos disponibles son sólo los publicados. Como todo lo que enviamos es fresco y del día, seguimos un calendario de producción ¡Chequeá los últimos productos y especiales de la semana en Instagram!</p>
        </div>

        <div class="contenedor-pregunta">
            <h4 class="main-color">¿Cuánto sale el envío?</h4>
            <p> El costo del envío depende de dónde quieras recibir el producto. Luego de realizar tu pedido, te contactaremos informándote el importe final que vas a pagar!</p>
        </div>
    </div>

</main>


@endsection