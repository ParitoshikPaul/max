jQuery.noConflict();
jQuery(document).ready(function($){

	$('.panel-specialties').load('partials/specialties_panel.html');
	$('.footer').load('partials/footer.html');
	$('.nav-main').load('partials/nav_main.html');
	$('.section-services').load('partials/services.html');

	var currentLocation = window.location.href.split('/').slice(-1).pop().split('.')[0];
	var content, content, currentSpecialty;

	// $('.check-load').load(function(){
	// 	$('.container-preloader').addClass('preloader-hide');
	// 	$('html').removeClass('no-scroll');
	// });


	// ---- .. ---- .. ---- .. ---- .. ---- .. ----


	// <<---- Specialties Open/Close Begins ---->>

	$(document).on('click','.specialty-head',function(){
		$(this).parent().addClass('panel-specialties-collapse');
		$('.part-logo').removeClass('part-logo-space');
		$('.container-content').removeClass('container-content-space');
		$('.footer').removeClass('footer-space');
		$('.contact .overlay, .form-contact').removeClass('form-contact-space');
	});

	$(document).on('click','.part-specialties',function(){
		specialtyClick();
	});

	$(document).on('click','.nav-main',function(){
		specialtyClick();
	});

	$(document).on('click','.part',function(event){
		event.stopPropagation();
	});

	$('.point-down').click(function(){
		specialtyClick();
	});

	var specialtyClick = function() {

		var ops = function() {
			$('.panel-specialties').removeClass('panel-specialties-collapse');
			$('.part-logo').addClass('part-logo-space');
			$('.container-content').addClass('container-content-space');
			$('.footer').addClass('footer-space');
			$('.contact .overlay, .form-contact').addClass('form-contact-space');
			$('.part-logo').removeClass('part-logo-hide');
			if (currentLocation == 'index' || currentLocation == '') {
				$('.part-specialties').addClass('part-specialties-destroy');
			}
		}

		if ((currentLocation == 'index' || currentLocation == '') && $(window).scrollTop() == 0) {
			$('html,body').animate({ scrollTop: $(window).height() - $('.nav-main').height() },700,function(){
				ops();
			});
		}
		else {
			ops();
		}
	}


	// <<---- Specialties Open/Close Ends ---->>


	// ---- .. ---- .. ---- .. ---- .. ---- .. ----


	// <<---- Video Open/Close Begins ---->>

	$('.button-play').click(function(){
		$('.container-video').show();
		setTimeout(function(){
			$('.container-video').addClass('show');
		},100);
	});

	$('.container-video .close').click(function(){
		$('.video-banner').get(0).pause();
		$('.container-video').removeClass('show');
		setTimeout(function(){
			$('.container-video').hide();
		},1000);
	});

	$(document).keydown(function(event){
		if (event.keyCode == 27) {
			$('.video-banner').get(0).pause();
			$('.container-video').removeClass('show');
			setTimeout(function(){
				$('.container-video').hide();
			},1000);
		}
	});

	// <<---- Video Open/Close Ends ---->>


	// ---- .. ---- .. ---- .. ---- .. ---- .. ----


	// <<---- Populate Specialties Panel Begins ---->>


	var populateSpecialtiesPanel = function(data) {
		$.each(data, function(value){
			$('.wrapper-specialty').append('<li class="container-specialty specialty-'+this.panelName.split(' ')[0]+'"><div class="specialty-icon"><div class="table-icon"><div class="cell-icon"><img class="icon" src="'+this.img+'"></div></div></div><div class="specialty-name"><div class="table-name"><div class="cell-name">'+this.panelName+'</div></div></div><div class="specialty-pointer"><div class="cell-pointer"><div class="pointer-left"></div></div></div></li>');
		});

		// Add active State to Specialty

		if (currentLocation == 'specialties') {
			$('.wrapper-specialty li').each(function(){
				if ($(this).hasClass('specialty-'+localStorage.getItem("specialty"))) {
					$(this).addClass('container-specialty-active');
				}
			});
		}

		$('.panel-specialties .overlay-preloader').addClass('overlay-preloader-hide');
		setTimeout(function(){
			$('.panel-specialties .overlay-preloader').addClass('overlay-preloader-destroy');
		},1000);
	}


	// <<---- Populate Specialties Panel Ends ---->>


	// ---- .. ---- .. ---- .. ---- .. ---- .. ----


	// <<---- Navigation Bar Home Effects Begin ---->>


	if (currentLocation == 'index' || currentLocation == '') {
		$(window).scroll(function(){
			if ($(window).scrollTop() >= ($(window).height() - $('.nav-main').height()) && $(window).width() > 599) {
				$('.panel-specialties').removeClass('panel-specialties-collapse');
				$('.part-logo').removeClass('part-logo-hide');
				$('.container-content').addClass('container-content-space');
				$('.part-logo').addClass('part-logo-align');
				$('.part-logo').addClass('part-logo-space');
				$('.footer').addClass('footer-space');
				$('.part-specialties').addClass('part-specialties-destroy');
			}
			else {
				$('.panel-specialties').addClass('panel-specialties-collapse');
				$('.container-content').removeClass('container-content-space');
				$('.part-logo').removeClass('part-logo-space');
				$('.footer').removeClass('footer-space');
			}

			if ($(window).scrollTop() > 0) {
				$('.nav-main').removeClass('nav-main-transparent');
				$('.logo-banner').addClass('logo-banner-hide');
			}

			else if ($(window).scrollTop() == 0) {
				$('.nav-main').addClass('nav-main-transparent');
				$('.logo-banner').removeClass('logo-banner-hide');
				$('.part-logo').removeClass('part-logo-align');
				$('.part-specialties').removeClass('part-specialties-destroy');
			}
		});
}


	// <<---- Navigation Bar Home Effects End ---->>


	// ---- .. ---- .. ---- .. ---- .. ---- .. ----


	// <<---- Store Selected Treatment Begins ---->>


	$(document).on('click','.wrapper-specialty .container-specialty',function(){
		localStorage.setItem("specialty", $(this).find('.specialty-name .cell-name').html().split(' ')[0]);
		window.location = 'specialties.html';
	});


	// <<---- Store Selected Treatment Ends ---->>


	// ---- .. ---- .. ---- .. ---- .. ---- .. ----


	// <<---- Populate Specialty Page Begins ---->>


	var populateSpecialtyPage = function(data) {
		currentSpecialty = data;
		$('.part-mobile-specialty .icon-specialty').css('background-image','url('+data.img+')');
		$('.section-specialty .container-content').empty();
		$('.section-specialty .container-content').append('<h1 class="heading"><span>'+data.name+'</span></h1><p class="sub-heading">'+data.tag+'</p><p class="description">'+data.description+'</p><ul class="container-treatments"></ul>');
		$.each(data.treatments, function(){
			$('.section-specialty .container-treatments').append('<li class="treatment"><span class="treatment-name"><label>'+this.name+'</label></span><span class="expander"><div class="pointer"></div></span></li>')
		});
		if (data.teams) {
			$('.section-specialty .container-content').append('<ul class="container-doctors"><p class="sub-heading">Team That Cares</p></ul>');
			$.each(data.teams,function(index){
				$('.section-specialty .container-doctors').append('<li><p class="name">'+this.name+'</p><p class="designation">'+this.designation+'</p><p class="profile"><a href="'+this.profile+'" target="_blank">view profile</a></p></li>');
			});
		}

		if (data.testimonials) {
			$.each(data.testimonials, function(){
				$('.section-services .services').append('<a class="button-testimonial" href="'+this+'" target="_blank"><div class="container-play"><img src="img/home/icon-testimonial.svg"></div><label>Patient Testimonials</label></a>');
			});
		}
	}


	// <<---- Populate Specialty Page Ends ---->>


	$(document).on('click','.section-specialty .treatment',function(){
		localStorage.setItem("treatment",$(this).find('.treatment-name label').html().replace('&amp;','&'));
		populateTreatmentPage(localStorage.getItem('treatment'));
		$('.section-specialty').addClass('section-specialty-left');
		$('.section-treatment').addClass('section-treatment-left');
	});

	$(document).on('click','.section-treatment .button-back',function(){
		$('.section-specialty').removeClass('section-specialty-left');
		$('.section-treatment').removeClass('section-treatment-left');
	});

	var populateTreatmentPage = function(treatment) {
		var currentTreatment;

		// Empty treatment change dropdown
		$('.section-treatment .container-dd').empty();

		$.each(currentSpecialty.treatments, function(){
			if (this.name == treatment) {
				currentTreatment = this;
			}
			else {
				// Append treatments to treatment change drop down
				$('.section-treatment .container-dd').append('<li>'+this.name+'</li>');
			}
		});

		// var treatments = content.specialties[localStorage.getItem("specialty")]['treatments'];
		$('.section-treatment .heading span').html(treatment);
		$('.section-treatment .sub-heading').html('<div class="button-back"><span>Back</span> ></div>'+currentSpecialty.name);
		$('.section-treatment .description').html(currentTreatment.description);

		if (currentTreatment.points) {
			$('.section-treatment .container-content').append('<ul class="description-points"></ul>');

			$.each(currentTreatment.points, function(){
				$('.section-treatment .description-points').append('<li>'+this.description+'</li>');
			});
		}

		$('.section-treatment .container-treatments').empty();

		if (currentTreatment.fields) {
			$.each(currentTreatment.fields, function(){
				var className = this.name.split(' ')[0]
				$('.section-treatment .container-treatments').append('<li class="treatment"><span class="treatment-name treatment-name-selected"><label>'+this.name+'</label></span><span class="expander"><div class="icon-expand icon-collapse"></div></span></li>');
				$('.section-treatment .container-treatments').append('<div class="treatment-content treatment-content-open treatment-'+className+'"></div>');

				if (this.description) {
					$('.section-treatment .treatment-'+className).append('<p class="description">'+this.description+'</p>');
				}

				$('.section-treatment .treatment-'+className).append('<ul class="points"></ul>');

				if (this.points) {
					$.each(this.points, function(){
						$('.section-treatment .treatment-'+className+' .points').append('<li>'+this.description+'</li>');
					});
				}
			});

			$('.treatment').one('click',closeTreatment);
		}
	}


	// ---- .. ---- .. ---- .. ---- .. ---- .. ----


	// <<---- Treatment Accordian Expand/Collpase Begins ---->>

	var openTreatment = function(){
		$(this).find('.treatment-name').addClass('treatment-name-selected');
		$(this).find('.icon-expand').addClass('icon-collapse');
		$(this).next().addClass('treatment-content-open');
		$(this).one("click", closeTreatment);
	}

	var closeTreatment = function(){
		$(this).find('.treatment-name').removeClass('treatment-name-selected');
		$(this).find('.icon-expand').removeClass('icon-collapse');
		$(this).next().removeClass('treatment-content-open');
		$(this).one("click", openTreatment);
	}

	$('.treatment').one('click',closeTreatment);

	// <<---- Treatment Accordian Expand/Collpase Ends ---->>


	// ---- .. ---- .. ---- .. ---- .. ---- .. ----


	// <<---- Contact File Upload Name Begins ---->>

	var contactPageOps = function() {

		$(document).on('change','.field-file',function(){
			$(this).parent().parent().children('.filename').text((this.value).substring((this.value).lastIndexOf("\\") + 1));
		});

		var added = 1;

		$('.container-upload .button-add').click(function(){
			added++;
			$('.container-upload').append('<div class="wrapper-upload"><label class="wrapper-file-upload">Upload<input class="field field-file" type="file" name="uploads[]"></label><span class="filename"></span></div>');
			visibilityCheck();
		});

		$('.container-upload .button-remove').click(function(){
			$('.container-upload').children().last().remove();
			added--;
			visibilityCheck();
		});

		var visibilityCheck = function() {

			if (added > 1) {
				$('.container-upload .button-remove').css('display','table');
			}

			if (added == 1) {
				$('.container-upload .button-remove').css('display','none');
			}

			if (added == 10) {
				$('.container-upload .button-add').css('display','none');
				$('.container-upload .button-remove').css('left','3rem');
			}

			if (added < 10) {
				$('.container-upload .button-add').css('display','table');
				$('.container-upload .button-remove').css('left','6rem');
			}
		}

		$('.container-upload .button-reset').click(function(){
			added = 1;
			$('.container-upload .wrapper-upload').remove();
			$('.container-upload').append('<div class="wrapper-upload"><label class="wrapper-file-upload">Upload<input class="field field-file" type="file" name="uploads[]"></label><span class="filename"></span></div>');
			visibilityCheck();
		});

		$('.contact .table-thank-you .button-ok').click(function(){
			$('.contact .table-thank-you').addClass('table-thank-you-hide');
			setTimeout(function(){
				$('.contact .table-thank-you').addClass('table-thank-you-destroy');
			},1000);
		});

		$('.field-dob').datepicker({  maxDate: new Date() });

		$('.label-dob').click(function(){
			$('.field-dob').click();
		});

		$('.field-dob').change(function(){
			$('.label-dob').addClass('label-dob-active');
			$('.label-dob').text("Patient's Birth Date");
		});

	}

		// setTimeout(function(){
		// 	$('.contact .table-thank-you').removeClass('table-thank-you-destroy');
		// 	setTimeout(function(){
		// 		$('.contact .table-thank-you').removeClass('table-thank-you-hide');
		// 	},100);
		// },1000);

		// function enableSorry() {
		// 	$('.contact .table-thank-you .head-fail').removeClass('hide');
		// 	$('.contact .table-thank-you .description-fail').removeClass('hide');
		// 	$('.contact .table-thank-you .head-success').addClass('hide');
		// 	$('.contact .table-thank-you .description-success').addClass('hide');
		// }

		// function enableThankYou() {
		// 	$('.contact .table-thank-you .head-fail').addClass('hide');
		// 	$('.contact .table-thank-you .description-fail').addClass('hide');
		// 	$('.contact .table-thank-you .head-success').removeClass('hide');
		// 	$('.contact .table-thank-you .description-success').removeClass('hide');
		// }


	// <<---- Contact File Upload Name Ends ---->>


	// ---- .. ---- .. ---- .. ---- .. ---- .. ----


	// <<---- Treatment Drop Down Ops Begins ---->>


	$('.icon-dd').click(function(){
		$(this).parent().parent().toggleClass('heading-dd');
	});

	$(document).on('click','.section-treatment .container-dd li', function(){
		$('.section-treatment .heading').removeClass('heading-dd');
		localStorage.setItem("treatment",$(this).html().replace('&amp;','&'));
		populateTreatmentPage(localStorage.getItem('treatment'));
	});


	// <<---- Treatment Drop Down Ops Ends ---->>


	// ---- .. ---- .. ---- .. ---- .. ---- .. ----


	// <<---- Speciality Panel Compress Begins ---->>

	if (currentLocation != 'index' && currentLocation != '') {

		$('.panel-specialties').hover(
			function(){
				$('.panel-specialties').removeClass('panel-specialties-compress');
				$('.part-logo').addClass('part-logo-space');
				$('.container-content').addClass('container-content-space');
				$('.footer').addClass('footer-space');
			},
			function(){
				$('.panel-specialties').addClass('panel-specialties-compress');
				$('.part-logo').removeClass('part-logo-space');
				$('.container-content').removeClass('container-content-space');
				$('.footer').removeClass('footer-space');
			}
			);
	}


	// <<---- Speciality Panel Compress Ends ---->>


	$('.container-mobile-nav .option-specialties').click(function(){
		$('.panel-specialties').removeClass('panel-specialties-collapse');
	});

	$(document).on('click','.part-mobile-specialty',function(){
		specialtyClick();
	});

	if ($(window).width() < 759 && currentLocation == 'specialties') {
		$('.panel-specialties').addClass('panel-specialties-collapse');
	}

	$(document).on('click','.section-patient-services .container-dd li',function(){
		$('.heading').removeClass('heading-dd');
		$('.sub-heading').html($(this).html());
		$('.content-patient').addClass('content-patient-hide');
		var selected = $(this).html().split(' ')[0].toLowerCase();
		$('.patient-'+selected).removeClass('content-patient-hide');
	});

	var specialtiesResponsiveFix = function(){
		if ($(window).width() < 759) {
			$('.panel-specialties').addClass('panel-specialties-collapse');
		}
		else if ($(window).width() > 759 && currentLocation != 'index' && currentLocation != '') {
			$('.panel-specialties').removeClass('panel-specialties-collapse');
		}
	}
	specialtiesResponsiveFix();

	$(window).resize(function(){
		specialtiesResponsiveFix();
	});

	$(document).on('click','.second-opinion',function(){
		localStorage.setItem('radio-selected','0');
	});

	$(document).on('click','.get-quote',function(){
		localStorage.setItem('radio-selected','1');
	});

	// <<---- Prevent Page Scroll When Scrolling  Items Begins ---->>

	$('.panel-specialties')
	.mouseenter(function() {
		$('body').addClass('no-scroll');
	})
	.mouseleave(function(){
		$('body').removeClass('no-scroll');
	});

	$('.container-dd-cities, .container-dd')
	.mouseenter(function(event) {
		event.stopPropagation();
	})
	.mouseleave(function(event){
		event.stopPropagation();
	});

	// <<---- Prevent Page Scroll When Scrolling  Items Ends ---->>

	var citiSearchOps = function(){
		$('.city').click(function(){
			$('.field-city').val($(this).html()).addClass('field-active');
			$('.field-city').removeAttr('readonly');
		});

		$('.field-city').on('keyup paste click',function(){
			if ($(this).val()) {
				var text = $(this).val().toLowerCase();
				var length = $(this).val().length;

				$('.dd-cities li').hide();
				$('.dd-cities li').each(function(){
					var temp = $(this).html().toLowerCase().substring(0,length);
					if (temp && text == temp.substring(0,length)) {
						$(this).show();
					}
				});
			}
			else {
				$('.dd-cities li').show();
			}

			$('.div-city').addClass('field-active');
		});
	}

	var populateCities = function(){
		$('.dd-cities').empty();
		$.each(content.countries, function(){
			if (this.name.toLowerCase() == 'kenya') {
				$.each(this.cities, function(){
					$('.dd-cities').append('<li class="city">'+this.name+'</li>');
				});
			}
		});
		citiSearchOps();
	}

	var populateTestimonials = function(){

		var filterOps = function(){
			$('.testimonials .container-dd').empty();

			$('.testimonials .container-dd').append('<li class="selected"><label>All</label><div class="container-selected"><div class="circle"></div></div></li>');

			$.each(content.specialities, function(){
				$('.testimonials .container-dd').append('<li><label>'+this.name+'</label><div class="container-selected"><div class="circle"></div></div></li>');
			});

			$('.testimonials .heading').click(function(event){
				event.stopPropagation();
			});

			$('.testimonials .container-dd li').click(function(){
				$('.testimonials .heading').removeClass('heading-dd');
				$('.testimonials .container-dd li').removeClass('selected');
				$(this).addClass('selected');
				filter = $(this).find('label').text().toLowerCase();
				arrangeTestimonials();
			});

			$(document).click(function(){
				$('.testimonials .heading').removeClass('heading-dd');
			});
		}

		filterOps();

		var filter = "all";

		var appendTestimonials = function(testimonial,index){

			var step = index + 1;

			if (step == (bigStep + 3)) {
				bigStep = step;
				smallStep = 0;
			}

			if (testimonial.video) {
				$('.column-'+orientation[smallStep]).append('<div class="container-testimonial"><div class="wrapper-testimonial"><p class="name">'+testimonial.author+'</p><p class="treatment">'+testimonial.treatment+'</p><p class="line"></p><p class="description">'+testimonial.description+'</p><iframe src="'+testimonial.video+'"></iframe></div></div>');
			}

			else {
				$('.column-'+orientation[smallStep]).append('<div class="container-testimonial"><div class="wrapper-testimonial"><p class="name">'+testimonial.author+'</p><p class="treatment">'+testimonial.treatment+'</p><p class="line"></p><p class="description">'+testimonial.description+'</p></div></div>');
			}

			smallStep++;

			if (smallStepMobile == 2) {
				smallStepMobile = 0;
			}

			if (testimonial.video) {
				$('.column-mobile-'+orientationMobile[smallStepMobile]).append('<div class="container-testimonial"><div class="wrapper-testimonial"><p class="name">'+testimonial.author+'</p><p class="treatment">'+testimonial.treatment+'</p><p class="line"></p><p class="description">'+testimonial.description+'</p><iframe src="'+testimonial.video+'"></iframe></div></div>');
			}
			else {
				$('.column-mobile-'+orientationMobile[smallStepMobile]).append('<div class="container-testimonial"><div class="wrapper-testimonial"><p class="name">'+testimonial.author+'</p><p class="treatment">'+testimonial.treatment+'</p><p class="line"></p><p class="description">'+testimonial.description+'</p></div></div>');
			}

			smallStepMobile++;
		}

		var arrangeTestimonials = function(){
			$('.testimonials .column-testimonial').empty();

			var count = 0;
			bigStep = 1,
			smallStep = 0,
			smallStepMobile = 0,
			orientation = ["left","center","right"];
			orientationMobile = ["left","right"];

			$.each(content.testimonials, function(index){
				if (filter == 'all') {
					appendTestimonials(this,index);
				}

				else {
					if (this.specialty && this.specialty.toLowerCase() == filter){
						appendTestimonials(this,count);
						count++;
					}
				}
			});
		}

		arrangeTestimonials();
	}


	// <<---- Data Call Begins ---->>

	var dataCall = $.getJSON('json/newData.json',function(data){
		content = data;
	});

	dataCall.then(function(){
		populateSpecialtiesPanel(content.specialities);

		if (currentLocation == 'specialties') {
			$.each(content.specialities, function(){
				if (this.panelName.split(' ')[0] == localStorage.getItem("specialty"))
					populateSpecialtyPage(this);
			});
		}

		if (currentLocation == 'contact') {
			populateCities();
		}

		if (currentLocation == 'testimonials') {
			populateTestimonials();
		}

	})
	.then(function(){
		var specialtiesPanel = document.getElementById('specialtiesPanel');
		Ps.initialize(specialtiesPanel);

		$('.panel-specialties')
		.mouseenter(function() {
			Ps.update(specialtiesPanel);
		})
		.mouseleave(function(){
			Ps.update(specialtiesPanel);
		});
	});

	if (currentLocation == 'contact') {
		contactPageOps();
	}

	// <<---- Data Call Ends ---->>
});
