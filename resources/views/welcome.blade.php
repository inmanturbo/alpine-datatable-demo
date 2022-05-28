<x-guest-layout>
    <div
    x-cloak
    x-data="{users: [], 'isLoading': true, endpoint: '{{ route('api.users.index') }}'}"
    x-init="fetch(endpoint)
    .then(response => response.json())
    .then(response => { users = response.data; isLoading = false; console.log(response.data); })"
>
    <table x-show="!isLoading">
        <thead>
            <tr>
                <th>#</th>
                <th>Email</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
        <tbody>
            <template x-for="user in users" :key="user.id">
            <tr>
                <td x-text="user.id"></td>
                <td x-text="user.email"></td>
                <td x-text="user.created_at"></td>
                <td x-text="user.updated_at"></td>
            </tr>
            </template>
        </tbody>
    </table>
    </div>
</x-guest-layout>
