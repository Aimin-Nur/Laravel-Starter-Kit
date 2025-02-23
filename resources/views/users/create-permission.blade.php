@extends('layouts.vertical', ['title' => 'Role Add'])

@section('css')
@vite(['node_modules/choices.js/public/assets/styles/choices.min.css'])
@endsection

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Create New Permission</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form method="POST" action="{{ route('admin.permissions.store') }}" role="form text-left">
                            @csrf
                            <div class="mb-3">
                                <label for="roles-name" class="form-label">Permission</label>
                                <input type="text" id="roles-name" name="name" class="form-control" placeholder="Permission name" /required>
                            </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="role-tag" class="form-label">Roles (Opsional)</label>
                            <select class="form-control" id="choices-multiple-remove-button" data-choices data-choices-removeItem name="choices-multiple-remove-button" multiple>
                                @foreach ($getRoles as $item)
                                    <option value="{{$item->name}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card-footer border-top">
                <button type="submit" class="btn btn-primary">Create Permission</button>
            </div>
        </form>
        </div>
    </div>
</div>

@endsection

@section('script-bottom')
@vite(['resources/js/pages/app-ecommerce-product.js'])
@endsection
