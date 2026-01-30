
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DesignCode - Creative Web & Graphic Design Studio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        html{
    scroll-behavior: smooth;
}

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary: #7B2FF7;
            --secondary: #1070FF;
            --accent: #FF00F5;
            --dark: #0F0620;
            --darker: #050115;
            --light: #F8F9FA;
            --text-light: #B8BCC8;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--darker);
            color: var(--light);
            overflow-x: hidden;
            position: relative;
        }

        /* Animated background */
        .galaxy-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background: linear-gradient(135deg, var(--darker) 0%, var(--dark) 50%, #1A0B3D 100%);
            overflow: hidden;
        }

        .stars {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .star {
            position: absolute;
            background-color: white;
            border-radius: 50%;
            animation: twinkle 4s infinite;
        }

        @keyframes twinkle {
            0%, 100% { opacity: 0.2; }
            50% { opacity: 0.8; }
        }

        /* Navigation */
        nav {
            position: fixed;
            top: 0;
            width: 100%;
            padding: 15px 30px;
            background: rgba(15, 6, 32, 0.8);
            backdrop-filter: blur(10px);
            z-index: 1000;
            transition: all 0.3s ease;
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 30px;
        }

        .nav-links a {
            color: var(--text-light);
            text-decoration: none;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-links a:hover {
            color: var(--primary);
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            transition: width 0.3s ease;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .menu-toggle {
            display: none;
            flex-direction: column;
            cursor: pointer;
        }

        .menu-toggle span {
            width: 25px;
            height: 3px;
            background-color: var(--light);
            margin: 3px 0;
            transition: 0.3s;
        }

        /* Container */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Hero Section */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 100px 0;
            position: relative;
        }

        .hero-content {
            display: flex;
            flex-direction: column;
            gap: 30px;
            max-width: 800px;
        }

        .hero h1 {
            font-size: 3.5rem;
            line-height: 1.2;
            background: linear-gradient(90deg, var(--primary), var(--secondary), var(--accent));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            animation: gradient 5s ease infinite;
            background-size: 200% 200%;
        }

        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .hero p {
            font-size: 1.2rem;
            color: var(--text-light);
            line-height: 1.6;
        }

        .hero-services {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            margin: 10px 0;
        }

        .hero-service {
            background: rgba(123, 47, 247, 0.1);
            border: 1px solid rgba(123, 47, 247, 0.3);
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
        }

        .btn-group {
            display: flex;
            gap: 20px;
            margin-top: 20px;
        }

        .btn {
            padding: 12px 30px;
            border-radius: 30px;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            cursor: pointer;
            border: none;
            font-size: 1rem;
        }

        .btn-primary {
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            color: white;
            box-shadow: 0 5px 15px rgba(123, 47, 247, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(123, 47, 247, 0.4);
        }

        .btn-outline {
            background: transparent;
            color: var(--light);
            border: 2px solid var(--primary);
        }

        .btn-outline:hover {
            background: rgba(123, 47, 247, 0.1);
            transform: translateY(-3px);
        }

        /* Why Choose Section */
        .why-choose {
            padding: 100px 0;
        }

        .section-title {
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 50px;
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
        }

        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 60px;
        }

        .feature-card {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .feature-card:hover {
            transform: translateY(-10px);
            background: rgba(123, 47, 247, 0.1);
            border-color: rgba(123, 47, 247, 0.3);
        }

        .feature-icon {
            font-size: 2.5rem;
            margin-bottom: 20px;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .feature-card h3 {
            margin-bottom: 15px;
            font-size: 1.3rem;
        }

        .feature-card p {
            color: var(--text-light);
            line-height: 1.6;
        }

        /* Mission Section */
        .mission {
            padding: 100px 0;
            text-align: center;
            background: rgba(123, 47, 247, 0.05);
            border-radius: 20px;
            margin: 50px 0;
        }

        .mission h2 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .mission p {
            font-size: 1.2rem;
            color: var(--text-light);
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.6;
        }

        /* About Section */
        .about {
            padding: 100px 0;
        }

        .about-content {
            display: flex;
            gap: 50px;
            align-items: center;
            margin-top: 50px;
        }

        .about-text {
            flex: 1;
        }

        .about-text h3 {
            font-size: 1.8rem;
            margin-bottom: 20px;
            color: var(--primary);
        }

        .about-text p {
            color: var(--text-light);
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .about-image {
            flex: 1;
            position: relative;
        }

        .about-image img {
            width: 100%;
            border-radius: 15px;
        }

        .difference {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 60px;
        }

        .difference-card {
            display: flex;
            gap: 15px;
            align-items: flex-start;
        }

        .difference-icon {
            font-size: 1.5rem;
            padding: 15px;
            background: rgba(123, 47, 247, 0.1);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .difference-content h4 {
            margin-bottom: 10px;
        }

        .difference-content p {
            color: var(--text-light);
            line-height: 1.6;
        }

        .vision {
            text-align: center;
            margin-top: 80px;
            padding: 40px;
            background: rgba(16, 112, 255, 0.1);
            border-radius: 15px;
        }

        .vision h3 {
            font-size: 1.8rem;
            margin-bottom: 20px;
            color: var(--secondary);
        }

        .vision p {
            color: var(--text-light);
            line-height: 1.6;
            max-width: 800px;
            margin: 0 auto;
        }

        /* Services Section */
        .services {
            padding: 100px 0;
        }

        .service-categories {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 60px;
        }

        .service-category {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 15px;
            padding: 30px;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .service-category:hover {
            transform: translateY(-10px);
            background: rgba(16, 112, 255, 0.1);
            border-color: rgba(16, 112, 255, 0.3);
        }

        .service-category h3 {
            font-size: 1.5rem;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .service-list {
            list-style: none;
        }

        .service-list li {
            padding: 10px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            color: var(--text-light);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .service-list li:last-child {
            border-bottom: none;
        }

        .service-list li i {
            color: var(--primary);
        }

        .service-cta {
            text-align: center;
            margin-top: 60px;
            padding: 40px;
            background: rgba(255, 0, 245, 0.05);
            border-radius: 15px;
        }

        .service-cta h3 {
            font-size: 1.8rem;
            margin-bottom: 20px;
        }

        /* Contact Section */
        .contact {
            padding: 100px 0;
        }

        .contact-content {
            display: flex;
            gap: 50px;
            margin-top: 50px;
        }

        .contact-form {
            flex: 1;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 15px;
            padding: 30px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 12px 15px;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            color: var(--light);
            font-family: inherit;
            transition: all 0.3s ease;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--primary);
            background: rgba(123, 47, 247, 0.05);
        }

        .form-group textarea {
            min-height: 150px;
            resize: vertical;
        }

        .contact-info {
            flex: 1;
        }

        .contact-info h3 {
            font-size: 1.8rem;
            margin-bottom: 30px;
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            margin-bottom: 30px;
        }

        .contact-icon {
            font-size: 1.5rem;
            padding: 15px;
            background: rgba(123, 47, 247, 0.1);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .contact-details h4 {
            margin-bottom: 5px;
        }

        .contact-details p {
            color: var(--text-light);
        }

        .contact-reasons {
            margin-top: 50px;
        }

        .contact-reasons h3 {
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .reason-list {
            list-style: none;
        }

        .reason-list li {
            padding: 10px 0;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .reason-list li i {
            color: var(--secondary);
        }

        /* Footer */
        footer {
            padding: 80px 0 30px;
            background: rgba(5, 1, 21, 0.8);
            position: relative;
            overflow: hidden;
        }

        .footer-galaxy {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://picsum.photos/seed/galaxy/1920/400.jpg') no-repeat center center;
            background-size: cover;
            opacity: 0.2;
            z-index: -1;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 50px;
        }

        .footer-column h3 {
            font-size: 1.5rem;
            margin-bottom: 20px;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .footer-column p {
            color: var(--text-light);
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: var(--text-light);
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .footer-links a:hover {
            color: var(--primary);
            transform: translateX(5px);
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-links a {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(123, 47, 247, 0.1);
            border-radius: 50%;
            color: var(--text-light);
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background: var(--primary);
            color: white;
            transform: translateY(-5px);
        }

        .copyright {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: var(--text-light);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .nav-links {
                position: fixed;
                top: 70px;
                left: -100%;
                width: 100%;
                height: calc(100vh - 70px);
                background: rgba(15, 6, 32, 0.98);
                flex-direction: column;
                align-items: center;
                justify-content: flex-start;
                padding-top: 50px;
                transition: left 0.3s ease;
            }

            .nav-links.active {
                left: 0;
            }

            .menu-toggle {
                display: flex;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .about-content,
            .contact-content {
                flex-direction: column;
            }

            .btn-group {
                flex-direction: column;
            }

            .footer-content {
                grid-template-columns: 1fr;
            }
        }


        .site-header{
    width:100%;
    padding:15px 30px;
    background:#000;
    display:flex;
    align-items:center;
}

.logo-box{
    display:flex;
    align-items:center;
    gap:12px;
}

.logo-box img{
    width:55px;
    height:auto;
}

.logo-box img{
    transition: transform 0.4s ease;
}

.logo-box img:hover{
    transform: scale(1.1) rotate(2deg);
}


.brand-name{
    font-size:22px;
    font-weight:600;
    color:#fff;
    letter-spacing:1px;
}

/* Mobile friendly */
@media(max-width:600px){
    .logo-box img{
        width:45px;
    }
    .brand-name{
        font-size:18px;
    }
}



/* *{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, sans-serif;
}

body{
    background:#000;
} */

/* Loader Wrapper */
#loader{
    position:fixed;
    inset:0;
    background:#000;
    display:flex;
    justify-content:center;
    align-items:center;
    z-index:9999;
}

/* Logo Animation */
.loader-logo{
    width:120px;
    animation: spinGlow 2.5s linear infinite;
    filter: drop-shadow(0 0 15px #32e0ff);
}

/* Text */
.loader-text{
    position:absolute;
    bottom:20%;
    color:#aaa;
    font-size:14px;
    letter-spacing:2px;
}

/* Animations */
@keyframes spinGlow{
    0%{
        transform:rotate(0deg) scale(1);
        filter:drop-shadow(0 0 10px #32e0ff);
    }
    50%{
        transform:rotate(180deg) scale(1.1);
        filter:drop-shadow(0 0 25px #8b5cf6);
    }
    100%{
        transform:rotate(360deg) scale(1);
        filter:drop-shadow(0 0 10px #32e0ff);
    }
}

/* Mobile */
@media(max-width:600px){
    .loader-logo{
        width:90px;
    }
}


@media (max-width: 480px){

    .hero{
        padding: 80px 0;
        text-align: center;
    }

    .hero h1{
        font-size: 2rem;
        line-height: 1.3;
    }

    .hero p{
        font-size: 1rem;
    }

    .hero-services{
        justify-content: center;
    }

    .btn-group{
        gap: 15px;
    }

    .btn{
        width: 100%;
        text-align: center;
    }

    .section-title{
        font-size: 2rem;
    }

    .about,
    .services,
    .contact{
        padding: 70px 0;
    }
}



    </style>
</head>
<body>




<!-- Loader -->
<div id="loader">
    <img src="logo.png" class="loader-logo" alt="Loading">
    <div class="loader-text">LOADING</div>
</div>


    <!-- Animated Background -->
    <div class="galaxy-bg">
        <div class="stars" id="stars"></div>
    </div>

    <!-- Navigation -->
    <nav id="navbar">
        <div class="nav-container">
    <div class="logo-box">
        <img src="logo.png" alt="">
        <span class="brand-name">DesignCode</span>
    </div>

            <ul class="nav-links" id="navLinks">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="menu-toggle" id="menuToggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container">
            <div class="hero-content">
                <h1>Design the Future of Your Brand</h1>
                <p>We create modern websites and powerful visual identities that help businesses stand out in the digital universe. At DesignCode, creativity meets technology to deliver results that matter.</p>
                <div class="hero-services">
                    <div class="hero-service">Websites</div>
                    <div class="hero-service">UI/UX</div>
                    <div class="hero-service">Branding</div>
                    <div class="hero-service">Graphic Design</div>
                </div>
                <div class="btn-group">
                    <a href="#contact" class="btn btn-primary">Get a Free Quote</a>
                    <a href="#services" class="btn btn-outline">View Our Services</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Section -->
    <section class="why-choose">
        <div class="container">
            <h2 class="section-title">Why Choose DesignCode?</h2>
            <div class="features">
                <div class="feature-card">
                    <div class="feature-icon">🚀</div>
                    <h3>Futuristic & Modern UI/UX Design</h3>
                    <p>We create cutting-edge designs that are ahead of the curve and provide exceptional user experiences.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🎨</div>
                    <h3>Creative Graphic Design That Converts</h3>
                    <p>Our designs don't just look good – they drive action and help achieve your business goals.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">📱</div>
                    <h3>100% Responsive & Mobile-Friendly</h3>
                    <p>Your website will look and function perfectly on all devices, from desktop to mobile.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">⚡</div>
                    <h3>Fast, Secure & Scalable</h3>
                    <p>We build websites that are optimized for performance, security, and future growth.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">💼</div>
                    <h3>Professional Support & On-Time Delivery</h3>
                    <p>We pride ourselves on our professionalism, communication, and meeting deadlines.</p>
                </div>
            </div>
            <div class="mission">
                <h2>Our Mission</h2>
                <p>To help brands grow online by delivering clean design, smooth user experience, and high-quality development inspired by futuristic creativity.</p>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about" id="about">
        <div class="container">
            <h2 class="section-title">About DesignCode</h2>
            <div class="about-content">
                <div class="about-text">
                    <h3>Where Creativity Meets Technology</h3>
                    <p>DesignCode is a creative digital agency specializing in web design, UI/UX, and graphic design. We believe that great design is not just about looks — it's about experience, usability, and impact.</p>
                    <p>Our team works with passion, precision, and creativity to transform ideas into digital reality.</p>
                </div>
                <div class="about-image">
                    <img src="https://picsum.photos/seed/designcode/600/400.jpg" alt="DesignCode Team">
                </div>
            </div>
            
            <h3 style="text-align: center; margin-top: 60px; margin-bottom: 30px;">What Makes Us Different?</h3>
            <div class="difference">
                <div class="difference-card">
                    <div class="difference-icon">🌌</div>
                    <div class="difference-content">
                        <h4>Galaxy-Inspired Futuristic Designs</h4>
                        <p>We draw inspiration from the cosmos to create unique, forward-thinking designs that stand out.</p>
                    </div>
                </div>
                <div class="difference-card">
                    <div class="difference-icon">🎯</div>
                    <div class="difference-content">
                        <h4>User-Focused UI/UX Approach</h4>
                        <p>Every design decision is made with the end-user in mind to ensure optimal engagement.</p>
                    </div>
                </div>
                <div class="difference-card">
                    <div class="difference-icon">🧠</div>
                    <div class="difference-content">
                        <h4>Creative Thinking + Technical Expertise</h4>
                        <p>Our team combines artistic vision with technical skills to bring your ideas to life.</p>
                    </div>
                </div>
                <div class="difference-card">
                    <div class="difference-icon">🤝</div>
                    <div class="difference-content">
                        <h4>Client Satisfaction is Our Priority</h4>
                        <p>We work closely with our clients to understand their goals and deliver solutions that truly represent their brand.</p>
                    </div>
                </div>
            </div>
            
            <div class="vision">
                <h3>Our Vision</h3>
                <p>To become a leading creative studio known for innovation, quality, and next-generation digital design.</p>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services" id="services">
        <div class="container">
            <h2 class="section-title">Our Services</h2>
            <div class="service-categories">
                <div class="service-category">
                    <h3><span>🌐</span> Website Design & Development</h3>
                    <p>We design and develop modern, fast, and responsive websites tailored to your business needs.</p>
                    <ul class="service-list">
                        <li><i class="fas fa-check"></i> Business Websites</li>
                        <li><i class="fas fa-check"></i> Portfolio Websites</li>
                        <li><i class="fas fa-check"></i> Landing Pages</li>
                        <li><i class="fas fa-check"></i> Custom Web Applications</li>
                    </ul>
                </div>
                <div class="service-category">
                    <h3><span>🎨</span> Graphic Design</h3>
                    <p>Creative designs that speak your brand language.</p>
                    <ul class="service-list">
                        <li><i class="fas fa-check"></i> Logo Design</li>
                        <li><i class="fas fa-check"></i> Social Media Posts</li>
                        <li><i class="fas fa-check"></i> Banners & Posters</li>
                        <li><i class="fas fa-check"></i> Brand Identity</li>
                    </ul>
                </div>
                <div class="service-category">
                    <h3><span>🧠</span> UI/UX Design</h3>
                    <p>User-centered designs that enhance engagement and usability.</p>
                    <ul class="service-list">
                        <li><i class="fas fa-check"></i> Mobile App UI</li>
                        <li><i class="fas fa-check"></i> Website UI</li>
                        <li><i class="fas fa-check"></i> Wireframes & Prototypes</li>
                        <li><i class="fas fa-check"></i> UX Optimization</li>
                    </ul>
                </div>
                <div class="service-category">
                    <h3><span>🚀</span> Branding</h3>
                    <p>Build a strong and memorable brand presence.</p>
                    <ul class="service-list">
                        <li><i class="fas fa-check"></i> Brand Strategy</li>
                        <li><i class="fas fa-check"></i> Visual Identity</li>
                        <li><i class="fas fa-check"></i> Color & Typography</li>
                        <li><i class="fas fa-check"></i> Brand Guidelines</li>
                    </ul>
                </div>
            </div>
            
            <div class="service-cta">
                <h3>Your idea + Our design = Digital success</h3>
                <a href="#contact" class="btn btn-primary">Start Your Project Now</a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <div class="container">
            <h2 class="section-title">Let's Build Something Amazing 🚀</h2>
            <p style="text-align: center; max-width: 800px; margin: 0 auto 50px; color: var(--text-light); line-height: 1.6;">
                Have an idea? A project? Or need a professional website or design? We'd love to hear from you.
                Fill out the form below and our team will get back to you shortly.
            </p>
            
            <div class="contact-content">
                <div class="contact-form">
                    <form id="contactForm" method="post" action="form.php">
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" name="client_name" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                              <input type="email" name="client_email" placeholder="Your Email" required>
                        </div>
                         <div class="form-group">
                        <label for="phone">Phone Number</label>
                      
    <input type="text" name="client_phone" placeholder="Your Phone / WhatsApp" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                          
    <input type="text" name="service" placeholder="Service (Logo / Website etc)" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                           <textarea name="details" placeholder="Project Details" required></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary" style="width: 100%;">Send Message</button>
                    </form>
                </div>
                
                <div class="contact-info">
                    <h3>Contact Information</h3>
                    <div class="contact-item">
                        <div class="contact-icon">📍</div>
                        <div class="contact-details">
                            <h4>Location</h4>
                            <p>Remote / Worldwide</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">📧</div>
                        <div class="contact-details">
                            <h4>Email</h4>
                            <p>abidmozim84@gmail.com.com</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">📞</div>
                        <div class="contact-details">
                            <h4>Phone</h4>
                            <p>+92 331 2503886</p>
                        </div>
                    </div>
                    
                    <div class="contact-reasons">
                        <h3>Why Contact Us?</h3>
                        <ul class="reason-list">
                            <li><i class="fas fa-check-circle"></i> Free consultation</li>
                            <li><i class="fas fa-check-circle"></i> Quick response</li>
                            <li><i class="fas fa-check-circle"></i> Professional guidance</li>
                            <li><i class="fas fa-check-circle"></i> Custom solutions</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-galaxy"></div>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>DesignCode</h3>
                    <p>Creative Web & Graphic Design Studio</p>
                    <p>Designing futuristic digital experiences.</p>
                    <div class="social-links">
                        <a href="https://youtube.com/@graphicsdevofficial?si=hZGyGo2n4it78str" aria-label="Facebook"><i class="fab fa-youtube"></i></a>
                        <a href="https://www.instagram.com/graphicsdev_official3?utm_source=qr&igsh=MWkzc2d4b2Z5cmxuNw==" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.tiktok.com/@abtamo_123?_r=1&_t=ZS-92SpWawIqH3" aria-label="Twitter"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
                
                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Our Services</h3>
                    <ul class="footer-links">
                        <li><a href="#services">Web Design</a></li>
                        <li><a href="#services">Graphic Design</a></li>
                        <li><a href="#services">UI/UX Design</a></li>
                        <li><a href="#services">Branding</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Follow Us</h3>
                    <p>Stay connected with us on social media for updates, designs & inspiration.</p>
                </div>
            </div>
            
            <div class="copyright">
                <p>© 2026 DesignCode. All Rights Reserved.</p>
                <p>Designed with 💜 in the digital galaxy.</p>
            </div>
        </div>
    </footer>

    <script>
        // Generate random stars
        const starsContainer = document.getElementById('stars');
        const starsCount = 100;
        
        for (let i = 0; i < starsCount; i++) {
            const star = document.createElement('div');
            star.classList.add('star');
            
            // Random position
            star.style.left = `${Math.random() * 100}%`;
            star.style.top = `${Math.random() * 100}%`;
            
            // Random size
            const size = Math.random() * 3;
            star.style.width = `${size}px`;
            star.style.height = `${size}px`;
            
            // Random animation delay
            star.style.animationDelay = `${Math.random() * 4}s`;
            
            starsContainer.appendChild(star);
        }

        // Mobile menu toggle
        const menuToggle = document.getElementById('menuToggle');
        const navLinks = document.getElementById('navLinks');
        
        menuToggle.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });

        // Close mobile menu when clicking on a link
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                navLinks.classList.remove('active');
            });
        });

        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.style.padding = '10px 30px';
                navbar.style.background = 'rgba(15, 6, 32, 0.95)';
            } else {
                navbar.style.padding = '15px 30px';
                navbar.style.background = 'rgba(15, 6, 32, 0.8)';
            }
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });

        
      
      window.addEventListener("load", () => {
    setTimeout(() => {
        document.getElementById("loader").style.display = "none";
        document.getElementById("content").style.display = "block";
    }, 2500); // loader duration
});  ;




</script>

</body>
</html>