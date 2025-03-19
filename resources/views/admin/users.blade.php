@extends('admin.layout.app')

@section('title', 'Users')
@section('header', 'Manage Users')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-xl font-semibold">Users List</h2>
           
        </div>

        <table class="min-w-full bg-white">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Name</th>
                    <th class="py-2 px-4 border-b">Email</th>
                    <th class="py-2 px-4 border-b">Role</th>
                    <th class="py-2 px-4 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td class="py-2 px-4 border-b"> id </td>
                        <td class="py-2 px-4 border-b"> name </td>
                        <td class="py-2 px-4 border-b"> email </td>
                        <td class="py-2 px-4 border-b"> role </td>
                    </tr>
            </tbody>
        </table>
    </div>
@endsection