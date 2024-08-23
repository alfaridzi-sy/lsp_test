<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = auth()->user()->role_id;
        $user = auth()->user()->user_id;

        if($role == 1){
            $products = Product::with('images')->get();
        }else if($role == 2){
            $products = Product::with('images')->where('user_id', $user)->get();
        }

        return view('admin.product.index', ["products" => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.product.create', ["categories" => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'foto.*' => 'image|mimes:jpeg,png,jpg,gif|max:10240', // Validasi foto
        ]);

        // dd($request->all());

        $product = Product::create($request->all());

        if ($request->hasFile('foto')) {
            foreach ($request->file('foto') as $foto) {
                $imagePath = $foto->storeAs('public/product_images', $foto->getClientOriginalName());
                // Ubah path sesuai dengan struktur folder di dalam public
                $imagePath = str_replace('public/', '', $imagePath);
                ProductImage::create([
                    'image_path' => $imagePath,
                    'product_id' => $product->product_id
                ]);
            }
        }

        return redirect('product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($product_id)
    {
        $product = Product::find($product_id);
        return view('admin.product.detail', ["product" => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($product_id)
    {
        $product = Product::find($product_id);
        $categories = Category::all();
        return view('admin.product.update', ["product" => $product, "categories" => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $product_id)
    {
        $product = Product::find($product_id);
        $product->update($request->all());
        return redirect('product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($product_id)
    {
        $productImage = ProductImage::where('product_id', $product_id)->get();
        foreach($productImage as $pi){
            // Hapus gambar dari storage
            Storage::disk('public')->delete($pi->image_path);

            ProductImage::destroy($pi->product_image_id);
        }
        Product::destroy($product_id);
        return redirect('product');
    }

    public function editImage($product_id)
    {
        // $productImages = ProductImage::where('product_id', $product_id)->get();
        $product = Product::find($product_id);
        return view('admin.product.editImage', ["product" => $product]);
    }

    public function storeImage(Request $request)
    {
        $request->validate([
            'foto.*' => 'image|mimes:jpeg,png,jpg,gif|max:10240', // Validasi foto
        ]);

        if ($request->hasFile('foto')) {
            foreach ($request->file('foto') as $foto) {
                $imagePath = $foto->storeAs('public/product_images', $foto->getClientOriginalName());
                // Ubah path sesuai dengan struktur folder di dalam public
                $imagePath = str_replace('public/', '', $imagePath);
                ProductImage::create([
                    'image_path' => $imagePath,
                    'product_id' => $request->product_id
                ]);
            }
        }

        // Menggunakan back() untuk kembali ke halaman sebelumnya
        return back()->with('success', 'Foto berhasil ditambahkan.');
    }

    public function deleteImage($product_image_id)
    {
        $productImage = ProductImage::find($product_image_id);
        // Hapus gambar dari storage
        Storage::disk('public')->delete($productImage->image_path);

        // Hapus record gambar dari database
        ProductImage::destroy($product_image_id);

        return redirect()->back()->with('success', 'Gambar produk berhasil dihapus.');
    }
}
