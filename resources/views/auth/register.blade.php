<x-bootlayout>
    <form method="POST" action="{{ route('register.store') }}">
        @csrf
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="form-group">
                    <label for="name" class="col-form-label">Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email" class="col-form-label">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password" class="col-form-label">Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password_confirmation" class="col-form-label">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
        </div>
    </form>
</x-bootlayout>