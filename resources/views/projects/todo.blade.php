@extends('layouts.app')

@section('content')
    <section class="flex relative pb-24">
        @include('partials.sidebar')
        <main class="w-full min-h-screen pl-[260px] bg-[#F5F5F5]">
            @include('partials.header', ['title' => 'TODOS'])
            <section class="p-10">

                <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5  h-full rounded-lg h-full ">
                    <!-- Start coding here -->

                    <div class="flex  justify-between mr-9">


                        <div class=" flex pl-4 mt-3">
                            <div class=" mr-3">
                                <input checked id="red-checkbox" type="checkbox" value=""
                                    class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 rounded focus:ring-red-500 dark:focus:ring-red-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="red-checkbox"
                                    class=" text-sm font-medium text-gray-900 dark:text-gray-300">To-do</label>
                            </div>

                            <div class=" mr-3">
                                <input checked id="purple-checkbox" type="checkbox" value=""
                                    class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="purple-checkbox"
                                    class=" text-sm font-medium text-gray-900 dark:text-gray-300">Pending</label>
                            </div>
                            <div class=" mr-3">
                                <input checked id="green-checkbox" type="checkbox" value=""
                                    class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="green-checkbox"
                                    class=" text-sm font-medium text-gray-900 dark:text-gray-300">Done</label>
                            </div>

                        </div>

                        <div>

                            <button id="defaultModalButton" data-modal-toggle="defaultModal" type="button"
                                class=" items-center px-3 -ml-12  py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Add To-do
                            </button>
                        </div>
                    </div>
                    
                    <div class="grid lg:grid-cols-3  md:grid-cols-2 pt-4 justify-center pr-12">
                        <div
                            class="max-w-sm p-4 bg-white border border-gray-200 shadow-xl rounded-lg dark:bg-gray-800 dark:border-gray-700 h-80 w-full m-4  mr-2">

                            <h5
                                class="mb-2 text-2xl flex flex-col items-center font-bold tracking-tight text-gray-700 dark:text-white border-b-2 ">
                                To-Do
                            </h5>

                            <ol class="list-decimal pl-4">
                                <li>
                                    <div class="flex justify-between border-b dark:border-gray-700 py-2">
                                        <div class="">Clean </div>

                                        <div class=" flex">
                                            <div class=" mr-1">
                                                <input checked id="red-checkbox" type="checkbox" value=""
                                                    class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 rounded focus:ring-red-500 dark:focus:ring-red-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="red-checkbox"
                                                    class=" text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                                            </div>

                                            <div class=" mr-1">
                                                <input checked id="purple-checkbox" type="checkbox" value=""
                                                    class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="purple-checkbox"
                                                    class=" text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                                            </div>
                                            <div class=" mr-1">
                                                <input checked id="green-checkbox" type="checkbox" value=""
                                                    class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="green-checkbox"
                                                    class=" text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex justify-between py-2  border-b dark:border-gray-700 ">
                                        <div class="">Clean </div>

                                        <div class=" flex">
                                            <div class=" mr-1">
                                                <input checked id="red-checkbox" type="checkbox" value=""
                                                    class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 rounded focus:ring-red-500 dark:focus:ring-red-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="red-checkbox"
                                                    class=" text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                                            </div>

                                            <div class=" mr-1">
                                                <input checked id="purple-checkbox" type="checkbox" value=""
                                                    class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="purple-checkbox"
                                                    class=" text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                                            </div>
                                            <div class=" mr-1">
                                                <input checked id="green-checkbox" type="checkbox" value=""
                                                    class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="green-checkbox"
                                                    class=" text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                            </ol>

                        </div>

                        <div
                            class="max-w-sm p-4 bg-white border border-gray-200 shadow-xl rounded-lg dark:bg-gray-800 dark:border-gray-700 h-80 w-full m-4  mr-2">

                            <h5
                                class="mb-2 text-2xl flex flex-col items-center font-bold tracking-tight text-gray-700 dark:text-white border-b-2 ">
                                Pending
                            </h5>
                            <ol class="list-decimal pl-4">
                                <li>
                                    <div class="flex justify-between py-2  border-b dark:border-gray-700 ">
                                        <div class="">Clean </div>

                                        <div class=" flex">
                                            <div class=" mr-1">
                                                <input checked id="red-checkbox" type="checkbox" value=""
                                                    class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 rounded focus:ring-red-500 dark:focus:ring-red-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="red-checkbox"
                                                    class=" text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                                            </div>

                                            <div class=" mr-1">
                                                <input checked id="purple-checkbox" type="checkbox" value=""
                                                    class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="purple-checkbox"
                                                    class=" text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                                            </div>
                                            <div class=" mr-1">
                                                <input checked id="green-checkbox" type="checkbox" value=""
                                                    class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="green-checkbox"
                                                    class=" text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                            </ol>

                        </div>
                        <div
                            class="max-w-sm p-4 bg-white border border-gray-200 shadow-xl rounded-lg dark:bg-gray-800 dark:border-gray-700 h-80 w-full m-4  mr-2">

                            <h5
                                class="mb-2 text-2xl flex flex-col items-center font-bold tracking-tight text-gray-700 dark:text-white border-b-2 ">
                                Done
                            </h5>
                            <ol class="list-decimal pl-4">
                                <li>
                                    <div class="flex justify-between py-2  border-b dark:border-gray-700 ">
                                        <div class="">Clean</div>

                                        <div class=" flex">
                                            <div class=" mr-1">
                                                <input checked id="red-checkbox" type="checkbox" value=""
                                                    class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 rounded focus:ring-red-500 dark:focus:ring-red-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="red-checkbox"
                                                    class=" text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                                            </div>

                                            <div class=" mr-1">
                                                <input checked id="purple-checkbox" type="checkbox" value=""
                                                    class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="purple-checkbox"
                                                    class=" text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                                            </div>
                                            <div class=" mr-1">
                                                <input checked id="green-checkbox" type="checkbox" value=""
                                                    class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="green-checkbox"
                                                    class=" text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                            </ol>


                        </div>

                    </div>

                </section>

            </section>
        </main>
    </section>
@endsection
