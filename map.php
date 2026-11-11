<?php
$page_title = "Geographic Network | National Phygital Presence - FutureNxt";
$current_page = "map";
include 'includes/header.php';
?>

<!-- Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>

<style>
    /* Custom Gold Popups for Leaflet */
    .leaflet-popup-content-wrapper {
        background: #121212 !important;
        color: #F9F6F0 !important;
        border: 1.5px solid #C6A45C !important;
        border-radius: 4px !important;
        padding: 6px !important;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.6), 0 0 15px rgba(198, 164, 92, 0.3) !important;
    }
    .leaflet-popup-tip {
        background: #121212 !important;
        border: 1.5px solid #C6A45C !important;
    }
    .leaflet-popup-close-button {
        color: #C6A45C !important;
        font-size: 16px !important;
        padding: 4px 8px !important;
    }
    .leaflet-popup-close-button:hover {
        color: #F9F6F0 !important;
    }
    /* Pulse effect on HQ inner element only (leaves Leaflet translate3d positioning untouched) */
    @keyframes goldPulse {
        0% { transform: scale(1); filter: drop-shadow(0 0 3px #C6A45C); }
        50% { transform: scale(1.08); filter: drop-shadow(0 0 10px #D4AF37); }
        100% { transform: scale(1); filter: drop-shadow(0 0 3px #C6A45C); }
    }
    .hq-inner-pulse {
        display: inline-flex;
        flex-direction: column;
        align-items: center;
        animation: goldPulse 2.5s infinite ease-in-out;
        transform-origin: center bottom;
    }
</style>

<!-- Header Banner (Rich Off-Black & Gold) -->
<section class="bg-rich-black py-20 px-4 sm:px-6 lg:px-8 border-b border-champagne/30 text-center relative overflow-hidden">
    <div class="max-w-4xl mx-auto space-y-4 relative z-10">
        <span class="text-xs uppercase tracking-[0.25em] font-semibold text-champagne block">National Network</span>
        <h1 class="font-heading font-extrabold text-3xl sm:text-5xl text-ivory tracking-tight">
            Google Map Phygital Presence
        </h1>
        <div class="w-16 h-0.5 bg-champagne mx-auto mt-4"></div>
        <p class="text-ivory/80 text-base sm:text-lg max-w-2xl mx-auto leading-relaxed pt-2">
            Explore our expanding network of grassroots change agents, district coordinators, and regional hubs active across India on the world map.
        </p>
    </div>
</section>

<!-- Main Map Section (Clean Warm Ivory Background) -->
<section class="bg-ivory py-16 px-4 sm:px-6 lg:px-8 border-b border-champagne/20">
    <div class="max-w-7xl mx-auto space-y-10">
        
        <!-- Summary Stats Strip -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="bg-white border border-champagne/30 p-5 rounded-sm shadow-premium text-center">
                <span class="text-xs uppercase tracking-wider text-charcoal-muted font-medium block">Active Regions</span>
                <span class="font-heading text-2xl font-extrabold text-rich-black">8 States / UTs</span>
            </div>
            <div class="bg-white border border-champagne/30 p-5 rounded-sm shadow-premium text-center">
                <span class="text-xs uppercase tracking-wider text-charcoal-muted font-medium block">Mapped Hubs</span>
                <span class="font-heading text-2xl font-extrabold text-rich-black">12 Locations</span>
            </div>
            <div class="bg-white border border-champagne/30 p-5 rounded-sm shadow-premium text-center">
                <span class="text-xs uppercase tracking-wider text-charcoal-muted font-medium block">Principal HQ</span>
                <span class="font-heading text-2xl font-extrabold text-rich-black">Ranchi, JH</span>
            </div>
            <div class="bg-white border border-champagne/30 p-5 rounded-sm shadow-premium text-center">
                <span class="text-xs uppercase tracking-wider text-charcoal-muted font-medium block">Map Technology</span>
                <span class="font-heading text-2xl font-extrabold text-champagne-600">Google Maps</span>
            </div>
        </div>

        <!-- Interactive Google Map Container -->
        <div class="bg-white border-2 border-champagne p-2 rounded-sm shadow-gold-md relative">
            <div class="flex items-center justify-between px-3 py-2 bg-rich-black text-ivory text-xs border-b border-champagne/30 mb-2">
                <div class="flex items-center space-x-2">
                    <span class="inline-block w-2.5 h-2.5 rounded-full bg-champagne"></span>
                    <span class="font-heading uppercase tracking-wider text-champagne font-semibold">Google World Map View</span>
                    <span class="hidden sm:inline text-ivory/60">| Golden-Black Markers indicate active Pincodes</span>
                </div>
                <div class="flex items-center space-x-2">
                    <button onclick="focusLocation('834001')" class="px-2.5 py-1 bg-champagne hover:bg-champagne-400 text-rich-black font-bold border border-champagne rounded-sm text-[11px] transition-colors shadow-sm">
                        ★ Principal HQ (Ranchi)
                    </button>
                    <button onclick="focusAllPins()" class="px-2.5 py-1 bg-champagne/20 hover:bg-champagne/30 text-champagne border border-champagne/50 rounded-sm text-[11px] transition-colors">
                        Fit All Hubs
                    </button>
                    <button onclick="resetWorldView()" class="px-2.5 py-1 bg-champagne/20 hover:bg-champagne/30 text-champagne border border-champagne/50 rounded-sm text-[11px] transition-colors">
                        World View
                    </button>
                </div>
            </div>
            
            <div id="google-world-map" class="w-full h-[400px] sm:h-[550px] lg:h-[650px] rounded-sm bg-rich-black z-10"></div>
        </div>

        <!-- Directory of All 12 Active Pincode Locations -->
        <div class="bg-white border border-champagne/30 p-6 sm:p-8 rounded-sm shadow-premium">
            <div class="mb-6 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                <div>
                    <span class="text-xs uppercase tracking-[0.2em] font-semibold text-champagne block">Authorized Directory</span>
                    <h3 class="font-heading font-extrabold text-2xl text-rich-black">12 Active Network Pincodes</h3>
                </div>
                <div class="text-xs text-charcoal-muted">
                    Click on any row below to immediately center and highlight the marker on the Google Map.
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse text-xs sm:text-sm">
                    <thead>
                        <tr class="bg-rich-black text-champagne border-b border-champagne/40">
                            <th class="p-3.5 font-heading font-semibold uppercase tracking-wider">Pincode</th>
                            <th class="p-3.5 font-heading font-semibold uppercase tracking-wider">Name / Hub</th>
                            <th class="p-3.5 font-heading font-semibold uppercase tracking-wider">Location / Address</th>
                            <th class="p-3.5 font-heading font-semibold uppercase tracking-wider">State</th>
                            <th class="p-3.5 font-heading font-semibold uppercase tracking-wider text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-champagne/15 text-charcoal" id="pincode-table-body">
                        <!-- Table rows populated dynamically or statically for seamless fallback -->
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</section>

<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
<script>
    // All 12 Pincode Hubs requested by user
    const locations = [
        {
            pincode: "834001",
            name: "RAVI",
            address: "Mahabir Tower, Main Road, Ranchi, Jharkhand",
            district: "Ranchi",
            state: "Jharkhand",
            lat: 23.3581,
            lng: 85.3242,
            isHQ: true,
            phone: "+91 9801506511"
        },
        {
            pincode: "160022",
            name: "aman",
            address: "Sector 22",
            district: "Chandigarh",
            state: "Chandigarh",
            lat: 30.7353,
            lng: 76.7725
        },
        {
            pincode: "411038",
            name: "FutureNxt",
            address: "Kothrud Area",
            district: "Pune",
            state: "Maharashtra",
            lat: 18.5074,
            lng: 73.8077
        },
        {
            pincode: "263636",
            name: "Arjun Singh Mehta",
            address: "Almora District",
            district: "Almora",
            state: "Uttarakhand",
            lat: 29.5971,
            lng: 79.6591
        },
        {
            pincode: "110049",
            name: "ASHOK MAHTO",
            address: "South Delhi District",
            district: "South Delhi",
            state: "Delhi",
            lat: 28.5626,
            lng: 77.2205
        },
        {
            pincode: "500032",
            name: "ARJIT",
            address: "Gachibowli / Financial District",
            district: "Hyderabad",
            state: "Telangana",
            lat: 17.4401,
            lng: 78.3489
        },
        {
            pincode: "492001",
            name: "Alok Kumar Rana",
            address: "Raipur City Center",
            district: "Raipur",
            state: "Chhattisgarh",
            lat: 21.2514,
            lng: 81.6296
        },
        {
            pincode: "757001",
            name: "Debashish",
            address: "Baripada / Mayurbhanj",
            district: "Mayurbhanj",
            state: "Odisha",
            lat: 21.9287,
            lng: 86.7466
        },
        {
            pincode: "842001",
            name: "Swarna",
            address: "Muzaffarpur Central",
            district: "Muzaffarpur",
            state: "Bihar",
            lat: 26.1209,
            lng: 85.3647
        },
        {
            pincode: "848101",
            name: "amans",
            address: "Samastipur Central",
            district: "Samastipur",
            state: "Bihar",
            lat: 25.8628,
            lng: 85.7811
        },
        {
            pincode: "800001",
            name: "FutureNxt",
            address: "GPO / Fraser Road",
            district: "Patna",
            state: "Bihar",
            lat: 25.6093,
            lng: 85.1376
        },
        {
            pincode: "422009",
            name: "FutureNxt",
            address: "Cidco Colony",
            district: "Nashik",
            state: "Maharashtra",
            lat: 19.9882,
            lng: 73.7431
        }
    ];

    // Initialize Map with Google Map World layer, centered on Ranchi Principal HQ
    const map = L.map('google-world-map', { 
        scrollWheelZoom: false,
        zoomControl: true
    }).setView([23.3581, 85.3242], 6);

    // Google Maps World Layer (Roadmap view)
    const googleMapLayer = L.tileLayer('https://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
        maxZoom: 20,
        subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
        attribution: '&copy; Google Maps | FutureNxt Presence Network'
    }).addTo(map);

    // Custom Golden-Black Marker SVG Generator
    // Color: Black (#121212), Outline: Champagne Gold (#C6A45C)
    function createGoldenBlackPin(isHQ = false) {
        if (isHQ) {
            return L.divIcon({
                className: 'custom-pin-marker-hq',
                html: `
                    <div class="hq-inner-pulse" style="display:flex; flex-direction:column; align-items:center; width:150px;">
                        <!-- Prominent Floating Gold HQ Badge -->
                        <div style="background:#C6A45C; color:#121212; font-family:'Montserrat',sans-serif; font-size:10px; font-weight:800; padding:2px 8px; border-radius:3px; border:1px solid #121212; white-space:nowrap; box-shadow:0 3px 8px rgba(0,0,0,0.6); margin-bottom:2px; letter-spacing:0.5px;">
                            ★ PRINCIPAL HQ (RANCHI)
                        </div>
                        <svg width="36" height="46" viewBox="0 0 34 44" fill="none" xmlns="http://www.w3.org/2000/svg" style="filter: drop-shadow(0 4px 10px rgba(0,0,0,0.8));">
                            <!-- Black fill with Golden outline -->
                            <path d="M17 1C8.163 1 1 8.163 1 17C1 27.5 17 43 17 43C17 43 33 27.5 33 17C33 8.163 25.837 1 17 1Z" 
                                  fill="#121212" stroke="#D4AF37" stroke-width="3"/>
                            <!-- Golden Star for Principal HQ -->
                            <polygon points="17,8 19.5,13.5 25,14 21,18 22.5,23.5 17,20.5 11.5,23.5 13,18 9,14 14.5,13.5" fill="#C6A45C" stroke="#121212" stroke-width="0.8"/>
                        </svg>
                    </div>
                `,
                iconSize: [150, 68],
                iconAnchor: [75, 68],
                popupAnchor: [0, -68]
            });
        }

        return L.divIcon({
            className: 'custom-pin-marker',
            html: `
                <div style="display:flex; justify-content:center; width:34px; height:44px;">
                    <svg width="34" height="44" viewBox="0 0 34 44" fill="none" xmlns="http://www.w3.org/2000/svg" style="filter: drop-shadow(0 3px 6px rgba(0,0,0,0.6));">
                        <!-- Black body fill with Champagne Gold 2.5px outline -->
                        <path d="M17 1C8.163 1 1 8.163 1 17C1 27.5 17 43 17 43C17 43 33 27.5 33 17C33 8.163 25.837 1 17 1Z" 
                              fill="#121212" stroke="#C6A45C" stroke-width="2.5"/>
                        <!-- Inner Golden Accent Dot -->
                        <circle cx="17" cy="17" r="6" fill="#C6A45C"/>
                        <circle cx="17" cy="17" r="2.5" fill="#121212"/>
                    </svg>
                </div>
            `,
            iconSize: [34, 44],
            iconAnchor: [17, 44],
            popupAnchor: [0, -44]
        });
    }

    const markersRef = {};
    const groupLatLngs = [];

    // Render markers on map
    locations.forEach(loc => {
        const pinIcon = createGoldenBlackPin(loc.isHQ);
        const marker = L.marker([loc.lat, loc.lng], { 
            icon: pinIcon,
            zIndexOffset: loc.isHQ ? 2000 : 100 
        }).addTo(map);
        
        const popupContent = `
            <div style="font-family:'Inter', sans-serif; min-width:210px; padding:2px;">
                <div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:4px;">
                    <span style="background:${loc.isHQ ? '#C6A45C' : '#2A2A2A'}; color:${loc.isHQ ? '#121212' : '#C6A45C'}; font-size:9px; font-weight:800; text-transform:uppercase; padding:2px 6px; border-radius:2px; letter-spacing:0.5px;">
                        ${loc.isHQ ? '★ Principal HQ' : 'Active Phygital Hub'}
                    </span>
                    <span style="font-family:monospace; color:#C6A45C; font-weight:700; font-size:12px;">PIN: ${loc.pincode}</span>
                </div>
                <div style="color:#F9F6F0; font-size:14px; font-weight:700; margin-top:3px; line-height:1.2;">
                    ${loc.name}
                </div>
                <div style="color:#bbb; font-size:11px; margin-top:4px; line-height:1.4;">
                    ${loc.address}
                </div>
                <div style="color:#C6A45C; font-size:11px; margin-top:2px; font-weight:600;">
                    ${loc.district}, ${loc.state}
                </div>
                ${loc.isHQ ? `
                <div style="margin-top:8px; padding-top:6px; border-top:1px solid rgba(198,164,92,0.3); display:flex; justify-content:space-between; align-items:center;">
                    <a href="tel:9801506511" style="color:#C6A45C; text-decoration:none; font-size:11px; font-weight:700; display:inline-flex; align-items:center; gap:4px;">
                        📞 HQ Desk: +91 9801506511
                    </a>
                </div>
                ` : ''}
            </div>
        `;
        
        marker.bindPopup(popupContent);
        markersRef[loc.pincode] = marker;
        groupLatLngs.push([loc.lat, loc.lng]);
    });

    // Populate Table
    const tableBody = document.getElementById('pincode-table-body');
    locations.forEach(loc => {
        const row = document.createElement('tr');
        row.className = 'hover:bg-champagne/10 transition-colors cursor-pointer ' + (loc.isHQ ? 'bg-champagne/5 font-semibold' : '');
        row.onclick = () => focusLocation(loc.pincode);

        row.innerHTML = `
            <td class="p-3.5 font-mono font-bold text-rich-black">
                <span class="inline-flex items-center gap-1.5">
                    <span class="w-2.5 h-2.5 rounded-full ${loc.isHQ ? 'bg-champagne' : 'bg-rich-black border border-champagne'}"></span>
                    ${loc.pincode}
                </span>
            </td>
            <td class="p-3.5 text-rich-black font-medium">
                ${loc.name} ${loc.isHQ ? '<span class="ml-1 text-[10px] bg-rich-black text-champagne px-1.5 py-0.5 rounded uppercase font-bold tracking-wider">HQ</span>' : ''}
            </td>
            <td class="p-3.5 text-charcoal-muted">
                ${loc.address}
            </td>
            <td class="p-3.5 text-rich-black">
                ${loc.state}
            </td>
            <td class="p-3.5 text-right">
                <button onclick="event.stopPropagation(); focusLocation('${loc.pincode}')" class="px-2.5 py-1 text-xs border border-champagne text-rich-black hover:bg-champagne hover:text-white transition-colors rounded-sm font-semibold">
                    View on Map →
                </button>
            </td>
        `;
        tableBody.appendChild(row);
    });

    // Focus single pin
    function focusLocation(pincode) {
        const target = locations.find(l => l.pincode === pincode);
        if (target && markersRef[pincode]) {
            map.flyTo([target.lat, target.lng], 13, { duration: 1.2 });
            setTimeout(() => {
                markersRef[pincode].openPopup();
            }, 1250);
            
            // Smooth scroll map into view if on mobile
            document.getElementById('google-world-map').scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
    }

    // Fit all pins in India
    function focusAllPins() {
        if (groupLatLngs.length) {
            const bounds = L.latLngBounds(groupLatLngs);
            map.fitBounds(bounds, { padding: [40, 40] });
        }
    }

    // World view
    function resetWorldView() {
        map.flyTo([20, 0], 2, { duration: 1.5 });
    }

    // Open Principal HQ (Ranchi) popup cleanly on initial load
    setTimeout(() => {
        if (markersRef['834001']) {
            markersRef['834001'].openPopup();
        }
    }, 400);
</script>

<?php include 'includes/footer.php'; ?>
