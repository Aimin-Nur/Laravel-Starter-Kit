@extends('layouts.vertical', ['title' => 'Roles List'])

@section('css')
@vite(['node_modules/gridjs/dist/theme/mermaid.min.css'])
@endsection

@section('content')
<div class="container bg-white">
    <div class="row">
        <div class="py-3">
            <div id="table-role"></div>
        </div>
    </div>
</div>
@endsection

@section('script-bottom')
@vite(['resources/js/components/table-gridjs.js'])
@endsection

