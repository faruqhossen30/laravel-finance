@extends('admin.layouts.app')
@section('breadcrumb')
    <x-breadcrumb pageone="Approach" pageoneRoute="{{ route('approach.index') }}" pagetwo="Create" />
@endsection
@section('content')
    <div class="flex flex-col gap-6 ">
        <div class="card">
            <div class="card-header">
                <div class="p-6">
                    <form action="{{ route('approach.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="grid grid-cols-12 gap-5 ">
                            <div class="col-span-12 lg:col-span-12 bg-white dark:bg-gray-800 p-4 rounded-lg">
                               <div class="pb-3">

                                    <x-form.input label="Title" name="title"/>
                                    <x-form.input label="Order Number" type="number" name="order_number"/>
                                    <x-form.textarea label="Description" name="description" />

                               </div>
                            </div>
                        </div>
                        <x-form.submit-button />
                    </form>
                </div>
            </div>
        @endsection

        @push('styles')
        <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
        @endpush

        @push('scripts')
            <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        @endpush
