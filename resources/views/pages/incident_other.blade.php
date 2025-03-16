<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Déclaration d'Incident</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <style>
        /* Barre d'en-tête */
        .header-bar {
            display: flex;
            align-items: center;
            padding: 10px;
            width: 100%;
            background-color: #003366;
            color: white;
            font-size: 18px;
            font-weight: bold;
            justify-content: space-between;
            height: 7vh;
        }

        .header-bar h2 {
            margin: 0;
            padding-left: 20px;
            flex-shrink: 0;
            font-family: Arial, sans-serif;
        }

        .image-headerBar {
            width: 6%;
            height: auto;
            margin-right: 30px;
        }

        /* Conteneur principal */
        .container {
            width: 100%;
            text-align: center;
        }

        /* Contenu principal */
        .content {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: flex-start;
            padding: 20px;
            height: auto;
            background: url('{{ asset('images/securite-industrielle.jpg') }}') no-repeat center center;
            background-size: cover;
            background-position: center;
            width: 100%;
            margin-top: -10px;
        }

        /* Formulaire */
        .form-container {
            width: 35%;
            background: white;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: left;
            min-height: 70vh; /* Réduction de la hauteur */
        }

        .form-container h2 {
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            color: black;
        }

        input, textarea, button {
            width: 100%;
            padding: 6px;
            margin: 6px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
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

        /* Images */
        .image-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr); /* 4 images par ligne */
            gap: 15px;
            justify-content: center;
            width: 60%;
        }

        .image-container figure {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            margin: 0;
            padding: 5px;
        }

        .image-container img {
            width: 140px; /* Augmentation de la taille des images */
            height: 140px;
            object-fit: cover;
            border-radius: 10px;
            transition: transform 0.3s ease-in-out;
        }

        .image-container img:hover {
            transform: scale(1.1);
        }

        /* Titres des images en blanc et gras */
        .image-container figcaption {
            margin-top: 2px;
            font-size: 14px;
            font-weight: bold;
            color: white;
        }

    </style>
</head>
<body>
    <div class="container">
        <!-- Barre d'en-tête -->
        <div class="header-bar">
            <h2>LEONI</h2>
            <img src="{{ asset('images/Capture-removebg-preview.png') }}" alt="Logo" class="image-headerBar">
        </div>

        <!-- Contenu principal -->
        <div class="content">
            <!-- Formulaire -->
            <div class="form-container">
                <h2>Déclarer un Accident</h2>
                <label for="emplacement">Emplacement</label>
                <input type="text" id="emplacement" name="emplacement" placeholder="Entrez l'emplacement">

                <label for="description">Description</label>
                <textarea id="description" name="description" placeholder="Décrivez l'accident"></textarea>

                <label for="date">Date</label>
                <input type="date" id="date" name="date">

                <label for="solution">Solution</label>
                <textarea id="solution" name="solution" placeholder="Proposez une solution"></textarea>

                <button type="submit">Soumettre</button>
            </div>

            <!-- Images des accidents -->
            <div class="image-container">
                <figure>
                    <img src="{{ asset('images/Capture11.PNG') }}" alt="Barrière">
                    <figcaption>Barrière</figcaption>
                </figure>
                <figure>
                    <img src="{{ asset('images/Capture15.PNG') }}" alt="Feu">
                    <figcaption>Feu</figcaption>
                </figure>
                <figure>
                    <img src="{{ asset('images/Capture16.PNG') }}" alt="Substance toxique">
                    <figcaption>Substance toxique</figcaption>
                </figure>
                <figure>
                    <img src="{{ asset('images/Capture17.PNG') }}" alt="Déversement">
                    <figcaption>Liquide brûlant</figcaption>
                </figure>
                <figure>
                    <img src="{{ asset('images/Capture18.PNG') }}" alt="Explosion">
                    <figcaption>Gaz toxique</figcaption>
                </figure>
                <figure>
                    <img src="{{ asset('images/Capture19.PNG') }}" alt="Gaz toxique">
                    <figcaption>Explosion</figcaption>
                </figure>
                <figure>
                    <img src="{{ asset('images/Capture20.PNG') }}" alt="Soudure">
                    <figcaption>Soudure</figcaption>
                </figure>
                <figure>
                    <img src="{{ asset('images/Capture21.PNG') }}" alt="Fumée toxique">
                    <figcaption>Fumée toxique</figcaption>
                </figure>
                <figure>
                    <img src="{{ asset('images/Capture22.PNG') }}" alt="Chute d'objet">
                    <figcaption>Chute d'objet</figcaption>
                </figure>
                <figure>
                    <img src="{{ asset('images/Capture23.PNG') }}" alt="Trou au sol">
                    <figcaption>Trou au sol</figcaption>
                </figure>
                <figure>
                    <img src="{{ asset('images/Capture24.PNG') }}" alt="Perçage">
                    <figcaption>Perçage</figcaption>
                </figure>
            </div>
        </div>
    </div>
</body>
</html>
