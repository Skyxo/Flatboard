<div class="board-head">

    @if (!isset($onlyTitle))
    <div class="board-icon">
        <i class="{{ $iconLibaryClass }} {{ $iconLibaryClass }}-{{ $icon }}"></i>
    </div>
    @endif

    <div class="board-title">
        <a href="{{ $link }}" title="{{ $title }}" class="board-title-link">{{ $title }}</a>
        @if (!isset($onlyTitle))
            <span class="board-description hidden-sm hidden-xs">{{ $description }}</span>
        @endif
    </div>

    @if (!isset($onlyTitle))
    @if (!isset($category))
    <div class="board-last-thread hidden-sm hidden-xs">
        <span>Letzer Post</span>
    </div>
    @endif

    <div class="board-badge">
        <span class="badge">{{ $newPosts }}</span>
    </div>
    @endif

</div>