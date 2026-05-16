@extends('layout')
@section('title') AGROFARMZ @endsection
@section('keywords') Home,About,Contact,Car @endsection
@section('description') Write some descripton about the webpage @endsection
@section('content')
<!-- Hero Section -->
<div class="hero-section py-5 text-white" style="background: linear-gradient(rgba(45, 90, 39, 0.9), rgba(76, 175, 80, 0.8)), url('https://images.unsplash.com/photo-1592982537447-7440770cbfc9?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80'); background-size: cover; background-position: center; min-height: 400px; display: flex; align-items: center;">
    <div class="container text-center wow animated fadeIn">
        <h6 class="text-uppercase font-weight-bold mb-3" style="letter-spacing: 2px; color: var(--accent-color);">Digital Agricultural Solutions</h6>
        <h1 class="display-3 font-weight-bold mb-4" style="font-family: 'Outfit', sans-serif;">Web-Based Advisory for <br><span style="color: var(--accent-color);">Insect Pest Management</span></h1>
        <p class="lead mb-5 mx-auto" style="max-width: 800px; font-family: 'Inter', sans-serif;">An advanced system for the identification and management of insect pests in agricultural crops. Protecting your harvest with science and technology.</p>
        <div class="d-flex justify-content-center" style="gap: 15px;">
            <a href="#About" class="btn-modern btn btn-warning px-5">Get Started</a>
            <a href="#Products" class="btn-modern btn btn-outline-light px-5">View Advisory</a>
        </div>
    </div>
</div>

<!-- About Section -->
<div id="About" class="section-padding bg-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-4 mb-lg-0 wow animated zoomIn">
                <div class="modern-card p-2 shadow-sm border">
                    <img src="https://images.unsplash.com/photo-1599940824399-b87987ceb72a?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Pest Identification" class="img-fluid rounded">
                </div>
            </div>
            <div class="col-lg-7 pl-lg-5 wow animated fadeInRight">
                <h6 class="text-uppercase text-success font-weight-bold mb-2">Our Core Advisory</h6>
                <h2 class="display-4 mb-3" style="font-family: 'Outfit', sans-serif;">Pest Identification & <span class="text-success">Management</span></h2>
                <div class="heading-line ml-0 mb-4"></div>
                
                <p class="lead text-muted mb-4" style="font-family: 'Inter', sans-serif;">Building a comprehensive advisory for managing insect pests in agricultural crops is critical for food security and farmer prosperity.</p>
                
                <div class="row mb-5">
                    <div class="col-sm-6 mb-4">
                        <div class="d-flex align-items-center">
                            <div class="bg-light p-3 rounded-circle mr-3" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-bug text-success fa-lg"></i>
                            </div>
                            <h5 class="m-0 font-weight-600">Pest Identification</h5>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <div class="d-flex align-items-center">
                            <div class="bg-light p-3 rounded-circle mr-3" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-shield-alt text-success fa-lg"></i>
                            </div>
                            <h5 class="m-0 font-weight-600">Management Strategies</h5>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <div class="d-flex align-items-center">
                            <div class="bg-light p-3 rounded-circle mr-3" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-chart-line text-success fa-lg"></i>
                            </div>
                            <h5 class="m-0 font-weight-600">Growth Monitoring</h5>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <div class="d-flex align-items-center">
                            <div class="bg-light p-3 rounded-circle mr-3" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-database text-success fa-lg"></i>
                            </div>
                            <h5 class="m-0 font-weight-600">Expert Database</h5>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

