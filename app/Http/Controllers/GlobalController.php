<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class GlobalController extends Controller
{
    public function addCategory(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        return redirect('/manage-category')->with('status', 'Berhasil ditambah');
    }

    public function addProduct(/** $id **/ Request $request)
    {   
        $product = new Product();
        $product->name = $request->name;
        $product->category_id = $request->category;
        $product->merk = $request->merk;
        $product->harga_beli = $request->harga_beli;
        $product->harga_jual = $request->harga_jual;
        $product->stock = $request->stock;
        $product->disc = $request->disc;
        $product->save();
        return redirect('/')->with('status', 'Berhasil ditambah');
    }

    // public function getproductsByCategory($id)
    // {
    //     $products = Category::find($id)->product;
    //     return $products;
    // }

    public function categoryForm()
    {
        return view('form.category');
    }

    public function productForm(Category $category)
    {
        $category = $category->all();
        return view('form.product', ['category' => $category]);
    }

    public function index(Product $product)
    {
        $product = $product->all();
        return view('haikal.index', ['product' => $product]);
    }

    public function manageCategory(Category $category)
    {
        $category = $category->all();
        return view('haikal.managecategory', ['category' => $category]);
    }

    public function edit(Product $product,  Category $category)
    {
        $category = $category->all();
        return view('form.edit', ['product' => $product, 'category' => $category]);
    }

    public function categoryEdit(Product $product,  Category $category)
    {
        return view('form.categoryedit', ['product' => $product, 'category' => $category]);
    }

    public function update(Product $product, Request $request)
    {
        Product::where('id', $product->id)
                ->update([
                    'name' => $request->name,
                    'category_id' => $request->category,
                    'merk' => $request->merk,
                    'harga_beli' => $request->harga_beli,
                    'harga_jual' => $request->harga_jual,
                    'stock' => $request->stock,
                    'disc' => $request->disc
                ]);
        
        return redirect('/')->with('status', 'Berhasil Diupdate');
    }

    public function categoryUpdate(Category $category, Request $request)
    {
        Category::where('id', $category->id)
                ->update([
                    'name' => $request->name,
                ]);
        
        return redirect('/manage-category')->with('status', 'Berhasil Diupdate');
    }

    public function destroy(Product $product)
    {
        Product::destroy($product->id);
        return redirect('/')->with('status', 'Berhasil dihapus');
    }

    public function categoryDestroy(Category $category)
    {
        Category::destroy($category->id);
        return redirect('/manage-category')->with('status', 'Berhasil dihapus');
    }
}