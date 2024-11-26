<a {{$attributes->merge()}} class="py-1.5 flex items-center pl-4 pr-2.5 text-estatia-menu-link transition-all">
    @if (isset($iconSlot))        
    <div class="mr-2">
        {{$iconSlot}}
    </div>
    @endif
    <div class="leading-[150%] tracking-[0.15px] py-1">
        {{$slot}}
    </div>
</a>