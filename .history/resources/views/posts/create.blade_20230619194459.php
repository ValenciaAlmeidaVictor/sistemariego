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
         <form action="{{ route('posts.destroy',$post->id )}}" method="POST">
             <label>ID</label>
             <input type="text" name="Id" class="form-control mb-3" value="">
             <label>NOMBRE</label>
             <input type="text" name="Nombre" class="form-control mb-3" value="">
             <label>APELLIDO</label>
             <input type="text" name="Apellido" class="form-control mb-3" value="">
             <label>EDAD</label>
             <input type="text" name="Edad" class="form-control mb-3" value="">
             <input type="submit" value="Actualizar" class="btn btn-primary btn-block">
         </form>
     </div>
  </body>
  </html>
