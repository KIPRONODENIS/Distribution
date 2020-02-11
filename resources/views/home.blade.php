@extends('layouts.app')

@section('content')
    <div class="flex items-center">

        <div class="md:w-full mx-3">

            @if (session('status'))
                <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <div class="flex flex-col break-words bg-white border border-2 rounded shadow-md">

                <div class="font-semibold bg-gray-200 text-gray-700 py-3 px-6 mb-0">
                    Dashboard
                </div>

                <div class="w-full p-6">
                    <p class="text-gray-700">
                        @role('distributor')
     "I got you buddy"
                        @endrole

                        You now life is challengig
                       
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
