<x-app-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Form Info') }}
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
                                    Form Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Session Start Year
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Session End Year
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($forms as $key=>$form)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $key+1   }}</th>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $form->name }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $form->session_start }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $form->session_end }}
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4">No Form Available</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            <div class="py-5 px-5">
            {{ $forms->links() }}
            </div>
            </div>
        </div>
    </div>
</x-app-admin-layout>
