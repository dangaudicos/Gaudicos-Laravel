@extends('layout.navbar')
<!DOCTYPE html>
<html>
<body>
    @section('content')
    <div class="contactcon pt-5 mx-auto" style="width: 1000px;">
    <h2 class="text-center pb-5 header"><b>CONTACT US</b></h2>
    <div class="container-fluid">
        <div class="container">
        <form class="pb-5">
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Name">
                </div>
                <div class="col">
                    <input type="email" class="form-control" placeholder="Email">
                </div>
                <div class="pt-1">
                    <input type="text" class="form-control" placeholder="Phone Number">
                </div>
                <div class="pt-1">
                    <textarea class="form-control" rows="5" id="comment" placeholder="Comment"></textarea>
                </div>
            </div>
            </br>
            <button type="button" class="btn btn-secondary">Send</button>
        </form>
        </div>
    </div>
    </div>
    @endsection
</body>
</html>
