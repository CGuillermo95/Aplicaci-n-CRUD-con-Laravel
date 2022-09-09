@csrf
<div class="row">
    <div class="col-sm-12">
        <label for="InputNombre" class="form-label">* Nombre de la Tarea</label>
        <input type="text" name="Nombre" id="InputNombre" class="form-control" placeholder="..." value="{{ old('Nombre', $tarea->Nombre) }}" autofocus>
    </div>

    <div class="col-sm-4 my-3">
        <div class="form-check">
            <input type="checkbox" name="Finalizada" id="InputFinalizada" class="form-check-input" value="1" @checked( {{ old('Finalizada', $tarea->Finalizada) }})>
            <label for="InputFinalizada" class="form-check-label">Finalizada</label>
        </div>
    </div>

    <div class="col-sm-4 my-3">
        <label for="SelectUrgencia" class="form-label">* Urgencia</label>
        <select name="Urgencia" id="SelectUrgencia" class="form-select">
            @for($x = 0; $x < count($urgencias); $x++)
                <option value="{{ $x }}" @selected( {{ old('Urgencia', $tarea->Urgencia) }})>{{ $urgencias[$x] }}</option>
            @endfor          
        </select>
    </div>

    <div class="col-sm-4 my-3">
        <label for="InputFechaLimite" class="form-label">*Fecha Límite</label>
        <input type="datetime-local" name="Fecha_limite" id="InputFechaLimite" class="form-control" value="{{ old('Fecha_limite', $tarea->Fecha_limite->format('Y-m-d\TH:i')) }}">
    </div>
    <div class="col-sm-12 my-3">
        <label for="TextAreaDescripcion" class="form-label">Descripción</label>
        <textarea name="Descripcion" id="TextAreaDescripcion" cols="30" rows="8" class="form-control">{{ old('Descripcion', $tarea->Descripcion) }}</textarea>
    </div>
    <div class="col-sm-12 text-end my-3">
            <button type="submit" class="btn btn-outline-success btn-xs"><i class="fa thin fa-check"></i> GUARDAR</button>
    </div>
</div>