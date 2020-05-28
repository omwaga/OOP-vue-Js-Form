
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
      <button class="btn text-white btn-danger"  @click="showModal=true">Add Industry</button>
      <modal v-if="showModal"></modal>
      
    </div>
  </div>


<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<!-- vue js scripts -->
<script>
Vue.component('modal', {
  template:'<div class="modal" tabindex="-1" role="dialog"><div class="modal-dialog" role="document"><div class="modal-content"><form method="post" action="#"><div class="modal-header"><h5 class="modal-title" id="exampleModalLabel">Add Industry</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body"><div class="row"><div class="col-md-12"><label>Select Industry</label></div></div></div><div class="modal-footer"><button type="button" class="btn btn-danger" data-dismiss="modal">Close</button><button type="submit" class="btn text-white" style="background-color:#070A53;">Save changes</button></div></form></div></div></div>',
});

new Vue({
  el:'#root',

  data:{
    showModal:false
  }
});
</script>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>


</body>
</html>
