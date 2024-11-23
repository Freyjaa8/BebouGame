<?php
if (isset($_SESSION['error'])) {
    $error = addslashes($_SESSION['error']);
    unset($_SESSION['error']); // Supprimer après utilisation
    echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('.modal').style.display = 'block';
            document.querySelector('.modal').style.height='140px';
            document.querySelector('.modal-overlay').style.display = 'block';
            document.querySelector('.modal-message').textContent = '$error';
            document.getElementById('btnClose').textContent = 'Got it !';
        });
    </script>";
}
if (isset($_SESSION['gameover'])) {
    $gameover = addslashes($_SESSION['gameover']);
    unset($_SESSION['gameover']); // Supprimer après utilisation
    echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('.modal').style.display = 'block';
            document.querySelector('.modal-overlay').style.display = 'block';
            document.querySelector('.modal-message').textContent = '$gameover';
           document.getElementById('btnClose').textContent = 'Recommencer';
        });
    </script>";
}

if (isset($_SESSION['result'])) {
    $result = addslashes($_SESSION['result']);
    unset($_SESSION['result']); // Supprimer après utilisation
    echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('.modal').style.display = 'block';
            document.querySelector('.modal-overlay').style.display = 'block';
            document.querySelector('.modal').style.height='100%';
            document.querySelector('.modal').style.width='100%';
            document.querySelector('.modal').style.top = '50%';
            document.querySelector('.modal').style.position='100%';
            document.querySelector('.modal-message').textContent = '$result';
            document.getElementById('cry').innerHTML = '<img src=\"GIFS/love2.gif\" alt=\"Choupi heureux\">';
           document.getElementById('btnClose').textContent = 'Recommencer';
        });
    </script>";
}
?>
<div class="modal-overlay"></div>
<div class="modal">
    <p class="modal-message"></p>
    <button onclick="closeModal()" id="btnClose">OK</button>
<div id="cry"><img src="GIFS/ChoupiCry.gif" alt=""></div>
    
</div>
