<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>JualannMommy</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:700,400&display=swap" rel="stylesheet" />
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: 'Montserrat', Arial, sans-serif;
      background: #f4f7f8;
    }

    .katalog-section {
      margin-bottom: 16px;
      padding-bottom: 10px;
    }

    .terlaris-section {
      min-height: unset;
      width: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 1rem 1rem 1rem 1rem;
      scroll-margin-top: 100px;
    }

    @media (min-width: 640px) {
      .terlaris-section {
        padding: 1.25rem 1.5rem 0.75rem 1.5rem !important;
      }
    }
    @media (min-width: 1024px) {
      .terlaris-section {
        padding: 1.5rem 2rem 0.75rem 2rem !important;
      }
    }

    .terlaris-title {
      font-size: 3rem;
      font-weight: 700;
      margin-bottom: 1.5rem;
      text-align: center;
      letter-spacing: 1px;
      background: linear-gradient(to bottom, #9ed4dd 50%, #fff 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      color: transparent;
    }

    .terlaris-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 1.5rem;
      width: 100%;
      max-width: 1400px;
      justify-items: center;
    }

    @media (min-width: 640px) {
      .terlaris-grid {
        grid-template-columns: repeat(3, 1fr);
      }
    }

    @media (min-width: 768px) {
      .terlaris-grid {
        grid-template-columns: repeat(4, 1fr);
      }
    }

    @media (min-width: 1024px) {
      .terlaris-grid {
        grid-template-columns: repeat(5, 1fr);
      }
    }

    .terlaris-card {
      background: #fff;
      border-radius: 0.75rem;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      text-align: center;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      max-width: 200px;
      width: 100%;
      text-decoration: none;
      color: inherit;
    }

    .terlaris-card:hover {
      transform: scale(1.05);
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    .terlaris-img {
      width: 100%;
      height: 180px;
      object-fit: cover;
    }

    .terlaris-info {
      padding: 0.5rem;
      font-size: 0.875rem;
      font-weight: 600;
      color: #7ed4dd;
      line-height: 1.3;
    }

    .terlaris-price {
      display: block;
      font-size: 0.75rem;
      font-weight: bold;
      color: #ff7eb9;
      margin-top: 0.25rem;
    }

    @media (max-width: 900px) {
      .terlaris-section {
        padding: 1.5rem 0.5rem 1.5rem 0.5rem;
      }
      .terlaris-title {
        font-size: 2rem;
        margin-bottom: 1rem;
      }
    }

    @media (min-width: 640px) {
      .katalog-section {
        margin-bottom: 16px !important;
        padding-bottom: 10px !important;
      }
      .terlaris-section {
        padding-top: 2rem !important;
      }
    }
    @media (min-width: 1024px) {
      .katalog-section {
        margin-bottom: 16px !important;
        padding-bottom: 10px !important;
      }
      .terlaris-section {
        padding-top: 2rem !important;
      }
    }
  </style>
</head>
<body>
  <div class="terlaris-section" id="terlaris">
    <div class="text-5xl font-bold mb-2 md:mb-6 text-center bg-clip-text text-transparent drop-shadow-md"
         style="background: linear-gradient(to bottom, #9ed4dd 50%, #fff 100%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;">
      Terlaris
    </div>

    <div class="terlaris-grid">
      <a href="https://shopee.co.id/H-M-SALE-Sonic-The-Hedgehog-Blue-Cap-i.196101272.28069077556" target="_blank" class="terlaris-card">
        <img src="/assets/SonicHat.png" alt="Sonic Hat" class="terlaris-img" />
        <div class="terlaris-info">
          Sonic Hat
          <span class="terlaris-price">Rp 159.600</span>
        </div>
      </a>

      <a href="https://shopee.co.id/H-M-SALE-Bows-White-Dress-i.196101272.26830644778" target="_blank" class="terlaris-card">
        <img src="/assets/WhiteDress.png" alt="Bows White Dress" class="terlaris-img" />
        <div class="terlaris-info">
          Bows White Dress
          <span class="terlaris-price">Rp 79.800</span>
        </div>
      </a>

      <a href="https://shopee.co.id/H-M-SALE-Dinosaur-Brown-Tshirt-i.196101272.28478918127" target="_blank" class="terlaris-card">
        <img src="/assets/DinoBrown.png" alt="Dinosaur Brown Tshirt" class="terlaris-img" />
        <div class="terlaris-info">
          Dinosaur Brown Tshirt
          <span class="terlaris-price">Rp 79.800</span>
        </div>
      </a>

      <a href="https://shopee.co.id/H-M-Sale-Kaos-Cream-Garis-Katun-Anak-4-10-Y-i.196101272.26530655576" target="_blank" class="terlaris-card">
        <img src="/assets/CreamKatun.png" alt="Kaos Cream Garis Katun" class="terlaris-img" />
        <div class="terlaris-info">
          Kaos Cream Garis Katun Anak
          <span class="terlaris-price">Rp 79.800</span>
        </div>
      </a>

      <a href="https://shopee.co.id/MOTHERCARE-SALE-Mermicorn-Blue-Swimwear-i.196101272.26324313311" target="_blank" class="terlaris-card">
        <img src="/assets/MermicornBlue.png" alt="Mermicorn Blue Swimwear" class="terlaris-img" />
        <div class="terlaris-info">
          Mermicorn Blue Swimwear
          <span class="terlaris-price">Rp 228.000</span>
        </div>
      </a>
    </div>
  </div>
</body>
</html>