<!-- Pest Identification Module -->
<section id="PestDiagnostic" class="section-padding bg-light">
    <div class="container">
        <div class="text-center mb-5 wow animated fadeIn">
            <h6 class="text-uppercase text-success font-weight-bold mb-2">Smart Diagnosis</h6>
            <h2 class="display-4" style="font-family: 'Outfit', sans-serif;">Pest Identification <span class="text-success">Module</span></h2>
            <div class="heading-line"></div>
            <p class="text-muted">Identify insect pests and get management strategies in seconds.</p>
        </div>

        <div class="row">
            <!-- Diagnosis Form -->
            <div class="col-lg-6 mb-4 wow animated fadeInLeft">
                <div class="modern-card p-4 h-100 bg-white shadow-sm border">
                    <h4 class="mb-4 font-weight-bold"><i class="fas fa-stethoscope text-success mr-2"></i>Run Diagnosis</h4>
                    
                    <form id="pestForm">
                        <div class="mb-4">
                            <label class="font-weight-bold small mb-2">Select Your Crop</label>
                            <select id="cropSelect" class="form-control custom-select bg-light border-0 py-2" style="height: auto;" required>
                                <option value="" selected disabled>Choose a crop...</option>
                                <!-- Dynamic Crops -->
                            </select>
                        </div>

                        <div id="symptomGuide" class="mb-4 d-none">
                            <label class="font-weight-bold small mb-2">Common Symptoms (Select one or more)</label>
                            <div id="symptomBadges" class="d-flex flex-wrap" style="gap: 8px;">
                                <!-- Dynamic Badges -->
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="font-weight-bold small mb-2">Detailed Symptoms / Notes</label>
                            <textarea id="symptomInput" class="form-control bg-light border-0" rows="3" placeholder="Describe any other issues..."></textarea>
                        </div>

                        <div class="mb-4">
                            <label class="font-weight-bold small mb-2">OR Upload Insect Image</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="pestImage" accept="image/*">
                                <label class="custom-file-label bg-light border-0" for="pestImage">Choose image...</label>
                            </div>
                        </div>

                        <button type="submit" class="btn-modern btn btn-success btn-block py-3 shadow-sm mt-2">
                            <i class="fas fa-search-plus mr-2"></i>Run Identification
                        </button>
                    </form>
                </div>
            </div>

            <!-- Result Card Container -->
            <div class="col-lg-6 mb-4 wow animated fadeInRight">
                <div class="modern-card p-0 h-100 bg-white shadow-sm border overflow-hidden position-relative" style="min-height: 500px;">
                    
                    <!-- Loading Placeholder -->
                    <div id="resultPlaceholder" class="d-flex flex-column align-items-center justify-content-center text-center text-muted w-100 h-100 position-absolute" style="top:0; left:0; z-index: 10; background: white;">
                        <div class="p-4">
                            <i class="fas fa-microscope fa-4x mb-3 opacity-2 text-success"></i>
                            <p class="lead">Select a crop and symptoms to see the diagnosis results here.</p>
                            <div id="loadingSpinner" class="d-none mt-3">
                                <div class="spinner-border text-success mb-3" role="status"></div>
                                <p class="font-weight-bold">Analyzing Symptoms & Expert Records...</p>
                            </div>
                        </div>
                    </div>

                    <!-- Actual Result Card (Hidden by default) -->
                    <div id="resultCard" class="d-none h-100">
                        <div class="position-relative">
                            <img id="resImage" src="" alt="Pest Result" class="img-fluid w-100" 
                                 style="height: 250px; object-fit: cover;"
                                 onerror="this.src='https://images.unsplash.com/photo-1599940824399-b87987ceb72a?w=800&auto=format&fit=crop'">
                            <div class="bg-success text-white position-absolute px-3 py-1" style="top: 20px; left: 0; border-radius: 0 20px 20px 0;">
                                Detected Pest
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h3 id="resName" class="font-weight-bold text-success m-0">Pest Name</h3>
                                <button class="btn btn-sm btn-outline-success rounded-pill px-3" onclick="window.print()"><i class="fas fa-download mr-1"></i>Report</button>
                            </div>
                            
                            <div class="mb-4">
                                <h6 class="font-weight-bold text-dark mb-2"><i class="fas fa-exclamation-triangle mr-2 text-warning"></i>Damage Symptoms:</h6>
                                <p id="resSymptoms" class="text-muted small bg-light p-3 rounded">Loading symptoms...</p>
                            </div>

                            <h5 class="font-weight-bold text-success mb-3 border-bottom pb-2"><i class="fas fa-clipboard-list mr-2"></i>Management Advisory</h5>
                            
                            <div class="row no-gutters">
                                <div class="col-6 p-1">
                                    <div class="p-3 rounded h-100" style="background: #e3f2fd; border-left: 4px solid #2196f3;">
                                        <h6 class="font-weight-bold small text-primary"><i class="fas fa-shield-alt mr-1"></i>Prevention</h6>
                                        <p id="resPrevention" class="text-muted xx-small mb-0">Loading...</p>
                                    </div>
                                </div>
                                <div class="col-6 p-1">
                                    <div class="p-3 rounded h-100" style="background: #e8f5e9; border-left: 4px solid #4caf50;">
                                        <h6 class="font-weight-bold small text-success"><i class="fas fa-leaf mr-1"></i>Organic</h6>
                                        <p id="resOrganic" class="text-muted xx-small mb-0">Loading...</p>
                                    </div>
                                </div>
                                <div class="col-6 p-1">
                                    <div class="p-3 rounded h-100" style="background: #fff3e0; border-left: 4px solid #ff9800;">
                                        <h6 class="font-weight-bold small text-warning"><i class="fas fa-bug mr-1"></i>Biological</h6>
                                        <p id="resBiological" class="text-muted xx-small mb-0">Loading...</p>
                                    </div>
                                </div>
                                <div class="col-6 p-1">
                                    <div class="p-3 rounded h-100" style="background: #ffebee; border-left: 4px solid #f44336;">
                                        <h6 class="font-weight-bold small text-danger"><i class="fas fa-flask mr-1"></i>Chemical</h6>
                                        <p id="resChemical" class="text-muted xx-small mb-0">Loading...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.xx-small { font-size: 11px; line-height: 1.4; }
