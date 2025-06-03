const intro_isSelected = document.getElementById('intro-checkbox');
const edu_isSelected = document.getElementById('edu-checkbox');
const about_isSelected = document.getElementById('about-checkbox');
const project_isSelected = document.getElementById('project-checkbox');

const intro_section = document.getElementById('intro-section');
const edu_section = document.getElementById('edu-section');
const about_section = document.getElementById('about-section');
const project_secton =document.getElementById('project-section');

const title = document.getElementById('title');

function disableIntro() {
    if(intro_isSelected.checked){
        intro_section.querySelectorAll('input', 'textarea').forEach(input =>{
        input.disabled = true;
    });
    title.disabled = true;
    
    }
}