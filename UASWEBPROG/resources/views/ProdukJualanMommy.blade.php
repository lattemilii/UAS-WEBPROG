<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JualannMommy</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700,400&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            margin: 0;
            font-family: 'Montserrat', Arial, sans-serif;
            background: #F4F7F8;
        }
        .produk-section {
            margin-bottom: 32px;
            padding-top: 2rem;
            padding-bottom: 0;
            width: 100vw;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .produk-title {
            font-size: 3rem;
            font-weight: 700;
            color: #9ed4dd;
            margin-top: 0;
            margin-bottom: 18px;
            text-align: center;
            letter-spacing: 1px;
            background: linear-gradient(to bottom, #9ed4dd 50%, #fff 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
.carousel-stack-container {
    position: relative;
    width: 700px;
    height: 400px;
    margin: 0 auto;
}
@media (max-width: 900px) {
    .carousel-stack-container {
        width: 98vw;
        height: 260px;
    }
    .carousel-stack-card {
        width: 200px;
        height: 200px;
        border-radius: 16px;
    }
    .carousel-stack-card.active {
        width: 260px;
        height: 260px;
    }
}
@media (max-width: 600px) {
    .carousel-stack-container {
        width: 100vw;
        height: 100px;
    }
    .carousel-stack-card {
        width: 70px;
        height: 70px;
        border-radius: 8px;
    }
    .carousel-stack-card.active {
        width: 100px;
        height: 100px;
    }
}
        .carousel-stack-card {
            position: absolute;
            top: 0;
            left: 50%;
            width: 400px;
            height: 400px;
            border-radius: 24px;
            background: #bfe3e8;
            box-shadow: 0 8px 32px #0002;
            transform: translateX(-50%) scale(1);
            transition: 
                transform 0.5s cubic-bezier(.4,0,.2,1),
                box-shadow 0.4s,
                z-index 0s;
            z-index: 2;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            @media (max-width: 900px) {
                width: 220px;
                height: 220px;
                border-radius: 16px;
            }
            @media (max-width: 600px) {
                width: 120px;
                height: 120px;
                border-radius: 10px;
            }
        }
        .carousel-stack-card.active {
            z-index: 2;
            background: #bfe3e8;
            box-shadow: 0 8px 32px #0002;
            transform: translateX(-50%) scale(1);
            filter: none;
            opacity: 1;
            transition: 
                transform 0.5s cubic-bezier(.4,0,.2,1),
                box-shadow 0.4s,
                z-index 0s,
                opacity 0.3s;
        }
        .carousel-stack-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 24px;
            @media (max-width: 900px) {
                border-radius: 16px;
            }
            @media (max-width: 600px) {
                border-radius: 10px;
            }
        }
        .carousel-stack-card.prev {
            z-index: 1;
            background: #93ced8;
            box-shadow: 0 8px 32px #0001;
            transform: translateX(-120%) scale(0.92);
            filter: blur(0.5px) brightness(0.97);
            opacity: 0.8;
        }
        .carousel-stack-card.next {
            z-index: 1;
            background: #93ced8;
            box-shadow: 0 8px 32px #0001;
            transform: translateX(20%) scale(0.92);
            filter: blur(0.5px) brightness(0.97);
            opacity: 0.8;
        }
        .carousel-stack-card.hide {
            opacity: 0;
            pointer-events: none;
            z-index: 0;
            transition: opacity 0.3s;
        }
    </style>
</head>
<body>
    <div class="produk-section" id="produk">
        <div class="produk-title">Terbaru</div>
        <div class="carousel-stack-container" id="carousel-stack-container">
            <div class="carousel-stack-card" id="card0"><img src="/assets/produk1.png" alt="Produk 1"></div>
            <div class="carousel-stack-card" id="card1"><img src="/assets/produk2.png" alt="Produk 2"></div>
            <div class="carousel-stack-card" id="card2"><img src="/assets/produk3.png" alt="Produk 3"></div>
            <div class="carousel-stack-card" id="card3"><img src="/assets/produk4.png" alt="Produk 4"></div>
            <div class="carousel-stack-card" id="card4"><img src="/assets/produk5.png" alt="Produk 5"></div>
        </div>
    </div>
        <script>
        const cards = [
            document.getElementById('card0'),
            document.getElementById('card1'),
            document.getElementById('card2'),
            document.getElementById('card3'),
            document.getElementById('card4')
        ];
        let current = 0;
        let interval = null;
        let isDragging = false;
        let startX = 0;

        function updateStack() {
            cards.forEach((card, i) => {
                card.className = 'carousel-stack-card hide';
            });
            const prev = (current - 1 + cards.length) % cards.length;
            const next = (current + 1) % cards.length;
            cards[prev].className = 'carousel-stack-card prev';
            cards[current].className = 'carousel-stack-card active';
            cards[next].className = 'carousel-stack-card next';
        }

        function nextSlide() {
            current = (current + 1) % cards.length;
            window.requestAnimationFrame(updateStack);
        }

        function prevSlide() {
            current = (current - 1 + cards.length) % cards.length;
            window.requestAnimationFrame(updateStack);
        }

        function startAuto() {
            stopAuto();
            interval = setInterval(nextSlide, 2500);
        }

        function stopAuto() {
            if (interval) clearInterval(interval);
        }

        const container = document.getElementById('carousel-stack-container');
        container.addEventListener('mousedown', (e) => {
            isDragging = true;
            startX = e.pageX;
            stopAuto();
        });
        container.addEventListener('touchstart', (e) => {
            isDragging = true;
            startX = e.touches[0].clientX;
            stopAuto();
        });

        window.addEventListener('mousemove', (e) => {
            if (!isDragging) return;
            const diff = e.pageX - startX;
            if (Math.abs(diff) > 50) {
                if (diff < 0) nextSlide();
                else prevSlide();
                isDragging = false;
                startAuto();
            }
        });
        window.addEventListener('touchmove', (e) => {
            if (!isDragging) return;
            const diff = e.touches[0].clientX - startX;
            if (Math.abs(diff) > 50) {
                if (diff < 0) nextSlide();
                else prevSlide();
                isDragging = false;
                startAuto();
            }
        });
        window.addEventListener('mouseup', () => { isDragging = false; startAuto(); });
        window.addEventListener('touchend', () => { isDragging = false; startAuto(); });

        updateStack();
        startAuto();
    </script>
</body>
</html>


