<div class="flex items-center justify-between">
    <div>
        @if ($paginator->onFirstPage())
            <span class="mr-2 px-2 py-1 bg-gray-300 rounded cursor-not-allowed"><<</span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="mr-2 px-2 py-1 bg-blue-500 text-white rounded hover:bg-blue-600"><<</a>
        @endif

        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="px-2 py-1 bg-blue-500 text-white rounded hover:bg-blue-600">>></a>
        @else
            <span class="px-2 py-1 bg-gray-300 rounded cursor-not-allowed">>></span>
        @endif
    </div>
</div>
