// Função para copiar o texto
function copyText(elementId) {
    // Obtém o elemento pelo ID
    const textElement = document.getElementById(elementId);
    
    // Cria uma área de texto temporária
    const tempTextArea = document.createElement('textarea');
    tempTextArea.value = textElement.innerText;
    
    // Adiciona a área de texto temporária ao corpo
    document.body.appendChild(tempTextArea);
    
    // Seleciona o texto na área de texto temporária
    tempTextArea.select();
    tempTextArea.setSelectionRange(0, 99999); // Para dispositivos móveis
    
    // Copia o texto selecionado
    document.execCommand('copy');
    
    // Remove a área de texto temporária
    document.body.removeChild(tempTextArea);
    
    // Alerta ou outra forma de feedback ao usuário
    alert('Texto copiado: ' + textElement.innerText);
}

// Adiciona um event listener ao elemento <h3>
document.getElementById('copy-text').addEventListener('click', function() {
    copyText('copy-text');
});
