<!-- resources/views/incident.blade.php -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Déclaration d'Incident</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <style>
        .content {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            padding: 20px;
            height: 100vh;
            background: url('{{ asset('images/securite-industrielle.jpg') }}') no-repeat center center;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            width: 100%;
        }
        <style>
        .content {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            padding: 20px;
            height: 100vh;
            background: url('Images/securite-industrielle.jpg') no-repeat center center;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            width: 100%;
        }
        .header-content {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 80%;
            text-align: center;
            background: white;
            padding-top: 20px;
            padding-bottom: 20px;
            border-radius: 10px;
            margin-top: 10px;
            
          
        }
        .header-content img {
            height: 60px;
            width: 100px;
            margin-left: 40px;
            margin-right: 40px;
            margin-top: 1px;
        }
        .header-content span{
            font-family: serif;
            font-size:larger;
            font-weight: bolder;
        }
        .form-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            max-width: 400px;
            /* background: rgba(255, 255, 255, 0.9); */
            padding: 100px;
            border-radius: 10px;
            margin-right: 60px;
        }
        input, select, button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            text-align: center;
        }
        button {
            background-color: #003366;
            color: white;
            cursor: pointer;
            font-weight: bold;
        }
        button:hover {
            background-color: #002244;
        }
        .header-bar {
            display: flex;
            align-items: center;
            padding: 15px;
            width: 100%;
            background-color: #003366;
            color: white;
            font-size: 18px;
            font-weight: bold;
            justify-content: space-between;
        }
        .header-bar h2 {
            margin: 0;
            padding-left: 20px;
            flex-shrink: 0;
            font-family: Arial, sans-serif ;
        }
        .color25{
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: larger;
            font-weight: bolder;
            text-align: center; /* Centre le texte des labels */
            display: block; /* Force chaque label à être sur une ligne */
             width: 100%;
        }
        .image-headerBar{
            width: 6%;
            height: 6%;
            margin-right: 30px;
        }
    </style>
    </style>
</head>
<body>
    <div class="container">
        <div class="header-bar">
            <h2>LEONI</h2>
            
            <img src="{{ asset('images/Capture-removebg-preview.png') }}" alt="Left Image" class="image-headerBar">
        </div>
        <div class="content">
            <div class="header-content">
                <img src="{{ asset('images/معلومات-عن-ادارة-المخاطر-وخصائصها.jpg') }}" alt="Left Image">
                <span>Reporting risks and near misses - الإبلاغ عن المخاطر و شبه الحوادث</span>
                <img src="{{ asset('images/يجب-عليك-إدراك-المخاطر-العامة-المحيطة-بك-_انواع-المخاطر3-scaled.jpg') }}" alt="Right Image">
            </div>
            <div class="form-container">
            <form action="{{ route('incident.submit') }}" method="POST">
    @csrf

    <label for="matricule" class="color25">Matricule</label>
    <input type="text" id="matricule" name="matricule" placeholder="Entrez votre matricule">

    <label for="filiere" class="color25">Plant</label>
    <select id="filiere" name="filiere" required>
        <option value="">Sélectionnez votre Plant</option>
        <option value="enclicitage+bandage">VOLKSWAGEN</option>
        <option value="vkf">BMW</option>
        <option value="bandage">AUDI</option>
    </select>

    <button type="submit" name="language" value="fr">Français</button>
    <button type="submit" name="language" value="ar">العربية</button>
</form>

                

                   

                </form>
            </div>
        </div>
    </div>
</body>
</html>
