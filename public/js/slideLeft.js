// Animation
document.addEventListener("DOMContentLoaded",function(){
    const observer= new IntersectionObserver ((entries)=>{
        entries.forEach((entry) => {
          if(entry.isIntersecting){
            entry.target.classList.add('slide-left');
          }else{
            entry.target.classList.remove('slide-left');
          }
        });
      })
      
      const hiddenElements= document.querySelectorAll('.left');
      hiddenElements.forEach((el)=>observer.observe(el));
      
});