<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario</title>
    <style>
        body{
            background-color: #ffffff;
            margin: 0;
            padding: 0;
            font-family: Arial,sans-serif;
            color:#333;
        }
        #fileInput{
            display:none;
        }
        button{
            padding:8px 16px;
            background-color:#008CBA;
            color: white;
            border:none;
            cursor: pointer;
            border-radius: 4px;
        }
        button:hover{
            background-color:#004d66;
        }
        textarea{
            width: 100%;
            padding: 8px;
            margin-top:10px;
            border: 1px solid #ccc;
            border-radius:4px;
        }
        .container{
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .profile-tittle{
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }
        #profile-picture{
            width: 200px;
            height: 200px;
            border-radius: 50%;
            margin: 2px auto;
            cursor: pointer;
        }
        .user-info{
            text-align: left;
            margin-left: 20px;
        }
        .description{
            text-align: left;
            margin-top: 20px;
            margin-left: 20px;
            cursor: pointer;
            color: blue;
            text-decoration: underline;
        }
        #uploadedImage{
            max-width: 100%;
            max-height: 300px;
            margin-top: 20px auto;
            border-radius:5px;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
        }
        .container{
            box-shadow: 0 0 10px rgba(0,0,0.1);
        }
        .profile-title{
            text-align:center;
            margin-bottom:20px;
        }
        .profile-picture{
            border: 4px solid #fff;
            box-shadow: 0 0 10px rgba(0,0,0.2);
        }
        .user-info p{
            margin-botton: 10px;
        }
        .description{
            color: #333;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <div class="profile-tittle">Mi perfil</div>
        <br>
        <img id="#profile-picture" src="perf.jfif" alt="Imagen de perfil" alt="200" width="200" ALIGN="CENTER" onclick="document.getElementById('fileInput').click();">
        <input type="file" id="fileInput" style="display: none;">
        <div class="user-info">
            <?php
            $nombre_completo="Nombre Completo del Usuario";
            echo "<p><strong>Nombre:</strong> $nombre_completo";
            ?>
        </div>
        <div class="description" onclick="showDescriptionInput()">Descripción</div>
        <textarea id="descriptionInput" style="display: none;"></textarea>
        <button id="uploadPhoto" onclick="document.getElementById('fileInput').click()">Subir fotos:</button>
        <img id="uploadedImage" style="display: none;">
    </div>
   <script>
        function showDescriptionInput(){
            var descriptionInput=document.getElementById('descriptionInput');
            descriptionInput.style.display='block';
            descriptionInput.focus();
        }
       function uploadPhoto(event){
        var file=event.target.files[0]
        var reader=new FileReader();
        reader.onload=function(e){
            var img=document.getElementById('uploadedImage');
            img.src=e.target.result;
            img.style.display='block';
        }
        reader.readAsDataURL(file);
       }
   </script>
</body>
</html>
