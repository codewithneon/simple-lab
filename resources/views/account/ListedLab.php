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
    <title>Listed Lab</title>
</head>
<body class="bg-light">
    <?php
        include "DeanDashboard.php";
        function setActive($page) {
        if (basename($_SERVER['PHP_SELF']) == $page) {
            echo 'active';
            }
        }
      ?>
    <div id="page" class="bg-white pb-4">
        <h5 class="fw-semibold px-3 pt-3">Listed Lab</h5>
        <hr>
        <section>
          <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">SL</th>
                        <th scope="col" class="w-25">Name </th>
                        <th scope="col">Designation</th>
                        <th scope="col">Department</th>
                        <th scope="col" class="w-25">Activity</th>
                    </tr>
                </thead>
                <tbody class="">
                    <tr>
                        <th scope="row">1</th>
                        <td>A.K.M Mahbub Hasan</td>
                        <td>Professor</td>
                        <td>Dept. of Biochemistry and Molecular Biology</td>
                        <td>
                            <button class="btn btn-outline-warning px-4 text-dark fw-bold me-2">Edit</button>
                            <button class="btn btn-outline-warning px-4 text-dark fw-bold">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>A.K.M Mahbub Hasan</td>
                        <td>Professor</td>
                        <td>Dept. of Biochemistry and Molecular Biology</td>
                        <td>
                            <button class="btn btn-outline-warning px-4 text-dark fw-bold me-2">Edit</button>
                            <button class="btn btn-outline-warning px-4 text-dark fw-bold">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>A.K.M Mahbub Hasan</td>
                        <td>Professor</td>
                        <td>Dept. of Biochemistry and Molecular Biology</td>
                        <td>
                            <button class="btn btn-outline-warning px-4 text-dark fw-bold me-2">Edit</button>
                            <button class="btn btn-outline-warning px-4 text-dark fw-bold">Delete</button>
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