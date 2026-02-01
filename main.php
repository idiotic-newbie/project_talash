<?php
// Configuration
$platform_name = "Justice Connect";
$current_year = date('Y');

// Dynamic statistics (can be connected to database later)
$stats = [
    'missing_children' => 174000,
    'waiting_days' => 365,
    'cases_per_officer' => 500,
    'data_sources' => 'infinite'
];

// Impact stories
$stories = [
    [
        'icon' => '💔',
        'title' => 'The Waiting Parent',
        'description' => 'She marks each day on a calendar. 247 days since her daughter disappeared. Every phone call makes her heart race. The information that could help might be in a database from 2019—scattered, unorganized, unreachable.',
        'color' => 'from-red-400 to-red-600'
    ],
    [
        'icon' => '👮',
        'title' => 'The Overwhelmed Officer',
        'description' => 'He has 523 open cases. Each one represents a family waiting. He knows answers exist in leaked databases, but manually searching takes days. By the time he finds one lead, three more cases land on his desk.',
        'color' => 'from-blue-400 to-blue-600'
    ]
];

// Solution steps
$solutions = [
    [
        'number' => '01',
        'title' => 'Organize the Chaos',
        'description' => 'We collect publicly leaked data from verified breaches and structure it into a searchable database. Phone numbers, addresses, vehicle records—all indexed and ready.',
        'icon' => '🔍'
    ],
    [
        'number' => '02',
        'title' => 'Connect the Dots',
        'description' => 'One phone number links to an address. That address connects to a vehicle. That vehicle appears in another breach. Patterns emerge. Leads develop. Cases move forward.',
        'icon' => '🔗'
    ],
    [
        'number' => '03',
        'title' => 'Empower Action',
        'description' => 'We provide intelligence. You do the investigation. This isn\'t replacing police work—it\'s giving you a digital force multiplier so you can focus on what matters most.',
        'icon' => '⚡'
    ]
];

