<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function product()
    {
        if (Auth::id()) {
            if (Auth::user()->usertpye == '1') {
                return view('admin.product');
            } else {
                return redirect()->back();
            }
        } else {
            return redirect('login');
        }
    }

    public function uploadProduct(Request $request)
    {

        $category_id = Category::all();
        $data = new Product();
        $image = $request->file;
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $request->file->move('productimage', $imageName);
        $data->image = $imageName;

        $data->title = $request->title;
        $data->category = $request->category;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->quantity = $request->quantity;
        $data->save();

        return view('admin.product', compact('category_id'));
    }
    public function showproduct()
    {
        $data = Product::all();
        return view('admin.showproduct', compact('data'));
    }


    public function deleteproduct($id)
    {
        $data = product::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Product deleted successfully');
    }

    public function updateview($id)
    {
        $data = product::find($id);

        return view('admin.updateview', compact('data'));
    }

    public function updateproduct(Request $request, $id)
    {
        $data = product::find($id);

        $image = $request->file;
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $request->file->move('productimage', $imageName);
            $data->image = $imageName;
        }


        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->quantity = $request->quantity;
        $data->save();
        return redirect()->back()->with('message', 'Product updated successfully');
    }

    public function showorder()
    {
        $order = Order::all();
        return view('admin.showorder', compact('order'));
    }
    public function updatestatus($id)
    {
        $order = Order::find($id);
        $order->status = 'delivered';
        $order->save();

        return redirect()->back();
    }
}
