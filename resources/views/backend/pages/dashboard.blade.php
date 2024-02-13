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
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title
                            ">Post With User</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Post ID</th>
                                        <th>Post Title</th>
                                        <th>Post Description</th>
                                        <th>Post User</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post)
                                    <tr>
                                        <td>{{ $post->id ?? '' }}</td>
                                        <td>{{ $post->title?? '' }}</td>
                                        <td>
                                           {{-- {{ \Illuminate\Support\Str::words($post->content ?? '', 20, '...') }} --}}
                                           {{ $post->short_content?? '' }}
                                        </td>
                                        <td>{{ $post->user->name ?? '' }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-admin-layout>
