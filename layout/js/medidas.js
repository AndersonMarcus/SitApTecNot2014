/* 
 *medidas.js
 */
var spanLargura = document.getElementbyId('largura');
var spanAltura = document.getElementbyId('altura');
//pega a largura da janela
spanLargura.innerHTML = window.innerWidth + ' px';
//pega a altura da janela
spanAltura.innerHTML = window.innerWidth; + ' px';

//ao redimensionar a janela
window.onresize = function(){
spanLargura.innerHTML = window.innerWidth + ' px';
spanAltura.innerHTML = window.innerWidth; + ' px';
};

