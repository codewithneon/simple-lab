@extends('root')
@section('body')
    <div id="page" class="bg-white pb-4">
        <h5 class="fw-semibold px-3 pt-3">Shared Items</h5>
        <hr>
        <section>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">SL</th>
                        <th scope="col" class="w-25">Item Name</th>
                        <th scope="col">Stock Amount</th>
                        <th scope="col">Shared Amount</th>
                        <th scope="col" class="w-25">Activity</th>
                    </tr>
                    </thead>
                    <tbody class="">
                    <tr>
                        <th scope="row">1</th>
                        <td>Nitric acid</td>
                        <td>30mL</td>
                        <td>10mL</td>
                        <td>
                            <button class="btn btn-outline-warning px-4 text-dark fw-bold me-2">Edit</button>
                            <button class="btn btn-outline-warning px-4 text-dark fw-bold">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Carboxylic acid</td>
                        <td>30mL</td>
                        <td>10mL</td>
                        <td>
                            <button class="btn btn-outline-warning px-4 text-dark fw-bold me-2">Edit</button>
                            <button class="btn btn-outline-warning px-4 text-dark fw-bold">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Nitric acid</td>
                        <td>30mL</td>
                        <td>10mL</td>
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
