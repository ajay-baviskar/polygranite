<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Portfolio Item</title>
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Add Portfolio Item</h2>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('portfolio.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
            </div>
            <div class="mb-3">
                <label for="filter" class="form-label">Filter Category</label>
                <select class="form-control" id="filter" name="filter" required>
                    <option value="filter-app" {{ old('filter') == 'filter-app' ? 'selected' : '' }}>App</option>
                    <option value="filter-web" {{ old('filter') == 'filter-web' ? 'selected' : '' }}>Web</option>
                    <option value="filter-card" {{ old('filter') == 'filter-card' ? 'selected' : '' }}>Card</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <input type="text" class="form-control" id="category" name="category" value="{{ old('category') }}">
            </div>
            <div class="mb-3">
                <label for="client" class="form-label">Client</label>
                <input type="text" class="form-control" id="client" name="client" value="{{ old('client') }}">
            </div>
            <div class="mb-3">
                <label for="project_date" class="form-label">Project Date</label>
                <input type="date" class="form-control" id="project_date" name="project_date" value="{{ old('project_date') }}">
            </div>
            <div class="mb-3">
                <label for="project_url" class="form-label">Project URL</label>
                <input type="url" class="form-control" id="project_url" name="project_url" value="{{ old('project_url') }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="5">{{ old('description') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add Item</button>
            <a href="{{ route('dashboard') }}" class="btn btn-secondary">Back to Dashboard</a>
        </form>
    </div>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
