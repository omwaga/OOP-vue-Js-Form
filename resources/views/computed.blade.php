
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
      <h2>VUE JS ATTRIBUTE AND CLASS NAME BINDING</h2>
    </div>

    <div id="root">
      <h2>Completed Tasks</h2>
      <ul>
        <li v-for="task in tasks" v-if="task.complete">@{{task.task}}</li>
      </ul>

      <h2>Incompleted Tasks</h2>
      <ul>
        <li v-for="task in incompleteTasks">@{{task.task}}</li>
      </ul>
    </div>
  </div>
</div>
</body>


<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<!-- vue js scripts -->
<script>
  new Vue({
    el:'#root',

    data:{
        tasks: [
        {task: 'Go to the store', complete:true},
        {task: 'Go to the market', complete:false},
        {task: 'Go to the library', complete:true},
        {task: 'Go to the super', complete:false},
        {task: 'Go to the balll', complete:true},
        {task: 'Go to the stghjkl;ore', complete:false}
        ]
    },

    computed:{
      incompleteTasks(){
        return this.tasks.filter(task => ! task.complete);
      }
    }
  });
</script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</html>
