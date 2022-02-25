var room = 1;
var max_que=0;

var rangeSlider = function(){
  var slider = $('.range-slider'),
      range = $('.range-slider__range'),
      value = $('.range-slider__value');

  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $(this).next(value).html(this.value);
    });
  });
};

rangeSlider();

//Add interview Questions

function add_interview_questions() {
if(room<=9){
    room++;
    var objTo = document.getElementById('education_fields');

    var divtest = document.createElement("div");
	  divtest.setAttribute("class", "form-group removeclass"+room);
	  var rdiv = 'removeclass'+room;
    divtest.innerHTML = '    <div class="row justify-content-center align-items-center "><div class="col-lg-2 col-sm-4-10 col-xs-2-10 mb-3">Question '+room+' <small><sub></sub></small></div><div class="col-lg-4  col-xs-2-10 col-sm-2-10 mb-3 "><input type="text"  name="iq[]" class="form-control form-control-user" placeholder=""></div><div class="col-lg-1  col-xs-2-10 col-sm-2-10 mb-3 "><button class="btn btn-danger" type="button"  onclick="remove_education_fields('+ room +');"> <i class="fas fa-minus"></i> </button></div></div>';

    objTo.appendChild(divtest);
}
else{
  if(max_que!=1){
  var objTo = document.getElementById('education_fields');
  var divtest = document.createElement("div");
  divtest.innerHTML=' <div class="row justify-content-center align-items-center "><div class="col-lg-6 col-sm-4-10 col-xs-2-10 mb-3 text-danger">*Maximum 10 Questions</div></div>';
    objTo.appendChild(divtest);
    max_que++
}}}

   function remove_education_fields(rid) {
	   $('.removeclass'+rid).remove();
   }
