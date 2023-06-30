<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors = Doctor::all();

        return view('dashboard.doctor.index', [
            'title' => 'Doctor',
            'active' => 'dashboard.doctors.index',
            'doctors' => $doctors
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'image|file|max:1024|mimes:jpg,png,gif',
        ]);

        if ($request->file('image')->isValid()) {
            $validatedData['image'] = $request->file('image')->store('doctor-images');
        }else {
            return redirect('/dashboard/doctors')->withErrors(['image' => 'The uploaded file is not a valid image.']);
        }

        $validatedData['user_id'] = auth()->user()->id;

        Doctor::create($validatedData);

        return redirect('/dashboard/doctors')->with('success', 'New doctor has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Doctor $doctor)
    {
        $rules = [
            'image' => 'image|file|max:1024|mimes:jpg,png,gif',
        ];

        $validatedData = $request->validate($rules);

        if($request->file('image')) {
            if ($request->oldImage){
                Storage::delete($request->oldImage);
            }

            $validatedData['image'] = $request->file('image')->store('doctor-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Doctor::where('id', $doctor->id)
            ->update($validatedData);

        return redirect('/dashboard/doctors')->with('success', 'Doctor has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $doctor)
    {
        if($doctor->image) {
            Storage::delete($doctor->image);
        }

        Doctor::destroy($doctor->id);
        return redirect('/dashboard/posts')->with('success', 'Post has been deleted!');
    }
}
