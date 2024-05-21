<x-bootlayout>
    <h1>Hello, Welcome to your dashbaord <span class="text-success">{{auth()->user()->name}}</span></h1>
    <a href="{{route('dashboard.logout')}}" class="btn btn-primary">Logout</a>
</x-bootlayout>