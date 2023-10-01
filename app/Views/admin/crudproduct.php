<?= $this->include('include/top') ?>

    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <?= $this->include('include/header') ?>
    </nav>
    <div id="layoutSidenav">
    <?= $this->include('include/sidenav') ?>

    <div id="layoutSidenav_content">
                <main>
                    
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Products</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                            <li class="breadcrumb-item active">Products</li>
                        </ol>
                    </div>


                        <!-- Modal -->
                        <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Products</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="code.php" method="POST">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" placeholder="Enter name of product" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Description</label>
                                        <input type="text" class="form-control" placeholder="Enter description" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Upload Image</label>
                                        <input type="file" name="product_image" id="product_image" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Price</label>
                                        <input type="text" class="form-control" placeholder="Enter price" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Category</label>
                                        <input type="text" class="form-control" placeholder="Enter category" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Quantity</label>
                                        <input type="text" class="form-control" placeholder="Enter quantity" required>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                            </div>
                        </div>
                        </div>
                    
                    <div class="container-fluid">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Products
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#productModal">
                                        ADD
                                    </button>
                                </h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Image</th>
                                                <th>Price</th>
                                                <th>Category</th>
                                                <th>Quantity</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>JJK</td>
                                                <td>jujustu sorcerers</td>
                                                <td>jjk.png</td>
                                                <td>P550.50</td>
                                                <td>Action</td>
                                                <td>50</td>
                                                <td><a href="#" class="btn btn-success">Edit</a></td>
                                                <td><a href="#" class="btn btn-danger">Delete</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>






                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
    </div>
    
    

<?= $this->include('include/end') ?>


