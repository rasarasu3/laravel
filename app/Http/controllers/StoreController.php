<?php

public function index() {
    $stores = Store::all();
    return view('stores.index', compact('stores'));
}

public function store(Request $request) {
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'address' => 'required|string|max:255',
    ]);

    Store::create($validatedData);
    return redirect()->back()->with('success', 'Store created successfully');
}
?>