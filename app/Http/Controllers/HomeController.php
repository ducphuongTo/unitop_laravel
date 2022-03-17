<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Redis;

class HomeController extends Controller
{
    //
    public function redirect()
    {
        $usertype = Auth::User()->usertpye;

        if ($usertype == '1') {
            return view('admin.home');
        } else {
            $data = Product::paginate(3);
            return view('user.home', compact('data'));
        }
    }

    public function index()
    {
        if (Auth::id()) {
            return redirect('redirect');
        } else {
            $data = Product::paginate(3);
            $user = Auth()->user();
            $trending_category = Category::where('popular', '1')->take(2)->get();

            return view('user.home', compact('data', 'user', 'trending_category'));
        }
    }

    public function about()
    {
        return view(
            'user.about'
        );
    }

    public function contact()
    {
        return view(
            'user.contact'
        );
    }

    public function search(Request $request)
    {
        $search = $request->search;
        if ($search == '') {
            $data = Product::paginate(3);
            return view('user.home', compact('data'));
        }
        $data = Product::where('title', 'LIKE', '%' . $search . '%')->get();

        return view('user.home', compact('data'));
    }

    public function addCart(Request $request, $id)
    {
        if (Auth::id()) {

            $user = Auth()->user();
            $product = Product::find($id);
            $cart = new Cart();

            $cart->name = $user->name;
            $cart->phone = $user->phone;
            $cart->address = $user->address;

            $cart->product_title = $product->title;
            $cart->price = $product->price;
            $cart->product_quantity = $request->quantity;
            $cart->save();

            return redirect()->back()->with('message', 'Product added to cart successfully');
        } else {
            return redirect('login');
        }
    }
    public function showcart()
    {
        $user = Auth()->user();
        $cart = Cart::where('phone', $user->phone)->get();
        $count = Cart::where('name', $user->name)->count();
        return view('user.showcart', compact('count', 'cart'));
    }
    public function delete($id)
    {
        $data = Cart::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Product deleted  successfully');
    }
    public function confirmOrder(Request $request)
    {
        $user = Auth()->user();

        $name = $user->name;
        $phone = $user->phone;
        $address = $user->address;

        foreach ($request->productname as $key => $productname) {
            $order = new Order();
            $order->product_name = $request->productname[$key];
            $order->price = $request->price[$key];
            $order->quantity = $request->product_quantity[$key];

            $order->name = $name;
            $order->phone = $phone;
            $order->address = $address;
            $order->status = 'not delivered';
            $order->save();
        }
        DB::table('carts')
            ->where('phone', $phone)->delete();
        return redirect()->back()->with('message', 'Product Order successfully');
    }


    public function showproduct()
    {
        $data = Product::all();
        return view('user.showproduct', compact('data'));
    }


    public function productview($cate_slug, $prod_name)
    {
        if (Category::where('slug', $cate_slug)->exists()) {
            if (Product::where('slug', $prod_name)->exists()) {
                $products = Product::where('slug', $prod_name)->first();
                return view('user.product.index', compact('products'));
            } else {
                return redirect('/')->with('status', 'The link was broken');
            }
        } else {
            return redirect('/')->with('status', 'No such category found');
        }
    }

    public function category()
    {
        $category = Category::where('status', '0')->get();

        return view('user.category.view', compact('category'));
    }

    public function viewcategory($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $products = Product::where('cate_id', $category->id)->get();
        return view('user.product.view', compact('category', 'products'));
    }
}
