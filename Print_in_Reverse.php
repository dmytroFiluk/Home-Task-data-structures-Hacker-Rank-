<?php

/**
 * @param SinglyLinkedListNode $lHead
 */
function reversePrint(SinglyLinkedListNode $lHead)
{
    $stack = array();
    $currentNode = $lHead;
    while ($currentNode !== null) {
        $stack[] = $currentNode->data;
        $currentNode = $currentNode->next;
    }

    $nodeData = array_pop($stack);
    while ($nodeData !== null) {
        print(sprintf("%d\n", $nodeData));
        $nodeData = array_pop($stack);
    }
}
