<x-admin-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

   {{-- <x-slot name="title">
     Admin Dashboard
    </x-slot> --}}

   <x-slot:title>
     Admin Dashboard
    </x-slot>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Quick Example</h3>
                        </div>
                        {{-- @php
                            $message = 'Your action was successful!';
                        @endphp --}}
                        {{-- <x-alert :message="$message" :type="$type" class="mb-4" /> --}}
                        <form method="post" action="{{ route('posts.store') }}">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <x-form.label>
                                        Title
                                    </x-form.label>
                                    <input name="title" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Title">
                                    @error('title')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group
                                    <label for="exampleInputPassword1">Post Body</label>
                                    <textarea name="content" class="form-control" id="exampleInputPassword1" placeholder="Enter Body"></textarea>
                                    @error('content')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>

        </div>
    </section>

</x-admin-layout>
