<?php

namespace App\Http\Livewire;

use App\Models\Tarea;
use Livewire\Component;
use Livewire\WithPagination;


class TareaIndex extends Component
{
    use WithPagination;

    public $busqueda = '';
    public $paginacion = 10;
    protected $paginationTheme = 'bootstrap';
    protected $queryString = [
        'busqueda' => ['except' => '', 'as' => 'busq'],
        'paginacion' => ['except' => 10, 'as' => 'pag'],
    ];

    public function render()
    {
        $tareas = $this->consultas();
        $tareas = $tareas->paginate($this->paginacion);
        if ($tareas->currentPage() > $tareas->lastPage()) {
            $this->resetPage();
            $tareas = $this->consultas();
            $tareas = $tareas->paginate($this->paginacion);

        }
        $params = [
            'tareas' => $tareas
        ];
        return view('livewire.tarea-index', $params);
    }

    private function consultas() {
        $query = Tarea::orderByDesc('id');
        if ($this->busqueda != '') {
            $query->where('nombre', 'LIKE', '%'.$this->busqueda.'%');
        }
        return $query;
    }
}
