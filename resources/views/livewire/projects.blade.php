<div>
    {{-- The Master doesn't talk, he acts. --}}

    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
            <!-- Start coding here -->
            <div class="bg-white dark:bg-gray-800  shadow-md sm:rounded-lg ">
                <div
                    class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">

                    <div
                        class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                        <div class="flex items-center space-x-3 w-full md:w-auto ">
                            <a href="{{ route('app.projects.create') }}"
                                class="w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                                type="button">

                                Create New Project
                            </a>

                        </div>
                    </div>

                    <div class="w-full md:w-1/2">
                        <form class="flex items-center">
                            <label for="simple-search" class="sr-only">Search</label>
                            <div class=" w-full">
                                <div class=" inset-y-0 left-0 flex items-center pl-3 pointer-events-none">

                                </div>
                                <input type="text" id="simple-search" wire:model="search"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Search" required="">
                            </div>
                        </form>
                    </div>

                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-4 py-3">S/N</th>
                                <th scope="col" class="px-4 py-3">Project</th>
                                <th scope="col" class="px-4 py-3">Members</th>
                                <th scope="col" class="px-4 py-3">Progress</th>
                                <th scope="col" class="px-4 py-3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projects as $project)
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $loop->iteration }}
                                    </th>
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $project->name }}
                                    </th>
                                    <td class="px-4 py-3 flex text-gray-600 text-center ">
                                        <div class="w-9 h-9 pt-2 rounded-full bg-gray-100 ">ZB</div>
                                        <div class="w-9 h-9  pt-2  rounded-full bg-gray-100 -ml-3">MB</div>
                                        <div class="w-9 h-9 pt-2 rounded-full bg-gray-100 -ml-3">NM</div>
                                        <div class="pt-2.5 px-1 text-xs">+2</div>
                                    </td>
                                    <td class="px-4 py-3">
                                        <div class="bg-gray-100 w-40 h-3 rounded-full m-2">
                                            <div class="bg-green-600 w-20 h-3 rounded-full"> </div>
                                        </div>
                                    </td>

                                    <td class="px-4 py-3">
                                        <a href="{{ route('app.projects.show', $project->id) }}" aria-current="page"
                                            id="" data-value=""
                                            class="px-3 py-2 text-xs font-medium text-center text-white bg-green-600 rounded hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                            View
                                            </button>
                                            <a href="{{ route('app.projects.edit', $project->id) }}" aria-current="page"
                                                class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                Edit
                                            </a>
                                            <button aria-current="page" id="del{{ $project->id }}"
                                                data-value="{{ $project->id }}"
                                                class="px-3 py-2 text-xs ml-1 font-medium text-center text-white bg-red-600 rounded hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                                Delete
                                            </button>
                                            <script>
                                                document.querySelector('#del{{ $project->id }}').addEventListener('click', function(e) {
                                                    // alert(this.getAttribute('data-value'));
                                                    Swal.fire({
                                                        title: 'Are you sure?',
                                                        text: "You won't be able to revert this!",
                                                        icon: 'warning',
                                                        showCancelButton: true,
                                                        confirmButtonColor: '#3085d6',
                                                        cancelButtonColor: '#d33',
                                                        confirmButtonText: 'Yes, delete it!'
                                                    }).then((result) => {
                                                        if (result.isConfirmed) {
                                                            document.getElementById('del#' + this.getAttribute('data-value')).submit();
                                                        }
                                                    })
                                                })
                                            </script>
                                            <form id="del#{{ $project->id }}"
                                                action="{{ route('app.projects.destroy', $project->id) }}"
                                                method="POST" style="display: inline-block;">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            </form>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>


                <nav class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0 p-4"
                    aria-label="Table navigation">
                    <span class="text-sm font-normal text-gray-500 dark:text-gray-400">
                        Showing
                        <span class="font-semibold text-gray-900 dark:text-white">{{ $projects->firstItem() }}-{{ $projects->lastItem() }}</span>
                        of
                        <span class="font-semibold text-gray-900 dark:text-white">{{ $projects->total() }}</span>
                    </span>
                    <ul class="inline-flex items-stretch -space-x-px">
                        {{ $projects->links('pagination::tailwind') }}
                    </ul>
                </nav>
            </div>
        </div>
</div>
</section>
</div>