.opacity-2 { opacity: 0.2; }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const cropSelect = document.getElementById('cropSelect');
    const symptomGuide = document.getElementById('symptomGuide');
    const symptomBadges = document.getElementById('symptomBadges');
    const symptomInput = document.getElementById('symptomInput');
    const pestForm = document.getElementById('pestForm');
    const resultPlaceholder = document.getElementById('resultPlaceholder');
    const resultCard = document.getElementById('resultCard');

    const cropSymptoms = {
        '1': ['Dead hearts', 'Small holes in stem', 'Dried central shoots', 'Sawdust-like waste'], // Rice
        '2': ['Whorl damage', 'Ragged leaf edges', 'Large larvae visible', 'Yellowing'], // Maize
        '3': ['Square dropping', 'Boll damage', 'Sticky leaves', 'Reddening of leaves'] // Cotton
    };

    // Load Crops
    fetch('/api/crops')
        .then(res => res.json())
        .then(crops => {
            crops.forEach(crop => {
                const opt = document.createElement('option');
                opt.value = crop.id;
                opt.textContent = crop.name;
                cropSelect.appendChild(opt);
            });
        });

    // Handle Crop Change
    cropSelect.onchange = function() {
        const cropId = this.value;
        symptomBadges.innerHTML = '';
        
        if(cropSymptoms[cropId]) {
            symptomGuide.classList.remove('d-none');
            cropSymptoms[cropId].forEach(symptom => {
                const badge = document.createElement('span');
                badge.className = 'badge badge-pill p-2 mr-2 mb-2 pointer-cursor';
                badge.style.border = '1px solid #28a745';
                badge.style.setProperty('color', '#155724', 'important'); // Dark Green text
                badge.style.setProperty('background-color', '#ffffff', 'important');
                badge.style.cursor = 'pointer';
                badge.style.fontSize = '0.9rem';
                badge.style.fontWeight = 'bold';
                badge.style.display = 'inline-block';
                badge.innerText = symptom;
                
                badge.onclick = function() {
                    if(this.classList.contains('bg-success')) {
                        this.classList.remove('bg-success', 'text-white');
                        this.style.setProperty('color', '#155724', 'important');
                        this.style.setProperty('background-color', '#ffffff', 'important');
                    } else {
                        this.classList.add('bg-success', 'text-white');
                        this.style.setProperty('color', '#ffffff', 'important');
                        this.style.setProperty('background-color', '#28a745', 'important');
                    }
                    updateSymptomInput();
                };

                symptomBadges.appendChild(badge);
            });
        } else {
            symptomGuide.classList.add('d-none');
        }
    };

    function updateSymptomInput() {
        const selected = Array.from(symptomBadges.querySelectorAll('.bg-success'))
                             .map(b => b.textContent);
        symptomInput.value = selected.join(', ');
    }

    // Handle Form Submit
    pestForm.onsubmit = function(e) {
        e.preventDefault();
        
        const cropId = $('#cropSelect').val();
        const symptoms = $('#symptoms').val();

        if(!cropId) {
            alert('Please select a crop first!');
            return;
        }

        // AGGRESSIVE LOADING STATE
        $('#resultPlaceholder').html(`
            <div class="p-4 d-flex flex-column align-items-center justify-content-center h-100" style="min-height: 400px; background: white;">
                <div class="spinner-border text-success mb-3" style="width: 3rem; height: 3rem;" role="status"></div>
                <h5 class="font-weight-bold text-success">Expert AI Analyzing...</h5>
                <p class="text-muted">Fetching specialized advice for your crop.</p>
            </div>
        `).show().css('display', 'flex').removeClass('d-none');
        
        $('#resultCard').hide().addClass('d-none');

        $.ajax({
            url: '/api/identify-pest',
            method: 'POST',
            data: JSON.stringify({ crop_id: cropId, symptoms: symptoms }),
            contentType: 'application/json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(pest) {
                console.log('AI RESPONSE RECEIVED:', pest);
                
                if(pest && (pest.name || pest.id)) {
                    // FORCE HIDE LOADING
                    $('#resultPlaceholder').hide().addClass('d-none').attr('style', 'display: none !important');
                    
                    // UPDATE CONTENT
                    $('#resName').text(pest.name || 'Pest Identified');
                    $('#resSymptoms').text(pest.symptoms || 'Visible damage on foliage.');
                    
                    $('#resPrevention').text(pest.advisory?.prevention || 'Regular monitoring.');
                    $('#resOrganic').text(pest.advisory?.organic_control || 'Neem oil treatment.');
                    $('#resBiological').text(pest.advisory?.biological_control || 'Natural predators.');
                    $('#resChemical').text(pest.advisory?.chemical_control || 'Consult expert for dosage.');

                    const imgSrc = pest.image ? (pest.image.startsWith('http') ? pest.image : `/Img/${pest.image}`) : 'https://images.unsplash.com/photo-1599940824399-b87987ceb72a?w=800';
                    $('#resImage').attr('src', imgSrc);
                    
                    // FORCE SHOW RESULT
                    $('#resultCard').show().removeClass('d-none').attr('style', 'display: block !important');
                } else {
                    $('#resultPlaceholder').html('<div class="p-4 text-center"><i class="fas fa-search fa-3x mb-3 text-muted"></i><p>No match found. Try different symptoms.</p></div>').show();
                }
            },
            error: function(xhr) {
                $('#resultPlaceholder').html('<div class="p-4 text-center text-danger"><i class="fas fa-exclamation-triangle fa-3x mb-3"></i><p>Error: ' + xhr.statusText + '</p></div>').show();
            }
        });
    };
});
</script>

