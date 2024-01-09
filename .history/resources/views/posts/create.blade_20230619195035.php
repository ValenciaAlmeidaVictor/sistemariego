<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Agregar Invernadero</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<!-- <form method="POST" action="">
   <input type="text" name="search" placeholder="Buscar por nombre...">
   <input type="submit" name="submit" value="Buscar">
 </form>-->
<body>

   <div class="container mt-5">
       <form action="{{ route('posts.store')}}" method="POST">
          @csrf
           <label>NOMBRE</label>
           <input type="text" name="nombre" class="form-control mb-3" value="">
           <label>ANCHO</label>
           <input type="text" name="ancho" class="form-control mb-3" value="">
           <label>ALTO</label>
           <input type="text" name="alto" class="form-control mb-3" value="">
           <label>LARGO</label>
           <input type="text" name="Largo" class="form-control mb-3" value="">
           <label>MATERIAL ESTRUCTURA</label>
           <input type="text" name="material_es" class="form-control mb-3" value="">
           <label>MATERIAL ENVOLTURA</label>
           <input type="text" name="material_env" class="form-control mb-3" value="">
           <input type="submit" value="Agregar" class="btn btn-primary btn-block">
       </form>
   </div>
</body>
</html>
