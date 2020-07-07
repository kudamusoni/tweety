<h3 class="font-bold text-xl mb-3">Friends</h3>

<ul>
    @foreach (auth()->user()->follows as $user)
        <li class="mb-4">
            <div class="flex items-center text-sm">
                <img src="https://api.adorable.io/avatars/40/abott@adorable.png" alt="" class="rounded-full mr-2">
                {{ $user->name }}
            </div>
        </li>
    @endforeach
</ul>