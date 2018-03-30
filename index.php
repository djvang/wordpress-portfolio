<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">Logo</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about-us">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#skills">Skills</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#portfolio">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <section class="jumbotron" id="home">
    <div class="container">
      <h1 class="display-3">Hello, world!</h1>
      <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
      <hr class="my-4">
      <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
      <p class="lead">
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
      </p>
    </div>
  </section>
  <section class="about-us py-5 my-5" id="about-us">
    <div class="container">
      <h2 class="display-4 text-center mb-5">About us</h2>
      <div class="row">
        <div class="col-sm-4">
          <img class="img-fluid" src="http://fakeimg.pl/1000x500/00CED1/FFF/?text=img+placeholder">
        </div>
        <div class="col-sm-8">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis suscipit tempora earum nulla fugit velit temporibus expedita! Veritatis rem quae perspiciatis ipsa ullam sunt quasi explicabo. Reiciendis, pariatur, temporibus. Libero.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto eaque quasi magni veniam placeat, a molestias quisquam autem cum delectus est, laudantium, ut maxime fugit repellat, nostrum neque nulla ullam!</p>
        </div>
      </div>
    </div>
  </section>
  <section class="skills bg-light py-5 my-5" id="skills">
    <div class="container">
      <h2 class="display-4 text-center mb-5">Skills</h2>
      <div class="row">
        <div class="col-sm-6">
          <h4 class="mt-4">HTML</h4>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div class="col-sm-6">
          <h4 class="mt-4">CSS</h4>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div class="col-sm-6">
          <h4 class="mt-4">JS</h4>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div class="col-sm-6">
          <h4 class="mt-4">Изготовление шаурмы</h4>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="portfolio" id="portfolio">
    <div class="container">
      <h2 class="display-4 text-center mb-5">Portfolio</h2>
      <div class="card-deck-wrapper">
        <div class="card-deck">
          <div class="card">
            <img class="card-img-top mb-3" src="http://fakeimg.pl/1000x500/00CED1/FFF/?text=img+placeholder" alt="Card image cap">
            <div class="card-body card-block">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top mb-3" src="http://fakeimg.pl/1000x500/00CED1/FFF/?text=img+placeholder" alt="Card image cap">
            <div class="card-body card-block">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top mb-3" src="http://fakeimg.pl/1000x500/00CED1/FFF/?text=img+placeholder" alt="Card image cap">
            <div class="card-body card-block">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top mb-3" src="http://fakeimg.pl/1000x500/ccc/FFF/?text=img+placeholder" alt="Card image cap">
            <div class="card-body card-block">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="contact py-5 my-5 border" id="contact">
    <div class="container">
      <h2 class="display-4 text-center mb-5">Contact</h2>
      <div class="row">
        <div class="col-6 mx-auto">
          <form action="#">
            <div class="form-row">
              <div class="col">
                <input type="text" class="form-control" placeholder="First name">
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Last name">
              </div>
            </div>
            <div class="form-group">
              <label for="textarea"></label>
              <textarea class="form-control" id="textarea" rows="3"></textarea>
            </div>
            <div class="form-group text-center">
              <button type="submit" class="btn btn-dark">Button</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <footer class="footer py-5 bg-light">
    <div class="container">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem voluptates qui delectus quia hic, labore eveniet? Illo consequatur, temporibus, nihil voluptas libero dolores, deleniti nesciunt, est inventore blanditiis non quam.</p>
    </div>
  </footer>
</body>

</html>
