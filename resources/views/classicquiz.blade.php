<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
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
                  <h4 class="level-title"> <b>Level One</b> </h4>
                  <a href="#" id="myBtn" class="btn btn-primary">Play</a>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h4 class="level-title"> <b>Level Two</b> </h4>
                    <a href="#" class="btn btn-primary">Play</a>
                  </div>
                </div>
              </div>

              <div class="col-md-3 col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h4 class="level-title"> <b>Level Three</b> </h4>
                    <a href="#" class="btn btn-primary">Play</a>
                  </div>
                </div>
              </div>

              <div class="col-md-3 col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h4 class="level-title"> <b>Level Four</b> </h4>
                    <a href="#" id="last-btn" onclick="fun()" class="btn btn-primary">Play</a>
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
    <div class="header">
      <div class="row">
        <div class="col-md-4">
          <h4>Quiz Name</h4>
        </div>
        <div class="col-md-4">
          <h4>timer</h4>
        </div>
        <div class="col-md-4">
          <i class="close">&times;</i>
        </div>
      </div>
    </div>
    <div class="question-section">
      <div id="qst-1" class="quiz-questions show">
        <div id="qiestion1" class="question">
          <h3>What is your name?</h3>
        </div>
        <div class="options">
          <table class="table table-dark">
            <tbody>
              <tr class="table-active">
                <td><input type="radio" name="question" id="option1">
                  <label for="option1">Nahid</label>
                </td>
              </tr>
              <tr>
                <td><input type="radio" name="question" id="option2">
                  <label for="option2">Rayhan</label>
                </td>
              </tr>
              <tr>
                <td><input type="radio" name="question" id="option3">
                  <label for="option3">Jony</label>
                </td>
              </tr>
              <tr>
                <td>
                  <input type="radio" name="question" id="option4">
                  <label for="option4">Hasan</label>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div id="qst-2" class="quiz-questions hide">
        <div id="qiestion1" class="question">
          <h3>What is your gf name?</h3>
        </div>
        <div class="options">
          <table class="table table-dark">
            <tbody>
              <tr class="table-active">
                <td><input type="radio" name="question" id="option1">
                  <label for="option1">Nahid</label>
                </td>
              </tr>
              <tr>
                <td><input type="radio" name="question" id="option2">
                  <label for="option2">Rayhan</label>
                </td>
              </tr>
              <tr>
                <td><input type="radio" name="question" id="option3">
                  <label for="option3">Jony</label>
                </td>
              </tr>
              <tr>
                <td>
                  <input type="radio" name="question" id="option4">
                  <label for="option4">Hasan</label>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div id="qst-3" class="quiz-questions hide">
        <div id="qiestion1" class="question">
          <h3>What is your firends name?</h3>
        </div>
        <div class="options">
          <table class="table table-dark">
            <tbody>
              <tr class="table-active">
                <td><input type="radio" name="question" id="option1">
                  <label for="option1">Nahid</label>
                </td>
              </tr>
              <tr>
                <td><input type="radio" name="question" id="option2">
                  <label for="option2">Rayhan</label>
                </td>
              </tr>
              <tr>
                <td><input type="radio" name="question" id="option3">
                  <label for="option3">Jony</label>
                </td>
              </tr>
              <tr>
                <td>
                  <input type="radio" name="question" id="option4">
                  <label for="option4">Hasan</label>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
      <div class="footer">
        <div class="row">
          <div class="col-md-6">
            <nav aria-label="...">
              <ul class="pagination">
                <li class="page-item disabled">
                  <span class="page-link">Previous</span>
                </li>
                <li class="page-item">
                  <a onclick="changeQuestion()" class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav>
          </div>
          <div class="col-md-6">
            <button class="submit-btn btn btn-primary">Submit</button>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

<script>
var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
  modal.style.display = "block";
}
span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

function changeQuestion(){
  const questions=document.getElementsByClassName('quiz-questions');
  for(var i=0; i<questions.length; i++){
    if(questions[i].className == "quiz-questions show"){
      current = questions[i];
      prev = current;
      current = questions[i+1];
      current.className="quiz-questions show";
      prev.className="quiz-questions hide";
      
    }
  }
  
}
</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>