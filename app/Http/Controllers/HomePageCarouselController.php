<?php

namespace App\Http\Controllers;

use App\Models\HomePageCarousel;
use Illuminate\Http\Request;

class HomePageCarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carousels = HomePageCarousel::paginate(10);
        // dd($carousels);
        return view('super_admin.home_page_carousel.index', compact('carousels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('super_admin.home_page_carousel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'title' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg,gif',
            'status' => 'nullable',
        ]);

        try {
            $max_order = HomePageCarousel::max('display_order');

            if ($max_order) {
                $max_order++;
            } else {

                $max_order = 1;
            }

            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/home_page_carousel'), $filename);

            $data['image'] = 'uploads/home_page_carousel/' . $filename;
            $data['status'] = ($request->status) ? 1 : 0;
            $data['is_default'] = 0;
            $data['display_order'] = $max_order;

            HomePageCarousel::create($data);

            return redirect()->route('admin.home-page-carousel.index')->with('success', 'HomePageCarousel created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(HomePageCarousel $homePageCarousel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HomePageCarousel $homePageCarousel)
    {
        // $carousels = HomePageCarousel::where('status', 1)->paginate(10);
        return view('super_admin.home_page_carousel.edit', compact('homePageCarousel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HomePageCarousel $homePageCarousel)
    {
        $data = $this->validate($request, [
            'title' => 'required',
            'image' => 'nullable|mimes:png,jpg,jpeg,gif',
            'status' => 'required',
        ]);
        try {

            $data['status'] = ($request->status) ? 1 : 0;
            $data['is_default'] = 0;

            if ($request->hasFile('image')) {
                // if image is not default, then delete
                if ($homePageCarousel->is_default == 0) {
                    deletePublicPathFiles(public_path($homePageCarousel->image));
                }

                $file = $request->file('image');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads/home_page_carousel'), $filename);

                $data['image'] = 'uploads/home_page_carousel/' . $filename;
            }

            $homePageCarousel->update($data);

            return redirect()->route('admin.home-page-carousel.index')->with('success', 'HomePageCarousel update successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HomePageCarousel $homePageCarousel)
    {
        try {

            // if image is not default, then delete
            if ($homePageCarousel->is_default == 0) {
                deletePublicPathFiles(public_path($homePageCarousel->image));
            }
            $homePageCarousel->delete();
            return redirect()->route('admin.home-page-carousel.index')->with('success', 'HomePageCarousel deleted successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function updateStatus(Request $request, $id)
    {
        try {
            $carousel = HomePageCarousel::findOrFail($id);
            if ($carousel) {
                $status = (isset($request->status) and ($request->status == 1)) ? 1 : 0;
                // dd($status);
                $carousel->status = $status;
                $carousel->save();
                return response()->json(returnWebResponse('success', 'Status updated successfully'));
            } else {
                return response()->json(returnWebResponse('error', 'Home page carousel not found, please refresh page and try again'));
            }


            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(returnWebResponse('error', $e->getMessage()));
        }
    }

    public function changeDisplayOrder()
    {
        try {
            $carousels = HomePageCarousel::orderBy('display_order', 'ASC')->get();
            $ids = HomePageCarousel::orderBy('display_order', 'ASC')->pluck('id')->toArray();
            // dd(implode(',', $ids));
            // dd($carousels->toArray());
            return view('super_admin.home_page_carousel.display_order', compact('carousels', 'ids'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function updateDisplayOrder(Request $request)
    {
        try {
            $order = 1;
            $items = explode(',', $request->item);
            // dd($items);
            foreach ($items as $id) {
                HomePageCarousel::where('id', $id)->update(['display_order' => $order]);
                $order++;
            }
            return redirect()->back()->with('success', 'Order changes successfully');
        } catch (\Exception $e) {
            return response()->json(returnWebResponse('error', $e->getMessage()));
        }
    }
}