<!-- Farmers' Advisory Portal -->
<section id="AdvisoryPortal" class="section-padding bg-white">
    <div class="container">
        <div class="text-center mb-5 wow animated fadeIn">
            <h6 class="text-uppercase text-success font-weight-bold mb-2">Expert Knowledge</h6>
            <h2 class="display-4" style="font-family: 'Outfit', sans-serif;">Farmers' Advisory <span class="text-success">Portal</span></h2>
            <div class="heading-line"></div>
            <p class="text-muted">Stay ahead of infestations with our expert-curated seasonal guides.</p>
        </div>

        <div class="row">
            <!-- Advisory 1 -->
            <div class="col-lg-4 col-md-6 mb-4 wow animated fadeInUp">
                <div class="modern-card p-4 h-100 bg-light border-0 shadow-sm text-center">
                    <div class="bg-white p-4 rounded-circle mx-auto mb-4 shadow-sm" style="width: 100px; height: 100px; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-calendar-alt text-success fa-3x"></i>
                    </div>
                    <h5 class="font-weight-bold mb-3">Seasonal Monitoring</h5>
                    <p class="text-muted small mb-4">Learn which pests are most active during different seasons and how to set up effective field traps.</p>
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#seasonalModal" class="text-success font-weight-bold small">Read Seasonal Guide <i class="fas fa-arrow-right ml-1"></i></a>
                </div>
            </div>

            <!-- Advisory 2 -->
            <div class="col-lg-4 col-md-6 mb-4 wow animated fadeInUp" data-wow-delay="0.2s">
                <div class="modern-card p-4 h-100 bg-light border-0 shadow-sm text-center">
                    <div class="bg-white p-4 rounded-circle mx-auto mb-4 shadow-sm" style="width: 100px; height: 100px; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-vial text-success fa-3x"></i>
                    </div>
                    <h5 class="font-weight-bold mb-3">IPM Strategies</h5>
                    <p class="text-muted small mb-4">A comprehensive guide to Integrated Pest Management: Combining biological, physical, and chemical tools.</p>
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#ipmModal" class="text-success font-weight-bold small">Explore IPM <i class="fas fa-arrow-right ml-1"></i></a>
                </div>
            </div>

            <!-- Advisory 3 -->
            <div class="col-lg-4 col-md-6 mb-4 wow animated fadeInUp" data-wow-delay="0.4s">
                <div class="modern-card p-4 h-100 bg-light border-0 shadow-sm text-center">
                    <div class="bg-white p-4 rounded-circle mx-auto mb-4 shadow-sm" style="width: 100px; height: 100px; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-hand-holding-seedling text-success fa-3x"></i>
                    </div>
                    <h5 class="font-weight-bold mb-3">Soil & Immunity</h5>
                    <p class="text-muted small mb-4">Understanding how soil health impacts a plant's natural resistance to insect pests and diseases.</p>
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#soilModal" class="text-success font-weight-bold small">Boost Resilience <i class="fas fa-arrow-right ml-1"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Advisory Modals -->
<!-- Seasonal Modal -->
<div class="modal fade" id="seasonalModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content border-0 rounded-lg overflow-hidden">
            <div class="modal-header bg-success text-white border-0 py-4">
                <h5 class="modal-title font-weight-bold"><i class="fas fa-calendar-check mr-2"></i>Seasonal Pest Monitoring Guide</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body p-4">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="p-3 rounded bg-light border-left border-success" style="border-left-width: 4px !important;">
                            <h6 class="font-weight-bold text-success">Spring (March - May)</h6>
                            <p class="small text-muted mb-0">Monitor for early-season Aphids and Stem Borers. Use yellow sticky traps (10 per acre) to detect flying insect activity early.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="p-3 rounded bg-light border-left border-warning" style="border-left-width: 4px !important;">
                            <h6 class="font-weight-bold text-warning">Summer (June - Aug)</h6>
                            <p class="small text-muted mb-0">Peak activity for Fall Armyworm. Set pheromone traps in Maize fields and check the leaf whorls for sawdust-like waste twice a week.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="p-3 rounded bg-light border-left border-info" style="border-left-width: 4px !important;">
                            <h6 class="font-weight-bold text-info">Monsoon (Sept - Nov)</h6>
                            <p class="small text-muted mb-0">High humidity favors Leaf Rollers and sucking pests. Ensure proper drainage to reduce micro-climate humidity that attracts pests.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="p-3 rounded bg-light border-left border-primary" style="border-left-width: 4px !important;">
                            <h6 class="font-weight-bold text-primary">Winter (Dec - Feb)</h6>
                            <p class="small text-muted mb-0">Check for Mealybugs in perennial crops. Prune and destroy infested branches to prevent overwintering of pest eggs.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary rounded-pill px-4" data-dismiss="modal">Close Guide</button>
            </div>
        </div>
    </div>
