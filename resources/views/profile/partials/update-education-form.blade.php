<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Riwayat Pendidikan') }}
        </h2>
    </header>

    <div class="py-12">

        <div class="flex items-left justify-end mt-4">


            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                {{ __('Tambah Pendidikan') }}
            </a>


        </div>


        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        @foreach ((array) $titles as $title)
                        <th scope="col" class="px-6 py-3">
                            {{ $title }}
                        </th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($educations as $education)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $education->type }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $education->school_name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $education->mayor }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $education->graduation_year }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $education->grade }}
                        </td>
                        <td class="px-6 py-4">

                            <form action="{{ route('profile.delete', $education->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">
                                    <i class="bi-trash"></i> Hapus
                                </button>
                            </form>


                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>


</section>