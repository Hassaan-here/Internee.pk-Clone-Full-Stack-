// Animation
document.addEventListener("DOMContentLoaded",function(){
    const observer= new IntersectionObserver ((entries)=>{
        entries.forEach((entry) => {
          if(entry.isIntersecting){
            entry.target.classList.add('slide-right');
          }else{
            entry.target.classList.remove('slide-right');
          }
        });
      })
      
      const hiddenElements= document.querySelectorAll('.right');
      hiddenElements.forEach((el)=>observer.observe(el));
      
});