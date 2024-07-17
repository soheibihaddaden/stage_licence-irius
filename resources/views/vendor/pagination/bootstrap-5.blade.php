@if ($paginator->onFirstPage())
    <li class="page-item disabled">
        <span class="page-link">Précédent</span>
    </li>
@else
    <li class="page-item">
        <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">Précédent</a>
    </li>
@endif

@if ($paginator->hasMorePages())
    <li class="page-item">
        <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">Suivant</a>
    </li>
@else
    <li class="page-item disabled">
        <span class="page-link">Suivant</span>
    </li>
@endif



