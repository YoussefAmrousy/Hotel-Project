<?php include "home.php";?>
<br><br>
<script src="https://cdn01.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn02.jotfor.ms/static/jotform.forms.js?3.3.33455" type="text/javascript"></script>
<script src="https://cdn03.jotfor.ms/js/vendor/jquery-1.8.0.min.js?v=3.3.33455" type="text/javascript"></script>
<script defer src="https://cdn01.jotfor.ms/js/vendor/maskedinput.min.js?v=3.3.33455" type="text/javascript"></script>
<script defer src="https://cdn02.jotfor.ms/js/vendor/jquery.maskedinput.min.js?v=3.3.33455" type="text/javascript"></script>
<script type="text/javascript">	JotForm.newDefaultTheme = true;
	JotForm.extendsNewTheme = false;
	JotForm.newPaymentUIForNewCreatedForms = true;
	JotForm.newPaymentUI = true;
	JotForm.clearFieldOnHide="disable";
	JotForm.submitError="jumpToFirstError";

	JotForm.init(function(){
	/*INIT-START*/

 JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"];
 JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
 JotForm.calendarOther = {"today":"Today"};
 var languageOptions = document.querySelectorAll('#langList li'); 
 for(var langIndex = 0; langIndex < languageOptions.length; langIndex++) { 
   languageOptions[langIndex].on('click', function(e) { setTimeout(function(){ JotForm.setCalendar("3", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); }, 0); });
 } 
 JotForm.onTranslationsFetch(function() { JotForm.setCalendar("3", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); });

 JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"];
 JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
 JotForm.calendarOther = {"today":"Today"};
 var languageOptions = document.querySelectorAll('#langList li'); 
 for(var langIndex = 0; langIndex < languageOptions.length; langIndex++) { 
   languageOptions[langIndex].on('click', function(e) { setTimeout(function(){ JotForm.setCalendar("4", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); }, 0); });
 } 
 JotForm.onTranslationsFetch(function() { JotForm.setCalendar("4", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); });

    $('input_35').rating({stars:'5',
    inputClassName:'form-textbox',
    imagePath: 'https://cdn.jotfor.ms/images/stars_v2.png',
    cleanFirst:true, value:''});
$('input_35').setAttribute('role','radiogroup');
$('input_35').setAttribute('aria-labelledby','label_35');

    Array.from($('input_35').children).map(function(e, i){e.setAttribute('tabindex',0);
    if(i<5) {e.setAttribute('aria-label',(i+1)+' out of 5');}
    e.setAttribute('role','radio');
    e.setAttribute('aria-describedby', 'label_35');
    e.classList.add('form-star-rating-star', 'Stars');
    e.onkeypress = function(k){if(k.keyCode == 13 || k.keyCode == 32)e.click()}});
if (window.JotForm && JotForm.accessible) $('input_39').setAttribute('tabindex',0);
      JotForm.setCustomHint( 'input_39', 'Type here...' );
      JotForm.alterTexts(undefined);
	/*INIT-END*/
	});

   JotForm.prepareCalculationsOnTheFly([null,{"name":"heading","qid":"1","text":"Hotel Evaluation Form","type":"control_head"},{"name":"submit2","qid":"2","text":"Submit","type":"control_button"},{"name":"date","qid":"3","text":"Check-in Date","type":"control_datetime"},{"name":"date4","qid":"4","text":"Check-out Date","type":"control_datetime"},{"name":"typeA","qid":"5","text":"Did you visit our hotel before?","type":"control_radio"},{"name":"name6","qid":"6","text":"Please select the ones that influenced your decision to stay our hotel","type":"control_checkbox"},{"name":"typeA7","qid":"7","text":"The check-in staff was polite.","type":"control_radio"},{"name":"input8","qid":"8","text":"Please rate how strongly you agree or disagree with each of the following statements.","type":"control_text"},{"name":"theCheckin","qid":"9","text":"Someone was available to assist with my luggage.","type":"control_radio"},{"name":"theCheckin10","qid":"10","text":"Room service was prompt.","type":"control_radio"},{"name":"theCheckin11","qid":"11","text":"The pool satisfied my expectations.","type":"control_radio"},{"name":"theCheckin12","qid":"12","text":"The fitness center satisfied my expectations.","type":"control_radio"},{"name":"theCheckin13","qid":"13","text":"I felt safe in the hotel.","type":"control_radio"},{"name":"clickTo","qid":"14","text":"Hotel Services","type":"control_collapse"},{"name":"clickTo15","qid":"15","text":"Your Room","type":"control_collapse"},{"name":"theHotel","qid":"16","text":"The room was very clean.","type":"control_radio"},{"name":"theHotel17","qid":"17","text":"The furniture was in good condition.","type":"control_radio"},{"name":"theHotel18","qid":"18","text":"The bed was comfortable.","type":"control_radio"},{"name":"theHotel19","qid":"19","text":"The lighting was sufficient.","type":"control_radio"},{"name":"theHotel20","qid":"20","text":"The temperature was appropriate.","type":"control_radio"},{"name":"theHotel21","qid":"21","text":"The TV had good reception.","type":"control_radio"},{"name":"theHotel22","qid":"22","text":"The room view satisfied my expectations.","type":"control_radio"},{"name":"theHotel23","qid":"23","text":"The room was quiet.","type":"control_radio"},{"name":"theHotel24","qid":"24","text":"Housekeeping kept the room in order.","type":"control_radio"},{"name":"clickTo25","qid":"25","text":"Restaurant","type":"control_collapse"},{"name":"housekeepingKept","qid":"26","text":"The restaurant was clean.","type":"control_radio"},{"name":"housekeepingKept27","qid":"27","text":"The price of the food was reasonable.","type":"control_radio"},{"name":"housekeepingKept28","qid":"28","text":"I like the foods on the menu.","type":"control_radio"},{"name":"housekeepingKept29","qid":"29","text":"food quality was good.","type":"control_radio"},{"name":"housekeepingKept30","qid":"30","text":"service quality was good.","type":"control_radio"},{"name":"housekeepingKept31","qid":"31","text":"The staff was polite.","type":"control_radio"},null,null,{"name":"clickTo34","qid":"34","text":"Ratings","type":"control_collapse"},{"name":"typeA35","qid":"35","text":"Please rate your stay overall","type":"control_rating"},null,{"name":"typeA37","qid":"37","text":"Please rate how likely will you stay with us again","type":"control_scale"},{"name":"pleaseRate","qid":"38","text":"How likely is it that you will recommend us to others?","type":"control_scale"},{"name":"typeA39","qid":"39","text":"Any Comments?","type":"control_textarea"}]);
   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,{"name":"heading","qid":"1","text":"Hotel Evaluation Form","type":"control_head"},{"name":"submit2","qid":"2","text":"Submit","type":"control_button"},{"name":"date","qid":"3","text":"Check-in Date","type":"control_datetime"},{"name":"date4","qid":"4","text":"Check-out Date","type":"control_datetime"},{"name":"typeA","qid":"5","text":"Did you visit our hotel before?","type":"control_radio"},{"name":"name6","qid":"6","text":"Please select the ones that influenced your decision to stay our hotel","type":"control_checkbox"},{"name":"typeA7","qid":"7","text":"The check-in staff was polite.","type":"control_radio"},{"name":"input8","qid":"8","text":"Please rate how strongly you agree or disagree with each of the following statements.","type":"control_text"},{"name":"theCheckin","qid":"9","text":"Someone was available to assist with my luggage.","type":"control_radio"},{"name":"theCheckin10","qid":"10","text":"Room service was prompt.","type":"control_radio"},{"name":"theCheckin11","qid":"11","text":"The pool satisfied my expectations.","type":"control_radio"},{"name":"theCheckin12","qid":"12","text":"The fitness center satisfied my expectations.","type":"control_radio"},{"name":"theCheckin13","qid":"13","text":"I felt safe in the hotel.","type":"control_radio"},{"name":"clickTo","qid":"14","text":"Hotel Services","type":"control_collapse"},{"name":"clickTo15","qid":"15","text":"Your Room","type":"control_collapse"},{"name":"theHotel","qid":"16","text":"The room was very clean.","type":"control_radio"},{"name":"theHotel17","qid":"17","text":"The furniture was in good condition.","type":"control_radio"},{"name":"theHotel18","qid":"18","text":"The bed was comfortable.","type":"control_radio"},{"name":"theHotel19","qid":"19","text":"The lighting was sufficient.","type":"control_radio"},{"name":"theHotel20","qid":"20","text":"The temperature was appropriate.","type":"control_radio"},{"name":"theHotel21","qid":"21","text":"The TV had good reception.","type":"control_radio"},{"name":"theHotel22","qid":"22","text":"The room view satisfied my expectations.","type":"control_radio"},{"name":"theHotel23","qid":"23","text":"The room was quiet.","type":"control_radio"},{"name":"theHotel24","qid":"24","text":"Housekeeping kept the room in order.","type":"control_radio"},{"name":"clickTo25","qid":"25","text":"Restaurant","type":"control_collapse"},{"name":"housekeepingKept","qid":"26","text":"The restaurant was clean.","type":"control_radio"},{"name":"housekeepingKept27","qid":"27","text":"The price of the food was reasonable.","type":"control_radio"},{"name":"housekeepingKept28","qid":"28","text":"I like the foods on the menu.","type":"control_radio"},{"name":"housekeepingKept29","qid":"29","text":"food quality was good.","type":"control_radio"},{"name":"housekeepingKept30","qid":"30","text":"service quality was good.","type":"control_radio"},{"name":"housekeepingKept31","qid":"31","text":"The staff was polite.","type":"control_radio"},null,null,{"name":"clickTo34","qid":"34","text":"Ratings","type":"control_collapse"},{"name":"typeA35","qid":"35","text":"Please rate your stay overall","type":"control_rating"},null,{"name":"typeA37","qid":"37","text":"Please rate how likely will you stay with us again","type":"control_scale"},{"name":"pleaseRate","qid":"38","text":"How likely is it that you will recommend us to others?","type":"control_scale"},{"name":"typeA39","qid":"39","text":"Any Comments?","type":"control_textarea"}]);}, 20); 
