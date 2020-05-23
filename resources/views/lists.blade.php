
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
      <h2>VUE JS LISTS</h2>
      <p class="lead">Vue JS application form using OOPs</p>
    </div>

    <div id="root">
      <div class="col-md-12 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-muted">Your Projects</span>
          <span class="badge badge-secondary badge-pill">0</span>
        </h4>
        <ul class="list-group mb-3">
         <li class="list-group-item d-flex justify-content-between lh-condensed" v-for="name in names" v-text="name">
        </li>
      </ul>

      <input type="text" v-model="newName" class="form-control" name="name">
      <button class="btn btn-success" @click="addName">Submit</button>
    </div>
  </div>
</div>
</body>


<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<!-- vue js scripts -->
<script>
  var app = new Vue({
    el : '#root',

    data:
    {
      newName : '',
      names:['Joe', 'Mary']
    },

    methods:{
      addName()
      {
        this.names.push(this.newName);
        this.newName = '';
      }
    }

//  mounted(){
//   document.querySeletor('#button').addEventListener('click', () =>{
//       let name = document.querySeletor('#input').value;

//       app.names.push(name);
//     });
// }
});
</script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</html>
