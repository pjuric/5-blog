<x-app-layout>
    @if (Auth::user()->admin)
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('users.index_title_header_users') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        @if (isset($users))
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">{{ __('users.index_table_header_name') }}</th>
                                        <th scope="col">{{ __('users.index_table_header_email') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                <a href="{{ route('user.edit', $user->id) }}"
                                                    class="text-blue-500 underline hover:text-blue-700">
                                                    {{ __('users.index_table_link_edit') }}
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <p> {{ __('users.index_message_no_users') }} </p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endif
</x-app-layout>
