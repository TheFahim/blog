<x-backend.layout.master>
    <x-slot:title>
        Users Page
    </x-slot:title>
    <x-slot:pageTitle>
        Users
    </x-slot:pageTitle>
    <x-slot:pageIcon>
        mdi mdi-account
    </x-slot:pageIcon>


    @if ($errors->any())
    <x-backend.layout.alerts.errors />
    @endif

    <x-backend.layout.alerts.message type="success" :message="session('message')" class="mt-2" />

    <h6 class="container card-title m-t-40"><i
        class="m-r-5 font-18 mdi mdi-format-list-numbers"></i> Users List</h6>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            {{-- @dd($user->roles->name); --}}
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->roles->name}}</td>

                    <td style="display: inline">

                        <a href="#"><button type="button" class="btn btn-outline-primary"><i class="mdi mdi-grease-pencil"></i> Change Role</button></a>

                    </td>



                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</x-backend.layout.master>