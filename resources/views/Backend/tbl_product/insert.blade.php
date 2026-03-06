@extends('masterTwo')
@section('title', 'Add New Product')
@section('main')
<div class="admin-page admin-add-edit-page ">
    <a href="{{ route('menutable') }}" class="admin-back-link">
        <i class="fas fa-arrow-left"></i> Back to Menu
    </a>
    <div class="admin-card">
        <div class="admin-card-header">
            <i class="fas fa-bars"></i>
            <h4>Add New Product</h4>
        </div>
        <div class="admin-card-body has-padding">
            @if($errors->any())
                <div class="admin-form-errors">
                    <ul>
                        @foreach($errors->all() as $erorr)
                            <li>{{ $erorr }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('insert_product') }}" method="POST" enctype="multipart/form-data" class="admin-form">
                @csrf
                <div class="admin-form-row">
                    <div class="admin-form-group">
                        <label>Category ID <span class="required">*</span></label>
                        <input type="number" name="nbrCatId" placeholder="Enter category ID" class="form-control" required>
                    </div>
                    <div class="admin-form-group">
                        <label>Menu <span class="required">*</span></label>
                        <select name="txtMenu" id="txtMenu" class="form-control">
                            <option value="pizza">Pizza</option>
                            <option value="preminum">Premium</option>
                            <option value="garlic breads">Garlic Breads</option>
                            <option value="pizza sandwiches">Pizza Sandwiches</option>
                            <option value="desserts">Desserts</option>
                            <option value="beverages">Beverages</option>
                        </select>
                    </div>
                </div>
                <div class="admin-form-group">
                    <label>Product Image</label>
                    <div class="custom-file-zone">
                        <i class="fas fa-cloud-upload-alt"></i>
                        <p>Click to upload product image</p>
                        <input type="file" name="txtPrdImg">
                    </div>
                </div>
                <div class="admin-form-group">
                    <label>Dish Name <span class="required">*</span></label>
                    <input type="text" name="txtDishName" class="form-control" placeholder="Enter dish name" required>
                </div>
                <div class="admin-form-row">
                    <div class="admin-form-group">
                        <label>Price <span class="required">*</span></label>
                        <input type="number" name="nbrPrice" placeholder="0.00" class="form-control" required>
                        <div class="form-hint">Enter price in USD</div>
                    </div>
                    <div class="admin-form-group">
                        <label>Inventory <span class="required">*</span></label>
                        <input type="number" name="nbrInven" placeholder="Enter stock quantity" class="form-control" required>
                    </div>
                </div>
                <div class="admin-form-group">
                    <label>Customer Reviews</label>
                    <textarea name="txtCusReview" class="form-control" placeholder="Enter customer reviews (optional)"></textarea>
                </div>
                <div class="admin-form-footer">
                    <a href="{{ route('menutable') }}" class="btn-form-cancel"><i class="fas fa-times"></i> Cancel</a>
                    <button type="submit" class="btn-form-submit"><i class="fas fa-plus"></i> Add Product</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
