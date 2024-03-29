@extends('layout.main')
@section('content')
<style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat|Poppins&display=swap');


    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .bg-img {
        background: url(https://images.pexels.com/photos/461940/pexels-photo-461940.jpeg);
        height: 90vh;
        background-size: cover;
        background-position: center;
    }

    .bg-img::after {

        content: '';
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background: rgba(0, 0, 0, 0.4);
    }

    .content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        z-index: 999;
        width: 370px;
        text-align: center;
        padding: 60px 32px;
        background: rgba(255, 255, 255, 0.04);
        box-shadow: -1px 4px 28px 0px rgba(0, 0, 0, 0.75);
    }

    .content header {
        color: #fff;
        font-size: 33px;
        font-weight: 600;
        margin: 0 0 35px 0;
        font-family: 'Poppins', sans-serif;
    }

    .field {
        position: relative;
        height: 45px;
        width: 100%;
        display: flex;
        background: rgba(255, 255, 255, 0.94);
    }

    .field span {
        color: #222;
        width: 40px;
        line-height: 45px;
        padding: 0 10px;
    }

    .field input {
        height: 100%;
        width: 100%;
        background: transparent;
        border: none;
        border-radius: round;
        outline: none;
        color: #222;
        font-size: 16px;
        font-family: 'Poppins', sans-serif;
    }



    .space {
        margin-top: 16px;
    }

    .pass {
        text-align: left;
        margin: 10px 0;
    }

    .pass a {
        color: #fff;
        font-family: 'Poppins', sans-serif;
        text-decoration: none;
    }

    .pass:hover a {
        text-decoration: underline;
    }

    input[type="submit"] {
        background: linear-gradient(to right, #0000ff 0%, #6666ff 100%);
        border: 1px solid linear-gradient(to right, #0000ff 0%, #6666ff 100%);
        ;
        color: #fff;
        font-size: 18px;
        letter-spacing: 1px;
        font-weight: 600;
        cursor: pointer;
        font-family: 'Montserrat', sans-serif;
    }

    input[type="submit"]:hover {
        background: linear-gradient(to left, #0000ff 0%, #6666ff 100%);
    }
</style>
<div class=" bg-img mb-2">
    <div class="container d-flex flex-row mt-3 justify-content-center align-item-center">
        <h4 class="mt-3" style="font-family: 'Dancing Script', cursive; color:white; font-size:3rem;">Student Detail Form</h4>
        <a href="/list"><button type="submit" class="btn btn-warning mt-4 ms-4">View Students</button></a>
    </div>

    <div class="  animate__zoomInDown content mt-3">
        <form action="/add" method="post">
      
        @csrf
        <div class="field rounded">

            <span class="fa fa-user"></span>
            <input type="text" name="name" required placeholder="Student Name">
        </div>
        <!-- <div class="field space rounded">
            <span class="fa fa-lock"></span>
            <input type="text" name="class" required placeholder="Class">
        </div> -->
        <div class="field space rounded">
            <span class="fa fa-lock rounded"></span>
            <select name="class" class="form-select form-select-md" aria-label=".form-select-md example">
                <option selected>Your Course</option>
                <option >BIT</option>
                <option>BIM</option>
                <option>BSC.CSIT</option>
                <option>BCA</option>
            </select>
        </div>

        <div class="field space rounded">
            <span class="fa fa-lock rounded"></span>
            <input type="number" name="rollno" required placeholder="Roll No">
        </div>
        <button type="submit" class="btn btn-primary fs-5 mt-4">Add Student </button>

        </form>
    </div>
</div>
@endsection