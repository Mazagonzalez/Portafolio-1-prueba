<div class="flex justify-center mt-4">
    <div class="gap-1 font-mono row">
        <p id="writing-text" class="text-4xl font-bold"></p>
        <span class="text-4xl font-light slash">|</span>
    </div>
</div>

<script>
   const texts = [
        "DEVELOPER",
        "FRONTEND",
        "UX/UI - DESING"
    ];

    const colors = ["#F02F23", "#3C24F0", "#6124F0"]; // Colores para las oraciones
    const textContainer = document.getElementById('writing-text');
    let currentTextIndex = 0;

    function writeText() {
        const currentText = texts[currentTextIndex];
        const sentenceContainer = document.createElement('div');

        sentenceContainer.classList.add('sentence');
        sentenceContainer.style.color = colors[currentTextIndex % colors.length]; // Asigna un color diferente a cada oración
        textContainer.appendChild(sentenceContainer);

        let index = 0;

        function addLetter() {
            if (index < currentText.length) {
            const letterSpan = document.createElement('span');
            letterSpan.textContent = currentText.charAt(index);
            letterSpan.classList.add('letter');
            sentenceContainer.appendChild(letterSpan);
            index++;
            setTimeout(addLetter, 200); // Ajusta el tiempo entre cada letra (en milisegundos)
            } else {
            setTimeout(() => {
                textContainer.innerHTML = ''; // Limpia el contenido del contenedor
                currentTextIndex = (currentTextIndex + 1) % texts.length; // Avanza al siguiente texto
                writeText(); // Llama a la función para escribir el próximo texto
            }, 1500); // Ajusta el tiempo entre oraciones (en milisegundos)
            }
        }

        addLetter();
    }

    writeText();

</script>
