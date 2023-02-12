<?php

namespace App\Http\Controllers;

use App\Models\Ministry;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    public function index(Request $request)
    {
        $ministries = Ministry::when($request->search, function($query) use ($request) {
            return $query->where('title', 'like', '%'.$request->search.'%')
                        ->orWhere('description', 'like', '%'.$request->search.'%');
        })->paginate(5);

        return view('index', compact('ministries'));
    }

}
