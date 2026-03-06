@extends('masterTwo')
@section('title', 'Edit Product')
@section('main')
<div class="admin-page admin-add-edit-page " style="width: 70%; margin: 0 auto;">
    <a href="{{ route('menutable') }}" class="admin-back-link">
        <i class="fas fa-arrow-left"></i> Back to Menu
    </a>
    <div class="admin-card">
        <div class="admin-card-header">
            <i class="fas fa-bars"></i>
            <h4>Edit Product #{{ $edit_product->id }}</h4>
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
            <form action="{{ route('update_product', $edit_product->id) }}" method="POST" enctype="multipart/form-data" class="admin-form">
                @csrf
                <div class="admin-form-row">
                    <div class="admin-form-group">
                        <label>Category ID <span class="required">*</span></label>
                        <input type="number" name="nbrCatId" placeholder="Enter category ID" class="form-control" value="{{ $edit_product->cat_id }}" required>
                    </div>
                    <div class="admin-form-group">
                        <label>Menu <span class="required">*</span></label>
                        <select name="txtMenu" id="txtMenu" class="form-control">
                            <option value="pizza" {{ $edit_product->menu == 'pizza' ? 'selected' : '' }}>Pizza</option>
                            <option value="preminum" {{ $edit_product->menu == 'preminum' ? 'selected' : '' }}>Premium</option>
                            <option value="garlic breads" {{ $edit_product->menu == 'garlic breads' ? 'selected' : '' }}>Garlic Breads</option>
                            <option value="pizza sandwiches" {{ $edit_product->menu == 'pizza sandwiches' ? 'selected' : '' }}>Pizza Sandwiches</option>
                            <option value="desserts" {{ $edit_product->menu == 'desserts' ? 'selected' : '' }}>Desserts</option>
                            <option value="beverages" {{ $edit_product->menu == 'beverages' ? 'selected' : '' }}>Beverages</option>
                        </select>
                    </div>
                </div>
                <div class="admin-form-group">
                    <label>Product Image</label>
                    <div class="custom-file-zone">
                        <i class="fas fa-cloud-upload-alt"></i>
                        <p>Click to upload a new image (leave empty to keep current)</p>
                        <input type="file" name="txtPrdImg">
                    </div>
                </div>
                <div class="admin-form-group">
                    <label>Dish Name <span class="required">*</span></label>
                    <input type="text" name="txtDishName" class="form-control" placeholder="Enter dish name" value="{{ $edit_product->dish_name }}" required>
                </div>
                <div class="admin-form-row">
                    <div class="admin-form-group">
                        <label>Price <span class="required">*</span></label>
                        <input type="number" name="nbrPrice" placeholder="0.00" class="form-control" value="{{ $edit_product->price }}" required>
                    </div>
                    <div class="admin-form-group">
                        <label>Inventory <span class="required">*</span></label>
                        <input type="number" name="nbrInven" placeholder="Enter stock quantity" class="form-control" value="{{ $edit_product->inventory }}" required>
                    </div>
                </div>
                <div class="admin-form-group">
                    <label>Customer Reviews</label>
                    <textarea name="txtCusReview" class="form-control" placeholder="Enter customer reviews">{{ $edit_product->customer_reviews }}</textarea>
                </div>
                <div class="admin-form-footer">
                    <a href="{{ route('menutable') }}" class="btn-form-cancel"><i class="fas fa-times"></i> Cancel</a>
                    <button type="submit" class="btn-form-submit btn-success-submit"><i class="fas fa-save"></i> Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
