(function() {
  function incrementNumber(node,nb) {

    let sectionNumbers = document.onload('.sectionNumbers');   
    let sectionCounter = 0;
    let numbers = document.querySelector("."+node);

    let n = nb;
    let cpt = 0; 
    let delay = 1000; 
    let delta = Math.ceil((delay * 15000) / n);

    function countdownNumbers() {
      numbers.innerHTML = ++cpt;
      if( cpt < n ) { 
        setTimeout(countdownNumbers, numbers);
      }
    }

    document.addEventListener('scroll', function() {
      sectionCounter++;        
      if(sectionCounter == 1) {
        setTimeout(countdownNumbers, numbers);
      }
    }), {passive:true};
  }
  setTimeout(function(){ 
    incrementNumber("number1", 156);
    incrementNumber("number2", 456);
    incrementNumber("number3", 678);
  }, 2000);
})();
