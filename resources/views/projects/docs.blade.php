@extends('layouts.app')

@section('content')
    <section class="flex relative pb-24">
        @include('partials.sidebar')
        <main class="w-full min-h-screen pl-[260px] bg-[#F5F5F5]">
            @include('partials.header', ['title' => 'Docs & Files'])
            <section class="p-10">
            

                <div>
                    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
                        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
                            <div class="bg-white dark:bg-gray-800 shadow-md sm:rounded-lg overflow-hidden">
                                <div
                                    class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                                    <div></div>
                                    <div
                                        class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                                        <div class="flex justify-center">
                                            <div class="mb-3 w-96">
                                                <label for="formFileMultiple"
                                                    class="mb-1 inline-block text-neutral-700 dark:text-neutral-200">Upload
                                                    file:</label>
                                                <input
                                                    class="relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-gray-300 bg-clip-padding py-[0.32rem] px-3 text-base font-normal text-gray-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[margin-inline-end:0.75rem] file:[border-inline-end-width:1px] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-[0_0_0_1px] focus:shadow-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100"
                                                    type="file" id="formFileMultiple" multiple />
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="overflow-x-auto">
                                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                        <thead
                                            class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>
                                                <th scope="col" class="px-4 py-3">S/N</th>
                                                <th scope="col" class="px-4 py-3">First Name</th>
                                                <th scope="col" class="px-4 py-3">Last Name</th>
                                                <th scope="col" class="px-4 py-3">Email</th>
                                                <th scope="col" class="px-4 py-3">Phone</th>
                                                <th scope="col" class="px-4 py-3">Role</th>
                                                <th scope="col" class="px-4 py-3 ">
                                                    Actions
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr class="border-b dark:border-gray-700">
                                                <td class="px-4 py-3"></td>
                                                <td class="px-4 py-3"></td>
                                                <td class="px-4 py-3"></td>
                                                <td class="px-4 py-3"></td>
                                                <td class="px-4 py-3"></td>
                                                <td class="px-4 py-3"></td>
                                                <td class="px-4 py-3 flex items-center ">

                                                    <button aria-current="page"
                                                        id=""class="px-3 py-2 text-xs mr-2 font-medium text-center text-white bg-blue-600 rounded hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-red-600 dark:hover:bg-blue-700 dark:focus:ring-red-800">
                                                        Download
                                                    </button>
                                                    <button aria-current="page"
                                                        id=""class="px-3 py-2 text-xs font-medium text-center text-white bg-red-600 rounded hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                                        Delete
                                                    </button>



                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <nav class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0 p-4"
                                    aria-label="Table navigation">
                                    <span class="text-sm font-normal text-gray-500 dark:text-gray-400">
                                        Showing

                                        <span class="font-semibold text-gray-900 dark:text-white"></span>
                                        of
                                        <span class="font-semibold text-gray-900 dark:text-white"></span>
                                    </span>
                                    <ul class="inline-flex items-stretch -space-x-px">

                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </section>
                </div>

            </section>
        </main>
    </section>
@endsection
