public function store(Request $request)
{
    // Procesar el formulario y crear el destino

    if ($destinoCreado) {
        return response()->json(['success' => true]);
    } else {
        return response()->json(['success' => false]);
    }
}
