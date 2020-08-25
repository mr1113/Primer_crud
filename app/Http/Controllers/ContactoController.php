<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\ContactoFormRequest;
use App\Contacto;
use Illuminate\Support\Facades\DB;
//const UPDATED_AT = null;

class ContactoController extends Controller
{
    public function __construct()
    {
        
    }

    public function index(Request $request)
    {
        $query=trim($request->get('searchText'));
        $contactos=DB::table('Contactos')->where('nombre_apellido',
        'LIKE', '%' .$query. '%')->paginate(10);
       return view('contacto.index' ,["Contactos"=>$contactos,
       "searchText"=> $query]);
    }

    public function create(Request $request){
 
        return view('contacto.create');
    }

    public function store(ContactoFormRequest $request){

        /* return $request->all(); */

        $request->validate([
            'nombre_apellido' => 'required',
            'telefono' => 'required'
        ]);

        $crear=request()->all();
        $crear=request()->except('_token');
        Contacto::insert($crear);
     
        return redirect('contacto')->with('mensaje', 'Se ha editado correctamente');

    }

    public function show($id){

        $cont = Contacto::findOrFail($id);

        return view('contacto.show', compact('cont'));

    }

    public function edit($id){

        $cont = Contacto::findOrFail($id);
        /* dd($editar); */
        return view('contacto.edit', compact('cont'));

    }

    public function update(ContactoFormRequest $request, $id){

        $contacto = Contacto::findOrFail($id);
        $contacto->nombre_apellido=$request->nombre_apellido;
        $contacto->direccion=$request->direccion;
        $contacto->telefono=$request->telefono;
        $contacto->email=$request->email;
        $contacto->nacimiento=$request->nacimiento;
        $contacto->update();

        return redirect('contacto');

    }

    public function destroy($id){

        DB::table('Contactos')->delete($id);

        return redirect('/contacto')->with('alert',"se ha eliminado el contacto");

    }


}
