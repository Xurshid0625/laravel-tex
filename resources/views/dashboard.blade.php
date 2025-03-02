<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if (auth()->user()->role->name === 'manager')
                        {{ __('Received Applications!') }}
                        <!-- post card -->
                        <div>
                            
                                <div
                                    class="flex bg-white shadow-lg rounded-lg mx-4 md:mx-auto my-56 max-w-md md:max-w-2xl ">
                                    <!--horizantil margin is just for display-->
                                    <div class="flex items-start px-4 py-6">
                                        <img class="w-12 h-12 rounded-full object-cover mr-4 shadow"
                                            src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                            alt="avatar">
                                        <div class="">
                                            <div class="flex items-center justify-between">

                                                <h2 class="text-lg font-semibold text-gray-900 -mt-1">
                                                </h2>

                                                <small class="text-sm text-gray-700"> </small>
                                            </div>
                                            <p class="text-gray-700"></p>
                                            <p class="mt-3 text-gray-700 text-sm">

                                            </p>
                                            <div class="mt-4 flex items-center">
                                                Xurshid@email.com
                                            </div>
                                        </div>
                                        <div>

                                        </div>
                                    </div>
                                </div>
                           
                        </div>


                        <!-- post card -->
                        <div class="flex bg-white shadow-lg rounded-lg mx-4 md:mx-auto my-56 max-w-md md:max-w-2xl ">
                            <!--horizantil margin is just for display-->
                            <div class="flex items-start px-4 py-6">
                                <img class="w-12 h-12 rounded-full object-cover mr-4 shadow"
                                    src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                    alt="avatar">
                                <div class="">
                                    <div class="flex items-center justify-between">
                                        <h2 class="text-lg font-semibold text-gray-900 -mt-1">Brad Adams </h2>
                                        <small class="text-sm text-gray-700">22h ago</small>
                                    </div>
                                    <p class="text-gray-700">Joined 12 SEP 2012. </p>
                                    <p class="mt-3 text-gray-700 text-sm">
                                        Lorem ipsum, dolor sit amet conse. Saepe optio minus rem dolor sit amet!
                                    </p>
                                    <div class="mt-4 flex items-center">
                                        Xurshid@email.com
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif (auth()->user()->role->name === 'client')
                        {{ __("You're client!") }}
                        <div class="h-screen flex">
                            <div class="hidden lg:flex w-full lg:w-1/2 login_img_section justify-around items-center">
                            </div>
                            <div class="flex w-full lg:w-1/2 justify-center items-center bg-white space-y-8">
                                <div class="w-full px-8 md:px-32 lg:px-24">
                                    <form action="{{ route('application.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <h1 class="text-gray-800 font-bold text-2xl mb-1">Submit Your Application</h1>
                                        <div class="flex items-center border-2 mb-8 py-2 px-3 rounded-2xl">
                                            <input class=" pl-2 w-full outline-none border-none" type="text" required
                                                name="subject" placeholder="Subject" />
                                        </div>
                                        <h1>Message</h1>
                                        <textarea class="flex items-center border-2 mb-12 py-2 px-3 rounded-2xl " required name="message"cols="140"
                                            rows="5"></textarea>
                                        <button type="submit"
                                            class="block w-full bg-indigo-600 mt-5 py-2 rounded-2xl hover:bg-indigo-700 hover:-translate-y-1 transition-all duration-500 text-white font-semibold mb-2">Login</button>
                                        <div class="flex justify-between mt-4">
                                        </div>
                                        <div class="flex items-center border-2 mb-8 py-2 px-3 rounded-2xl">
                                            <input type="file" name="file" />
                                        </div>
                                        <button type="submit" class="btn btn-primary">Send</button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