</div>

<!-- IPM Modal -->
<div class="modal fade" id="ipmModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content border-0 rounded-lg overflow-hidden">
            <div class="modal-header bg-success text-white border-0 py-4">
                <h5 class="modal-title font-weight-bold"><i class="fas fa-vial mr-2"></i>Integrated Pest Management (IPM)</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body p-4">
                <div class="media mb-4">
                    <div class="bg-success-light p-3 rounded mr-3"><i class="fas fa-bug text-success"></i></div>
                    <div class="media-body">
                        <h6 class="font-weight-bold">Biological Control</h6>
                        <p class="small text-muted">Encourage natural predators like Ladybugs and Lacewings. Avoid broad-spectrum pesticides that kill these beneficial insects.</p>
                    </div>
                </div>
                <div class="media mb-4">
                    <div class="bg-warning-light p-3 rounded mr-3"><i class="fas fa-sticky-note text-warning"></i></div>
                    <div class="media-body">
                        <h6 class="font-weight-bold">Physical/Mechanical</h6>
                        <p class="small text-muted">Use light traps at night and pheromone traps during the day. Hand-picking of large larvae can be effective in small-scale farming.</p>
                    </div>
                </div>
                <div class="media mb-0">
                    <div class="bg-danger-light p-3 rounded mr-3"><i class="fas fa-flask text-danger"></i></div>
                    <div class="media-body">
                        <h6 class="font-weight-bold">Chemical (Last Resort)</h6>
                        <p class="small text-muted">Apply targeted pesticides only when the Economic Threshold Level (ETL) is reached. Always follow label dosages carefully.</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary rounded-pill px-4" data-dismiss="modal">Close Guide</button>
            </div>
        </div>
    </div>
