<html lang="en">
  <head>
        <link rel="stylesheet" href="CSS/style.css">
        <link rel="stylesheet" href="CSS/bootstrap.min.css">
        <script src="js/bootstrap.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
     <meta charset="utf-8">
           <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Derivadas</title>
  </head>
  <body>
    <div class="container-fluid px-5 mt-4"> <!-- Este es el margen para que los bordes, no tocar me costo mucho -->
      <div class="p-5 mb-4 bg-body-tertiary rounded-3">
        <div class="container-fluid py-5">
          <h1 class="display-5 fw-bold">Las derivadas</h1>
          <p class="col-md-8 fs-4" style="text-align: justify;">
            Son la medida de cómo cambio una función cuando su variable independiente cambia. Representa la tasa de cambio instantánea o la razón de cambio en un punto específico ademas de ser la pendiente de la recta tangente a una curva en un punto indicado.
          </p>
          <button class="btn btn-primary btn-lg" type="button" data-bs-toggle="modal" data-bs-target="#ModalHistoria">Saber más &raquo;</button>
        </div>
      </div>

      <div class="row justify-content-center"> <!-- este es el aspecto de las cartitas esas -->

        <div class="col-md-4 mb-4">
          <div class="card h-100 border-0">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title fw-bold">Uso de las derivadas</h5>
                <p class="card-text">Un ejemplo de aplicación de la derivada es en una pandemia para calcular si la curva de contagios esta subiendo o bajando en cierto dia.</p>
                <button type="button" class="btn btn-secondary text-black mt-auto align-self-start" data-bs-toggle="modal" data-bs-target="#ejemplosModalUno"><!-- Este boton es para que salga una pestañita con más usos de las Derivadas-->
                 Otras aplicaciones&raquo;
                </button>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="card h-100 border-0"> <!-- borde-0 elimina los bordes -->
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">Reglas de derivación</h5>
                <p class="card-text">Las reglas de derivación son fórmulas preestablecidas que nos permiten calcular la derivada de una función sin tener que aplicar toda la operación de la definición formal de las derivadas.</p>
                <button type="button" class="btn btn-secondary text-black mt-auto align-self-start" data-bs-toggle="modal" data-bs-target="#ejemplosModalDos"><!-- Este boton es para que salga una pestañita las reglas de las Derivadas -->
                 Ver reglas&raquo;
              </button>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="card h-100 border-0">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Ejemplo</h5>
              <p class="card-text">Un ejemplo de derivada es la de una constante con una variable, f(x)=5x cuya derivada es f'(x)=5.</p>
              <button type="button" class="btn btn-secondary text-black mt-auto align-self-start" data-bs-toggle="modal" data-bs-target="#ejemplosModalTres"><!-- Este boton es para que salga una pestañita con más ejemplos de Derivadas,que listo que sos Diego -->
                 Más ejemplos raquo;
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="ModalHistoria" tabindex="-1" aria-labelledby="ejemplosModalLabel" aria-hidden="true"> <!-- Este de la historia de las derivadas-->
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="ejemplosModalLabel">Leibniz y Newton</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

        <div class="modal-body">
          <p>Se supone que contaria la historia pero ya me arte</p>
        <ul>
          <li><strong>Constante:</strong> Si f(x) = k, entonces f'(x) = 0.</li>
          <li><strong>Variable:</strong> Si f(x) = x, entonces f'(x) = 1.</li>
          <li><strong>Constante con variable:</strong> Si f(x) = cx, entonces f'(x) = c.</li>
          <li><strong>Potencia:</strong> Si f(x) = x<sup>n</sup>, entonces f'(x) = n &middot; x<sup>n-1</sup>.</li>
        </ul>
          <div class="alert alert-info">
            Recuerda que la derivada siempre mide la <strong>razón de cambio</strong>.
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="ejemplosModalUno" tabindex="-1" aria-labelledby="ejemplosModalLabel" aria-hidden="true"> <!-- Este del uso de las derivadas-->
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="ejemplosModalLabel">Ejemplos de Derivadas Comunes</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

        <div class="modal-body">
          <p>Aquí si:</p>
        <ul>
          <li><strong>Constante:</strong> Si f(x) = k, entonces f'(x) = 0.</li>
          <li><strong>Variable:</strong> Si f(x) = x, entonces f'(x) = 1.</li>
          <li><strong>Constante con variable:</strong> Si f(x) = cx, entonces f'(x) = c.</li>
          <li><strong>Potencia:</strong> Si f(x) = x<sup>n</sup>, entonces f'(x) = n &middot; x<sup>n-1</sup>.</li>
        </ul>
          <div class="alert alert-info">
            Recuerda que la derivada siempre mide la <strong>razón de cambio</strong>.
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="ejemplosModalDos" tabindex="-1" aria-labelledby="ejemplosModalLabel" aria-hidden="true"> <!-- Este es de las reglas de derivación -->
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="ejemplosModalLabel">Ejemplos de Derivadas Comunes</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

        <div class="modal-body">
          <p>Aquí tienes algunas reglas de las derivadas:</p>
        <ul>
          <li><strong>Constante:</strong> Si f(x) = k, entonces f'(x) = 0.</li>
          <li><strong>Variable:</strong> Si f(x) = x, entonces f'(x) = 1.</li>
          <li><strong>Constante con variable:</strong> Si f(x) = cx, entonces f'(x) = c.</li>
          <li><strong>Potencia:</strong> Si f(x) = x<sup>n</sup>, entonces f'(x) = n &middot; x<sup>n-1</sup>.</li>
          <li><strong>Producto:</strong> Si y= f(x) &middot; g(x) &DoubleRightArrow; y'= f'(x) &middot; g(x) + f(x) &middot; g'(x)</li>
          <li>
            <strong>Cociente:</strong> Si y = 
              <div style="display: inline-block; vertical-align: middle; text-align: center; font-size: 0.9em;">
                <div style="border-bottom: 1px solid black; padding: 0 5px;">f(x)</div>
                <div>g(x)</div>
              </div>
                &DoubleRightArrow; y' = 
                <div style="display: inline-block; vertical-align: middle; text-align: center; font-size: 0.9em;">
                  <div style="border-bottom: 1px solid black; padding: 0 5px;">
                    f'(x) &middot; g(x) &minus; f(x) &middot; g'(x)
                  </div>
                <div>
                  [g(x)]<sup>2</sup>
                </div>
                </div>
          </li>
          <li><strong>Cadena:</strong> Si h(x)= f(g(x)) &DoubleRightArrow; h'= f'(g(x)) &middot; g'(x)</li>  
        </ul>
          <div class="alert alert-info">
            Recuerda que la derivada siempre mide la <strong>razón de cambio</strong>.
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="ejemplosModalTres" tabindex="-1" aria-labelledby="ejemplosModalLabel" aria-hidden="true"> <!-- Este es de los ejemplos de derivadas -->
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="ejemplosModalLabel">Ejemplos de Derivadas Comunes</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

        <div class="modal-body">
          <p>Aquí tienes algunas ejemplos basicoss de las derivadas:</p>
        <ul>
          <li><strong>Constante:</strong> Si f(x) = 51, entonces f'(x) = 0.</li>
          <li><strong>Variable:</strong> Si f(x) = x, entonces f'(x) = 1.</li>
          <li><strong>Constante con variable:</strong> Si f(x) = 6x, entonces f'(x) = 6.</li>
          <li><strong>Potencia:</strong> Si f(x) = x<sup>3</sup>, entonces f'(x) = 3x<sup>2</sup>.</li>
          <li><strong>Producto:</strong> Si y= (x<sup>2</sup>-2x)(4-4x) &DoubleRightArrow; y'= -12x<sup>2</sup>+24x-8</li>
          <li>
            <strong>Cociente:</strong> Si y = 
              <div style="display: inline-block; vertical-align: middle; text-align: center; font-size: 0.9em;">
                <div style="border-bottom: 1px solid black; padding: 0 5px;">f(4)</div>
                <div>g(x)</div>
              </div>
                &DoubleRightArrow; y' = 
                <div style="display: inline-block; vertical-align: middle; text-align: center; font-size: 0.9em;">
                  <div style="border-bottom: 1px solid black; padding: 0 5px;">
                    -4
                  </div>
                <div>
                  x<sup>2</sup>
                </div>
                </div>
          </li>
          <li><strong>Cadena:</strong> Si h(x)= (x<sup>3</sup>+1)<sup>4</sup> &DoubleRightArrow; h'= 4(x<sup>3</sup>+1)<sup>3</sup> &middot; (3x<sup>2</sup>) = 12x<sup>2</sup>(x<sup>3</sup>+1)<sup>3</sup></li> 
        </ul>
          <div class="alert alert-info">
            Recuerda que la derivada siempre mide la <strong>razón de cambio</strong>.
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
        </div>
      </div>
    </div>

  </body>
  <footer class="pt-3 mt-4 ms-4 me-4 text-body-secundary border-top">&copy;Chi Poot Diego Fernando 2026</footer>
</html>
