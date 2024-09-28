<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Models\Contact;
use App\Models\Category;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function about()
    {
        return view('theme.about');
    }
    public function services()
    {
        return view('theme.services');
    }
    public function contact()
    {
        // $data = Contact::where('first_name', '=', 'Ahmed')->get();
        // dd($data);
        // return view('theme.contact', compact('data'));
        $categories = Category::all();
        return view('theme.contact', compact('categories'));
    }
    public function store(StoreContactRequest $request)
    {
        $validatedData = $request->validated();
        // dd($validatedData);
        // $validatedData =   $request->validate([
        //     'first_name' => 'required|string|min:5',
        //     'last_name' => 'required|string|min:5',
        //     'email' => 'required|email',
        //     'message' => 'nullable',
        // ]);


        // dd($validatedData);
        Contact::create($validatedData);
        return back()->with('status', 'Done');
    }

    public function display()
    {
        $data = Contact::paginate(5);
        return view('theme.display-contacts', compact('data'));
    }
}
