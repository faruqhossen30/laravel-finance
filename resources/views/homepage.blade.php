@extends('layouts.app')
@section('content')
    <!-- Hero -->
    @include('inc.homepage.herosection')
    <!-- End Hero -->
    @include('category')
    <!--calculator start --->
    @include('inc.homepage.personal-loan')
    <!--calculator end --->
    @include('inc.homepage.blog')
    <!-- Features -->
    @include('inc.homepage.feature')
    <!-- End Features -->
    @include('inc.homepage.clients')
@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="{{ asset('plugin/Sortable.min.js') }}"></script>


    <script>
        const toggleButton = document.getElementById('toggleButton');
        const table = document.getElementById('schedule');

        toggleButton.addEventListener('click', function() {

            event.preventDefault();
            if (table.classList.contains('hidden')) {
                table.classList.remove('hidden');
                toggleButton.textContent = 'Hide amortization schedule';
            } else {
                table.classList.add('hidden');
                toggleButton.textContent = 'Show amortization schedule';
            }
        });
    </script>
@endpush
