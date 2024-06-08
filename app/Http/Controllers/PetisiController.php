<?php

namespace App\Http\Controllers;

use App\Models\Petisi;
use Illuminate\Http\Request;
use Dompdf\Dompdf;

class PetisiController extends Controller
{
    public function index()
    {
        $petisis = Petisi::all();
        return view('petisi.index', compact('petisis'));
    }

    public function create()
    {
        return view('petisi.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
            'status' => 'required|string|max:50',
        ]);

        Petisi::create($validated);

        return redirect()->route('petisi.index')->with('success', 'Petisi berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $petisi = Petisi::findOrFail($id);
        return view('petisi.edit', compact('petisi'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
            'status' => 'required|string|max:50',
        ]);

        $petisi = Petisi::findOrFail($id);
        $petisi->update($validated);

        return redirect()->route('petisi.index')->with('success', 'Petisi berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $petisi = Petisi::findOrFail($id);
        $petisi->delete();

        return redirect()->route('petisi.index')->with('success', 'Petisi berhasil dihapus.');
    }

    public function print()
    {
        // Query data from the database
        $petisis = Petisi::all();
    
        // Create Dompdf instance
        $dompdf = new Dompdf();
    
        // Generate HTML for the PDF
        $html = view('petisi.print', compact('petisis'))->render();
    
        // Load HTML content into Dompdf
        $dompdf->loadHtml($html);
    
        // Set paper size and orientation
        $dompdf->setPaper('A4', 'landscape');
    
        // Render PDF
        $dompdf->render();
    
        // Output PDF to the browser
        return $dompdf->stream("daftar_petisi.pdf");
    }
}
