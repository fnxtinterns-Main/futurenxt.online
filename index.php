<?php
$page_title = "FutureNxt | Your Success Partner in the Phygital World";
$current_page = "home";
include 'includes/header.php';
?>

<!-- ====================================================================
     SECTION 1: HERO SECTION
     Atmospheric Luxury: Rich Off-Black backdrop with Champagne Gold Accents
======================================================================== -->
<section class="relative bg-rich-black overflow-hidden py-12 sm:py-20 lg:py-28 border-b border-champagne/30">
    <!-- Subtle Architectural Background Grid (No AI slop / no cloudy textures) -->
    <div class="absolute inset-0 opacity-[0.03] pointer-events-none" style="background-image: linear-gradient(#C6A45C 1px, transparent 1px), linear-gradient(to right, #C6A45C 1px, transparent 1px); background-size: 60px 60px;"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-8 items-center">
            
            <!-- Left Editorial Text Block -->
            <div class="lg:col-span-7 space-y-5 sm:space-y-6 text-left">
                <div class="inline-flex items-center gap-2 px-3 py-1 sm:px-3.5 sm:py-1.5 border border-champagne/40 bg-rich-black-100 rounded-sm">
                    <span class="w-1.5 h-1.5 bg-champagne rounded-full"></span>
                    <span class="text-[11px] sm:text-xs uppercase tracking-[0.2em] font-semibold text-champagne">Agents of Change Initiative</span>
                </div>

                <h1 class="font-heading font-extrabold text-2xl sm:text-4xl lg:text-5xl tracking-tight text-ivory leading-[1.2] sm:leading-[1.15]">
                    Your Success Partner <br class="hidden sm:inline">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-champagne via-champagne-400 to-champagne-300">
                        in the Phygital World
                    </span>
                </h1>

                <p class="text-ivory/80 text-sm sm:text-lg leading-relaxed max-w-xl font-normal">
                    Unleashing the transformative power of the Phygital Economy for financial inclusion and sustainable grassroots livelihoods. Aligning technology with humanity to achieve the United Nations Sustainable Development Goals (UNSDG) 2030.
                </p>

                <!-- Hallmark Call-to-Actions (Sharp buttons, Champagne Gold link) -->
                <div class="pt-2 sm:pt-4 flex flex-col sm:flex-row items-stretch sm:items-center gap-3.5 sm:gap-6">
                    <!-- Step 3: Remove the blue DISCOVER MORE link -> Make this link Champagne Gold with a clean, sans-serif font -->
                    <a href="about" class="inline-flex items-center justify-center sm:justify-start text-xs sm:text-sm font-semibold tracking-wider text-champagne hover:text-champagne-300 transition-colors uppercase gap-2 py-2 group">
                        <span>Discover More</span>
                        <i class="fa-solid fa-arrow-right-long text-champagne transform group-hover:translate-x-1.5 transition-transform duration-200"></i>
                    </a>

                    <span class="text-white/20 hidden sm:inline">|</span>

                    <!-- Sharp Corners Button: Off-Black with Gold Border & Text -->
                    <a href="ventures" class="w-full sm:w-auto px-6 py-3.5 text-xs font-semibold uppercase tracking-widest bg-rich-black border border-champagne text-champagne hover:bg-champagne hover:text-rich-black transition-all duration-200 rounded-sm shadow-gold-sm text-center">
                        Explore 6 Ventures
                    </a>

                    <!-- Sharp Corners Button: Gold with Off-Black Text -->
                    <a href="affiliates" class="w-full sm:w-auto px-6 py-3.5 text-xs font-semibold uppercase tracking-widest bg-champagne border border-champagne text-rich-black hover:bg-transparent hover:text-champagne transition-all duration-200 rounded-sm shadow-gold-sm text-center">
                        Join Network
                    </a>
                </div>

                <!-- Strategic Validation Pills -->
                <div class="pt-6 sm:pt-8 border-t border-champagne/15 grid grid-cols-3 gap-2 sm:gap-4 text-center sm:text-left">
                    <div>
                        <div class="text-[10px] sm:text-xs uppercase tracking-wider text-champagne/70 font-medium">Framework</div>
                        <div class="text-xs sm:text-sm font-semibold text-ivory">UNSDG 2030</div>
                    </div>
                    <div>
                        <div class="text-[10px] sm:text-xs uppercase tracking-wider text-champagne/70 font-medium">Model</div>
                        <div class="text-xs sm:text-sm font-semibold text-ivory">Physical + Digital</div>
                    </div>
                    <div>
                        <div class="text-[10px] sm:text-xs uppercase tracking-wider text-champagne/70 font-medium">Impact</div>
                        <div class="text-xs sm:text-sm font-semibold text-ivory">Pan-India Reach</div>
                    </div>
                </div>
            </div>

            <!-- Right Visual Component (Full Hero Banner - No Cropping, No Overlay Box) -->
            <div class="lg:col-span-5 relative mt-4 lg:mt-0">
                <div class="relative mx-auto max-w-md p-2 border border-champagne/30 bg-rich-black-100 rounded-sm shadow-gold-md">
                    <!-- Golden Corner Accent Marks (Hallmark craftsmanship) -->
                    <div class="absolute -top-1.5 -left-1.5 w-3 h-3 border-t-2 border-l-2 border-champagne"></div>
                    <div class="absolute -top-1.5 -right-1.5 w-3 h-3 border-t-2 border-r-2 border-champagne"></div>
                    <div class="absolute -bottom-1.5 -left-1.5 w-3 h-3 border-b-2 border-l-2 border-champagne"></div>
                    <div class="absolute -bottom-1.5 -right-1.5 w-3 h-3 border-b-2 border-r-2 border-champagne"></div>

                    <!-- Slide Container: Full Banner Visible Without Overlay Box or Cutout -->
                    <div class="overflow-hidden rounded-sm relative bg-rich-black flex items-center justify-center p-1">
                        <img id="hero-slider-img" src="assets/images/1725980791imgpsh_fullsize_anim (1).jpg" alt="FutureNxt Phygital Ecosystem" class="w-full h-auto max-h-[540px] object-contain transition-opacity duration-700 rounded-sm">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ====================================================================
     SECTION 2: THE TOP BANNER (THE STATISTICS SECTION)
     Requirement: Make background Rich Off-Black. Change neon boxes to Champagne Gold.
     Text inside them Off-Black (or Ivory). High-end financial or impact metrics.
