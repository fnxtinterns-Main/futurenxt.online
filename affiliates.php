<?php
$page_title = "Affiliate Program | Youth & Women Empowerment - FutureNxt";
$current_page = "affiliates";
include 'includes/header.php';
?>

<!-- Header Banner (Rich Off-Black & Gold) -->
<section class="bg-rich-black py-20 px-4 sm:px-6 lg:px-8 border-b border-champagne/30 text-center relative overflow-hidden">
    <div class="max-w-4xl mx-auto space-y-4 relative z-10">
        <span class="text-xs uppercase tracking-[0.25em] font-semibold text-champagne block">Community Ecosystem</span>
        <h1 class="font-heading font-extrabold text-3xl sm:text-5xl text-ivory tracking-tight">
            FutureNxt Affiliate Network
        </h1>
        <div class="w-16 h-0.5 bg-champagne mx-auto mt-4"></div>
        <p class="text-ivory/80 text-base sm:text-lg max-w-2xl mx-auto leading-relaxed pt-2">
            Empowering youth and women through grassroots community leadership, skill enablement, and direct livelihood incentives.
        </p>
    </div>
</section>

<!-- Main Section (Clean Warm Ivory Background) -->
<section class="bg-ivory py-24 px-4 sm:px-6 lg:px-8 border-b border-champagne/20">
    <div class="max-w-7xl mx-auto">
        
        <?php if (isset($_GET['status']) && $_GET['status'] == 'success'): ?>
        <div class="mb-10 p-5 bg-champagne/20 border-2 border-champagne text-rich-black rounded-sm flex items-center gap-3">
            <i class="fa-solid fa-circle-check text-champagne text-xl"></i>
            <div>
                <div class="font-heading font-bold text-sm">Application Received Successfully!</div>
                <div class="text-xs text-charcoal">Thank you for registering with FutureNxt. Our regional state coordinator will connect with you within 24 hours.</div>
            </div>
        </div>
        <?php endif; ?>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            
            <!-- Left Column: Youth & Women Interactive Pillars -->
            <div class="lg:col-span-6 space-y-8">
                <div>
                    <span class="text-xs uppercase tracking-[0.25em] font-semibold text-champagne block mb-2">Targeted Focus</span>
                    <h2 class="font-heading font-extrabold text-3xl text-rich-black tracking-tight">
                        Empowerment Pathways
                    </h2>
                    <div class="w-12 h-0.5 bg-champagne mt-3"></div>
                </div>

                <!-- Tab Selector Buttons (Sharp, Rich Off-Black + Gold, Mobile-Optimized) -->
                <div class="grid grid-cols-2 gap-2 border-b border-champagne/30 pb-2">
                    <button id="tab-btn-youth" class="w-full py-3 px-3 text-xs font-semibold uppercase tracking-wider bg-rich-black text-champagne border border-champagne rounded-sm transition-all text-center">
                        Youth Track
                    </button>
                    <button id="tab-btn-women" class="w-full py-3 px-3 text-xs font-semibold uppercase tracking-wider bg-white text-charcoal hover:text-champagne border border-champagne/30 rounded-sm transition-all text-center">
                        Women Track
                    </button>
                </div>

                <!-- Tab Content: Youth -->
                <div id="tab-content-youth" class="bg-white border border-champagne/30 p-6 sm:p-8 rounded-sm shadow-premium space-y-4">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-rich-black text-champagne flex items-center justify-center rounded-sm">
                            <i class="fa-solid fa-user-graduate text-base"></i>
                        </div>
                        <h3 class="font-heading font-bold text-xl text-rich-black">Youth Leadership & Skilling</h3>
                    </div>
                    <div class="w-10 h-0.5 bg-champagne"></div>
                    <p class="text-charcoal text-sm leading-relaxed">
                        Empowering youth is paramount. They represent our collective future, bringing unmatched energy, innovation, and fresh perspectives to drive positive transformation across economy and culture. FutureNxt provides youth with digital literacy, mobile enterprise toolkits, and leadership mentorship, nurturing their potential as tomorrow's leaders.
                    </p>
                    <ul class="space-y-2 text-xs text-charcoal pt-2">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-champagne"></i> Digital marketing & mobile platform skilling</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-champagne"></i> Direct commission & grassroots referral earnings</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-champagne"></i> District-level coordinator certification</li>
                    </ul>
                </div>

                <!-- Tab Content: Women -->
                <div id="tab-content-women" class="hidden bg-white border border-champagne/30 p-8 rounded-sm shadow-premium space-y-4">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-rich-black text-champagne flex items-center justify-center rounded-sm">
                            <i class="fa-solid fa-person-dress text-base"></i>
                        </div>
                        <h3 class="font-heading font-bold text-xl text-rich-black">Women Empowerment & Micro-Enterprise</h3>
                    </div>
                    <div class="w-10 h-0.5 bg-champagne"></div>
                    <p class="text-charcoal text-sm leading-relaxed">
                        Empowering women is essential for equitable societal progress. Women contribute significantly to every facet of life and economic resilience. Ensuring financial independence, digital commerce access, and education for women fosters stronger families and vibrant communities. FutureNxt enables women to establish localized phygital enterprises with flexible hours and zero capital barriers.
                    </p>
                    <ul class="space-y-2 text-xs text-charcoal pt-2">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-champagne"></i> Self-help group (SHG) digital enablement</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-champagne"></i> Community healthcare & educational ambassadorship</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-champagne"></i> Sustainable household income generation</li>
                    </ul>
                </div>

                <!-- Benefits callout box -->
                <div class="bg-rich-black p-6 rounded-sm border border-champagne/40 text-ivory space-y-3">
                    <div class="text-xs uppercase tracking-widest text-champagne font-semibold">Affiliate Advantage</div>
                    <div class="text-sm font-medium">Zero registration fees • Comprehensive onboarding • Direct bank/UPI settlement</div>
                </div>
            </div>

            <!-- Right Column: Registration Form (Clean High-End Form) -->
            <div class="lg:col-span-6">
                <div class="bg-white border-2 border-champagne p-6 sm:p-8 lg:p-10 rounded-sm shadow-gold-sm">
                    <div class="mb-6 space-y-2">
                        <span class="text-xs uppercase tracking-[0.2em] font-semibold text-champagne">Join the Movement</span>
                        <h3 class="font-heading font-extrabold text-2xl text-rich-black">Register as an Affiliate Partner</h3>
                        <p class="text-xs text-charcoal-muted">Fill out the credentials below to initiate your onboarding with the FutureNxt team.</p>
                    </div>

                    <form action="action" method="POST" class="space-y-4">
                        <input type="hidden" name="form_type" value="affiliate">

                        <div>
                            <label class="block text-xs uppercase tracking-wider font-semibold text-rich-black mb-1.5" for="name">
                                Full Name <span class="text-champagne">*</span>
                            </label>
                            <input type="text" id="name" name="name" required placeholder="Enter your full name" 
                                class="w-full px-4 py-3 bg-ivory border border-champagne/40 focus:border-champagne focus:ring-1 focus:ring-champagne text-base sm:text-sm text-rich-black rounded-sm outline-none transition-all">
                        </div>

                        <div>
                            <label class="block text-xs uppercase tracking-wider font-semibold text-rich-black mb-1.5" for="email">
                                Email Address <span class="text-champagne">*</span>
                            </label>
                            <input type="email" id="email" name="email" required placeholder="you@domain.com" 
                                class="w-full px-4 py-3 bg-ivory border border-champagne/40 focus:border-champagne focus:ring-1 focus:ring-champagne text-base sm:text-sm text-rich-black rounded-sm outline-none transition-all">
                        </div>

                        <div>
                            <label class="block text-xs uppercase tracking-wider font-semibold text-rich-black mb-1.5" for="mobile">
                                Contact / Mobile Number <span class="text-champagne">*</span>
                            </label>
                            <input type="tel" id="mobile" name="mobile" required placeholder="10-digit mobile number" 
                                class="w-full px-4 py-3 bg-ivory border border-champagne/40 focus:border-champagne focus:ring-1 focus:ring-champagne text-base sm:text-sm text-rich-black rounded-sm outline-none transition-all">
                        </div>

                        <div>
                            <label class="block text-xs uppercase tracking-wider font-semibold text-rich-black mb-1.5" for="city">
                                City & State <span class="text-champagne">*</span>
                            </label>
                            <input type="text" id="city" name="city" required placeholder="e.g. Ranchi, Jharkhand" 
                                class="w-full px-4 py-3 bg-ivory border border-champagne/40 focus:border-champagne focus:ring-1 focus:ring-champagne text-base sm:text-sm text-rich-black rounded-sm outline-none transition-all">
                        </div>

                        <div>
                            <label class="block text-xs uppercase tracking-wider font-semibold text-rich-black mb-1.5" for="category">
                                Primary Track / Interest
                            </label>
                            <select id="category" name="category" class="w-full px-4 py-3 bg-ivory border border-champagne/40 focus:border-champagne focus:ring-1 focus:ring-champagne text-base sm:text-sm text-rich-black rounded-sm outline-none transition-all">
                                <option value="Youth Leadership">Youth Leadership & Digital Commerce</option>
                                <option value="Women Empowerment">Women Empowerment & Micro-Enterprise</option>
                                <option value="Education Ambassador">Education & Skill Ambassadorship</option>
                                <option value="Healthcare Coordinator">Healthcare & Tele-Diagnostics</option>
                                <option value="General Community Partner">General Community Partner</option>
                            </select>
                        </div>

                        <div class="pt-4">
                            <!-- Requirement Step 3: Sharp buttons, Off-Black with Gold text or Gold with Off-Black text -->
                            <button type="submit" name="affi" class="w-full py-4 text-xs font-semibold uppercase tracking-widest bg-champagne text-rich-black border border-champagne hover:bg-rich-black hover:text-champagne transition-all duration-200 rounded-sm shadow-gold-sm flex items-center justify-center gap-2">
                                <span>Submit Affiliate Application</span>
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>
</section>

