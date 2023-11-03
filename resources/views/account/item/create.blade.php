@extends('root')
@section('body')
    <div id="page" class="bg-white pb-4">
        <h5 class="px-3 pt-3">Add New Items</h5>
        <hr>
        <section class="px-5">
            <form action="" class="rounded  AddItems-form p-5">
                <div class="input-group mb-3">
                    <input
                        required
                        type="text"
                        name="item_name"
                        class="form-control"
                        aria-label="itemname"
                        placeholder="Item name"
                        aria-describedby="item name"/>
                </div>
                <div class="input-group mb-3">
                    <input
                        required
                        type="text"
                        name="manufacturer"
                        class="form-control"
                        aria-label="Manufacturer"
                        placeholder="Manufacturer"
                        aria-describedby="Manufacturer"/>
                </div>
                <div class="input-group mb-3">
                    <input
                        required
                        type="text"
                        name="origin"
                        aria-label="Origin"
                        class="form-control"
                        placeholder="Origin"
                        aria-describedby="Origin"/>
                </div>
                <div class="input-group mb-3">
                    <input
                        required
                        type="text"
                        name="catalog_no"
                        class="form-control"
                        placeholder="Catalog no"
                        aria-label="Catalog no"
                        aria-describedby="Catalog no"/>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Stock amount" aria-label="stock amount"
                           aria-describedby="stock amount">
                    <span class="input-group-text" id="stock-amount">
                        <select class="form-select" id="measurement-scale">
                            <option value="mL">mL</option>
                            <option value="g">g</option>
                            <option value="mg">mg</option>
                            <option value="µg">µg</option>
                        </select>
                    </span>
                </div>
                <div class="input-group mb-3">
                    <select class="form-select" aria-label="Default select example">
                        <option selected class="select-placeholder">Shared</option>
                        <option value="shared">Shared</option>
                        <option value="non_shared">Non-Shared</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <input
                        type="text"
                        class="form-control"
                        placeholder="Shared amount"
                        aria-label="shared amount"
                        aria-describedby="shared amount">
                    <span class="input-group-text" id="shared-amount">
                        <select class="form-select" id="measurement-scale" aria-label="measurement">
                            <option value="mL">mL</option>
                            <option value="g">g</option>
                            <option value="mg">mg</option>
                            <option value="µg">µg</option>
                        </select>
                    </span>
                </div>
                <div class="d-grid gap-2 mt-4 pb-2">
                    <input class="btn btn-warning fw-bold" type="submit" value="Add" name="add"/>
                </div>
            </form>
        </section>
    </div>
@endsection
