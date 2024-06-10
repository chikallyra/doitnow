<nav class="bg-white fixed w-full z-50">
    <div class="bg-red-600 mx-8 my-5 rounded-lg shadow-lg shadow-gray-400">
        <div class="flex justify-between items-center">
            <div class="bg-white m-8 p-3 pr-8 rounded-xl flex justify-center items-center">
                <img src="/img/profile.png" class="w-12 h-12 border-4 rounded-full border-gray-200" alt="">
                <div class="ml-3">
                    <h1 class="tracking-wider uppercase font-medium text-black">{{ auth()->user()->company->name }}
                    </h1>
                    <p class="text-gray-500">{{ auth()->user()->email }}</p>
                </div>
            </div>
            <div class="flex items-center">
                <a href=""><i class="far fa-bell text-3xl mr-10 text-white hover:text-gray-400"></i></a>
                <form action="{{ route('logout') }}" method="POST" class="ml-5 mr-8">
                    @csrf
                    <button type="submit" class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-full text-base px-5 py-2.5 text-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">Logout</button>
                </form>
            </div>
        </div>
    </div>
</nav>
