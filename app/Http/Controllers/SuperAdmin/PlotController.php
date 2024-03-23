<?php

namespace App\Http\Controllers\SuperAdmin;

use DataTables;
use App\Models\Plot;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // $plots = Plot::orderBy('id', 'DESC')->paginate(10);
        // return view("super_admin.plot.index", compact('plots'));
        if ($request->ajax()) {
            $data = Plot::select('*')->orderBy('id', 'DESC');
            // dd($data->get());
            $counter = 1; // Add this line to initialize the counter

            $formattedData = [];

            foreach ($data->get() as $row) {
                $formattedData[] = [
                    'sno' => $counter++,
                    'id' => $row->id,
                    'plot_number' => $row->plot_number,
                    'size' => $row->size,
                    'type' => $row->type,
                    'created_at' => date('d M Y', strtotime($row->created_at)),
                    // 'advance_payment' => $row->advance_payment,
                    // 'total_amount' => $row->total_amount,
                    // Add other columns as needed
                ];
            }
            // dd($data, $formattedData);

            return Datatables::of($formattedData)
                    ->addIndexColumn()
                    ->addColumn('created_at', function ($row) {
                        $created_at = '<span class="badge badge-info">'. $row['created_at'] .'</span>';

                        return $created_at;
                    })
                    ->addColumn('action', function ($row) {
                        $btn = '<a title="Show" href="'.route('super-admin.plots.show', $row['id']) .'" class="btn text-info"><i class="fa fa-eye"></i></a>
                                <a title="Edit" href="'. route('super-admin.plots.edit', $row['id']) . '" class="btn text-primary"><i class="fa fa-edit"></i></a>
                                <form action="'. route('super-admin.plots.destroy', $row['id']) .'" method="POST" style="display:inline">
                                    <input type="hidden" name="_token" value="'. csrf_token() .'" autocomplete="off">
                                    <input type="hidden" name="_method" value="DELETE" autocomplete="off">
                                    <button title="Delete" type="submit" class="btn text-danger link" onclick="return confirm(`Are you sure?`)"><i class="fa fa-trash"></i></button>
                                </form>';

                        return $btn;
                    })
                    ->rawColumns(['action', 'created_at'])
                    ->make(true);
        }

        return view('super_admin.plot.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('super_admin.plot.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'plot_number' => 'required|unique:plots,plot_number',
            'size' => 'required|numeric',
            'type' => 'required',
            // 'advance_payment' => 'required|numeric',
            // 'total_amount' => 'required|numeric',
        ]);

        Plot::create($request->all());

        return redirect()->route('super-admin.plots.index')->with('success', 'Plot created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Plot $plot)
    {
        return view('super_admin.plot.show', compact('plot'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Plot $plot)
    {
        return view('super_admin.plot.edit', compact('plot'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $plot = Plot::find($id);
        // dd($id, $plot);
        $request->validate([
            'plot_number' => 'required|unique:plots,plot_number,' . $id,
            'size' => 'required|numeric',
            'type' => 'required',
            // 'advance_payment' => 'required|numeric',
            // 'total_amount' => 'required|numeric',
        ]);

        $plot->update($request->all());
        return redirect()->route('super-admin.plots.index')->with('success', 'Plot updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Plot $plot)
    {
        $plot->delete();
        return redirect()->route('super-admin.plots.index')->with('success', 'Plot deleted successfully!');
    }
}
