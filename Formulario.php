<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Formulario.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="form-container">
        <h2>Envia tus peticiónes</h2>
        <p>Contactanos</p>
        <form method = "post" autocomplete = "off">
            <div class="form-group">
                <div class="form-content">
                    <label for="name">Nombre</label>
                    <input type="text" name="name" id="name" placeholder = "Nombre">
                </div>
                <div class="form-content">
                    <label for="email">Correo</label>
                    <input type="email" name="email" id="email" placeholder = "Correo">
                </div>
            </div>
            <div class="form-group">
                <div class="form-content">
                    <label for="direction">Direccion</label>
                    <input type="text" name="direction" id="direction" placeholder = "Direccion">
                </div>
                <div class="form-content">
                    <label for="phone">Telefono</label>
                    <input type="tel" name="phone" id="phone" placeholder = "Telefono">
                </div>
            </div>
            <label for="message">Mensaje</label>
            <textarea name="message" id="message" placeholder = "Mensaje"></textarea>
            <div class="btn-group">
                    <a href="Index.php" class="btn-2"><i class="fas fa-arrow-left"></i></a>            
                 <input class="btn" type="submit" name ="contact" value="Enviar Mensaje">
            </div>
        </form>
    </div>

    <?php
        include("contacto.php")
    ?>
</body>
</html>