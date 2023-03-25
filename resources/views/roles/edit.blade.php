@extends('layouts.app')

@section('content')
    <section class="flex relative pb-24">
        @include('partials.sidebar')
        <main class="w-full min-h-screen pl-[260px] bg-[#F5F5F5]">
            @include('partials.header')
            <nav class="bg-white flex items-center p-3 text-gray-600 border border-gray-200 font-semibold">
                <a href="sales-orders.html" class="text-center mx-6 text-gray-400">Users</a>
                <a href="#" class="text-center mx-6">Edit Users</a>
            </nav>

            <section class="p-10">
                <section class="bg-white dark:bg-gray-900">
                    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
                        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Create Role</h2>
                        <form action="#">
                            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                                <div class="sm:col-span-2">
                                    <label for="name"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Role
                                        Title</label>
                                    <input type="text" name="role" id="role"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="Type the Role title" required="">
                                </div>


                            </div>
                            <div class="grid grid-cols-3">

                                <div class="flex items-center p-4  border-gray-200 rounded dark:border-gray-700">
                                    <input checked id="bordered-checkbox-2" type="checkbox" value=""
                                        name="bordered-checkbox"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="bordered-checkbox-2"
                                        class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Checked
                                        state
                                    </label>
                                </div>

                                <div class="flex items-center p-4  border-gray-200 rounded dark:border-gray-700">
                                    <input checked id="bordered-checkbox-2" type="checkbox" value=""
                                        name="bordered-checkbox"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="bordered-checkbox-2"
                                        class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Checked
                                        state
                                    </label>
                                </div>

                                <div class="flex items-center p-4  border-gray-200 rounded dark:border-gray-700">
                                    <input checked id="bordered-checkbox-2" type="checkbox" value=""
                                        name="bordered-checkbox"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="bordered-checkbox-2"
                                        class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Checked
                                        state
                                    </label>
                                </div>


                            </div>


                        </form>
                    </div>
                </section>

            </section>
        </main>
    </section>
@endsection
