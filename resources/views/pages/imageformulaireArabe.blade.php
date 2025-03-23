<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل حادث</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <style>
        /* Barre d'en-tête */
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
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
            height: 100vh;
            background: url('{{ asset('images/securite-industrielle.jpg') }}') no-repeat center center;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            width: 100%;
        }

        /* Formulaire */
        .form-container {
            width: 40%;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: right;
        }
        .form-container h2 {
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            color: black;
        }

        input, textarea, button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            text-align: right;
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
        <div class="form-container">
            <h2>تسجيل حادث</h2>
            <form action="{{ route('incident.save') }}" method="POST">
                @csrf
                <label for="emplacement">الموقع</label>
                <input type="text" id="emplacement" name="emplacement" placeholder="أدخل الموقع" required>

                <label for="description">الوصف</label>
                <textarea id="description" name="description" placeholder="صف الحادث" required></textarea>

                <label for="date">التاريخ</label>
                <input type="date" id="date" name="report_date">

                <label for="solution">الحل المقترح</label>
                <textarea id="solution" name="solution" placeholder="اقترح حلاً"></textarea>

                <button type="submit">إرسال</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
