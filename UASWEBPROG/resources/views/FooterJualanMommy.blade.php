<!DOCTYPE html>
<html lang="id">
<div class="footer-jualanmommy">
    <div class="footer-content">
        <img src="/assets/Logo.png" alt="JualanMommy Logo" class="footer-logo">
        <div class="footer-socials">
            <a href="https://www.instagram.com/jualannmommy" class="footer-icon"><img src="/assets/Instagram.png" alt="Instagram"></a>
            <a href="https://chat.whatsapp.com/L5RYuIPtlQd4jOihqCLpb7?fbclid=PAZXh0bgNhZW0CMTEAAaeb78K79D-7euz0TDxVOT7d2RLcNqwh6rOeLpXdqptvKhOjVCGkzbDhOHMS5A_aem_u4Xu_w6xB5jBdNE0bYEQbg" class="footer-icon"><img src="/assets/Whatsapp.png" alt="Whatsapp"></a>
            <a href="https://shopee.co.id/jualannmommy" class="footer-icon"><img src="/assets/Shopee.png" alt="Shopee"></a>
        </div>
    </div>
    <div class="footer-copyright">
        © 2025 jualanmommy. All Right Reserved.
    </div>
</div>
<style>
.footer-jualanmommy {
    background: #FCFCF5;
    width: 100vw;
    margin: 0;
    padding: 0;
}
.footer-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 32px 60px 0 60px;
}
.footer-logo {
    height: 70px;
}
.footer-socials {
    display: flex;
    gap: 40px;
}
.footer-icon img {
    height: 48px;
    width: 48px;
    object-fit: contain;
    transition: transform 0.2s;
}
.footer-icon img:hover {
    transform: scale(1.1);
}
.footer-copyright {
    text-align: center;
    font-size: 1.1rem;
    color: #222;
    padding: 18px 0 10px 0;
    background: #F5F5EE;
    margin-top: 18px;
    letter-spacing: 0.5px;
}
@media (max-width: 900px) {
    .footer-content {
        flex-direction: column;
        gap: 18px;
        padding: 24px 10px 0 10px;
    }
    .footer-logo {
        height: 48px;
    }
    .footer-socials {
        gap: 18px;
    }
    .footer-icon img {
        height: 32px;
        width: 32px;
    }
}
</style>