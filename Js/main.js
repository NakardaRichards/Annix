let ansArr = [];
var choice;
var allChoice = [];

function nextQ(x){
     $("section").css('display','none');
     $(x).css('display','flex');
}

function saveAns(x){
     ansArr.push(x);
}

function submit(x,y){
     nextQ(x);
     saveAns(y);
     console.log(ansArr);
     allChoice = [];
}

$('.choice').click(function(e){
     choice = e.target.value;
     console.log(choice);
     $('.choice').removeClass('green-bg');
     $(this).addClass('green-bg');
});

$('.selects').click(function(e){
     if($(this).hasClass('green-bg')){
          allChoice = allChoice.filter(function(kick) {
               return kick !== e.target.value;
          })
     }
     else{
          allChoice.push(e.target.value) ;
          console.log(allChoice);
     }
     $(this).toggleClass('green-bg');
});

function fSubmit(x,y){
     nextQ(x);
     saveAns(y);
     for(let i = 0; i < ansArr.length; i++){
          $('input[name="q'+(i+1)+'"]').val(ansArr[i]);
          console.log($('input[name="q'+(i+1)+'"]').val());
     }
}

console.log(ansArr);



// $(".lname-next").click(function(){
//      // Check if input is valid

//      $( "label[name = 'lname']" ).css('display','block');
//      $( "input[name = 'lname']" ).css('display','inline');
//      $( ".email-next" ).css('display','inline');
// });

// $(".email-next").click(function(){
//      // Check if input is valid

//      $( "label[name = 'email']" ).css('display','block');
//      $( "input[name = 'email']" ).css('display','inline');
//      $( ".pwd-next" ).css('display','inline');
// });

// $(".pwd-next").click(function(){
//      // Check if input is valid

//      $( "label[name = 'pwd']" ).css('display','block');
//      $( "input[name = 'pwd']" ).css('display','inline');
//      $( ".cpwd-next" ).css('display','inline');
// });

// $(".cpwd-next").click(function(){
//      // Check if input is valid

//      $( "label[name *= 'cpwd']" ).css('display','block');
//      $( "input[name *= 'cpwd']" ).css('display','inline');

//      $( ".signup-next" ).css('display','inline');
//      $( ".login-next" ).css('display','inline');
// });

// $( ".signup-next" ).click(function(){
//      $( ".sub-btn" ).css('display','flex');
// });
// $( ".login-next" ).click(function(){
//      $( ".sub-btn" ).css('display','flex');
// });