<script>
    // Tab switching behavior
    const btnYouth = document.getElementById('tab-btn-youth');
    const btnWomen = document.getElementById('tab-btn-women');
    const tabYouth = document.getElementById('tab-content-youth');
    const tabWomen = document.getElementById('tab-content-women');

    btnYouth.addEventListener('click', () => {
        btnYouth.classList.add('bg-rich-black', 'text-champagne', 'border-champagne');
        btnYouth.classList.remove('bg-white', 'text-charcoal', 'border-champagne/30');

        btnWomen.classList.remove('bg-rich-black', 'text-champagne', 'border-champagne');
        btnWomen.classList.add('bg-white', 'text-charcoal', 'border-champagne/30');

        tabYouth.classList.remove('hidden');
        tabWomen.classList.add('hidden');
    });

    btnWomen.addEventListener('click', () => {
        btnWomen.classList.add('bg-rich-black', 'text-champagne', 'border-champagne');
        btnWomen.classList.remove('bg-white', 'text-charcoal', 'border-champagne/30');

        btnYouth.classList.remove('bg-rich-black', 'text-champagne', 'border-champagne');
        btnYouth.classList.add('bg-white', 'text-charcoal', 'border-champagne/30');

        tabWomen.classList.remove('hidden');
        tabYouth.classList.add('hidden');
    });
</script>

<?php include 'includes/footer.php'; ?>
