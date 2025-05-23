<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Edit Portfolio Item - Radheya Enterprise</title>
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Radheya Enterprise</div>
            </a>
            <hr class="sidebar-divider my-0">
            <div class="sidebar-heading">Management</div>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('portfolio.list') }}">
                    <i class="fas fa-folder fa-fw"></i>
                    <span>Portfolio Items</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('portfolio.create') }}">
                    <i class="fas fa-plus fa-fw"></i>
                    <span>Add Portfolio Item</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('service.create') }}">
                    <i class="fas fa-concierge-bell fa-fw"></i>
                    <span>Add Service</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('feature.create') }}">
                    <i class="fas fa-star fa-fw"></i>
                    <span>Add Feature</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('contact.list') }}">
                    <i class="fas fa-envelope fa-fw"></i>
                    <span>View Contact Submissions</span>
                </a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->first_name ?? Auth::user()->name }}</span>
                                <img class="img-profile rounded-circle" src="{{ asset('img/undraw_profile.svg') }}">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">Profile</a>
                                <a class="dropdown-item" href="#">Settings</a>
                                <a class="dropdown-item" href="#">Activity Log</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </nav>

                <div class="container-fluid">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Portfolio Item</h6>
                            <a href="{{ route('portfolio.list') }}" class="btn btn-secondary btn-sm">Back to List</a>
                        </div>
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
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
                            <form action="{{ route('portfolio.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $item->title) }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label">Image</label>
                                    <input type="file" class="form-control" id="image" name="image" accept="image/*">
                                    @if ($item->image_path)
                                        <img src="{{ asset('storage/' . $item->image_path) }}" class="mt-2" style="max-width: 200px;" alt="{{ $item->title }}">
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="filter" class="form-label">Filter Category</label>
                                    <select class="form-control" id="filter" name="filter" required>
                                        <option value="filter-app" {{ old('filter', $item->filter) == 'filter-app' ? 'selected' : '' }}>App</option>
                                        <option value="filter-web" {{ old('filter', $item->filter) == 'filter-web' ? 'selected' : '' }}>Web</option>
                                        <option value="filter-card" {{ old('filter', $item->filter) == 'filter-card' ? 'selected' : '' }}>Card</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="category" class="form-label">Category</label>
                                    <input type="text" class="form-control" id="category" name="category" value="{{ old('category', $item->category) }}">
                                </div>
                                <div class="mb-3">
                                    <label for="client" class="form-label">Client</label>
                                    <input type="text" class="form-control" id="client" name="client" value="{{ old('client', $item->client) }}">
                                </div>
                                <div class="mb-3">
                                    <label for="project_date" class="form-label">Project Date</label>
                                    <input type="date" class="form-control" id="project_date" name="project_date" value="{{ old('project_date', $item->project_date) }}">
                                </div>
                                <div class="mb-3">
                                    <label for="project_url" class="form-label">Project URL</label>
                                    <input type="url" class="form-control" id="project_url" name="project_url" value="{{ old('project_url', $item->project_url) }}">
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" id="description" name="description" rows="5">{{ old('description', $item->description) }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Update Item</button>
                                <a href="{{ route('portfolio.list') }}" class="btn btn-secondary">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright © Radheya Enterprise {{ date('Y') }}</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
</body>

</html>
