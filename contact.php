<?php
$page_title = "Contact FutureNxt | Headquarters & National Support";
$current_page = "contact";
include 'includes/header.php';
?>

<!-- Header Banner (Rich Off-Black & Gold) -->
<section class="bg-rich-black py-20 px-4 sm:px-6 lg:px-8 border-b border-champagne/30 text-center relative overflow-hidden">
    <div class="max-w-4xl mx-auto space-y-4 relative z-10">
        <span class="text-xs uppercase tracking-[0.25em] font-semibold text-champagne block">Get in Touch</span>
        <h1 class="font-heading font-extrabold text-3xl sm:text-5xl text-ivory tracking-tight">
            Connect With FutureNxt
        </h1>
        <div class="w-16 h-0.5 bg-champagne mx-auto mt-4"></div>
        <p class="text-ivory/80 text-base sm:text-lg max-w-2xl mx-auto leading-relaxed pt-2">
            Have questions regarding our phygital initiatives, partnerships, or community programs? Our executive team is ready to assist you.
        </p>
    </div>
</section>

<!-- Main Contact Section (Clean Warm Ivory Background) -->
<section class="bg-ivory py-24 px-4 sm:px-6 lg:px-8 border-b border-champagne/20">
    <div class="max-w-7xl mx-auto">
        
        <?php if (isset($_GET['status']) && $_GET['status'] == 'sent'): ?>
        <div class="mb-10 p-5 bg-champagne/20 border-2 border-champagne text-rich-black rounded-sm flex items-center gap-3">
            <i class="fa-solid fa-circle-check text-champagne text-xl"></i>
            <div>
                <div class="font-heading font-bold text-sm">Message Sent Successfully!</div>
                <div class="text-xs text-charcoal">Thank you for reaching out. A FutureNxt representative will review your message and reply promptly.</div>
            </div>
        </div>
        <?php endif; ?>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            
            <!-- Left Column: Corporate Office Details (Rich Off-Black Card) -->
            <div class="lg:col-span-5 bg-rich-black text-ivory border-2 border-champagne/40 p-8 sm:p-10 rounded-sm shadow-gold-md flex flex-col justify-between">
                <div class="space-y-8">
                    <div>
                        <span class="text-xs uppercase tracking-[0.2em] font-semibold text-champagne">Headquarters</span>
                        <h2 class="font-heading font-bold text-2xl text-ivory mt-1">Corporate Office</h2>
                        <div class="w-12 h-0.5 bg-champagne mt-2"></div>
                    </div>

                    <ul class="space-y-6 text-sm">
                        <li class="flex items-start space-x-4">
                            <div class="w-10 h-10 bg-rich-black-100 border border-champagne/40 rounded-sm flex items-center justify-center text-champagne flex-shrink-0 mt-0.5">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div>
                                <span class="text-xs uppercase tracking-wider text-champagne font-semibold block">Address</span>
                                <p class="text-ivory/85 leading-relaxed pt-1">
                                    506, 5th Floor, Mahabir Tower,<br>
                                    Main Road, Ranchi, Jharkhand – 834001, India
                                </p>
                            </div>
                        </li>

                        <li class="flex items-start space-x-4">
                            <div class="w-10 h-10 bg-rich-black-100 border border-champagne/40 rounded-sm flex items-center justify-center text-champagne flex-shrink-0 mt-0.5">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div>
                                <span class="text-xs uppercase tracking-wider text-champagne font-semibold block">Direct Line</span>
                                <a href="tel:9801506511" class="text-ivory/85 hover:text-champagne transition-colors leading-relaxed block pt-1">
                                    +91 9801506511
                                </a>
                            </div>
                        </li>

                        <li class="flex items-start space-x-4">
                            <div class="w-10 h-10 bg-rich-black-100 border border-champagne/40 rounded-sm flex items-center justify-center text-champagne flex-shrink-0 mt-0.5">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div>
                                <span class="text-xs uppercase tracking-wider text-champagne font-semibold block">Electronic Mail</span>
                                <a href="mailto:india.futurenxt@gmail.com" class="text-ivory/85 hover:text-champagne transition-colors leading-relaxed block pt-1">
                                    india.futurenxt@gmail.com
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="pt-8 mt-8 border-t border-champagne/20">
                    <span class="text-xs uppercase tracking-wider text-champagne/70 font-semibold block mb-3">Connect on Social</span>
                    <div class="flex items-center space-x-3">
                        <a href="#" class="w-9 h-9 border border-champagne/40 text-champagne hover:bg-champagne hover:text-rich-black flex items-center justify-center rounded-sm transition-all duration-200">
                            <i class="fa-brands fa-facebook-f text-xs"></i>
                        </a>
                        <a href="#" class="w-9 h-9 border border-champagne/40 text-champagne hover:bg-champagne hover:text-rich-black flex items-center justify-center rounded-sm transition-all duration-200">
                            <i class="fa-brands fa-instagram text-xs"></i>
                        </a>
                        <a href="#" class="w-9 h-9 border border-champagne/40 text-champagne hover:bg-champagne hover:text-rich-black flex items-center justify-center rounded-sm transition-all duration-200">
                            <i class="fa-brands fa-linkedin-in text-xs"></i>
                        </a>
                        <a href="#" class="w-9 h-9 border border-champagne/40 text-champagne hover:bg-champagne hover:text-rich-black flex items-center justify-center rounded-sm transition-all duration-200">
                            <i class="fa-brands fa-x-twitter text-xs"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right Column: Inquiry Form -->
            <div class="lg:col-span-7 bg-white border border-champagne/30 p-6 sm:p-10 rounded-sm shadow-premium">
                <div class="mb-6 sm:mb-8 space-y-2">
                    <span class="text-xs uppercase tracking-[0.2em] font-semibold text-champagne">Direct Inquiry</span>
                    <h3 class="font-heading font-extrabold text-2xl text-rich-black">Leave a Message</h3>
                    <p class="text-xs text-charcoal-muted">Submit your query below and our executive coordination desk will respond promptly.</p>
                </div>

                <form action="action" method="POST" class="space-y-4">
                    <input type="hidden" name="form_type" value="contact">

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs uppercase tracking-wider font-semibold text-rich-black mb-1.5" for="name">
                                Your Name <span class="text-champagne">*</span>
                            </label>
                            <input type="text" id="name" name="name" required placeholder="Full Name" 
                                class="w-full px-4 py-3 bg-ivory border border-champagne/40 focus:border-champagne focus:ring-1 focus:ring-champagne text-base sm:text-sm text-rich-black rounded-sm outline-none transition-all">
                        </div>
                        <div>
                            <label class="block text-xs uppercase tracking-wider font-semibold text-rich-black mb-1.5" for="email">
                                Your Email <span class="text-champagne">*</span>
                            </label>
                            <input type="email" id="email" name="email" required placeholder="name@domain.com" 
                                class="w-full px-4 py-3 bg-ivory border border-champagne/40 focus:border-champagne focus:ring-1 focus:ring-champagne text-base sm:text-sm text-rich-black rounded-sm outline-none transition-all">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs uppercase tracking-wider font-semibold text-rich-black mb-1.5" for="contact">
                            Phone / Subject <span class="text-champagne">*</span>
                        </label>
                        <input type="text" id="contact" name="contact" required placeholder="Contact Number or Subject Matter" 
                            class="w-full px-4 py-3 bg-ivory border border-champagne/40 focus:border-champagne focus:ring-1 focus:ring-champagne text-base sm:text-sm text-rich-black rounded-sm outline-none transition-all">
                    </div>

                    <div>
                        <label class="block text-xs uppercase tracking-wider font-semibold text-rich-black mb-1.5" for="message">
                            Your Message <span class="text-champagne">*</span>
                        </label>
                        <textarea id="message" name="message" rows="5" required placeholder="Please describe how you'd like to collaborate or inquire..." 
                            class="w-full px-4 py-3 bg-ivory border border-champagne/40 focus:border-champagne focus:ring-1 focus:ring-champagne text-base sm:text-sm text-rich-black rounded-sm outline-none transition-all"></textarea>
                    </div>

                    <div class="pt-2">
                        <!-- Requirement Step 3: Sharp buttons, Off-Black with Gold text or Gold with Off-Black text -->
                        <button type="submit" name="sendmail" class="w-full sm:w-auto px-8 py-3.5 text-xs font-semibold uppercase tracking-widest bg-champagne text-rich-black border border-champagne hover:bg-rich-black hover:text-champagne transition-all duration-200 rounded-sm shadow-gold-sm flex items-center justify-center gap-2">
                            <span>Send Communication</span>
                            <i class="fa-solid fa-paper-plane text-xs"></i>
                        </button>
                    </div>
                </form>
            </div>

        </div>

    </div>
</section>

<?php include 'includes/footer.php'; ?>
