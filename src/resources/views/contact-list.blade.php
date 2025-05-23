<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Contact Submissions - Radheya Enterprise</title>
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
              <li class="nav-item active">
                <a class="nav-link" href="{{ route('contact.list') }}">
                    <i class="fas fa-envelope fa-fw"></i>
                    <span>View Contacts</span>
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
                            <h6 class="m-0 font-weight-bold text-primary">Contact Submissions</h6>
                            <a href="{{ route('dashboard') }}" class="btn btn-secondary btn-sm">Back to Dashboard</a>
                        </div>
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            @if ($contacts->isEmpty())
                                <div class="alert alert-info" role="alert">
                                    No contact submissions found.
                                </div>
                            @else
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped" id="contactTable">
                                        <thead>
                                            <tr>
                                                <th class="sortable" data-sort="name">Name <i class="fas fa-sort"></i></th>
                                                <th class="sortable" data-sort="email">Email <i class="fas fa-sort"></i></th>
                                                <th class="sortable" data-sort="subject">Subject <i class="fas fa-sort"></i></th>
                                                <th>Message</th>
                                                <th class="sortable" data-sort="created_at">Submitted At <i class="fas fa-sort"></i></th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($contacts as $contact)
                                                <tr>
                                                    <td>{{ $contact->name }}</td>
                                                    <td>{{ $contact->email }}</td>
                                                    <td>{{ $contact->subject }}</td>
                                                    <td>{{ Str::limit($contact->message, 50) }}</td>
                                                    <td>{{ $contact->created_at->format('Y-m-d H:i:s') }}</td>
                                                    <td>
                                                        <button class="btn btn-info btn-sm action-btn view-btn" data-id="{{ $contact->id }}" data-toggle="modal" data-target="#viewModal">
                                                            <i class="fas fa-eye"></i> View
                                                        </button>
                                                        <form action="{{ route('contact.destroy', $contact->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this submission?');">
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
                                    <div>Showing {{ $contacts->firstItem() }} to {{ $contacts->lastItem() }} of {{ $contacts->total() }} entries</div>
                                    {{ $contacts->appends(request()->query())->links('vendor.pagination.bootstrap-4') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Radheya Enterprise {{ date('Y') }}</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewModalLabel">Contact Submission Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><strong>Name:</strong> <span id="modalName"></span></p>
                    <p><strong>Email:</strong> <span id="modalEmail"></span></p>
                    <p><strong>Subject:</strong> <span id="modalSubject"></span></p>
                    <p><strong>Message:</strong> <span id="modalMessage"></span></p>
                    <p><strong>Submitted At:</strong> <span id="modalSubmittedAt"></span></p>
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
                    url: '{{ url('contact') }}/' + id,
                    method: 'GET',
                    success: function(data) {
                        $('#modalName').text(data.name);
                        $('#modalEmail').text(data.email);
                        $('#modalSubject').text(data.subject);
                        $('#modalMessage').text(data.message);
                        $('#modalSubmittedAt').text(new Date(data.created_at).toLocaleString());
                        $('#viewModal').modal('show');
                    },
                    error: function() {
                        alert('Failed to load contact details.');
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
