<?php

namespace App\Http\Controllers;
// namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\product;
use App\Models\category;
use Illuminate\Support\Facades\Validator;
use App\Models\admins;
use Illuminate\Support\Facades\Hash;


class HomeController extends Controller
{
    // public function login(Request $request)
    // {
    //     $credentials = $request->only('username', 'password');

    //     if (Auth::attempt($credentials)) {
    //         return redirect()->intended('/');
    //     }

    //     return redirect('/login')->with('error', 'Invalid credentials. Please try again.');
    // }

    //code for adding the new product to the table
    public function saveproduct(Request $request){
        $validatedData = $request->validate([
            'productname' => 'required|string|max:255',
            'productcategory' => 'required|string|max:255',
            'productprice' => 'required|string|max:255',
            'productsellingprice' => 'required|string|max:255',
            'productquantity' => 'required',
            'productstatus' => 'required',            
            'productimage' => 'required|max:500000',
        ]);
        // $message = [

        // ];
        // //validate the request data
        // $validate = Validator::make($request->all(), $rules, $message);

        // //Check if validation fails
        // if ($validate->fails()) {
        //     return redirect('add-product')
        //         ->withErrors($validate)
        //         ->withInput();
        // }
        $newproduct = new product();
        $newproduct->productname = $request->productname;
        $newproduct->productcategory = $request->productcategory;
        $newproduct->productprice = $request->productprice;
        $newproduct->productsellingprice = $request->productsellingprice;
        $newproduct->productquantity = $request->productquantity;
        $newproduct->productstatus = $request->productstatus;
        $newproduct->productimage = $request->productimage;
        $newproduct->save();
        return redirect('products');
    }

    //code for retriving the Product list
    public function products()
    {
        $result = product::get();
        return view('products', ['result' => $result]);

    }

    //code for retriving category-list for adding a new product
    public function chooseCategory()
    {
        $result = category::get();
        return view('addproduct', ['result' => $result]);
    }

    //code for saving the new category
    public function savecategory(Request $request)
    {
        $rules = [
            'categoryname' => 'required|string|max:255',
        ];
        $message = [];
        //validate the request data
        $validate = Validator::make($request->all(), $rules, $message);

        //Check if validation fails
        if ($validate->fails()) {
            return redirect('add-categories')
                ->withErrors($validate)
                ->withInput();
        }
        $newproduct = new category();
        $newproduct->categoryname = $request->categoryname;
        $newproduct->save();
        return redirect('categories');
    }

    //code for retriving the category list
    public function retrivecategories()
    {
        $result = category::get();
        return view('categories', ['result' => $result]);
    }

    //code for saveing the user deatils
    public function saveregistration(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|max:255|email',
            'password' => 'required|string|min:8|max:16',
        ]);

        $newuser = new admins();
        $newuser->username = $request->username;
        $newuser->email = $request->email;
        $newuser->password = Hash::make($request->password);
        $newuser->save();

        
        return redirect('login');   
    }

    public function userlogin(){

        return view('login');
    }

    //AUTHENTICATE
    public function authenticate(Request $request){  
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        // $credentials = array(
            
        //     'username'  => $request->username,
        //     'password'  => $request->password
        // );
        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            $request->session()->put('username', $request->username);
            return redirect('')
                ->withSuccess('You have successfully logged in!');
        }
        

        else{
            return back()->withErrors([
                'username' => 'Your provided credentials do not match our records.',
            ])->onlyInput('username');
        }

    }
    public function landing(Request $request){
        $username = $request->session()->get('username');
        return view('landing')->with('username', $username);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')
            ->withSuccess('You have logged out successfully!');;
    }
}

