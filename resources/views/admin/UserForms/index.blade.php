<x-app-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users Form Info') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">


                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    #SL
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    User Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    User Email
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    From Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Session
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($user_forms as $key=>$form)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $key+1   }}</th>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $form->user->name }}
                                </th>
                                <th>
                                    {{ $form->email_address }}
                                </th>
                                <td class="px-6 py-4">
                                    {{$form->formInfo->name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $form->formInfo->session_start  }} / {{ $form->formInfo->session_end }}
                                </td>
                                <td>
                                <a href="{{ route('admin.user-forms.show',$form->id)  }}" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">View</a>
                                    <button type="button" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Edit</button>
                                    <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="text-center p-3">No Form Available</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="py-5 px-5">
                    {{ $user_forms->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-admin-layout>
