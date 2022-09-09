<div>
    <div class="row">
        <div class="col-sm-8 my-2">
            <input type="text" name="" id="" placeholder="Buscar..." class="form-control" wire:model="busqueda">
        </div>
        <div class="col-sm-3 my-2">
            <select name="" id="" class="form-select" wire:model = 'paginacion'>
                <option value="5">5</option>
                <option value="20">20</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
        </div>
    </div>
    
    <table class="table table-stripped table-hover my-3">
        <thead>
            <tr>
                <th>
                    NOMBRE
                </th>
                <th>
                    FINALIZADA
                </th>
                <th>
                    FECHA LÍMITE
                </th>
                <th>
                    URGENCIA
                </th>
                <th>
                    DESCRIPCIÓN
                </th>
                <th>
                    ACCIÓN
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($tareas as $tarea)
                <tr>
                    <td>
                        {{ $tarea->Nombre }}
                    </td>
                    <td>
                        {{ $tarea->estaFinalizada() }}
                    </td>
                    <td>
                        {{ $tarea->Fecha_limite->format('H:i - d/m/y') }}
                    </td>
                    <td>
                        {{ $tarea->urgencias() }}
                    </td>
                    <td>
                        {{ $tarea->Descripcion }}
                    </td>
                    <td>
                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group mr-2" role="group" aria-label="First group">
                                <form method="get" action="{{ route('tarea.edit', $tarea) }}">
                                    <button type="submit" class="btn btn-outline-primary btn-xs"></a><i class="fas fa-edit"></i></button>
                                </form>
                            </div>
                            
                            <div class="btn-group mr-2" role="group" aria-label="Second group">
                                <form method="get" action="{{ route('tarea.show', $tarea) }}">
                                    <button type="submit" class="btn btn-outline-success btn-xs"><i class="fas solid fa-eye"></i></button>
                                </form>
                            </div>

                            <div class="btn-group mr-3" role="group" aria-label="Third group">
                                <form action="{{ route('tarea.destroy', $tarea) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-outline-danger btn-xs"><i class="fas solid fa-trash"></i></button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $tareas->links() }}
</div>
