<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show()
    {
        // For now, we'll assume there's only one profile or we take the first one.
        // Later, this could be enhanced to take an ID or a slug.
        $profile = Profile::first();

        // If no profile exists, we can create a default one or pass null.
        // For simplicity, we'll pass null and let the view handle it.
        // Alternatively, you could pass an empty Profile object:
        // $profile = $profile ?? new Profile();

        return view('profile.show', ['profile' => $profile]);
    }
}