</script>
<style type="text/css">@media print{.form-section{display:inline!important}.form-pagebreak{display:none!important}.form-section-closed{height:auto!important}.page-section{position:initial!important}}</style>
<link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?themeRevisionID=5f7ed99c2c2c7240ba580251"/>
<link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/css/styles/payment/payment_styles.css?3.3.33455" />
<link type="text/css" rel="stylesheet" href="https://cdn03.jotfor.ms/css/styles/payment/payment_feature.css?3.3.33455" />
<style type="text/css" id="form-designer-style">
    /* Injected CSS Code */

  /*PREFERENCES STYLE*/
  /* NEW THEME STYLE */

  /* colors */

  .form-textbox, .form-textarea {
    color: undefined;
  }
  .rating-item input:hover+label {
    color: rgba(106, 27, 0, 0.75);
  }
  li[data-type=control_fileupload] .qq-upload-button,
  .until-text,
  .form-submit-reset {
    color: rgba(106, 27, 0, 0.75);
  }

  .stageEmpty.isSmall{
    color: rgba(106, 27, 0, 0.75);
  }

  .rating-item label {
    color: rgba(106, 27, 0, 0.75);
  }
  .currentDate,
  .pickerItem select,
  .appointmentCalendar .calendarDay,
  .calendar.popup th,
  .calendar.popup table tbody td,
  .calendar-new-header>*,
  .form-collapse-table {
    color: #6A1B00;
  }
  .appointmentCalendar .dayOfWeek {
    color: #6A1B00;
  }
  .appointmentSlotsContainer > * {
    color: rgba(106, 27, 0, 0.75);
  }
  li[data-type=control_fileupload] .jfUpload-heading,
  ::placeholder,
  .form-dropdown.is-active,
  .form-dropdown:first-child,
  .form-spinner-input {
    color: #FB6F41;
  }
  .appointmentCalendar .calendarWeek .calendarDay.isUnavailable,
  .calendar tr.days td.otherDay,
  .calendar tr.days td:hover:not(.unselectable) {
    color: #FB6F41;
  }
  span.form-sub-label, label.form-sub-label, div.form-header-group .form-subHeader,
  .rating-item-title.for-to > label:first-child,
  .rating-item-title.for-from > label:first-child,
  .rating-item-title .editor-container * {
    color: #6A1B00;
  }
  .form-pagebreak-back{
    color: #FFFFFF;
  }
  .rating-item input:checked+label,
  .rating-item input:focus+label {
    color: #FFFFFF;
  }
  .clear-pad-btn {
    color: #FFFFFF;
  }
  .form-textbox::placeholder,
  .form-dropdown:not(.time-dropdown):not(:required),
  .form-dropdown:not(:required),
  .form-dropdown:required:invalid {
    color: #FB6F41;
  }
  /* border-colors */
  .form-dropdown,
  .form-textarea,
  .form-textbox,
  li[data-type=control_fileupload] .qq-upload-button,
  .rating-item label,
  .rating-item input:focus+label,
  .rating-item input:checked+label,
  .jf-form-buttons,
  .form-checkbox+label:before, .form-checkbox+span:before, .form-radio+label:before, .form-radio+span:before,
  .signature-pad-passive,
  .signature-wrapper,
  .appointmentCalendarContainer,
  .appointmentField .timezonePickerName,
  .appointmentDayPickerButton,
  .appointmentCalendarContainer .monthYearPicker .pickerItem+.pickerItem,
  .appointmentCalendarContainer .monthYearPicker,
  .appointmentCalendar .calendarDay.isActive .calendarDayEach, .appointmentCalendar .calendarDay.isToday .calendarDayEach, .appointmentCalendar .calendarDay:not(.empty):hover .calendarDayEach,
  .calendar.popup:before,
  .calendar-new-month,
  .form-matrix-column-headers, .form-matrix-table td, .form-matrix-table td:last-child,
  .form-matrix-table th, .form-matrix-table th:last-child, .form-matrix-table tr:last-child td, .form-matrix-table tr:last-child th, .form-matrix-table tr:not([role=group])+tr[role=group] th,
  .form-matrix-headers.form-matrix-column-headers,
  .isSelected .form-matrix-column-headers:nth-last-of-type(2),
  li[data-type=control_inline] input[type=email], li[data-type=control_inline] input[type=number],
  li[data-type=control_inline] input[type=tel], li[data-type=control_inline] input[type=text],
  .stageEmpty.isSmall {
    border-color: rgba(106, 27, 0, 0.75);
  }
  .rating-item input:hover+label {
    border-color: rgba(106, 27, 0, 0.75);
  }
  .appointmentSlot,
  .form-checkbox:checked+label:before, .form-checkbox:checked+span:before, .form-checkbox:checked+span label:before,
  .form-radio:checked+label:before, .form-radio:checked+span:before,
  .form-dropdown:focus, .form-textarea:focus, .form-textbox:focus, .signature-wrapper:focus,
  .form-line[data-payment="true"] .form-product-item .p_checkbox .checked,
  .form-dropdown:hover, .form-textarea:hover, .form-textbox:hover, .signature-wrapper:hover {
    border-color: rgba(106, 27, 0, 0.75);
  }

  .calendar tr.days td:hover:not(.unselectable):after {
    border-color: #FB6F41;
  }
  .form-header-group,
  .form-buttons-wrapper, .form-pagebreak, .form-submit-clear-wrapper,
  .form-pagebreak-next,
  .form-pagebreak-back,
  .form-checkbox:hover+label:before, .form-checkbox:hover+span:before, .form-radio:hover+label:before, .form-radio:hover+span:before,
  .divider {
    border-color: #FB6F41;
  }
  .form-pagebreak-back:focus, .form-pagebreak-next:focus, .form-submit-button:focus {
    border-color: rgba(106, 27, 0, 1);
  }
  /* background-colors */
  .form-line-active {
    background-color: #FFEFBC;
  }
  .form-line-error {
    background-color: #FFD6D6;
  }
  .form-matrix-column-headers, .form-matrix-row-headers,
  .form-spinner-button-container>*,
  .form-collapse-table,
  .form-collapse-table:hover,
  .appointmentDayPickerButton {
    background-color: #FB6F41;
  }
  .calendar.popup, .calendar.popup table,
  .calendar.popup table tbody td:after{
    background-color: #FFDF79;
  }

  .appointmentCalendar .calendarDay.isActive .calendarDayEach,
  .appointmentFieldRow.forSelectedDate,
  .calendar.popup tr.days td.selected:after,
  .calendar.popup:after,
  .submit-button,
  .form-checkbox:checked+label:before, .form-checkbox:checked+span:before, .form-checkbox:checked+span label:before,
  .form-radio+label:after, .form-radio+span:after,
  .rating-item input:checked+label,
  .appointmentCalendar .calendarDay:after,
  .form-line[data-payment="true"] .form-product-item .p_checkbox .checked,
  .rating-item input:focus+label {
    background-color: #C43100;
  }
  .appointmentSlot.active {
    background-color: #C43100 !important;
  }
  .clear-pad-btn,
  .appointmentCalendar .dayOfWeek,
  .calendar.popup th {
    background-color: #FB6F41 !important;
  }
  .appointmentField .timezonePicker:hover+.timezonePickerName,
  .form-spinner-button-container>*:hover {
    background-color: #E19880;
  }
  .form-matrix-values,
  .form-matrix-values,
  .signature-wrapper,
  .signature-pad-passive,
  .rating-item label,
  .form-checkbox+label:before, .form-checkbox+span:before,
  .form-radio+label:before, .form-radio+span:before {
    background-color: #FFFFFF;
  }
  li[data-type=control_fileupload] .qq-upload-button {
    background-color: #FFFFFF;
  }
  .JotFormBuilder .appContainer #app li.form-line[data-type=control_matrix].isSelected
  .questionLine-editButton.forRemove:after, 
  .JotFormBuilder .appContainer #app li.form-line[data-type=control_matrix].isSelected .questionLine-editButton.forRemove:before {
    background-color: #FFFFFF;
  }
  .appointmentCalendarContainer, .appointmentSlot,
  .rating-item-title.for-to > label:first-child,
  .rating-item-title.for-from > label:first-child,
  .rating-item-title .editor-container *,
  .calendar-opened {
    background-color: transparent;
  }
  .page-section li.form-line-active[data-type="control_button"] {
    background-color: #FFEFBC;
  }
  .appointmentCalendar .calendarDay.isSelected:after {
    color: #FFFFFF;
  }
  /* shadow */
  .form-dropdown:hover, .form-textarea:hover, .form-textbox:hover, .signature-wrapper:hover,
  .calendar.popup:before,
  .jSignature:hover,
  li[data-type=control_fileupload] .qq-upload-button-hover,
  .form-line[data-payment="true"] .form-product-item .p_checkbox .checked,
  .form-line[data-payment="true"] .form-product-item .p_checkbox:hover .select_border,
  .form-checkbox:hover+label:before, .form-checkbox:hover+span:before, .form-radio:hover+label:before, .form-radio:hover+span:before,
  .calendar.popup:before {
    border-color: rgba(106, 27, 0, 0.5);
    box-shadow: 0 0 0 2px rgba(106, 27, 0, 0.25);
  }
  .form-dropdown:focus, .form-textarea:focus, .form-textbox:focus, .signature-wrapper:focus,
  li[data-type=control_fileupload] .qq-upload-button-focus,
  .form-checkbox:focus+label:before, .form-checkbox:focus+span:before, .form-radio:focus+label:before, .form-radio:focus+span:before,
  .calendar.popup:before {
    border-color: rgba(106, 27, 0, 1);
    box-shadow: 0 0 0 3px rgba(106, 27, 0, 0.25);
  }
  .calendar.popup table tbody td{
    box-shadow: none;
  }

  /* button colors */
  .submit-button {
    background-color: #370F01;
    border-color: #370F01;
  }
  .submit-button:hover {
    background-color: #210901;
    border-color: #210901;
  }
  .form-pagebreak-next {
    background-color: #FB6F41;
  }
  .form-pagebreak-back {
    background-color: #FB6F41;
  }
  .form-pagebreak-back:hover {
    background-color: #974327;
    border-color: #974327;
  }
  .form-pagebreak-next:hover {
    background-color: #974327;
    border-color: #974327;
  }
  .form-sacl-button, .form-submit-print {
    background-color: transparent;
    color: rgba(106, 27, 0, 0.75);
    border-color: rgba(106, 27, 0, 0.75);
  }
  .form-sacl-button:hover, .form-submit-print:hover,
  .appointmentSlot:not(.disabled):not(.active):hover,
  .appointmentDayPickerButton:hover,
  .rating-item input:hover+label {
    background-color: #E19880;
  }

  /* payment styles */
  
  .form-line[data-payment=true] .form-textbox,
  .form-line[data-payment=true] .select-area,
  .form-line[data-payment=true] #coupon-input,
  .form-line[data-payment=true] #coupon-container input,
  .form-line[data-payment=true] input#productSearch-input,
  .form-line[data-payment=true] .form-product-category-item:after,
  .form-line[data-payment=true] .filter-container .dropdown-container .select-content,
  .form-line[data-payment=true] .form-textbox.form-product-custom_quantity,
  .form-line[data-payment="true"] .form-product-item .p_checkbox .select_border,
  .form-line[data-payment="true"] .form-product-item .form-product-container .form-sub-label-container span.select_cont,
  .form-line[data-payment=true] select.form-dropdown,
  .form-line[data-payment=true] #payment-category-dropdown .select-area,
  .form-line[data-payment=true] #payment-sorting-products-dropdown .select-area,
  .form-line[data-payment=true] .dropdown-container .select-content {
    border-color: rgba(106, 27, 0, 0.75);
    border-color: rgba(106,27,0,.4);
  }
  .form-line[data-payment="true"] hr,
  .form-line[data-payment=true] .p_item_separator,
  .form-line[data-payment="true"] .payment_footer.new_ui,
  .form-line.card-3col .form-product-item.new_ui,
  .form-line.card-2col .form-product-item.new_ui {
    border-color: rgba(106, 27, 0, 0.75);
    border-color: rgba(106,27,0,.2);
  }
  .form-line[data-payment=true] .form-product-category-item {
    border-color: rgba(106, 27, 0, 0.75);
    border-color: rgba(106,27,0,.3);
  }
  .form-line[data-payment=true] #coupon-input,
  .form-line[data-payment=true] .form-textbox.form-product-custom_quantity,
  .form-line[data-payment=true] input#productSearch-input,
  .form-line[data-payment=true] .select-area,
  .form-line[data-payment=true] .custom_quantity,
  .form-line[data-payment=true] .filter-container .select-content,
  .form-line[data-payment=true] .p_checkbox .select_border,
  .form-line[data-payment=true] #payment-category-dropdown .select-area,
  .form-line[data-payment=true] #payment-sorting-products-dropdown .select-area,
  .form-line[data-payment=true] .dropdown-container .select-content {
    background-color: #FFFFFF;
  }
  .form-line[data-payment=true] .form-product-category-item.title_collapsed.has_selected_product .selected-items-icon {
   background-color: rgba(106,27,0,.7);
   border-color: rgba(106,27,0,.7);
  }
  .form-line[data-payment=true].form-line.card-3col .form-product-item,
  .form-line[data-payment=true].form-line.card-2col .form-product-item {
   background-color: rgba(0,0,0,.05);
  }
  .form-line[data-payment=true] .payment-form-table input.form-textbox,
  .form-line[data-payment=true] .payment-form-table input.form-dropdown,
  .form-line[data-payment=true] .payment-form-table .form-sub-label-container > div,
  .form-line[data-payment=true] .payment-form-table span.form-sub-label-container iframe,
  .form-line[data-type=control_square] .payment-form-table span.form-sub-label-container iframe {
    border-color: rgba(106, 27, 0, 0.75);
  }

  /* icons */
  .appointmentField .timezonePickerName:before {
    background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTYiIGhlaWdodD0iMTYiIHZpZXdCb3g9IjAgMCAxNiAxNiIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0wIDcuOTYwMkMwIDMuNTY2MTcgMy41NTgyMSAwIDcuOTUyMjQgMEMxMi4zNTQyIDAgMTUuOTIwNCAzLjU2NjE3IDE1LjkyMDQgNy45NjAyQzE1LjkyMDQgMTIuMzU0MiAxMi4zNTQyIDE1LjkyMDQgNy45NTIyNCAxNS45MjA0QzMuNTU4MjEgMTUuOTIwNCAwIDEyLjM1NDIgMCA3Ljk2MDJaTTEuNTkzNzUgNy45NjAyQzEuNTkzNzUgMTEuNDc4NiA0LjQ0MzUgMTQuMzI4NCA3Ljk2MTkxIDE0LjMyODRDMTEuNDgwMyAxNC4zMjg0IDE0LjMzMDEgMTEuNDc4NiAxNC4zMzAxIDcuOTYwMkMxNC4zMzAxIDQuNDQxNzkgMTEuNDgwMyAxLjU5MjA0IDcuOTYxOTEgMS41OTIwNEM0LjQ0MzUgMS41OTIwNCAxLjU5Mzc1IDQuNDQxNzkgMS41OTM3NSA3Ljk2MDJaIiBmaWxsPSIjNkExQjAwIi8+CjxwYXRoIGQ9Ik04LjM1ODA5IDMuOTc5OThINy4xNjQwNlY4Ljc1NjFMMTEuMzQzMiAxMS4yNjM2TDExLjk0MDIgMTAuMjg0NUw4LjM1ODA5IDguMTU5MDhWMy45Nzk5OFoiIGZpbGw9IiM2QTFCMDAiLz4KPC9zdmc+Cg==);
  }
  .appointmentCalendarContainer .monthYearPicker .pickerArrow.prev:after {
    background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAiIGhlaWdodD0iNiIgdmlld0JveD0iMCAwIDEwIDYiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGQ9Ik04LjU5NzgyIDUuMzM2NjRDOC45MzMxMiA1LjY0MDE4IDkuNDM5MzkgNS42MzM2IDkuNzU2MTMgNS4zMTY2OUMxMC4wODEzIDQuOTkxMzYgMTAuMDgxMyA0LjQ2MzU0IDkuNzU2MTMgNC4xMzgyMUM5LjYwOTA0IDQuMDAwMjYgOS42MDkwMyA0LjAwMDI2IDkuMDg5NDkgMy41MTUwOUM4LjQzNzQyIDIuOTA2MDkgOC40Mzc0MyAyLjkwNjA5IDcuNjU1MTEgMi4xNzU0N0M2LjA4OTU2IDAuNzEzMzUzIDYuMDg5NTYgMC43MTMzNTIgNS41Njc3MyAwLjIyNjAwN0M1LjI0MTA0IC0wLjA3MDYwMDUgNC43NTA4NSAtMC4wNjk1OTY3IDQuNDMyMzUgMC4yMjU4MzVMMC4yNjI1NCA0LjExODE1Qy0wLjA4MDU0NTkgNC40NTkzNiAtMC4wODcxNzExIDQuOTg3ODggMC4yNDE0NjggNS4zMTY2OUMwLjU1OTU1OCA1LjYzNDk2IDEuMDY5NzUgNS42NDA1OSAxLjM5NzAzIDUuMzM2NTNMNC45OTg5MSAxLjk3NTIyTDguNTk3ODIgNS4zMzY2NFoiIGZpbGw9IiM2QTFCMDAiLz4KPC9zdmc+Cg==);
  }
  .appointmentCalendarContainer .monthYearPicker .pickerArrow.next:after {
    background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAiIGhlaWdodD0iNiIgdmlld0JveD0iMCAwIDEwIDYiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGQ9Ik0xLjQwMjE4IDAuMjI2OTE1QzEuMDY2ODcgLTAuMDc2Njg0OSAwLjU2MDYwMiAtMC4wNzAwODQ5IDAuMjQzODY5IDAuMjQ2ODE1Qy0wLjA4MTI4OTggMC41NzIxMTUgLTAuMDgxMjg5OCAxLjEwMDAyIDAuMjQzODY5IDEuNDI1MzJDMC4zOTA5NTYgMS41NjMyMiAwLjM5MDk2NiAxLjU2MzIyIDAuOTEwNTEgMi4wNDg0MkMxLjU2MjU3IDIuNjU3NDIgMS41NjI1NiAyLjY1NzQxIDIuMzQ0ODggMy4zODgwMkMzLjkxMDQ0IDQuODUwMTEgMy45MTA0MyA0Ljg1MDEyIDQuNDMyMjcgNS4zMzc1MkM0Ljc1ODk1IDUuNjM0MTIgNS4yNDkxNSA1LjYzMzEyIDUuNTY3NjQgNS4zMzc3Mkw5LjczNzQ2IDEuNDQ1NDJDMTAuMDgwNSAxLjEwNDEyIDEwLjA4NzEgMC41NzU2MTUgOS43NTg1MyAwLjI0NjgxNUM5LjQ0MDQ0IC0wLjA3MTQ4NDkgOC45MzAyNCAtMC4wNzcwODQ5IDguNjAyOTcgMC4yMjcwMTVMNS4wMDEwOCAzLjU4ODMyTDEuNDAyMTggMC4yMjY5MTVaIiBmaWxsPSIjNkExQjAwIi8+Cjwvc3ZnPgo=);
  }
  .appointmentField .timezonePickerName:after {
    background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAiIGhlaWdodD0iNiIgdmlld0JveD0iMCAwIDEwIDYiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGQ9Ik0xIDFMNSA1TDkgMSIgc3Ryb2tlPSIjNkExQjAwIiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIvPgo8L3N2Zz4K);
    width: 11px;
  }
  li[data-type=control_datetime] [data-wrapper-react=true].extended>div+.form-sub-label-container .form-textbox:placeholder-shown,
  li[data-type=control_datetime] [data-wrapper-react=true]:not(.extended) .form-textbox:not(.time-dropdown):placeholder-shown,
  .appointmentCalendarContainer .currentDate {
    background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTciIGhlaWdodD0iMTYiIHZpZXdCb3g9IjAgMCAxNyAxNiIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE1Ljk0ODkgNVYxNS4wMjZDMTUuOTQ4OSAxNS41NjM5IDE1LjUwMjYgMTYgMTQuOTUyMSAxNkgwLjk5NjgwNUMwLjQ0NjI4NSAxNiAwIDE1LjU2MzkgMCAxNS4wMjZWNUgxNS45NDg5Wk00LjE5MjQ1IDExLjQxNjdIMi4zNzQ3NEwyLjI4NTE1IDExLjQyNDdDMi4xMTA3OCAxMS40NTY1IDEuOTY4MDEgMTEuNTc5MiAxLjkwNzUyIDExLjc0MjJMMS44ODQzNyAxMS44MjY4TDEuODc2MzQgMTEuOTE2N1YxMy42NjY3TDEuODg0MzcgMTMuNzU2NUMxLjkxNjAyIDEzLjkzMTUgMi4wMzg0IDE0LjA3NDcgMi4yMDA4MyAxNC4xMzU0TDIuMjg1MTUgMTQuMTU4NkwyLjM3NDc0IDE0LjE2NjdINC4xOTI0NUw0LjI4MjAzIDE0LjE1ODZDNC40NTY0MSAxNC4xMjY5IDQuNTk5MTggMTQuMDA0MSA0LjY1OTY3IDEzLjg0MTFMNC42ODI4MiAxMy43NTY1TDQuNjkwODUgMTMuNjY2N1YxMS45MTY3TDQuNjgyODIgMTEuODI2OEM0LjY1MTE3IDExLjY1MTkgNC41Mjg3OSAxMS41MDg2IDQuMzY2MzUgMTEuNDQ3OUw0LjI4MjAzIDExLjQyNDdMNC4xOTI0NSAxMS40MTY3Wk04Ljg4MzI5IDExLjQxNjdINy4wNjU1OUw2Ljk3NiAxMS40MjQ3QzYuODAxNjIgMTEuNDU2NSA2LjY1ODg1IDExLjU3OTIgNi41OTgzNyAxMS43NDIyTDYuNTc1MjIgMTEuODI2OEw2LjU2NzE5IDExLjkxNjdWMTMuNjY2N0w2LjU3NTIyIDEzLjc1NjVDNi42MDY4NyAxMy45MzE1IDYuNzI5MjUgMTQuMDc0NyA2Ljg5MTY4IDE0LjEzNTRMNi45NzYgMTQuMTU4Nkw3LjA2NTU5IDE0LjE2NjdIOC44ODMyOUw4Ljk3Mjg4IDE0LjE1ODZDOS4xNDcyNiAxNC4xMjY5IDkuMjkwMDMgMTQuMDA0MSA5LjM1MDUxIDEzLjg0MTFMOS4zNzM2NyAxMy43NTY1TDkuMzgxNyAxMy42NjY3VjExLjkxNjdMOS4zNzM2NyAxMS44MjY4QzkuMzQyMDIgMTEuNjUxOSA5LjIxOTY0IDExLjUwODYgOS4wNTcyIDExLjQ0NzlMOC45NzI4OCAxMS40MjQ3TDguODgzMjkgMTEuNDE2N1pNNC4xOTI0NSA2LjgzMzMzSDIuMzc0NzRMMi4yODUxNSA2Ljg0MTM5QzIuMTEwNzggNi44NzMxNCAxLjk2ODAxIDYuOTk1OTEgMS45MDc1MiA3LjE1ODg3TDEuODg0MzcgNy4yNDM0NkwxLjg3NjM0IDcuMzMzMzNWOS4wODMzM0wxLjg4NDM3IDkuMTczMjFDMS45MTYwMiA5LjM0ODE1IDIuMDM4NCA5LjQ5MTM3IDIuMjAwODMgOS41NTIwNUwyLjI4NTE1IDkuNTc1MjhMMi4zNzQ3NCA5LjU4MzMzSDQuMTkyNDVMNC4yODIwMyA5LjU3NTI4QzQuNDU2NDEgOS41NDM1MyA0LjU5OTE4IDkuNDIwNzUgNC42NTk2NyA5LjI1NzhMNC42ODI4MiA5LjE3MzIxTDQuNjkwODUgOS4wODMzM1Y3LjMzMzMzTDQuNjgyODIgNy4yNDM0NkM0LjY1MTE3IDcuMDY4NTIgNC41Mjg3OSA2LjkyNTI5IDQuMzY2MzUgNi44NjQ2MUw0LjI4MjAzIDYuODQxMzlMNC4xOTI0NSA2LjgzMzMzWk04Ljg4MzI5IDYuODMzMzNINy4wNjU1OUw2Ljk3NiA2Ljg0MTM5QzYuODAxNjIgNi44NzMxNCA2LjY1ODg1IDYuOTk1OTEgNi41OTgzNyA3LjE1ODg3TDYuNTc1MjIgNy4yNDM0Nkw2LjU2NzE5IDcuMzMzMzNWOS4wODMzM0w2LjU3NTIyIDkuMTczMjFDNi42MDY4NyA5LjM0ODE1IDYuNzI5MjUgOS40OTEzNyA2Ljg5MTY4IDkuNTUyMDVMNi45NzYgOS41NzUyOEw3LjA2NTU5IDkuNTgzMzNIOC44ODMyOUw4Ljk3Mjg4IDkuNTc1MjhDOS4xNDcyNiA5LjU0MzUzIDkuMjkwMDMgOS40MjA3NSA5LjM1MDUxIDkuMjU3OEw5LjM3MzY3IDkuMTczMjFMOS4zODE3IDkuMDgzMzNWNy4zMzMzM0w5LjM3MzY3IDcuMjQzNDZDOS4zNDIwMiA3LjA2ODUyIDkuMjE5NjQgNi45MjUyOSA5LjA1NzIgNi44NjQ2MUw4Ljk3Mjg4IDYuODQxMzlMOC44ODMyOSA2LjgzMzMzWk0xMy41NzQxIDYuODMzMzNIMTEuNzU2NEwxMS42NjY4IDYuODQxMzlDMTEuNDkyNSA2Ljg3MzE0IDExLjM0OTcgNi45OTU5MSAxMS4yODkyIDcuMTU4ODdMMTEuMjY2MSA3LjI0MzQ2TDExLjI1OCA3LjMzMzMzVjkuMDgzMzNMMTEuMjY2MSA5LjE3MzIxQzExLjI5NzcgOS4zNDgxNSAxMS40MjAxIDkuNDkxMzcgMTEuNTgyNSA5LjU1MjA1TDExLjY2NjggOS41NzUyOEwxMS43NTY0IDkuNTgzMzNIMTMuNTc0MUwxMy42NjM3IDkuNTc1MjhDMTMuODM4MSA5LjU0MzUzIDEzLjk4MDkgOS40MjA3NSAxNC4wNDE0IDkuMjU3OEwxNC4wNjQ1IDkuMTczMjFMMTQuMDcyNSA5LjA4MzMzVjcuMzMzMzNMMTQuMDY0NSA3LjI0MzQ2QzE0LjAzMjkgNy4wNjg1MiAxMy45MTA1IDYuOTI1MjkgMTMuNzQ4IDYuODY0NjFMMTMuNjYzNyA2Ljg0MTM5TDEzLjU3NDEgNi44MzMzM1oiIGZpbGw9IiNGQjZGNDEiLz4KPHBhdGggZD0iTTEzLjA1NDIgMS4xMjVIMTUuMDQ3OEMxNS41OTgzIDEuMTI1IDE2LjA0NDYgMS42MDA3IDE2LjA0NDYgMi4xODc1VjRIMC4wOTU3MDMxVjIuMTg3NUMwLjA5NTcwMzEgMS42MDA3IDAuNTQxOTg4IDEuMTI1IDEuMDkyNTEgMS4xMjVIMy4wODYxMlYxLjA2MjVDMy4wODYxMiAwLjQ3NTY5NyAzLjUzMjQgMCA0LjA4MjkyIDBDNC42MzM0NCAwIDUuMDc5NzMgMC40NzU2OTcgNS4wNzk3MyAxLjA2MjVWMS4xMjVIMTEuMDYwNlYxLjA2MjVDMTEuMDYwNiAwLjQ3NTY5NyAxMS41MDY4IDAgMTIuMDU3NCAwQzEyLjYwNzkgMCAxMy4wNTQyIDAuNDc1Njk3IDEzLjA1NDIgMS4wNjI1VjEuMTI1WiIgZmlsbD0iI0ZCNkY0MSIvPgo8L3N2Zz4K);
  }
  .form-star-rating-star.Stars {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKAAAAAeCAYAAACrDxUoAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAA11SURBVHgBzZx9bBvlHce/Z8eO26b00rI2IcnilL4ApY0LY01L6RxA6wvSyAQtTJpw2jGpZZv6gqbxV21PG0LaBMmAUsa6ujAJrak0ikShf6B6tJQUCjjpQIUCcZuEptDUl9cmaezb73fJE+zkLrHPjsNXOl1yzvn3u+c+z/eetwtgUluLUP2bIngwRZrq+N+HHLYVompbEY79ugguTJE6V62q7r5zjekykGBCWwvgvN7pbLraoaAnopTtbUMYWRTHz58tN/X39aG3ty/r8UUOM21oGlCB/kFMSQ4EX9P1xU7n5ZZw8IVWVCLLilRUOG03FDep3d0Y7FTK8uvrw0hRFpiQZIWvYqMHdz+6AxYrvMiyOP6t5S7cXlExJfFFDvOnATdNx5TkwO5L7uFcsNKNRSvd7q3FcCPLskhWn23Detge2girxWqqDFIGkGv+nBKnp2JTNSof3Y5p18nVfAxZEseSZ8mepQTgHT+ugCPXkdX4Ioc8CzzzHcBiAtAmIes5EHxejs+6b5cXkprdSsDuZy0s9Ng2bIB90yZIeTOr+RhSVMoACvebU+xk+LLugsL9Zskych2OKXFB4X4zrIBdyr4LsvvNs8E51z70+8IpcEHhflJhAcGXZ9oFUwKQazmVt+Z+Qtl0QRGf3U8o2y4ochDuw8q2C7L7LZ2ReCybLshOJ0mS5n5CZl0wJQCH3K9acz+hOBfcgUlWvPsJxbngpMcXOTB87H5CcS446TkI95tnTzyeTReMdz8h4YIWS05KZZA0gKLmb3h8bCXTXFDO9+yQIWOSJOKvXuMe85nmgo5pkxo/PofR7sNiF7RTu3Cyc9BzP6FsuKBwv9wtW8Z8xi5oyZvpibjdSZdB0gDquZ+Q5oJbtssD0yfPAfTcT0hzwRUrJjW+yGG0+wmxCy6ehknNwcj9hLLhgnruJzTkgg/KloHBpMvAcBxQq+0SXFTopVBRNrvEuX1H3TFdAFlXOxU8+dPluNISDtC3hmKDaIhGobz0LUIwodHxZ82St//ikWpdAFk8Jrj/73vR0aFkJL5eDjMs2H5vvj6ALB4TfLMd6Ikh7RzYSXsINqsVLouF2pYSSgnyqnvyIefnDP3NV32AurYajzyzf+S8c+8FUbOxUlFVBOnmNtA+RJvi6EOoRoGCFKW16Ww2V86gWhqTUGYtKNg+/blndQFk8Zhgj2cz1LaLAUmVQoNWNCAWU/JPntQtA4lH0a1Ruki6UEq0lI65qNBlAk0uWuLS3K2E9svW3W8In1B7SxiNbx2mfRNaPmnAleawdozEhRCm7z1PBdlEN+awGLg1in+dLMvz5hUgN9eBeQUFWLj4JkP4hDoUBec+O8sQ4lJbm7bvVJRx44+XAwEn59uG3E2mm16SawyfUE8UaO4HemkfGQS6oxqQE5aBTUUVQ8axaXPaOD7Fmp0zFJNyQYlD6+yMSA9AcR9aPwmhme5BC+3ZHIb3CtWREFUmheGMxRCkHIJ8TuSOVS7YqAxgcdFnpSok2qsygSZbFyzQ3M2yaBFsd91lCJ9Q7GIbBo8fp/1FxM6dQ4zuhUrHVKqU1EQIUw7nLSqaBtXBw9JjRYgsW1slk3VjTkkpBHTTr8tcU4YvnpwR7c3n8TnV0Majryl7WpHPn3F8gkv+YalTA2wuQ0ePVIfDgUzpm2EYGdAL58MM6Uh8kUOxHTIPa4ibTu25hJudrkZgpO2bASqTAcSXwccU31VMgDPwedbkYhsBaKReArF1GMiGt15Dfd2BkRw6V62O5Ny1WrbedhssBBhDh7yZkGbmIVMSMDKg0Y8+IkhPKDlU62oJDm/FJo8G3mSomKDmjS+8vi7Ahw6MfEjxCQ4vt+8yCV285pKD8tZHj+kzjaHE+MM5kEt5eWzPnkHo4sWPTd74Md3Uh4QcyCBrI1Hsv90+scOmIzYVbieyGRzy7tSuW3xGadXG2i55Hdy+y8scdPGyLFyobfyYvnbkCMc8YP2gE8HF/W3Sp8Gj7h/d/zBsuZMDAcNHbRO0fBryU617Qhzn+LdYu6WmL79w37zkVuTk5GAyxPC9+koA31xqS4gvclhKlf1iP9yldPnWSYKQ4Xs7Qm4YRUIOp7sQWpaH860DqOIOxrQku4bsqljgQvm6KiQrhq/mwUq0t4b9e1rgE8efar4Q/MOMPCl66n237d57INntmAwxfL2//R2i577wzzp54gmtvsVDuKRyXcadMAG+uIsWiodw/o0LMu6ECfDpxBc5CAhvsA89gjOpBPh0chAQNvehqjA3OQhTBdAIPqEECCtWZNwJR8Hn42Mjhi8gbDx62M0XlCkI+aKf/+V6Q/ji4zOE1D5zc4cjUxByu6/u1X+NC198DgxhC0HIHY5MQchtv6BiDJ8QQ7h8Fhou9GFdoR2OiSBMBcAR+L4Ob6Ycaoz+bgTC48fdtjVrMgYht/2u7no8AT5WQouDb8Ct1EFiCJetvR/TZ+UjHbU3N6F249249NXZCW++iL8sty9jEDJ87HxX2i8nFV/k4MoghAzf2wRfZwxJ5XC6E2epEhyl+A9PBGGyAHLH468/W4nO9rbNe5ppiGgCaRDmz84YhAwfO1/s/IUE+FhjmrzxEJYThNNMQnhlGD4juzdSpiAU8FEHJ6X4IodMQCjg60kSPqGPutCWDITJAMjwPfPQ3crVLmVbMvAJZQrCEfguto2Bj6V7aVxYNJZU+/KuLTCrN572pwxffHwCp/bI66/BrN59J2gKvvgcCJza9zphWmd6UodP6KVWhOjcSm43pqMXf/VzGguNVKYCnxADE73YVnv1T0/CrAb2/dMQPpZx3VYR4M6DWbV82oBr/TBPEMXnzoNZ8dhfWvGHcxiIwbTYodLJgSGkzovCHRiz4kFp/h6YVAyxgNrdBbOK8tjftZhhGRgCqNL0z+wJZj7GEw9o2+zm31Xg+BPNfIynH9CAdjrxRQ55aYzL8YB2OjnwVCCNS8rpjE3y7FU6y8SsqtVpKSiEWVlp3M9qMy4DQwClGNw8eGxWJbdo55r+Ao7PsyJmxdN36cQXOfDMhFnJQ0Oa6eTglNMcFi1eUs7LxNwwKVVS3ZaFC2BWfK5K03uGnxt9QK5fzsmb1ZwSJ2Kq+ZrH8ecWmAeQ3TOd+CKHdADgWY10cpBobjo/TQCLliznnXkjkFBuXbQQZmUpLKRyVJ2Gn+sd3OHUlsnIhosPaFa9tyOibfyznopuoZpnQfkOE09REX+8RzC3D8drI7J7WiRz8eNzGO8RzG2z8dpn/AjmHGBSdPN/MhGAE7XT5xSXplcJVMjSOEbAg8u8GcmyYCFDZlgGugBSmco0EO3SewQzdIf8u/D7JbMjvL1CPWUe7xsNIjvgtJmyk78LKYrPyXU4XPN0HsEM3dtH30LtX56K8MY95Y7I2JvA8DpyHabiixyo7aXrQAzdh1Tmh76Fwlt959Aig9GaMbSowGl2kSoVqWw0N8wLEbiXzQs7dq8sQ/3BA7p/x3O/ZiuBtrA0L8/F7bgxuRF0fbXPomvteoW3vj8/CZU6fqNl0d4Zmek0WqSqC2B/H8bAx+Dx0MruO2+MHNtX47f3YH4sitvqDwX8u1fOV0dAjBND2GtLvfZx/NHtPwbv3f8G8eKztZHTH9SPxD/TGPLvfa5G1UBUEkFkCM3EFzmMfvwyeHzTX78M5bOr4BzKKIflX/XDf7gd0AORAeoxmQM58Jg26KVrgBarA+EuGqbh1SzftoQrX95VHdQDUTOC62RzlWBw0DW6/cfg9e/bj54HNikDBw/6Y/acslhscPnAkTf93Q9shB6I2vKtngGnXghdg+e2h5iKY/CO7fsbgv+oUXs7lVoqdP+e7xY28t5HvazAe3UB77n6oGfFxmqpYuMjdOFlWk+45ZMQk5zSMADHFwPQDN6Hp+px+v16lX42jN/YEPJeOB/2LF3mksTKae4JX7rUlnJ8kYPofTJ4n/UCZ2m7poJz8Onl8GUffASI9sKSWDnNj2FlqCecUg6PFVEFsH63OofBO9OtLeXiNYW+PV9/t5pmb4u2pi+4FeHql3dWe48843Nu2OkDr3BiMYRNl0POVHOwRFUXuZf2M4M38O86XKs7iFhXdy2B58s/eSKhDCIVFQH1jSO+6Mcfe3LWb4D9vvXgxzc7aOzc57ploA8g9b6KqQ3HjjcMXoBq+h+N3v4fPr55azTsf+Npn/dUXcCzYadXKrm5HKdMNIA5Pj9+2fGGwUsyvuI//k7QS67ouXONW+Ke8P8azTXAOQd2H3Y8Ak8l8JLJgd+M8zVG4aNHpPbuiNmeMA8B8QzMCHjXwItJ/S98bTyPu7dVG2wObJWGQKyvCzj5PRGzRkCNUCc7IDseg6d2dQWisajf6D8gDB/nN+N80X37fINvHvHYt2wZtyesO8L02A00ci9hN11wUJWo0IdqWNLSlrJb4eUXeOjXWnpM7Ezl/KmOn8EcfHE57Ejl/G0lqLKr+A+Br/C6PXs3alJdUq/99wQV3ut/6HReaQ5XP9+KA6mc37FqNefvJXqCURUE3olgKufzcn5+h4RfYuL1hjQbknwZbHWm/45rOm+ITXX870MO/HJRJt6yS+efF5n5bwdjvmOct+T+D013y1vzlcVlAAAAAElFTkSuQmCC) !important;
  }
  .signature-pad-passive, .signature-placeholder:after {
    background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTk4IiBoZWlnaHQ9IjQwIiB2aWV3Qm94PSIwIDAgMTk4IDQwIiBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8cGF0aCBkPSJNNzQuMTA0NCA2LjM0NTA4SDc1LjU4NTlDNzUuNTQxMiA0LjcxNDQgNzQuMDk5NCAzLjUzMTE2IDcyLjAzMTIgMy41MzExNkM2OS45ODc5IDMuNTMxMTYgNjguNDIxOSA0LjY5OTQ4IDY4LjQyMTkgNi40NTQ0NkM2OC40MjE5IDcuODcxMzYgNjkuNDM2MSA4LjcwMTYyIDcxLjA3MTcgOS4xNDQwOUw3Mi4yNzQ5IDkuNDcyMjFDNzMuMzYzNiA5Ljc2MDU2IDc0LjIwMzggMTAuMTE4NSA3NC4yMDM4IDExLjAyMzNDNzQuMjAzOCAxMi4wMTc3IDczLjI1NDMgMTIuNjczOSA3MS45NDY3IDEyLjY3MzlDNzAuNzYzNSAxMi42NzM5IDY5Ljc3OTEgMTIuMTQ2OSA2OS42ODk2IDExLjAzODNINjguMTQ4NEM2OC4yNDc5IDEyLjg4MjcgNjkuNjc0NyAxNC4wMjEyIDcxLjk1NjcgMTQuMDIxMkM3NC4zNDggMTQuMDIxMiA3NS43MjUxIDEyLjc2MzQgNzUuNzI1MSAxMS4wMzgzQzc1LjcyNTEgOS4yMDM3NSA3NC4wODk1IDguNDkyODEgNzIuNzk2OSA4LjE3NDYzTDcxLjgwMjYgNy45MTYxQzcxLjAwNzEgNy43MTIyNyA2OS45NDgyIDcuMzM5NCA2OS45NTMxIDYuMzY0OTdDNjkuOTUzMSA1LjQ5OTkxIDcwLjc0MzYgNC44NTg1OCA3MS45OTY0IDQuODU4NThDNzMuMTY0OCA0Ljg1ODU4IDczLjk5NSA1LjQwNTQ1IDc0LjEwNDQgNi4zNDUwOFoiIGZpbGw9IiNGQjZGNDEiLz4KPHBhdGggZD0iTTc3LjQ0MTYgMTMuODUyMkg3OC45MjgxVjYuMjE1ODJINzcuNDQxNlYxMy44NTIyWk03OC4xOTIzIDUuMDM3NTVDNzguNzA0NCA1LjAzNzU1IDc5LjEzMTkgNC42Mzk4MyA3OS4xMzE5IDQuMTUyNjFDNzkuMTMxOSAzLjY2NTM5IDc4LjcwNDQgMy4yNjI3IDc4LjE5MjMgMy4yNjI3Qzc3LjY3NTIgMy4yNjI3IDc3LjI1MjcgMy42NjUzOSA3Ny4yNTI3IDQuMTUyNjFDNzcuMjUyNyA0LjYzOTgzIDc3LjY3NTIgNS4wMzc1NSA3OC4xOTIzIDUuMDM3NTVaIiBmaWxsPSIjRkI2RjQxIi8+CjxwYXRoIGQ9Ik04NC4xMjk2IDE2Ljg2Qzg2LjA3MzUgMTYuODYgODcuNTc0OSAxNS45NzAxIDg3LjU3NDkgMTQuMDIxMlY2LjIxNTgySDg2LjExODNWNy40NTM3NUg4Ni4wMDg5Qzg1Ljc0NTQgNi45ODE0NSA4NS4yMTg0IDYuMTE2MzkgODMuNzk2NSA2LjExNjM5QzgxLjk1MjEgNi4xMTYzOSA4MC41OTQ4IDcuNTczMDYgODAuNTk0OCAxMC4wMDQyQzgwLjU5NDggMTIuNDQwMyA4MS45ODE5IDEzLjczNzggODMuNzg2NiAxMy43Mzc4Qzg1LjE4ODYgMTMuNzM3OCA4NS43MzA1IDEyLjk0NzQgODUuOTk4OSAxMi40NjAxSDg2LjA5MzRWMTMuOTYxNkM4Ni4wOTM0IDE1LjEzOTggODUuMjczMSAxNS42NjE4IDg0LjE0NDUgMTUuNjYxOEM4Mi45MDY2IDE1LjY2MTggODIuNDI0NCAxNS4wNDA0IDgyLjE2MDkgMTQuNjE3OEw4MC44ODMyIDE1LjE0NDhDODEuMjg1OSAxNi4wNjQ1IDgyLjMwNSAxNi44NiA4NC4xMjk2IDE2Ljg2Wk04NC4xMTQ3IDEyLjUwNDlDODIuNzg3MyAxMi41MDQ5IDgyLjA5NjIgMTEuNDg1NyA4Mi4wOTYyIDkuOTg0MjlDODIuMDk2MiA4LjUxNzY3IDgyLjc3MjQgNy4zNzkxNyA4NC4xMTQ3IDcuMzc5MTdDODUuNDEyMyA3LjM3OTE3IDg2LjEwODMgOC40MzgxMiA4Ni4xMDgzIDkuOTg0MjlDODYuMTA4MyAxMS41NjAzIDg1LjM5NzQgMTIuNTA0OSA4NC4xMTQ3IDEyLjUwNDlaIiBmaWxsPSIjRkI2RjQxIi8+CjxwYXRoIGQ9Ik05MS4wNTUgOS4zMTgwOUM5MS4wNTUgOC4xMDAwNSA5MS44MDA4IDcuNDA0MDMgOTIuODM0OSA3LjQwNDAzQzkzLjg0NDEgNy40MDQwMyA5NC40NTU2IDguMDY1MjUgOTQuNDU1NiA5LjE3MzkyVjEzLjg1MjJIOTUuOTQyMVY4Ljk5NDk0Qzk1Ljk0MjEgNy4xMDU3NCA5NC45MDMxIDYuMTE2MzkgOTMuMzQyIDYuMTE2MzlDOTIuMTkzNSA2LjExNjM5IDkxLjQ0MjggNi42NDgzNSA5MS4wODk4IDcuNDU4NzJIOTAuOTk1NFY2LjIxNTgySDg5LjU2ODVWMTMuODUyMkg5MS4wNTVWOS4zMTgwOVoiIGZpbGw9IiNGQjZGNDEiLz4KPHBhdGggZD0iTTEwMS43NiAxMy44NTIySDEwMy4yOTZWOS40MTI1NUgxMDguMzcyVjEzLjg1MjJIMTA5LjkxNFYzLjY3MDM3SDEwOC4zNzJWOC4wOTUwOEgxMDMuMjk2VjMuNjcwMzdIMTAxLjc2VjEzLjg1MjJaIiBmaWxsPSIjRkI2RjQxIi8+CjxwYXRoIGQ9Ik0xMTUuMzIzIDE0LjAwNjNDMTE2Ljk4OCAxNC4wMDYzIDExOC4xNjYgMTMuMTg2IDExOC41MDQgMTEuOTQzMUwxMTcuMDk3IDExLjY4OTVDMTE2LjgyOSAxMi40MTA0IDExNi4xODMgMTIuNzc4MyAxMTUuMzM4IDEyLjc3ODNDMTE0LjA2NSAxMi43NzgzIDExMy4yMSAxMS45NTMgMTEzLjE3IDEwLjQ4MTRIMTE4LjU5OVY5Ljk1NDQ2QzExOC41OTkgNy4xOTUyMiAxMTYuOTQ4IDYuMTE2MzkgMTE1LjIxOCA2LjExNjM5QzExMy4wOSA2LjExNjM5IDExMS42ODggNy43MzcxMyAxMTEuNjg4IDEwLjA4MzdDMTExLjY4OCAxMi40NTUyIDExMy4wNyAxNC4wMDYzIDExNS4zMjMgMTQuMDA2M1pNMTEzLjE3NSA5LjM2NzgxQzExMy4yMzUgOC4yODQgMTE0LjAyIDcuMzQ0MzcgMTE1LjIyOCA3LjM0NDM3QzExNi4zODIgNy4zNDQzNyAxMTcuMTM3IDguMTk5NDkgMTE3LjE0MiA5LjM2NzgxSDExMy4xNzVaIiBmaWxsPSIjRkI2RjQxIi8+CjxwYXRoIGQ9Ik0xMjAuMjQ4IDEzLjg1MjJIMTIxLjczNVY5LjE4ODgzQzEyMS43MzUgOC4xODk1NCAxMjIuNTA1IDcuNDY4NjYgMTIzLjU1OSA3LjQ2ODY2QzEyMy44NjggNy40Njg2NiAxMjQuMjE2IDcuNTIzMzUgMTI0LjMzNSA3LjU1ODE1VjYuMTM2MjdDMTI0LjE4NiA2LjExNjM5IDEyMy44OTIgNi4xMDE0NyAxMjMuNzAzIDYuMTAxNDdDMTIyLjgwOSA2LjEwMTQ3IDEyMi4wNDMgNi42MDg1OCAxMjEuNzY1IDcuNDI4ODlIMTIxLjY4NVY2LjIxNTgySDEyMC4yNDhWMTMuODUyMloiIGZpbGw9IiNGQjZGNDEiLz4KPHBhdGggZD0iTTEyOC42MzkgMTQuMDA2M0MxMzAuMzA1IDE0LjAwNjMgMTMxLjQ4MyAxMy4xODYgMTMxLjgyMSAxMS45NDMxTDEzMC40MTQgMTEuNjg5NUMxMzAuMTQ1IDEyLjQxMDQgMTI5LjQ5OSAxMi43NzgzIDEyOC42NTQgMTIuNzc4M0MxMjcuMzgxIDEyLjc3ODMgMTI2LjUyNiAxMS45NTMgMTI2LjQ4NiAxMC40ODE0SDEzMS45MTVWOS45NTQ0NkMxMzEuOTE1IDcuMTk1MjIgMTMwLjI2NSA2LjExNjM5IDEyOC41MzUgNi4xMTYzOUMxMjYuNDA3IDYuMTE2MzkgMTI1LjAwNSA3LjczNzEzIDEyNS4wMDUgMTAuMDgzN0MxMjUuMDA1IDEyLjQ1NTIgMTI2LjM4NyAxNC4wMDYzIDEyOC42MzkgMTQuMDA2M1pNMTI2LjQ5MSA5LjM2NzgxQzEyNi41NTEgOC4yODQgMTI3LjMzNiA3LjM0NDM3IDEyOC41NDUgNy4zNDQzN0MxMjkuNjk4IDcuMzQ0MzcgMTMwLjQ1NCA4LjE5OTQ5IDEzMC40NTkgOS4zNjc4MUgxMjYuNDkxWiIgZmlsbD0iI0ZCNkY0MSIvPgo8cGF0aCBkPSJNMSAzNi4wMjI5QzEyLjI0NjEgMzkuMjIwNSAyMy4xODIgMzUuMDMyOCAzMi41MDg0IDI4Ljg1MTFDMzcuNDQwNCAyNS41ODIyIDQyLjMzNDEgMjEuNjY4NyA0NS4zMzI5IDE2LjUxMDFDNDYuNTI4MyAxNC40NTM5IDQ3Ljk4OTMgMTAuODg0NCA0NC4yMjcxIDEwLjg1MjhDNDAuMTMzNyAxMC44MTgzIDM3LjA4NjQgMTQuNTE0MiAzNS41NTg4IDE3Ljg3NDRDMzMuMzY4MSAyMi42OTMzIDMzLjI5MSAyOC40MDA0IDM1Ljk2NTYgMzMuMDQ0MUMzOC40OTcxIDM3LjQzOTYgNDIuNzQ0NSAzOS41MTg0IDQ3LjgxMTQgMzguNjYzOUM1My4xMDM3IDM3Ljc3MTMgNTcuNzMwNCAzNC4xNTYyIDYxLjU3NjUgMzAuNjc4NUM2Mi45OTMgMjkuMzk3NiA2NC4zMjA5IDI4LjA0NzUgNjUuNTQyIDI2LjU4NTdDNjUuNjg0MiAyNi40MTU1IDY2LjE4NDIgMjUuNTc5OCA2Ni41MDggMjUuNTIxOEM2Ni42Mjg0IDI1LjUwMDIgNjYuODA2NCAyOS4xNjQ1IDY2LjgzODUgMjkuMzY0M0M2Ny4xMjU1IDMxLjE1NDMgNjguMDI5NCAzMy4xNzA2IDcwLjE0MzEgMzMuMjMxOEM3Mi44MzMyIDMzLjMwOTcgNzUuMDgyNiAzMS4wNTkxIDc2Ljg5MjIgMjkuNDAxOEM3Ny41MDI2IDI4Ljg0MjggNzkuNDQyNSAyNi4xNjAxIDgwLjQ3NjQgMjYuMTYwMUM4MC45MDE0IDI2LjE2MDEgODEuNzI0OSAyOC4zMDM4IDgxLjkxMjcgMjguNTg4M0M4NC4zOTcyIDMyLjM1MjMgODguMDQ0NiAzMC45ODk0IDkwLjg3MzMgMjguMzUwNUM5MS4zOTM0IDI3Ljg2NTMgOTQuMTc4MSAyMy45ODM5IDk1LjMwOTEgMjQuNjgzMkM5Ni4yMjAzIDI1LjI0NjYgOTYuNjIxNyAyNi41NzY1IDk3LjA4ODYgMjcuNDYxOEM5Ny44NDg0IDI4LjkwMjkgOTguODEwNyAyOS45Mjk0IDEwMC40MTkgMzAuNDY1N0MxMDMuOTEyIDMxLjYzMSAxMDcuNjggMjguMzYzIDExMS4yMjIgMjguMzYzQzExMi4yNTUgMjguMzYzIDExMi43ODMgMjguOTMxNiAxMTMuMzMyIDI5LjcxNDhDMTE0LjA4MSAzMC43ODIzIDExNC44NTMgMzEuNTI3NiAxMTYuMjA1IDMxLjgxNzVDMTIwLjM5MyAzMi43MTU1IDEyMy44MjIgMjguNzM5OSAxMjcuODcyIDI5LjA4ODlDMTI5LjA1MyAyOS4xOTA3IDEyOS45MzUgMzAuMzgxNiAxMzAuODIxIDMxLjAxNjRDMTMyLjYwOSAzMi4yOTY5IDEzNC43NTkgMzMuMTgzNiAxMzYuOTQ4IDMzLjQ5NDdDMTQwLjQ1NyAzMy45OTM0IDE0My45NzUgMzMuMzMyNiAxNDcuMzk1IDMyLjU5MzVDMTUzLjMgMzEuMzE3NCAxNTkuMTQ3IDI5Ljc5NTggMTY1LjA2MiAyOC41NjMzIiBzdHJva2U9IiNGQjZGNDEiIHN0cm9rZS13aWR0aD0iMS41IiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiLz4KPHBhdGggZD0iTTE5Ni41MTUgMTUuMDc3OEwxODQuNDkyIDAuNTUxNzk1QzE4NC4yNTcgMC4yNjc4MSAxODMuODM4IDAuMjI4MjYgMTgzLjU1NCAwLjQ2MzMwN0wxODAuNjQ5IDIuODY3ODhDMTgwLjM2NSAzLjEwMjkzIDE4MC4zMjUgMy41MjI0IDE4MC41NiAzLjgwNjM4TDE5Mi41ODMgMTguMzMyNEMxOTIuNyAxOC40NzQxIDE5Mi44NjQgMTguNTU1MSAxOTMuMDM0IDE4LjU3MTJDMTkzLjIwNCAxOC41ODcyIDE5My4zOCAxOC41MzgyIDE5My41MjIgMTguNDIwOUwxOTYuNDI3IDE2LjAxNjRDMTk2LjcxMSAxNS43ODEzIDE5Ni43NSAxNS4zNjE4IDE5Ni41MTUgMTUuMDc3OFoiIGZpbGw9IiNGQjZGNDEiLz4KPHBhdGggZD0iTTE4MS40MzYgNi45NTcyTDE3MC44NTUgOS44MjU5M0MxNzAuNjIyIDkuODg5MDEgMTcwLjQ0MSAxMC4wNzI5IDE3MC4zODMgMTAuMzA3MUwxNjYuMTU1IDI3LjEwMTdMMTczLjk3NSAyMC42MjkxQzE3My4yNDUgMTkuMjYxMiAxNzMuNTUgMTcuNTE4OSAxNzQuNzkgMTYuNDkyMUMxNzYuMjA2IDE1LjMxOTggMTc4LjMxMiAxNS41MTkxIDE3OS40ODMgMTYuOTM0NkMxODAuNjU1IDE4LjM1MDggMTgwLjQ1NiAyMC40NTYxIDE3OS4wNDEgMjEuNjI3OEMxNzguMzMzIDIyLjIxMzkgMTc3LjQ1MiAyMi40NTc3IDE3Ni42MDMgMjIuMzc3NkMxNzUuOTY0IDIyLjMxNzQgMTc1LjM0MyAyMi4wNzQgMTc0LjgyNSAyMS42NTY4TDE2Ny4wMDUgMjguMTI4NkwxODQuMjk0IDI3LjExMzdDMTg0LjUzNCAyNy4wOTk2IDE4NC43NDkgMjYuOTU3MSAxODQuODU0IDI2Ljc0MDFMMTg5LjY1IDE2Ljg4MTRMMTgxLjQzNiA2Ljk1NzJaIiBmaWxsPSIjRkI2RjQxIi8+Cjwvc3ZnPgo=);
  }
  .form-spinner-button.form-spinner-up:before {
    background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTQiIGhlaWdodD0iMTQiIHZpZXdCb3g9IjAgMCAxNCAxNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik03LjUgMTIuNDAwNEw3LjUgNy40MDAzOUwxMi41IDcuNDAwMzlDMTIuNzc2IDcuNDAwMzkgMTMgNy4xNzYzOSAxMyA2LjkwMDM5QzEzIDYuNjI0MzkgMTIuNzc2IDYuNDAwMzkgMTIuNSA2LjQwMDM5TDcuNSA2LjQwMDM5TDcuNSAxLjQwMDM5QzcuNSAxLjEyNDM5IDcuMjc2IDAuOTAwMzkgNyAwLjkwMDM5QzYuNzI0IDAuOTAwMzkgNi41IDEuMTI0MzkgNi41IDEuNDAwMzlMNi41IDYuNDAwMzlMMS41IDYuNDAwMzlDMS4yMjQgNi40MDAzOSAxIDYuNjI0MzkgMSA2LjkwMDM5QzEgNy4xNzYzOSAxLjIyNCA3LjQwMDM5IDEuNSA3LjQwMDM5TDYuNSA3LjQwMDM5TDYuNSAxMi40MDA0QzYuNSAxMi42NzY0IDYuNzI0IDEyLjkwMDQgNyAxMi45MDA0QzcuMjc2IDEyLjkwMDQgNy41IDEyLjY3NjQgNy41IDEyLjQwMDRaIiBmaWxsPSJ3aGl0ZSIgc3Ryb2tlPSJ3aGl0ZSIgc3Ryb2tlLXdpZHRoPSIwLjUiLz4KPC9zdmc+Cg==);
  }
  .form-spinner-button.form-spinner-down:before {
    background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTQiIGhlaWdodD0iMiIgdmlld0JveD0iMCAwIDE0IDIiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGQ9Ik0xMi41IDEuNDAwMzlMNy41IDEuNDAwMzlMMS41IDEuNDAwMzlDMS4yMjQgMS40MDAzOSAxIDEuMTc2MzkgMSAwLjkwMDM5QzEgMC42MjQzOSAxLjIyNCAwLjQwMDM5IDEuNSAwLjQwMDM5TDYuNSAwLjQwMDM5TDEyLjUgMC40MDAzOTFDMTIuNzc2IDAuNDAwMzkxIDEzIDAuNjI0MzkxIDEzIDAuOTAwMzkxQzEzIDEuMTc2MzkgMTIuNzc2IDEuNDAwMzkgMTIuNSAxLjQwMDM5WiIgZmlsbD0id2hpdGUiIHN0cm9rZT0id2hpdGUiIHN0cm9rZS13aWR0aD0iMC41Ii8+Cjwvc3ZnPgo=);
  }
  .form-collapse-table:after{
    background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjgiIGhlaWdodD0iMjgiIHZpZXdCb3g9IjAgMCAyOCAyOCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0yOCAxNEMyOCA2LjI2ODAxIDIxLjczMiAtOS40OTkzNWUtMDcgMTQgLTYuMTE5NTllLTA3QzYuMjY4MDEgLTIuNzM5ODRlLTA3IC05LjQ5OTM1ZS0wNyA2LjI2ODAxIC02LjExOTU5ZS0wNyAxNEMtMi43Mzk4NGUtMDcgMjEuNzMyIDYuMjY4MDEgMjggMTQgMjhDMjEuNzMyIDI4IDI4IDIxLjczMiAyOCAxNFpNOC4wMDI0IDExLjcwMDNDNy45OTI0NCAxMS41ODEzIDguMDEzNjMgMTEuNDYxNyA4LjA2MzU5IDExLjM1NDlDOC4xMTM0NyAxMS4yNDgyIDguMTkwMDUgMTEuMTU4NSA4LjI4NDc5IDExLjA5NTlDOC4zNzk1MiAxMS4wMzMyIDguNDg4NjUgMTEgOC41OTk5OSAxMUwxOS40IDExQzE5LjUxMTMgMTEgMTkuNjIwNSAxMS4wMzMyIDE5LjcxNTIgMTEuMDk1OUMxOS44MDk5IDExLjE1ODUgMTkuODg2NSAxMS4yNDgyIDE5LjkzNjQgMTEuMzU0OUMxOS45Nzc5IDExLjQ0NDQgMTkuOTk5NiAxMS41NDI5IDIwIDExLjY0MjlDMjAgMTEuNzgyIDE5Ljk1NzkgMTEuOTE3MyAxOS44OCAxMi4wMjg2TDE0LjQ4IDE5Ljc0MjlDMTQuNDI0MSAxOS44MjI3IDE0LjM1MTYgMTkuODg3NSAxNC4yNjgzIDE5LjkzMjFDMTQuMTg1IDE5Ljk3NjggMTQuMDkzMSAyMCAxNCAyMEMxMy45MDY4IDIwIDEzLjgxNSAxOS45NzY4IDEzLjczMTcgMTkuOTMyMUMxMy42NDg0IDE5Ljg4NzUgMTMuNTc1OSAxOS44MjI3IDEzLjUyIDE5Ljc0MjlMOC4xMTk5OSAxMi4wMjg2QzguMDUzMDggMTEuOTMzIDguMDEyMzYgMTEuODE5MyA4LjAwMjQgMTEuNzAwM1oiIGZpbGw9IiMzNzBGMDEiLz4KPC9zdmc+Cg==);
  }
  li[data-type=control_fileupload] .qq-upload-button:before {
    background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzkiIGhlaWdodD0iMjgiIHZpZXdCb3g9IjAgMCAzOSAyOCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTMyLjM3NSAxMi4xODc1QzMxLjUgNS42ODc1IDI2IDAuODc1IDE5LjM3NSAwLjg3NUMxMy42ODc1IDAuODc1IDguNzUgNC40Mzc1IDYuOTM3NSA5LjgxMjVDMi44NzUgMTAuNjg3NSAwIDE0LjE4NzUgMCAxOC4zNzVDMCAyMi45Mzc1IDMuNTYyNSAyNi43NSA4LjEyNSAyNy4xMjVIMzEuODc1SDMxLjkzNzVDMzUuNzUgMjYuNzUgMzguNzUgMjMuNSAzOC43NSAxOS42MjVDMzguNzUgMTUuOTM3NSAzNiAxMi43NSAzMi4zNzUgMTIuMTg3NVpNMjYuMDYyNSAxNS42ODc1QzI1LjkzNzUgMTUuODEyNSAyNS44MTI1IDE1Ljg3NSAyNS42MjUgMTUuODc1QzI1LjQzNzUgMTUuODc1IDI1LjMxMjUgMTUuODEyNSAyNS4xODc1IDE1LjY4NzVMMjAgMTAuNVYyMi43NUMyMCAyMy4xMjUgMTkuNzUgMjMuMzc1IDE5LjM3NSAyMy4zNzVDMTkgMjMuMzc1IDE4Ljc1IDIzLjEyNSAxOC43NSAyMi43NVYxMC41TDEzLjU2MjUgMTUuNjg3NUMxMy4zMTI1IDE1LjkzNzUgMTIuOTM3NSAxNS45Mzc1IDEyLjY4NzUgMTUuNjg3NUMxMi40Mzc1IDE1LjQzNzUgMTIuNDM3NSAxNS4wNjI1IDEyLjY4NzUgMTQuODEyNUwxOC45Mzc1IDguNTYyNUMxOSA4LjUgMTkuMDYyNSA4LjQzNzUgMTkuMTI1IDguNDM3NUMxOS4yNSA4LjM3NSAxOS40Mzc1IDguMzc1IDE5LjYyNSA4LjQzNzVDMTkuNjg3NSA4LjUgMTkuNzUgOC41IDE5LjgxMjUgOC41NjI1TDI2LjA2MjUgMTQuODEyNUMyNi4zMTI1IDE1LjA2MjUgMjYuMzEyNSAxNS40Mzc1IDI2LjA2MjUgMTUuNjg3NVoiIGZpbGw9IiNGQjZGNDEiLz4KPC9zdmc+Cg==);;
  }
  .appointmentDayPickerButton {
    background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNiIgaGVpZ2h0PSIxMCIgdmlld0JveD0iMCAwIDYgMTAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGQ9Ik0xIDlMNSA1TDEgMSIgc3Ryb2tlPSIjNkExQjAwIiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIvPgo8L3N2Zz4K);
  }

  /* NEW THEME STYLE */
  /*PREFERENCES STYLE*//*PREFERENCES STYLE*/
    .form-all {
      font-family: Inter, sans-serif;
    }
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-family: Inter, sans-serif;
    }
    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-family: Inter, sans-serif;
    }
    .form-header-group {
      font-family: Inter, sans-serif;
    }
    .form-label {
      font-family: Inter, sans-serif;
    }
  
    .form-label.form-label-auto {
      
    display: block;
    float: none;
    text-align: left;
    width: 100%;
  
    }
  
    .form-line {
      margin-top: 12px;
      margin-bottom: 12px;
    }
  
    .form-all {
      max-width: 752px;
      width: 100%;
    }
  
    .form-label.form-label-left,
    .form-label.form-label-right,
    .form-label.form-label-left.form-label-auto,
    .form-label.form-label-right.form-label-auto {
      width: 230px;
    }
  
    .form-all {
      font-size: 16px
    }
    .form-all .qq-upload-button,
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-size: 16px
    }
    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-size: 16px
    }
  
    .supernova .form-all, .form-all {
      background-color: #F2F2F2;
    }
  
    .form-all {
      color: #000000;
    }
    .form-header-group .form-header {
      color: #000000;
    }
    .form-header-group .form-subHeader {
      color: #000000;
    }
    .form-label-top,
    .form-label-left,
    .form-label-right,
    .form-html,
    .form-checkbox-item label,
    .form-radio-item label {
      color: #000000;
    }
    .form-sub-label {
      color: #1a1a1a;
    }
  
    .supernova {
      background-color: #ffffff;
    }
    .supernova body {
      background: transparent;
    }
  
    .form-textbox,
    .form-textarea,
    .form-dropdown,
    .form-radio-other-input,
    .form-checkbox-other-input,
    .form-captcha input,
    .form-spinner input {
      background-color: #FFFFFF;
    }
  
    .supernova {
      background-image: none;
    }
    #stage {
      background-image: none;
    }
  
    .form-all {
      background-image: none;
    }
  
  .ie-8 .form-all:before { display: none; }
  .ie-8 {
    margin-top: auto;
    margin-top: initial;
  }
  
  /*PREFERENCES STYLE*//*__INSPECT_SEPERATOR__*/.form-all {
    box-shadow : 0 9px 40px rgba(42, 42, 42);
}

