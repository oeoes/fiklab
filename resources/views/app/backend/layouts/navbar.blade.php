<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <img src="{{ asset('images/user-male.svg') }}" class="img-circle elevation-2" alt="User Image" width="30px">
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">{{ auth()->user()->name }}</span>
                <div class="dropdown-divider"></div>
                <a href="{{ route('account') }}" class="dropdown-item" data-toggle="model" data-target="#account">
                    <i class="fas fa-cog mr-2"></i> Account Settings
                </a>
            </div>
        </li>
    </ul>

    <!-- Modal -->
                <div class="modal fade" id="account" tabindex="-1" role="dialog" aria-labelledby="add-moreLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="add-moreLabel">Add Image</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('gallery.store_images') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <label for="">Select Image</label>
                                    <input type="file" class="form-control" name="image" required>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-outline-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-sm btn-outline-primary">Upload</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
</nav>