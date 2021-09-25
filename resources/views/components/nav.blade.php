<nav class="">
    <div x-data="{ show: false, active: 'home'}" class="flex flex-col justify-between w-full items-stretch md:flex-row md:max-w-screen-lg  mx-auto">
        <div class="flex justify-between items-center">
            <a href="/" class="flex items-center py-2 px-3">
                <span class="">
                    <img class="w-20 filter drop-shadow" src="/img/logo.png" />
                </span>
            </a>

            <div :class="show ? 'bg-yellow-900 bg-opacity-75' : ''" class="md:hidden flex items-center px-3">
                <button @click="show=!show" class="w-7 flex items-center h-20">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-10  stroke-current text-yellow-200 filter" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>

        <div :class="show ? 'show' : 'hidden'" class="text-yellow-100 bg-yellow-900 bg-opacity-75 md:bg-transparent md:bg-opacity-100 h-full flex flex-col justify-center items-stretch md:mt-4 md:block md:flex-row">
            <x-nav-link url="/" name="home">Home</x-nav-link>
            <x-nav-link url="/white-paper.pdf" target="_blank" name="white-papers">White Papers</x-nav-link>
            <x-nav-link url="/features" name="features">Features</x-nav-link>
            <x-nav-link url="/tokenomics" name="tokenomics">Tokenomics</x-nav-link>
            <x-nav-link url="/roadmap" name="roadmap">Roadmap</x-nav-link>
        </div>

    </div>
</nav>
