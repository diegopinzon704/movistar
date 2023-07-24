
<script>
        function agrandarTitulo() {
            var titulo = document.getElementById("titulo");
            var fontSize = parseFloat(window.getComputedStyle(titulo).fontSize);
            titulo.style.fontSize = (fontSize + 4) + "px";
        }

        function empequenecerTitulo() {
            var titulo = document.getElementById("titulo");
            var fontSize = parseFloat(window.getComputedStyle(titulo).fontSize);
            titulo.style.fontSize = (fontSize - 4) + "px";
        }

        function iniciarInteraccion() {
            setInterval(function() {
                agrandarTitulo();
                setTimeout(empequenecerTitulo, 500);
            }, 1000);
        }
    </script>