<x-bootlayout>
    @if (session('error'))
        <div class="alert alert-danger" role="alert">
            <h1>{{ session('error') }}</h1>
        </div>
    @endif
    <form method="POST" action="{{ route('login.store') }}">
        @csrf
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="form-group">
                    <label for="email" class="col-form-label">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password" class="col-form-label">Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </div>
    </form>
</x-bootlayout>