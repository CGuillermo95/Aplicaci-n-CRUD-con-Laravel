<?php

namespace App\Http\Livewire;

use App\Models\Tarea;
use Livewire\Component;
use Livewire\WithPagination;

class TareaIndex extends Component
{
    use WithPagination;

    public $busqueda = '';
    public $paginacion = 5;
    protected $paginationTheme = 'bootstrap';
    protected $queryString =
    [
        'busqueda' => ['except' => ''],
        'paginacion' => ['except' => 5],
    ];

    public function render()
    {
        $tareas = $this->consulta();
        $tareas = $tareas->paginate($this->paginacion);
        if($tareas->currentpage()>$tareas->lastpage())
        {
            $this->resetPage();
            $tareas = $this->consulta();
            $tareas = $tareas->paginate($this->paginacion);
        }

        $params = [
            'tareas' => $tareas,
        ];
        return view('livewire.tarea-index', $params);
    }

    private function consulta()
    {
        $query = Tarea::orderByDesc('id');
        if($this->busqueda != '')
        {
            $query->where('Nombre', 'LIKE', '%'.$this->busqueda.'%');
        }
        return $query;
    }
}
