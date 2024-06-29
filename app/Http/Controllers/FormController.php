<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FormController extends Controller
{
    //
    function handleFormSubmission(Request $request)
    {
        // dd($request->all());
        // return $request->input("name");
        $request->validate([
            'profile_picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $name = $request->input("name");
        $email = $request->input("email");
        $path = " ";

        if ($request->has("profile_picture")) {
            $file = $request->file("profile_picture");
            $name = $file->getClientOriginalName();
            // $file->store("uploads", "public");
            $uploadPath = $file->storeAs("uploads", $name, "public");
            $path = Storage::url($uploadPath);
        }

        // return [
        //     "name" => $name,
        //     "email" => $email
        // ];
        // return redirect(route("form.get"))->with("success", "Form submitted successfully!");
        return redirect(route("form.get"))->with([
            "success" => "Form submitted successfully!",
            "name" => $name,
            "email" => $email,
            "profile_picture"  => $path
        ]);
    }
}
