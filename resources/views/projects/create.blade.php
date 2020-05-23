
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v4.0.1">
  <title>Checkout example · Bootstrap</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/checkout/">

  <!-- Bootstrap core CSS -->
  <link href="../dist/css/bootstrap.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
</head>
<body class="bg-light">
  <div class="container">
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="" alt="" width="72" height="72">
      <h2>VUE JS APPLICATION FORM</h2>
      <p class="lead">Vue JS application form using OOPs</p>
    </div>

    <div class="row">
      <div class="col-md-4 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-muted">Your Projects</span>
          <span class="badge badge-secondary badge-pill">{{$projects->count()}}</span>
        </h4>
        <ul class="list-group mb-3">
         @forelse($projects as $project)
         <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Product name</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$12</span>
        </li>
        @empty
        <p>No project found</p>
        @endforelse
      </ul>
    </div>
    <div class="col-md-8 order-md-1" id="app">
      <h4 class="mb-3">Project Information</h4>
      <form class="needs-validation" method="POST" action="/projects" @submit.prevent=onSubmit @keydown="errors.clear($event.target.name)">
      	@csrf
        <div class="mb-3">
          <label for="address">Project Name:</label>
          <input type="text" class="form-control" name="name" id="address" placeholder="Name" v-model="name">
          
          <span class="text text-danger" v-text="errors.get(name)"></span>
        </div>

        <div class="mb-3">
          <label for="address2">Project Description</label>
          <input type="text" class="form-control" id="address2" name="description" placeholder="Description" v-model="description">
          <span class="text text-danger" v-text="errors.get('description')"></span>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
      </form>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017-2020 Company Name</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="../js/app.js"></script>
</html>
