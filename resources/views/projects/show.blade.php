@extends('layouts.app')

@section('content')
    <section class="flex relative pb-24">
        @include('partials.sidebar')
        <main class="w-full min-h-screen pl-[260px] bg-[#F5F5F5]">
            @include('partials.header', ['title' => 'Project'])
            <section class="p-10 ">

                <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5  h-full rounded-lg h-full ">

                    <!-- Start coding here -->


                    <div class="flex justify-end mr-9">
                        <div></div>
                        <a href=""
                            class="inline-flex  mt-3 items-center px-3 -ml-12  py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Add Members
                        </a>
                    </div>
                    <div class="grid lg:grid-cols-3  md:grid-cols-2 pt-4 justify-center pr-12">


                        <div
                            class="max-w-sm p-6 bg-white border border-gray-200 shadow-xl rounded-lg dark:bg-gray-800 dark:border-gray-700 h-80 w-full m-4 flex flex-col items-center mr-2">

                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-700 dark:text-white border-b-2 ">
                                To-Do</h5>
                            <img src="{{ asset('assets/todo-icon.png') }}" alt="" class="w-44 ">

                            <a href="{{ route('app.projects.todo', $project) }}"
                                class="inline-flex mt-3 items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                View To-Do
                                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>

                        <div
                            class="max-w-sm p-6 bg-white border border-gray-200  border-b-2 rounded-lg shadow-xl dark:bg-gray-800 dark:border-gray-700 h-80 w-full m-4 flex flex-col items-center">

                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-700 dark:text-white border-b-2 ">
                                Docs &
                                Files</h5>
                            <img src="{{ asset('assets/file-upload.png') }}" alt="" class="w-44 ">

                            <a href="{{ route('app.projects.docs', $project) }}"
                                class="inline-flex mt-3 items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                View Files
                                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>

                        </div>



                        <div
                            class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-xl dark:bg-gray-800 dark:border-gray-700 h-80 w-full m-4">
                            <div class="flex flex-col items-center">
                                <h5
                                    class="mb-2 text-2xl font-bold tracking-tight text-gray-700 dark:text-white border-b-2 ">
                                    Schedule
                                </h5>
                                <img src="{{ asset('assets/schedule.png') }}" alt="" class="w-44">

                                <a href="{{ route('app.projects.schedules', $project) }}"
                                    class="inline-flex mt-3 items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    View Schedule
                                    <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>

                    </div>

                </section>


            </section>
        </main>
    </section>
@endsection
