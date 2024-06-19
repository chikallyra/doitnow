<nav class="bg-red-600 fixed w-full lg:h-44 z-50 shadow-lg shadow-gray-400">
    <div class="my-5 lg:mt-5 mx-3">
        <div class="flex justify-between lg:mx-10 mx-1">
            <a  class="bg-white  m-2 lg:w-96 px-1.5 lg:py-4 lg:px-3 pr-8 py-3 rounded-xl flex justify-start items-center shadow-lg shadow-cyan-500/50">
                <img src="/img/profile.png" class="lg:w-16 lg:h-16 w-10 h-10 border-4 rounded-full border-gray-200" alt="">
                <h1 class="ml-2 tracking-wider uppercase text-sm lg:text-lg font-medium text-black">
                    {{ $user->name }} <span class="bg-gray-200 p-1 rounded-lg text-[9px] lg:text-sm lg:ml-1">Expert</span>
                </h1>
            </a>
            <div class="flex items-center">
                {{-- setting --}}
                <button id="dropdownDividerButton" data-dropdown-toggle="dropdownDivider" class="text-white hover:text-gray-300 font-medium rounded-lg text-3xl px-5 py-2.5 text-center " type="button">
                    <span><i class="fas fa-ellipsis-v"></i></span>
                </button>
    
                <!-- Dropdown menu -->
                <div id="dropdownDivider" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
                    <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownDividerButton">
                    
                    <li>
                        <a href="{{ route('platform.notif') }}" class="block px-4 py-2  hover:bg-gray-600 hover:text-white"><i class="far fa-bell mr-2" ></i> Notifications</a>
                    </li>
                    <li>
                        <a href="{{ route('platform.profil', ['id' => $user->id]) }}" class="block px-4 py-2  hover:bg-gray-600 hover:text-white"><span><i class="fas fa-user mr-2"></i></span>Profil</a>
                    </li>
                    </ul>
                    <div class="py-2">
                        <form action="{{ route('logout') }}" method="POST" class="m-2 lg:m-0">
                            @csrf
                            <button type="submit" class="block px-4 py-2 text-left text-sm w-full hover:bg-gray-600  hover:text-white">
                                <i class="fas fa-sign-out-alt mr-2"></i> Logout
                            </button>
                        </form>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
</nav>
