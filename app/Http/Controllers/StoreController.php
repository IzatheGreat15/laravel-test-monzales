<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class StoreController extends Controller
{
    public function index(){
        $user = Auth::user();
        $stores = $user->stores()->paginate(2);

        return view('dashboard', compact('stores'));
    }

    public function show($id){
        $store = Store::with('user')->findOrFail($id);

        return view('store', compact('store'));
    }


    public function store(Request $request){
        $user = Auth::user();

        $validator = Validator::make($request->all(), [
            'store_title' => ['required', 'string', 'max:255'],
            'store_description' => ['required', 'string'],
        ]);

        if($validator->fails()) {
            return redirect('/dashboard')
                ->withErrors($validator)
                ->withInput();
        }
    
        $store = new Store();
        $store->title = $request->store_title;
        $store->description = $request->store_description;
    
        $user->stores()->save($store);

        return redirect('/dashboard')->with('success', 'Store added successfully.');
    }

    public function update(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'store_title' => ['required', 'string', 'max:255'],
            'store_description' => ['required', 'string'],
        ]);

        if($validator->fails()) {
            return redirect('/dashboard')
                ->withErrors($validator)
                ->withInput();
        }

        $store = Store::findOrFail($id);

        $store->title = $request->store_title;
        $store->description = $request->store_description;
        $store->save();

        return redirect('/dashboard')->with('success', 'Store updated successfully.');
    }

    public function delete($id){
        $store = Store::findOrFail($id);
        $store->delete();

        return redirect('/dashboard')->with('success', 'Store deleted successfully.');
    }
}
