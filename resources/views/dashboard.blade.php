@extends('master-dashboard')
@section('title','dashboard')
@section('content')

   
<div class="col-sm-9 mt-5 das-items">
    <div class="row mx-5 text-center">
        <div class="col-sm-4 mt-5">
            <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
            <div class="card-header">Courses</div>
            <div class="card-body">
                <h4 class="card-title">
                    5
                </h4>
                <a href="#" class="btn text-white">View</a>
            </div>
            </div>
        </div>
        {{-- one --}}
        <div class="col-sm-4 mt-5 ">
            <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
            <div class="card-header">Students</div>
            <div class="card-body">
                <h4 class="card-title">
                    5
                </h4>
                <a href="#" class="btn text-white">View</a>
            </div>
            </div>
        </div>
        {{-- two --}}
        <div class="col-sm-4 mt-5">
            <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
            <div class="card-header">Sold</div>
            <div class="card-body">
                <h4 class="card-title">
                    5
                </h4>
                <a href="#" class="btn text-white">View</a>
            </div>
        </div>
        </div>
</div>

   
        <div class="mx-5 mt-5 text-center course-table ">
            {{-- table --}}
            <p class=" text-white p-2" style="background-color: #ED0786">Course Ordered</p>
            <table class="table">
                <tr>
                    <th scope="col">Order ID</th>
                    <th scope="col">Course ID</th>
                    <th scope="col">Student Email</th>
                    <th scope="col">Order Data</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Action</th>
                </tr>
                <tr>
                    <th scope="row">22</th>
                    <td>100</td>
                    <td>aryan@gmail.com</td>
                    <td>13/05/2021</td>
                    <td>2000</td>
                    <td><button type="submit" class="btn btn-secondary" name="delete" value="Delete"> <i class="fa fa-trash-alt"></i> </button></td>

                </tr>
                <tr>
                    <th scope="row">22</th>
                    <td>100</td>
                    <td>aryan@gmail.com</td>
                    <td>13/05/2021</td>
                    <td>2000</td>
                    <td><button type="submit" class="btn btn-secondary" name="delete" value="Delete"> <i class="fa fa-trash-alt"></i> </button></td>

                </tr>
                <tr>
                    <th scope="row">22</th>
                    <td>100</td>
                    <td>aryan@gmail.com</td>
                    <td>13/05/2021</td>
                    <td>2000</td>
                    <td><button type="submit" class="btn btn-secondary" name="delete" value="Delete"> <i class="fa fa-trash-alt"></i> </button></td>

                </tr>

            </table>
        </div>

@endsection

