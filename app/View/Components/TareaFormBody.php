<?php

namespace App\View\Components;

use App\Models\Tarea;
use Carbon\Carbon;
use Illuminate\View\Component;

use function PHPUnit\Framework\isNull;

class TareaFormBody extends Component
{
    private $tarea;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $tarea = null )
    {
        if (is_null($tarea)) {
            $tarea = Tarea::make([
                'urgencia' => 0,
                // 'fecha_limite' => Carbon::now()->addHours(1)
            ]);
        }
        $this->tarea = $tarea;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $params = [
            'tarea' => $this->tarea,
            'urgencias' => Tarea::URGENCIAS
        ];
        return view('components.tarea-form-body', $params);
    }
}
