<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{

    public function index()
    {
        $teachers = Teacher::all();
        return view('teachers.index', compact('teachers'));
    }

    public function create()
    {
        return view('teachers.create');
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'name' => 'required|string|min:5|max:255',
            'subject' => 'required|string|min:5|max:255',
        ]);

        // Crear un nuevo profesor usando el método `create` del modelo
        Teacher::create($request->all());

        // Redireccionar a la vista de listado de profesores
        return redirect()->route('teachers.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('teachers.edit', compact('teacher'));
    }

    public function update(Request $request, string $id)
    {
        // Validar los datos del formulario
        $request->validate([
            'name' => 'required|string|min:5|max:255',
            'subject' => 'required|string|min:5|max:255',
        ]);

        // Buscar el profesor por su ID
        $teacher = Teacher::findOrFail($id);

        // Actualizar los datos del profesor
        $teacher->update($request->all());

        // Redireccionar a la vista de listado de profesores
        return redirect()->route('teachers.index');
    }

    public function destroy(string $id)
    {
        $teacher = Teacher::findOrFail($id);

        $teacher->delete();

        return redirect()->route('teachers.index');
    }
}
