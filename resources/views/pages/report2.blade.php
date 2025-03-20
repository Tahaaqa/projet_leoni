<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@lang('messages.report_type')</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<style>
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
        height: 8vh;
    }
    .header-bar h2 {
        margin: 0;
        padding-left: 20px;
        flex-shrink: 0;
        font-family: Arial, sans-serif;
    }
    .container {
        width: 100%;
        text-align: center;
    }
    .image-headerBar {
        width: 6%;
        height: 90%;
        margin-right: 30px;
    }
    .header-content {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 80%;
        text-align: center;
        background: white;
        padding: 20px;
        border-radius: 10px;
        margin-top: 10px;
    }
    .header-content span {
        font-family: serif;
        font-size: larger;
        font-weight: bolder;
    }
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

    /* --- Mise en page des images en grille --- */
    .image-grid {
        display: grid;
        grid-template-columns: repeat(5, 1fr); /* 5 images par ligne */
        gap: 12px; /* Réduction de l’espacement entre les images */
        justify-content: center;
        width: 80%;
        margin-top: 20px;
    }

    .image-grid figure {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        margin: 0;
    }

    .image-grid img {
        width: 140px; /* Taille des images */
        height: 140px;
        object-fit: cover;
        border-radius: 10px;
        transition: transform 0.3s ease-in-out;
    }

    .image-grid img:hover {
        transform: scale(1.1);
    }

    /* --- Ajustement de l'espace entre l’image et le texte --- */
    .image-grid figcaption {
        margin-top: 5px; /* Réduction de l’espace entre l’image et le titre */
        font-size: 14px;
        font-weight: bolder;
        color: white;
        font-size: larger;
        
    }

    /* --- Style pour la phrase de signalement --- */
    .report-message {
        margin-top: 20px;
        font-size: 18px;
        font-weight: bold;
        color: #003366;
        background: white;
        padding: 15px;
        border-radius: 10px;
        width: 60%;
    }
    .report-message span {
        display: block;
    }
    .other-button {
        position: absolute;
        bottom: 20px;
        right: 20px;
        padding: 12px 25px;
        font-size: 16px;
        font-weight: bold;
        color: white;
        background-color: #ff6600;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        transition: background 0.3s ease-in-out;
    }
    .other-button:hover {
        background-color: #cc5500;
    }
</style>
<body>
<div class="container">
    <div class="header-bar">
        <h2>LEONI</h2>
        <img src="{{ asset('images/Capture-removebg-preview.png') }}" alt="Left Image" class="image-headerBar">
    </div>
    <div class="content">
        <div class="header-content">
            <span>اختر نوع شبه الحادث للإبلاغ عنه</span>
        </div>
        <div class="image-grid">
            <figure>
                <a href="{{ route('imageformulaireArabe', ['type' => 'chute']) }}">
                    <img src="{{ asset('images/Capture5.PNG') }}" alt="Chute">
                </a>
                <figcaption>خطر سقوط</figcaption>
            </figure>
            <figure>
                <a href="{{ route('imageformulaireArabe', ['type' => 'brûlure']) }}">
                    <img src="{{ asset('images/Capture1.PNG') }}" alt="Brûlure">
                </a>
                <figcaption>خطر تعثر </figcaption>
            </figure>
            <figure>
                <a href="{{ route('imageformulaireArabe', ['type' => 'électrocution']) }}">
                    <img src="{{ asset('images/Capture2.PNG') }}" alt="Électrocution">
                </a>
                <figcaption>خطر سقوط من السلم</figcaption>
            </figure>
            <figure>
                <a href="{{ route('imageformulaireArabe', ['type' => 'collision']) }}">
                    <img src="{{ asset('images/Capture3.PNG') }}" alt="Collision">
                </a>
                <figcaption>خطر سقوط من مقعد</figcaption>
            </figure>
            <figure>
                <a href="{{ route('imageformulaireArabe', ['type' => 'coupure']) }}">
                    <img src="{{ asset('images/Capture4.PNG') }}" alt="Coupure">
                </a>
                <figcaption>خطر انزلاق</figcaption>
            </figure>
            <figure>
                <a href="{{ route('imageformulaireArabe', ['type' => 'glissade']) }}">
                    <img src="{{ asset('images/Capture6.PNG') }}" alt="Glissade">
                </a>
                <figcaption>خطر صعقة كهربائية </figcaption>
            </figure>
            <figure>
                <a href="{{ route('imageformulaireArabe', ['type' => 'écrasement']) }}">
                    <img src="{{ asset('images/Capture7.PNG') }}" alt="Écrasement">
                </a>
                <figcaption>خطر سحق</figcaption>
            </figure>
            <figure>
                <a href="{{ route('imageformulaireArabe', ['type' => 'projection']) }}">
                    <img src="{{ asset('images/Capture8.PNG') }}" alt="Projection">
                </a>
                <figcaption>خطر إصابة</figcaption>
            </figure>
            <figure>
                <a href="{{ route('imageformulaireArabe', ['type' => 'intoxication']) }}">
                    <img src="{{ asset('images/Capture9.PNG') }}" alt="Intoxication">
                </a>
                <figcaption>خطر الظهر المنحني</figcaption>
            </figure>
            <figure>
                <a href="{{ route('imageformulaireArabe', ['type' => 'autre']) }}">
                    <img src="{{ asset('images/Capture10.PNG') }}" alt="Autre">
                </a>
                <figcaption>جسم ساقط</figcaption>
            </figure>
        </div>

        <div class="report-message">
        <span>لا تتجاهلها - قم بالإبلاغ عنها</span>

        <span>تساعدنا تجاربك في تحسين السلامة</span>
        </div>
        <a href="{{ route('incident.other2') }}">
            <button class="other-button">أخرى</button>
        </a>
    </div>
</div>
</body>
</html>
