<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Portfolio Items - Radheya Enterprise</title>
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <style>
        .table th, .table td {
            vertical-align: middle;
        }
        .table th.sortable {
            cursor: pointer;
            position: relative;
        }
        .table th.sortable::after {
            content: '\f0dc';
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            position: absolute;
            right: 10px;
            opacity: 0.5;
        }
        .table th.sortable.asc::after {
            content: '\f0de';
        }
        .table th.sortable.desc::after {
            content: '\f0dd';
        }
        .action-btn {
            margin-right: 5px;
        }
        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .portfolio-image {
            max-width: 100px;
            height: auto;
        }
    </style>
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
            <li class="nav-item active">
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
                            <h6 class="m-0 font-weight-bold text-primary">Portfolio Items</h6>
                            <div>
                                <a href="{{ route('portfolio.create') }}" class="btn btn-primary btn-sm mr-2">Add New</a>
                                <a href="{{ route('dashboard') }}" class="btn btn-secondary btn-sm">Back to Dashboard</a>
                            </div>
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
                            @if ($portfolioItems->isEmpty())
                                <div class="alert alert-info" role="alert">
                                    No portfolio items found.
                                </div>
                            @else
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped" id="portfolioTable">
                                        <thead>
                                            <tr>
                                                <th class="sortable" data-sort="title">Title <i class="fas fa-sort"></i></th>
                                                <th>Image</th>
                                                <th class="sortable" data-sort="filter">Filter <i class="fas fa-sort"></i></th>
                                                <th class="sortable" data-sort="category">Category <i class="fas fa-sort"></i></th>
                                                <th>Client</th>
                                                <th class="sortable" data-sort="project_date">Project Date <i class="fas fa-sort"></i></th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($portfolioItems as $item)
                                                <tr>
                                                    <td>{{ $item->title }}</td>
                                                    <td>
                                                        @if ($item->image_path)
                                                            <img src="{{ asset('storage/' . $item->image_path) }}" class="portfolio-image" alt="{{ $item->title }}">
                                                        @else
                                                            No Image
                                                        @endif
                                                    </td>
                                                    <td>{{ ucfirst(str_replace('filter-', '', $item->filter)) }}</td>
                                                    <td>{{ $item->category ?? 'N/A' }}</td>
                                                    <td>{{ $item->client ?? 'N/A' }}</td>
                                                    <td>{{ $item->project_date ? $item->project_date->format('Y-m-d') : 'N/A' }}</td>
                                                    <td>
                                                        <button class="btn btn-info btn-sm action-btn view-btn" data-id="{{ $item->id }}" data-toggle="modal" data-target="#viewModal">
                                                            <i class="fas fa-eye"></i> View
                                                        </button>
                                                        <a href="{{ route('portfolio.edit', $item->id) }}" class="btn btn-warning btn-sm action-btn">
                                                            <i class="fas fa-edit"></i> Edit
                                                        </a>
                                                        <form action="{{ route('portfolio.destroy', $item->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this portfolio item?');">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm action-btn">
                                                                <i class="fas fa-trash"></i> Delete
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div>Showing {{ $portfolioItems->firstItem() }} to {{ $portfolioItems->lastItem() }} of {{ $portfolioItems->total() }} entries</div>
                                    {{ $portfolioItems->appends(request()->query())->links('vendor.pagination.bootstrap-4') }}
                                </div>
                            @endif
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

    <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewModalLabel">Portfolio Item Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><strong>Title:</strong> <span id="modalTitle"></span></p>
                    <p><strong>Image:</strong> <img id="modalImage" src="" class="portfolio-image" alt="Portfolio Image" style="display: none;"></p>
                    <p><strong>Filter:</strong> <span id="modalFilter"></span></p>
                    <p><strong>Category:</strong> <span id="modalCategory"></span></p>
                    <p><strong>Client:</strong> <span id="modalClient"></span></p>
                    <p><strong>Project Date:</strong> <span id="modalProjectDate"></span></p>
                    <p><strong>Project URL:</strong> <a id="modalProjectUrl" href="#" target="_blank"></a></p>
                    <p><strong>Description:</strong> <span id="modalDescription"></span></p>
                    <p><strong>Created At:</strong> <span id="modalCreatedAt"></span></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.view-btn').on('click', function() {
                const id = $(this).data('id');
                $.ajax({
                    url: '{{ url('portfolio-details') }}/' + id,
                    method: 'GET',
                    success: function(data) {
                        $('#modalTitle').text(data.title);
                        if (data.image_path) {
                            $('#modalImage').attr('src', '{{ asset('storage') }}/' + data.image_path).show();
                        } else {
                            $('#modalImage').hide();
                        }
                        $('#modalFilter').text(data.filter ? data.filter.replace('filter-', '').charAt(0).toUpperCase() + data.filter.replace('filter-', '').slice(1) : 'N/A');
                        $('#modalCategory').text(data.category || 'N/A');
                        $('#modalClient').text(data.client || 'N/A');
                        $('#modalProjectDate').text(data.project_date ? new Date(data.project_date).toLocaleDateString() : 'N/A');
                        if (data.project_url) {
                            $('#modalProjectUrl').attr('href', data.project_url).text(data.project_url);
                        } else {
                            $('#modalProjectUrl').text('N/A').removeAttr('href');
                        }
                        $('#modalDescription').text(data.description || 'N/A');
                        $('#modalCreatedAt').text(new Date(data.created_at).toLocaleString());
                        $('#viewModal').modal('show');
                    },
                    error: function() {
                        alert('Failed to load portfolio item details.');
                    }
                });
            });

            $('.sortable').on('click', function() {
                const sortKey = $(this).data('sort');
                const currentUrl = new URL(window.location);
                const currentSort = currentUrl.searchParams.get('sort');
                const currentDir = currentUrl.searchParams.get('dir') || 'asc';
                const newDir = currentSort === sortKey && currentDir === 'asc' ? 'desc' : 'asc';

                currentUrl.searchParams.set('sort', sortKey);
                currentUrl.searchParams.set('dir', newDir);
                window.location.href = currentUrl.toString();
            });

            const sortKey = new URLSearchParams(window.location.search).get('sort');
            const sortDir = new URLSearchParams(window.location.search).get('dir') || 'asc';
            if (sortKey) {
                $(`.sortable[data-sort="${sortKey}"]`).addClass(sortDir);
            }
        });
    </script>
</body>

</html>
