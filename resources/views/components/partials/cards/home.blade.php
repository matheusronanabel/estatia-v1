@props(['propertyPrice','propertyTitle','propertyLocation','propertyBedroom','propertyBathroom','propertyLandSize','propertyBuildingSize','propertyOwnerName','propertyOwnerRole'])
<div class="shrink-0 w-full max-w-[302px]">

    <div
        class="rounded-lg overflow-hidden bg-white group custom-shadow">
        <div class="h-[186.4px] overflow-hidden">
            <img src="https://images.unsplash.com/photo-1560185127-6ed189bf02f4?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                class="group-hover:scale-110 h-full transition ease-in-out w-full object-cover" alt="">
        </div>
        <div class="block p-4 space-y-4">
            <a href="#" class="block space-y-6">
                <div class="space-y-2">
                    <div class="font-bold text-estatia-secondary-blue text-sm">
                        {{$propertyPrice}}
                    </div>
                    <div class="space-y-2">
                        <div class="text-black font-semibold">
                            {{Str::limit(Str::title($propertyTitle),40)}}
                        </div>
                        <div class="text-sm text-estatia-light-grey-300">
                            {{$propertyLocation}}
                        </div>
                    </div>
                </div>
                <div class="flex w-full gap-x-4 items-center">
                    <div class="flex items-center space-x-1.5 text-estatia-light-grey-300">
                        <x-icons.bedroom />
                        <div>
                            {{$propertyBedroom}}
                        </div>
                    </div>
                    <div class="flex items-center space-x-1.5 text-estatia-light-grey-300">
                        <x-icons.bathroom />
                        <div>
                            {{$propertyBathroom}}
                        </div>
                    </div>
                    <div class="flex items-center space-x-1.5 text-estatia-light-grey-300">
                        <div class="font-semibold text-sm">
                            LT
                        </div>
                        <div class="w-full text-sm">
                            {{$propertyLandSize}} m<sup>2</sup>
                        </div>
                    </div>
                    <div class="flex items-center space-x-1.5 text-estatia-light-grey-300">
                        <div class="font-semibold text-sm">
                            LB
                        </div>
                        <div class="w-full text-sm">
                            {{$propertyBuildingSize}} m<sup>2</sup>
                        </div>
                    </div>
                </div>
            </a>
            <div class="h-[1px] w-full bg-[#E0E0E0]"></div>
            <div class="flex items-stretch justify-between h-auto">
                <div class="flex space-x-3 items-center">
                    <div>
                        <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?q=80&w=2080&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="h-10 w-10 object-cover rounded-full" alt="">
                    </div>
                    <div class="space-y-1">
                        <p class="text-sm font-semibold text-estatia-secondary-blue leading-none">
                            {{$propertyOwnerName}}
                        </p>
                        <p class="text-sm leading-none">
                            {{$propertyOwnerRole}}
                        </p>
                    </div>
                </div>
                <div>
                    <a href="" class="bg-estatia-light-blue-200 h-full text-estatia-secondary-blue flex items-center px-4 rounded-lg space-x-1">
                        <div>
                            <x-icons.whatsapp/>
                        </div>
                        <div class="font-medium text-sm">
                            Chat
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
