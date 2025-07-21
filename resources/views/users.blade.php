    <h2 class="text-xl font-bold mb-4">User List</h2>

    @if(count($users) > 0)
        <ul class="list-disc pl-5">
            @foreach($users as $user)
                <li>
                    {{ $user['name'] }} - {{ $user['email'] }}
                </li>
            @endforeach
        </ul>
    @else
        <p>No users found.</p>
    @endif