</div>

<!-- Soil Modal -->
<div class="modal fade" id="soilModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content border-0 rounded-lg overflow-hidden">
            <div class="modal-header bg-success text-white border-0 py-4">
                <h5 class="modal-title font-weight-bold"><i class="fas fa-seedling mr-2"></i>Soil Health & Natural Immunity</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body p-4">
                <div class="p-4 rounded-lg shadow-inner bg-light mb-4">
                    <h6 class="font-weight-bold mb-3">The "Armor" Strategy</h6>
                    <p class="text-muted small mb-0">Plants grown in healthy, organic-rich soil have higher sap density (Brix level), which makes them less attractive to sap-sucking insects like Aphids and Whiteflies.</p>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <h6 class="font-weight-bold small text-success"><i class="fas fa-check-circle mr-1"></i>Silica Supplementation</h6>
                        <p class="xx-small text-muted">Rice husk ash is rich in silica. Adding it to soil strengthens cell walls, making it harder for chewing pests to penetrate the leaves.</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <h6 class="font-weight-bold small text-success"><i class="fas fa-check-circle mr-1"></i>Nitrogen Balance</h6>
                        <p class="xx-small text-muted">Excessive nitrogen leads to lush, watery growth that acts as a magnet for pests. Balanced fertilization is key to natural immunity.</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary rounded-pill px-4" data-dismiss="modal">Close Guide</button>
            </div>
        </div>
    </div>
</div>

