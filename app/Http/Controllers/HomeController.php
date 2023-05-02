<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Osama;

class HomeController extends Controller
{
     public function osama(){
          return view('website.index');
     }

     public function delete_carousel($id)
     {
          DB::table('carousels')->where('id', $id)->delete();
          echo 1;
     }

     public function update_carousel(Request $request)
     {
          $formFields = $request->validate([
               'title' => 'required',
               'description' => 'required',
          ]);

          if ($request->hasFile('image')) {
               $req = $request->file('image');
               $fileName = time() . '_' . $req->getClientOriginalName();
               $req->move(public_path('images'), $fileName);
               $formFields['image'] = $fileName;
               DB::table('carousels')->where('id', $request->id)->update([
                    'image' => $formFields['image']
               ]);
          }

          DB::table('carousels')->where('id', $request->id)->update([
               'title' => $formFields['title'],
               'description' => $formFields['description'],
          ]);

          echo 1;
     }

     public function login(Request $request){
          
     }
     // public function addimage(Request $request)
     // {
     //      // $image = new Image;
     //      // $image->title = $request->title;

     //      if ($request->hasFile('image')) {

     //           // $path = $request->file('image')->store('images');
     //           // $image->url = $path;

     //           $req = $request->file('image');
     //           $fileName = time() . '_' . $req->getClientOriginalName();
     //           $req->move(public_path('images'), $fileName);
     //           $formFields['image'] = $fileName;
     //      }
     //      // $image->save();
     //      // return new ImageResource($image);
     // }

     public function index()
     {
          return Carousel::all();
     }

     public function store_carousel(Request $request)
     {
          $formFields = $request->validate([
               'title' => 'required',
               'description' => 'required'
          ]);
          if ($request->hasFile('image')) {
               $req = $request->file('image');
               $fileName = time() . '_' . $req->getClientOriginalName();
               $req->move(public_path('images'), $fileName);
               $formFields['image'] = $fileName;
          }

          return Carousel::create($formFields);
          // return Carousel::create($request->all());
     }

     public function home()
     {
          $carousels = DB::table('carousels')->get(); 
          $products = DB::table('products')->get(); 
          return view('site.home', ['carousels' => $carousels, 'products'=> $products]);
     }

     public function detail()
     {
          return view('site.detail');
     }


     public function carouselTables()
     {
          $carousels = DB::table('carousels')->get();
          return view('admin.carousel.index', ['carousels' => $carousels]);
     }

     public function show($id)
     {
          $carousel = DB::table('carousels')->where('id', $id)->get()[0];

          return view('admin.carousel.show', compact('carousel'));
     }

     public function edit(Request $request)
     {

          $formFields = $request->validate([
               'title' => 'required',
               'description' => 'required',
          ]);

          if ($request->hasFile('image')) {
               $req = $request->file('image');
               $fileName = time() . '_' . $req->getClientOriginalName();
               $req->move(public_path('images'), $fileName);
               $formFields['image'] = $fileName;
               DB::table('carousels')->where('id', $request->id)->update([
                    'image' => $formFields['image']
               ]);
          }

          DB::table('carousels')->where('id', $request->id)->update([
               'title' => $formFields['title'],
               'description' => $formFields['description'],
          ]);

          echo 1;
     }


     public function create()
     {
          return view('admin.carousel.create');
     }

     public function store(Request $request)
     {

          $formFields = $request->validate([
               'title' => 'required',
               'description' => 'required'
          ]);

          if ($request->hasFile('image')) {
               $req = $request->file('image');
               $fileName = time() . '_' . $req->getClientOriginalName();
               $req->move(public_path('images'), $fileName);
               $formFields['image'] = $fileName;
          }

          Carousel::create($formFields);

          return redirect('carousel/index')->with('message', 'Carousel post is created successfully');
     }

     public function getImage($imageName)
     {
          // echo "Hello world";
          $filePath = public_path() . '/images/' . $imageName;
          return response()->file($filePath);
     }

     public function delete($id)
     {
          DB::table('carousels')->where('id', $id)->delete();

          return redirect('carousel/index');
     }

     public function deleteAll()
     {
          Carousel::truncate();
          return redirect('carousel/index');
     }
}
