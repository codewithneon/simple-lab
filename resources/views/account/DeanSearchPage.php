<!DOCTYPE html>
<html lang="en">
<head>
     <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/725d8e3c08.js"
      crossorigin="anonymous"
    ></script>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
    />
    <link rel="stylesheet" href="sideNav.css" />
    <title>Add New Items</title>
</head>
<body class="bg-light">
    <?php
        function setActive($page) {
            if (basename($_SERVER['PHP_SELF']) == $page) {
                echo 'active';
            }
        }
        ?>
    <?php
    include "DeanDashboard.php"
    ?>
    <div id="page" class="bg-white pb-4">
        <h5 class="fw-semibold px-3 pt-3">Search</h5>
        <hr>
        <!-- Add content specific to the search page here -->
        <section class="">
            <div class="input-group mb-3  px-4">
            <input type="text" class="form-control" placeholder="Search shared items" aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn btn-warning px-4 fw-semibold pt-2" type="button" id="button-addon2"><i class="nav_icon fa-solid fa-magnifying-glass"></i></button>
            </div>

            <!-- table -->
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Item Name</th>
                        <th scope="col">Shared Amount</th>
                        <th scope="col" class="w-25">Who Owned</th>
                        <th scope="col">Requested Amount</th>
                        <th scope="col">Activity</th>
                    </tr>
                </thead>
                <tbody class="">
                    <tr>
                        <th scope="row">1</th>
                        <td>Nitric acid</td>
                        <td>30mL</td>
                        <td>A.H.M Nurun Nabi, PhD
                            Dept. Biochemistry and
                            Molecular Biology
                            Mobile: 01711232425
                        </td>
                        <td>
                            <input class="border-1 border-warning rounded" type="text">
                        </td>
                        <td>
                            <button class="btn btn-warning px-4 fw-semibold">Send</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Nitric acid</td>
                        <td>30mL</td>
                        <td>A.H.M Nurun Nabi, PhD
                            Dept. Biochemistry and
                            Molecular Biology
                            Mobile: 01711232425
                        </td>
                        <td>
                            <input class="border-1 border-warning rounded" type="text">
                        </td>
                        <td>
                            <button class="btn btn-warning px-4 fw-semibold">Send</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Nitric acid</td>
                        <td>30mL</td>
                        <td>A.H.M Nurun Nabi, PhD
                            Dept. Biochemistry and
                            Molecular Biology
                            Mobile: 01711232425
                        </td>
                        <td>
                            <input class="border-1 border-warning rounded" type="text">
                        </td>
                        <td>
                            <button class="btn btn-warning px-4 fw-semibold">Send</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="d-flex justify-content-center mt-5">
             <nav aria-label="Page navigation">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item "><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
                </ul>
                </nav>
           </div>
        </div>
        </section>
    </div>

     <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
      integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa"
      crossorigin="anonymous"
    ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="sideNav.js"></script>
</body>
</html>
