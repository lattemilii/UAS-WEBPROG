<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JualannMommy</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700,400&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Montserrat', Arial, sans-serif;
            background: #F4F7F8;
        }

        .katalog-section {
            min-height: 65vh;
            width: 100vw;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 35px 0;
            
        }

        .katalog-title {
            font-size: 3rem;
            font-weight: 700;
            margin-top: 0;
            margin-bottom: 40px;
            text-align: center;
            letter-spacing: 1px;
            background: linear-gradient(to bottom, #9ed4dd 50%, #fff 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .katalog-box {
            width: 90vw;
            max-width: 90vw;
            height: 400px;
            background: #fff;
            display: flex;
            align-items: stretch;
            justify-content: flex-start;
            overflow: hidden;
            position: relative;
        }

        .katalog-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .katalog-overlay {
            position: absolute;
            left: 0;
            top: 0;
            width: 40%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding-left: 60px;
            z-index: 2;
        }

        .katalog-overlay p {
            font-size: 2.5rem;
            font-weight: 700;
            color: #555;
            margin-bottom: 24px;
            margin-top: 0;
            letter-spacing: 1px;
        }

        .katalog-btn {
            background: #ff7eb9;
            color: #fff;
            font-size: 1.5rem;
            font-weight: bold;
            border: none;
            border-radius: 32px;
            padding: 18px 48px;
            cursor: pointer;
            box-shadow: 0 2px 8px #ff7eb955;
            transition: background 0.2s;
            text-decoration: none;
            display: inline-block;
            text-align: center;
            white-space: nowrap;
        }

        .katalog-btn:hover {
            background: #ff5fa3;
        }

        @media (max-width: 900px) {
            .katalog-title {
                font-size: 2rem;
            }
            .katalog-box {
                height: 220px;
            }
            .katalog-overlay {
                width: 60%;
                padding-left: 20px;
            }
            .katalog-overlay p {
                font-size: 1.2rem;
            }
            .katalog-btn {
                font-size: 1.2rem;
                padding: 12px 24px;
            }
        }

        @media (max-width: 600px) {
            .katalog-box {
                height: 160px;
            }
            .katalog-overlay {
                width: 100%;
                padding: 10px;
                align-items: flex-start;
            }
            .katalog-overlay p {
                font-size: 1rem;
                margin-bottom: 10px;
            }
            .katalog-btn {
                font-size: 1rem;
                padding: 10px 20px;
                min-width: auto;
                max-width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="katalog-section" id="katalog">
        <div class="text-5xl font-bold mb-10 text-center bg-clip-text text-transparent drop-shadow-md"
     style="background: linear-gradient(to bottom, #9ed4dd 70%, #fff 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;">
  Katalog
</div>
        <div class="katalog-box">
            <img src="/assets/Katalog.png" alt="Katalog" class="katalog-img">
            <div class="katalog-overlay">
                <p>Klik tombol ini untuk melihat katalog kami!</p>
                <a href="/FullKatalogJualanMommy" class="katalog-btn">Check Now!!</a>
            </div>
        </div>
    </div>
</body>
</html>
