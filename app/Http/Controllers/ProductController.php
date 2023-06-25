<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductController extends Controller
{
    public function index()
    {
        return Product::all();
    }

    public function show($id)
    {
        return Product::find($id);
    }

    public function store_product(Request $request)
    {
        return Product::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->update($request->all());
        return $product;
    }

    public function destroy($id)
    {
        return Product::destroy($id);
    }

    public function productTables()
    {
        $products = DB::table('products')->get();
        return view('admin.product.index', compact('products'));
    }

    public function edit(Request $request)
    {
        // dd($request);
        $formFields = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category' => 'required',
            'price' => 'required',
            'rating' => 'required',
            'count' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $req = $request->file('image');
            $fileName = time() . '_' . $req->getClientOriginalName();
            $req->move(public_path('images'), $fileName);
            $formFields['image'] = $fileName;
            DB::table('products')->where('id', $request->id)->update([
                'image' => $formFields['image']
            ]);
        }

        DB::table('products')->where('id', $request->id)->update([
            'name' => $formFields['name'],
            'description' => $formFields['description'],
            'category' => $formFields['category'],
            'price' => $formFields['price'],
            'rating' => $formFields['rating'],
            'count' => $formFields['count']
        ]);
        echo 1;
    }


    public function create()
    {
        return view('admin.product.create');
    }

    public function store(Request $request)
    {

        $formFields = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category' => 'required',
            'price' => 'required',
            'rating' => 'required',
            'count' => 'required'
        ]);


        if ($request->hasFile('image')) {
            $req = $request->file('image');
            $fileName = time() . '_' . $req->getClientOriginalName();
            $req->move(public_path('images'), $fileName);
            $formFields['image'] = $fileName;
        }

        Product::create($formFields);

        return redirect('product/index')->with('message', 'Product is created successfully');
    }

    public function delete($id)
    {
        DB::table('products')->where('id', $id)->delete();

        return redirect('product/index');
    }

    public function make_seeder($id){
      
      $seeder =   new DatabaseSeeder;
      $seeder->test($id);
    }

    public function notification()
    {
       
        return view('notifications.notification');
    }
}
