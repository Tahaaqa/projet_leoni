<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل حادث</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <style>
        


        /* الحاوية الرئيسية */
        .container {
            width: 100%;
            text-align: center;
        }

        /* المحتوى الرئيسي */
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

        /* استمارة التسجيل */
        .form-container {
            width: 35%;
            background: white;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: right;
            min-height: 70vh;
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

        /* الصور */
        .image-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
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
            width: 140px;
            height: 140px;
            object-fit: cover;
            border-radius: 10px;
            transition: transform 0.3s ease-in-out;
        }

        .image-container img:hover {
            transform: scale(1.1);
        }

        /* عناوين الصور باللون الأبيض وبخط عريض */
        .image-container figcaption {
            margin-top: 2px;
            font-size: 14px;
            font-weight: bold;
            color: white;
        }
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

    </style>
</head>
<body>
    <div class="container">
        <!-- شريط الرأس -->
        <div class="header-bar">
            <h2>LEONI</h2>
            <img src="{{ asset('images/Capture-removebg-preview.png') }}" alt="Logo" class="image-headerBar">
        </div>

        <!-- المحتوى الرئيسي -->
        <div class="content">
            <!-- استمارة التسجيل -->
            <div class="form-container">
                <h2>تسجيل حادث</h2>
                <label for="emplacement">الموقع</label>
<input type="text" id="emplacement" name="emplacement" placeholder="أدخل الموقع" required>

<label for="description">الوصف</label>
<textarea id="description" name="description" placeholder="صف الحادث" required></textarea>


                <label for="date">التاريخ</label>
                <input type="date" id="date" name="date">

                <label for="solution">الحل</label>
                <textarea id="solution" name="solution" placeholder="اقترح حلاً"></textarea>

                <button type="submit">إرسال</button>
            </div>

            <!-- صور الحوادث -->
            <div class="image-container">
                <figure>
                    <img src="{{ asset('images/Capture11-removebg-preview.png') }}" alt="حاجز">
                    <figcaption>خطر حاجز</figcaption>
                </figure>
                <figure>
                    <img src="{{ asset('images/Capture15-removebg-preview.png') }}" alt="حريق">
                    <figcaption>خطر حريق</figcaption>
                </figure>
                <figure>
                    <img src="{{ asset('images/Capture16-removebg-preview.png') }}" alt="مواد سامة">
                    <figcaption>خطر مواد سامة</figcaption>
                </figure>
                <figure>
                    <img src="{{ asset('images/Capture17-removebg-preview.png') }}" alt="تسرب مواد">
                    <figcaption>خطر مواد محترقة</figcaption>
                </figure>
                <figure>
                    <img src="{{ asset('images/Capture18-removebg-preview.png') }}" alt="انفجار">
                    <figcaption>خطر غاز سام</figcaption>
                </figure>
                <figure>
                    <img src="{{ asset('images/Capture19-removebg-preview.png') }}" alt="غاز سام">
                    <figcaption>خطر انفجار</figcaption>
                </figure>
                <figure>
                    <img src="{{ asset('images/Capture20-removebg-preview.png') }}" alt="لحام">
                    <figcaption>خطر لحام</figcaption>
                </figure>
                <figure>
                    <img src="{{ asset('images/Capture21-removebg-preview (1).png') }}" alt="دخان سام">
                    <figcaption>خطر دخان سام</figcaption>
                </figure>
                <figure>
                    <img src="{{ asset('images/Capture13-removebg-preview.png') }}" alt="سقوط جسم">
                    <figcaption>خطر سقوط جسم</figcaption>
                </figure>
                <figure>
                    <img src="{{ asset('images/Capture23-removebg-preview.png') }}" alt="حفرة في الأرض">
                    <figcaption>خطر سقوط في حفرة </figcaption>
                </figure>
                <figure>
                    <img src="{{ asset('images/Capture24-removebg-preview.png') }}" alt="حفر">
                    <figcaption>خطر إصابة</figcaption>
                </figure>
            </div>
        </div>
    </div>
</body>
</html>
