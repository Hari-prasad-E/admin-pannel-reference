@extends('landing')
@section('content')
<div class="add-product-section container-fluid">
    <div class="edit-menu row py-2">
        <div class="link-flow col">
            <h1 class="page-head">Products</h1>
            <ul class="breadcrum">
                <li><a href="#">Home</a></li>
                <li><a href="{{ url('products') }}" class="active-link">Products</a></li>
            </ul>
        </div>
        <form action="{{url('saveproduct')}}" method="POST">
            @csrf
            <div class="options col ms-5">
                <button type="submit" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy" viewBox="0 0 16 16">
                        <path d="M11 2H9v3h2z" />
                        <path d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0M1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5m3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4zM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5z" />
                    </svg></button>
                <a href="{{url('products')}}"><button type="button" class="btn btn-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z" />
                            <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z" />
                        </svg></button></a>
            </div>
    </div>
    <div class="row gx-0">
        <div class="add-list col-12">
            <div class="pannel-heading">
                <h3 class="list-heading">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325" />
                    </svg> Add Product
                </h3>
            </div>

            <table class="product-table add-table mt-2">
                <tr>
                    <th class="product-table">Product</th>
                    <th class="product-table">Description</th>
                </tr>
                <tr>
                    <td class="product-table">Product Name</td>
                    <td class="product-table">
                        @error('productname')
                        <div class="error" style="color:red">{{ $message }}</div>
                        @enderror
                        <input type="text" name="productname" class="product-add-input @error('productname') is-invalid @enderror" placeholder="Enter the product's name" value="{{ old('productname')}}">
                    </td>
                </tr>
                <tr>
                    <td class="product-table">Product Category</td>
                    <td class="product-table">
                        @error('productcategory')
                        <div class="error" style="color:red">{{ $message }}</div>
                        @enderror
                        <select name="productcategory" class="product-add-input" value="{{ old('productcategory')}}">
                            <option value="">--select--</option>
                            @foreach($result as $user)
                            <option value="{{ $user->categoryname }}">{{ $user->categoryname }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="product-table">Product Price</td>
                    <td class="product-table">
                        @error('productprice')
                        <div class="error" style="color:red">{{ $message }}</div>
                        @enderror
                        <input type="text" name="productprice" class="product-add-input" placeholder="Enter the product's original price"  value="{{ old('productprice')}}">
                    </td>
                </tr>
                <tr>
                    <td class="product-table">Product Selling Price</td>
                    <td class="product-table">
                        @error('productsellingprice')
                        <div class="error" style="color:red">{{ $message }}</div>
                        @enderror
                        <input type="text" name="productsellingprice" class="product-add-input" placeholder="Enter the product's selling price" value="{{ old('productsellingprice')}}">
                    </td>
                </tr>
                <tr>
                    <td class="product-table">Product Quantity</td>
                    <td class="product-table">
                        @error('productquantity')
                        <div class="error" style="color:red">{{ $message }}</div>
                        @enderror
                        <input type="text" name="productquantity" class="product-add-input @error('productquantity') is-invalid @enderror" placeholder="Enter the product's Quantity" value="{{ old('productquantity')}}">
                    </td>
                </tr>
                <tr>
                    <td class="product-table">Product Status</td>
                    <td class="product-table">
                        @error('productstatus')
                        <div class="error" style="color:red">{{ $message }}</div>
                        @enderror
                        <select name="productstatus" class="product-add-input" value="{{ old('productstatus')}}">
                            <option value="">--select--</option>
                            <option value="enabled">enabled</option>
                            <option value="disabled">disabled</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="product-table">Product Image</td>
                    <td class="product-table">
                        @error('productimage')
                        <div class="error" style="color:red">{{ $message }}</div>
                        @enderror
                        <input type="file" name="productimage"  value="{{ old('productimage')}}">
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </div>
</div>
@endsection