@extends('admin.layouts.app')
@section('breadcrumb')
    <x-breadcrumb pageone="Approach" pageoneRoute="{{ route('approach.index') }}" pagetwo="Edit Approach" />
@endsection
@section('content')
    <div class="flex flex-col gap-6">
        <div class="card">
            <div class="card-header">
                <div class="p-6">

                    <form action="{{ route('approach.update', $approach->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="grid grid-cols-12 gap-5 ">
                            <div class="col-span-12 lg:col-span-12 bg-white dark:bg-gray-800 p-4 rounded-lg">
                                <div class="pb-3">
                                    <x-form.input label=" Title" name="title" value="{{ $approach->title }}" />
                                        <x-form.input label="Order Number" name="order_number" value="{{ $approach->order_number }}" />
                                    <x-form.textarea label="Description" name="description" value="{{ $approach->description }}" />
                                </div>

                            </div>

                        </div>
                        <x-form.submit-button title="Update" />
                    </form>
                </div>

            </div>
        @endsection
        @push('style')
        <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
        @endpush
        @push('scripts')
            <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

            </script>
        @endpush
