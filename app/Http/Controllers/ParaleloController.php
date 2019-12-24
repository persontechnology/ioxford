<?php

namespace iouesa\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use iouesa\Models\Paralelo;
use iouesa\Models\Periodo;

class ParaleloController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function guardar(Request $request)
    {
        
        $request->validate([
            'tipo' => 'required|in:EI,BE,BM,BS,BU',
            'periodo' => 'required|exists:periodos,id',
            "curso_periodos"    => "nullable|array",
            "curso_periodos.*"  => "nullable|exists:curso_periodos,id",
        ]);
        $periodo=Periodo::findOrFail($request->periodo);
        $this->authorize('actualizar', $periodo);
        if($request->curso_periodos){
            foreach ($request->curso_periodos as $c_p) {
                $cur_per=Paralelo::where(['curso_periodo_id'=>$c_p,'nombre'=>$request->paralelo])->first();
                if(!$cur_per){
                    $cur_per=new Paralelo();
                    $cur_per->curso_periodo_id=$c_p;
                    $cur_per->nombre=$request->paralelo;
                    $cur_per->save();
                }
            }
        }

        activity()
        ->causedBy(Auth::user())
        ->performedOn($periodo)
        ->log('Actualizo paralelos en periodo '.$periodo->nombre??'');
        
        $request->session()->flash('success','Paralelos creado');
        
        return redirect()->route('cursos',['tipo'=>$request->tipo,'periodo'=>$request->periodo]);
    }

    public function eliminar(Request $request,$paraleloId)
    {
        $paralelo=Paralelo::findOrFail($paraleloId);
        $this->authorize('actualizar', $paralelo->cursoPeriodo->periodo);
        try {
            $paralelo->delete();
            $request->session()->flash('success','Paralelo eliminado exitosamente');

            activity()
        ->causedBy(Auth::user())
        ->performedOn($paralelo)
        ->log('Elimino paralelo '.$paralelo->nombre??'');

        } catch (\Exception $th) {
            $request->session()->flash('info','No se puede eliminar paralelo');
        }

        return redirect()->route('cursos',['tipo'=>$paralelo->cursoPeriodo->curso->tipo,'periodo'=>$paralelo->cursoPeriodo->periodo->id]);
    }
}
