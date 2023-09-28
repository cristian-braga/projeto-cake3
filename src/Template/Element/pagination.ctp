<?php
$paginator = $this->Paginator->setTemplates([
  'first' => '<li class="page-item"><a href="{{url}}" class="page-link">Primeira</a></li>',
  'prevActive' => '<li class="page-item"><a href="{{url}}" class="page-link"><</a></li>',
  'number' => '<li class="page-item"><a href="{{url}}" class="page-link">{{text}}</a></li>',
  'current' => '<li class="page-item active"><a href="{{url}}" class="page-link">{{text}}</a></li>',
  'nextActive' => '<li class="page-item"><a href="{{url}}" class="page-link">></a></li>',
  'last' => '<li class="page-item"><a href="{{url}}" class="page-link">Última</a></li>'
]);
?>
<nav aria-label="paginacao">
  <ul class="pagination pagination-sm justify-content-center">
    <?php
    echo $paginator->first();
    if ($paginator->hasPrev()) {
      echo $paginator->prev();
    }
    echo $paginator->numbers();
    if ($paginator->hasNext()) {
      echo $paginator->next();
    }
    echo $paginator->last();
    ?>
  </ul>
</nav>