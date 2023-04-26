<div class="col-12 pb-1">
    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center mb-3">
          <li class="page-item {{ ($products->currentPage() <= 1)?"disabled":"" }}">
            <a class="page-link" href="{{ $products->url(1) }}" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
              <span class="sr-only">Previous</span>
            </a>
          </li>
          @for ($i = 1; $i <= $products->lastPage(); $i++)
            <li class="page-item {{ ($products->currentPage() == $i) ? "active" : "" }}">
              <a class="page-link" href="{{ $products->url($i) }}">{{ $i }}</a>
            </li>
          @endfor
          <li class="page-item {{ ($products->currentPage() == $products->lastPage()) ? "disabled" : "" }}">
            <a class="page-link" href="{{ $products->url($products->currentPage()+1) }}" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
              <span class="sr-only">Next</span>
            </a>
          </li>
        </ul>
    </nav>
</div>