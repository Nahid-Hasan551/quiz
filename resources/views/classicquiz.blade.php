@extends('layouts.include.master')
@section('title','Classic Quiz')
@section('main_section')
    <header>
        <div class="container header-pad">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#"><span>Home</span> </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                      <!--<a class="nav-link active" aria-current="page" href="#">Home</a> -->
                  </div>
                </div>
              </nav>
        </div>
    </header>
    <div class="container">
        <h1>Classic Quiz</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h4 class="level-title"> <b>SSC Preparation</b> </h4>
                  <a href="" onclick="subjects(1)" id="myBtn" class="btn btn-primary">Play</a>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h4 class="level-title"> <b>HSC Preparation</b> </h4>
                    <a href="subjects-hsc" class="btn btn-primary">Play</a>
                  </div>
                </div>
              </div>

              <div class="col-md-3 col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h4 class="level-title"> <b>Admission</b> </h4>
                    <a href="#" class="btn btn-primary">Play</a>
                  </div>
                </div>
              </div>

              <div class="col-md-3 col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h4 class="level-title"> <b>BCS Preparation</b> </h4>
                    <a href="#" id="last-btn" class="btn btn-primary">Play</a>
                  </div>
                </div>
              </div>

        </div>
        <div class="container">
            <div class="caption">
                <h1>Leaderboard</h1>
            </div>
            <div class="leaderboard">
                <table class="table">
                    <thead class="table-head">
                      <th>SN</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Scored Point</th>
                      <th>Level</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Rayhan</td>
                        <td>Kobir</td>
                        <td>125</td>
                        <td>Two</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Nahid</td>
                        <td>Hasan</td>
                        <td>115</td>
                        <td>Two</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Israfil</td>
                        <td>Islam</td>
                        <td>105</td>
                        <td>Two</td>
                      </tr>

                    </tbody>
                  </table>
            </div>
        </div>
    </div>

    <div id="myModal" class="modal">
        <div class="modal-content">

        </div>

      </div>

@endsection

@section('script')
    <script>
    // var modal = document.getElementById("myModal");
    // var btn = document.getElementById("myBtn");
    // var span = document.getElementsByClassName("close")[0];

    function subjects(){

        $("#myModal").show();
        // alert('done');
    }

    </script>

@endsection

