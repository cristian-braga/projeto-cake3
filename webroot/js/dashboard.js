$(document).ready(function() {
  // Apresentar ou ocultar o menu
  $(".sidebar-toggle").on("click", function() {
    $(".sidebar").toggleClass("toggled");
  });

  // Carregar aberto o submenu
  let active = $(".sidebar .active");
  if (active.length && active.parent(".collapse").length) {
    let parent = active.parent(".collapse");
    parent.prev("a").attr("aria-expanded", true);
    parent.addClass("show");
  }
});

function previewImagem() {
  let imagem = document.querySelector('input[name=imagem]').files[0];
  let preview = document.querySelector('#preview-img');

  let reader = new FileReader();
  reader.onloadend = function () {
    preview.src = reader.result;
  }

  if (imagem) {
    reader.readAsDataURL(imagem);
  } else {
    preview.src = "";
  }
}