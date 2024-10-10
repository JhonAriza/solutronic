<div class="container">

    <h1>{{$modo}} Empresa</h1>
<div class="row">

    </div>
    <br>
    <div class="row">
    <div class="col-9">
        <label for="nombre">nombre</label>
        <input type="text" class="form-control" required name="nombre" id="nombre" value="{{ isset($item->nombre)?$item->nombre:'' }}">
        <div class="valid-feedback">Cargando..</div>
        <div class="invalid-feedback">Falta llenar el campo nombre</div>
    </div>







    <div class="col-9">
        <label for="nombre">nombre</label>
        <input type="text" class="form-control" required name="nombre" id="nombre" value="{{ isset($item->nombre)?$item->nombre:'' }}">
        <div class="valid-feedback">Cargando..</div>
        <div class="invalid-feedback">Falta llenar el campo nombre</div>
    </div>
    <div class="col-9">
        <label for="nombre">nombre</label>
        <input type="text" class="form-control" required name="nombre" id="nombre" value="{{ isset($item->nombre)?$item->nombre:'' }}">
        <div class="valid-feedback">Cargando..</div>
        <div class="invalid-feedback">Falta llenar el campo nombre</div>
    </div>
    <div class="col-9">
        <label for="nombre">nombre</label>
        <input type="text" class="form-control" required name="nombre" id="nombre" value="{{ isset($item->nombre)?$item->nombre:'' }}">
        <div class="valid-feedback">Cargando..</div>
        <div class="invalid-feedback">Falta llenar el campo nombre</div>
    </div>
    <div class="col-9">
        <label for="nombre">nombre</label>
        <input type="text" class="form-control" required name="nombre" id="nombre" value="{{ isset($item->nombre)?$item->nombre:'' }}">
        <div class="valid-feedback">Cargando..</div>
        <div class="invalid-feedback">Falta llenar el campo nombre</div>
    </div>
    <div class="col-9">
        <label for="nombre">nombre</label>
        <input type="text" class="form-control" required name="nombre" id="nombre" value="{{ isset($item->nombre)?$item->nombre:'' }}">
        <div class="valid-feedback">Cargando..</div>
        <div class="invalid-feedback">Falta llenar el campo nombre</div>
    </div>
    <div class="col-9">
        <label for="nombre">nombre</label>
        <input type="text" class="form-control" required name="nombre" id="nombre" value="{{ isset($item->nombre)?$item->nombre:'' }}">
        <div class="valid-feedback">Cargando..</div>
        <div class="invalid-feedback">Falta llenar el campo nombre</div>
    </div>
    <div class="col-9">
        <label for="nombre">nombre</label>
        <input type="text" class="form-control" required name="nombre" id="nombre" value="{{ isset($item->nombre)?$item->nombre:'' }}">
        <div class="valid-feedback">Cargando..</div>
        <div class="invalid-feedback">Falta llenar el campo nombre</div>
    </div>
    <div class="col-9">
        <label for="nombre">nombre</label>
        <input type="text" class="form-control" required name="nombre" id="nombre" value="{{ isset($item->nombre)?$item->nombre:'' }}">
        <div class="valid-feedback">Cargando..</div>
        <div class="invalid-feedback">Falta llenar el campo nombre</div>
    </div>
    <div class="col-9">
        <label for="nombre">nombre</label>
        <input type="text" class="form-control" required name="nombre" id="nombre" value="{{ isset($item->nombre)?$item->nombre:'' }}">
        <div class="valid-feedback">Cargando..</div>
        <div class="invalid-feedback">Falta llenar el campo nombre</div>
    </div>
    <div class="col-9">
        <label for="nombre">nombre</label>
        <input type="text" class="form-control" required name="nombre" id="nombre" value="{{ isset($item->nombre)?$item->nombre:'' }}">
        <div class="valid-feedback">Cargando..</div>
        <div class="invalid-feedback">Falta llenar el campo nombre</div>
    </div>
    <div class="col-9">
        <label for="nombre">nombre</label>
        <input type="text" class="form-control" required name="nombre" id="nombre" value="{{ isset($item->nombre)?$item->nombre:'' }}">
        <div class="valid-feedback">Cargando..</div>
        <div class="invalid-feedback">Falta llenar el campo nombre</div>
    </div>
    <div class="col-9">
        <label for="nombre">nombre</label>
        <input type="text" class="form-control" required name="nombre" id="nombre" value="{{ isset($item->nombre)?$item->nombre:'' }}">
        <div class="valid-feedback">Cargando..</div>
        <div class="invalid-feedback">Falta llenar el campo nombre</div>
    </div>
    <div class="col-9">
        <label for="nombre">nombre</label>
        <input type="text" class="form-control" required name="nombre" id="nombre" value="{{ isset($item->nombre)?$item->nombre:'' }}">
        <div class="valid-feedback">Cargando..</div>
        <div class="invalid-feedback">Falta llenar el campo nombre</div>
    </div>

    <div class="col-9">
        <label for="nombre">nombre</label>
        <input type="text" class="form-control" required name="nombre" id="nombre" value="{{ isset($item->nombre)?$item->nombre:'' }}">
        <div class="valid-feedback">Cargando..</div>
        <div class="invalid-feedback">Falta llenar el campo nombre</div>
    </div>

    <div class="col-9">
        <label for="nombre">nombre</label>
        <input type="text" class="form-control" required name="nombre" id="nombre" value="{{ isset($item->nombre)?$item->nombre:'' }}">
        <div class="valid-feedback">Cargando..</div>
        <div class="invalid-feedback">Falta llenar el campo nombre</div>
    </div>
    <div class="col-9">
        <label for="nombre">nombre</label>
        <input type="text" class="form-control" required name="nombre" id="nombre" value="{{ isset($item->nombre)?$item->nombre:'' }}">
        <div class="valid-feedback">Cargando..</div>
        <div class="invalid-feedback">Falta llenar el campo nombre</div>
    </div>













   <!-- SE CREA SELECT PARA LA LLAVE FORANEA de Proveeedor -->
   <div class="row">
    <div class="col-12">
        <div class='mb4'>
            <select class="form-control" name="cliente_id" required>
                <option value="">Selelecionar Empresa</option>
                @foreach ($clientes as $item)
                <option value="{{ $item->id }}">
                    {{ $item->nombre}}.
                </option>
                @endforeach
            </select>
        </div>
        <div class="valid-feedback">Cargando..</div>
        <div class="invalid-feedback">Falta seleccionar empresa </div>
        </div>
       </div>

    <br>


    <br>   <br>   <br>   <br>   <br>   <br>   <br>   <br>   <br>   <br>
    <br>



    <br>
    <div class="row">

    <input type="submit" class="btn btn-secondary" value="{{$modo}} datos">
    <a href="  {{url('empresa/')}}" class="btn btn-warning">Regresar al inicio</a>
    </div>
</div>


<script>
    // validacion de campos del formulario BOOSTRAP
    (function() {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>
