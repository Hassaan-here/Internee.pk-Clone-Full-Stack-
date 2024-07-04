// Animation
document.addEventListener("DOMContentLoaded",function(){
    const observer= new IntersectionObserver ((entries)=>{
        entries.forEach((entry) => {
          if(entry.isIntersecting){
            entry.target.classList.add('fadeIn-Bottom');
          }else{
            entry.target.classList.remove('fadeIn-Bottom');
          }
        });
      })
      
      const hiddenElements= document.querySelectorAll('.hidden');
      hiddenElements.forEach((el)=>observer.observe(el));
});