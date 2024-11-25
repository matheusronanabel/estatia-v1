{!! seo($seoData) !!}
<x-layouts.app>
    <header class="h-[65vh] flex items-center justify-center"
        style="background:linear-gradient(rgba(0,0,0,0),rgba(10,38,71,1)),url('https://images.unsplash.com/photo-1593696140826-c58b021acf8b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); background-size:cover; background-position:center;">
        <section class="px-4 space-y-8">
            <h1
                class="text-white text-2xl lg:text-4xl font-bold -tracking-[0.4px] lg:-tracking-[0.8px] leading-[120%] text-center max-w-[531px]">
                Menemukan Properti Impianmu Tidak Pernah Semudah Ini!
            </h1>
            <div class="bg-white rounded-lg overflow-hidden w-full max-w-[423px] mx-auto">
                <div class="flex w-full">
                    <div class="w-full">
                        <div class="leading-0 py-[14.5px] font-semibold text-estatia-primary-blue w-full text-center">
                            Beli
                        </div>
                        <div class="h-1 bg-estatia-primary-blue rounded-t-lg">
                        </div>
                    </div>
                    <div class="w-full">
                        <div class="leading-0 py-[14.5px] font-semibold text-estatia-light-blue w-full text-center">
                            Sewa
                        </div>
                        <div class="hidden h-1 bg-estatia-primary-blue rounded-t-lg">
                        </div>
                    </div>
                </div>
                <div class="py-2 pl-4 pr-2 flex justify-between gap-8">
                    <div class="flex w-full">
                        <div class="flex space-x-4 items-center w-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="2.25" stroke="currentColor" class="size-6 text-estatia-light-grey">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                            </svg>
                            <input type="text" name="" placeholder="Lokasi, Tipe, Kategori, Judul ..."
                                id=""
                                class="placeholder:text-estatia-light-grey w-full h-full focus:outline-none">
                        </div>
                    </div>
                    <button
                        class=" px-8 py-[14.5px] bg-estatia-primary-blue rounded-lg text-white capitalize font-semibold">Cari</button>
                </div>
            </div>
        </section>
    </header>

    <section class="pt-9 md:pt-16 w-full space-y-10">
        <div class="w-full max-w-full md:max-w-2xl lg:max-w-4xl xl:max-w-7xl mx-auto px-4 md:px-0 space-y-10">
            <div class="space-y-2">
                <h3 class="text-xl md:text-2xl font-bold -tracking-[0.4px]">
                    Properti Paling Banyak Dicari di Denpasar
                </h3>
                <p class="text-estatia-grey">
                    Mulai dari villa, apartemen, tanah, dan rumah untuk pariwisata, maupun investasi.
                </p>
            </div>
            <div class="overflow-x-visible">
                <div class="flex gap-6 overflow-x-scroll pb-6 p-6 -my-6 -ml-6 -mr-4">
                    @foreach ($properties as $property)
                        @php
                            $ownerName = $property->user->full_name;
                            $parts = explode(' ', $ownerName);
                            $trimmedOwnerName = $parts[0] . ' ' . Str::substr($parts[1], 0, 1) . '.';
                            $price = $property->price_idr;
    
                            if (isset($parts[2])) {
                             
                                $trimmedOwnerName .= ' ' . $parts[2];
                            
                            }
    
                            if($price > 1000000){
                                
                                $formattedPrice = number_format($price/1000000,2) . ' Juta';
    
                                if ($price>1000000000) {
                                
                                    $formattedPrice = number_format($price/1000000000,2).' Miliar';
                                
                                }
                            }
                        @endphp
                        <x-partials.cards.home propertyPrice="{{ 'IDR ' . $formattedPrice }}"
                            propertyTitle="{{ $property->title }}" propertyLocation="{{ $property->location->name }}"
                            propertyBedroom="{{ $property->number_of_bedroom }}"
                            propertyBathroom="{{ $property->number_of_bathroom }}"
                            propertyLandSize="{{ number_format($property->land_size) }}"
                            propertyBuildingSize="{{ number_format($property->building_size) }}" propertyOwnerName="{{ $trimmedOwnerName }}"
                            propertyOwnerRole="{{$property->user->role->name}}" />
                    @endforeach
                </div>
            </div>
        </div>
    </section>

   
    <section class="pt-9 pb-16 w-full space-y-10">
        <div class="w-full max-w-full md:max-w-2xl lg:max-w-4xl xl:max-w-7xl mx-auto px-4 md:px-0 space-y-4">
            <div class="space-y-2">
                <h3 class="text-xl md:text-2xl font-bold -tracking-[0.4px]">
                    Lokasi Properti Populer
                </h3>
                <p class="text-estatia-grey">
                    Setiap detail diperhatikan untuk mewujudkan hunian sesuai ekspektasimu.
                </p>
            </div>
        </div>
        <div
            class="w-full max-w-full md:max-w-2xl lg:max-w-4xl xl:max-w-7xl mx-auto px-4 md:px-0 gap-6 grid md:grid-cols-2 lg:grid-cols-3">
            <x-partials.cards.location name="Bali" description="Lebih dari 1.200 Properti"
                backgroundImage="https://images.unsplash.com/photo-1554931670-4ebfabf6e7a9?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
            <x-partials.cards.location name="Bandung" description="Lebih dari 1.200 Properti"
                backgroundImage="https://images.unsplash.com/photo-1590476355683-96c1859f4658?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
            <x-partials.cards.location name="Jakarta" description="Lebih dari 1.200 Properti"
                backgroundImage="https://images.unsplash.com/photo-1690950966690-2f46f3d59fe6?q=80&w=2126&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
        </div>
    </section>
</x-layouts.app>