.form-all {
    border : 10px solid;
    border-image-slice : 1;
    border-width : 6px;
    border-image-source : linear-gradient(to left, #6C6C6C, #6C6C6C);
}

.form-line-active { 

background-color: #DCDCDC; 

}
    /* Injected CSS Code */
</style>

<form class="jotform-form" action="https://submit.jotform.com/submit/221436219603551/" method="post" name="form_221436219603551" id="221436219603551" accept-charset="utf-8" autocomplete="on">
  <input type="hidden" name="formID" value="221436219603551" />
  <input type="hidden" id="JWTContainer" value="" />
  <input type="hidden" id="cardinalOrderNumber" value="" />
  <div role="main" class="form-all">
    <style>
      .form-all:before { background: none;}
    </style>
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div style="display:table;width:100%">
          <div class="form-header-group hasImage header-large" data-imagealign="Right">
            <div class="header-text httac htvam">
              <h1 id="header_1" class="form-header" data-component="header">
                Hotel Evaluation Form
              </h1>
            </div>
            <div class="header-logo">
              <img src="https://www.jotform.com/uploads/LindaJohansson/form_files/ABC%20Company%20-%202021-12-31T091448.963.61ce9ff2e07df8.11191223.png" alt="" width="100" class="header-logo-right" />
            </div>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-1" data-type="control_datetime" id="id_3">
        <label class="form-label form-label-top form-label-auto" id="label_3" for="lite_mode_3"> Check-in Date </label>
        <div id="cid_3" class="form-input-wide" data-layout="half">
          <div data-wrapper-react="true">
            <div style="display:none">
              <span class="form-sub-label-container" style="vertical-align:top">
                <input type="tel" class="form-textbox validate[limitDate]" id="month_3" name="q3_date[month]" size="2" data-maxlength="2" data-age="" maxLength="2" value="" autoComplete="section-input_3 off" aria-labelledby="label_3 sublabel_3_month" />
                <span class="date-separate" aria-hidden="true">
                   -
                </span>
                <label class="form-sub-label" for="month_3" id="sublabel_3_month" style="min-height:13px" aria-hidden="false"> Month </label>
              </span>
              <span class="form-sub-label-container" style="vertical-align:top">
                <input type="tel" class="form-textbox validate[limitDate]" id="day_3" name="q3_date[day]" size="2" data-maxlength="2" data-age="" maxLength="2" value="" autoComplete="section-input_3 off" aria-labelledby="label_3 sublabel_3_day" />
                <span class="date-separate" aria-hidden="true">
                   -
                </span>
                <label class="form-sub-label" for="day_3" id="sublabel_3_day" style="min-height:13px" aria-hidden="false"> Day </label>
              </span>
              <span class="form-sub-label-container" style="vertical-align:top">
                <input type="tel" class="form-textbox validate[limitDate]" id="year_3" name="q3_date[year]" size="4" data-maxlength="4" data-age="" maxLength="4" value="" autoComplete="section-input_3 off" aria-labelledby="label_3 sublabel_3_year" />
                <label class="form-sub-label" for="year_3" id="sublabel_3_year" style="min-height:13px" aria-hidden="false"> Year </label>
              </span>
            </div>
            <span class="form-sub-label-container" style="vertical-align:top">
              <input type="text" class="form-textbox validate[limitDate, validateLiteDate]" id="lite_mode_3" size="12" data-maxlength="12" maxLength="12" data-age="" value="" data-format="mmddyyyy" data-seperator="-" placeholder="MM-DD-YYYY" autoComplete="section-input_3 off" aria-labelledby="label_3 sublabel_3_litemode" />
              <img class=" newDefaultTheme-dateIcon icon-liteMode" alt="Pick a Date" id="input_3_pick" src="https://cdn.jotfor.ms/images/calendar.png" data-component="datetime" aria-hidden="true" data-allow-time="No" data-version="v2" />
              <label class="form-sub-label" for="lite_mode_3" id="sublabel_3_litemode" style="min-height:13px" aria-hidden="false"> Date </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-col-2" data-type="control_datetime" id="id_4">
        <label class="form-label form-label-top form-label-auto" id="label_4" for="lite_mode_4"> Check-out Date </label>
        <div id="cid_4" class="form-input-wide" data-layout="half">
          <div data-wrapper-react="true">
            <div style="display:none">
              <span class="form-sub-label-container" style="vertical-align:top">
                <input type="tel" class="form-textbox validate[limitDate]" id="month_4" name="q4_date4[month]" size="2" data-maxlength="2" data-age="" maxLength="2" value="" autoComplete="section-input_4 off" aria-labelledby="label_4 sublabel_4_month" />
                <span class="date-separate" aria-hidden="true">
                   -
                </span>
                <label class="form-sub-label" for="month_4" id="sublabel_4_month" style="min-height:13px" aria-hidden="false"> Month </label>
              </span>
              <span class="form-sub-label-container" style="vertical-align:top">
                <input type="tel" class="form-textbox validate[limitDate]" id="day_4" name="q4_date4[day]" size="2" data-maxlength="2" data-age="" maxLength="2" value="" autoComplete="section-input_4 off" aria-labelledby="label_4 sublabel_4_day" />
                <span class="date-separate" aria-hidden="true">
                   -
                </span>
                <label class="form-sub-label" for="day_4" id="sublabel_4_day" style="min-height:13px" aria-hidden="false"> Day </label>
              </span>
              <span class="form-sub-label-container" style="vertical-align:top">
                <input type="tel" class="form-textbox validate[limitDate]" id="year_4" name="q4_date4[year]" size="4" data-maxlength="4" data-age="" maxLength="4" value="" autoComplete="section-input_4 off" aria-labelledby="label_4 sublabel_4_year" />
                <label class="form-sub-label" for="year_4" id="sublabel_4_year" style="min-height:13px" aria-hidden="false"> Year </label>
              </span>
            </div>
            <span class="form-sub-label-container" style="vertical-align:top">
              <input type="text" class="form-textbox validate[limitDate, validateLiteDate]" id="lite_mode_4" size="12" data-maxlength="12" maxLength="12" data-age="" value="" data-format="mmddyyyy" data-seperator="-" placeholder="MM-DD-YYYY" autoComplete="section-input_4 off" aria-labelledby="label_4 sublabel_4_litemode" />
              <img class=" newDefaultTheme-dateIcon icon-liteMode" alt="Pick a Date" id="input_4_pick" src="https://cdn.jotfor.ms/images/calendar.png" data-component="datetime" aria-hidden="true" data-allow-time="No" data-version="v2" />
              <label class="form-sub-label" for="lite_mode_4" id="sublabel_4_litemode" style="min-height:13px" aria-hidden="false"> Date </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_radio" id="id_5">
        <label class="form-label form-label-top form-label-auto" id="label_5" for="input_5"> Did you visit our hotel before? </label>
        <div id="cid_5" class="form-input-wide" data-layout="full">
          <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_5" data-component="radio">
            <span class="form-radio-item">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_5" class="form-radio" id="input_5_0" name="q5_typeA" value="Yes" />
              <label id="label_input_5_0" for="input_5_0"> Yes </label>
            </span>
            <span class="form-radio-item">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_5" class="form-radio" id="input_5_1" name="q5_typeA" value="No" />
              <label id="label_input_5_1" for="input_5_1"> No </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_checkbox" id="id_6">
        <label class="form-label form-label-top form-label-auto" id="label_6" for="input_6"> Please select the ones that influenced your decision to stay our hotel </label>
        <div id="cid_6" class="form-input-wide" data-layout="full">
          <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_6" data-component="checkbox">
            <span class="form-checkbox-item">
              <span class="dragger-item">
              </span>
              <input type="checkbox" aria-describedby="label_6" class="form-checkbox" id="input_6_0" name="q6_name6[]" value="Advertisements" />
              <label id="label_input_6_0" for="input_6_0"> Advertisements </label>
            </span>
            <span class="form-checkbox-item">
              <span class="dragger-item">
              </span>
              <input type="checkbox" aria-describedby="label_6" class="form-checkbox" id="input_6_1" name="q6_name6[]" value="Business reasons" />
              <label id="label_input_6_1" for="input_6_1"> Business reasons </label>
            </span>
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="checkbox" aria-describedby="label_6" class="form-checkbox" id="input_6_2" name="q6_name6[]" value="Location" />
              <label id="label_input_6_2" for="input_6_2"> Location </label>
            </span>
            <span class="form-checkbox-item">
              <span class="dragger-item">
              </span>
              <input type="checkbox" aria-describedby="label_6" class="form-checkbox" id="input_6_3" name="q6_name6[]" value="Price" />
              <label id="label_input_6_3" for="input_6_3"> Price </label>
            </span>
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="checkbox" aria-describedby="label_6" class="form-checkbox" id="input_6_4" name="q6_name6[]" value="Recommended by someone I know" />
              <label id="label_input_6_4" for="input_6_4"> Recommended by someone I know </label>
            </span>
            <span class="form-checkbox-item">
              <span class="dragger-item">
              </span>
              <input type="checkbox" aria-describedby="label_6" class="form-checkbox" id="input_6_5" name="q6_name6[]" value="Recreational facilities" />
              <label id="label_input_6_5" for="input_6_5"> Recreational facilities </label>
            </span>
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="checkbox" aria-describedby="label_6" class="form-checkbox" id="input_6_6" name="q6_name6[]" value="Reputation" />
              <label id="label_input_6_6" for="input_6_6"> Reputation </label>
            </span>
            <span class="form-checkbox-item">
              <span class="dragger-item">
              </span>
              <input type="checkbox" aria-describedby="label_6" class="form-checkbox" id="input_6_7" name="q6_name6[]" value="I&amp;#039;m a regular customer" />
              <label id="label_input_6_7" for="input_6_7"> I'm a regular customer </label>
            </span>
            <span class="form-checkbox-item formCheckboxOther">
              <input type="checkbox" class="form-checkbox-other form-checkbox" name="q6_name6[other]" id="other_6" value="other" tabindex="0" aria-label="Other" />
              <label id="label_other_6" style="text-indent:0" for="other_6"> Other </label>
              <span id="other_6_input" class="other-input-container" style="display:none">
                <input type="text" class="form-checkbox-other-input form-textbox" name="q6_name6[other]" data-otherhint="Other" size="15" id="input_6" data-placeholder="Please type another option here" placeholder="Please type another option here" />
              </span>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_text" id="id_8">
        <div id="cid_8" class="form-input-wide" data-layout="full">
          <div id="text_8" class="form-html" data-component="text">
            Please rate how strongly you agree or disagree with each of the following statements.
          </div>
        </div>
      </li>
      <ul class="form-section" id="section_14">
        <li id="cid_14" class="form-input-wide" data-type="control_collapse">
          <div class="form-collapse-table" id="collapse_14" data-component="collapse">
            <span class="form-collapse-mid" id="collapse-text_14">
              Hotel Services
            </span>
            <span class="form-collapse-right form-collapse-right-show">
               
            </span>
          </div>
        </li>
        <li class="form-line" data-type="control_radio" id="id_7">
          <label class="form-label form-label-top form-label-auto" id="label_7" for="input_7"> The check-in staff was polite. </label>
          <div id="cid_7" class="form-input-wide" data-layout="full">
            <div class="form-multiple-column" data-columncount="3" role="group" aria-labelledby="label_7" data-component="radio">
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_7" class="form-radio" id="input_7_0" name="q7_typeA7" value="Strongly Agree" />
                <label id="label_input_7_0" for="input_7_0"> Strongly Agree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_7" class="form-radio" id="input_7_1" name="q7_typeA7" value="Agree" />
                <label id="label_input_7_1" for="input_7_1"> Agree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_7" class="form-radio" id="input_7_2" name="q7_typeA7" value="Neutral" />
                <label id="label_input_7_2" for="input_7_2"> Neutral </label>
              </span>
              <span class="form-radio-item" style="clear:left">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_7" class="form-radio" id="input_7_3" name="q7_typeA7" value="Disagree" />
                <label id="label_input_7_3" for="input_7_3"> Disagree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_7" class="form-radio" id="input_7_4" name="q7_typeA7" value="Strongly Disagree" />
                <label id="label_input_7_4" for="input_7_4"> Strongly Disagree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_7" class="form-radio" id="input_7_5" name="q7_typeA7" value="N/A" />
                <label id="label_input_7_5" for="input_7_5"> N/A </label>
              </span>
            </div>
          </div>
        </li>
        <li class="form-line" data-type="control_radio" id="id_9">
          <label class="form-label form-label-top form-label-auto" id="label_9" for="input_9"> Someone was available to assist with my luggage. </label>
          <div id="cid_9" class="form-input-wide" data-layout="full">
            <div class="form-multiple-column" data-columncount="3" role="group" aria-labelledby="label_9" data-component="radio">
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_9" class="form-radio" id="input_9_0" name="q9_theCheckin" value="Strongly Agree" />
                <label id="label_input_9_0" for="input_9_0"> Strongly Agree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_9" class="form-radio" id="input_9_1" name="q9_theCheckin" value="Agree" />
                <label id="label_input_9_1" for="input_9_1"> Agree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_9" class="form-radio" id="input_9_2" name="q9_theCheckin" value="Neutral" />
                <label id="label_input_9_2" for="input_9_2"> Neutral </label>
              </span>
              <span class="form-radio-item" style="clear:left">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_9" class="form-radio" id="input_9_3" name="q9_theCheckin" value="Disagree" />
                <label id="label_input_9_3" for="input_9_3"> Disagree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_9" class="form-radio" id="input_9_4" name="q9_theCheckin" value="Strongly Disagree" />
                <label id="label_input_9_4" for="input_9_4"> Strongly Disagree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_9" class="form-radio" id="input_9_5" name="q9_theCheckin" value="N/A" />
                <label id="label_input_9_5" for="input_9_5"> N/A </label>
              </span>
            </div>
          </div>
        </li>
        <li class="form-line" data-type="control_radio" id="id_10">
          <label class="form-label form-label-top form-label-auto" id="label_10" for="input_10"> Room service was prompt. </label>
          <div id="cid_10" class="form-input-wide" data-layout="full">
            <div class="form-multiple-column" data-columncount="3" role="group" aria-labelledby="label_10" data-component="radio">
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_10" class="form-radio" id="input_10_0" name="q10_theCheckin10" value="Strongly Agree" />
                <label id="label_input_10_0" for="input_10_0"> Strongly Agree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_10" class="form-radio" id="input_10_1" name="q10_theCheckin10" value="Agree" />
                <label id="label_input_10_1" for="input_10_1"> Agree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_10" class="form-radio" id="input_10_2" name="q10_theCheckin10" value="Neutral" />
                <label id="label_input_10_2" for="input_10_2"> Neutral </label>
              </span>
              <span class="form-radio-item" style="clear:left">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_10" class="form-radio" id="input_10_3" name="q10_theCheckin10" value="Disagree" />
                <label id="label_input_10_3" for="input_10_3"> Disagree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_10" class="form-radio" id="input_10_4" name="q10_theCheckin10" value="Strongly Disagree" />
                <label id="label_input_10_4" for="input_10_4"> Strongly Disagree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_10" class="form-radio" id="input_10_5" name="q10_theCheckin10" value="N/A" />
                <label id="label_input_10_5" for="input_10_5"> N/A </label>
              </span>
            </div>
          </div>
        </li>
        <li class="form-line" data-type="control_radio" id="id_11">
          <label class="form-label form-label-top form-label-auto" id="label_11" for="input_11"> The pool satisfied my expectations. </label>
          <div id="cid_11" class="form-input-wide" data-layout="full">
            <div class="form-multiple-column" data-columncount="3" role="group" aria-labelledby="label_11" data-component="radio">
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_11" class="form-radio" id="input_11_0" name="q11_theCheckin11" value="Strongly Agree" />
                <label id="label_input_11_0" for="input_11_0"> Strongly Agree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_11" class="form-radio" id="input_11_1" name="q11_theCheckin11" value="Agree" />
                <label id="label_input_11_1" for="input_11_1"> Agree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_11" class="form-radio" id="input_11_2" name="q11_theCheckin11" value="Neutral" />
                <label id="label_input_11_2" for="input_11_2"> Neutral </label>
              </span>
              <span class="form-radio-item" style="clear:left">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_11" class="form-radio" id="input_11_3" name="q11_theCheckin11" value="Disagree" />
                <label id="label_input_11_3" for="input_11_3"> Disagree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_11" class="form-radio" id="input_11_4" name="q11_theCheckin11" value="Strongly Disagree" />
                <label id="label_input_11_4" for="input_11_4"> Strongly Disagree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_11" class="form-radio" id="input_11_5" name="q11_theCheckin11" value="N/A" />
                <label id="label_input_11_5" for="input_11_5"> N/A </label>
              </span>
            </div>
          </div>
        </li>
        <li class="form-line" data-type="control_radio" id="id_12">
          <label class="form-label form-label-top form-label-auto" id="label_12" for="input_12"> The fitness center satisfied my expectations. </label>
          <div id="cid_12" class="form-input-wide" data-layout="full">
            <div class="form-multiple-column" data-columncount="3" role="group" aria-labelledby="label_12" data-component="radio">
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_12" class="form-radio" id="input_12_0" name="q12_theCheckin12" value="Strongly Agree" />
                <label id="label_input_12_0" for="input_12_0"> Strongly Agree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_12" class="form-radio" id="input_12_1" name="q12_theCheckin12" value="Agree" />
                <label id="label_input_12_1" for="input_12_1"> Agree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_12" class="form-radio" id="input_12_2" name="q12_theCheckin12" value="Neutral" />
                <label id="label_input_12_2" for="input_12_2"> Neutral </label>
              </span>
              <span class="form-radio-item" style="clear:left">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_12" class="form-radio" id="input_12_3" name="q12_theCheckin12" value="Disagree" />
                <label id="label_input_12_3" for="input_12_3"> Disagree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_12" class="form-radio" id="input_12_4" name="q12_theCheckin12" value="Strongly Disagree" />
                <label id="label_input_12_4" for="input_12_4"> Strongly Disagree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_12" class="form-radio" id="input_12_5" name="q12_theCheckin12" value="N/A" />
                <label id="label_input_12_5" for="input_12_5"> N/A </label>
              </span>
            </div>
          </div>
        </li>
        <li class="form-line" data-type="control_radio" id="id_13">
          <label class="form-label form-label-top form-label-auto" id="label_13" for="input_13"> I felt safe in the hotel. </label>
          <div id="cid_13" class="form-input-wide" data-layout="full">
            <div class="form-multiple-column" data-columncount="3" role="group" aria-labelledby="label_13" data-component="radio">
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_13" class="form-radio" id="input_13_0" name="q13_theCheckin13" value="Strongly Agree" />
                <label id="label_input_13_0" for="input_13_0"> Strongly Agree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_13" class="form-radio" id="input_13_1" name="q13_theCheckin13" value="Agree" />
                <label id="label_input_13_1" for="input_13_1"> Agree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_13" class="form-radio" id="input_13_2" name="q13_theCheckin13" value="Neutral" />
                <label id="label_input_13_2" for="input_13_2"> Neutral </label>
              </span>
              <span class="form-radio-item" style="clear:left">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_13" class="form-radio" id="input_13_3" name="q13_theCheckin13" value="Disagree" />
                <label id="label_input_13_3" for="input_13_3"> Disagree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_13" class="form-radio" id="input_13_4" name="q13_theCheckin13" value="Strongly Disagree" />
                <label id="label_input_13_4" for="input_13_4"> Strongly Disagree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_13" class="form-radio" id="input_13_5" name="q13_theCheckin13" value="N/A" />
                <label id="label_input_13_5" for="input_13_5"> N/A </label>
              </span>
            </div>
          </div>
        </li>
      </ul>
      <ul class="form-section" id="section_15">
        <li id="cid_15" class="form-input-wide" data-type="control_collapse">
          <div class="form-collapse-table" id="collapse_15" data-component="collapse">
            <span class="form-collapse-mid" id="collapse-text_15">
              Your Room
            </span>
            <span class="form-collapse-right form-collapse-right-show">
               
            </span>
          </div>
        </li>
        <li class="form-line" data-type="control_radio" id="id_16">
          <label class="form-label form-label-top form-label-auto" id="label_16" for="input_16"> The room was very clean. </label>
          <div id="cid_16" class="form-input-wide" data-layout="full">
            <div class="form-multiple-column" data-columncount="3" role="group" aria-labelledby="label_16" data-component="radio">
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_16" class="form-radio" id="input_16_0" name="q16_theHotel" value="Strongly Agree" />
                <label id="label_input_16_0" for="input_16_0"> Strongly Agree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_16" class="form-radio" id="input_16_1" name="q16_theHotel" value="Agree" />
                <label id="label_input_16_1" for="input_16_1"> Agree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_16" class="form-radio" id="input_16_2" name="q16_theHotel" value="Neutral" />
                <label id="label_input_16_2" for="input_16_2"> Neutral </label>
              </span>
              <span class="form-radio-item" style="clear:left">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_16" class="form-radio" id="input_16_3" name="q16_theHotel" value="Disagree" />
                <label id="label_input_16_3" for="input_16_3"> Disagree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_16" class="form-radio" id="input_16_4" name="q16_theHotel" value="Strongly Disagree" />
                <label id="label_input_16_4" for="input_16_4"> Strongly Disagree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_16" class="form-radio" id="input_16_5" name="q16_theHotel" value="N/A" />
                <label id="label_input_16_5" for="input_16_5"> N/A </label>
              </span>
            </div>
          </div>
        </li>
        <li class="form-line" data-type="control_radio" id="id_17">
          <label class="form-label form-label-top form-label-auto" id="label_17" for="input_17"> The furniture was in good condition. </label>
          <div id="cid_17" class="form-input-wide" data-layout="full">
            <div class="form-multiple-column" data-columncount="3" role="group" aria-labelledby="label_17" data-component="radio">
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_17" class="form-radio" id="input_17_0" name="q17_theHotel17" value="Strongly Agree" />
                <label id="label_input_17_0" for="input_17_0"> Strongly Agree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_17" class="form-radio" id="input_17_1" name="q17_theHotel17" value="Agree" />
                <label id="label_input_17_1" for="input_17_1"> Agree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_17" class="form-radio" id="input_17_2" name="q17_theHotel17" value="Neutral" />
                <label id="label_input_17_2" for="input_17_2"> Neutral </label>
              </span>
              <span class="form-radio-item" style="clear:left">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_17" class="form-radio" id="input_17_3" name="q17_theHotel17" value="Disagree" />
                <label id="label_input_17_3" for="input_17_3"> Disagree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_17" class="form-radio" id="input_17_4" name="q17_theHotel17" value="Strongly Disagree" />
                <label id="label_input_17_4" for="input_17_4"> Strongly Disagree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_17" class="form-radio" id="input_17_5" name="q17_theHotel17" value="N/A" />
                <label id="label_input_17_5" for="input_17_5"> N/A </label>
              </span>
            </div>
          </div>
        </li>
        <li class="form-line" data-type="control_radio" id="id_18">
          <label class="form-label form-label-top form-label-auto" id="label_18" for="input_18"> The bed was comfortable. </label>
          <div id="cid_18" class="form-input-wide" data-layout="full">
            <div class="form-multiple-column" data-columncount="3" role="group" aria-labelledby="label_18" data-component="radio">
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_18" class="form-radio" id="input_18_0" name="q18_theHotel18" value="Strongly Agree" />
                <label id="label_input_18_0" for="input_18_0"> Strongly Agree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_18" class="form-radio" id="input_18_1" name="q18_theHotel18" value="Agree" />
                <label id="label_input_18_1" for="input_18_1"> Agree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_18" class="form-radio" id="input_18_2" name="q18_theHotel18" value="Neutral" />
                <label id="label_input_18_2" for="input_18_2"> Neutral </label>
              </span>
              <span class="form-radio-item" style="clear:left">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_18" class="form-radio" id="input_18_3" name="q18_theHotel18" value="Disagree" />
                <label id="label_input_18_3" for="input_18_3"> Disagree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_18" class="form-radio" id="input_18_4" name="q18_theHotel18" value="Strongly Disagree" />
                <label id="label_input_18_4" for="input_18_4"> Strongly Disagree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_18" class="form-radio" id="input_18_5" name="q18_theHotel18" value="N/A" />
                <label id="label_input_18_5" for="input_18_5"> N/A </label>
              </span>
            </div>
          </div>
        </li>
        <li class="form-line" data-type="control_radio" id="id_19">
          <label class="form-label form-label-top form-label-auto" id="label_19" for="input_19"> The lighting was sufficient. </label>
          <div id="cid_19" class="form-input-wide" data-layout="full">
            <div class="form-multiple-column" data-columncount="3" role="group" aria-labelledby="label_19" data-component="radio">
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_19" class="form-radio" id="input_19_0" name="q19_theHotel19" value="Strongly Agree" />
                <label id="label_input_19_0" for="input_19_0"> Strongly Agree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_19" class="form-radio" id="input_19_1" name="q19_theHotel19" value="Agree" />
                <label id="label_input_19_1" for="input_19_1"> Agree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_19" class="form-radio" id="input_19_2" name="q19_theHotel19" value="Neutral" />
                <label id="label_input_19_2" for="input_19_2"> Neutral </label>
              </span>
              <span class="form-radio-item" style="clear:left">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_19" class="form-radio" id="input_19_3" name="q19_theHotel19" value="Disagree" />
                <label id="label_input_19_3" for="input_19_3"> Disagree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_19" class="form-radio" id="input_19_4" name="q19_theHotel19" value="Strongly Disagree" />
                <label id="label_input_19_4" for="input_19_4"> Strongly Disagree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_19" class="form-radio" id="input_19_5" name="q19_theHotel19" value="N/A" />
                <label id="label_input_19_5" for="input_19_5"> N/A </label>
              </span>
            </div>
          </div>
        </li>
        <li class="form-line" data-type="control_radio" id="id_20">
          <label class="form-label form-label-top form-label-auto" id="label_20" for="input_20"> The temperature was appropriate. </label>
          <div id="cid_20" class="form-input-wide" data-layout="full">
            <div class="form-multiple-column" data-columncount="3" role="group" aria-labelledby="label_20" data-component="radio">
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_20" class="form-radio" id="input_20_0" name="q20_theHotel20" value="Strongly Agree" />
                <label id="label_input_20_0" for="input_20_0"> Strongly Agree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_20" class="form-radio" id="input_20_1" name="q20_theHotel20" value="Agree" />
                <label id="label_input_20_1" for="input_20_1"> Agree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_20" class="form-radio" id="input_20_2" name="q20_theHotel20" value="Neutral" />
                <label id="label_input_20_2" for="input_20_2"> Neutral </label>
              </span>
              <span class="form-radio-item" style="clear:left">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_20" class="form-radio" id="input_20_3" name="q20_theHotel20" value="Disagree" />
                <label id="label_input_20_3" for="input_20_3"> Disagree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_20" class="form-radio" id="input_20_4" name="q20_theHotel20" value="Strongly Disagree" />
                <label id="label_input_20_4" for="input_20_4"> Strongly Disagree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_20" class="form-radio" id="input_20_5" name="q20_theHotel20" value="N/A" />
                <label id="label_input_20_5" for="input_20_5"> N/A </label>
              </span>
            </div>
          </div>
        </li>
        <li class="form-line" data-type="control_radio" id="id_21">
          <label class="form-label form-label-top form-label-auto" id="label_21" for="input_21"> The TV had good reception. </label>
          <div id="cid_21" class="form-input-wide" data-layout="full">
            <div class="form-multiple-column" data-columncount="3" role="group" aria-labelledby="label_21" data-component="radio">
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_21" class="form-radio" id="input_21_0" name="q21_theHotel21" value="Strongly Agree" />
                <label id="label_input_21_0" for="input_21_0"> Strongly Agree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_21" class="form-radio" id="input_21_1" name="q21_theHotel21" value="Agree" />
                <label id="label_input_21_1" for="input_21_1"> Agree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_21" class="form-radio" id="input_21_2" name="q21_theHotel21" value="Neutral" />
                <label id="label_input_21_2" for="input_21_2"> Neutral </label>
              </span>
              <span class="form-radio-item" style="clear:left">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_21" class="form-radio" id="input_21_3" name="q21_theHotel21" value="Disagree" />
                <label id="label_input_21_3" for="input_21_3"> Disagree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_21" class="form-radio" id="input_21_4" name="q21_theHotel21" value="Strongly Disagree" />
                <label id="label_input_21_4" for="input_21_4"> Strongly Disagree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_21" class="form-radio" id="input_21_5" name="q21_theHotel21" value="N/A" />
                <label id="label_input_21_5" for="input_21_5"> N/A </label>
              </span>
            </div>
          </div>
        </li>
        <li class="form-line" data-type="control_radio" id="id_22">
          <label class="form-label form-label-top form-label-auto" id="label_22" for="input_22"> The room view satisfied my expectations. </label>
          <div id="cid_22" class="form-input-wide" data-layout="full">
            <div class="form-multiple-column" data-columncount="3" role="group" aria-labelledby="label_22" data-component="radio">
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_22" class="form-radio" id="input_22_0" name="q22_theHotel22" value="Strongly Agree" />
                <label id="label_input_22_0" for="input_22_0"> Strongly Agree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_22" class="form-radio" id="input_22_1" name="q22_theHotel22" value="Agree" />
                <label id="label_input_22_1" for="input_22_1"> Agree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_22" class="form-radio" id="input_22_2" name="q22_theHotel22" value="Neutral" />
                <label id="label_input_22_2" for="input_22_2"> Neutral </label>
              </span>
              <span class="form-radio-item" style="clear:left">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_22" class="form-radio" id="input_22_3" name="q22_theHotel22" value="Disagree" />
                <label id="label_input_22_3" for="input_22_3"> Disagree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_22" class="form-radio" id="input_22_4" name="q22_theHotel22" value="Strongly Disagree" />
                <label id="label_input_22_4" for="input_22_4"> Strongly Disagree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_22" class="form-radio" id="input_22_5" name="q22_theHotel22" value="N/A" />
                <label id="label_input_22_5" for="input_22_5"> N/A </label>
              </span>
            </div>
          </div>
        </li>
        <li class="form-line" data-type="control_radio" id="id_23">
          <label class="form-label form-label-top form-label-auto" id="label_23" for="input_23"> The room was quiet. </label>
          <div id="cid_23" class="form-input-wide" data-layout="full">
            <div class="form-multiple-column" data-columncount="3" role="group" aria-labelledby="label_23" data-component="radio">
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_23" class="form-radio" id="input_23_0" name="q23_theHotel23" value="Strongly Agree" />
                <label id="label_input_23_0" for="input_23_0"> Strongly Agree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_23" class="form-radio" id="input_23_1" name="q23_theHotel23" value="Agree" />
                <label id="label_input_23_1" for="input_23_1"> Agree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_23" class="form-radio" id="input_23_2" name="q23_theHotel23" value="Neutral" />
                <label id="label_input_23_2" for="input_23_2"> Neutral </label>
              </span>
              <span class="form-radio-item" style="clear:left">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_23" class="form-radio" id="input_23_3" name="q23_theHotel23" value="Disagree" />
                <label id="label_input_23_3" for="input_23_3"> Disagree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_23" class="form-radio" id="input_23_4" name="q23_theHotel23" value="Strongly Disagree" />
                <label id="label_input_23_4" for="input_23_4"> Strongly Disagree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_23" class="form-radio" id="input_23_5" name="q23_theHotel23" value="N/A" />
                <label id="label_input_23_5" for="input_23_5"> N/A </label>
              </span>
            </div>
          </div>
        </li>
        <li class="form-line" data-type="control_radio" id="id_24">
          <label class="form-label form-label-top form-label-auto" id="label_24" for="input_24"> Housekeeping kept the room in order. </label>
          <div id="cid_24" class="form-input-wide" data-layout="full">
            <div class="form-multiple-column" data-columncount="3" role="group" aria-labelledby="label_24" data-component="radio">
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_24" class="form-radio" id="input_24_0" name="q24_theHotel24" value="Strongly Agree" />
                <label id="label_input_24_0" for="input_24_0"> Strongly Agree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_24" class="form-radio" id="input_24_1" name="q24_theHotel24" value="Agree" />
                <label id="label_input_24_1" for="input_24_1"> Agree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_24" class="form-radio" id="input_24_2" name="q24_theHotel24" value="Neutral" />
                <label id="label_input_24_2" for="input_24_2"> Neutral </label>
              </span>
              <span class="form-radio-item" style="clear:left">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_24" class="form-radio" id="input_24_3" name="q24_theHotel24" value="Disagree" />
                <label id="label_input_24_3" for="input_24_3"> Disagree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_24" class="form-radio" id="input_24_4" name="q24_theHotel24" value="Strongly Disagree" />
                <label id="label_input_24_4" for="input_24_4"> Strongly Disagree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_24" class="form-radio" id="input_24_5" name="q24_theHotel24" value="N/A" />
                <label id="label_input_24_5" for="input_24_5"> N/A </label>
              </span>
            </div>
          </div>
        </li>
      </ul>
      <ul class="form-section" id="section_25">
        <li id="cid_25" class="form-input-wide" data-type="control_collapse">
          <div class="form-collapse-table" id="collapse_25" data-component="collapse">
            <span class="form-collapse-mid" id="collapse-text_25">
              Restaurant
            </span>
            <span class="form-collapse-right form-collapse-right-show">
               
            </span>
          </div>
        </li>
        <li class="form-line" data-type="control_radio" id="id_26">
          <label class="form-label form-label-top form-label-auto" id="label_26" for="input_26"> The restaurant was clean. </label>
          <div id="cid_26" class="form-input-wide" data-layout="full">
            <div class="form-multiple-column" data-columncount="3" role="group" aria-labelledby="label_26" data-component="radio">
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_26" class="form-radio" id="input_26_0" name="q26_housekeepingKept" value="Strongly Agree" />
                <label id="label_input_26_0" for="input_26_0"> Strongly Agree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_26" class="form-radio" id="input_26_1" name="q26_housekeepingKept" value="Agree" />
                <label id="label_input_26_1" for="input_26_1"> Agree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_26" class="form-radio" id="input_26_2" name="q26_housekeepingKept" value="Neutral" />
                <label id="label_input_26_2" for="input_26_2"> Neutral </label>
              </span>
              <span class="form-radio-item" style="clear:left">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_26" class="form-radio" id="input_26_3" name="q26_housekeepingKept" value="Disagree" />
                <label id="label_input_26_3" for="input_26_3"> Disagree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_26" class="form-radio" id="input_26_4" name="q26_housekeepingKept" value="Strongly Disagree" />
                <label id="label_input_26_4" for="input_26_4"> Strongly Disagree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_26" class="form-radio" id="input_26_5" name="q26_housekeepingKept" value="N/A" />
                <label id="label_input_26_5" for="input_26_5"> N/A </label>
              </span>
            </div>
          </div>
        </li>
        <li class="form-line" data-type="control_radio" id="id_27">
          <label class="form-label form-label-top form-label-auto" id="label_27" for="input_27"> The price of the food was reasonable. </label>
          <div id="cid_27" class="form-input-wide" data-layout="full">
            <div class="form-multiple-column" data-columncount="3" role="group" aria-labelledby="label_27" data-component="radio">
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_27" class="form-radio" id="input_27_0" name="q27_housekeepingKept27" value="Strongly Agree" />
                <label id="label_input_27_0" for="input_27_0"> Strongly Agree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_27" class="form-radio" id="input_27_1" name="q27_housekeepingKept27" value="Agree" />
                <label id="label_input_27_1" for="input_27_1"> Agree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_27" class="form-radio" id="input_27_2" name="q27_housekeepingKept27" value="Neutral" />
                <label id="label_input_27_2" for="input_27_2"> Neutral </label>
              </span>
              <span class="form-radio-item" style="clear:left">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_27" class="form-radio" id="input_27_3" name="q27_housekeepingKept27" value="Disagree" />
                <label id="label_input_27_3" for="input_27_3"> Disagree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_27" class="form-radio" id="input_27_4" name="q27_housekeepingKept27" value="Strongly Disagree" />
                <label id="label_input_27_4" for="input_27_4"> Strongly Disagree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_27" class="form-radio" id="input_27_5" name="q27_housekeepingKept27" value="N/A" />
                <label id="label_input_27_5" for="input_27_5"> N/A </label>
              </span>
            </div>
          </div>
        </li>
        <li class="form-line" data-type="control_radio" id="id_28">
          <label class="form-label form-label-top form-label-auto" id="label_28" for="input_28"> I like the foods on the menu. </label>
          <div id="cid_28" class="form-input-wide" data-layout="full">
            <div class="form-multiple-column" data-columncount="3" role="group" aria-labelledby="label_28" data-component="radio">
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_28" class="form-radio" id="input_28_0" name="q28_housekeepingKept28" value="Strongly Agree" />
                <label id="label_input_28_0" for="input_28_0"> Strongly Agree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_28" class="form-radio" id="input_28_1" name="q28_housekeepingKept28" value="Agree" />
                <label id="label_input_28_1" for="input_28_1"> Agree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_28" class="form-radio" id="input_28_2" name="q28_housekeepingKept28" value="Neutral" />
                <label id="label_input_28_2" for="input_28_2"> Neutral </label>
              </span>
              <span class="form-radio-item" style="clear:left">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_28" class="form-radio" id="input_28_3" name="q28_housekeepingKept28" value="Disagree" />
                <label id="label_input_28_3" for="input_28_3"> Disagree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_28" class="form-radio" id="input_28_4" name="q28_housekeepingKept28" value="Strongly Disagree" />
                <label id="label_input_28_4" for="input_28_4"> Strongly Disagree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_28" class="form-radio" id="input_28_5" name="q28_housekeepingKept28" value="N/A" />
                <label id="label_input_28_5" for="input_28_5"> N/A </label>
              </span>
            </div>
          </div>
        </li>
        <li class="form-line" data-type="control_radio" id="id_29">
          <label class="form-label form-label-top form-label-auto" id="label_29" for="input_29"> food quality was good. </label>
          <div id="cid_29" class="form-input-wide" data-layout="full">
            <div class="form-multiple-column" data-columncount="3" role="group" aria-labelledby="label_29" data-component="radio">
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_29" class="form-radio" id="input_29_0" name="q29_housekeepingKept29" value="Strongly Agree" />
                <label id="label_input_29_0" for="input_29_0"> Strongly Agree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_29" class="form-radio" id="input_29_1" name="q29_housekeepingKept29" value="Agree" />
                <label id="label_input_29_1" for="input_29_1"> Agree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_29" class="form-radio" id="input_29_2" name="q29_housekeepingKept29" value="Neutral" />
                <label id="label_input_29_2" for="input_29_2"> Neutral </label>
              </span>
              <span class="form-radio-item" style="clear:left">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_29" class="form-radio" id="input_29_3" name="q29_housekeepingKept29" value="Disagree" />
                <label id="label_input_29_3" for="input_29_3"> Disagree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_29" class="form-radio" id="input_29_4" name="q29_housekeepingKept29" value="Strongly Disagree" />
                <label id="label_input_29_4" for="input_29_4"> Strongly Disagree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_29" class="form-radio" id="input_29_5" name="q29_housekeepingKept29" value="N/A" />
                <label id="label_input_29_5" for="input_29_5"> N/A </label>
              </span>
            </div>
          </div>
        </li>
        <li class="form-line" data-type="control_radio" id="id_30">
          <label class="form-label form-label-top form-label-auto" id="label_30" for="input_30"> service quality was good. </label>
          <div id="cid_30" class="form-input-wide" data-layout="full">
            <div class="form-multiple-column" data-columncount="3" role="group" aria-labelledby="label_30" data-component="radio">
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_30" class="form-radio" id="input_30_0" name="q30_housekeepingKept30" value="Strongly Agree" />
                <label id="label_input_30_0" for="input_30_0"> Strongly Agree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_30" class="form-radio" id="input_30_1" name="q30_housekeepingKept30" value="Agree" />
                <label id="label_input_30_1" for="input_30_1"> Agree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_30" class="form-radio" id="input_30_2" name="q30_housekeepingKept30" value="Neutral" />
                <label id="label_input_30_2" for="input_30_2"> Neutral </label>
              </span>
              <span class="form-radio-item" style="clear:left">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_30" class="form-radio" id="input_30_3" name="q30_housekeepingKept30" value="Disagree" />
                <label id="label_input_30_3" for="input_30_3"> Disagree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_30" class="form-radio" id="input_30_4" name="q30_housekeepingKept30" value="Strongly Disagree" />
                <label id="label_input_30_4" for="input_30_4"> Strongly Disagree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_30" class="form-radio" id="input_30_5" name="q30_housekeepingKept30" value="N/A" />
                <label id="label_input_30_5" for="input_30_5"> N/A </label>
              </span>
            </div>
          </div>
        </li>
        <li class="form-line" data-type="control_radio" id="id_31">
          <label class="form-label form-label-top form-label-auto" id="label_31" for="input_31"> The staff was polite. </label>
          <div id="cid_31" class="form-input-wide" data-layout="full">
            <div class="form-multiple-column" data-columncount="3" role="group" aria-labelledby="label_31" data-component="radio">
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_31" class="form-radio" id="input_31_0" name="q31_housekeepingKept31" value="Strongly Agree" />
                <label id="label_input_31_0" for="input_31_0"> Strongly Agree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_31" class="form-radio" id="input_31_1" name="q31_housekeepingKept31" value="Agree" />
                <label id="label_input_31_1" for="input_31_1"> Agree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_31" class="form-radio" id="input_31_2" name="q31_housekeepingKept31" value="Neutral" />
                <label id="label_input_31_2" for="input_31_2"> Neutral </label>
              </span>
              <span class="form-radio-item" style="clear:left">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_31" class="form-radio" id="input_31_3" name="q31_housekeepingKept31" value="Disagree" />
                <label id="label_input_31_3" for="input_31_3"> Disagree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_31" class="form-radio" id="input_31_4" name="q31_housekeepingKept31" value="Strongly Disagree" />
                <label id="label_input_31_4" for="input_31_4"> Strongly Disagree </label>
              </span>
              <span class="form-radio-item">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_31" class="form-radio" id="input_31_5" name="q31_housekeepingKept31" value="N/A" />
                <label id="label_input_31_5" for="input_31_5"> N/A </label>
              </span>
            </div>
          </div>
        </li>
      </ul>
      <ul class="form-section" id="section_34">
        <li id="cid_34" class="form-input-wide" data-type="control_collapse">
          <div class="form-collapse-table" id="collapse_34" data-component="collapse">
            <span class="form-collapse-mid" id="collapse-text_34">
              Ratings
            </span>
            <span class="form-collapse-right form-collapse-right-show">
               
            </span>
          </div>
        </li>
        <li class="form-line" data-type="control_rating" id="id_35">
          <label class="form-label form-label-top form-label-auto" id="label_35" for="input_35"> Please rate your stay overall </label>
          <div id="cid_35" class="form-input-wide" data-layout="full">
            <div id="input_35" name="q35_typeA35" data-component="rating" data-version="v2">
              <select name="q35_typeA35">
                <option value="1"> 1 </option>
                <option value="2"> 2 </option>
                <option value="3"> 3 </option>
                <option value="4"> 4 </option>
                <option value="5"> 5 </option>
              </select>
            </div>
          </div>
        </li>
        <li class="form-line" data-type="control_scale" id="id_37">
          <label class="form-label form-label-top form-label-auto" id="label_37" for="input_37"> Please rate how likely will you stay with us again </label>
          <div id="cid_37" class="form-input-wide" data-layout="full">
            <span class="form-sub-label-container" style="vertical-align:top">
              <div role="radiogroup" aria-labelledby="label_37 sublabel_input_37_description" cellPadding="4" cellSpacing="0" class="form-scale-table" data-component="scale">
                <div class="rating-item-group">
                  <div class="rating-item">
                    <span class="rating-item-title for-from">
                      <label for="input_37_worst" aria-hidden="true"> Not </label>
                    </span>
                    <input type="radio" aria-describedby="label_37" class="form-radio" name="q37_typeA37" value="1" title="1" id="input_37_1" />
                    <label for="input_37_1"> 1 </label>
                  </div>
                  <div class="rating-item">
                    <input type="radio" aria-describedby="label_37" class="form-radio" name="q37_typeA37" value="2" title="2" id="input_37_2" />
                    <label for="input_37_2"> 2 </label>
                  </div>
                  <div class="rating-item">
                    <input type="radio" aria-describedby="label_37" class="form-radio" name="q37_typeA37" value="3" title="3" id="input_37_3" />
                    <label for="input_37_3"> 3 </label>
                  </div>
                  <div class="rating-item">
                    <input type="radio" aria-describedby="label_37" class="form-radio" name="q37_typeA37" value="4" title="4" id="input_37_4" />
                    <label for="input_37_4"> 4 </label>
                  </div>
                  <div class="rating-item">
                    <span class="rating-item-title for-to">
                      <label for="input_37_best" aria-hidden="true"> Very </label>
                    </span>
                    <input type="radio" aria-describedby="label_37" class="form-radio" name="q37_typeA37" value="5" title="5" id="input_37_5" />
                    <label for="input_37_5"> 5 </label>
                  </div>
                </div>
              </div>
              <label class="form-sub-label" id="sublabel_input_37_description" style="border:0;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px;white-space:nowrap" aria-hidden="false"> 1 is Not, 5 is Very </label>
            </span>
          </div>
        </li>
        <li class="form-line" data-type="control_scale" id="id_38">
          <label class="form-label form-label-top form-label-auto" id="label_38" for="input_38"> How likely is it that you will recommend us to others? </label>
          <div id="cid_38" class="form-input-wide" data-layout="full">
            <span class="form-sub-label-container" style="vertical-align:top">
              <div role="radiogroup" aria-labelledby="label_38 sublabel_input_38_description" cellPadding="4" cellSpacing="0" class="form-scale-table" data-component="scale">
                <div class="rating-item-group">
                  <div class="rating-item">
                    <span class="rating-item-title for-from">
                      <label for="input_38_worst" aria-hidden="true"> Not </label>
                    </span>
                    <input type="radio" aria-describedby="label_38" class="form-radio" name="q38_pleaseRate" value="1" title="1" id="input_38_1" />
                    <label for="input_38_1"> 1 </label>
                  </div>
                  <div class="rating-item">
                    <input type="radio" aria-describedby="label_38" class="form-radio" name="q38_pleaseRate" value="2" title="2" id="input_38_2" />
                    <label for="input_38_2"> 2 </label>
                  </div>
                  <div class="rating-item">
                    <input type="radio" aria-describedby="label_38" class="form-radio" name="q38_pleaseRate" value="3" title="3" id="input_38_3" />
                    <label for="input_38_3"> 3 </label>
                  </div>
                  <div class="rating-item">
                    <input type="radio" aria-describedby="label_38" class="form-radio" name="q38_pleaseRate" value="4" title="4" id="input_38_4" />
                    <label for="input_38_4"> 4 </label>
                  </div>
                  <div class="rating-item">
                    <span class="rating-item-title for-to">
                      <label for="input_38_best" aria-hidden="true"> Very </label>
                    </span>
                    <input type="radio" aria-describedby="label_38" class="form-radio" name="q38_pleaseRate" value="5" title="5" id="input_38_5" />
                    <label for="input_38_5"> 5 </label>
                  </div>
                </div>
              </div>
              <label class="form-sub-label" id="sublabel_input_38_description" style="border:0;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px;white-space:nowrap" aria-hidden="false"> 1 is Not, 5 is Very </label>
            </span>
          </div>
        </li>
        <li class="form-line" data-type="control_textarea" id="id_39">
          <label class="form-label form-label-top form-label-auto" id="label_39" for="input_39"> Any Comments? </label>
          <div id="cid_39" class="form-input-wide" data-layout="full">
            <textarea id="input_39" class="form-textarea" name="q39_typeA39" style="width:648px;height:163px" data-component="textarea" aria-labelledby="label_39"></textarea>
          </div>
        </li>
        <li class="form-line" data-type="control_button" id="id_2">
          <div id="cid_2" class="form-input-wide" data-layout="full">
            <div data-align="auto" class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField">
              <button id="input_2" type="submit" class="form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">
                Submit
              </button>
            </div>
          </div>
        </li>
        <li style="display:none">
          Should be Empty:
          <input type="text" name="website" value="" />
        </li>
      </ul>
  </div>
  <script>
  JotForm.showJotFormPowered = "new_footer";
  </script>
  <script>
  JotForm.poweredByText = "Powered by Jotform";
  </script>
  <input type="hidden" class="simple_spc" id="simple_spc" name="simple_spc" value="221436219603551" />
  <script type="text/javascript">
  var all_spc = document.querySelectorAll("form[id='221436219603551'] .si" + "mple" + "_spc");
for (var i = 0; i < all_spc.length; i++)
{
  all_spc[i].value = "221436219603551-221436219603551";
}
  </script>
  <div class="formFooter-heightMask">
  </div>
 
    
  </div>
</form>
<script src="https://cdn.jotfor.ms//js/vendor/smoothscroll.min.js?v=3.3.33455"></script>
<script src="https://cdn.jotfor.ms//js/errorNavigation.js?v=3.3.33455"></script>