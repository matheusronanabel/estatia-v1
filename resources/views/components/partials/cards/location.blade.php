@props(['name','description','backgroundImage'])
<a href="#" class="block w-full p-4 rounded-lg h-36" style="background:linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.2)),url('{{$backgroundImage}}'); background-position:center; background-size:cover;">
    <div class="text-white text-xl">
        {{$name}}
    </div>
    <div class="text-estatia-light-grey-200">
        {{$description}}
    </div>
</a>