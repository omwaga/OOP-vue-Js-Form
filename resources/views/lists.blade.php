
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
        <div class=""  v-for="name in names">
          <div class="row">
            <div class="col-md-8">

             <label v-text="name.name"></label>

             <p v-text="name.description"></p>
           </div>
           <div class="col-md-4">

             <label v-text="name.created_at"></label>

             <label v-text="name.updated_at"></label>
           </div>
         </div><hr>
       </div>

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
      names:[
      {
        "id": 4,
        "name": "Software Development",
        "description": "New",
        "created_at": "2020-05-19T12:29:31.000000Z",
        "updated_at": "2020-05-19T12:29:31.000000Z"
      },
      {
        "id": 5,
        "name": "Photography",
        "description": "another task",
        "created_at": "2020-05-19T12:30:47.000000Z",
        "updated_at": "2020-05-19T12:30:47.000000Z"
      },
      {
        "id": 6,
        "name": "Collo Updated 1",
        "description": "My taskk",
        "created_at": "2020-05-19T12:49:36.000000Z",
        "updated_at": "2020-05-19T12:49:36.000000Z"
      },
      {
        "id": 7,
        "name": "Collo Updated 1",
        "description": "another task",
        "created_at": "2020-06-02T17:52:46.000000Z",
        "updated_at": "2020-06-02T17:52:46.000000Z"
      },
      {
        "id": 8,
        "name": "Software Development",
        "description": "another task",
        "created_at": "2020-06-02T17:53:00.000000Z",
        "updated_at": "2020-06-02T17:53:00.000000Z"
      },
      {
        "id": 9,
        "name": "Collo Updated 1",
        "description": "w",
        "created_at": "2020-06-02T18:17:43.000000Z",
        "updated_at": "2020-06-02T18:17:43.000000Z"
      },
      {
        "id": 10,
        "name": "Collo Updatedssdsd",
        "description": "My taskk",
        "created_at": "2020-06-02T19:04:40.000000Z",
        "updated_at": "2020-06-02T19:04:40.000000Z"
      },
      {
        "id": 11,
        "name": "Collo Updated nowwwww",
        "description": "wsdfghjkl/",
        "created_at": "2020-06-02T19:05:20.000000Z",
        "updated_at": "2020-06-02T19:05:20.000000Z"
      },
      {
        "id": 12,
        "name": "Software Development",
        "description": "My taskk",
        "created_at": "2020-06-03T11:19:19.000000Z",
        "updated_at": "2020-06-03T11:19:19.000000Z"
      },
      {
        "id": 13,
        "name": "Collo Updated 1",
        "description": "another task",
        "created_at": "2020-06-03T11:34:22.000000Z",
        "updated_at": "2020-06-03T11:34:22.000000Z"
      },
      {
        "id": 14,
        "name": "Mobile Phones",
        "description": "another task",
        "created_at": "2020-06-03T11:37:34.000000Z",
        "updated_at": "2020-06-03T11:37:34.000000Z"
      },
      {
        "id": 15,
        "name": "w",
        "description": "great",
        "created_at": "2020-06-03T11:44:50.000000Z",
        "updated_at": "2020-06-03T11:44:50.000000Z"
      }
      ]
    },

    methods:{
      addName()
      {
        this.names.push(this.newName);
        this.newName = '';
      }
    }
  });
</script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</html>
