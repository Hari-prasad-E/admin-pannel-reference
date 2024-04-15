@extends('landing')
@section('content')
<div class=" products">
    <div class="edit-menu row py-2 gx-0">
        <div class="link-flow col">
            <h1 class="page-head">Products</h1>
            <ul class="breadcrum">
                <li><a href="#">Home</a></li>
                <li><a href="#" class="active-link">Products</a></li>
            </ul>
        </div>

        <div class="options col ms-5">
            <a href="{{url('add-product')}}"><button type="button" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                    </svg></button></a>
            <button type="button" class="btn btn-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-copy" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 5a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1h1v1a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h1v1z" />
                </svg></button>
            <button type="button" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5" />
                </svg></button>
        </div>
    </div>
    <div class="product-content row gx-0">
        <div class="product-list col-12 col-sm-9 col-md-9 gx-3">
            <div class="pannel-heading">
                <h3 class="list-heading"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-ul" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2m0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2m0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                    </svg> Product List</h3>
            </div>
            <table class="product-table w-100">
                <tr>
                    <th class="product-table"><input type="checkbox" class="selectall" onclick="toggleCheckboxes(this);"></th>
                    <th class="product-table">Image</th>
                    <th class="product-table"><a href="#" class="table-links">Product Name</a></th>
                    <th class="product-table"><a href="#" class="table-links">Category</a></th>
                    <th class="product-table mobile-view"><a href="#" class="table-links">Price</a></th>
                    <th class="product-table mobile-view"><a href="#" class="table-links">Quantity</a></th>
                    <th class="product-table mobile-view"><a href="#" class="table-links">Status</a></th>
                    <th class="product-table mobile-view"><a href="#" class="table-links">Action</a></th>
                </tr>
                @foreach($result as $user)
                <tr>
                    <td class="product-table"><input type="checkbox" name="selecteditems[]" value="{{$user->id}}"></td>
                    <td class="product-table"><img src="{{asset('images/'.$user->productimage)}}" alt="" style="width:50px;height:50px"></td>
                    <td class="product-table">{{ $user->productname }}</td>
                    <td class="product-table">{{ $user->productcategory }}</td>
                    <td class="product-table mobile-view">Original price : {{ $user->productprice }} <br>
                        Offer price : {{ $user->productsellingprice }}
                    </td>
                    <td class="product-table mobile-view">
                        @if($user->productquantity <= 50) <button type="button" class="btn btn-danger">{{ $user->productquantity }}</button>
                            @else
                            <button type="button" class="btn btn-success">{{ $user->productquantity }}</button>
                            @endif
                    </td>
                    <td class="product-table mobile-view">{{ $user->productstatus }}</td>
                    <td class="product-table mobile-view"><button type="button" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325" />
                            </svg></button></td>
                </tr>
                @endforeach
            </table>
        </div>
        <div class="product-list col-12 col-sm-3 col-sm-3 gx-3">
            <div class="pannel-heading">
                <h3 class="list-heading"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-funnel-fill" viewBox="0 0 16 16">
                        <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5z" />
                    </svg> Filter</h3>
            </div>
            <ul class="filter-list">
                <li><label style="margin-bottom: 10px;margin-top: 10px">Product Name</label><br><input type="text" placeholder="Productname" style="padding-left: 5px;" class="filter-input"></li>
                <li><label style="margin-bottom: 10px;margin-top: 10px">Model</label><br><input type="text" placeholder="Productname" style="padding-left: 5px;" class="filter-input"></li>
                <li><label style="margin-bottom: 10px;margin-top: 10px">Price</label><br><input type="text" placeholder="Productname" style="padding-left: 5px;" class="filter-input"></li>
                <li><label style="margin-bottom: 10px;margin-top: 10px">Quantity</label><br><input type="text" placeholder="Productname" style="padding-left: 5px;" class="filter-input"></li>
                <li><label style="margin-bottom: 10px;margin-top: 10px">Status</label><br><select name="productstatus" class="filter-input">
                        <option value="">--select--</option>
                        <option value="enabled">enabled</option>
                        <option value="disabled">disabled</option>
                    </select></li>
                <button type="button" class="btn btn-light" style="border: 1px solid #ccc;margin-bottom:15px;position:relative;left:150px"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-funnel-fill" viewBox="0 0 16 16">
                        <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5z" />
                    </svg> Filter</button>
            </ul>
        </div>
    </div>
</div>
@endsection