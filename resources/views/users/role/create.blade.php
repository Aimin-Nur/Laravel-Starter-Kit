@extends('layouts.vertical', ['title' => 'Role Add'])

@section('css')
@vite(['node_modules/choices.js/public/assets/styles/choices.min.css'])
@endsection

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Roles Information</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form method="POST" action="{{ route('admin.roles.store') }}" role="form text-left">
                            @csrf
                            <div class="mb-3">
                                <label for="roles-name" class="form-label">Roles Name</label>
                                <input type="text" id="roles-name" name="name" class="form-control" placeholder="Role name" /required>
                            </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="role-tag" class="form-label">Tag</label>
                            <select class="form-control" id="choices-multiple-remove-button" data-choices data-choices-removeItem name="choices-multiple-remove-button" multiple>
                                <option value="Manager">Manager</option>
                                <option value="Product">Product</option>
                                <option value="Data">Data</option>
                                <option value="Designer">Designer</option>
                                <option value="Supporter">Supporter</option>
                                <option value="System Design">System Design</option>
                                <option value="QA">QA</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="user-name" class="form-label">User Name</label>
                            <input type="text" id="user-name" class="form-control" placeholder="Enter name">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <p>User Status </p>
                        <div class="d-flex gap-2 align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked="">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Active
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    In Active
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card-footer border-top">
                <button type="submit" class="btn btn-primary">Create Roles</button>
            </div>
        </form>
        </div>
    </div>
</div>

@endsection

@section('script-bottom')
@vite(['resources/js/pages/app-ecommerce-product.js'])
@endsection
