
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
      <h2>VUE JS MESSAGES</h2>
    </div>

    <div id="root">
      <message title="Message Title" body="Message Body"></message>
      <message title="Message Title 2" body="Message Body 2"></message>
    </div>
  </div>
</div>
</body>


<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<!-- vue js scripts -->
<script>
  Vue.component('message', {
    props:['title', 'body'],

    data(){
      return{
        isVisible:true
      };
    },

    template:'<div class="card" v-show="isVisible"><div class="card-header"><h4>@{{title}}</h4><button class="close" @click="hideModal">x</button></div><div class="card-body"><p>@{{body}}</p></div></div>',

    methods:{
      hideModal(){
        this.isVisible = false;
      }
    }
  });

  new Vue({
    el:'#root'
  });
</script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</html>
