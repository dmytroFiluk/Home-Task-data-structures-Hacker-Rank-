<?php

/**
 * @param SinglyLinkedListNode $llist
 * @param int $data
 * @param int $position
 * @return SinglyLinkedListNode
 */
function insertNodeAtPosition(SinglyLinkedListNode $llist, int $data, int $position): SinglyLinkedListNode
{
    if ($position < 1000 && $position > 0) {
        $currentNode = $llist;
        for ($i = 1; $i <= $position; $i++) {
            if ($position !== $i) {
                $currentNode = $currentNode->next;
            } else {
                $nextNodeReference = $currentNode->next;
                $currentNode->next = new SinglyLinkedListNode($data);
                $currentNode->next->next = $nextNodeReference;
            }
        }
    }

    return $llist;
}
