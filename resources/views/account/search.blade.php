@extends('root')
@section('body')
    <div id="page" class=" bg-white pb-4">
        <h5 class="fw-semibold px-3 pt-3">Search</h5>
        <hr>
        <!-- Add content specific to the search page here -->
        <section class="">
            <div class="input-group mb-3  px-4">
                <input type="text" class="form-control" placeholder="Search shared items"
                       aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-warning px-4 fw-semibold pt-2" type="button" id="button-addon2"><i
                        class="nav_icon fa-solid fa-magnifying-glass"></i></button>
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
                            <button class="btn btn-warning px-4 fw-semibold">Send Request</button>
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
                            <button class="btn btn-warning px-4 fw-semibold">Send Request</button>
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
                            <button class="btn btn-warning px-4 fw-semibold">Send Request</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <div class="d-flex justify-content-center mt-5">
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span
                                        aria-hidden="true">&laquo;</span></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item "><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span
                                        aria-hidden="true">&raquo;</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
    </div>
@endsection
