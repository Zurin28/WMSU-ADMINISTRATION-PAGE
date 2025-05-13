<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }
    
.footer {
        position: relative;
        width: 100vw;
        left: 50%;
        right: 50%;
        margin-left: -50vw;
        margin-right: -50vw;
        color: white;
        padding-top: 2rem;
        padding-bottom: 0;
        overflow: hidden;
    }
    
    .footer-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -2;
        object-fit: cover;
    }
    
    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(180, 0, 0, 0.85);
        z-index: -1;
    }
    
    .footer-content {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1rem;
    }
    
    .footer-nav {
        display: flex;
        justify-content: space-around;
        margin-bottom: 3rem;
    }
    
    .footer-nav-section {
        text-align: center;
    }
    
    .footer-nav-title {
        font-size: 1.5rem;
        font-weight: bold;
        margin-bottom: 1rem;
    }
    
    .footer-nav-links {
        list-style: none;
    }
    
    .footer-nav-links li {
        margin-bottom: 0.5rem;
    }
    
    .footer-nav-links a {
        color: white;
        text-decoration: none;
        transition: opacity 0.3s;
    }
    
    .footer-nav-links a:hover {
        opacity: 0.8;
    }
    
    .vertical-line {
        width: 1px;
        background-color: rgba(255, 255, 255, 0.5);
    }
    
    .university-name {
        text-align: center;
        margin: 2rem 0;
    }
    
    .wmsu-title {
        font-size: 2rem;
        font-weight: bold;
        margin-bottom: 0.5rem;
    }
    
    .university-text {
        font-size: 1.5rem;
    }
    
    .logo-container {
        text-align: center;
        margin-bottom: 2rem;
    }
    
    .wmsu-logo {
        width: 80px;
        height: 80px;
    }
    
    .footer-bottom {
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-top: 1px solid rgba(255, 255, 255, 0.2);
        padding: 30px;
    }
    
    .copyright {
        font-size: 0.9rem;
    }
    
    .contact-info {
        display: flex;
        gap: 1.5rem;
        align-items: center;
    }
    
    .contact-item {
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    
    @media (max-width: 768px) {
        .footer-nav {
            flex-direction: column;
            gap: 2rem;
        }
        
        .vertical-line {
            width: 100%;
            height: 1px;
            margin: 1rem 0;
        }
        
        .footer-bottom {
            flex-direction: column;
            gap: 1rem;
            text-align: center;
        }
        
        .contact-info {
            flex-direction: column;
            gap: 1rem;
        }
    }
</style>

<footer class="footer">
    <!-- Background image goes here -->
    <img src="../images/cte.jpg" alt="WMSU Building" class="footer-bg" id="footer-background">
    
    <!-- Red overlay -->
    <div class="overlay"></div>
    
    <div class="footer-content">
        <div class="footer-nav">
            <div class="footer-nav-section">
                <h3 class="footer-nav-title">ABOUT</h3>
                <ul class="footer-nav-links">
                    <li><a href="#mission">Mission</a></li>
                    <li><a href="#vision">Vision</a></li>
                    <li><a href="#history">History</a></li>
                    <li><a href="#quality-policy">Quality Policy</a></li>
                    <li><a href="#university-function">University Function</a></li>
                </ul>
            </div>
            
            <div class="vertical-line"></div>
            
            <div class="footer-nav-section">
                <h3 class="footer-nav-title">RESOURCES</h3>
                <ul class="footer-nav-links">
                    <li><a href="#downloadables">Downloadables</a></li>
                </ul>
            </div>
            
            <div class="vertical-line"></div>
            
            <div class="footer-nav-section">
                <h3 class="footer-nav-title">QUICK LINKS</h3>
                <ul class="footer-nav-links">
                    <li><a href="#transparency-seal">Transparency Seal</a></li>
                    <li><a href="#board-of-regents">Board Of Regents</a></li>
                    <li><a href="#administrative-officials">Administrative Officials</a></li>
                </ul>
            </div>
        </div>
        
        <div class="university-name">
            <h2 class="wmsu-title">WESTERN MINDANAO STATE</h2>
            <p class="university-text">UNIVERSITY</p>
        </div>
        
        <div class="logo-container">
            <img src="../images/WMSU-Logo.png" alt="WMSU Logo" class="wmsu-logo" id="wmsu-logo">
        </div>
        
        <div class="footer-bottom">
            <div class="copyright">
                <p>Copyright © 2025 Western Mindanao State University.</p>
                <p>All rights reserved.</p>
            </div>
            
            <div class="contact-info">
                <div class="contact-item">
                    <span>991-1771</span>
                </div>
                <div class="contact-item">
                    <span>wmsu@wmsu.edu.ph</span>
                </div>
                <div class="contact-item">
                    <span>ISO 9001-2015</span>
                </div>
            </div>
        </div>
    </div>
</footer>

<div style="height: 2rem;"></div>
