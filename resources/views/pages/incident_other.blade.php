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
                <input type="text" id="emplacement" name="emplacement" placeholder="Entrez l'emplacement" required>

                <label for="description">Description</label>
                <textarea id="description" name="description" placeholder="Décrivez l'accident" required></textarea>

                <label for="date">Date</label>
                <input type="date" id="date" name="date">

                <label for="solution">Solution</label>
                <textarea id="solution" name="solution" placeholder="Proposez une solution"></textarea>

                <button type="submit">Soumettre</button>
            </div>

            <!-- Images des accidents -->
            <div class="image-container">
                <figure>
                <a href="{{ route('imageFormulaire', ['type' => 'intoxication']) }}">
                    <img src="{{ asset('images/Capture11-removebg-preview.png') }}" alt="Barrière">
                    </a>
                    <figcaption>Barrière du risque</figcaption>
                </figure>
                <figure>
                <a href="{{ route('imageFormulaire', ['type' => 'intoxication']) }}">
                    <img src="{{ asset('images/Capture15-removebg-preview.png') }}" alt="Feu">
                    </a>
                    <figcaption>Risque d'incendie</figcaption>
                </figure>
                <figure>
                <a href="{{ route('imageFormulaire', ['type' => 'intoxication']) }}">
                    <img src="{{ asset('images/Capture16-removebg-preview.png') }}" alt="Substance toxique">
                    </a>
                    <figcaption>Substances toxiques dangereuses</figcaption>
                </figure>
                <figure>
                <a href="{{ route('imageFormulaire', ['type' => 'intoxication']) }}">
                    <img src="{{ asset('images/Capture17-removebg-preview.png') }}" alt="Déversement">
                    </a>
                    <figcaption>Danger des substances brûlées</figcaption>
                </figure>
                <figure>
                <a href="{{ route('imageFormulaire', ['type' => 'intoxication']) }}">
                    <img src="{{ asset('images/Capture18-removebg-preview.png') }}" alt="Explosion">
                    </a>
                    <figcaption>Danger de gaz toxiques</figcaption>
                </figure>
                <figure>
                <a href="{{ route('imageFormulaire', ['type' => 'intoxication']) }}">
                    <img src="{{ asset('images/Capture19-removebg-preview.png') }}" alt="Gaz toxique">
                    </a>
                    <figcaption>Risque d'explosion</figcaption>
                </figure>
                <figure>
                <a href="{{ route('imageFormulaire', ['type' => 'intoxication']) }}">
                    <img src="{{ asset('images/Capture20-removebg-preview.png') }}" alt="Soudure">
                    </a>
                    <figcaption>Danger de Soudure</figcaption>
                </figure>
                <figure>
                <a href="{{ route('imageFormulaire', ['type' => 'intoxication']) }}">
                    <img src="{{ asset('images/Capture21-removebg-preview (2).png') }}" alt="Fumée toxique">
                    </a>
                    <figcaption>Danger de Fumée toxique</figcaption>
                </figure>
                <figure>
                <a href="{{ route('imageFormulaire', ['type' => 'intoxication']) }}">
                    <img src="{{ asset('images/Capture13-removebg-preview (1).png') }}" alt="Chute d'objet">
                    </a>
                    <figcaption>Chute d'objet</figcaption>
                </figure>
                <figure>
                <a href="{{ route('imageFormulaire', ['type' => 'intoxication']) }}">
                    <img src="{{ asset('images/Capture23-removebg-preview.png') }}" alt="Trou au sol">
                    </a>
                    <figcaption>Danger de Trou au sol</figcaption>
                </figure>
                <figure>
                <a href="{{ route('imageFormulaire', ['type' => 'intoxication']) }}">
                    <img src="{{ asset('images/Capture24-removebg-preview.png') }}" alt="Perçage">
                    </a>
                    <figcaption>Danger de Perçage</figcaption>
                </figure>
            </div>
        </div>
    </div>
</body>
</html>
