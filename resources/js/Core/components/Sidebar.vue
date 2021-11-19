<template>
    <div class="bg-white w-56 md:w-64 absolute md:relative min-h-full md:shadow-xl border border-gray-300 p-6 z-30">

        <!-- sidebar content -->
        <div class="flex flex-col">

            <p class="uppercase text-base text-gray-600 mb-4 tracking-wider">Idiot Survival</p>

            <router-link :to="{ name: 'events.index' }" class="mb-3 capitalize font-medium text-sm hover:text-turquoise">
                <i class="fad fa-computer-classic text-base mr-2"></i>
                Events Management
            </router-link>

            <p class="uppercase text-base text-gray-600 my-4 tracking-wider">Site Admin</p>
            <router-link :to="{ name: 'events.index' }" class="mb-3 capitalize font-medium text-sm hover:text-turquoise">
                <i class="fad fa-computer-classic text-base mr-2"></i>
                Settings (under construction)
            </router-link>

            <router-link :to="{ name: 'weight.index' }" class="mb-3 capitalize font-medium text-sm hover:text-turquoise">
                <i class="fad fa-computer-classic text-base mr-2"></i>
                Weight Tracker
            </router-link>

            <router-link :to="{ name: 'websockets.index' }" class="mb-3 capitalize font-medium text-sm hover:text-turquoise">
                <i class="fad fa-computer-classic text-base mr-2"></i>
                Websockets
            </router-link>
        </div>
    </div>
</template>
