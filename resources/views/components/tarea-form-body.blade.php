@csrf
<div class="row">
    <div class="col-sm-12">
        <label for="InputNombre" class="form-label">Nombre de la tarea</label>
        <input type="text" name="nombre" id="inputNombre" class="form-control" placeholder=".."
            value="{{ old('nombre', $tarea->nombre) }}">
    </div>
    <div class="col-sm-4">
        <div class="form-check">
            <input type="checkbox" name="finalizada" id="InputFinalizada" class="form-check-input" value="1"
                @checked(old('finalizada', $tarea->finalizada))>
            <label for="InputFinalizada" class="form-check-label">Finalizada</label>
        </div>
    </div>
    <div class="col-sm-4">
        <label for="selectUrgencia" class="form-label">Urgencia</label>
        <select name="urgencia" id="selectUrgencia" class="form-select">
            @for ($x = 0; $x < count($urgencias); $x++)
                <option value="{{ $x }}" @selected(old('urgencia', $tarea->urgencia) == $urgencias[$x] )>{{ $urgencias[$x] }}</option>
            @endfor
        </select>
    </div>
    <div class="col-sm-4">
        <label for="InputFechaLimite" class="form-label">Fecha Limite</label>
        <input type="datetime-local" name="fecha_limite" id="inputFechaLimite" class="form-control"
            value="{{ old('fecha_limite', isset($tarea->fecha_limite) ? $tarea->fecha_limite->format('Y-m-d\TH:i') : '') }}">
    </div>
    <div class="col-sm-12">
        <label for="TextAreaDesripcion" class="form-label">Descripcion</label>
        <textarea name="descripcion" id="TextAreaDescripcion" cols="30" rows="10" class="form-control">{{ old('descripcion', $tarea->descripcion) }}</textarea>
    </div>
    <div class="col-sm-12 text-end m-2">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>