======================================================================== -->
<section class="bg-rich-black py-16 px-4 sm:px-6 lg:px-8 border-b border-champagne/20 relative">
    <div class="max-w-7xl mx-auto">
        <div class="text-center max-w-2xl mx-auto mb-12">
            <span class="text-xs uppercase tracking-[0.25em] font-semibold text-champagne block mb-2">Verified Performance & Reach</span>
            <h2 class="font-heading font-bold text-2xl sm:text-3xl text-ivory">High-End Impact Metrics</h2>
            <div class="w-12 h-0.5 bg-champagne mx-auto mt-3"></div>
        </div>

        <!-- 4 High-End Financial / Impact Metric Cards in Champagne Gold -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <!-- Metric 1 -->
            <div class="bg-champagne p-7 rounded-sm shadow-gold-sm hover:shadow-gold-md transition-all duration-300 transform hover:-translate-y-1 group">
                <div class="flex items-baseline justify-between mb-2">
                    <span class="font-heading text-3xl lg:text-4xl font-extrabold text-rich-black tracking-tight">10M+</span>
                    <i class="fa-solid fa-users-viewfinder text-rich-black/70 text-lg group-hover:scale-110 transition-transform"></i>
                </div>
                <h3 class="font-heading text-sm font-bold uppercase tracking-wider text-rich-black mb-1.5">Community Reach</h3>
                <p class="text-xs text-rich-black/85 leading-relaxed">
                    Targeted grassroots population connected via decentralized digital platforms across Tier 2, Tier 3, and rural clusters.
                </p>
            </div>

            <!-- Metric 2 -->
            <div class="bg-champagne p-7 rounded-sm shadow-gold-sm hover:shadow-gold-md transition-all duration-300 transform hover:-translate-y-1 group">
                <div class="flex items-baseline justify-between mb-2">
                    <span class="font-heading text-3xl lg:text-4xl font-extrabold text-rich-black tracking-tight">06</span>
                    <i class="fa-solid fa-shapes text-rich-black/70 text-lg group-hover:scale-110 transition-transform"></i>
                </div>
                <h3 class="font-heading text-sm font-bold uppercase tracking-wider text-rich-black mb-1.5">Core Ventures</h3>
                <p class="text-xs text-rich-black/85 leading-relaxed">
                    Dedicated phygital verticals covering Education, Healthcare, Finance, E-Commerce, Real Estate, and Climate Action.
                </p>
            </div>

            <!-- Metric 3 -->
            <div class="bg-champagne p-7 rounded-sm shadow-gold-sm hover:shadow-gold-md transition-all duration-300 transform hover:-translate-y-1 group">
                <div class="flex items-baseline justify-between mb-2">
                    <span class="font-heading text-3xl lg:text-4xl font-extrabold text-rich-black tracking-tight">17 Goals</span>
                    <i class="fa-solid fa-globe text-rich-black/70 text-lg group-hover:scale-110 transition-transform"></i>
                </div>
                <h3 class="font-heading text-sm font-bold uppercase tracking-wider text-rich-black mb-1.5">UNSDG Alignment</h3>
                <p class="text-xs text-rich-black/85 leading-relaxed">
                    Full structural alignment with United Nations 2030 Sustainable Development Goals for real-term societal empowerment.
                </p>
            </div>

            <!-- Metric 4 -->
            <div class="bg-champagne p-7 rounded-sm shadow-gold-sm hover:shadow-gold-md transition-all duration-300 transform hover:-translate-y-1 group">
                <div class="flex items-baseline justify-between mb-2">
                    <span class="font-heading text-3xl lg:text-4xl font-extrabold text-rich-black tracking-tight">100%</span>
                    <i class="fa-solid fa-hand-holding-dollar text-rich-black/70 text-lg group-hover:scale-110 transition-transform"></i>
                </div>
                <h3 class="font-heading text-sm font-bold uppercase tracking-wider text-rich-black mb-1.5">Grassroots Inclusion</h3>
                <p class="text-xs text-rich-black/85 leading-relaxed">
                    Committed to financial autonomy, direct referral models, skill development, and sustainable livelihood generation.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- ====================================================================
     SECTION 3: THE MAIN BACKGROUND (WARM IVORY #F9F6F0)
     Requirement:
     - Remove clouds entirely. Clean solid Warm Ivory space.
     - Headings ("FutureNxt", "Mission", "Vision", "Action") -> Rich Off-Black.
     - Champagne Gold underlines/accents.
     - Body Text -> Dark Charcoal (#2C2C2C), clean, generous line spacing.
======================================================================== -->
<section id="about" class="bg-ivory py-24 px-4 sm:px-6 lg:px-8 border-b border-champagne/20">
    <div class="max-w-7xl mx-auto">
        
        <!-- Section Header: FutureNxt Overview -->
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
            <span class="text-xs uppercase tracking-[0.25em] font-semibold text-champagne">The Foundation</span>
            
            <!-- Requirement 3: Headings in Rich Off-Black -->
            <h2 class="font-heading font-extrabold text-3xl sm:text-4xl text-rich-black tracking-tight">
                FutureNxt
            </h2>
            
            <!-- Requirement 3: Champagne Gold underline -->
            <div class="w-16 h-0.5 bg-champagne mx-auto"></div>

            <!-- Requirement 4: Body text Dark Charcoal with generous line spacing -->
            <p class="text-charcoal text-base sm:text-lg leading-relaxed font-normal pt-2">
                Change is the only constant. The old order changeth yielding place to the new world order. FutureNxt endeavours to achieve the United Nations Sustainable Development Goals (UNSDG) – 2030. An engaging mission to transform society through real-term empowerment. FutureNxt Ventures are designed to involve all stakeholders through a multi-pronged action-oriented program, connecting people with Vision, Mission, and Action to create an expansive global network of change agents. Success in the fast-emerging phygital world is now firmly in the realms of the possible within a specified timeline.
            </p>
        </div>

        <!-- The 3 Pillars: Mission, Vision, Action (Sharp Luxury Cards on Warm Ivory) -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 pt-4">
            
            <!-- Pillar 1: Mission -->
            <div class="bg-white/80 border border-champagne/30 p-8 rounded-sm shadow-premium hover:border-champagne transition-all duration-300 hover:-translate-y-1">
                <div class="w-12 h-12 bg-rich-black text-champagne flex items-center justify-center rounded-sm mb-6 text-xl">
                    <i class="fa-solid fa-bullseye"></i>
                </div>
                <!-- Heading in Rich Off-Black -->
                <h3 class="font-heading font-bold text-xl text-rich-black tracking-tight mb-2">
                    Mission
                </h3>
                <div class="w-10 h-0.5 bg-champagne mb-4"></div>
                <!-- Body in Dark Charcoal -->
                <p class="text-charcoal text-sm leading-relaxed">
                    Connecting millions of people into a digital community that actively participates and empowers development at the grassroots level, turning collective ambition into tangible local prosperity.
                </p>
            </div>

            <!-- Pillar 2: Vision -->
            <div class="bg-white/80 border border-champagne/30 p-8 rounded-sm shadow-premium hover:border-champagne transition-all duration-300 hover:-translate-y-1">
                <div class="w-12 h-12 bg-rich-black text-champagne flex items-center justify-center rounded-sm mb-6 text-xl">
                    <i class="fa-solid fa-eye"></i>
                </div>
                <!-- Heading in Rich Off-Black -->
                <h3 class="font-heading font-bold text-xl text-rich-black tracking-tight mb-2">
                    Vision
                </h3>
                <div class="w-10 h-0.5 bg-champagne mb-4"></div>
                <!-- Body in Dark Charcoal -->
                <p class="text-charcoal text-sm leading-relaxed">
                    To empower every single household with quality education, robust healthcare, financial inclusion, and wealth creation pathways that withstand technological disruption.
                </p>
            </div>

            <!-- Pillar 3: Action -->
            <div class="bg-white/80 border border-champagne/30 p-8 rounded-sm shadow-premium hover:border-champagne transition-all duration-300 hover:-translate-y-1">
                <div class="w-12 h-12 bg-rich-black text-champagne flex items-center justify-center rounded-sm mb-6 text-xl">
                    <i class="fa-solid fa-bolt-lightning"></i>
                </div>
                <!-- Heading in Rich Off-Black -->
                <h3 class="font-heading font-bold text-xl text-rich-black tracking-tight mb-2">
                    Action
                </h3>
                <div class="w-10 h-0.5 bg-champagne mb-4"></div>
                <!-- Body in Dark Charcoal -->
                <p class="text-charcoal text-sm leading-relaxed">
                    Leveraging the power of digital mobile technology, blockchain, artificial intelligence, and data science to facilitate sustainable livelihoods and economic resilience for all.
                </p>
            </div>

        </div>

    </div>
</section>

<!-- ====================================================================
     SECTION 4: STRATEGIC VENTURES (THE 6 PHYGITAL PILLARS)
     Clean, Solid Warm Ivory & Off-Black Architecture
======================================================================== -->
<section id="ventures" class="bg-ivory py-24 px-4 sm:px-6 lg:px-8 border-b border-champagne/20">
    <div class="max-w-7xl mx-auto">
        
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6">
            <div>
                <span class="text-xs uppercase tracking-[0.25em] font-semibold text-champagne block mb-2">Integrated Verticals</span>
                <h2 class="font-heading font-extrabold text-3xl sm:text-4xl text-rich-black tracking-tight">
                    Our 6 Phygital Ventures
                </h2>
                <div class="w-16 h-0.5 bg-champagne mt-3"></div>
            </div>
            <p class="text-charcoal text-sm sm:text-base max-w-lg leading-relaxed">
                Strategic initiatives built to fuse physical grassroots execution with digital borderless scale.
            </p>
        </div>

        <!-- 6 Ventures Grid with Sharp Corners and Champagne Accents -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Venture 1: Education -->
            <div class="bg-white border border-champagne/30 p-8 rounded-sm shadow-premium hover:border-champagne transition-all duration-300 hover:-translate-y-1 flex flex-col justify-between group">
                <div>
                    <div class="flex items-center justify-between mb-6">
                        <div class="w-12 h-12 bg-rich-black border border-champagne/40 text-champagne flex items-center justify-center rounded-sm">
                            <i class="fa-solid fa-graduation-cap text-xl"></i>
                        </div>
                        <span class="text-xs font-mono text-champagne font-semibold tracking-wider">01 / PILLAR</span>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-rich-black mb-2.5 group-hover:text-champagne-600 transition-colors">
                        Education & Skill Development
                    </h3>
                    <div class="w-8 h-0.5 bg-champagne mb-4"></div>
                    <p class="text-charcoal text-sm leading-relaxed">
                        Education empowers minds, fosters knowledge, ignites curiosity, and shapes tomorrow. Lifelong learning fuels personal growth and societal progress through decentralized mobile learning.
                    </p>
                </div>
                <div class="pt-6 mt-6 border-t border-charcoal/10 flex items-center justify-between">
                    <span class="text-xs font-medium text-charcoal-muted">Focus: Youth & Mass Literacy</span>
                    <a href="ventures#education" class="text-xs font-semibold uppercase tracking-wider text-champagne hover:text-rich-black transition-colors flex items-center gap-1">
                        Details <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </a>
                </div>
            </div>

            <!-- Venture 2: Healthcare -->
            <div class="bg-white border border-champagne/30 p-8 rounded-sm shadow-premium hover:border-champagne transition-all duration-300 hover:-translate-y-1 flex flex-col justify-between group">
                <div>
                    <div class="flex items-center justify-between mb-6">
                        <div class="w-12 h-12 bg-rich-black border border-champagne/40 text-champagne flex items-center justify-center rounded-sm">
                            <i class="fa-solid fa-heart-pulse text-xl"></i>
                        </div>
                        <span class="text-xs font-mono text-champagne font-semibold tracking-wider">02 / PILLAR</span>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-rich-black mb-2.5 group-hover:text-champagne-600 transition-colors">
                        Health Care Access
                    </h3>
                    <div class="w-8 h-0.5 bg-champagne mb-4"></div>
                    <p class="text-charcoal text-sm leading-relaxed">
                        Healthcare promotes well-being, prevents and treats ailments, ensuring a resilient society. Accessible, quality tele-health and diagnostic support as a fundamental human right.
                    </p>
                </div>
                <div class="pt-6 mt-6 border-t border-charcoal/10 flex items-center justify-between">
                    <span class="text-xs font-medium text-charcoal-muted">Focus: Tele-Care & Diagnostics</span>
                    <a href="ventures#healthcare" class="text-xs font-semibold uppercase tracking-wider text-champagne hover:text-rich-black transition-colors flex items-center gap-1">
                        Details <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </a>
                </div>
            </div>

            <!-- Venture 3: Finance -->
            <div class="bg-white border border-champagne/30 p-8 rounded-sm shadow-premium hover:border-champagne transition-all duration-300 hover:-translate-y-1 flex flex-col justify-between group">
                <div>
                    <div class="flex items-center justify-between mb-6">
                        <div class="w-12 h-12 bg-rich-black border border-champagne/40 text-champagne flex items-center justify-center rounded-sm">
                            <i class="fa-solid fa-coins text-xl"></i>
                        </div>
                        <span class="text-xs font-mono text-champagne font-semibold tracking-wider">03 / PILLAR</span>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-rich-black mb-2.5 group-hover:text-champagne-600 transition-colors">
                        Financial Inclusion & Wealth
                    </h3>
                    <div class="w-8 h-0.5 bg-champagne mb-4"></div>
                    <p class="text-charcoal text-sm leading-relaxed">
                        Harnessing both fiat and digital asset markets for maximizing security and wealth generation. Financial literacy and decentralized access empowering households to build sustainable assets.
                    </p>
                </div>
                <div class="pt-6 mt-6 border-t border-charcoal/10 flex items-center justify-between">
                    <span class="text-xs font-medium text-charcoal-muted">Focus: Decentralized Inclusion</span>
                    <a href="ventures#finance" class="text-xs font-semibold uppercase tracking-wider text-champagne hover:text-rich-black transition-colors flex items-center gap-1">
                        Details <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </a>
                </div>
            </div>

            <!-- Venture 4: E-Commerce -->
            <div class="bg-white border border-champagne/30 p-8 rounded-sm shadow-premium hover:border-champagne transition-all duration-300 hover:-translate-y-1 flex flex-col justify-between group">
                <div>
                    <div class="flex items-center justify-between mb-6">
                        <div class="w-12 h-12 bg-rich-black border border-champagne/40 text-champagne flex items-center justify-center rounded-sm">
                            <i class="fa-solid fa-cart-shopping text-xl"></i>
                        </div>
                        <span class="text-xs font-mono text-champagne font-semibold tracking-wider">04 / PILLAR</span>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-rich-black mb-2.5 group-hover:text-champagne-600 transition-colors">
                        Community E-Commerce
                    </h3>
                    <div class="w-8 h-0.5 bg-champagne mb-4"></div>
                    <p class="text-charcoal text-sm leading-relaxed">
                        Empowering individuals through a distinctive community-based market system facilitated by digital platforms, allowing local micro-enterprises to distribute goods nationally.
                    </p>
                </div>
                <div class="pt-6 mt-6 border-t border-charcoal/10 flex items-center justify-between">
                    <span class="text-xs font-medium text-charcoal-muted">Focus: Grassroots Markets</span>
                    <a href="ventures#ecommerce" class="text-xs font-semibold uppercase tracking-wider text-champagne hover:text-rich-black transition-colors flex items-center gap-1">
                        Details <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </a>
                </div>
            </div>

            <!-- Venture 5: Real Estate -->
            <div class="bg-white border border-champagne/30 p-8 rounded-sm shadow-premium hover:border-champagne transition-all duration-300 hover:-translate-y-1 flex flex-col justify-between group">
                <div>
                    <div class="flex items-center justify-between mb-6">
                        <div class="w-12 h-12 bg-rich-black border border-champagne/40 text-champagne flex items-center justify-center rounded-sm">
                            <i class="fa-solid fa-city text-xl"></i>
                        </div>
                        <span class="text-xs font-mono text-champagne font-semibold tracking-wider">05 / PILLAR</span>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-rich-black mb-2.5 group-hover:text-champagne-600 transition-colors">
                        Physical Real-Estate & Infrastructure
                    </h3>
                    <div class="w-8 h-0.5 bg-champagne mb-4"></div>
                    <p class="text-charcoal text-sm leading-relaxed">
                        Real estate shapes physical communities, investment portfolios, and lifestyles. Bridging physical property assets with fractionalized phygital investment vehicles.
                    </p>
                </div>
                <div class="pt-6 mt-6 border-t border-charcoal/10 flex items-center justify-between">
                    <span class="text-xs font-medium text-charcoal-muted">Focus: Asset-Backed Security</span>
                    <a href="ventures#realestate" class="text-xs font-semibold uppercase tracking-wider text-champagne hover:text-rich-black transition-colors flex items-center gap-1">
                        Details <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </a>
                </div>
            </div>

            <!-- Venture 6: Climate Change -->
            <div class="bg-white border border-champagne/30 p-8 rounded-sm shadow-premium hover:border-champagne transition-all duration-300 hover:-translate-y-1 flex flex-col justify-between group">
                <div>
                    <div class="flex items-center justify-between mb-6">
                        <div class="w-12 h-12 bg-rich-black border border-champagne/40 text-champagne flex items-center justify-center rounded-sm">
                            <i class="fa-solid fa-seedling text-xl"></i>
                        </div>
                        <span class="text-xs font-mono text-champagne font-semibold tracking-wider">06 / PILLAR</span>
                    </div>
                    <h3 class="font-heading font-bold text-xl text-rich-black mb-2.5 group-hover:text-champagne-600 transition-colors">
                        Climate Action & Sustainability
                    </h3>
                    <div class="w-8 h-0.5 bg-champagne mb-4"></div>
                    <p class="text-charcoal text-sm leading-relaxed">
                        Mitigation and adaptation initiatives including innovative water conservation (Aqualine Bhungru) and clean green livelihoods ensuring a resilient ecosystem for future generations.
                    </p>
                </div>
                <div class="pt-6 mt-6 border-t border-charcoal/10 flex items-center justify-between">
                    <span class="text-xs font-medium text-charcoal-muted">Focus: Bhungru & Ecology</span>
                    <a href="ventures#climate" class="text-xs font-semibold uppercase tracking-wider text-champagne hover:text-rich-black transition-colors flex items-center gap-1">
                        Details <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ====================================================================
     SECTION 5: THE STRATEGIC ROADMAP (2023 - 2030)
     Rich Off-Black and Champagne Gold Architecture
======================================================================== -->
<section id="roadmap" class="bg-rich-black py-24 px-4 sm:px-6 lg:px-8 border-b border-champagne/20 text-ivory">
    <div class="max-w-7xl mx-auto">
        
        <div class="text-center max-w-2xl mx-auto mb-16 space-y-3">
            <span class="text-xs uppercase tracking-[0.25em] font-semibold text-champagne block">Strategic Trajectory</span>
            <h2 class="font-heading font-extrabold text-3xl sm:text-4xl text-ivory tracking-tight">
                Roadmap to 2030
            </h2>
            <div class="w-16 h-0.5 bg-champagne mx-auto"></div>
            <p class="text-ivory/70 text-sm sm:text-base leading-relaxed">
                The structured chronological blueprint driving FutureNxt across India.
            </p>
        </div>

        <!-- Horizontal Timeline Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <!-- 2023 -->
            <div class="bg-rich-black-100 border border-champagne/30 p-6 rounded-sm relative group hover:border-champagne transition-all duration-300">
                <div class="text-xs uppercase tracking-widest text-champagne font-semibold mb-1">Genesis</div>
                <div class="font-heading text-3xl font-extrabold text-champagne mb-3">2023</div>
                <div class="w-8 h-0.5 bg-champagne mb-3"></div>
                <p class="text-ivory/75 text-xs leading-relaxed">
                    Looking for enterprising core team members to leverage lifetime phygital opportunities across Indian states.
                </p>
            </div>

            <!-- 2024 -->
            <div class="bg-rich-black-100 border border-champagne/30 p-6 rounded-sm relative group hover:border-champagne transition-all duration-300">
                <div class="text-xs uppercase tracking-widest text-champagne font-semibold mb-1">Foundational Connect</div>
                <div class="font-heading text-3xl font-extrabold text-champagne mb-3">2024</div>
                <div class="w-8 h-0.5 bg-champagne mb-3"></div>
                <p class="text-ivory/75 text-xs leading-relaxed">
                    It all begins with a connect. Building dynamic regional coalitions partnering enterprising go-getters across the nation.
                </p>
            </div>

            <!-- 2025 -->
            <div class="bg-rich-black-100 border border-champagne/30 p-6 rounded-sm relative group hover:border-champagne transition-all duration-300">
                <div class="text-xs uppercase tracking-widest text-champagne font-semibold mb-1">Consolidation</div>
                <div class="font-heading text-3xl font-extrabold text-champagne mb-3">2025</div>
                <div class="w-8 h-0.5 bg-champagne mb-3"></div>
                <p class="text-ivory/75 text-xs leading-relaxed">
                    Realigning thoughts and actions with unified collective team goals, onboarding verified institutional partners.
                </p>
            </div>

            <!-- 2026 (Active Milestone) -->
            <div class="bg-rich-black-100 border-2 border-champagne p-6 rounded-sm relative group shadow-gold-sm">
                <div class="flex items-center justify-between mb-1">
                    <span class="text-xs uppercase tracking-widest text-champagne font-semibold">Active Milestone</span>
                    <span class="inline-block w-2 h-2 bg-champagne rounded-full animate-ping"></span>
                </div>
                <div class="font-heading text-3xl font-extrabold text-ivory mb-3">2026</div>
                <div class="w-8 h-0.5 bg-champagne mb-3"></div>
                <p class="text-ivory/90 text-xs leading-relaxed font-normal">
                    Reorienting present and future livelihoods with fast-growing decentralized digital and physical enterprise systems.
                </p>
            </div>

            <!-- 2027 -->
            <div class="bg-rich-black-100 border border-champagne/30 p-6 rounded-sm relative group hover:border-champagne transition-all duration-300">
                <div class="text-xs uppercase tracking-widest text-champagne font-semibold mb-1">Smart Expansion</div>
                <div class="font-heading text-3xl font-extrabold text-champagne mb-3">2027</div>
                <div class="w-8 h-0.5 bg-champagne mb-3"></div>
                <p class="text-ivory/75 text-xs leading-relaxed">
                    SMART Next Generation. Leveraging digital platforms to solidify an empowered digital community in the Phygital world.
                </p>
            </div>

            <!-- 2028 -->
            <div class="bg-rich-black-100 border border-champagne/30 p-6 rounded-sm relative group hover:border-champagne transition-all duration-300">
                <div class="text-xs uppercase tracking-widest text-champagne font-semibold mb-1">Scale</div>
                <div class="font-heading text-3xl font-extrabold text-champagne mb-3">2028</div>
                <div class="w-8 h-0.5 bg-champagne mb-3"></div>
                <p class="text-ivory/75 text-xs leading-relaxed">
                    Decisions taken at the right time unlocking massive exponential growth opportunities and capital accessibility.
                </p>
            </div>

            <!-- 2029 -->
            <div class="bg-rich-black-100 border border-champagne/30 p-6 rounded-sm relative group hover:border-champagne transition-all duration-300">
                <div class="text-xs uppercase tracking-widest text-champagne font-semibold mb-1">Realization</div>
                <div class="font-heading text-3xl font-extrabold text-champagne mb-3">2029</div>
                <div class="w-8 h-0.5 bg-champagne mb-3"></div>
                <p class="text-ivory/75 text-xs leading-relaxed">
                    Handsome rewards and collective achievements fulfilling grassroots dreams and micro-entrepreneur ambitions.
                </p>
            </div>

            <!-- 2030 (Summit) -->
            <div class="bg-champagne p-6 rounded-sm relative group shadow-gold-md">
                <div class="text-xs uppercase tracking-widest text-rich-black font-extrabold mb-1">UNSDG Target</div>
                <div class="font-heading text-3xl font-extrabold text-rich-black mb-3">2030</div>
                <div class="w-8 h-0.5 bg-rich-black mb-3"></div>
                <p class="text-rich-black/90 text-xs leading-relaxed font-medium">
                    Full realization of the UN Sustainable Development Goals. Bringing out the star in every individual across India.
                </p>
            </div>

        </div>

    </div>
</section>

<!-- ====================================================================
     SECTION 6: PARTNER INITIATIVES
     Official Partners with Direct URLs & Verified Logos
======================================================================== -->
<section class="bg-ivory py-24 px-4 sm:px-6 lg:px-8 border-b border-champagne/20">
    <div class="max-w-7xl mx-auto">
        
        <div class="text-center max-w-2xl mx-auto mb-16 space-y-3">
            <span class="text-xs uppercase tracking-[0.25em] font-semibold text-champagne block">Strategic Ecosystem</span>
            <h2 class="font-heading font-extrabold text-3xl sm:text-4xl text-rich-black tracking-tight">
                Partner Initiatives
            </h2>
            <div class="w-16 h-0.5 bg-champagne mx-auto"></div>
            <p class="text-charcoal text-sm sm:text-base leading-relaxed">
                Collaborating with accredited ecosystem partners to deliver scalable value across education, health, AI technology, legal advisory, and grassroots skilling.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            
            <!-- Partner 1: NEET Academy -->
            <a href="https://neetacademy.net/" target="_blank" rel="noopener noreferrer" class="bg-white border border-champagne/30 p-6 rounded-sm shadow-premium hover:border-champagne hover:shadow-gold-sm transition-all duration-300 hover:-translate-y-1 flex flex-col justify-between group">
                <div class="flex flex-col items-center text-center">
                    <div class="h-24 w-full flex items-center justify-center mb-4 bg-white rounded-sm p-2 border border-champagne/20 group-hover:border-champagne/50 transition-colors">
                        <img src="assets/images/partner-neetacademy.jpg" alt="NEET Academy" class="max-h-20 max-w-full object-contain">
                    </div>
                    <h4 class="font-heading font-bold text-base text-rich-black group-hover:text-champagne-600 transition-colors">NEET Academy</h4>
                    <span class="text-xs text-charcoal-muted mt-0.5">Medical Entrance Coaching &amp; Excellence</span>
                </div>
                <div class="mt-4 pt-3 border-t border-charcoal/10 flex items-center justify-between text-xs">
                    <span class="text-charcoal-muted font-mono text-[11px]">neetacademy.net</span>
                    <span class="text-champagne font-semibold flex items-center gap-1 group-hover:translate-x-0.5 transition-transform">
                        Visit <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                    </span>
                </div>
            </a>

            <!-- Partner 2: Infinity Learning -->
            <a href="https://infintylearning.net/" target="_blank" rel="noopener noreferrer" class="bg-white border border-champagne/30 p-6 rounded-sm shadow-premium hover:border-champagne hover:shadow-gold-sm transition-all duration-300 hover:-translate-y-1 flex flex-col justify-between group">
                <div class="flex flex-col items-center text-center">
                    <div class="h-24 w-full flex items-center justify-center mb-4 bg-white rounded-sm p-2 border border-champagne/20 group-hover:border-champagne/50 transition-colors">
                        <img src="assets/images/partner-infinity.png" alt="Infinity Learning" class="max-h-20 max-w-full object-contain">
                    </div>
                    <h4 class="font-heading font-bold text-base text-rich-black group-hover:text-champagne-600 transition-colors">Infinity Learning</h4>
                    <span class="text-xs text-charcoal-muted mt-0.5">School Management &amp; Achievement Tracking</span>
                </div>
                <div class="mt-4 pt-3 border-t border-charcoal/10 flex items-center justify-between text-xs">
                    <span class="text-charcoal-muted font-mono text-[11px]">infintylearning.net</span>
                    <span class="text-champagne font-semibold flex items-center gap-1 group-hover:translate-x-0.5 transition-transform">
                        Visit <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                    </span>
                </div>
            </a>

            <!-- Partner 3: Fit India 4U -->
            <a href="https://fitindia4u.com/" target="_blank" rel="noopener noreferrer" class="bg-white border border-champagne/30 p-6 rounded-sm shadow-premium hover:border-champagne hover:shadow-gold-sm transition-all duration-300 hover:-translate-y-1 flex flex-col justify-between group">
                <div class="flex flex-col items-center text-center">
                    <div class="h-24 w-full flex items-center justify-center mb-4 bg-white rounded-sm p-2 border border-champagne/20 group-hover:border-champagne/50 transition-colors">
                        <img src="assets/images/partner-fitindia.jpg" alt="Fit India 4U" class="max-h-20 max-w-full object-contain">
                    </div>
                    <h4 class="font-heading font-bold text-base text-rich-black group-hover:text-champagne-600 transition-colors">Fit India 4U</h4>
                    <span class="text-xs text-charcoal-muted mt-0.5">Preventive Healthcare &amp; Genomic Wellness</span>
                </div>
                <div class="mt-4 pt-3 border-t border-charcoal/10 flex items-center justify-between text-xs">
                    <span class="text-charcoal-muted font-mono text-[11px]">fitindia4u.com</span>
                    <span class="text-champagne font-semibold flex items-center gap-1 group-hover:translate-x-0.5 transition-transform">
                        Visit <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                    </span>
                </div>
            </a>

            <!-- Partner 4: TechNxt AI -->
            <a href="https://technxtai.com/" target="_blank" rel="noopener noreferrer" class="bg-white border border-champagne/30 p-6 rounded-sm shadow-premium hover:border-champagne hover:shadow-gold-sm transition-all duration-300 hover:-translate-y-1 flex flex-col justify-between group">
                <div class="flex flex-col items-center text-center">
                    <div class="h-24 w-full flex items-center justify-center mb-4 bg-rich-black rounded-sm p-1.5 border border-champagne/30 group-hover:border-champagne transition-colors overflow-hidden">
                        <img src="assets/images/partner-technxt.jpg" alt="TechNxt AI" class="max-h-20 max-w-full object-contain rounded-sm">
                    </div>
                    <h4 class="font-heading font-bold text-base text-rich-black group-hover:text-champagne-600 transition-colors">TechNxt AI</h4>
                    <span class="text-xs text-charcoal-muted mt-0.5">Enterprise AI &amp; Cloud Workflows</span>
                </div>
                <div class="mt-4 pt-3 border-t border-charcoal/10 flex items-center justify-between text-xs">
                    <span class="text-charcoal-muted font-mono text-[11px]">technxtai.com</span>
                    <span class="text-champagne font-semibold flex items-center gap-1 group-hover:translate-x-0.5 transition-transform">
                        Visit <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                    </span>
                </div>
            </a>

            <!-- Partner 5: CareNxt AI -->
            <a href="https://carenxtai.com/" target="_blank" rel="noopener noreferrer" class="bg-white border border-champagne/30 p-6 rounded-sm shadow-premium hover:border-champagne hover:shadow-gold-sm transition-all duration-300 hover:-translate-y-1 flex flex-col justify-between group">
                <div class="flex flex-col items-center text-center">
                    <div class="h-24 w-full flex items-center justify-center mb-4 bg-white rounded-sm p-2 border border-champagne/20 group-hover:border-champagne/50 transition-colors">
                        <img src="assets/images/partner-carenxt.jpg" alt="CareNxt AI" class="max-h-20 max-w-full object-contain">
                    </div>
                    <h4 class="font-heading font-bold text-base text-rich-black group-hover:text-champagne-600 transition-colors">CareNxt AI</h4>
                    <span class="text-xs text-charcoal-muted mt-0.5">Emergency Telemetry &amp; Digital Health</span>
                </div>
                <div class="mt-4 pt-3 border-t border-charcoal/10 flex items-center justify-between text-xs">
                    <span class="text-charcoal-muted font-mono text-[11px]">carenxtai.com</span>
                    <span class="text-champagne font-semibold flex items-center gap-1 group-hover:translate-x-0.5 transition-transform">
                        Visit <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                    </span>
                </div>
            </a>

            <!-- Partner 6: QuizWiz -->
            <a href="https://www.quizwiz.co.in/" target="_blank" rel="noopener noreferrer" class="bg-white border border-champagne/30 p-6 rounded-sm shadow-premium hover:border-champagne hover:shadow-gold-sm transition-all duration-300 hover:-translate-y-1 flex flex-col justify-between group">
                <div class="flex flex-col items-center text-center">
                    <div class="h-24 w-full flex items-center justify-center mb-4 bg-white rounded-sm p-2 border border-champagne/20 group-hover:border-champagne/50 transition-colors">
                        <img src="assets/images/partner-quizwiz.jpg" alt="QuizWiz" class="max-h-20 max-w-full object-contain">
                    </div>
                    <h4 class="font-heading font-bold text-base text-rich-black group-hover:text-champagne-600 transition-colors">QuizWiz</h4>
                    <span class="text-xs text-charcoal-muted mt-0.5">Knowledge Acceleration &amp; IQ Quizzing</span>
                </div>
                <div class="mt-4 pt-3 border-t border-charcoal/10 flex items-center justify-between text-xs">
                    <span class="text-charcoal-muted font-mono text-[11px]">quizwiz.co.in</span>
                    <span class="text-champagne font-semibold flex items-center gap-1 group-hover:translate-x-0.5 transition-transform">
                        Visit <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                    </span>
                </div>
            </a>

            <!-- Partner 7: Angrezi English -->
            <a href="https://angrezienglish.com/" target="_blank" rel="noopener noreferrer" class="bg-white border border-champagne/30 p-6 rounded-sm shadow-premium hover:border-champagne hover:shadow-gold-sm transition-all duration-300 hover:-translate-y-1 flex flex-col justify-between group">
                <div class="flex flex-col items-center text-center">
                    <div class="h-24 w-full flex items-center justify-center mb-4 bg-white rounded-sm p-2 border border-champagne/20 group-hover:border-champagne/50 transition-colors">
                        <img src="assets/images/partner-angrezi.jpg" alt="Angrezi English" class="max-h-20 max-w-full object-contain">
                    </div>
                    <h4 class="font-heading font-bold text-base text-rich-black group-hover:text-champagne-600 transition-colors">Angrezi English</h4>
                    <span class="text-xs text-charcoal-muted mt-0.5">Spoken English Fluency &amp; Communication</span>
                </div>
                <div class="mt-4 pt-3 border-t border-charcoal/10 flex items-center justify-between text-xs">
                    <span class="text-charcoal-muted font-mono text-[11px]">angrezienglish.com</span>
                    <span class="text-champagne font-semibold flex items-center gap-1 group-hover:translate-x-0.5 transition-transform">
                        Visit <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                    </span>
                </div>
            </a>

            <!-- Partner 8: Prithviwasi -->
            <a href="https://prithviwasi.org/" target="_blank" rel="noopener noreferrer" class="bg-white border border-champagne/30 p-6 rounded-sm shadow-premium hover:border-champagne hover:shadow-gold-sm transition-all duration-300 hover:-translate-y-1 flex flex-col justify-between group">
                <div class="flex flex-col items-center text-center">
                    <div class="h-24 w-full flex items-center justify-center mb-4 bg-white rounded-sm p-2 border border-champagne/20 group-hover:border-champagne/50 transition-colors">
                        <img src="assets/images/partner-prithviwasi.jpg" alt="Prithviwasi" class="max-h-20 max-w-full object-contain">
                    </div>
                    <h4 class="font-heading font-bold text-base text-rich-black group-hover:text-champagne-600 transition-colors">Prithviwasi</h4>
                    <span class="text-xs text-charcoal-muted mt-0.5">Seva &amp; Sudhar Social Organization</span>
                </div>
                <div class="mt-4 pt-3 border-t border-charcoal/10 flex items-center justify-between text-xs">
                    <span class="text-charcoal-muted font-mono text-[11px]">prithviwasi.org</span>
                    <span class="text-champagne font-semibold flex items-center gap-1 group-hover:translate-x-0.5 transition-transform">
                        Visit <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                    </span>
                </div>
            </a>

            <!-- Partner 9: Qanooni Salah -->
            <a href="https://qanoonisalah.in/" target="_blank" rel="noopener noreferrer" class="bg-white border border-champagne/30 p-6 rounded-sm shadow-premium hover:border-champagne hover:shadow-gold-sm transition-all duration-300 hover:-translate-y-1 flex flex-col justify-between group">
                <div class="flex flex-col items-center text-center">
                    <div class="h-24 w-full flex items-center justify-center mb-4 bg-white rounded-sm p-2 border border-champagne/20 group-hover:border-champagne/50 transition-colors">
                        <img src="assets/images/partner-qanoonisalah.jpg" alt="Qanooni Salah" class="max-h-20 max-w-full object-contain">
                    </div>
                    <h4 class="font-heading font-bold text-base text-rich-black group-hover:text-champagne-600 transition-colors">Qanooni Salah</h4>
                    <span class="text-xs text-charcoal-muted mt-0.5">Citizen Legal Literacy &amp; Advisory</span>
                </div>
                <div class="mt-4 pt-3 border-t border-charcoal/10 flex items-center justify-between text-xs">
                    <span class="text-charcoal-muted font-mono text-[11px]">qanoonisalah.in</span>
                    <span class="text-champagne font-semibold flex items-center gap-1 group-hover:translate-x-0.5 transition-transform">
                        Visit <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                    </span>
                </div>
            </a>

            <!-- Partner 10: Skitre AI -->
            <a href="https://skitre.ai/" target="_blank" rel="noopener noreferrer" class="bg-white border border-champagne/30 p-6 rounded-sm shadow-premium hover:border-champagne hover:shadow-gold-sm transition-all duration-300 hover:-translate-y-1 flex flex-col justify-between group">
                <div class="flex flex-col items-center text-center">
                    <div class="h-24 w-full flex items-center justify-center mb-4 bg-white rounded-sm p-2 border border-champagne/20 group-hover:border-champagne/50 transition-colors">
                        <img src="assets/images/partner-skitre.jpg" alt="Skitre AI" class="max-h-20 max-w-full object-contain">
                    </div>
                    <h4 class="font-heading font-bold text-base text-rich-black group-hover:text-champagne-600 transition-colors">Skitre AI</h4>
                    <span class="text-xs text-charcoal-muted mt-0.5">AI-Powered Soft Skills &amp; Intelligence</span>
                </div>
                <div class="mt-4 pt-3 border-t border-charcoal/10 flex items-center justify-between text-xs">
                    <span class="text-charcoal-muted font-mono text-[11px]">skitre.ai</span>
                    <span class="text-champagne font-semibold flex items-center gap-1 group-hover:translate-x-0.5 transition-transform">
                        Visit <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                    </span>
                </div>
            </a>

            <!-- Partner 11: mPowerin -->
            <a href="https://mpowerin.com/" target="_blank" rel="noopener noreferrer" class="bg-white border border-champagne/30 p-6 rounded-sm shadow-premium hover:border-champagne hover:shadow-gold-sm transition-all duration-300 hover:-translate-y-1 flex flex-col justify-between group">
                <div class="flex flex-col items-center text-center">
                    <div class="h-24 w-full flex items-center justify-center mb-4 bg-white rounded-sm p-2 border border-champagne/20 group-hover:border-champagne/50 transition-colors">
                        <img src="assets/images/partner-mpowerin.jpg" alt="mPowerin" class="max-h-20 max-w-full object-contain">
                    </div>
                    <h4 class="font-heading font-bold text-base text-rich-black group-hover:text-champagne-600 transition-colors">mPowerin</h4>
                    <span class="text-xs text-charcoal-muted mt-0.5">Youth &amp; Women Grassroots Empowerment</span>
                </div>
                <div class="mt-4 pt-3 border-t border-charcoal/10 flex items-center justify-between text-xs">
                    <span class="text-charcoal-muted font-mono text-[11px]">mpowerin.com</span>
                    <span class="text-champagne font-semibold flex items-center gap-1 group-hover:translate-x-0.5 transition-transform">
                        Visit <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                    </span>
                </div>
            </a>

            <!-- Partner 12: WizKidz (Information Partner Card - No Link) -->
            <div class="bg-white border border-champagne/30 p-6 rounded-sm shadow-premium flex flex-col justify-between group">
                <div class="flex flex-col items-center text-center">
                    <div class="h-24 w-full flex items-center justify-center mb-4 bg-white rounded-sm p-2 border border-champagne/20 group-hover:border-champagne/50 transition-colors">
                        <img src="assets/images/partner-wizkidz.jpg" alt="WizKidz" class="max-h-20 max-w-full object-contain">
                    </div>
                    <h4 class="font-heading font-bold text-base text-rich-black">WizKidz</h4>
                    <span class="text-xs text-charcoal-muted mt-0.5">Early Childhood Learning &amp; Creativity</span>
                </div>
                <div class="mt-4 pt-3 border-t border-charcoal/10 flex items-center justify-between text-xs">
                    <span class="text-charcoal-muted text-[11px] font-medium">Foundation Network</span>
                    <span class="text-champagne font-semibold text-[11px]">Partner Initiative</span>
                </div>
            </div>

            <!-- Partner 13: Aqualine Bhungru (Ecological Initiative - No Link) -->
            <div class="bg-white border border-champagne/30 p-6 rounded-sm shadow-premium flex flex-col justify-between group">
                <div class="flex flex-col items-center text-center">
                    <div class="h-24 w-full flex items-center justify-center mb-4 bg-white rounded-sm p-2 border border-champagne/20 group-hover:border-champagne/50 transition-colors">
                        <img src="assets/images/partner-bhungru.jpg" alt="Aqualine Bhungru" class="max-h-20 max-w-full object-contain">
                    </div>
                    <h4 class="font-heading font-bold text-base text-rich-black">Aqualine Bhungru</h4>
                    <span class="text-xs text-charcoal-muted mt-0.5">Water Harvesting &amp; Climate Resilience</span>
                </div>
                <div class="mt-4 pt-3 border-t border-charcoal/10 flex items-center justify-between text-xs">
                    <span class="text-charcoal-muted text-[11px] font-medium">Sustainability Action</span>
                    <span class="text-champagne font-semibold text-[11px]">Partner Initiative</span>
                </div>
            </div>

        </div>

    </div>
</section>

    </div>
</section>

<!-- ====================================================================
     SECTION 7: TESTIMONIALS (EDITORIAL LUXURY QUOTES)
======================================================================== -->
<section class="bg-ivory py-24 px-4 sm:px-6 lg:px-8 border-b border-champagne/20">
    <div class="max-w-7xl mx-auto">
        
        <div class="text-center max-w-2xl mx-auto mb-16 space-y-3">
            <span class="text-xs uppercase tracking-[0.25em] font-semibold text-champagne block">Voice of Leaders</span>
            <h2 class="font-heading font-extrabold text-3xl sm:text-4xl text-rich-black tracking-tight">
                Partner Testimonials
            </h2>
            <div class="w-16 h-0.5 bg-champagne mx-auto"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <!-- Testimonial 1 -->
            <div class="bg-white border border-champagne/30 p-8 rounded-sm shadow-premium relative flex flex-col justify-between">
                <div>
                    <i class="fa-solid fa-quote-left text-champagne text-2xl mb-4 block"></i>
                    <p class="text-charcoal text-sm leading-relaxed italic mb-6">
                        "FutureNxt has been an absolute game-changer for our business. Their innovative solutions and dedicated team helped us achieve remarkable growth. The personalized approach and top-notch service set them apart. We highly recommend FutureNxt for any company looking to scale up effectively."
                    </p>
                </div>
                <div class="pt-4 border-t border-charcoal/10 flex items-center space-x-3">
                    <img src="assets/images/prof.jpg" alt="Satya Kumar" class="w-10 h-10 rounded-full border border-champagne/50 object-cover">
                    <div>
                        <div class="font-heading font-bold text-sm text-rich-black">Satya Kumar</div>
                        <div class="text-xs text-charcoal-muted">Strategic Partner</div>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="bg-white border-2 border-champagne p-8 rounded-sm shadow-gold-sm relative flex flex-col justify-between">
                <div>
                    <i class="fa-solid fa-quote-left text-champagne text-2xl mb-4 block"></i>
                    <p class="text-charcoal text-sm leading-relaxed italic mb-6">
                        "FutureNxt exceeded our expectations with their cutting-edge solutions. Their team is professional, responsive, and truly understands our business needs. They provided us with excellent support, helping us streamline operations and boost productivity. A fantastic partner for long-term success."
                    </p>
                </div>
                <div class="pt-4 border-t border-charcoal/10 flex items-center space-x-3">
                    <img src="assets/images/prof.jpg" alt="Ashok Singh" class="w-10 h-10 rounded-full border border-champagne/50 object-cover">
                    <div>
                        <div class="font-heading font-bold text-sm text-rich-black">Ashok Singh</div>
                        <div class="text-xs text-charcoal-muted">Enterprise Leader</div>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="bg-white border border-champagne/30 p-8 rounded-sm shadow-premium relative flex flex-col justify-between">
                <div>
                    <i class="fa-solid fa-quote-left text-champagne text-2xl mb-4 block"></i>
                    <p class="text-charcoal text-sm leading-relaxed italic mb-6">
                        "Working with FutureNxt has been a rewarding experience. Their expertise and commitment to delivering high-quality solutions have transformed our operations. We’ve seen significant improvements in efficiency and customer satisfaction. A reliable and forward-thinking partner."
                    </p>
                </div>
                <div class="pt-4 border-t border-charcoal/10 flex items-center space-x-3">
                    <img src="assets/images/prof.jpg" alt="Mohit Jaiswal" class="w-10 h-10 rounded-full border border-champagne/50 object-cover">
                    <div>
                        <div class="font-heading font-bold text-sm text-rich-black">Mohit Jaiswal</div>
                        <div class="text-xs text-charcoal-muted">Community Coordinator</div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- ====================================================================
     SECTION 8: CALL TO ACTION (RICH OFF-BLACK + GOLD ACTION)
======================================================================== -->
<section class="bg-rich-black py-20 px-4 sm:px-6 lg:px-8 border-t border-champagne/30">
    <div class="max-w-5xl mx-auto border border-champagne/40 bg-rich-black-100 p-8 sm:p-12 rounded-sm shadow-gold-md text-center space-y-6">
        <span class="text-xs uppercase tracking-[0.25em] font-semibold text-champagne block">Take Action</span>
        <h2 class="font-heading font-extrabold text-3xl sm:text-4xl text-ivory tracking-tight">
            Ready to Partner in the Phygital Revolution?
        </h2>
        <p class="text-ivory/80 text-base max-w-2xl mx-auto leading-relaxed">
            Whether you are a budding youth innovator, an enterprising woman leader, an educational institution, or an investor — FutureNxt invites you to become an Agent of Change.
        </p>
        <div class="pt-4 flex flex-wrap justify-center gap-4">
            <a href="affiliates" class="px-8 py-3.5 text-xs font-semibold uppercase tracking-widest bg-champagne text-rich-black border border-champagne hover:bg-transparent hover:text-champagne transition-all duration-200 rounded-sm shadow-gold-sm">
                Apply as Affiliate Partner
            </a>
            <a href="contact" class="px-8 py-3.5 text-xs font-semibold uppercase tracking-widest bg-rich-black text-ivory border border-champagne/40 hover:border-champagne hover:text-champagne transition-all duration-200 rounded-sm">
                Contact Headquarters
            </a>
        </div>
    </div>
</section>

<!-- Simple Hero Image Slider Logic -->
<script>
    const sliderImages = [
        "assets/images/1725980791imgpsh_fullsize_anim (1).jpg",
        "assets/images/1725980803imgpsh_fullsize_anim (2).jpg",
        "assets/images/1725980815imgpsh_fullsize_anim (3).jpg",
        "assets/images/1725980824imgpsh_fullsize_anim (4).jpg"
    ];
    let slideIdx = 0;
    const heroImg = document.getElementById('hero-slider-img');

    setInterval(() => {
        slideIdx = (slideIdx + 1) % sliderImages.length;
        if (heroImg) {
            heroImg.style.opacity = '0.3';
            setTimeout(() => {
                heroImg.src = sliderImages[slideIdx];
                heroImg.style.opacity = '1';
            }, 300);
        }
    }, 4500);
</script>

<?php include 'includes/footer.php'; ?>