// Benefits
$benefits = [
    ['icon' => '⏱️', 'title' => 'Hours Not Days', 'desc' => 'Cut search time dramatically'],
    ['icon' => '🎯', 'title' => 'Better Leads', 'desc' => 'Stop chasing dead ends'],
    ['icon' => '👥', 'title' => 'More Impact', 'desc' => 'Same manpower, better results'],
    ['icon' => '💻', 'title' => 'Digital Support', 'desc' => 'Tools that enhance judgment']
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $platform_name; ?> - Every Second Counts</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.6;
            color: #1f2937;
            overflow-x: hidden;
            background: #ffffff;
        }

        /* Hero Section with Live Timer */
        .hero {
            min-height: 100vh;
            background: linear-gradient(135deg, #1e293b 0%, #334155 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
            color: white;
        }

        .hero::before {
            content: '';
            position: absolute;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(59, 130, 246, 0.1) 1px, transparent 1px);
            background-size: 50px 50px;
            animation: moveGrid 20s linear infinite;
        }

        @keyframes moveGrid {
            0% { transform: translate(0, 0); }
            100% { transform: translate(50px, 50px); }
        }

        .hero-content {
            position: relative;
            z-index: 10;
            text-align: center;
            padding: 40px;
            max-width: 900px;
        }

        .timer {
            font-size: 5rem;
            font-weight: 800;
            color: #ef4444;
            margin-bottom: 30px;
            font-family: 'Courier New', monospace;
            text-shadow: 0 0 30px rgba(239, 68, 68, 0.5);
            animation: pulse 2s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.8; }
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            animation: fadeInUp 1s ease-out;
        }

        .hero-subtitle {
            font-size: 1.5rem;
            opacity: 0.9;
            animation: fadeInUp 1s ease-out 0.3s both;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .scroll-indicator {
            position: absolute;
            bottom: 40px;
            left: 50%;
            transform: translateX(-50%);
            animation: bounce 2s infinite;
            font-size: 2rem;
            cursor: pointer;
        }

        @keyframes bounce {
            0%, 100% { transform: translateX(-50%) translateY(0); }
            50% { transform: translateX(-50%) translateY(-10px); }
        }

        /* Container */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        section {
            padding: 100px 20px;
        }

        .section-title {
            font-size: 3rem;
            text-align: center;
            margin-bottom: 20px;
            font-weight: 800;
            color: #111827;
        }

        .section-subtitle {
            text-align: center;
            font-size: 1.3rem;
            color: #6b7280;
            max-width: 800px;
            margin: 0 auto 60px;
        }

        /* Statistics Section */
        .stats-section {
            background: linear-gradient(to bottom, #f8fafc, #e2e8f0);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .stat-card {
            background: white;
            padding: 40px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            cursor: pointer;
        }

        .stat-card:hover {
            transform: translateY(-15px) scale(1.05);
            box-shadow: 0 20px 60px rgba(59, 130, 246, 0.3);
        }

        .stat-number {
            font-size: 4rem;
            font-weight: 800;
            color: #3b82f6;
            margin-bottom: 10px;
        }

        .stat-label {
            font-size: 1.1rem;
            color: #6b7280;
        }

        /* Gap Visualization */
        .gap-section {
            background: white;
        }

        .gap-container {
            max-width: 1000px;
            margin: 60px auto;
            display: grid;
            grid-template-columns: 1fr 100px 1fr;
            gap: 30px;
            align-items: center;
        }

        .gap-box {
            padding: 40px;
            border-radius: 20px;
            text-align: center;
            transition: all 0.4s ease;
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }

        .gap-box::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            transition: left 0.5s;
        }

        .gap-box:hover::before {
            left: 100%;
        }

        .criminals-box {
            background: linear-gradient(135deg, #ef4444, #dc2626);
            color: white;
        }

        .police-box {
            background: linear-gradient(135deg, #3b82f6, #2563eb);
            color: white;
        }

        .gap-box:hover {
            transform: scale(1.05) rotate(2deg);
            box-shadow: 0 20px 50px rgba(0,0,0,0.3);
        }

        .gap-box h3 {
            font-size: 1.8rem;
            margin-bottom: 20px;
        }

        .gap-box ul {
            list-style: none;
        }

        .gap-box li {
            margin: 15px 0;
            padding: 12px;
            background: rgba(255,255,255,0.2);
            border-radius: 10px;
            font-size: 1.1rem;
        }

        .gap-icon {
            font-size: 5rem;
            color: #dc2626;
            animation: shake 2s ease-in-out infinite;
        }

        @keyframes shake {
            0%, 100% { transform: rotate(0deg); }
            25% { transform: rotate(-5deg); }
            75% { transform: rotate(5deg); }
        }

        /* Stories Section */
        .stories-section {
            background: linear-gradient(to bottom, #f1f5f9, #e2e8f0);
        }

        .stories-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 40px;
            margin-top: 60px;
        }

        .story-card {
            background: white;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 15px 50px rgba(0,0,0,0.15);
            transition: all 0.5s ease;
            opacity: 0;
            transform: translateY(50px);
        }

        .story-card.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .story-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 25px 70px rgba(0,0,0,0.2);
        }

        .story-header {
            height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 5rem;
        }

        .story-content {
            padding: 40px;
        }

        .story-content h3 {
            font-size: 1.8rem;
            margin-bottom: 15px;
            color: #111827;
        }

        .story-content p {
            font-size: 1.1rem;
            color: #4b5563;
            line-height: 1.8;
        }

        /* Solution Steps */
        .solution-section {
            background: white;
        }

        .solution-step {
            display: grid;
            grid-template-columns: 150px 1fr;
            gap: 40px;
            margin-bottom: 60px;
            opacity: 0;
            transform: translateX(-50px);
            transition: all 0.6s ease;
        }

        .solution-step.visible {
            opacity: 1;
            transform: translateX(0);
        }

        .step-number {
            width: 150px;
            height: 150px;
            background: linear-gradient(135deg, #3b82f6, #2563eb);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            font-weight: 800;
            color: white;
            box-shadow: 0 15px 40px rgba(59, 130, 246, 0.4);
            position: relative;
        }

        .step-number::after {
            content: attr(data-icon);
            position: absolute;
            top: -10px;
            right: -10px;
            font-size: 2.5rem;
        }

        .step-details h3 {
            font-size: 2rem;
            color: #111827;
            margin-bottom: 15px;
        }

        .step-details p {
            font-size: 1.2rem;
            color: #4b5563;
            line-height: 1.8;
        }

        /* Benefits Grid */
        .benefits-section {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
        }

        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 60px;
        }

        .benefit-card {
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(10px);
            padding: 40px;
            border-radius: 20px;
            text-align: center;
            border: 2px solid rgba(255,255,255,0.2);
            transition: all 0.3s ease;
        }

        .benefit-card:hover {
            background: rgba(255,255,255,0.2);
            transform: translateY(-10px);
            border-color: white;
        }

        .benefit-icon {
            font-size: 4rem;
            margin-bottom: 20px;
        }

        .benefit-card h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .benefit-card p {
            opacity: 0.9;
            font-size: 1.1rem;
        }

        /* Pricing Section */
        .pricing-section {
            background: white;
        }

        .pricing-card {
            max-width: 700px;
            margin: 60px auto;
            background: linear-gradient(135deg, #f8fafc, #f1f5f9);
            padding: 60px;
            border-radius: 30px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.15);
            text-align: center;
            border: 3px solid #3b82f6;
        }

        .price {
            font-size: 5rem;
            font-weight: 800;
            color: #3b82f6;
            margin: 30px 0;
        }

        .price-benefits {
            text-align: left;
            margin-top: 40px;
        }

        .price-benefits li {
            padding: 20px;
            margin: 15px 0;
            background: white;
            border-radius: 15px;
            list-style: none;
            border-left: 5px solid #3b82f6;
            font-size: 1.1rem;
            transition: all 0.3s ease;
        }

        .price-benefits li:hover {
            transform: translateX(10px);
            box-shadow: 0 5px 20px rgba(59, 130, 246, 0.3);
        }

        /* CTA Section */
        .cta-section {
            background: linear-gradient(to right, #111827, #1f2937);
            color: white;
            text-align: center;
            padding: 120px 20px;
        }

        .cta-button {
            display: inline-block;
            background: #3b82f6;
            color: white;
            padding: 25px 60px;
            border-radius: 50px;
            font-size: 1.5rem;
            font-weight: 700;
            text-decoration: none;
            margin-top: 40px;
            transition: all 0.4s ease;
            box-shadow: 0 10px 40px rgba(59, 130, 246, 0.5);
            position: relative;
            overflow: hidden;
        }

        .cta-button::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255,255,255,0.3);
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }

        .cta-button:hover::before {
            width: 300px;
            height: 300px;
        }

        .cta-button:hover {
            background: #2563eb;
            transform: translateY(-5px);
            box-shadow: 0 15px 50px rgba(59, 130, 246, 0.7);
        }

        /* Footer */
        footer {
            background: #111827;
            color: #9ca3af;
            padding: 60px 20px;
            text-align: center;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .timer { font-size: 3rem; }
            .hero h1 { font-size: 2rem; }
            .section-title { font-size: 2rem; }
            .gap-container { grid-template-columns: 1fr; }
            .gap-icon { display: none; }
            .stories-grid { grid-template-columns: 1fr; }
            .solution-step { grid-template-columns: 1fr; text-align: center; }
            .step-number { margin: 0 auto 20px; }
        }

        /* Progress Bar */
        .progress-bar {
            position: fixed;
            top: 0;
            left: 0;
            height: 4px;
            background: linear-gradient(to right, #3b82f6, #8b5cf6);
            z-index: 9999;
            transition: width 0.1s ease;
        }
    </style>
</head>
<body>
    <!-- Progress Bar -->
    <div class="progress-bar" id="progressBar"></div>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <div class="timer" id="liveTimer">00:00:00</div>
            <h1>Every Second a Child Waits</h1>
            <p class="hero-subtitle">A parent hopes. An officer searches. Information exists—scattered and unusable.</p>
            <p class="hero-subtitle" style="margin-top: 30px; font-size: 1.8rem;"><strong>We connect the dots.</strong></p>
        </div>
        <div class="scroll-indicator" onclick="scrollToSection('gap')">↓</div>
    </section>

    <!-- Statistics Section -->
    <section class="stats-section" id="stats">
        <div class="container">
            <h2 class="section-title">The Reality We Face</h2>
            <p class="section-subtitle">These aren't just numbers. They're lives waiting for answers.</p>
            
            <div class="stats-grid">
                <?php foreach($stats as $key => $value): ?>
                <div class="stat-card">
                    <div class="stat-number" data-target="<?php echo is_numeric($value) ? $value : 0; ?>">
                        <?php echo $value === 'infinite' ? '∞' : '0'; ?>
                    </div>
                    <div class="stat-label">
                        <?php 
                            $labels = [
                                'missing_children' => 'Children go missing every year in India',
                                'waiting_days' => 'Days families wait without answers',
                                'cases_per_officer' => 'Cases per officer with limited tools',
                                'data_sources' => 'Scattered data points that could help'
                            ];
                            echo $labels[$key];
                        ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- The Gap Section -->
    <section class="gap-section" id="gap">
        <div class="container">
            <h2 class="section-title">The Dangerous Gap</h2>
            <p class="section-subtitle">Leaked data exists everywhere. But who's using it?</p>
            
            <div class="gap-container">
                <div class="gap-box criminals-box">
                    <h3>❌ Who Uses Leaked Data</h3>
                    <ul>
                        <li>Scammers</li>
                        <li>Fraudsters</li>
                        <li>Criminals</li>
                        <li>Traffickers</li>
                    </ul>
                </div>
                
                <div class="gap-icon">⚠️</div>
                
                <div class="gap-box police-box">
                    <h3>✓ Who Should Use It</h3>
                    <ul>
                        <li>Police Officers</li>
                        <li>Investigators</li>
                        <li>Child Protection</li>
                        <li>Anti-Trafficking Units</li>
                    </ul>
                </div>
            </div>
            
            <p style="text-align: center; font-size: 1.6rem; margin-top: 40px; color: #dc2626; font-weight: 700;">
                This gap costs lives. We're here to close it.
            </p>
        </div>
    </section>

    <!-- Stories Section -->
    <section class="stories-section" id="stories">
        <div class="container">
            <h2 class="section-title">Behind Every Case: Real People</h2>
            <p class="section-subtitle">These aren't just files. They're lives paused.</p>
            
            <div class="stories-grid">
                <?php foreach($stories as $story): ?>
                <div class="story-card">
                    <div class="story-header" style="background: linear-gradient(135deg, <?php echo str_replace(['from-', 'to-'], ['#', '#'], $story['color']); ?>);">
                        <?php echo $story['icon']; ?>
                    </div>
                    <div class="story-content">
                        <h3><?php echo $story['title']; ?></h3>
                        <p><?php echo $story['description']; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Solution Section -->
    <section class="solution-section" id="solution">
        <div class="container">
            <h2 class="section-title">How We Help</h2>
            <p class="section-subtitle">We don't sell data. We don't exploit anyone. We connect dots for those who protect us.</p>
            
            <div style="max-width: 1000px; margin: 60px auto;">
                <?php foreach($solutions as $solution): ?>
                <div class="solution-step">
                    <div class="step-number" data-icon="<?php echo $solution['icon']; ?>">
                        <?php echo $solution['number']; ?>
                    </div>
                    <div class="step-details">
                        <h3><?php echo $solution['title']; ?></h3>
                        <p><?php echo $solution['description']; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="benefits-section" id="benefits">
        <div class="container">
            <h2 class="section-title" style="color: white;">What This Means for Police Stations</h2>
            
            <div class="benefits-grid">
                <?php foreach($benefits as $benefit): ?>
                <div class="benefit-card">
                    <div class="benefit-icon"><?php echo $benefit['icon']; ?></div>
                    <h3><?php echo $benefit['title']; ?></h3>
                    <p><?php echo $benefit['desc']; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
            
            <p style="font-size: 2rem; margin-top: 60px; text-align: center; font-weight: 600;">
                If this platform helps solve even ONE case,<br>it justifies its existence.
            </p>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="pricing-section" id="pricing">
        <div class="container">
            <h2 class="section-title">A Sustainable Model</h2>
            <p class="section-subtitle">Not for profit. For continuity. For impact.</p>
            
            <div class="pricing-card">
                <h3 style="font-size: 1.8rem; color: #4b5563;">Each Police Station Contributes</h3>
                <div class="price">₹500-1000</div>
                <p style="font-size: 1.3rem; color: #6b7280;">per month</p>
                
                <ul class="price-benefits">
                    <li><strong>Together, we cover operational costs</strong> — servers, maintenance, updates</li>
                    <li><strong>No single department carries the burden</strong> — shared responsibility</li>
                    <li><strong>No profit motive</strong> — every rupee goes toward the platform</li>
                    <li><strong>Independent and focused</strong> — serving law enforcement, not shareholders</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <h2 style="font-size: 3.5rem; margin-bottom: 30px; font-weight: 800;">Technology Should Protect the Vulnerable</h2>
            <p style="font-size: 1.5rem; opacity: 0.9; max-width: 900px; margin: 0 auto;">
                No officer should feel helpless due to lack of tools.<br>
                No parent should wait years for information that already exists.<br>
                No child should remain missing when data could bring them home.
            </p>
            <a href="#contact" class="cta-button">Let's Connect the Dots Together</a>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p style="font-size: 1.2rem; margin-bottom: 15px; color: #d1d5db;"><?php echo $platform_name; ?></p>
            <p>Connecting scattered data to save lives</p>
            <p style="margin-top: 30px; opacity: 0.5;">Independent. Non-profit. Dedicated to protecting the vulnerable.</p>
            <p style="margin-top: 20px; opacity: 0.4;">&copy; <?php echo $current_year; ?> Independent Cybersecurity Research Group</p>
        </div>
    </footer>

    <script>
        // Live Timer
        let seconds = 0;
        function updateTimer() {
            seconds++;
            const hrs = Math.floor(seconds / 3600);
            const mins = Math.floor((seconds % 3600) / 60);
            const secs = seconds % 60;
            document.getElementById('liveTimer').textContent = 
                String(hrs).padStart(2, '0') + ':' + 
                String(mins).padStart(2, '0') + ':' + 
                String(secs).padStart(2, '0');
        }
        setInterval(updateTimer, 1000);

        // Progress Bar
        window.addEventListener('scroll', function() {
            const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = (winScroll / height) * 100;
            document.getElementById('progressBar').style.width = scrolled + '%';
        });

        // Animated Counter
        function animateCounter(element) {
            const target = parseInt(element.getAttribute('data-target'));
            if (!target) return;
            
            const duration = 2000;
            const step = target / (duration / 16);
            let current = 0;
            
            const timer = setInterval(() => {
                current += step;
                if (current >= target) {
                    element.textContent = target.toLocaleString('en-IN');
                    clearInterval(timer);
                } else {
                    element.textContent = Math.floor(current).toLocaleString('en-IN');
                }
            }, 16);
        }

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.2,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    if (entry.target.classList.contains('stat-number') && entry.target.hasAttribute('data-target')) {
                        animateCounter(entry.target);
                        observer.unobserve(entry.target);
                    } else if (entry.target.classList.contains('story-card') || 
                               entry.target.classList.contains('solution-step')) {
                        entry.target.classList.add('visible');
                    }
                }
            });
        }, observerOptions);

        // Observe elements
        document.querySelectorAll('.stat-number[data-target]').forEach(stat => observer.observe(stat));
        document.querySelectorAll('.story-card').forEach(card => observer.observe(card));
        document.querySelectorAll('.solution-step').forEach(step => observer.observe(step));

        // Smooth scroll
        function scrollToSection(id) {
            document.getElementById(id).scrollIntoView({ behavior: 'smooth' });
        }

        // Add ripple effect to cards
        document.querySelectorAll('.stat-card, .benefit-card').forEach(card => {
            card.addEventListener('click', function(e) {
                const ripple = document.createElement('div');
                ripple.style.position = 'absolute';
                ripple.style.borderRadius = '50%';
                ripple.style.background = 'rgba(255,255,255,0.6)';
                ripple.style.width = ripple.style.height = '100px';
                ripple.style.left = e.clientX - this.offsetLeft - 50 + 'px';
                ripple.style.top = e.clientY - this.offsetTop - 50 + 'px';
                ripple.style.animation = 'ripple 0.6s ease-out';
                this.appendChild(ripple);
                setTimeout(() => ripple.remove(), 600);
            });
        });

        // Add CSS for ripple animation
        const style = document.createElement('style');
        style.textContent = `
            @keyframes ripple {
                from { transform: scale(0); opacity: 1; }
                to { transform: scale(4); opacity: 0; }
            }
        `;
        document.head.appendChild(style);
    </script>
</body>
</html>
