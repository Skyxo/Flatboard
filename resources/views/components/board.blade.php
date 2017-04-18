<div class="board @if ($board->type == 1) simple-board @elseif ($board->type == 2) category @endif" data-board-id="{{ $board->boardID }}">

    @component('components.board-head',
        [
            'iconLibaryClass' => $board->iconLibary,
            'icon' => $board->icon,
            'title' => $board->title,
            'description' => $board->description,
            'link' => '#',
            'newPosts' => 'N/A'
        ])

        @if ($board->type == 2)
            @slot("category")
                true
            @endslot
        @endif
    @endcomponent

        {? $childBoards = $board->childBoards() ?}

        @if (count($childBoards))

            <div class="subboard-list">

                    @foreach ($childBoards as $childBoard)

                            <div class="subboard @if ($childBoard->type == 1) simple-subboard @elseif ($childBoard->type == 2) category @endif">

                                    @component('components.board-head',
                                        [
                                            'iconLibaryClass' => $childBoard->iconLibary,
                                            'icon' => $childBoard->icon,
                                            'title' => $childBoard->title,
                                            'description' => $childBoard->description,
                                            'link' => '#',
                                            'newPosts' => 'N/A'
                                        ])

                                            @if ($childBoard->type == 2)
                                                    @slot("category")
                                                            true
                                                    @endslot
                                            @endif
                                    @endcomponent

                                    {? $childs = $childBoard->childBoards() ?}

                                    @if (count($childs))

                                            <div class="subboard-list">

                                                    @foreach ($childs as $child)
                                                            <div class="subboard last-grade-subboard">
                                                                    @component('components.board-head',
                                                                        [
                                                                            'title' => $child->title,
                                                                            'link' => '#',
                                                                            'onlyTitle' => ''
                                                                        ])
                                                                    @endcomponent
                                                            </div>
                                                    @endforeach
                                            </div>

                                    @endif
                            </div>

                    @endforeach

            </div>

        @endif



</div>