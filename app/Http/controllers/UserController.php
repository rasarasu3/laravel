<?php

public function index() {
    $users = User::all();
    return view('users.index', compact('users'));
}

public function store(Request $request) {
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users',
        'password' => 'required|string|min:8|confirmed',
    ]);

    User::create([
        'name' => $validatedData['name'],
        'email' => $validatedData['email'],
        'password' => bcrypt($validatedData['password']),
    ]);

    return redirect()->back()->with('success', 'User created successfully');
}
?>