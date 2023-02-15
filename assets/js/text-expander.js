document.addEventListener('DOMContentLoaded',()=>{
    const buttons = document.querySelectorAll('.testimonial button');
    const shortenedVersion = document.querySelectorAll('.testimonial .shortened');
    const expandedVersion = document.querySelectorAll('.testimonial .expanded');
    buttons.forEach((button,i) => {
        button.addEventListener('click',()=>{
            if(expandedVersion[i].style.display=='none'){
                expandedVersion[i].style.display="block";
                shortenedVersion[i].style.display="none";
                button.innerText="zwiń";
            }
            else{
                expandedVersion[i].style.display="none";
                shortenedVersion[i].style.display="block";
                button.innerText="rozwiń";
            }
            
        });
    });
});