<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>

</head>
<body>
    

    <?php
    $Nombre= $_POST['Nombre'];
    $Costo= $_POST['Costo'];
    $Precio= $_POST['Precio'];
    $Stock= $_POST['Stock'];
    $Stock_Minimo= $_POST['Stock_Minimo'];
    ?>
    <div class ="container"><br>
    <table class ="table table-striped table-hover table-bordered">
        <tbody>
            <tr>
                <th>Nombre</th>
                <th>Costo</th>
                <th>precio</th>
                <th>Stock</th>
                <th>Stock minimo</th>
             </tr>
             <tr>
                 <td><?php echo $Nombre ?></td>
                 <td><?php echo $Costo ?></td>
                 <td><?php echo $Precio ?></td>
                 <td><?php echo $Stock ?></td>
                 <td><?php echo $Stock_Minimo?></td>


                 



             </tr>







        </tbody>







    </table>





</div>


    
</body>
</html>