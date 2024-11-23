<script> 
let currentHealth = <?php echo $_SESSION['bebou']->getHealth(); ?>;
let currentPosition = <?php echo $_SESSION['bebou']->getPosition(); ?>;
console.log(currentPosition);

let maxHealth = 100;

    function updateHealth ( current, max )
{
    const healthbar = document.getElementById( 'health' );
    const healthPourcentage = ( current / max ) * 100;
    healthbar.style.width =  '100%';
   
    setTimeout(() => {
        healthbar.style.transition = 'width 1s ease-in-out';// Active la transition

        // Applique le pourcentage de vie avec la transition
        healthbar.style.width = healthPourcentage + '%';

        // Applique les couleurs en fonction de la vie restante
        if (healthPourcentage > 60) {
            healthbar.style.background = 'linear-gradient(to right, #34d399, #10b981)'; // Vert
        } else if (healthPourcentage > 30) {
            healthbar.style.background = 'linear-gradient(90deg, #ff9a3c, #ff6f00)'; // Orange
        } else {
            healthbar.style.background = 'linear-gradient(90deg, #ff4e50, #d72638)'; // Rouge
            healthbar.classList.add('health-bar-critical');
        }
    }, 100);
}

   
    updateHealth(currentHealth, maxHealth);

    function closeModal() {
    document.querySelector('.modal').style.display = 'none';
    document.querySelector('.modal-overlay').style.display = 'none';
}

function moveBebou(){
    const bebou = document.getElementById('bebouart');
    const translateX = currentPosition * 100;
    bebou.style.transform = `translateX(${translateX}px)`;
}
moveBebou();
 </script>