<style>
.bg-success-light { background: #e8f5e9; }
.bg-warning-light { background: #fff3e0; }
.bg-danger-light { background: #ffebee; }
</style>

@php
$Products=App\Models\Products::where('status','=','1')->get();
@endphp
<!-- Products Starts Here -->
<section id="Products" align="center" class="px-5 wow animated fadeInUpBig fast" style=" font-family: 'Balsamiq Sans', cursive;">
  
    <h1 class="black-text" style="font-weight:bold;">PRODUCTS</h1> 
    <div align="center">
        <p  class="col-md-2" style=" border-bottom: 2px solid #003399;"></p>
    </div>
    <div  class="row my-4 px-4 "  style="width:100%;" >
      @foreach($Products as $item)
      <div class="col-md-3 px-4 my-5"  >
          <a href="{{url('Shop/'.$item->url)}}">
              <img src=" {{asset('Uploads/Products/'.$item->image1)}}" alt="" class="img-fluid"  >
              </a>
          <div class="py-2" style="background:white;">
            <span class="black-text my-3" style="font-weight:bold; font-family: 'Balsamiq Sans', cursive;">{{$item->name}}</span>
            <br>
            Price : ₹ {{$item->price}}<br>
              @if($item->rating==1)
                            <span class="fa fa-star checked"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star "></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                          @elseif($item->rating==2)
                          <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star "></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                            @elseif($item->rating==3)
                            <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                          
                            @elseif($item->rating==4)
                            <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star"></span>
                          
                            @else
                            <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                            @endif
                             
                            <br>
           
               <a href="Shop/{{$item->url}}" class="btn  btn-primary    "> Shop Now</a>
            
          </div>
      </div>  
     @endforeach

    </div>
   
    <hr class="col-md-6"> 
</section>
<!-- Products Ends Here --> 
<section  class="slideanim"  id="testimonialsdesktopmode" align="center" style="margin-top:-50px;" >
 
     @include('components.testimonialsdesktopmode') 
</section>
<section  class="slideanim"  id="testimonialsmobilemode" align="center"  style="margin-top:-70px;"  >
 
     @include('components.testimonialsmobilemode') 
</section>

<!-- Our Research Team -->
<section id="Team" class="section-padding bg-white">
    <div class="container text-center mb-5 wow animated fadeIn">
        <h6 class="text-uppercase text-success font-weight-bold mb-2">The Brains Behind</h6>
        <h2 class="display-4" style="font-family: 'Outfit', sans-serif;">Research <span class="text-success">Experts</span></h2>
        <div class="heading-line"></div>
    </div>
    <div id="teaminthedesktopmode" class="container" align="center" >
          @include('components.teamindesktopmode')
    </div>
    <div id="teaminthemobilemode" class="container"  align="center" >
          @include('components.teaminmobilemode')
    </div>
</section>

<!--Team Ends Here--><!-- Contact Section -->
<section id="contact" class="section-padding bg-light">
    <div class="container">
        <div class="text-center mb-5 wow animated fadeIn">
            <h6 class="text-uppercase text-success font-weight-bold mb-2">Get in Touch</h6>
            <h2 class="display-4" style="font-family: 'Outfit', sans-serif;">Contact <span class="text-success">Advisory</span></h2>
            <div class="heading-line"></div>
        </div>

        <div class="row wow animated fadeInUp">
            <div class="col-lg-5 mb-4 mb-lg-0">
                <div class="modern-card p-4 h-100 bg-white shadow-sm border">
                    <h4 class="mb-4 font-weight-bold text-success">Office Information</h4>
                    <div class="d-flex mb-4">
                        <div class="bg-light p-3 rounded-circle mr-3" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-map-marker-alt text-success"></i>
                        </div>
                        <div>
                            <h6 class="font-weight-bold mb-1">Our Location:</h6>
                            <p class="text-muted small mb-0">Phagwara, Punjab, India</p>
                        </div>
                    </div>
                    <div class="d-flex mb-4">
                        <div class="bg-light p-3 rounded-circle mr-3" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-envelope text-success"></i>
                        </div>
                        <div>
                            <h6 class="font-weight-bold mb-1">Email Address:</h6>
                            <p class="text-muted small mb-0">vaibhavchaudhary9912@gmail.com</p>
                        </div>
                    </div>
                    <div class="d-flex mb-4">
                        <div class="bg-light p-3 rounded-circle mr-3" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-phone-alt text-success"></i>
                        </div>
                        <div>
                            <h6 class="font-weight-bold mb-1">Call Support:</h6>
                            <p class="text-muted small mb-0">+91 95487 99715</p>
                        </div>
                    </div>
                    
                    <div class="mt-auto">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13627.5644747448!2d75.7674!3d31.2241!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a5a5747a703b5%3A0x2b3ef090d275e791!2sPhagwara%2C%20Punjab!5e0!3m2!1sen!2sin!4v1620000000000" frameborder="0" style="border:0; width: 100%; height: 200px; border-radius: 12px;" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="modern-card p-4 h-100 bg-white shadow-sm border">
                    <h4 class="mb-4 font-weight-bold text-success">Send a Message</h4>
                    <form action="send-email" method="post" class="modern-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="small font-weight-bold">Full Name</label>
                                <input type="text" name="name" class="form-control bg-light border-0 py-4" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="small font-weight-bold">Email Address</label>
                                <input type="email" name="email" class="form-control bg-light border-0 py-4" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="small font-weight-bold">Subject</label>
                            <input type="text" name="subject" class="form-control bg-light border-0 py-4" required>
                        </div>
                        <div class="mb-4">
                            <label class="small font-weight-bold">Message Details</label>
                            <textarea name="message" class="form-control bg-light border-0" rows="6" required></textarea>
                        </div>
                        <button type="submit" class="btn-modern btn btn-success btn-block py-3 shadow-sm">
                            <i class="fas fa-paper-plane mr-2"></i>Send Diagnostic Request
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>-> 
<p align="center" class="py-2"><br>
   <button class="btn btn-dark" data-toggle="modal" data-target="#modalSocial" >Subscribe to Our News Letter</button>
   </p>
   

<!--Modal: modalSocial-->
<div class="modal fade" id="modalSocial" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog cascading-modal" role="document">

    <!--Content-->
    <div class="modal-content">

      <!--Header-->
      <div class="modal-header  darken-3 white-text" style="background-color:#40BFD6;">
        <h4 class="title"><i class="fas fa-users"></i> Subscribe to Our Newsletter</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
      </div>

      <!--Body-->
      <div class="modal-body mb-0 text-center">
            <form method="POST" action="subscribe-news-letter">
                @csrf
                <input type="text" class="form-control"  name="name" placeholder="Your Name" required><br>
                <input type="email"  class="form-control"  name="email" placeholder="Your Email Id" required>
                <button class="btn" style="background-color:#40BFD6;">Submit</button>
            </form>
      </div>

    </div>
    <!--/.Content-->

  </div>
</div>
<!--Modal: modalSocial-->
  
  
   @if (session('status'))

        <script>
            $(document).ready(function () {

        $('#centralModalSuccess').modal('show');

        });
        </script>
@endif


@if($errors->any())

        <script>
            $(document).ready(function () {

        $('#centralModaldanger').modal('show');

        });
        </script>
@endif



 <!-- Central Modal Medium Success -->
 <div class="modal fade" id="centralModalSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
   aria-hidden="true">
   <div class="modal-dialog modal-notify modal-success" role="document">
     <!--Content-->
     <div class="modal-content">
       <!--Header-->
       <div class="modal-header">
         <p class="heading lead"> Success</p>

         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true" class="white-text">&times;</span>
         </button>
       </div>

       <!--Body-->
       <div class="modal-body">
         <div class="text-center">
           <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
           <p>{{session('status')}} </p>
         </div>
       </div>

       <!--Footer-->
       <div class="modal-footer justify-content-center">
         
         <a type="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">Close</a>
       </div>
     </div>
     <!--/.Content-->
   </div>
 </div>
 <!-- Central Modal Medium Success-->
 
 <!-- Central Modal Medium Danger -->
 <div class="modal fade" id="centralModaldanger" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
   aria-hidden="true">
   <div class="modal-dialog modal-notify modal-danger" role="document">
     <!--Content-->
     <div class="modal-content">
       <!--Header-->
       <div class="modal-header">
         <p class="heading lead"> Form Not Submitted </p>

         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true" class="white-text">&times;</span>
         </button>
       </div>

       <!--Body-->
       <div class="modal-body">
         <div class="text-center">
             
           <i class="fas fa-exclamation fa-4x mb-3 animated rotateIn"></i>
           <p>@if($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
@endif </p>
         </div>
       </div>

       <!--Footer-->
       <div class="modal-footer justify-content-center">
         
         <a type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">Close</a>
       </div>
     </div>
     <!--/.Content-->
   </div>
 </div>
 <!-- Central Modal Medium Danger-->
 
@endsection
  