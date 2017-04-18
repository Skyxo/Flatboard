<?php
/**
 *
 *
 * @package     Flatboard
 * @subpackage
 * @version
 * @author      Till S. <dev@till-s.de>
 * @since       18.04.2017 11:31
 */

namespace Tests\Unit\Board;


use App\Models\Board;
use Tests\TestCase;

class BoardTest extends TestCase
{

    public function testBasicTest() {

        //print_r($this->insert());

        /** @var Board[] $boardList */
        $boardList = Board::roots();

        //print_r($boardList->get());

        foreach ($boardList->get() as $board) {
            echo '|- '. $board->title ."\n";

            foreach ($board->childBoards() as $child) {
                echo '  |-'. $child->title ."\n";

                foreach ($child->childBoards() as $chi) {
                    echo '    |-'. $chi->title ."\n";
                }

            }
        }
    }

    private function insert() {

        $root1 = Board::create([
            'title' => 'Einfaches Forum',
            'type' => 1
        ]);

        $root2 = Board::create([
            'title' => 'Kategorie',
            'type' => 2
        ]);

        $child1 = Board::create([
            'title' => 'Unterforum 1',
            'type' => 1
        ]);

        $child2 = Board::create([
            'title' => 'Unterforum 2',
            'type' => 1
        ]);

        $child3 = Board::create([
            'title' => 'Unterforum 3',
            'type' => 1
        ]);

        $child4 = Board::create([
            'title' => 'Unterforum U',
            'type' => 1
        ]);


        $child1->makeChildOf($root2);
        $child2->makeChildOf($root2);
        $child3->makeChildOf($child2);
        $child4->makeChildOf($child2);

    }

}